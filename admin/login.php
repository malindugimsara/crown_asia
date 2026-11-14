<?php
session_start();
require_once '../db.php';

// Allow instant session reset if requested via URL
if (isset($_GET['logout']) || isset($_GET['switch'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// Danatamath login wela nam kelinma dashboard ekata yawanna
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: dashboard.php");
    exit;
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $entered_password = $_POST['password'];

    if (!empty($username) && !empty($entered_password)) {
        // PDO syntax: execute() athulata array ekak widiyata parameters denawa
        $stmt = $conn->prepare("SELECT id, username, password FROM admins WHERE username = ? OR email = ? LIMIT 1");
        $stmt->execute([$username, $username]);
        $user_row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user_row && password_verify($entered_password, $user_row['password'])) {
            session_regenerate_id(true);
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_id'] = $user_row['id'];
            $_SESSION['admin_user'] = $user_row['username'];

            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Invalid Username or Password. Please try again.";
        }
    } else {
        $error = "Please enter both username and password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Crown Asia LLC</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="login.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/logo/logo.png">
</head>

<body>

    <div class="login-wrapper">
        <div class="login-card">

            <!-- Left Side: Company Logo & Branding -->
            <div class="login-left-panel">
                <div class="brand-content">
                    <div class="brand-logo-frame">
                        <img src="../assets/images/logo/logo1.png" alt="Crown Asia Logo" class="brand-logo-img">
                    </div>
                    <h1 class="brand-title">CROWN ASIA</h1>
                    <p class="brand-tagline">INTERNATIONAL LLC</p>
                    <div class="brand-divider"></div>

                    <div class="brand-features-list">
                        <div class="brand-feature">
                            <i class="bi bi-shield-lock-fill"></i>
                            <span>Secure Operations Desk</span>
                        </div>
                        <div class="brand-feature">
                            <i class="bi bi-newspaper"></i>
                            <span>Opportunities &amp; Content Management</span>
                        </div>
                        <div class="brand-feature">
                            <i class="bi bi-sliders"></i>
                            <span>Global SEO &amp; Compliance Control</span>
                        </div>
                    </div>
                </div>

                <div class="brand-footer">
                    &copy; <?php echo date('Y'); ?> Crown Asia LLC. Authorized Personnel Only.
                </div>
            </div>

            <!-- Right Side: Login Input Fields -->
            <div class="login-right-panel">
                <div class="login-header-group">
                    <span class="login-badge">
                        <i class="bi bi-lock-fill"></i> Portal Administration
                    </span>
                    <h2 class="login-header-title">System Sign In</h2>
                    <p class="login-header-desc">Access Crown Asia back-office configurations and public portal records.</p>
                </div>

                <?php if (!empty($error)): ?>
                    <div class="alert-custom-danger" role="alert">
                        <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                        <div><?php echo htmlspecialchars($error); ?></div>
                    </div>
                <?php endif; ?>

                <form action="login.php" method="POST" autocomplete="off">
                    <!-- Username Input -->
                    <div class="form-group-custom">
                        <label class="form-label-custom" for="username">Administrative Username / Email</label>
                        <div class="input-wrapper">
                            <i class="bi bi-person-fill input-icon-left"></i>
                            <input type="text" id="username" name="username" class="input-custom"
                                placeholder="Registered email or username" required autofocus
                                value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="form-group-custom">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label class="form-label-custom" for="password">Password</label>
                        </div>
                        <div class="input-wrapper">
                            <i class="bi bi-key-fill input-icon-left"></i>
                            <input type="password" id="password" name="password" class="input-custom"
                                placeholder="Enter secure password" required>
                            <button type="button" class="btn-pw-toggle" onclick="togglePasswordVisibility()"
                                aria-label="Toggle password visibility" title="Show/Hide password">
                                <i id="pw-toggle-icon" class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me & Back to Website -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe" style="cursor: pointer;">
                            <label class="form-check-label text-muted" for="rememberMe"
                                style="cursor: pointer; font-size: 13px;">
                                Remember device for 30 days
                            </label>
                        </div>
                        <a href="../index.php" class="back-home-link" title="Return to public site">
                            <i class="bi bi-house-door-fill"></i> View Website
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-submit-custom">
                        <span>Authenticate &amp; Launch</span>
                        <i class="bi bi-box-arrow-in-right"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            var pwInput = document.getElementById('password');
            var pwIcon = document.getElementById('pw-toggle-icon');
            if (pwInput.type === 'password') {
                pwInput.type = 'text';
                pwIcon.classList.remove('bi-eye');
                pwIcon.classList.add('bi-eye-slash');
            } else {
                pwInput.type = 'password';
                pwIcon.classList.remove('bi-eye-slash');
                pwIcon.classList.add('bi-eye');
            }
        }
    </script>

</body>

</html>