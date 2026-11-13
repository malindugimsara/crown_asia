<?php
require_once __DIR__ . '/config.php';
$current_uri = $_SERVER['REQUEST_URI'] ?? '/';
?>

<nav class="navbar navbar-expand-lg" id="mainNav">
    <div class="container">
        <!-- Brand Logo -->
        <a class="navbar-brand" href="<?= $base_url ?>">
            <img src="<?= $base_url ?>assets/images/logo.png" alt="Crown Asia">
            <div class="brand-text">
                <div class="name">CROWN ASIA</div>
                <div class="sub">International</div>
            </div>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navMenu">
            <ul class="navbar-nav align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_uri == $base_url || $current_uri == $base_url . 'index.php' || strpos($current_uri, 'index.php') !== false || $current_uri == '/') ? 'active' : '' ?>" href="<?= $base_url ?>">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link <?= (strpos($current_uri, '/investment-opportunities') !== false) ? 'active' : '' ?>" href="<?= $base_url ?>investment-opportunities/">Opportunities</a>
                </li>

                <!-- Eight Industries Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= (strpos($current_uri, '/industries') !== false) ? 'active' : '' ?>" href="<?= $base_url ?>industries/" id="industriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Industries
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark custom-dropdown" aria-labelledby="industriesDropdown">
                        <li><a class="dropdown-item fw-semibold text-success" href="<?= $base_url ?>industries/"><i class="bi bi-grid-fill me-2"></i>All 8 Industries</a></li>
                        <li><hr class="dropdown-divider border-secondary opacity-25"></li>
                        <li><a class="dropdown-item <?= (strpos($current_uri, '/industries/forex-trading') !== false) ? 'active text-success' : '' ?>" href="<?= $base_url ?>industries/forex-trading/">Forex Trading</a></li>
                        <li><a class="dropdown-item <?= (strpos($current_uri, '/industries/real-estate') !== false) ? 'active text-success' : '' ?>" href="<?= $base_url ?>industries/real-estate/">Real Estate Investment</a></li>
                        <li><a class="dropdown-item <?= (strpos($current_uri, '/industries/research-and-development') !== false) ? 'active text-success' : '' ?>" href="<?= $base_url ?>industries/research-and-development/">Research &amp; Development</a></li>
                        <li><a class="dropdown-item <?= (strpos($current_uri, '/industries/technology-and-communications') !== false) ? 'active text-success' : '' ?>" href="<?= $base_url ?>industries/technology-and-communications/">Technology &amp; Communications</a></li>
                        <li><a class="dropdown-item <?= (strpos($current_uri, '/industries/import-export') !== false) ? 'active text-success' : '' ?>" href="<?= $base_url ?>industries/import-export/">Trading, Import &amp; Export</a></li>
                        <li><a class="dropdown-item <?= (strpos($current_uri, '/industries/ecommerce') !== false) ? 'active text-success' : '' ?>" href="<?= $base_url ?>industries/ecommerce/">E-Commerce</a></li>
                        <li><a class="dropdown-item <?= (strpos($current_uri, '/industries/gems-and-gemstones') !== false) ? 'active text-success' : '' ?>" href="<?= $base_url ?>industries/gems-and-gemstones/">Gems &amp; Gemstones</a></li>
                        <li><a class="dropdown-item <?= (strpos($current_uri, '/industries/agriculture-and-plantation') !== false) ? 'active text-success' : '' ?>" href="<?= $base_url ?>industries/agriculture-and-plantation/">Agriculture &amp; Plantation</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= (strpos($current_uri, '/how-it-works') !== false) ? 'active' : '' ?>" href="<?= $base_url ?>how-it-works/">How It Works</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= (strpos($current_uri, '/about') !== false) ? 'active' : '' ?>" href="<?= $base_url ?>about/">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= (strpos($current_uri, '/blog') !== false) ? 'active' : '' ?>" href="<?= $base_url ?>blog/">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= (strpos($current_uri, '/contact') !== false) ? 'active' : '' ?>" href="<?= $base_url ?>contact/">Contact</a>
                </li>

                <!-- Header Action Buttons (Investor Login & Register Now) -->
                <li class="nav-item d-flex flex-column flex-lg-row gap-2 ms-lg-3 mt-3 mt-lg-0">
                    <a class="nav-link nav-login text-center" href="<?= $portal_login_url ?>" target="_blank" rel="noopener">Investor Login</a>
                    <a class="nav-link nav-cta text-center" href="<?= $portal_register_url ?>" target="_blank" rel="noopener">Register Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
