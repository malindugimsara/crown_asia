<?php
session_start();
require_once '../db.php';

// Security check
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

$msg = '';
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'added') $msg = "<div class='alert alert-success alert-dismissible fade show border-0 shadow-sm'><i class='bi bi-check-circle-fill me-2'></i>Article published successfully!<button type='button' class='btn-close' data-bs-dismiss='alert'></button></div>";
    if ($_GET['msg'] == 'updated') $msg = "<div class='alert alert-success alert-dismissible fade show border-0 shadow-sm'><i class='bi bi-check-circle-fill me-2'></i>Article updated successfully!<button type='button' class='btn-close' data-bs-dismiss='alert'></button></div>";
    if ($_GET['msg'] == 'trashed') $msg = "<div class='alert alert-warning alert-dismissible fade show border-0 shadow-sm'><i class='bi bi-trash3-fill me-2'></i>Article moved to Trash! You can restore it anytime from the Trash tab.<button type='button' class='btn-close' data-bs-dismiss='alert'></button></div>";
    if ($_GET['msg'] == 'restored') $msg = "<div class='alert alert-success alert-dismissible fade show border-0 shadow-sm'><i class='bi bi-arrow-counterclockwise me-2'></i>Article restored successfully to active list!<button type='button' class='btn-close' data-bs-dismiss='alert'></button></div>";
    if ($_GET['msg'] == 'deleted_permanent') $msg = "<div class='alert alert-danger alert-dismissible fade show border-0 shadow-sm'><i class='bi bi-exclamation-octagon-fill me-2'></i>Article permanently deleted!<button type='button' class='btn-close' data-bs-dismiss='alert'></button></div>";
}

// Crown Asia Categories Mapping
$cat_names = [
    'due-diligence'   => 'Due Diligence',
    'usdt-settlement' => 'USDT & Settlement',
    'strategy'        => 'Multi-Sector Strategy',
    'compliance'      => 'Risk & Governance',
    'real-estate'     => 'Commercial Real Estate',
    'forex'           => 'Forex Trading'
];

// Helper slugify function
function slugify($text) {
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    return empty($text) ? 'article-' . time() : $text;
}

// 1. Toggle Publish / Hide Status
if (isset($_GET['toggle_publish']) && isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $status = (int) $_GET['toggle_publish'];
    $new_status = ($status == 1) ? 0 : 1;
    $stmt = $conn->prepare("UPDATE blog_posts SET is_published = ? WHERE id = ?");
    $stmt->execute([$new_status, $id]);

    if ((!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') || isset($_GET['ajax'])) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'new_status' => $new_status]);
        exit;
    }

    header("Location: manage_blog.php?msg=updated");
    exit;
}

// 2. Toggle Featured Status
if (isset($_GET['toggle_featured']) && isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $status = (int) $_GET['toggle_featured'];
    $new_status = ($status == 1) ? 0 : 1;

    $stmt = $conn->prepare("UPDATE blog_posts SET is_featured = ? WHERE id = ?");
    $stmt->execute([$new_status, $id]);

    header("Location: manage_blog.php?msg=updated");
    exit;
}

// 3. Soft Delete (Move to Trash)
if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    $stmt = $conn->prepare("UPDATE blog_posts SET deleted_at = NOW() WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: manage_blog.php?msg=trashed");
    exit;
}

// 4. Restore from Trash
if (isset($_GET['restore'])) {
    $id = (int) $_GET['restore'];
    $stmt = $conn->prepare("UPDATE blog_posts SET deleted_at = NULL WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: manage_blog.php?view=trash&msg=restored");
    exit;
}

// 5. Force / Permanent Delete
if (isset($_GET['force_delete'])) {
    $id = (int) $_GET['force_delete'];
    $stmt = $conn->prepare("SELECT cover_image FROM blog_posts WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row && !empty($row['cover_image'])) {
        if (strpos($row['cover_image'], 'uploads/') === 0 && file_exists("../" . $row['cover_image'])) {
            @unlink("../" . $row['cover_image']);
        }
    }
    $delStmt = $conn->prepare("DELETE FROM blog_posts WHERE id = ?");
    $delStmt->execute([$id]);
    header("Location: manage_blog.php?view=trash&msg=deleted_permanent");
    exit;
}

// Edit Mode Check
$edit_mode = false;
$edit_data = null;
if (isset($_GET['edit'])) {
    $edit_id = (int) $_GET['edit'];
    $stmt = $conn->prepare("SELECT * FROM blog_posts WHERE id = ?");
    $stmt->execute([$edit_id]);
    $edit_data = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($edit_data) {
        $edit_mode = true;
    }
}

// Add or Update Article POST Handler
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title         = trim($_POST['title'] ?? '');
    $category_slug = trim($_POST['category_slug'] ?? 'due-diligence');
    $category_name = $cat_names[$category_slug] ?? 'Due Diligence';
    $author_name   = trim($_POST['author_name'] ?? 'Crown Asia Research Desk');
    $author_role   = trim($_POST['author_role'] ?? 'Investment Strategy Team');
    $read_time     = trim($_POST['read_time'] ?? '5 Min Read');
    $excerpt       = trim($_POST['excerpt'] ?? '');
    $content       = trim($_POST['content'] ?? '');
    $is_featured   = isset($_POST['is_featured']) ? 1 : 0;
    $is_published  = isset($_POST['is_published']) ? 1 : 0;

    $slug_raw = !empty($_POST['slug']) ? trim($_POST['slug']) : $title;
    $slug = slugify($slug_raw);

    $target_dir = "../uploads/blog/";
    if (!file_exists($target_dir)) {
        @mkdir($target_dir, 0777, true);
    }

    if (isset($_POST['update_article'])) {
        $id = (int) $_POST['article_id'];

        $chkStmt = $conn->prepare("SELECT id FROM blog_posts WHERE slug = ? AND id != ?");
        $chkStmt->execute([$slug, $id]);
        if ($chkStmt->fetch()) {
            $slug .= '-' . $id;
        }

        $cover_image = $edit_data['cover_image'] ?? 'assets/images/blog/blog-1.webp';

        if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
            $ext = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
            $allowed = ['jpg', 'jpeg', 'png', 'webp', 'avif'];
            if (in_array($ext, $allowed)) {
                $image_name = 'ca_blog_' . time() . '_' . rand(100, 999) . '.' . $ext;
                $target_file = $target_dir . $image_name;
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    if (!empty($edit_data['cover_image']) && strpos($edit_data['cover_image'], 'uploads/') === 0 && file_exists("../" . $edit_data['cover_image'])) {
                        @unlink("../" . $edit_data['cover_image']);
                    }
                    $cover_image = "uploads/blog/" . $image_name;
                }
            }
        }

        $sql = "UPDATE blog_posts SET 
                title = ?, 
                slug = ?,
                category = ?, 
                category_slug = ?, 
                author_name = ?,
                author_role = ?,
                read_time = ?, 
                excerpt = ?, 
                content = ?,
                cover_image = ?,
                is_featured = ?,
                is_published = ?
                WHERE id = ?";

        $stmt = $conn->prepare($sql);
        if ($stmt->execute([$title, $slug, $category_name, $category_slug, $author_name, $author_role, $read_time, $excerpt, $content, $cover_image, $is_featured, $is_published, $id])) {
            header("Location: manage_blog.php?msg=updated");
            exit;
        } else {
            $msg = "<div class='alert alert-danger'>Failed to update article.</div>";
        }
    } elseif (isset($_POST['add_article'])) {
        $chkStmt = $conn->prepare("SELECT id FROM blog_posts WHERE slug = ?");
        $chkStmt->execute([$slug]);
        if ($chkStmt->fetch()) {
            $slug .= '-' . time();
        }

        $cover_image = "assets/images/blog/blog-1.webp";

        if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
            $ext = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
            $allowed = ['jpg', 'jpeg', 'png', 'webp', 'avif'];
            if (in_array($ext, $allowed)) {
                $image_name = 'ca_blog_' . time() . '_' . rand(100, 999) . '.' . $ext;
                $target_file = $target_dir . $image_name;
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $cover_image = "uploads/blog/" . $image_name;
                }
            }
        }

        $sql = "INSERT INTO blog_posts 
                (title, slug, category, category_slug, author_name, author_role, read_time, cover_image, excerpt, content, is_featured, is_published, created_at) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

        $stmt = $conn->prepare($sql);
        if ($stmt->execute([$title, $slug, $category_name, $category_slug, $author_name, $author_role, $read_time, $cover_image, $excerpt, $content, $is_featured, $is_published])) {
            header("Location: manage_blog.php?msg=added");
            exit;
        } else {
            $msg = "<div class='alert alert-danger'>Database error: Failed to save article.</div>";
        }
    }
}

// Tab View Mode
$view = (isset($_GET['view']) && $_GET['view'] === 'trash') ? 'trash' : 'active';

// Counts for tabs (PDO)
$count_active = 0;
$count_trash  = 0;
$articles     = [];

try {
    $count_active = (int) $conn->query("SELECT COUNT(*) FROM blog_posts WHERE deleted_at IS NULL")->fetchColumn();
    $count_trash  = (int) $conn->query("SELECT COUNT(*) FROM blog_posts WHERE deleted_at IS NOT NULL")->fetchColumn();

    if ($view === 'trash') {
        $stmt = $conn->query("SELECT * FROM blog_posts WHERE deleted_at IS NOT NULL ORDER BY deleted_at DESC");
    } else {
        $stmt = $conn->query("SELECT * FROM blog_posts WHERE deleted_at IS NULL ORDER BY is_featured DESC, id DESC");
    }
    $articles = $stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
} catch (PDOException $e) {
    $articles = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Insights &amp; Blog | Crown Asia LLC</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="admin.css">

    <!-- DataTables CSS Dependencies -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/logo/logo.png">
</head>

<body>

    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar Component -->
            <?php include 'sidebar.php'; ?>

            <!-- Main Content Area -->
            <div class="col-lg-10 col-md-9 main-content">
                <?php include 'topbar.php'; ?>

                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                    <div>
                        <h2 style="color: #060908; font-weight: 800; margin: 0; font-size: 26px; letter-spacing: -0.5px;">
                            Manage Insights &amp; Blog
                        </h2>
                        <p class="text-muted m-0" style="font-size: 14px;">Publish investor education guides, sector research, and USDT platform articles for Crown Asia LLC.</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="../blog/" target="_blank" class="btn btn-outline-dark btn-sm rounded-pill px-3">
                            <i class="bi bi-globe2 me-1"></i> View Live Blog
                        </a>
                        <?php if (!$edit_mode && $view === 'active'): ?>
                        <a href="#form-section" class="btn-ca-primary">
                            <i class="bi bi-plus-lg"></i> Write New Article
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

                <?php echo $msg; ?>

                <?php if ($view === 'active' || $edit_mode): ?>
                <!-- Article Form Card (Add / Edit) -->
                <div class="custom-card mb-4" id="form-section">
                    <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
                        <h5 class="m-0" style="font-weight: 800; color: #060908;">
                            <?php echo $edit_mode ? '<i class="bi bi-pencil-square text-success me-2"></i>Edit Article #' . $edit_data['id'] : '<i class="bi bi-journal-plus text-success me-2"></i>Publish New Article'; ?>
                        </h5>
                        <?php if ($edit_mode): ?>
                            <a href="manage_blog.php" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
                                <i class="bi bi-x-lg me-1"></i> Cancel Edit
                            </a>
                        <?php endif; ?>
                    </div>

                    <form action="manage_blog.php" method="POST" enctype="multipart/form-data">
                        <?php if ($edit_mode): ?>
                            <input type="hidden" name="article_id" value="<?php echo $edit_data['id']; ?>">
                        <?php endif; ?>

                        <div class="row g-3">
                            <div class="col-md-7">
                                <label class="form-label fw-bold small">Article Title *</label>
                                <input type="text" name="title" class="form-control" placeholder="e.g. How to Evaluate an Investment Opportunity Before You Commit"
                                    value="<?php echo htmlspecialchars($edit_data['title'] ?? ''); ?>" required>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label fw-bold small">Custom SEO URL Slug (Optional)</label>
                                <input type="text" name="slug" class="form-control" placeholder="auto-generated-from-title"
                                    value="<?php echo htmlspecialchars($edit_data['slug'] ?? ''); ?>">
                                <small class="text-muted" style="font-size: 11px;">Leave empty to auto-generate clean SEO slug from title.</small>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label fw-bold small">Topic / Sector Category *</label>
                                <select name="category_slug" class="form-select" required>
                                    <?php
                                    $selected_cat = $edit_data['category_slug'] ?? 'due-diligence';
                                    foreach ($cat_names as $slug => $cname):
                                    ?>
                                        <option value="<?php echo $slug; ?>" <?php echo ($selected_cat === $slug) ? 'selected' : ''; ?>>
                                            <?php echo $cname; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label fw-bold small">Estimated Read Time</label>
                                <input type="text" name="read_time" class="form-control" placeholder="e.g. 5 Min Read"
                                    value="<?php echo htmlspecialchars($edit_data['read_time'] ?? '5 Min Read'); ?>" required>
                            </div>

                            <div class="col-md-5">
                                <label class="form-label fw-bold small">Cover Image (16:9 Landscape Recommended)</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <?php if ($edit_mode && !empty($edit_data['cover_image'])): ?>
                                    <div class="mt-2 d-flex align-items-center gap-2">
                                        <img src="../<?php echo htmlspecialchars($edit_data['cover_image']); ?>"
                                            style="width: 72px; height: 42px; object-fit: cover; border-radius: 6px; border: 1px solid #dce4df;">
                                        <small class="text-muted" style="font-size: 11px;">Current: <?php echo basename($edit_data['cover_image']); ?></small>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Author / Desk Name</label>
                                <input type="text" name="author_name" class="form-control" placeholder="e.g. Crown Asia Research Desk"
                                    value="<?php echo htmlspecialchars($edit_data['author_name'] ?? 'Crown Asia Research Desk'); ?>">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold small">Author Title / Division</label>
                                <input type="text" name="author_role" class="form-control" placeholder="e.g. Investment Strategy & Risk Governance"
                                    value="<?php echo htmlspecialchars($edit_data['author_role'] ?? 'Investment Strategy Team'); ?>">
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-bold small">Short Excerpt (Meta Description &amp; Card Summary) *</label>
                                <textarea name="excerpt" class="form-control" rows="2" placeholder="Concise summary of the article..." required><?php echo htmlspecialchars($edit_data['excerpt'] ?? ''); ?></textarea>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-bold small">Full Article Content (HTML tags &amp; internal sector links supported) *</label>
                                <textarea name="content" class="form-control" rows="8" placeholder="<p>Full research briefing with headings, bullet points, and links to relevant Crown Asia sectors...</p>" required><?php echo htmlspecialchars($edit_data['content'] ?? ''); ?></textarea>
                            </div>

                            <div class="col-md-6 d-flex align-items-center gap-4 pt-2 flex-wrap">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured" value="1" <?php echo (!empty($edit_data['is_featured'])) ? 'checked' : ''; ?>>
                                    <label class="form-check-label fw-semibold" for="is_featured">
                                        <i class="bi bi-star-fill text-warning me-1"></i> Spotlight Featured Article
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_published" id="is_published" value="1" <?php echo (!isset($edit_data) || !empty($edit_data['is_published'])) ? 'checked' : ''; ?>>
                                    <label class="form-check-label fw-semibold" for="is_published">
                                        <i class="bi bi-eye-fill text-success me-1"></i> Published (Visible on Website)
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 text-end pt-2">
                                <?php if ($edit_mode): ?>
                                    <button type="submit" name="update_article" class="btn-ca-primary">
                                        <i class="bi bi-floppy2-fill"></i> Update Article
                                    </button>
                                <?php else: ?>
                                    <button type="submit" name="add_article" class="btn-ca-primary">
                                        <i class="bi bi-send-fill"></i> Publish Article
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
                <?php endif; ?>

                <!-- Tabs: Active vs Trash -->
                <ul class="nav nav-pills mb-3 gap-2">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $view === 'active' ? 'active bg-success' : 'bg-white border text-dark'; ?> fw-semibold rounded-pill px-4" href="manage_blog.php?view=active">
                            <i class="bi bi-journal-richtext me-1"></i> Active Articles (<?php echo $count_active; ?>)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $view === 'trash' ? 'active bg-danger' : 'bg-white border text-dark'; ?> fw-semibold rounded-pill px-4" href="manage_blog.php?view=trash">
                            <i class="bi bi-trash3-fill me-1"></i> Trash (<?php echo $count_trash; ?>)
                        </a>
                    </li>
                </ul>

                <!-- Articles Table Card -->
                <div class="custom-card">
                    <div class="table-responsive">
                        <table id="blogTable" class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 60px;">ID</th>
                                    <th style="width: 90px;">Cover</th>
                                    <th>Title &amp; Summary</th>
                                    <th>Category</th>
                                    <th>Read Time</th>
                                    <th style="width: 115px;">Status</th>
                                    <th style="width: 150px;" class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($articles)): ?>
                                    <tr>
                                        <td colspan="7" class="text-center py-5 text-muted">
                                            <i class="bi bi-journal-text fs-2 d-block mb-2 text-success"></i>
                                            <?php echo ($view === 'trash') ? 'Trash is empty.' : 'No blog articles published yet. Write your first insight above!'; ?>
                                        </td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($articles as $art): ?>
                                        <tr>
                                            <td><strong>#<?php echo $art['id']; ?></strong></td>
                                            <td>
                                                <img src="../<?php echo htmlspecialchars($art['cover_image']); ?>" 
                                                     alt="Cover" 
                                                     style="width: 74px; height: 46px; object-fit: cover; border-radius: 8px; border: 1px solid #dce4df;"
                                                     onerror="this.src='../assets/images/logo/logo.png'">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2 mb-1">
                                                    <?php if (!empty($art['is_featured'])): ?>
                                                        <span class="badge bg-warning text-dark"><i class="bi bi-star-fill me-1"></i>Spotlight</span>
                                                    <?php endif; ?>
                                                    <a href="../blog/<?php echo urlencode($art['slug']); ?>/" target="_blank" class="fw-bold text-dark text-decoration-none">
                                                        <?php echo htmlspecialchars($art['title']); ?>
                                                    </a>
                                                </div>
                                                <small class="text-muted d-block text-truncate" style="max-width: 480px;">
                                                    <?php echo htmlspecialchars($art['excerpt']); ?>
                                                </small>
                                                <small class="text-muted" style="font-size: 11px;">
                                                    <i class="bi bi-calendar3 me-1"></i><?php echo date('M d, Y', strtotime($art['created_at'])); ?> &middot; 
                                                    <i class="bi bi-person-fill me-1"></i><?php echo htmlspecialchars($art['author_name']); ?>
                                                </small>
                                            </td>
                                            <td>
                                                <span class="badge-service">
                                                    <?php echo htmlspecialchars($art['category']); ?>
                                                </span>
                                            </td>
                                            <td><span class="text-muted small"><?php echo htmlspecialchars($art['read_time']); ?></span></td>
                                            <td>
                                                <?php if ($view === 'trash'): ?>
                                                    <span class="badge bg-secondary">In Trash</span>
                                                <?php else: ?>
                                                    <?php if ($art['is_published'] == 1): ?>
                                                        <a href="manage_blog.php?toggle_publish=1&id=<?php echo $art['id']; ?>" class="badge-published text-decoration-none" data-active-text="Published" data-inactive-text="Hidden" title="Click to Hide">
                                                            <i class="bi bi-eye-fill me-1"></i> Published
                                                        </a>
                                                    <?php else: ?>
                                                        <a href="manage_blog.php?toggle_publish=0&id=<?php echo $art['id']; ?>" class="badge-hidden text-decoration-none" data-active-text="Published" data-inactive-text="Hidden" title="Click to Publish">
                                                            <i class="bi bi-eye-slash-fill me-1"></i> Hidden
                                                        </a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-end">
                                                <?php if ($view === 'trash'): ?>
                                                    <div class="d-flex align-items-center justify-content-end gap-1">
                                                        <a href="manage_blog.php?restore=<?php echo $art['id']; ?>" class="btn-action btn-action-restore" title="Restore to Active">
                                                            <i class="bi bi-arrow-counterclockwise"></i>
                                                        </a>
                                                        <a href="manage_blog.php?force_delete=<?php echo $art['id']; ?>" class="btn-action btn-action-force-delete" data-item-name="<?php echo htmlspecialchars($art['title']); ?>" title="Permanent Delete">
                                                            <i class="bi bi-trash3-fill"></i>
                                                        </a>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="d-flex align-items-center justify-content-end gap-1">
                                                        <a href="../blog/<?php echo urlencode($art['slug']); ?>/" target="_blank" class="btn-action btn-action-view" title="Preview Article">
                                                            <i class="bi bi-box-arrow-up-right"></i>
                                                        </a>
                                                        <a href="manage_blog.php?edit=<?php echo $art['id']; ?>#form-section" class="btn-action btn-action-edit" title="Edit Article">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>
                                                        <a href="manage_blog.php?toggle_publish=<?php echo $art['is_published']; ?>&id=<?php echo $art['id']; ?>" class="btn-action <?php echo ($art['is_published'] == 1) ? 'btn-action-hide' : 'btn-action-publish'; ?>" title="<?php echo ($art['is_published'] == 1) ? 'Hide Article' : 'Publish Article'; ?>">
                                                            <i class="bi bi-<?php echo ($art['is_published'] == 1) ? 'eye-slash' : 'eye'; ?>"></i>
                                                        </a>
                                                        <a href="manage_blog.php?delete=<?php echo $art['id']; ?>" class="btn-action btn-action-delete" data-item-name="<?php echo htmlspecialchars($art['title']); ?>" title="Move to Trash">
                                                            <i class="bi bi-trash3-fill"></i>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JS Dependencies -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!-- Core Admin Interaction Engine -->
    <script src="admin.js"></script>

    <script>
        $(document).ready(function () {
            if ($('#blogTable tbody tr').length > 1 || $('#blogTable tbody tr td').length > 1) {
                $('#blogTable').DataTable({
                    order: [[0, 'desc']],
                    pageLength: 10,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search articles..."
                    }
                });
            }
        });
    </script>
</body>

</html>