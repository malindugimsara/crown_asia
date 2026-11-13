<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Gems & Gemstones | Crown Asia LLC";
$page_desc  = "Crown Asia's Gems & Gemstones division specializing in ethical sourcing, precision lapidary, gemological grading and certification, and global precious stone trading.";
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
                        <span class="active">Gems &amp; Gemstones</span>
                    </nav>

                    <h1 class="inner-hero-title">Gems &amp; Gemstones<br><span class="accent">Sourcing, Grading &amp; Trade</span></h1>
                    <p class="inner-hero-lead mb-4">
                        Ethically sourced precious stones, independent gemological grading and certification, and institutional global gemstone trading across premier jewelry hubs.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#activities" class="btn-green">Explore Gemstone Operations</a>
                        <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-ghost">Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="sector-hero-visual">
                        <div class="hero-image-frame">
                            <img src="<?= $base_url ?>assets/images/gem.webp" alt="Crown Asia Gemological Grading and Precious Stones" class="img-fluid">
                            <div class="hero-live-pill">
                                <span class="live-dot pulse"></span>
                                <span>Certified Gemstone Desk Active</span>
                            </div>
                            <div class="hero-floating-stat">
                                <div class="stat-icon"><i class="bi bi-gem"></i></div>
                                <div>
                                    <div class="stat-title">Graded &amp; Certified</div>
                                    <div class="stat-sub">Ethically Sourced Precious Stones</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview & Core Gemstone Activities Section -->
    <section class="section section-white" id="activities">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">CORE OPERATIONS</span>
                <h2 class="section-title">Gemstone Business Activities</h2>
                <p class="section-subtitle mx-auto">Our gemstone division combines origin-level procurement and master lapidary craftsmanship with verified laboratory certification and international wholesale trading.</p>
            </div>

            <div class="row g-4">
                <!-- Activity 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-gem"></i></div>
                        <h4>Ethical Origin Sourcing</h4>
                        <p>Direct procurement of fine blue sapphires, rubies, emeralds, and rare colored gemstones from licensed, conflict-free mining regions including Sri Lanka.</p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <h4>Grading &amp; Certification</h4>
                        <p>Rigorous gemological inspection and independent laboratory certification (GIA, IGI, GRS) where applicable to verify authenticity, origin, and treatment status.</p>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-bounding-box-circles"></i></div>
                        <h4>Lapidary &amp; Precision Cutting</h4>
                        <p>Expert faceting, recutting, and optical polishing conducted by master lapidarists to maximize brilliance, symmetry, and carat-value retention.</p>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-globe2"></i></div>
                        <h4>Global B2B Gem Trading</h4>
                        <p>International wholesale supply to fine jewelry houses, private collectors, and institutional trade buyers across New York, Geneva, Dubai, and Asia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sourcing, Grading & Trading Strategy Section -->
    <section class="strategy-section-dark" id="strategy">
        <div class="strategy-grid-bg"></div>
        <div class="strategy-glow-blob top-right"></div>
        <div class="strategy-glow-blob bottom-left"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center" data-aos="fade-up">
                <span class="topic-badge-pill">VALUE CHAIN ADVANTAGE</span>
                <h2 class="strategy-heading-main">SOURCING, GRADING &amp; TRADING STRATEGY</h2>
                <p class="strategy-lead-sub mx-auto">
                    How Crown Asia captures origin value, verifies gemological quality, and executes secure international gemstone transactions.
                </p>
            </div>

            <div class="strategy-connector-wrap">
                <div class="row g-4">
                    <!-- Pillar 01: Direct Mine-to-Market Sourcing -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 01</span>
                                    <h3 class="pillar-card-title">MINE-TO-MARKET<br>SOURCING</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Faceted Gemstone -->
                                        <path d="M20 14H44L54 26L32 52L10 26L20 14Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <path d="M10 26H54" stroke="#1DB954" stroke-width="1.6"/>
                                        <path d="M20 14L25 26L32 52L39 26L44 14" stroke="#1DB954" stroke-width="1.6" stroke-linejoin="round"/>
                                        <path d="M25 26L32 14L39 26" stroke="#1DB954" stroke-width="1.5" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Partnering directly with licensed mining operations and trusted regional dealers in renowned gem-producing territories to acquire high-grade rough and cut stones at origin pricing.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 02: Grading & Certification -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 02</span>
                                    <h3 class="pillar-card-title">GRADING &amp;<br>CERTIFICATION</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Certificate Document -->
                                        <rect x="14" y="10" width="28" height="38" rx="3" stroke="#1DB954" stroke-width="1.8"/>
                                        <path d="M20 18H36M20 24H36M20 30H29" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round"/>
                                        <!-- Magnifying Loupe / Verification Seal -->
                                        <circle cx="42" cy="40" r="10" fill="#0D120F" stroke="#1DB954" stroke-width="1.8"/>
                                        <path d="M38 40L41 43L46.5 37.5" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M49 47L55 53" stroke="#1DB954" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Every significant stone undergoes spectroscopic screening and third-party gemological laboratory certification where applicable, establishing transparent documentation of carat, color, clarity, and cut.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 03: Global Trading & Vault Custody -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 03</span>
                                    <h3 class="pillar-card-title">GLOBAL TRADING &amp;<br>VAULT CUSTODY</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- High-Security Vault -->
                                        <rect x="12" y="12" width="40" height="40" rx="4" stroke="#1DB954" stroke-width="1.8"/>
                                        <rect x="17" y="17" width="30" height="30" rx="2" stroke="#1DB954" stroke-width="1.4" stroke-dasharray="3 2"/>
                                        <circle cx="32" cy="32" r="8" stroke="#1DB954" stroke-width="1.8"/>
                                        <circle cx="32" cy="32" r="2.5" fill="#1DB954"/>
                                        <path d="M32 24V21M32 43V40M24 32H21M43 32H40" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Storing certified inventory in insured high-security vaults and executing B2B sales through established wholesale corridors, luxury jewelers, and international gem exhibitions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Risk Disclosure & Gemological Governance Section -->
    <section class="section section-light" id="risks">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">GEMOLOGICAL GOVERNANCE</span>
                <h2 class="section-title">Authentication, Valuation &amp; Custody Governance</h2>
                <p class="section-subtitle mx-auto">
                    Precious stone trading requires rigorous authentication, disciplined valuation, and secure physical custody. Crown Asia enforces institutional standards across every acquisition and sale.
                </p>
            </div>

            <div class="row g-4">
                <!-- Risk 1: Authenticity & Treatment Disclosure -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <h4>Authenticity &amp; Provenance</h4>
                        </div>
                        <p class="risk-card-desc">
                            Preventing exposure to synthetic stones, undisclosed heat/chemical treatments, or undocumented supply chains in international gem markets.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Mandatory gemological screening prior to capital settlement.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Independent lab certificates (GIA, IGI, GRS) obtained where applicable.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Verified ethical, conflict-free chain-of-custody records.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Verification Standard</span>
                            <span class="value text-success">Lab Certified &amp; Audited</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 2: Valuation & Market Liquidity -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h4>Valuation &amp; Resale Liquidity</h4>
                        </div>
                        <p class="risk-card-desc">
                            Subjective pricing variances across gemstone grades and longer turnover horizons for high-carat collector specimens.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Origin acquisition priced below wholesale replacement benchmarks.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Portfolio weighted toward liquid commercial-to-fine sapphires and rubies.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Pre-established B2B wholesale buyer networks across global centers.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Inventory Focus</span>
                            <span class="value text-warning">High-Demand Precious Stones</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 3: Custody & High-Value Transit -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue">
                                <i class="bi bi-safe2-fill"></i>
                            </div>
                            <h4>Vault Custody &amp; Insured Transit</h4>
                        </div>
                        <p class="risk-card-desc">
                            Physical theft, loss, or customs clearance risks during cross-border movement and storage of high-value gemstones.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Allocated storage inside biometric, dual-custody bonded vaults.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Specialized armored high-value logistics for international shipments.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Full all-risk vault and transit insurance coverage on inventory.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Custody Standard</span>
                            <span class="value text-primary">Insured Bonded Vaults</span>
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
                <p class="section-subtitle mx-auto">Gemological intelligence and practical guides covering certified precious stone trading and platform participation.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Gemstone Grading and Certification">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Industry Insights</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">Why Independent Grading &amp; Origin Certification Matter in Fine Gemstones</a></h4>
                            <p class="small text-muted mb-3">Understanding how GIA, IGI, and GRS reports establish transparency and global resale liquidity for precious stones.</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Crown Asia Gem Desk</span>
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
                <p class="section-subtitle mx-auto">Key answers regarding Crown Asia's gemstone sourcing, certification standards, vault custody, and global trading.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="gemsFAQ">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What types of gemstones does Crown Asia source and trade?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#gemsFAQ">
                                <div class="accordion-body">
                                    We focus on high-demand, investment- and jewelry-grade precious colored gemstones—primarily Ceylon blue sapphires, rubies, emeralds, spinels, and rare tourmalines—sourced directly from vetted mining territories.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does Crown Asia verify ethical sourcing and provenance?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#gemsFAQ">
                                <div class="accordion-body">
                                    We procure stones exclusively through licensed mining partners and audited regional suppliers, maintaining full chain-of-custody documentation, export permits, and compliance with international conflict-free mineral standards.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Are Crown Asia gemstones graded and certified by independent laboratories?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#gemsFAQ">
                                <div class="accordion-body">
                                    Yes. Where applicable, individual stones and parcel lots are submitted to internationally recognized gemological laboratories such as GIA (Gemological Institute of America), IGI, or GRS to certify weight, dimensions, natural origin, and any treatments.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How are physical gemstones stored and protected prior to sale?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#gemsFAQ">
                                <div class="accordion-body">
                                    All inventory is held in high-security, dual-custody bonded vaults with biometric access control and comprehensive all-risk insurance. Cross-border shipments are handled exclusively via specialized armored fine-jewelry couriers.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Who are the primary buyers in Crown Asia's gemstone trading network?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#gemsFAQ">
                                <div class="accordion-body">
                                    We sell through B2B wholesale channels to established jewelry manufacturers, luxury retail brands, international gem dealers, and private collectors across the United States, Europe, the Middle East, and Asia.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Where can participants review gemstone offerings and audited inventory reports?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#gemsFAQ">
                                <div class="accordion-body">
                                    Verified participants can log in to the <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-underline">Crown Asia Investor Portal</a> to inspect approved gemstone offerings, certification summaries, and audited disclosures.
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
                    <span><i class="bi bi-patch-check"></i> Certified Precious Stones</span>
                    <span><i class="bi bi-wallet2"></i> Instant USDT Settlement</span>
                    <span><i class="bi bi-safe2"></i> Insured Vault Custody</span>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>