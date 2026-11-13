<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Real Estate Investment | Crown Asia LLC";
$page_desc  = "Crown Asia's institutional real estate acquisitions, prime commercial developments, luxury residential portfolios, and asset-backed property syndications.";
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
                        <span class="active">Real Estate Investment</span>
                    </nav>

                    <h1 class="inner-hero-title">Real Estate Investment &amp;<br><span class="accent">Asset Development</span></h1>
                    <p class="inner-hero-lead mb-4">
                        Strategic property acquisitions, premium commercial and hospitality developments, and high-yield asset-backed portfolios across prime global metropolitan hubs.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#activities" class="btn-green">Explore Core Portfolio</a>
                        <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-ghost">Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="sector-hero-visual">
                        <div class="hero-image-frame">
                            <img src="<?= $base_url ?>assets/images/real-state.webp" alt="Crown Asia Real Estate Investment Desk" class="img-fluid">
                            <div class="hero-live-pill">
                                <span class="live-dot pulse"></span>
                                <span>Global Property Syndications Active</span>
                            </div>
                            <div class="hero-floating-stat">
                                <div class="stat-icon"><i class="bi bi-buildings"></i></div>
                                <div>
                                    <div class="stat-title">Prime Global Assets</div>
                                    <div class="stat-sub">Dubai • USA • Asia Pacific</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview & Real Estate Activities Section -->
    <section class="section section-white" id="activities">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">CORE OPERATIONS</span>
                <h2 class="section-title">Real Estate Activities</h2>
                <p class="section-subtitle mx-auto">Our real estate operations combine rigorous feasibility studies, institutional asset management, and prime land banking to generate recurring rental cash flow and long-term capital appreciation.</p>
            </div>

            <div class="row g-4">
                <!-- Activity 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-buildings-fill"></i></div>
                        <h4>Commercial &amp; Logistics</h4>
                        <p>Grade-A corporate office complexes, logistics hubs, and modern business parks leased to high-credit institutional tenants with long-term inflation-hedged contracts.</p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-house-door-fill"></i></div>
                        <h4>Luxury Residential</h4>
                        <p>High-end residential developments, premium beachfront estates, and boutique hospitality properties situated in world-class tourism and lifestyle destinations.</p>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-pin-map-fill"></i></div>
                        <h4>Strategic Land Banking</h4>
                        <p>Pre-development acquisition of large-scale, high-potential land tracts along planned infrastructure corridors in the United States, Dubai, and emerging Asian growth corridors.</p>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-pie-chart-fill"></i></div>
                        <h4>Property Syndication</h4>
                        <p>Fractional real estate syndication providing participants transparent asset-backed legal ownership, automated rental distributions, and secondary liquidity options.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Markets and Strategy Section -->
    <section class="strategy-section-dark" id="strategy">
        <div class="strategy-grid-bg"></div>
        <div class="strategy-glow-blob top-right"></div>
        <div class="strategy-glow-blob bottom-left"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center" data-aos="fade-up">
                <span class="topic-badge-pill">STRATEGIC ADVANTAGE</span>
                <h2 class="strategy-heading-main">ACQUISITION &amp; DEVELOPMENT METHODOLOGY</h2>
                <p class="strategy-lead-sub mx-auto">
                    How Crown Asia structures tangible real estate investments to maximize capital safety, net cash yield, and asset appreciation.
                </p>
            </div>

            <div class="strategy-connector-wrap">
                <div class="row g-4">
                    <!-- Pillar 01: Location & Demographic Modeling -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 01</span>
                                    <h3 class="pillar-card-title">LOCATION &amp;<br>DEMOGRAPHIC DATA</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Map Outline & GPS Pin -->
                                        <path d="M12 20L26 14L38 20L52 14V46L38 52L26 46L12 52V20Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <path d="M26 14V46" stroke="#1DB954" stroke-width="1.6" stroke-dasharray="2 2"/>
                                        <path d="M38 20V52" stroke="#1DB954" stroke-width="1.6" stroke-dasharray="2 2"/>
                                        <!-- Location Pin Point -->
                                        <circle cx="38" cy="28" r="6" stroke="#1DB954" stroke-width="2" fill="rgba(29, 185, 84, 0.2)"/>
                                        <circle cx="38" cy="28" r="2.5" fill="#1DB954"/>
                                        <path d="M38 34V42" stroke="#1DB954" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                We utilize quantitative demographic data, infrastructure expenditure plans, and population migration metrics to target properties with high structural supply-demand imbalances.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 02: Full Title & Asset-Backed Collateral -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 02</span>
                                    <h3 class="pillar-card-title">ASSET-BACKED<br>TITLE SECURITY</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Building Architecture with Security Shield -->
                                        <path d="M16 48V22L32 12L48 22V48H16Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <path d="M24 48V36H40V48" stroke="#1DB954" stroke-width="1.6"/>
                                        <rect x="24" y="24" width="6" height="6" stroke="#1DB954" stroke-width="1.4"/>
                                        <rect x="34" y="24" width="6" height="6" stroke="#1DB954" stroke-width="1.4"/>
                                        <!-- Shield Overlay -->
                                        <path d="M32 28L42 32V38C42 44 32 48 32 48C32 48 22 44 22 38V32L32 28Z" stroke="#1DB954" stroke-width="1.8" fill="rgba(14,18,16,0.9)"/>
                                        <path d="M29 38L32 41L37 35" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Every property asset is held through dedicated SPV legal holding entities with unencumbered titles, third-party custody, and transparent deed registrations protecting equity.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 03: End-to-End Asset Management -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 03</span>
                                    <h3 class="pillar-card-title">VALUE-ADD<br>DEVELOPMENT</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Construction Crane & Ascending Yield Chart -->
                                        <path d="M14 50H50" stroke="#1DB954" stroke-width="2"/>
                                        <path d="M22 50V16L36 28M22 16H48L36 28" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <path d="M42 22V32M42 32L38 36M42 32L46 36" stroke="#1DB954" stroke-width="1.4"/>
                                        <!-- Ascending Yield Growth Bars -->
                                        <rect x="18" y="40" width="5" height="10" rx="1" stroke="#1DB954" stroke-width="1.4"/>
                                        <rect x="27" y="34" width="5" height="16" rx="1" stroke="#1DB954" stroke-width="1.4"/>
                                        <rect x="36" y="26" width="5" height="24" rx="1" stroke="#1DB954" stroke-width="1.4"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                From zoning rezoning and sustainable architectural retrofits to long-term tenant placement and facility management, we unlock value at every phase of the asset lifecycle.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Risk Disclosure & Governance Section -->
    <section class="section section-light" id="risks">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">RISK ARCHITECTURE</span>
                <h2 class="section-title">Valuation, Tenant &amp; Capital Risk Governance</h2>
                <p class="section-subtitle mx-auto">
                    Tangible property investments involve cyclical market exposure. Crown Asia applies institutional-grade governance to isolate downside risk, maintain cash liquidity, and protect investor principal.
                </p>
            </div>

            <div class="row g-4">
                <!-- Risk 1: Valuation Cycles -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon">
                                <i class="bi bi-graph-down-arrow"></i>
                            </div>
                            <h4>Market &amp; Valuation Cycles</h4>
                        </div>
                        <p class="risk-card-desc">
                            Macroeconomic interest rate fluctuations and localized real estate cyclical shifts that affect asset valuations and refinancing costs.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Independent RICS and certified appraisals prior to any acquisition.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Conservative Loan-to-Value (LTV) limits capping effective debt exposure.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Multi-year holding horizons avoiding forced distress liquidations.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Maximum Portfolio LTV</span>
                            <span class="value text-success">&le; 45% Conservative Leverage</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 2: Tenant & Occupancy Risk -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber">
                                <i class="bi bi-person-x-fill"></i>
                            </div>
                            <h4>Occupancy &amp; Tenant Default</h4>
                        </div>
                        <p class="risk-card-desc">
                            Tenant defaults, lease expirations, or sudden vacancy periods that may impact monthly net operating income (NOI) distributions.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Mandatory corporate credit rating checks for all anchor tenants.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Multi-tenant diversification avoiding single-occupier dependency.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Dedicated debt-service and capital expenditure escrow reserve funds.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Debt Service Coverage</span>
                            <span class="value text-warning">&ge; 1.85x High Buffer</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 3: Title & Entitlement Risk -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue">
                                <i class="bi bi-file-earmark-check-fill"></i>
                            </div>
                            <h4>Title &amp; Entitlement Clarity</h4>
                        </div>
                        <p class="risk-card-desc">
                            Zoning disputes, municipal permit delays, environmental liens, or regulatory policy shifts affecting foreign land ownership.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Full title insurance underwriting by leading sovereign insurers.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Rigorous municipal zoning and environmental Phase-1 due diligence.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Transparent SPV structuring guaranteeing foreign ownership rights.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Title Underwriting</span>
                            <span class="value text-primary">100% Insured SPV Deeds</span>
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
                        <h5 class="mb-1 text-dark" style="font-size:16px;">Verified Property Disclosures &amp; Investor Eligibility</h5>
                        <p class="small text-muted mb-0">Prior to funding, participants must complete accreditation review and inspect detailed property prospectuses.</p>
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
                <p class="section-subtitle mx-auto">In-depth research and practical guides for navigating tangible property investments and platform syndications.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Commercial vs Residential Real Estate">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Real Estate Guide</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">Evaluating Commercial vs. Residential Real Estate Yields</a></h4>
                            <p class="small text-muted mb-3">Key metrics, cap rates, maintenance reserves, and liquidity considerations when building a multi-sector property portfolio.</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Crown Asia Property Desk</span>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Dubai & Cross-Border Property Investment">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Market Research</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">Cross-Border Real Estate: Land Rights, SPVs &amp; Sovereign Titles</a></h4>
                            <p class="small text-muted mb-3">Understanding tax treaties, freehold ownership rights, and special purpose vehicle structures in international property acquisitions.</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Legal &amp; Acquisition Team</span>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1621416894569-0f39ed31d247?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="USDT Property Funding">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Platform Guide</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/">How USDT Deposits and Withdrawals Work on Crown Asia</a></h4>
                            <p class="small text-muted mb-3">Supported blockchain networks, transaction confirmation timelines, fee structures, and safety tips for property syndications.</p>
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
                <p class="section-subtitle mx-auto">Key answers regarding Crown Asia's Real Estate developments, legal ownership structures, and distribution models.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="realEstateFAQ">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="reHeadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#reCollapseOne" aria-expanded="true" aria-controls="reCollapseOne">
                                    How are real estate properties legally structured and owned by participants?
                                </button>
                            </h2>
                            <div id="reCollapseOne" class="accordion-collapse collapse show" aria-labelledby="reHeadingOne" data-bs-parent="#realEstateFAQ">
                                <div class="accordion-body">
                                    Each real estate development or property asset is placed into a dedicated Special Purpose Vehicle (SPV) or property trust. Approved participants receive proportionate legal equity shares or debt notes backed directly by the underlying registered title deed, safeguarding property ownership independent of general platform operations.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="reHeadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#reCollapseTwo" aria-expanded="false" aria-controls="reCollapseTwo">
                                    In which international jurisdictions does Crown Asia acquire and develop real estate?
                                </button>
                            </h2>
                            <div id="reCollapseTwo" class="accordion-collapse collapse" aria-labelledby="reHeadingTwo" data-bs-parent="#realEstateFAQ">
                                <div class="accordion-body">
                                    Crown Asia focuses on established, legally transparent markets with high rental yield and demographic influx. Our current priority hubs include prime commercial and residential sectors in Dubai (UAE), high-growth suburban corridors across the United States, and premier hospitality and lifestyle developments in Sri Lanka and Southeast Asia.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="reHeadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#reCollapseThree" aria-expanded="false" aria-controls="reCollapseThree">
                                    How and when are rental yields and capital gains distributed to investors?
                                </button>
                            </h2>
                            <div id="reCollapseThree" class="accordion-collapse collapse" aria-labelledby="reHeadingThree" data-bs-parent="#realEstateFAQ">
                                <div class="accordion-body">
                                    Recurring rental yields generated from stabilized commercial and residential assets are audited and distributed on a predetermined quarterly cycle directly to participant investor portal balances in USDT. Upon asset disposition or capital refinancing, principal plus net capital gains are returned in full.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="reHeadingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#reCollapseFour" aria-expanded="false" aria-controls="reCollapseFour">
                                    Can international participants fund real estate syndications with cryptocurrency?
                                </button>
                            </h2>
                            <div id="reCollapseFour" class="accordion-collapse collapse" aria-labelledby="reHeadingFour" data-bs-parent="#realEstateFAQ">
                                <div class="accordion-body">
                                    Yes. Through our compliant treasury infrastructure, global investors can fund their allocations seamlessly using USDT (ERC-20, TRC-20, and BEP-20 networks). Capital is recorded with institutional cryptographic proof and converted to asset-backed title deeds without traditional cross-border wire delays.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="reHeadingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#reCollapseFive" aria-expanded="false" aria-controls="reCollapseFive">
                                    What due diligence is performed before Crown Asia acquires a property?
                                </button>
                            </h2>
                            <div id="reCollapseFive" class="accordion-collapse collapse" aria-labelledby="reHeadingFive" data-bs-parent="#realEstateFAQ">
                                <div class="accordion-body">
                                    Our acquisitions undergo rigorous multi-stage vetting: environmental Phase-1 audits, certified structural engineering inspections, independent RICS valuations, legal title searches by licensed land registries, and stress-tested financial cash flow modeling under various interest rate and occupancy scenarios.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="reHeadingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#reCollapseSix" aria-expanded="false" aria-controls="reCollapseSix">
                                    Where can investors inspect title deeds, progress reports, and audit certificates?
                                </button>
                            </h2>
                            <div id="reCollapseSix" class="accordion-collapse collapse" aria-labelledby="reHeadingSix" data-bs-parent="#realEstateFAQ">
                                <div class="accordion-body">
                                    Verified participants can log in to the secure <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-underline">Crown Asia Investor Portal</a> to download sovereign title deeds, engineering milestone photos, monthly occupancy audits, and independent valuation appraisals.
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
                <h2>Explore Approved <span>Property Offerings</span></h2>
                <p>Access transparent, asset-backed investment opportunities across our prime global real estate developments with seamless USDT funding.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?= $base_url ?>investment-opportunities/" class="cta-btn-primary">
                        <i class="bi bi-buildings-fill me-1"></i> Browse Real Estate Offerings
                    </a>
                    <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="cta-btn-secondary">
                        <i class="bi bi-person-plus-fill me-1"></i> Create Investor Account
                    </a>
                </div>
                <div class="cta-trust-badges mt-4 d-flex flex-wrap justify-content-center gap-4">
                    <span><i class="bi bi-shield-check"></i> Sovereign SPV Title Deeds</span>
                    <span><i class="bi bi-wallet2"></i> Instant USDT Settlement</span>
                    <span><i class="bi bi-lock-fill"></i> Institutional Asset Governance</span>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>
