<?php
require_once __DIR__ . '/config.php';

$page_title    = $page_title ?? 'Crown Asia | Diversified Investment & Business Solutions';
$page_desc     = $page_desc  ?? 'Crown Asia LLC - A diversified investment company based in Albuquerque, New Mexico, operating across eight strategic business sectors with transparent USDT settlement.';
$page_keywords = $page_keywords ?? 'Crown Asia, Crown Asia LLC, investment opportunities, USDT investment, asset-backed investments, New Mexico LLC, diversified portfolio, forex trading, real estate investments, global business solutions';
$og_type       = $og_type ?? 'website';
$og_image      = $og_image ?? ($base_url . 'assets/images/logo/logo.png');

// Canonical URL Resolution
$clean_uri = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '';
$canonical_url = $canonical_url ?? ('https://crownasia.io' . $clean_uri);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
  <meta name="author" content="Crown Asia LLC">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <meta name="theme-color" content="#0B120E">
  <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:site_name" content="Crown Asia LLC">
  <meta property="og:type" content="<?= htmlspecialchars($og_type) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">
  <meta property="og:locale" content="en_US">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>">

  <!-- Favicon & Icons -->
  <link rel="icon" href="<?= $base_url ?>assets/images/logo/logo.png" type="image/png">
  <link rel="apple-touch-icon" href="<?= $base_url ?>assets/images/logo/logo.png">

  <!-- Structured Data (JSON-LD Organization & FinancialService Schema) -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FinancialService",
      "name": "Crown Asia LLC",
      "alternateName": "Crown Asia",
      "url": "https://crownasia.io/",
      "logo": "https://crownasia.io/assets/images/logo/logo.png",
      "image": "https://crownasia.io/assets/images/logo/logo.png",
      "description": "Crown Asia LLC is a diversified US investment management company based in Albuquerque, New Mexico, operating across eight strategic commercial sectors with transparent USDT settlement.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "10242 Coors Bypass Blvd. N.W.",
        "addressLocality": "Albuquerque",
        "addressRegion": "NM",
        "postalCode": "87114",
        "addressCountry": "US"
      },
      "telephone": "+1-505-000-0000",
      "email": "web@crownasia.io",
      "priceRange": "$$$$",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "09:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://twitter.com/crownasiallc",
        "https://www.linkedin.com/company/crown-asia-llc"
      ]
    }
  </script>

  <!-- Stylesheets & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/swiper.min.css">

  <!-- External CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css?v=<?= filemtime(__DIR__ . '/assets/css/style.css') ?>">
</head>

<body>
  <!-- Top Scroll Progress Bar -->
  <div class="scroll-progress" id="scrollProgress"></div>

  <!-- Site Preloader -->
  <div id="preloader">
    <div class="preloader-ring">
      <img src="<?= $base_url ?>assets/images/logo/logo.png" alt="Crown Asia" width="60" height="60">
    </div>
  </div>

  <!-- Main Navigation Bar -->
  <?php include_once ROOT_PATH . 'navbar.php'; ?>