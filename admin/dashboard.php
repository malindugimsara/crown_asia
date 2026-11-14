<?php
session_start();
// Connect to database (PDO)
require_once '../db.php';

// Security check: redirect to login if not authenticated
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// Delete inquiry message action (PDO)
$msg = '';
if (isset($_GET['delete'])) {
    $del_id = (int) $_GET['delete'];
    try {
        $stmt = $conn->prepare("DELETE FROM contact_messages WHERE id = ?");
        $stmt->execute([$del_id]);
    } catch (PDOException $e) {
        // Ignore if table doesn't exist yet
    }
    header("Location: dashboard.php?msg=deleted");
    exit;
}

if (isset($_GET['msg']) && $_GET['msg'] === 'deleted') {
    $msg = "<div class='alert alert-success alert-dismissible fade show border-0 shadow-sm' role='alert' style='background: rgba(15, 157, 88, 0.12); color: #0b7a43;'>
                <i class='bi bi-check-circle-fill me-2'></i> Inquiry record deleted successfully.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
}

// Helper function for safe PDO count queries
function getSafeCount($conn, $sql) {
    try {
        $stmt = $conn->query($sql);
        return $stmt ? (int) $stmt->fetchColumn() : 0;
    } catch (PDOException $e) {
        return 0;
    }
}

// 1. KPI Statistics Queries (Safe fallback to 0 if tables aren't created yet)
$stat_inquiries = getSafeCount($conn, "SELECT COUNT(*) FROM contact_messages");
$stat_sectors   = 8;
$stat_blogs     = getSafeCount($conn, "SELECT COUNT(*) FROM blog_posts WHERE is_published = 1 AND deleted_at IS NULL");
$stat_admins    = getSafeCount($conn, "SELECT COUNT(*) FROM admins");

// 2. Fetch last 30 contact inquiries (latest first)
$inquiries = [];
try {
    $stmt = $conn->query("SELECT * FROM contact_messages ORDER BY created_at DESC LIMIT 30");
    if ($stmt) {
        $inquiries = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (PDOException $e) {
    $inquiries = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Crown Asia LLC</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="admin.css">

    <!-- DataTables CSS Dependencies -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/logo/logo.png">

    <!-- Crown Asia Emerald & Obsidian Theme Overrides -->
    <style>
        :root {
            --ca-green: #0f9d58;
            --ca-green-bright: #1db954;
            --ca-dark: #060908;
            --ca-dark-card: #0c1310;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f4f7f5;
        }
        .sidebar {
            background: linear-gradient(180deg, #060908 0%, #0b1410 100%) !important;
            border-right: 1px solid rgba(29, 185, 84, 0.15);
        }
        .sidebar-brand-text h4 {
            font-family: 'Cinzel', serif;
            letter-spacing: 1.5px;
            font-size: 16px;
        }
        .sidebar-brand-text span {
            color: var(--ca-green-bright) !important;
            font-weight: 600;
            letter-spacing: 0.8px;
        }
        .sidebar-logo-frame {
            background: #0d1612 !important;
            border: 1.5px solid var(--ca-green) !important;
            padding: 6px !important;
        }
        .sidebar-nav a.active,
        .sidebar-nav a:hover {
            background: rgba(15, 157, 88, 0.16) !important;
            color: #ffffff !important;
            border-left: 3px solid var(--ca-green-bright) !important;
        }
        .sidebar-nav a.active i,
        .sidebar-nav a:hover i {
            color: var(--ca-green-bright) !important;
        }
        .btn-logout:hover {
            background: rgba(220, 53, 69, 0.18) !important;
            border-color: #dc3545 !important;
        }
        .topbar-brand-name {
            font-family: 'Cinzel', serif;
            letter-spacing: 1.2px;
        }
        .topbar-brand-sub {
            color: var(--ca-green) !important;
        }
        .topbar-avatar {
            background: linear-gradient(135deg, var(--ca-green), var(--ca-green-bright)) !important;
        }
        .stat-card.active-kpi,
        .stat-card:hover {
            border-color: rgba(15, 157, 88, 0.4) !important;
            box-shadow: 0 12px 28px rgba(15, 157, 88, 0.08) !important;
        }
        .count-pill {
            background: rgba(15, 157, 88, 0.12) !important;
            color: var(--ca-green) !important;
        }
        .badge-service {
            background: rgba(15, 157, 88, 0.1) !important;
            color: #0b7a43 !important;
            border: 1px solid rgba(15, 157, 88, 0.22);
        }
        .customer-avatar {
            background: linear-gradient(135deg, #060908, #123524) !important;
            color: #1db954 !important;
        }
        .page-item.active .page-link {
            background-color: var(--ca-green) !important;
            border-color: var(--ca-green) !important;
        }
    </style>
</head>

<body>

    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Left Sidebar Navigation Component -->
            <?php include 'sidebar.php'; ?>

            <!-- Right Main Content Area -->
            <div class="col-lg-10 col-md-9 main-content">

                <!-- Common Top Bar Component -->
                <?php include 'topbar.php'; ?>

                <!-- Page Heading -->
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                    <div>
                        <h2 style="color: #060908; font-weight: 800; margin: 0; font-size: 26px; letter-spacing: -0.5px;">
                            Crown Asia Administration
                        </h2>
                        <p class="text-muted m-0" style="font-size: 14px;">Welcome back,
                            <strong><?php echo htmlspecialchars($_SESSION['admin_user'] ?? 'Admin'); ?></strong>! Manage public website content, sector insights, and investor inquiries.
                        </p>
                    </div>
                </div>

                <?php echo $msg; ?>

                <!-- KPI Metric Stat Cards -->
                <div class="stats-grid">
                    <!-- Inquiries Card -->
                    <a href="#inquiries-card" class="stat-card active-kpi">
                        <div class="stat-info">
                            <h3><?php echo number_format($stat_inquiries); ?></h3>
                            <p>Investor &amp; Client Inquiries</p>
                        </div>
                        <div class="stat-icon-wrap" style="background: rgba(15, 157, 88, 0.12); color: #0f9d58;">
                            <i class="bi bi-envelope-open-fill"></i>
                        </div>
                    </a>

                    <!-- Strategic Sectors / Offerings Card -->
                    <a href="../investment-opportunities/" target="_blank" class="stat-card">
                        <div class="stat-info">
                            <h3>8</h3>
                            <p>Active Strategic Sectors</p>
                        </div>
                        <div class="stat-icon-wrap" style="background: #060908; color: #1db954;">
                            <i class="bi bi-grid-fill"></i>
                        </div>
                    </a>

                    <!-- Blog Articles Card -->
                    <a href="manage_blog.php" class="stat-card">
                        <div class="stat-info">
                            <h3><?php echo number_format($stat_blogs); ?></h3>
                            <p>Published Insights &amp; Blog</p>
                        </div>
                        <div class="stat-icon-wrap" style="background: rgba(15, 157, 88, 0.12); color: #0f9d58;">
                            <i class="bi bi-journal-richtext"></i>
                        </div>
                    </a>

                    <!-- Admin Accounts Card -->
                    <a href="create_user.php" class="stat-card">
                        <div class="stat-info">
                            <h3><?php echo number_format($stat_admins); ?></h3>
                            <p>Admin Accounts</p>
                        </div>
                        <div class="stat-icon-wrap" style="background: #0c1310; color: #1db954;">
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </a>
                </div>

                <!-- Customer & Investor Inquiries Table Card -->
                <div class="card-custom" id="inquiries-card">
                    <div class="card-custom-header">
                        <div class="card-custom-title">
                            <i class="bi bi-inbox-fill" style="color: #0f9d58;"></i>
                            <span>Investor &amp; Business Inquiries (Recent 30)</span>
                            <span class="count-pill"><?php echo count($inquiries); ?></span>
                        </div>
                    </div>

                    <?php if (!empty($inquiries)): ?>
                        <div class="table-responsive">
                            <table class="table inquiry-table w-100 align-middle" id="inquiriesTable">
                                <thead>
                                    <tr>
                                        <th style="width: 140px;">Received Date</th>
                                        <th style="width: 280px;">Contact Profile</th>
                                        <th style="width: 220px;">Sector / Subject</th>
                                        <th>Enquiry Message</th>
                                        <th style="width: 100px; text-align: center;" class="no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($inquiries as $row):
                                        $initial = strtoupper(substr($row['name'] ?? 'C', 0, 1));
                                        $phone_val = $row['mobile'] ?? $row['phone'] ?? '';
                                        $clean_mobile = preg_replace('/[^0-9]/', '', $phone_val);
                                        $clean_wa = !empty($row['whatsapp']) ? preg_replace('/[^0-9]/', '', $row['whatsapp']) : $clean_mobile;
                                        if (strlen($clean_wa) == 10 && substr($clean_wa, 0, 1) == '0') {
                                            $clean_wa = '94' . substr($clean_wa, 1);
                                        }
                                        $subject_val = $row['service'] ?? $row['subject'] ?? 'General Enquiry';
                                        ?>
                                        <tr class="inquiry-row">
                                            <!-- Date & Time -->
                                            <td data-order="<?php echo strtotime($row['created_at'] ?? 'now'); ?>">
                                                <div class="date-meta-cell">
                                                    <strong><?php echo date('d M Y', strtotime($row['created_at'] ?? 'now')); ?></strong>
                                                    <span><i class="bi bi-clock me-1"></i><?php echo date('h:i A', strtotime($row['created_at'] ?? 'now')); ?></span>
                                                </div>
                                            </td>

                                            <!-- Contact Profile -->
                                            <td>
                                                <div class="customer-profile">
                                                    <div class="customer-avatar">
                                                        <?php echo $initial; ?>
                                                    </div>
                                                    <div class="customer-meta">
                                                        <strong class="searchable-name"><?php echo htmlspecialchars($row['name'] ?? ''); ?></strong>

                                                        <div class="customer-links">
                                                            <?php if (!empty($row['email'])): ?>
                                                                <a href="mailto:<?php echo htmlspecialchars($row['email'] ?? ''); ?>"
                                                                    class="contact-pill contact-pill-email searchable-email"
                                                                    title="Send Email">
                                                                    <i class="bi bi-envelope-fill"></i>
                                                                    <?php echo htmlspecialchars($row['email'] ?? ''); ?>
                                                                </a>
                                                            <?php endif; ?>

                                                            <?php if (!empty($phone_val)): ?>
                                                                <a href="tel:<?php echo htmlspecialchars($phone_val); ?>"
                                                                    class="contact-pill contact-pill-phone" title="Call Contact">
                                                                    <i class="bi bi-telephone-fill"></i>
                                                                    <?php echo htmlspecialchars($phone_val); ?>
                                                                </a>
                                                            <?php endif; ?>

                                                            <?php if (!empty($row['whatsapp']) || !empty($clean_wa)): ?>
                                                                <a href="https://wa.me/<?php echo $clean_wa; ?>" target="_blank"
                                                                    class="contact-pill contact-pill-whatsapp"
                                                                    title="Chat on WhatsApp">
                                                                    <i class="bi bi-whatsapp"></i> WhatsApp
                                                                </a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Sector / Subject -->
                                            <td>
                                                <span class="badge-service searchable-service">
                                                    <i class="bi bi-tag-fill me-1"></i>
                                                    <?php echo htmlspecialchars($subject_val); ?>
                                                </span>
                                            </td>

                                            <!-- Message / Requirement -->
                                            <td>
                                                <div class="inquiry-message-bubble searchable-message">
                                                    <?php echo nl2br(htmlspecialchars($row['message'] ?? '')); ?>
                                                </div>
                                            </td>

                                            <!-- Action -->
                                            <td class="text-center">
                                                <div class="action-btn-group justify-content-center">
                                                    <?php if (!empty($row['email'])): ?>
                                                        <a href="mailto:<?php echo htmlspecialchars($row['email'] ?? ''); ?>?subject=Crown%20Asia%20LLC%20Inquiry%20Response"
                                                            class="btn-action btn-action-edit" title="Reply via Email">
                                                            <i class="bi bi-reply-fill"></i>
                                                        </a>
                                                    <?php endif; ?>

                                                    <a href="dashboard.php?delete=<?php echo $row['id']; ?>"
                                                        class="btn-action btn-action-delete" title="Delete Inquiry"
                                                        data-item-name="Inquiry from <?php echo htmlspecialchars($row['name'] ?? ''); ?>">
                                                        <i class="bi bi-trash3-fill"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <!-- Empty State -->
                        <div class="empty-state-card">
                            <div class="empty-state-icon" style="color: #0f9d58;">
                                <i class="bi bi-inbox"></i>
                            </div>
                            <h4 style="color: #060908; font-weight: 800; margin-bottom: 8px;">No Inquiries Received Yet</h4>
                            <p class="text-muted" style="max-width: 450px; margin: 0 auto 20px auto;">
                                When prospective investors or business partners submit messages through the Crown Asia website contact form, they will appear here automatically.
                            </p>
                            <a href="../contact/" target="_blank" class="btn btn-outline-success btn-sm rounded-pill px-4">
                                <i class="bi bi-send-fill me-1"></i> Test Contact Form on Website
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Core JS Dependencies -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables & Extension Scripts -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <!-- Core Admin Interaction Engine -->
    <script src="admin.js"></script>

    <!-- DataTables Initialization -->
    <script>
        $(document).ready(function () {
            if ($('#inquiriesTable').length) {
                $('#inquiriesTable').DataTable({
                    responsive: true,
                    order: [[0, 'desc']],
                    pageLength: 10,
                    lengthMenu: [[10, 25, 30, -1], [10, 25, 30, "All"]],
                    dom: "<'row mb-3 align-items-center g-2'<'col-md-8 d-flex align-items-center flex-wrap dt-toolbar-left'lB><'col-md-4 d-flex justify-content-md-end'f>>" +
                        "t" +
                        "<'row mt-3 align-items-center'<'col-md-6'i><'col-md-6 d-flex justify-content-md-end'p>>",
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            text: '<i class="bi bi-file-earmark-excel-fill me-1 text-success"></i> Excel',
                            className: 'btn btn-sm btn-light border shadow-sm',
                            title: 'Inquiries_Crown_Asia_LLC',
                            exportOptions: { columns: [0, 1, 2, 3] }
                        },
                        {
                            extend: 'csvHtml5',
                            text: '<i class="bi bi-filetype-csv me-1 text-primary"></i> CSV',
                            className: 'btn btn-sm btn-light border shadow-sm',
                            title: 'Inquiries_Crown_Asia_LLC',
                            exportOptions: { columns: [0, 1, 2, 3] }
                        },
                        {
                            extend: 'print',
                            text: '<i class="bi bi-printer-fill me-1 text-secondary"></i> Print',
                            className: 'btn btn-sm btn-light border shadow-sm',
                            title: 'Investor & Client Inquiries - Crown Asia LLC',
                            exportOptions: { columns: [0, 1, 2, 3] }
                        }
                    ],
                    columnDefs: [
                        { orderable: false, targets: 4 }
                    ],
                    language: {
                        search: "",
                        searchPlaceholder: "Search inquiries...",
                        lengthMenu: "Show _MENU_ records",
                        info: "Showing _START_ to _END_ of _TOTAL_ inquiries",
                        infoEmpty: "No inquiries to show",
                        infoFiltered: "(filtered from _MAX_ total)",
                        paginate: {
                            previous: '<i class="bi bi-chevron-left"></i>',
                            next: '<i class="bi bi-chevron-right"></i>'
                        }
                    }
                });
            }
        });
    </script>

</body>

</html>