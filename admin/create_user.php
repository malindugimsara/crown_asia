<?php
session_start();
require_once '../db.php';

// Security check: redirect to login if not authenticated
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

$msg = '';
$err = '';

// Handle Delete Admin Action
if (isset($_GET['delete'])) {
    $del_id = (int) $_GET['delete'];
    $current_admin_id = (int) ($_SESSION['admin_id'] ?? 0);
    $current_admin_user = $_SESSION['admin_user'] ?? '';

    // Count total admins
    $total_admins = (int) $conn->query("SELECT COUNT(*) FROM admins")->fetchColumn();

    if ($total_admins <= 1) {
        $err = "Cannot delete the only remaining administrator account.";
    } elseif ($del_id === $current_admin_id) {
        $err = "You cannot delete your own active administrator session.";
    } else {
        // Fetch username of account to verify
        $chkStmt = $conn->prepare("SELECT username FROM admins WHERE id = ?");
        $chkStmt->execute([$del_id]);
        $targetUser = $chkStmt->fetch(PDO::FETCH_ASSOC);

        if ($targetUser && strtolower($targetUser['username']) === strtolower($current_admin_user)) {
            $err = "You cannot delete your own active administrator account.";
        } else {
            $delStmt = $conn->prepare("DELETE FROM admins WHERE id = ?");
            if ($delStmt->execute([$del_id])) {
                header("Location: create_user.php?msg=deleted");
                exit;
            } else {
                $err = "Failed to delete administrator account.";
            }
        }
    }
}

// Handle Add New Admin Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_admin'])) {
    $username = trim($_POST['username'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirm_password'] ?? '';

    // Validation
    if (empty($username) || empty($email) || empty($password)) {
        $err = "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = "Please enter a valid corporate email address.";
    } elseif (strlen($username) < 3) {
        $err = "Username must be at least 3 characters.";
    } elseif (strlen($password) < 4) {
        $err = "Password must be at least 4 characters.";
    } elseif ($password !== $confirm) {
        $err = "Passwords do not match. Please verify.";
    } else {
        // Check uniqueness
        $dupStmt = $conn->prepare("SELECT id FROM admins WHERE username = ? OR email = ? LIMIT 1");
        $dupStmt->execute([$username, $email]);
        if ($dupStmt->fetch()) {
            $err = "An administrator with that username or email already exists.";
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $insStmt = $conn->prepare("INSERT INTO admins (username, email, password, created_at) VALUES (?, ?, ?, NOW())");
            if ($insStmt->execute([$username, $email, $hashed])) {
                header("Location: create_user.php?msg=added");
                exit;
            } else {
                $err = "Database error: Could not create administrator.";
            }
        }
    }
}

// Fetch all admins
$admin_list = [];
try {
    $stmt = $conn->query("SELECT id, username, email, created_at FROM admins ORDER BY id ASC");
    if ($stmt) {
        $admin_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (PDOException $e) {
    $admin_list = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Accounts &amp; Access | Crown Asia LLC</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="admin.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/logo/logo.png">

    <style>
        .admin-user-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: linear-gradient(135deg, #060908, #123524);
            color: #1db954;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 15px;
            border: 1.5px solid rgba(29, 185, 84, 0.35);
        }
        .badge-current-user {
            background: rgba(15, 157, 88, 0.15);
            color: #0b7a43;
            border: 1px solid rgba(15, 157, 88, 0.3);
            font-size: 11px;
            padding: 4px 8px;
            border-radius: 20px;
            font-weight: 700;
        }
    </style>
</head>

<body>

    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar Component -->
            <?php include 'sidebar.php'; ?>

            <!-- Main Content Area -->
            <div class="col-lg-10 col-md-9 main-content">
                <?php include 'topbar.php'; ?>

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                    <div>
                        <h2 style="color: #060908; font-weight: 800; margin: 0; font-size: 26px; letter-spacing: -0.5px;">
                            Admin Accounts &amp; Security
                        </h2>
                        <p class="text-muted m-0" style="font-size: 14px;">Manage administrative access credentials and portal operators for Crown Asia LLC.</p>
                    </div>
                    <a href="#newAdminForm" class="btn-ca-primary">
                        <i class="bi bi-person-plus-fill"></i> Add New Administrator
                    </a>
                </div>

                <?php if (!empty($err)): ?>
                    <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i> <?php echo htmlspecialchars($err); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>

                <div class="row g-4">
                    <!-- Left: Form to Add New Admin -->
                    <div class="col-xl-5 col-lg-6" id="newAdminForm">
                        <div class="custom-card h-100">
                            <div class="d-flex align-items-center gap-2 mb-3 pb-3 border-bottom">
                                <i class="bi bi-shield-lock-fill fs-5" style="color: #0f9d58;"></i>
                                <h5 class="m-0" style="font-weight: 800; color: #060908;">Create Administrator</h5>
                            </div>

                            <form action="create_user.php" method="POST" autocomplete="off">
                                <div class="mb-3">
                                    <label class="form-label fw-bold small">Admin Username *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-person-fill"></i></span>
                                        <input type="text" name="username" class="form-control" placeholder="e.g. operations_lead" required>
                                    </div>
                                    <small class="text-muted" style="font-size: 11px;">Unique identifier used for portal authentication.</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold small">Corporate Email Address *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-envelope-fill"></i></span>
                                        <input type="email" name="email" class="form-control" placeholder="e.g. admin@crownasia.io" required>
                                    </div>
                                    <small class="text-muted" style="font-size: 11px;">Official email for notifications and account recovery.</small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold small">Secure Password *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-key-fill"></i></span>
                                        <input type="password" name="password" id="adminNewPassword" class="form-control" placeholder="Minimum 4 characters" required>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold small">Confirm Password *</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-check2-circle"></i></span>
                                        <input type="password" name="confirm_password" class="form-control" placeholder="Re-type password" required>
                                    </div>
                                </div>

                                <button type="submit" name="create_admin" class="btn-ca-primary w-100 justify-content-center py-2">
                                    <i class="bi bi-shield-check"></i> Grant Administrator Access
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Right: Existing Admins Table -->
                    <div class="col-xl-7 col-lg-6">
                        <div class="custom-card h-100">
                            <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-people-fill fs-5" style="color: #0f9d58;"></i>
                                    <h5 class="m-0" style="font-weight: 800; color: #060908;">Active Administrators</h5>
                                </div>
                                <span class="badge bg-dark rounded-pill px-3"><?php echo count($admin_list); ?> Accounts</span>
                            </div>

                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Administrator</th>
                                            <th>Email</th>
                                            <th>Created</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($admin_list)): ?>
                                            <tr>
                                                <td colspan="4" class="text-center py-4 text-muted">No admin accounts found.</td>
                                            </tr>
                                        <?php else: ?>
                                            <?php foreach ($admin_list as $adm): 
                                                $is_me = (isset($_SESSION['admin_id']) && (int)$_SESSION['admin_id'] === (int)$adm['id']) || 
                                                         (isset($_SESSION['admin_user']) && strtolower($_SESSION['admin_user']) === strtolower($adm['username']));
                                                $initial = strtoupper(substr($adm['username'], 0, 1));
                                            ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="admin-user-avatar">
                                                                <?php echo $initial; ?>
                                                            </div>
                                                            <div>
                                                                <strong class="d-block text-dark"><?php echo htmlspecialchars($adm['username']); ?></strong>
                                                                <?php if ($is_me): ?>
                                                                    <span class="badge-current-user"><i class="bi bi-person-check-fill me-1"></i>Current User</span>
                                                                <?php else: ?>
                                                                    <span class="small text-muted">Administrator</span>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="mailto:<?php echo htmlspecialchars($adm['email']); ?>" class="text-decoration-none text-muted small">
                                                            <i class="bi bi-envelope me-1"></i><?php echo htmlspecialchars($adm['email']); ?>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span class="small text-muted">
                                                            <?php echo !empty($adm['created_at']) ? date('M d, Y', strtotime($adm['created_at'])) : 'Initial Setup'; ?>
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <?php if ($is_me): ?>
                                                            <button class="btn btn-sm btn-light border text-muted" disabled title="Cannot delete active session">
                                                                <i class="bi bi-lock-fill"></i>
                                                            </button>
                                                        <?php else: ?>
                                                            <a href="create_user.php?delete=<?php echo $adm['id']; ?>" 
                                                               class="btn-action btn-action-delete" 
                                                               data-item-name="Admin User: <?php echo htmlspecialchars($adm['username']); ?>"
                                                               title="Revoke &amp; Delete Admin">
                                                                <i class="bi bi-trash3-fill"></i>
                                                            </a>
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
        </div>
    </div>

    <!-- JS Dependencies -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin.js"></script>
</body>

</html>