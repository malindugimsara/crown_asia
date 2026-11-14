<?php
require_once dirname(__DIR__) . '/config.php';

$page_title = "About Us | Crown Asia LLC - Diversified US Investment Company";
$page_desc  = "Learn about Crown Asia LLC, our verified New Mexico LLC registration, core business activities, key milestones, and multi-industry portfolio.";
include_once ROOT_PATH . 'header.php';
?>

    <!-- Inner Hero Section -->
    <section class="inner-hero">
        <div class="container inner-hero-content">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb">
                        <a href="<?= $base_url ?>">Home</a>
                        <span class="separator"><i class="bi bi-chevron-right"></i></span>
                        <span class="active">About Us</span>
                    </nav>

                    <span class="topic-badge-pill dark mb-3 d-inline-flex align-items-center">
                        <i class="bi bi-shield-check me-2 text-success"></i>CORPORATE PROFILE &amp; GOVERNANCE
                    </span>

                    <h1 class="inner-hero-title">
                        Pioneering Sustainable Growth Through <br><span class="accent">Disciplined Diversification</span>
                    </h1>
                    <p class="inner-hero-lead mb-4">
                        Crown Asia LLC is an American investment and commercial enterprise legally registered in New Mexico, USA. Operating across eight high-impact sectors, we combine institutional governance, real asset backing, and global market agility to create lasting value.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#company-overview" class="btn-green">Explore Our Company</a>
                        <a href="#verified-details" class="btn-ghost"><i class="bi bi-patch-check me-1"></i> Verified Registration</a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="sector-hero-visual">
                        <div class="hero-image-frame">
                            <img src="<?= $base_url ?>assets/images/common/head-office.webp" alt="Crown Asia Global Headquarters" class="img-fluid" width="1200" height="800" loading="lazy">
                            <div class="hero-live-pill">
                                <span class="live-dot pulse"></span>
                                <span>Active &amp; Compliant US Corporation</span>
                            </div>
                            <div class="hero-floating-stat">
                                <div class="stat-icon"><i class="bi bi-building-check"></i></div>
                                <div>
                                    <div class="stat-title">New Mexico LLC</div>
                                    <div class="stat-sub">Reg. &amp; Tax-Compliant USA</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter Bar -->
    <section class="stats-section position-relative overflow-hidden">
        <video class="stats-bg-video" autoplay loop muted playsinline preload="auto">
            <source src="<?= $base_url ?>assets/video/countup-bg.webm" type="video/webm">
        </video>
        <div class="stats-video-overlay"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row g-4">
                <div class="col-6 col-md-3" data-aos="fade-up">
                    <div class="stat-box">
                        <div class="stat-num" data-count="3" data-suffix="+">0</div>
                        <div class="stat-label">Years of Solid Growth</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="80">
                    <div class="stat-box">
                        <div class="stat-num" data-count="8" data-suffix="">0</div>
                        <div class="stat-label">Diversified Sectors</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="160">
                    <div class="stat-box">
                        <div class="stat-num" data-count="10" data-suffix="K+">0</div>
                        <div class="stat-label">Global Clients Served</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="240">
                    <div class="stat-box">
                        <div class="stat-num" data-count="50" data-suffix="+">0</div>
                        <div class="stat-label">Specialists &amp; Partners</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Introduction Section -->
    <section class="section section-white" id="company-overview">
        <div class="container">
            <!-- Modern Vision & Mission Showcase (Reference Layout) -->
            <div class="row align-items-center g-5 mb-5 pb-lg-3">
                <!-- Left Visual with Floating Frosted Progress Card -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="vm-visual-wrapper">
                        <img src="<?= $base_url ?>assets/images/common/leadership-team.webp" alt="Crown Asia Strategic Business Leaders" class="vm-main-img" width="1200" height="800" loading="lazy">
                        
                        <!-- Floating Glass Business Progress Card -->
                        <div class="biz-progress-card">
                            <div class="biz-progress-title">Business Progress</div>
                            <div class="biz-progress-item">
                                <div class="biz-progress-header">
                                    <span>Revenue</span>
                                    <span>82%</span>
                                </div>
                                <div class="biz-progress-track">
                                    <div class="biz-progress-fill" style="width: 82%;"></div>
                                </div>
                            </div>
                            <div class="biz-progress-item">
                                <div class="biz-progress-header">
                                    <span>Satisfaction</span>
                                    <span>90%</span>
                                </div>
                                <div class="biz-progress-track">
                                    <div class="biz-progress-fill" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content Column -->
                <div class="col-lg-7" data-aos="fade-left">
                    <span class="topic-badge-pill mb-3">
                        <i class="bi bi-box-seam me-2"></i>GET TO KNOW US
                    </span>

                    <h2 class="vm-heading">
                        Driving Innovation and Excellence for Sustainable Corporate Success <span class="accent">Worldwide.</span>
                    </h2>

                    <!-- Two Side-by-Side Cards: Our Mission & Our Vision -->
                    <div class="row g-3">
                        <!-- Mission Card -->
                        <div class="col-md-6">
                            <div class="vm-card">
                                <h3 class="vm-card-title">Our Mission</h3>
                                <p class="vm-card-text">
                                    Our mission is to empower businesses and global investors through innovative solutions, exceptional service, and disciplined multi-sector capital allocation.
                                </p>
                                <ul class="vm-card-list">
                                    <li><i class="bi bi-chevron-double-right"></i> Innovation &amp; Excellence</li>
                                    <li><i class="bi bi-chevron-double-right"></i> Exceptional Customer Service</li>
                                    <li><i class="bi bi-chevron-double-right"></i> Sustainable Business Growth</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Vision Card -->
                        <div class="col-md-6">
                            <div class="vm-card">
                                <h3 class="vm-card-title">Our Vision</h3>
                                <p class="vm-card-text">
                                    Our vision is to become a global leader in providing transformative business solutions, verified asset security, and lasting multi-sector prosperity.
                                </p>
                                <ul class="vm-card-list">
                                    <li><i class="bi bi-chevron-double-right"></i> Global Market Leadership</li>
                                    <li><i class="bi bi-chevron-double-right"></i> Transformative Impact</li>
                                    <li><i class="bi bi-chevron-double-right"></i> Sustainable Long-Term Success</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Strategic Action & Sector Link Bar (Replacing 'Learn More' Button) -->
                    <a href="#industries-showcase" class="vm-bottom-bar">
                        <div class="bar-content">
                            <div class="bar-icon"><i class="bi bi-grid-fill"></i></div>
                            <div>
                                <div class="bar-title">Explore Our 8 Strategic Business Sectors</div>
                                <div class="bar-sub">Real estate, forex trading, commodities, technology, agriculture &amp; asset-backed ventures</div>
                            </div>
                        </div>
                        <div class="bar-arrow"><i class="bi bi-arrow-up-right"></i></div>
                    </a>
                </div>
            </div>

            <!-- Corporate Foundations & Background Overview -->
            <div class="row align-items-center g-5 py-4 border-top border-light-subtle">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="topic-badge-pill">CORPORATE BACKGROUND</span>
                    <h3 class="section-title" style="font-size: 28px;">An American Conglomerate Anchored in Tangible Value</h3>
                    <div class="green-line"></div>
                    <p class="about-copy mb-3">
                        Founded in 2022, <strong>Crown Asia LLC</strong> was established with a clear mandate: to redefine modern capital management by anchoring investments in tangible, real-economy business operations rather than volatile speculative vehicles.
                    </p>
                    <p class="about-copy mb-0">
                        Headquartered in Albuquerque, New Mexico, we manage a strategic portfolio spanning financial liquidity, prime real estate, cross-border commerce, next-generation research, and sustainable agriculture. Each of our eight operating divisions is managed by domain specialists with proven operational track records and rigorous fiduciary oversight.
                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="corp-mini-card d-flex align-items-center gap-3">
                                <i class="bi bi-shield-lock-fill fs-2 text-success"></i>
                                <div>
                                    <h6 class="mb-1 fw-bold">Capital Preservation</h6>
                                    <small class="text-muted">Strict institutional risk boundaries</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="corp-mini-card d-flex align-items-center gap-3">
                                <i class="bi bi-globe-americas fs-2 text-success"></i>
                                <div>
                                    <h6 class="mb-1 fw-bold">Cross-Border Reach</h6>
                                    <small class="text-muted">USA, UAE, Asia &amp; Global Trade</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="corp-mini-card d-flex align-items-center gap-3">
                                <i class="bi bi-cash-stack fs-2 text-success"></i>
                                <div>
                                    <h6 class="mb-1 fw-bold">Asset-Backed Growth</h6>
                                    <small class="text-muted">100% tangible physical operations</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="corp-mini-card d-flex align-items-center gap-3">
                                <i class="bi bi-file-earmark-check-fill fs-2 text-success"></i>
                                <div>
                                    <h6 class="mb-1 fw-bold">Legal Compliance</h6>
                                    <small class="text-muted">New Mexico registered LLC</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Core Values -->
            <div class="mt-5 pt-3">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="topic-badge-pill">OUR FOUNDATIONS</span>
                    <h2 class="section-title">Core Principles That Guide Our Operations</h2>
                    <p class="section-subtitle mx-auto">Every transaction, partnership, and capital deployment at Crown Asia LLC is held to uncompromising corporate benchmarks.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up">
                        <div class="pillar-card">
                            <div class="pillar-icon-wrap"><i class="bi bi-award-fill"></i></div>
                            <h4>Integrity &amp; Ethics</h4>
                            <p class="text-muted">We adhere to the highest fiduciary and ethical responsibilities, ensuring our investor partners receive clear, honest, and auditable accounting.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                        <div class="pillar-card">
                            <div class="pillar-icon-wrap"><i class="bi bi-building-check"></i></div>
                            <h4>Legal Compliance</h4>
                            <p class="text-muted">Fully registered under New Mexico jurisdiction and compliant with federal IRS tax laws, maintaining complete regulatory transparency.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                        <div class="pillar-card">
                            <div class="pillar-icon-wrap"><i class="bi bi-safe-fill"></i></div>
                            <h4>Asset-Backed Security</h4>
                            <p class="text-muted">Capital is never deployed into uncollateralized speculations; all ventures are anchored in physical land, real commodities, or prime liquidity.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                        <div class="pillar-card">
                            <div class="pillar-icon-wrap"><i class="bi bi-lightbulb-fill"></i></div>
                            <h4>Continuous Innovation</h4>
                            <p class="text-muted">Integrating modern algorithmic modeling, automated supply chain tracking, and IoT systems across traditional industry operations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Verified Registration & Company Details Section (High Trust Dossier) -->
    <section class="section section-dark" id="verified-details">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill dark"><i class="bi bi-patch-check-fill me-1 text-success"></i> OFFICIAL RECORD</span>
                <h2 class="section-title text-white">Verified Registration &amp; Company Details</h2>
                <p class="section-subtitle text-white-50 mx-auto">
                    Crown Asia LLC conducts business with absolute corporate legitimacy. Below are the verified corporate registration attributes as registered in the United States.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="zoom-in">
                    <div class="verify-dossier-card">
                        <div class="d-flex flex-wrap justify-content-between align-items-center pb-3 mb-4 border-bottom border-secondary border-opacity-25 gap-3">
                            <div>
                                <span class="verify-header-badge"><i class="bi bi-shield-fill-check"></i> US Corporate Registry Record</span>
                                <h3 class="text-white mb-1">Crown Asia LLC</h3>
                                <p class="text-white-50 small mb-0">Jurisdiction: State of New Mexico, United States of America</p>
                            </div>
                            <div class="seal-badge">
                                <i class="bi bi-patch-check-fill"></i>
                                <span>VERIFIED<br>CORPORATE</span>
                            </div>
                        </div>

                        <div class="verify-grid">
                            <!-- Field 1 -->
                            <div class="verify-item">
                                <div class="verify-label">Legal Entity Name</div>
                                <div class="verify-val">Crown Asia LLC</div>
                            </div>

                            <!-- Field 2 -->
                            <div class="verify-item">
                                <div class="verify-label">Entity Status</div>
                                <div class="verify-val">
                                    <span class="verify-status-active"><i class="bi bi-circle-fill" style="font-size:8px;"></i> Active &amp; In Good Standing</span>
                                </div>
                            </div>

                            <!-- Field 3 -->
                            <div class="verify-item">
                                <div class="verify-label">Formation Country &amp; State</div>
                                <div class="verify-val">
                                    <i class="bi bi-flag-fill text-danger me-1"></i> New Mexico, USA
                                </div>
                            </div>

                            <!-- Field 4 -->
                            <div class="verify-item">
                                <div class="verify-label">Entity Structure</div>
                                <div class="verify-val">Domestic Limited Liability Company (LLC)</div>
                            </div>

                            <!-- Field 5 -->
                            <div class="verify-item">
                                <div class="verify-label">Year of Establishment</div>
                                <div class="verify-val">2022</div>
                            </div>

                            <!-- Field 6 -->
                            <div class="verify-item">
                                <div class="verify-label">Tax &amp; Regulatory Status</div>
                                <div class="verify-val">
                                    <i class="bi bi-check-circle-fill text-success me-1"></i> IRS Registered &amp; Federal EIN Compliant
                                </div>
                            </div>

                            <!-- Field 7 -->
                            <div class="verify-item">
                                <div class="verify-label">Registered Office Address</div>
                                <div class="verify-val" style="font-size: 14px;">
                                    10242 Coors Bypass Blvd. N.W., Albuquerque, NM 87114, USA
                                </div>
                            </div>

                            <!-- Field 8 -->
                            <div class="verify-item">
                                <div class="verify-label">Corporate Email &amp; Web</div>
                                <div class="verify-val" style="font-size: 14px;">
                                    <a href="mailto:info@crownasia.io" class="text-success text-decoration-none">info@crownasia.io</a> &nbsp;|&nbsp; 
                                    <a href="https://crownasia.io" target="_blank" rel="noopener" class="text-white text-decoration-none">crownasia.io</a>
                                </div>
                            </div>
                        </div>

                        <!-- Trust Features Sub-strip -->
                        <div class="mt-4 pt-3 border-top border-secondary border-opacity-25 row g-3 text-center text-md-start">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center gap-2 text-white-50 small">
                                    <i class="bi bi-check-all text-success fs-5"></i>
                                    <span>New Mexico SOS Business Records Verified</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center gap-2 text-white-50 small">
                                    <i class="bi bi-shield-shaded text-success fs-5"></i>
                                    <span>Institutional Anti-Money Laundering (AML) Compliance</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center gap-2 text-white-50 small">
                                    <i class="bi bi-file-earmark-lock text-success fs-5"></i>
                                    <span>Secure Encrypted Investor Ledger Integration</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Activities Section -->
    <section class="section section-light" id="business-activities">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">OPERATIONAL FRAMEWORK</span>
                <h2 class="section-title">Core Business Activities</h2>
                <p class="section-subtitle mx-auto">How Crown Asia generates robust returns, manages systemic risks, and expands operational footprints across worldwide markets.</p>
            </div>

            <div class="row g-4">
                <!-- Activity 1 -->
                <div class="col-lg-6 col-md-6" data-aos="fade-up">
                    <div class="activity-card-light">
                        <span class="card-num-light">01</span>
                        <div class="activity-icon-light"><i class="bi bi-graph-up-arrow"></i></div>
                        <h4>Quantitative Liquidity &amp; Currency Management</h4>
                        <p>
                            We maintain an active institutional foreign exchange desk operating across G10 and major currency pairs. Utilizing algorithmic volatility filters and multi-tier ECN prime liquidity aggregation, our operations prioritize capital preservation, cross-session arbitrage, and corporate treasury hedging against inflation and currency devaluation.
                        </p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="activity-card-light">
                        <span class="card-num-light">02</span>
                        <div class="activity-icon-light"><i class="bi bi-houses-fill"></i></div>
                        <h4>Strategic Real Estate Development &amp; Land Holdings</h4>
                        <p>
                            Targeted acquisitions in high-growth prime corridors including Dubai, Thailand, Sri Lanka, and the United States. Our real estate framework encompasses luxury commercial real estate, strategic land banking, rental yield generation, and sustainable hospitality developments that provide long-term capital appreciation.
                        </p>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="activity-card-light">
                        <span class="card-num-light">03</span>
                        <div class="activity-icon-light"><i class="bi bi-box-seam-fill"></i></div>
                        <h4>Cross-Border Trading, Commodities &amp; Gemstones</h4>
                        <p>
                            Direct ethical sourcing and international distribution of essential agricultural commodities, premium spices, rubber, and certified precious gemstones. We eliminate intermediary inefficiencies through proprietary shipping channels, strict quality controls, and established buyer partnerships across European and Asian markets.
                        </p>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="activity-card-light">
                        <span class="card-num-light">04</span>
                        <div class="activity-icon-light"><i class="bi bi-cpu-fill"></i></div>
                        <h4>Applied Technology, IoT R&amp;D &amp; Digital Commerce</h4>
                        <p>
                            Investing in high-yield technological infrastructure, including smart logistics networks, enterprise e-commerce warehousing, IoT automation devices, and our 2030 vision for telecommunications. Technology serves both as an independent revenue generator and an efficiency multiplier across our traditional sectors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects and Milestones Section (Interactive Timeline) -->
    <section class="section section-white" id="milestones">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">OUR JOURNEY</span>
                <h2 class="section-title">Projects &amp; Strategic Milestones</h2>
                <p class="section-subtitle mx-auto">From our inception in New Mexico to an expanding multinational multi-sector conglomerate, explore the key milestones that shape our legacy.</p>
            </div>

            <div class="timeline-track">
                <!-- Milestone 2022 -->
                <div class="row timeline-row align-items-center g-4" data-aos="fade-up">
                    <div class="col-lg-6 order-lg-1 order-2 text-lg-end">
                        <div class="timeline-card-box">
                            <span class="timeline-year-tag">2022 • FOUNDATION</span>
                            <h4>Corporate Formation &amp; Core Structuring</h4>
                            <p class="text-muted mb-0">
                                Crown Asia LLC formally incorporated in New Mexico, USA as a diversified limited liability company. Established foundational treasury reserves, state and IRS tax filings, and institutional banking relationships.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1 d-none d-lg-block">
                        <div class="ps-4">
                            <span class="badge bg-success bg-opacity-10 text-success p-2 px-3 rounded-pill fw-semibold"><i class="bi bi-check2-circle me-1"></i> Entity Registered &amp; Capitalized</span>
                        </div>
                    </div>
                    <div class="timeline-node"><i class="bi bi-flag-fill"></i></div>
                </div>

                <!-- Milestone 2023 -->
                <div class="row timeline-row align-items-center g-4" data-aos="fade-up" data-aos-delay="80">
                    <div class="col-lg-6 order-lg-1 order-1 d-none d-lg-block text-end">
                        <div class="pe-4">
                            <span class="badge bg-success bg-opacity-10 text-success p-2 px-3 rounded-pill fw-semibold"><i class="bi bi-graph-up me-1"></i> Desk Operational &amp; Land Acquired</span>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-2">
                        <div class="timeline-card-box">
                            <span class="timeline-year-tag">2023 • EXPANSION</span>
                            <h4>Institutional Forex Desk &amp; Real Estate Portfolio</h4>
                            <p class="text-muted mb-0">
                                Deployed our 24/5 algorithmic forex liquidity operations with prime ECN aggregation. Concurrently completed initial land acquisitions and strategic real estate projects in Dubai and key Asian growth corridors.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-node"><i class="bi bi-buildings"></i></div>
                </div>

                <!-- Milestone 2024 -->
                <div class="row timeline-row align-items-center g-4" data-aos="fade-up" data-aos-delay="160">
                    <div class="col-lg-6 order-lg-1 order-2 text-lg-end">
                        <div class="timeline-card-box">
                            <span class="timeline-year-tag">2024 • DIVERSIFICATION</span>
                            <h4>Research &amp; Development Lab &amp; Global Supply Chain</h4>
                            <p class="text-muted mb-0">
                                Established specialized R&amp;D division focusing on IoT and commercial automation. Scaled international trading operations in agricultural commodities, spices, and export logistics connecting Asia with the West.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1 d-none d-lg-block">
                        <div class="ps-4">
                            <span class="badge bg-success bg-opacity-10 text-success p-2 px-3 rounded-pill fw-semibold"><i class="bi bi-cpu me-1"></i> R&amp;D Lab &amp; Trade Corridors Active</span>
                        </div>
                    </div>
                    <div class="timeline-node"><i class="bi bi-rocket-takeoff-fill"></i></div>
                </div>

                <!-- Milestone 2025 -->
                <div class="row timeline-row align-items-center g-4" data-aos="fade-up" data-aos-delay="240">
                    <div class="col-lg-6 order-lg-1 order-1 d-none d-lg-block text-end">
                        <div class="pe-4">
                            <span class="badge bg-success bg-opacity-10 text-success p-2 px-3 rounded-pill fw-semibold"><i class="bi bi-shield-check me-1"></i> Digital Investor Portal Deployed</span>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-2">
                        <div class="timeline-card-box">
                            <span class="timeline-year-tag">2025 • ECOSYSTEM SCALE</span>
                            <h4>Investor Platform Launch &amp; Sustainable Resources</h4>
                            <p class="text-muted mb-0">
                                Rolled out the high-security Investor Portal (<a href="https://portal.crownasia.io" target="_blank" rel="noopener" class="text-success text-decoration-none fw-semibold">portal.crownasia.io</a>), integrated certified gemological sourcing, and expanded commercial agricultural plantation acreage.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-node"><i class="bi bi-laptop-fill"></i></div>
                </div>

                <!-- Milestone 2026+ -->
                <div class="row timeline-row align-items-center g-4" data-aos="fade-up" data-aos-delay="320">
                    <div class="col-lg-6 order-lg-1 order-2 text-lg-end">
                        <div class="timeline-card-box">
                            <span class="timeline-year-tag">2026 &amp; BEYOND • VISION 2030</span>
                            <h4>Next-Gen Telecom &amp; Global Sustainable Infrastructure</h4>
                            <p class="text-muted mb-0">
                                Advancing our long-term vision towards telecommunications infrastructure, enterprise AI cloud architectures, and scalable climate-resilient plantation developments worldwide.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1 d-none d-lg-block">
                        <div class="ps-4">
                            <span class="badge bg-success bg-opacity-10 text-success p-2 px-3 rounded-pill fw-semibold"><i class="bi bi-stars me-1"></i> Long-Term Horizon 2030</span>
                        </div>
                    </div>
                    <div class="timeline-node"><i class="bi bi-globe2"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Eight Industries / Services Section (Styled like demo index-4.html Project Section) -->
    <section class="tj-project-section-4 section-gap" id="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading style-4 text-center" data-aos="fade-up">
                        <span class="sub-title"><i class="bi bi-grid-3x3-gap-fill me-1"></i>Diversified Portfolio</span>
                        <h2 class="sec-title">Eight Strategic Industries</h2>
                        <p class="sec-desc">Explore dedicated sector briefings, operational strategies, and risk governance across our eight core business divisions.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="project-wrapper" data-aos="fade-up" data-aos-delay="150">
                        <div class="swiper project-slider-3">
                            <div class="swiper-wrapper">
                                <!-- 1. Forex Trading -->
                                <div class="swiper-slide">
                                    <div class="project-item h4-project-item">
                                        <div class="project-content">
                                            <span class="categories"><a href="<?= $base_url ?>industries/forex-trading/">Foreign Exchange</a></span>
                                            <div class="project-text">
                                                <h4 class="title"><a href="<?= $base_url ?>industries/forex-trading/">Forex Trading</a></h4>
                                                <a class="tji-icon-btn" href="<?= $base_url ?>industries/forex-trading/" aria-label="Explore Forex Trading">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <p class="project-desc">Disciplined foreign exchange operations, liquid market participation, and proactive risk and currency management strategies.</p>
                                        </div>
                                        <div class="project-img">
                                            <a href="<?= $base_url ?>industries/forex-trading/">
                                                <img src="<?= $base_url ?>assets/images/hero/forex-hero.webp" alt="Forex Trading" width="800" height="500" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2. Real Estate Investment -->
                                <div class="swiper-slide">
                                    <div class="project-item h4-project-item">
                                        <div class="project-content">
                                            <span class="categories"><a href="<?= $base_url ?>industries/real-estate/">Real Estate</a></span>
                                            <div class="project-text">
                                                <h4 class="title"><a href="<?= $base_url ?>industries/real-estate/">Real Estate</a></h4>
                                                <a class="tji-icon-btn" href="<?= $base_url ?>industries/real-estate/" aria-label="Explore Real Estate Investment">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <p class="project-desc">Property development and land investments across priority markets including Dubai, Maldives, Sri Lanka, Thailand, and the USA.</p>
                                        </div>
                                        <div class="project-img">
                                            <a href="<?= $base_url ?>industries/real-estate/">
                                                <img src="<?= $base_url ?>assets/images/hero/real-state.webp" alt="Real Estate Investment" width="800" height="500" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3. Research & Development -->
                                <div class="swiper-slide">
                                    <div class="project-item h4-project-item">
                                        <div class="project-content">
                                            <span class="categories"><a href="<?= $base_url ?>industries/research-and-development/">Innovation &amp; AI</a></span>
                                            <div class="project-text">
                                                <h4 class="title"><a href="<?= $base_url ?>industries/research-and-development/">Research &amp; Dev</a></h4>
                                                <a class="tji-icon-btn" href="<?= $base_url ?>industries/research-and-development/" aria-label="Explore Research and Development">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <p class="project-desc">IoT, robotics, and applied AI initiatives, pioneering next-generation devices and high-impact commercial applications.</p>
                                        </div>
                                        <div class="project-img">
                                            <a href="<?= $base_url ?>industries/research-and-development/">
                                                <img src="<?= $base_url ?>assets/images/hero/rd.webp" alt="Research and Development" width="800" height="500" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4. Technology & Communications -->
                                <div class="swiper-slide">
                                    <div class="project-item h4-project-item">
                                        <div class="project-content">
                                            <span class="categories"><a href="<?= $base_url ?>industries/technology-and-communications/">Telecom &amp; Cloud</a></span>
                                            <div class="project-text">
                                                <h4 class="title"><a href="<?= $base_url ?>industries/technology-and-communications/">Technology &amp; Comms</a></h4>
                                                <a class="tji-icon-btn" href="<?= $base_url ?>industries/technology-and-communications/" aria-label="Explore Technology and Communications">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <p class="project-desc">2030 focus on scalable AI and cloud technology infrastructure, enterprise digital services, and robust telecom systems.</p>
                                        </div>
                                        <div class="project-img">
                                            <a href="<?= $base_url ?>industries/technology-and-communications/">
                                                <img src="<?= $base_url ?>assets/images/hero/technology.webp" alt="Technology and Communications" width="800" height="500" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5. Trading, Import & Export -->
                                <div class="swiper-slide">
                                    <div class="project-item h4-project-item">
                                        <div class="project-content">
                                            <span class="categories"><a href="<?= $base_url ?>industries/import-export/">Global Trade</a></span>
                                            <div class="project-text">
                                                <h4 class="title"><a href="<?= $base_url ?>industries/import-export/">Import &amp; Export</a></h4>
                                                <a class="tji-icon-btn" href="<?= $base_url ?>industries/import-export/" aria-label="Explore Import and Export">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <p class="project-desc">Sourcing and global distribution of coconuts, spices, rubber, value-added goods, and quality apparel products.</p>
                                        </div>
                                        <div class="project-img">
                                            <a href="<?= $base_url ?>industries/import-export/">
                                                <img src="<?= $base_url ?>assets/images/hero/import_export.webp" alt="Trading, Import and Export" width="800" height="500" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6. E-Commerce -->
                                <div class="swiper-slide">
                                    <div class="project-item h4-project-item">
                                        <div class="project-content">
                                            <span class="categories"><a href="<?= $base_url ?>industries/ecommerce/">Digital Commerce</a></span>
                                            <div class="project-text">
                                                <h4 class="title"><a href="<?= $base_url ?>industries/ecommerce/">E-Commerce</a></h4>
                                                <a class="tji-icon-btn" href="<?= $base_url ?>industries/ecommerce/" aria-label="Explore E-Commerce">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <p class="project-desc">Digital commerce platforms, logistics management, modern fulfillment space, and smart secure warehousing solutions.</p>
                                        </div>
                                        <div class="project-img">
                                            <a href="<?= $base_url ?>industries/ecommerce/">
                                                <img src="<?= $base_url ?>assets/images/hero/ecom.webp" alt="E-Commerce" width="800" height="500" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- 7. Gems & Gemstones -->
                                <div class="swiper-slide">
                                    <div class="project-item h4-project-item">
                                        <div class="project-content">
                                            <span class="categories"><a href="<?= $base_url ?>industries/gems-and-gemstones/">Precious Minerals</a></span>
                                            <div class="project-text">
                                                <h4 class="title"><a href="<?= $base_url ?>industries/gems-and-gemstones/">Gems &amp; Gemstones</a></h4>
                                                <a class="tji-icon-btn" href="<?= $base_url ?>industries/gems-and-gemstones/" aria-label="Explore Gems and Gemstones">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <p class="project-desc">Ethical sourcing, grading, certification, and trading of precious and semi-precious stones across international markets.</p>
                                        </div>
                                        <div class="project-img">
                                            <a href="<?= $base_url ?>industries/gems-and-gemstones/">
                                                <img src="<?= $base_url ?>assets/images/hero/gem.webp" alt="Gems and Gemstones" width="800" height="500" loading="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- 8. Agriculture & Plantation -->
                                <div class="swiper-slide">
                                    <div class="project-item h4-project-item">
                                        <div class="project-content">
                                            <span class="categories"><a href="<?= $base_url ?>industries/agriculture-and-plantation/">Agro &amp; Sustainability</a></span>
                                            <div class="project-text">
                                                <h4 class="title"><a href="<?= $base_url ?>industries/agriculture-and-plantation/">Agriculture &amp; Plantation</a></h4>
                                                <a class="tji-icon-btn" href="<?= $base_url ?>industries/agriculture-and-plantation/" aria-label="Explore Agriculture and Plantation">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                            <p class="project-desc">Large-scale agricultural crop production, sustainable plantation management, and development of value-added food products.</p>
                                        </div>
                                        <div class="project-img">
                                            <a href="<?= $base_url ?>industries/agriculture-and-plantation/">
                                                <img src="<?= $base_url ?>assets/images/hero/agriculture.webp" alt="Agriculture and Plantation">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Swiper Pagination -->
                            <div class="swiper-pagination-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action & Contact Section -->
    <section class="cta-section">
        <div class="container" data-aos="zoom-in">
            <span class="topic-badge-pill dark mb-3 d-inline-block">PARTNER WITH CROWN ASIA</span>
            <div class="text-white">
                <h2>Ready to Invest in <span>Real, Tangible Growth?</span></h2>
                <p>Access verified opportunities, real asset allocations, and institutional performance tracking through our secure Investor Portal.</p>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="btn-green">
                    <i class="bi bi-box-arrow-up-right me-2"></i>Register on Investor Portal
                </a>
                <a href="<?= $base_url ?>contact/" class="btn-ghost">
                    <i class="bi bi-chat-left-dots me-2"></i>Contact Corporate Office
                </a>
            </div>
        </div>
    </section>
<?php include_once ROOT_PATH . 'footer.php'; ?>
