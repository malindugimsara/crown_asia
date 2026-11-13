<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Agriculture & Plantation | Crown Asia LLC";
$page_desc  = "Crown Asia's Agriculture & Plantation division focused on large-scale food and crop production in target areas, sustainable estate management, and value-added agro-processing.";
include_once ROOT_PATH . 'header.php';
?>

    <!-- Sector Hero Section -->
    <section class="inner-hero">
        <div class="container inner-hero-content">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb">
                        <a href="<?= $base_url ?>">Home</a>
                        <span class="separator"><i class="bi bi-chevron-right"></i></span>
                        <a href="<?= $base_url ?>industries/">Industries</a>
                        <span class="separator"><i class="bi bi-chevron-right"></i></span>
                        <span class="active">Agriculture &amp; Plantation</span>
                    </nav>

                    <h1 class="inner-hero-title">Agriculture &amp; Plantation<br><span class="accent">Crop Production &amp; Agro-Processing</span></h1>
                    <p class="inner-hero-lead mb-4">
                        Large-scale food and commercial crop cultivation across fertile target regions, active plantation development projects, and value-added product processing.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#activities" class="btn-green">Explore Agricultural Operations</a>
                        <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-ghost">Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="sector-hero-visual">
                        <div class="hero-image-frame">
                            <img src="<?= $base_url ?>assets/images/agriculture.webp" alt="Crown Asia Large-Scale Agricultural Plantation" class="img-fluid">
                            <div class="hero-live-pill">
                                <span class="live-dot pulse"></span>
                                <span>Estates &amp; Agro-Processing Active</span>
                            </div>
                            <div class="hero-floating-stat">
                                <div class="stat-icon"><i class="bi bi-tree-fill"></i></div>
                                <div>
                                    <div class="stat-title">Asset-Backed Estates</div>
                                    <div class="stat-sub">Large-Scale Crop &amp; Value-Added Yield</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview & Core Agricultural Activities Section -->
    <section class="section section-white" id="activities">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">CORE OPERATIONS</span>
                <h2 class="section-title">Agriculture, Plantations &amp; Value-Added Processing</h2>
                <p class="section-subtitle mx-auto">Our agricultural division pairs productive land assets and scientific agronomy with modern post-harvest processing to capture full farm-to-market value.</p>
            </div>

            <div class="row g-4">
                <!-- Activity 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-sun-fill"></i></div>
                        <h4>Large-Scale Crop Production</h4>
                        <p>High-yield cultivation of staple food crops, specialty tea, tropical fruits, spices, and coconuts across fertile target agricultural zones.</p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-tree-fill"></i></div>
                        <h4>Plantation Projects</h4>
                        <p>Long-term estate development, soil enrichment, modern irrigation infrastructure, and multi-crop plantation management backed by real land assets.</p>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Value-Added Processing</h4>
                        <p>Post-harvest grading, dehydration, cold-pressed oil extraction, artisanal tea crafting, and export-ready packaging that multiply raw crop margins.</p>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-moisture"></i></div>
                        <h4>Precision Agronomy &amp; Agri-Tech</h4>
                        <p>Integrating IoT soil moisture telemetry, organic fertilization cycles, and sustainable water conservation to maximize seasonal harvest consistency.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cultivation, Estate & Value-Added Strategy Section -->
    <section class="strategy-section-dark" id="strategy">
        <div class="strategy-grid-bg"></div>
        <div class="strategy-glow-blob top-right"></div>
        <div class="strategy-glow-blob bottom-left"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center" data-aos="fade-up">
                <span class="topic-badge-pill">AGRI-VALUE CHAIN</span>
                <h2 class="strategy-heading-main">CULTIVATION, ESTATE &amp; PROCESSING STRATEGY</h2>
                <p class="strategy-lead-sub mx-auto">
                    How Crown Asia optimizes large-scale crop production in target areas and develops high-margin value-added agricultural products.
                </p>
            </div>

            <div class="strategy-connector-wrap">
                <div class="row g-4">
                    <!-- Pillar 01: Target Area Crop Production -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 01</span>
                                    <h3 class="pillar-card-title">TARGET AREA<br>CROP PRODUCTION</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Plant Stem & Leaves -->
                                        <path d="M32 50V26" stroke="#1DB954" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M32 34C22 34 16 27 16 18C25 18 32 24 32 34Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <path d="M32 28C42 28 48 21 48 12C39 12 32 18 32 28Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <!-- Terraced Soil Rows -->
                                        <path d="M12 50H52" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <path d="M18 55H46" stroke="#1DB954" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="3 3"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Selecting high-fertility microclimates with reliable water access to scale food crops, coconut estates, spice gardens, and perennial plantation yields with predictable harvest cycles.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 02: Plantation Project Management -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 02</span>
                                    <h3 class="pillar-card-title">PLANTATION ASSET<br>MANAGEMENT</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Rolling Plantation Hills -->
                                        <path d="M10 44C18 34 28 34 38 44" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <path d="M26 44C36 32 46 32 54 44" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <path d="M10 50H54" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <!-- Sun / Climate Monitoring -->
                                        <circle cx="22" cy="20" r="6" stroke="#1DB954" stroke-width="1.8"/>
                                        <path d="M22 10V12M22 28V30M12 20H14M30 20H32M15 13L16.5 14.5M27.5 25.5L29 27M29 13L27.5 14.5M16.5 25.5L15 27" stroke="#1DB954" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Implementing multi-crop interplanting, automated drip irrigation, regenerative soil management, and trained estate teams to protect long-term land productivity and asset appreciation.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 03: Value-Added Product Development -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 03</span>
                                    <h3 class="pillar-card-title">VALUE-ADDED<br>AGRO-PROCESSING</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Processed Product Container -->
                                        <rect x="18" y="20" width="28" height="32" rx="4" stroke="#1DB954" stroke-width="1.8"/>
                                        <path d="M23 14H41V20H23V14Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <!-- Organic Leaf Emblem Inside -->
                                        <path d="M32 42V32M32 37C27 37 25 33 25 29C29 29 32 32 32 37ZM32 34C37 34 39 30 39 26C35 26 32 29 32 34Z" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Converting raw harvests into shelf-stable, certified food ingredients, specialty teas, essential oils, and consumer-ready agricultural products for domestic and export markets.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Risk Disclosure & Agronomic Governance Section -->
    <section class="section section-light" id="risks">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">AGRONOMIC GOVERNANCE</span>
                <h2 class="section-title">Climate, Yield &amp; Supply Chain Risk Governance</h2>
                <p class="section-subtitle mx-auto">
                    Agricultural and plantation investments are subject to seasonal weather, biological factors, and commodity market cycles. Crown Asia enforces proactive agronomic controls to safeguard yields and asset value.
                </p>
            </div>

            <div class="row g-4">
                <!-- Risk 1: Climate & Weather Resilience -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon">
                                <i class="bi bi-cloud-sun-fill"></i>
                            </div>
                            <h4>Climate &amp; Weather Resilience</h4>
                        </div>
                        <p class="risk-card-desc">
                            Droughts, unseasonal rainfall, and temperature shifts that can affect seasonal crop flowering and harvest volumes.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Geographic diversification across distinct agro-climatic zones.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>On-estate water reservoirs, rainwater harvesting, and drip irrigation.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Selection of climate-resilient, disease-tolerant crop cultivars.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Water &amp; Climate</span>
                            <span class="value text-success">Irrigated &amp; Multi-Zone</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 2: Commodity Price & Yield Cycles -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber">
                                <i class="bi bi-bar-chart-line-fill"></i>
                            </div>
                            <h4>Commodity Price &amp; Yield Cycles</h4>
                        </div>
                        <p class="risk-card-desc">
                            Raw agricultural price fluctuations and multi-year maturation timelines for perennial plantation crops.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Intercropping short-cycle food crops alongside perennial estates.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>In-house value-added processing to insulate against raw price dips.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Forward off-take contracts with institutional food and export buyers.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Margin Protection</span>
                            <span class="value text-warning">Value-Added Processing</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 3: Post-Harvest Quality & Food Safety -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <h4>Quality &amp; Post-Harvest Integrity</h4>
                        </div>
                        <p class="risk-card-desc">
                            Spoilage, moisture contamination, or regulatory residue limits impacting food safety and international export eligibility.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Good Agricultural Practices (GAP) and hygienic processing facilities.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Controlled drying, climate-monitored warehousing, and batch testing.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Full farm-to-package traceability and phytosanitary certification.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Quality Protocol</span>
                            <span class="value text-primary">GAP &amp; Full Traceability</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Risk Disclosure Callout Banner -->
            <div class="mt-4 p-4 rounded-4 bg-white border d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3" data-aos="fade-up">
                <div class="d-flex align-items-center gap-3">
                    <div class="activity-icon mb-0 flex-shrink-0" style="width:48px;height:48px;font-size:20px;">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div>
                        <h5 class="mb-1 text-dark" style="font-size:16px;">Verified Risk Disclosures &amp; Investor Eligibility</h5>
                        <p class="small text-muted mb-0">Prior to funding, participants must complete verification and review full offering memoranda.</p>
                    </div>
                </div>
                <div>
                    <a href="<?= $base_url ?>legal/risk-disclosure/" class="btn-ghost text-nowrap">Read Risk Disclosure <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles & Insights Section -->
    <section class="insights-section-dark" id="insights">
        <div class="insights-grid-bg"></div>
        <div class="insights-glow-blob top-right"></div>
        <div class="insights-glow-blob bottom-left"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">INVESTOR KNOWLEDGE</span>
                <h2 class="section-title">Related Insights &amp; Guides</h2>
                <p class="section-subtitle mx-auto">Agronomic insights and practical guides for evaluating plantation projects and platform participation.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Agriculture and Plantation Investment Guide">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Investor Education</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">What to Look for in an Agriculture or Plantation Investment</a></h4>
                            <p class="small text-muted mb-3">Evaluating land tenure, crop maturation cycles, irrigation infrastructure, and value-added off-take channels.</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Crown Asia Agro Desk</span>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Evaluating Investment Opportunities">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Investor Education</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">How to Evaluate an Investment Opportunity Before You Commit</a></h4>
                            <p class="small text-muted mb-3">Key metrics, risk checks, and due diligence steps every investor should complete before allocating funds.</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Crown Asia Research</span>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1621416894569-0f39ed31d247?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="USDT Deposits and Withdrawals">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Platform Guide</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/">How USDT Deposits and Withdrawals Work on Crown Asia</a></h4>
                            <p class="small text-muted mb-3">Supported blockchain networks, transaction confirmation timelines, fee structures, and safety tips.</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Treasury Team</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions Section -->
    <section class="section section-light" id="faq">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">COMMON QUERIES</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle mx-auto">Key answers regarding Crown Asia's agricultural production, plantation projects, and value-added product development.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="agricultureFAQ">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What crops and food products are produced across Crown Asia's agricultural projects?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#agricultureFAQ">
                                <div class="accordion-body">
                                    Our agricultural operations focus on high-demand food crops, specialty Ceylon teas, coconuts, spices (cinnamon, black pepper, cloves), tropical fruits, and commercial plantation crops cultivated in fertile target regions.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does Crown Asia develop value-added agricultural products?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#agricultureFAQ">
                                <div class="accordion-body">
                                    Rather than relying solely on raw commodity sales, we process harvests into higher-margin value-added goods—including cold-pressed virgin coconut oil, desiccated coconut, graded spice extracts, artisanal specialty teas, and retail-packaged food products.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How are target areas selected for new plantation and farming projects?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#agricultureFAQ">
                                <div class="accordion-body">
                                    We evaluate regions based on soil fertility, rainfall and irrigation security, verified land tenure, proximity to processing facilities, and export logistics connectivity—ensuring each project is backed by productive physical assets.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How does Crown Asia protect harvests against seasonal weather and price fluctuations?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#agricultureFAQ">
                                <div class="accordion-body">
                                    We combine multi-zone geographic diversification, on-site irrigation reservoirs, and intercropping of short-cycle food crops with perennial plantations, while locking in B2B off-take agreements through our global trading desk.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How does Agriculture &amp; Plantation integrate with other Crown Asia sectors?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#agricultureFAQ">
                                <div class="accordion-body">
                                    Harvests and processed goods feed directly into our Trading, Import &amp; Export and E-Commerce channels for international distribution, while utilizing IoT environmental sensors developed by our Research &amp; Development division.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Where can participants review plantation milestones and approved offerings?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#agricultureFAQ">
                                <div class="accordion-body">
                                    Approved participants can log in to the <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-underline">Crown Asia Investor Portal</a> to review estate progress reports, yield disclosures, and audited offering documents.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore Investment Opportunities Final CTA -->
    <section class="cta-section">
        <div class="cta-glow-blob"></div>
        <div class="container" data-aos="zoom-in">
            <div class="cta-card-luxury">
                <span class="topic-badge-pill mb-3">INVESTMENT ACCESS</span>
                <h2>Explore Approved <span>Investment Opportunities</span></h2>
                <p>Access transparent, asset-backed investment opportunities across our eight strategic business sectors with seamless USDT funding.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?= $base_url ?>investment-opportunities/" class="cta-btn-primary">
                        <i class="bi bi-grid-fill me-1"></i> Browse All Offerings
                    </a>
                    <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="cta-btn-secondary">
                        <i class="bi bi-person-plus-fill me-1"></i> Create Investor Account
                    </a>
                </div>
                <div class="cta-trust-badges mt-4 d-flex flex-wrap justify-content-center gap-4">
                    <span><i class="bi bi-tree"></i> Asset-Backed Plantations</span>
                    <span><i class="bi bi-wallet2"></i> Instant USDT Settlement</span>
                    <span><i class="bi bi-patch-check"></i> Value-Added Agro-Processing</span>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>