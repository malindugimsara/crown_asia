<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "E-Commerce | Crown Asia LLC";
$page_desc  = "Crown Asia's E-Commerce division operating scalable online retail platforms, logistics networks, and smart, secure warehousing solutions.";
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
                        <span class="active">E-Commerce</span>
                    </nav>

                    <h1 class="inner-hero-title">E-Commerce &amp;<br><span class="accent">Smart Fulfillment</span></h1>
                    <p class="inner-hero-lead mb-4">
                        Scalable digital retail platforms, integrated supply-chain logistics, and smart, secure warehousing infrastructure powering modern commerce.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#activities" class="btn-green">Explore E-Commerce Operations</a>
                        <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-ghost">Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="sector-hero-visual">
                        <div class="hero-image-frame">
                            <img src="<?= $base_url ?>assets/images/hero/ecom.webp" alt="Crown Asia Smart E-Commerce Fulfillment Warehouse" class="img-fluid">
                            <div class="hero-live-pill">
                                <span class="live-dot pulse"></span>
                                <span>Smart Fulfillment Hubs Active</span>
                            </div>
                            <div class="hero-floating-stat">
                                <div class="stat-icon"><i class="bi bi-box-seam-fill"></i></div>
                                <div>
                                    <div class="stat-title">Automated Warehousing</div>
                                    <div class="stat-sub">24/7 Secure Storage &amp; Dispatch</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview & Core E-Commerce Activities Section -->
    <section class="section section-white" id="activities">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">CORE OPERATIONS</span>
                <h2 class="section-title">E-Commerce, Logistics &amp; Warehousing</h2>
                <p class="section-subtitle mx-auto">Our digital commerce division combines high-converting online retail channels with asset-backed storage facilities and automated order fulfillment.</p>
            </div>

            <div class="row g-4">
                <!-- Activity 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-cart-check-fill"></i></div>
                        <h4>E-Commerce Services</h4>
                        <p>Operating direct-to-consumer (D2C) online storefronts, B2B digital marketplaces, and multi-channel brand distribution platforms.</p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-building-fill-lock"></i></div>
                        <h4>Smart, Secure Warehousing</h4>
                        <p>High-density, climate-monitored storage facilities equipped with biometric access, 24/7 surveillance, and automated inventory tracking.</p>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-truck"></i></div>
                        <h4>Logistics &amp; Storage Space</h4>
                        <p>Flexible commercial storage capacity, cross-docking terminals, and last-mile carrier integration for rapid order dispatch.</p>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-upc-scan"></i></div>
                        <h4>Fulfillment &amp; OMS Tech</h4>
                        <p>Real-time Order Management Systems (OMS), barcode/RFID pick-and-pack workflows, and automated returns processing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fulfillment & Digital Commerce Strategy Section -->
    <section class="strategy-section-dark" id="strategy">
        <div class="strategy-grid-bg"></div>
        <div class="strategy-glow-blob top-right"></div>
        <div class="strategy-glow-blob bottom-left"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center" data-aos="fade-up">
                <span class="topic-badge-pill">INFRASTRUCTURE ADVANTAGE</span>
                <h2 class="strategy-heading-main">COMMERCE &amp; WAREHOUSING STRATEGY</h2>
                <p class="strategy-lead-sub mx-auto">
                    How Crown Asia integrates digital storefronts with smart, secure warehousing and agile fulfillment networks.
                </p>
            </div>

            <div class="strategy-connector-wrap">
                <div class="row g-4">
                    <!-- Pillar 01: Multi-Channel E-Commerce -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 01</span>
                                    <h3 class="pillar-card-title">OMNICHANNEL<br>E-COMMERCE</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Shopping Cart / Storefront -->
                                        <path d="M12 16H18L23 40H47L52 22H20" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="25" cy="48" r="3.5" stroke="#1DB954" stroke-width="1.8"/>
                                        <circle cx="45" cy="48" r="3.5" stroke="#1DB954" stroke-width="1.8"/>
                                        <!-- Digital Signal / Growth -->
                                        <path d="M30 14L35 19L44 10" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Scaling proprietary online retail stores and B2B digital portals supported by data-driven merchandising, localized payment gateways, and automated customer engagement.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 02: Smart, Secure Warehousing -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 02</span>
                                    <h3 class="pillar-card-title">SMART &amp; SECURE<br>WAREHOUSING</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Warehouse Structure -->
                                        <path d="M10 24L32 10L54 24V52H10V24Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <!-- Storage Racks / Pallets -->
                                        <rect x="18" y="32" width="11" height="9" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                        <rect x="35" y="32" width="11" height="9" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                        <rect x="18" y="43" width="11" height="9" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                        <rect x="35" y="43" width="11" height="9" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                        <!-- Security Shield Accent -->
                                        <circle cx="32" cy="22" r="3" fill="#1DB954"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Purpose-built storage spaces featuring WMS barcode automation, environmental climate sensors, fire-suppression systems, and 24/7 monitored access control.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 03: Agile Fulfillment & Logistics -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 03</span>
                                    <h3 class="pillar-card-title">AGILE LOGISTICS<br>&amp; DISPATCH</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Delivery / Logistics Truck -->
                                        <rect x="10" y="20" width="28" height="22" rx="2" stroke="#1DB954" stroke-width="1.8"/>
                                        <path d="M38 28H48L54 35V42H38V28Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <circle cx="20" cy="45" r="4" fill="#0D120F" stroke="#1DB954" stroke-width="1.8"/>
                                        <circle cx="46" cy="45" r="4" fill="#0D120F" stroke="#1DB954" stroke-width="1.8"/>
                                        <!-- Speed / Tracking Lines -->
                                        <path d="M14 14H28M18 10H34" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Strategically positioned regional storage hubs paired with multi-carrier freight routing ensure same-day order processing, lower shipping overhead, and real-time tracking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Risk Disclosure & Operational Governance Section -->
    <section class="section section-light" id="risks">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">OPERATIONAL GOVERNANCE</span>
                <h2 class="section-title">Warehouse Security, Inventory &amp; Logistics Governance</h2>
                <p class="section-subtitle mx-auto">
                    High-volume e-commerce and storage operations require strict physical security, accurate stock controls, and carrier resilience. Crown Asia enforces institutional standards across every facility.
                </p>
            </div>

            <div class="row g-4">
                <!-- Risk 1: Physical Security & Shrinkage -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <h4>Warehouse Security &amp; Custody</h4>
                        </div>
                        <p class="risk-card-desc">
                            Safeguarding stored merchandise, high-value inventory, and client stock against theft, environmental damage, or unauthorized access.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>24/7 AI-assisted CCTV monitoring, perimeter alarms, and biometric entry.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Climate-controlled zones and automated fire-detection infrastructure.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Comprehensive commercial property and stored-goods insurance coverage.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Facility Protection</span>
                            <span class="value text-success">24/7 Biometric &amp; Insured</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 2: Inventory Turnover & Demand -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber">
                                <i class="bi bi-bar-chart-steps"></i>
                            </div>
                            <h4>Inventory &amp; Demand Velocity</h4>
                        </div>
                        <p class="risk-card-desc">
                            Seasonal consumer shifts and SKU obsolescence that can tie up working capital or strain storage capacity if unmanaged.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Predictive demand forecasting and real-time WMS cycle counting.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Agile batch replenishment aligned with verified sell-through metrics.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Multi-channel liquidation and B2B wholesale distribution outlets.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Stock Accuracy</span>
                            <span class="value text-warning">99.8% WMS Cycle Audit</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 3: Carrier & Last-Mile Delays -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h4>Fulfillment &amp; Carrier Continuity</h4>
                        </div>
                        <p class="risk-card-desc">
                            Peak-season shipping bottlenecks, customs clearance delays, or courier disruptions impacting delivery timelines and customer satisfaction.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Multi-carrier API integration with automated rate and route failover.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Distributed regional storage hubs positioned near high-density markets.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Automated tracking updates and standardized SLA dispute resolution.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Dispatch SLA</span>
                            <span class="value text-primary">Same-Day Fulfillment</span>
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
                <p class="section-subtitle mx-auto">Operational insights and practical guides covering smart warehousing infrastructure, e-commerce logistics, and platform participation.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="<?= $base_url ?>assets/images/offerings/smart-warehousing.webp" alt="Smart Warehousing and E-Commerce Logistics" width="800" height="500" loading="lazy">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Industry Insights</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">Why Smart Warehousing &amp; Fulfillment Infrastructure Drive Modern E-Commerce</a></h4>
                            <p class="small text-muted mb-3">How automated storage facilities and regional logistics hubs create durable, asset-backed cash flows.</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Crown Asia Logistics Desk</span>
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
                            <p class="small text-muted mb-3">Key metrics, risk checks, and due diligence steps every investor should complete before allocating funds.</p>
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
                <p class="section-subtitle mx-auto">Key answers regarding Crown Asia's e-commerce platforms, storage facilities, and smart warehousing operations.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="ecommerceFAQ">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What e-commerce services and fulfillment operations does Crown Asia run?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#ecommerceFAQ">
                                <div class="accordion-body">
                                    Crown Asia operates direct-to-consumer online retail storefronts, B2B wholesale portals, and third-party logistics (3PL) fulfillment services—handling inventory intake, barcode cataloging, order picking, packaging, and multi-carrier dispatch.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What makes Crown Asia's warehousing solutions smart and secure?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#ecommerceFAQ">
                                <div class="accordion-body">
                                    Our storage facilities integrate cloud-based Warehouse Management Systems (WMS), RFID/barcode tracking, automated climate monitoring, fire suppression, biometric access control, and 24/7 AI-assisted CCTV surveillance to ensure complete inventory custody and real-time visibility.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How are logistics and commercial storage spaces utilized?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#ecommerceFAQ">
                                <div class="accordion-body">
                                    Our logistics and storage hubs support both Crown Asia's internal retail brands and commercial merchant partners—providing scalable pallet storage, pick-and-pack fulfillment zones, and regional cross-docking to reduce last-mile delivery times.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How does Crown Asia protect stored inventory against loss or damage?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#ecommerceFAQ">
                                <div class="accordion-body">
                                    In addition to strict physical access controls and digital cycle auditing (maintaining 99.8%+ inventory accuracy), all warehouse facilities and stored goods are covered by comprehensive commercial property and transit insurance policies.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How does the E-Commerce division connect with other Crown Asia sectors?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#ecommerceFAQ">
                                <div class="accordion-body">
                                    Our E-Commerce and Warehousing network distributes value-added products sourced through our Import &amp; Export and Agriculture divisions, deploys IoT and sorting robotics developed by our R&amp;D lab, and runs on our Technology &amp; Communications cloud infrastructure.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Where can participants review warehouse assets and approved offerings?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#ecommerceFAQ">
                                <div class="accordion-body">
                                    Approved participants can log in to the <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-underline">Crown Asia Investor Portal</a> to inspect verified facility assets, fulfillment metrics, and audited offering documents.
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
                    <span><i class="bi bi-building-check"></i> Smart Secure Warehousing</span>
                    <span><i class="bi bi-wallet2"></i> Instant USDT Settlement</span>
                    <span><i class="bi bi-shield-check"></i> Asset-Backed Logistics</span>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>