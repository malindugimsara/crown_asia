<?php
// Base URL configuration (works seamlessly on both localhost subfolders and root domain)
if (!isset($base_url)) {
    $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    $base_url = rtrim($script_dir, '/') . '/';
}

$page_title = $page_title ?? 'Crown Asia | Diversified Investment & Business Solutions';
$page_desc  = $page_desc  ?? 'Crown Asia LLC - A diversified investment company based in Albuquerque, New Mexico, operating across eight strategic business sectors.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
    <link rel="icon" href="<?= $base_url ?>assets/images/logo.png" type="image/png">

    <!-- Stylesheets & Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">
</head>
<body>
    <!-- Top Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Site Preloader -->
    <div id="preloader">
        <div class="preloader-ring">
            <img src="<?= $base_url ?>assets/images/logo.png" alt="Crown Asia">
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <?php include_once __DIR__ . '/navbar.php'; ?>

