<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Trading, Import & Export | Crown Asia LLC";
$page_desc  = "Crown Asia's global trading, import, and export operations covering coconuts, spices, rubber, value-added products, apparel sourcing, and international distribution.";
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
                        <span class="active">Trading, Import &amp; Export</span>
                    </nav>

                    <h1 class="inner-hero-title">Trading, Import &amp; Export<br><span class="accent">Global Commodities &amp; Apparel</span></h1>
                    <p class="inner-hero-lead mb-4">
                        Cross-border sourcing, value-added agricultural exports, and ethical apparel distribution connecting premier Asian producers with international buyer markets.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#activities" class="btn-green">Explore Trade Sectors</a>
                        <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-ghost">Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="sector-hero-visual">
                        <div class="hero-image-frame">
                            <img src="<?= $base_url ?>assets/images/hero/import_export.webp" alt="Crown Asia International Import and Export Logistics Hub" class="img-fluid" width="1024" height="768">
                            <div class="hero-live-pill">
                                <span class="live-dot pulse"></span>
                                <span>Global Trade &amp; Export Desk Active</span>
                            </div>
                            <div class="hero-floating-stat">
                                <div class="stat-icon"><i class="bi bi-globe-americas"></i></div>
                                <div>
                                    <div class="stat-title">B2B Global Distribution</div>
                                    <div class="stat-sub">Commodities &amp; Apparel Supply</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview & Core Trade Activities Section -->
    <section class="section section-white" id="activities">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">CORE OPERATIONS</span>
                <h2 class="section-title">Commodities, Value-Added Goods &amp; Apparel</h2>
                <p class="section-subtitle mx-auto">Our international trading division bridges origin-level procurement and value-added processing with institutional B2B distribution across high-demand global markets[cite: 3].</p>
            </div>

            <div class="row g-4">
                <!-- Activity 1: Coconuts & Value-Added Products -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-droplet-fill"></i></div>
                        <h4>Coconuts &amp; Value-Added</h4>
                        <p>Exporting organic virgin coconut oil, desiccated coconut, coconut milk, coco peat substrates, and retail-packaged coconut derivatives[cite: 3].</p>
                    </div>
                </div>

                <!-- Activity 2: Spices & Botanicals -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-flower1"></i></div>
                        <h4>Spices &amp; Extracts</h4>
                        <p>Direct-origin sourcing and grading of true Ceylon cinnamon, black pepper, cloves, cardamom, and processed essential oils for food and wellness brands[cite: 3].</p>
                    </div>
                </div>

                <!-- Activity 3: Natural Rubber -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-layers-fill"></i></div>
                        <h4>Rubber &amp; Industrial</h4>
                        <p>Supplying certified ribbed smoked sheets (RSS), crepe rubber, and value-added industrial rubber compounds to international manufacturing partners[cite: 3].</p>
                    </div>
                </div>

                <!-- Activity 4: Apparel Industry Focus -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-bag-check-fill"></i></div>
                        <h4>Apparel Industry Focus</h4>
                        <p>End-to-end garment sourcing, private-label manufacturing coordination, textile procurement, and export fulfillment for international apparel retailers[cite: 3].</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Markets, Sourcing & Distribution Strategy Section -->
    <section class="strategy-section-dark" id="strategy">
        <div class="strategy-grid-bg"></div>
        <div class="strategy-glow-blob top-right"></div>
        <div class="strategy-glow-blob bottom-left"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center" data-aos="fade-up">
                <span class="topic-badge-pill">GLOBAL SUPPLY CHAIN</span>
                <h2 class="strategy-heading-main">TARGET MARKETS, SOURCING &amp; DISTRIBUTION</h2>
                <p class="strategy-lead-sub mx-auto">
                    How Crown Asia manages origin procurement, value-added processing, and cross-border B2B distribution across global trade corridors[cite: 3].
                </p>
            </div>

            <div class="strategy-connector-wrap">
                <div class="row g-4">
                    <!-- Pillar 01: Direct Origin Sourcing -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 01</span>
                                    <h3 class="pillar-card-title">DIRECT ORIGIN<br>SOURCING</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Location Pin & Globe -->
                                        <path d="M32 10C22.6 10 15 17.4 15 26.5C15 38.5 32 54 32 54C32 54 49 38.5 49 26.5C49 17.4 41.4 10 32 10Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <circle cx="32" cy="26" r="7" stroke="#1DB954" stroke-width="1.8"/>
                                        <!-- Leaf / Commodity Accent -->
                                        <path d="M29 26C31 24 34 24 35 26C33 28 30 28 29 26Z" fill="#1DB954"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Establishing direct procurement contracts with vetted agricultural estates, spice collectives, and compliant apparel factories across Sri Lanka and South Asia to secure traceable, high-margin supply[cite: 3].
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 02: Value-Added Processing & QA -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 02</span>
                                    <h3 class="pillar-card-title">VALUE-ADDED<br>PROCESSING &amp; QA</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Export Package Box -->
                                        <path d="M32 10L52 21V43L32 54L12 43V21L32 10Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <path d="M12 21L32 32L52 21M32 32V54" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M22 15.5L42 26.5" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Upgrading raw commodities and textiles into export-ready, branded, and certified products—including organic coconut formulations, graded spice packs, and finished garments tailored to buyer specifications[cite: 3].
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 03: Target Markets & Distribution -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 03</span>
                                    <h3 class="pillar-card-title">TARGET MARKETS &amp;<br>DISTRIBUTION</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Global Trade Routes & Container Ship -->
                                        <circle cx="32" cy="24" r="14" stroke="#1DB954" stroke-width="1.8"/>
                                        <ellipse cx="32" cy="24" rx="6" ry="14" stroke="#1DB954" stroke-width="1.5"/>
                                        <path d="M18 24H46" stroke="#1DB954" stroke-width="1.5"/>
                                        <!-- Logistics Base / Freight -->
                                        <path d="M12 46L18 54H46L52 46H12Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <rect x="20" y="40" width="10" height="6" stroke="#1DB954" stroke-width="1.5"/>
                                        <rect x="34" y="40" width="10" height="6" stroke="#1DB954" stroke-width="1.5"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Serving wholesale distributors, retail chains, and industrial buyers across the United States, Europe, the Middle East, and Asia-Pacific with containerized freight and customs-cleared delivery[cite: 3].
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Risk Disclosure & Trade Governance Section -->
    <section class="section section-light" id="risks">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">TRADE GOVERNANCE</span>
                <h2 class="section-title">Supply Chain, Quality &amp; Trade Risk Governance</h2>
                <p class="section-subtitle mx-auto">
                    International import/export operations involve commodity price shifts, logistics timelines, and regulatory compliance. Crown Asia enforces strict trade governance across every shipment[cite: 3].
                </p>
            </div>

            <div class="row g-4">
                <!-- Risk 1: Quality & Compliance -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <h4>Quality &amp; Export Compliance</h4>
                        </div>
                        <p class="risk-card-desc">
                            Ensuring agricultural commodities and manufactured apparel meet strict FDA, EU, and destination-market phytosanitary and ethical standards[cite: 3].
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Independent pre-shipment lab testing, moisture grading, and SGS inspections.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Full phytosanitary, organic, and country-of-origin documentation.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Audited ethical compliance across all partner apparel manufacturing units[cite: 3].</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Quality Standard</span>
                            <span class="value text-success">100% Pre-Shipment QA</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 2: Price & Currency Exposure -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber">
                                <i class="bi bi-currency-exchange"></i>
                            </div>
                            <h4>Commodity &amp; FX Exposure</h4>
                        </div>
                        <p class="risk-card-desc">
                            Seasonal raw material price swings in coconuts, spices, and rubber alongside cross-border currency fluctuations during transit windows[cite: 3].
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Procurement matched against confirmed B2B buyer purchase orders (POs).</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Fixed-price forward supply agreements with vetted regional producers.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Integrated FX treasury hedging protecting export profit margins.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Commercial Backing</span>
                            <span class="value text-warning">Confirmed B2B Orders</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 3: Freight & Settlement -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue">
                                <i class="bi bi-truck-front-fill"></i>
                            </div>
                            <h4>Logistics &amp; Trade Settlement</h4>
                        </div>
                        <p class="risk-card-desc">
                            Maritime transit delays, port congestion, cargo damage, or buyer counterparty default across international shipping routes[cite: 3].
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Irrevocable Letters of Credit (LC) and verified advance trade terms.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Comprehensive all-risk marine and air cargo insurance coverage.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Multi-carrier freight forwarding with real-time container tracking.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Cargo &amp; Payment</span>
                            <span class="value text-primary">LC &amp; Insured Freight</span>
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
                        <p class="small text-muted mb-0">Prior to funding, participants must complete verification and review full offering memoranda[cite: 6, 17].</p>
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
                <p class="section-subtitle mx-auto">Trade intelligence and practical guides covering value-added commodity exports, apparel supply chains, and platform participation[cite: 3, 5].</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="<?= $base_url ?>assets/images/common/cargo-logistics.webp" alt="Value-Added Spices and Agricultural Exports" width="800" height="500" loading="lazy">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Industry Insights</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">Scaling Value-Added Coconut, Spice &amp; Rubber Exports for Global Markets</a></h4>
                            <p class="small text-muted mb-3">How origin processing and international certification unlock higher margins in B2B commodity trade[cite: 3].</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Crown Asia Trade Desk</span>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="<?= $base_url ?>assets/images/blog/blog-1.webp" alt="Evaluating Investment Opportunities" width="800" height="500" loading="lazy">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Investor Education</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">How to Evaluate an Investment Opportunity Before You Commit</a></h4>
                            <p class="small text-muted mb-3">Key metrics, risk checks, and due diligence steps every investor should complete before allocating funds[cite: 5, 17].</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Crown Asia Research</span>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="<?= $base_url ?>assets/images/blog/blog-2.webp" alt="USDT Deposits and Withdrawals" width="800" height="500" loading="lazy">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Platform Guide</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/">How USDT Deposits and Withdrawals Work on Crown Asia</a></h4>
                            <p class="small text-muted mb-3">Supported blockchain networks, transaction confirmation timelines, fee structures, and safety tips[cite: 4, 5].</p>
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
                <p class="section-subtitle mx-auto">Key answers regarding Crown Asia's commodity exports, apparel sourcing, target markets, and trade risk controls[cite: 3].</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="tradeFAQ">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What core commodities and value-added products does Crown Asia export?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#tradeFAQ">
                                <div class="accordion-body">
                                    We specialize in value-added coconut products (virgin coconut oil, desiccated coconut, coconut milk, and coco peat), origin-graded spices (true Ceylon cinnamon, black pepper, cloves, and cardamom), natural rubber sheets and compounds, and finished apparel products[cite: 3].
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does Crown Asia operate within the apparel industry?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#tradeFAQ">
                                <div class="accordion-body">
                                    Our apparel division connects international clothing brands and wholesale buyers with ethically audited manufacturing facilities in South Asia—managing fabric sourcing, private-label production, quality inspection, and containerized export logistics[cite: 3].
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Which international target markets does this division serve?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#tradeFAQ">
                                <div class="accordion-body">
                                    Our primary export distribution corridors serve wholesale distributors, food manufacturers, retail chains, and industrial buyers across the United States, European Union, United Kingdom, Middle East, and Asia-Pacific[cite: 3].
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How are product quality and export certifications verified before shipping?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#tradeFAQ">
                                <div class="accordion-body">
                                    Every export batch undergoes independent laboratory testing, moisture and grade verification, and pre-shipment inspection. Full phytosanitary certificates, organic certifications, and customs bills of lading are issued prior to vessel departure.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How does Trading, Import &amp; Export integrate with other Crown Asia sectors?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#tradeFAQ">
                                <div class="accordion-body">
                                    This division works closely with our Agriculture &amp; Plantation sector to process and export estate harvests, utilizes our E-Commerce warehousing network for regional fulfillment, and relies on our Forex Treasury desk for multi-currency trade hedging[cite: 3, 17].
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Where can participants review trade offerings and audited shipment disclosures?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#tradeFAQ">
                                <div class="accordion-body">
                                    Approved participants can log in to the <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-underline">Crown Asia Investor Portal</a> to review active trade financing offerings, verified export contracts, and audited disclosures[cite: 6, 17].
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
                <p>Access transparent, asset-backed investment opportunities across our eight strategic business sectors with seamless USDT funding[cite: 17].</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?= $base_url ?>investment-opportunities/" class="cta-btn-primary">
                        <i class="bi bi-grid-fill me-1"></i> Browse All Offerings
                    </a>
                    <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="cta-btn-secondary">
                        <i class="bi bi-person-plus-fill me-1"></i> Create Investor Account
                    </a>
                </div>
                <div class="cta-trust-badges mt-4 d-flex flex-wrap justify-content-center gap-4">
                    <span><i class="bi bi-box-seam"></i> Value-Added Exports</span>
                    <span><i class="bi bi-wallet2"></i> Instant USDT Settlement</span>
                    <span><i class="bi bi-shield-check"></i> Insured Global Trade</span>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>