<?php
// Determine current active page for sidebar navigation
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- Left Sidebar Navigation Component -->
<div class="col-lg-2 col-md-3 sidebar">
    <!-- Brand / Logo Area -->
    <div class="d-flex align-items-center justify-content-between mb-3 pb-3" style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
        <a href="dashboard.php" class="sidebar-brand mb-0 pb-0 border-0 flex-grow-1">
            <div class="sidebar-logo-frame">
                <img src="../assets/images/logo/logo.png" alt="Crown Asia Logo">
            </div>
            <div class="sidebar-brand-text">
                <h4>CROWN ASIA</h4>
                <span>Admin Portal</span>
            </div>
        </a>
        <button type="button" class="sidebar-close-btn d-lg-none" id="sidebarCloseBtn" aria-label="Close Sidebar">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <!-- Navigation Menu Items -->
    <div class="sidebar-nav">
        <a href="dashboard.php" class="<?php echo ($currentPage === 'dashboard.php') ? 'active' : ''; ?>">
            <i class="bi bi-inbox-fill"></i>
            <span>Inquiries &amp; Leads</span>
        </a>

        <a href="manage_blog.php" class="<?php echo ($currentPage === 'manage_blog.php') ? 'active' : ''; ?>">
            <i class="bi bi-journal-richtext"></i>
            <span>Blog &amp; Insights</span>
        </a>

        <a href="create_user.php" class="<?php echo ($currentPage === 'create_user.php') ? 'active' : ''; ?>">
            <i class="bi bi-people-fill"></i>
            <span>Admin Accounts</span>
        </a>

        <a href="../index.php" target="_blank">
            <i class="bi bi-globe2"></i>
            <span>View Live Site</span>
        </a>
    </div>

    <!-- Sidebar Bottom Footer -->
    <div class="sidebar-footer">
        <a href="logout.php" class="btn-logout" title="Log Out from Crown Asia Admin">
            <i class="bi bi-box-arrow-right me-2"></i> Log Out
        </a>
    </div>
</div>