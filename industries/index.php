<?php
require_once dirname(__DIR__) . '/config.php';

$page_title    = "Eight Strategic Business Divisions | Crown Asia LLC Portfolio";
$page_desc     = "Explore Crown Asia LLC's eight diversified operational sectors: Forex, Real Estate, R&D, Tech & Cloud, Import-Export, E-Commerce, Gems, and Agriculture.";
$page_keywords = "Crown Asia industries, business sectors, diversified investment portfolio, forex trading desk, real estate syndication, commodities, international trade";
$canonical_url = "https://crownasia.io/industries/";
include_once ROOT_PATH . 'header.php';

$sectors = [
    [
        'title' => 'Forex Trading',
        'slug'  => 'forex-trading',
        'badge' => 'FINANCIAL MARKETS',
        'icon'  => 'bi-graph-up-arrow',
        'image' => 'assets/images/hero/forex-hero.webp',
        'desc'  => 'Systematic quantitative foreign exchange trading powered by multi-tier institutional ECN liquidity, algorithmic hedging, and strict 2% risk limits across G10 pairs.'
    ],
    [
        'title' => 'Real Estate Investment',
        'slug'  => 'real-estate',
        'badge' => 'TANGIBLE ASSETS',
        'icon'  => 'bi-building',
        'image' => 'assets/images/hero/real-state.webp',
        'desc'  => 'Asset-backed acquisition and commercial development across prime growth corridors in the United States, Dubai, and emerging Asia Pacific hospitality corridors.'
    ],
    [
        'title' => 'Research & Development',
        'slug'  => 'research-and-development',
        'badge' => 'INNOVATION',
        'icon'  => 'bi-lightbulb',
        'image' => 'assets/images/hero/rd.webp',
        'desc'  => 'Pioneering proprietary predictive market algorithms, renewable energy efficiency models, and automated supply chain telemetry systems.'
    ],
    [
        'title' => 'Technology & Communications',
        'slug'  => 'technology-and-communications',
        'badge' => 'DIGITAL INFRASTRUCTURE',
        'icon'  => 'bi-cpu',
        'image' => 'assets/images/hero/technology.webp',
        'desc'  => 'Deploying enterprise AI cloud compute, high-throughput financial telecommunications, and decentralized ledger accounting solutions.'
    ],
    [
        'title' => 'Trading, Import & Export',
        'slug'  => 'import-export',
        'badge' => 'GLOBAL SUPPLY CHAINS',
        'icon'  => 'bi-box-seam',
        'image' => 'assets/images/hero/import_export.webp',
        'desc'  => 'Cross-border merchant trade financing, customs-bonded freight logistics, and verified B2B wholesale fulfillment between the Americas, Europe, and Asia.'
    ],
    [
        'title' => 'E-Commerce',
        'slug'  => 'ecommerce',
        'badge' => 'DIGITAL RETAIL',
        'icon'  => 'bi-cart-check',
        'image' => 'assets/images/hero/ecom.webp',
        'desc'  => 'Omnichannel retail platforms, direct-to-consumer digital consumer brands, and automated fulfillment infrastructure capturing global consumer demand.'
    ],
    [
        'title' => 'Gems & Gemstones',
        'slug'  => 'gems-and-gemstones',
        'badge' => 'MINERAL ASSETS',
        'icon'  => 'bi-gem',
        'image' => 'assets/images/hero/gem.webp',
        'desc'  => 'Ethically sourced precious minerals, certified natural Ceylon sapphires, and vaulted physical gold allocations verified by independent gemological laboratories.'
    ],
    [
        'title' => 'Agriculture & Plantation',
        'slug'  => 'agriculture-and-plantation',
        'badge' => 'SUSTAINABLE AGRI',
        'icon'  => 'bi-tree',
        'image' => 'assets/images/hero/agriculture.webp',
        'desc'  => 'Commercial organic tea and spice estates, modern irrigation systems, and post-harvest value-added export processing delivering consistent harvest-linked yields.'
    ]
];
?>

    <!-- 1. Hero Section -->
    <section class="inner-hero">
        <div class="strategy-grid-bg"></div>
        <div class="strategy-glow-blob top-right"></div>
        <div class="strategy-glow-blob bottom-left"></div>

        <div class="container inner-hero-content">
            <div class="row align-items-center g-5">
                <div class="col-lg-8" data-aos="fade-right">
                    <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb">
                        <a href="<?= $base_url ?>">Home</a>
                        <span class="separator"><i class="bi bi-chevron-right"></i></span>
                        <span class="active">Industries</span>
                    </nav>

                    <span class="topic-badge-pill dark mb-3 d-inline-flex align-items-center">
                        <i class="bi bi-diagram-3-fill me-2 text-success"></i>DIVERSIFIED CONGLOMERATE
                    </span>

                    <h1 class="inner-hero-title">
                        Strategic <br><span class="accent">Operating Divisions</span>
                    </h1>
                    <p class="inner-hero-lead mb-4">
                        Crown Asia LLC mitigates cyclical volatility through non-correlated operational diversification across real assets, financial liquidity, digital technologies, and global trade.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#sectors-grid" class="btn-green">Explore All Divisions <i class="bi bi-arrow-down ms-1"></i></a>
                        <a href="<?= $base_url ?>investment-opportunities/" class="btn-ghost">View Active Offerings <i class="bi bi-layers ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left">
                    <div class="hero-summary-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="topic-badge-pill dark mb-0">PORTFOLIO</span>
                            <span class="small text-success fw-semibold"><i class="bi bi-shield-check me-1"></i> Asset-Backed</span>
                        </div>
                        <h4 class="text-white mb-3" style="font-size: 20px;">Divisional Matrix</h4>

                        <div class="hero-summary-row">
                            <span class="text-white-50">Active Divisions</span>
                            <span class="text-success fw-bold">8 Distinct Sectors</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">Headquarters</span>
                            <span class="text-white fw-semibold">Albuquerque, NM</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">Capital Rail</span>
                            <span class="text-success fw-semibold">USDT Settlement</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">Governance</span>
                            <span class="text-white fw-semibold">State of NM LLC</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Industries Directory Grid -->
    <section class="section section-light" id="sectors-grid">
        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill light">STRATEGIC SECTORS</span>
                <h2 class="section-title">Operational Excellence &amp; Asset Backing</h2>
                <p class="section-subtitle mx-auto">Explore dedicated division briefings, risk controls, and participation structures across our corporate group.</p>
            </div>

            <div class="row g-4">
                <?php foreach ($sectors as $s): ?>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <article class="sector-card d-flex flex-column h-100 shadow-sm border rounded-4 overflow-hidden bg-white">
                            <div class="sector-img-wrap" style="height: 220px; overflow: hidden; position: relative;">
                                <img src="<?= $base_url . $s['image'] ?>" alt="Crown Asia <?= htmlspecialchars($s['title']) ?> Sector" class="w-100 h-100" style="object-fit: cover; transition: transform 0.5s ease;" loading="lazy">
                                <span class="badge position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill bg-dark bg-opacity-75 text-success border border-success border-opacity-50" style="font-size: 11px; letter-spacing: 0.5px;">
                                    <?= htmlspecialchars($s['badge']) ?>
                                </span>
                            </div>
                            <div class="sector-body d-flex flex-column flex-grow-1 p-4">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi <?= $s['icon'] ?> text-success fs-5"></i>
                                    <h3 class="sector-title mb-0" style="font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 700;">
                                        <?= htmlspecialchars($s['title']) ?>
                                    </h3>
                                </div>
                                <p class="small text-muted mb-4" style="line-height: 1.65;">
                                    <?= htmlspecialchars($s['desc']) ?>
                                </p>
                                <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                                    <span class="small fw-semibold text-secondary">Institutional Governance</span>
                                    <a href="<?= $base_url ?>industries/<?= $s['slug'] ?>/" class="btn-green py-2 px-3 text-decoration-none" style="font-size: 12px;">
                                        Sector Briefing <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Bottom CTA Strip -->
            <div class="mt-5 p-4 p-md-5 rounded-4 text-center" style="background: linear-gradient(135deg, #060B08 0%, #0E1812 100%); border: 1px solid rgba(29, 185, 84, 0.35); box-shadow: 0 15px 40px rgba(0,0,0,0.3);" data-aos="fade-up">
                <span class="topic-badge-pill dark mb-3">CROSS-SECTOR DEPLOYMENT</span>
                <h3 class="text-white mb-2" style="font-family: 'Poppins', sans-serif; font-size: 26px; font-weight: 700;">Explore Asset-Backed Offerings</h3>
                <p class="text-white-50 mx-auto mb-4" style="max-width: 580px; font-size: 14px;">
                    Review minimum allocations, maturity horizons, and distribution schedules across our eight operating divisions.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?= $base_url ?>investment-opportunities/" class="btn-green">Browse Offerings <i class="bi bi-layers ms-1"></i></a>
                    <a href="<?= $base_url ?>how-it-works/" class="btn-ghost">How Investing Works <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>
