<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Research & Development | Crown Asia LLC";
$page_desc  = "Crown Asia's Research & Development division advancing IoT systems, autonomous robotics, applied AI models, and precision device manufacturing.";
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
                        <span class="active">Research &amp; Development</span>
                    </nav>

                    <h1 class="inner-hero-title">Research &amp; Development<br><span class="accent">IoT, Robotics &amp; AI Systems</span></h1>
                    <p class="inner-hero-lead mb-4">
                        Engineering next-generation IoT hardware, autonomous robotics, applied artificial intelligence, and precision device manufacturing for commercial deployment.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#activities" class="btn-green">Explore R&amp;D Initiatives</a>
                        <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-ghost">Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="sector-hero-visual">
                        <div class="hero-image-frame">
                            <img src="<?= $base_url ?>assets/images/rd.webp" alt="Crown Asia IoT, Robotics & AI R&D Laboratory" class="img-fluid">
                            <div class="hero-live-pill">
                                <span class="live-dot pulse"></span>
                                <span>Hardware &amp; AI Prototyping Active</span>
                            </div>
                            <div class="hero-floating-stat">
                                <div class="stat-icon"><i class="bi bi-robot"></i></div>
                                <div>
                                    <div class="stat-title">Autonomous Systems</div>
                                    <div class="stat-sub">Edge AI &amp; Smart Manufacturing</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview & Core R&D Activities Section -->
    <section class="section section-white" id="activities">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">CORE INNOVATION</span>
                <h2 class="section-title">Research &amp; Development Initiatives</h2>
                <p class="section-subtitle mx-auto">Our R&amp;D operations bridge theoretical engineering and scalable production across connected devices, intelligent automation, and enterprise hardware.</p>
            </div>

            <div class="row g-4">
                <!-- Activity 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-broadcast-pin"></i></div>
                        <h4>IoT Architecture &amp; Sensors</h4>
                        <p>Designing industrial Internet of Things ecosystems, low-power telemetry nodes, and connected sensor networks for real-time operational monitoring.</p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-robot"></i></div>
                        <h4>Robotics &amp; Automation</h4>
                        <p>Developing precision robotic actuators, automated handling units, and kinematics tailored for logistics, agriculture, and industrial workflows.</p>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-cpu-fill"></i></div>
                        <h4>Applied AI &amp; Edge Models</h4>
                        <p>Training computer vision, predictive maintenance, and embedded neural networks that execute directly on local hardware with ultra-low latency.</p>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-motherboard"></i></div>
                        <h4>Device Manufacturing</h4>
                        <p>Full-cycle PCB layout, embedded firmware development, hardware stress testing, and scalable assembly of proprietary smart devices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Engineering Pipeline & Commercialization Strategy Section -->
    <section class="strategy-section-dark" id="strategy">
        <div class="strategy-grid-bg"></div>
        <div class="strategy-glow-blob top-right"></div>
        <div class="strategy-glow-blob bottom-left"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center" data-aos="fade-up">
                <span class="topic-badge-pill">ENGINEERING PIPELINE</span>
                <h2 class="strategy-heading-main">LAB-TO-MARKET EXECUTION STRATEGY</h2>
                <p class="strategy-lead-sub mx-auto">
                    How Crown Asia transforms applied research into reliable manufactured devices and commercial enterprise applications.
                </p>
            </div>

            <div class="strategy-connector-wrap">
                <div class="row g-4">
                    <!-- Pillar 01: Applied Research & Prototyping -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 01</span>
                                    <h3 class="pillar-card-title">APPLIED R&amp;D &amp;<br>PROTOTYPING</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- AI Core Chip -->
                                        <rect x="20" y="20" width="24" height="24" rx="4" stroke="#1DB954" stroke-width="1.8"/>
                                        <rect x="26" y="26" width="12" height="12" rx="2" stroke="#1DB954" stroke-width="1.5"/>
                                        <!-- Circuit Pins -->
                                        <path d="M26 12V20M32 12V20M38 12V20" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <path d="M26 44V52M32 44V52M38 44V52" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <path d="M12 26H20M12 32H20M12 38H20" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <path d="M44 26H52M44 32H52M44 38H52" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <!-- Sensor Nodes -->
                                        <circle cx="12" cy="14" r="2.5" stroke="#1DB954" stroke-width="1.5"/>
                                        <circle cx="52" cy="14" r="2.5" stroke="#1DB954" stroke-width="1.5"/>
                                        <circle cx="52" cy="50" r="2.5" stroke="#1DB954" stroke-width="1.5"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Multidisciplinary engineering teams validate hardware-software architectures through digital twins, CAD modeling, and iterative laboratory prototypes before capital tooling.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 02: Precision Device Manufacturing -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 02</span>
                                    <h3 class="pillar-card-title">PRECISION DEVICE<br>MANUFACTURING</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Robotic Arm Base -->
                                        <path d="M14 52H42" stroke="#1DB954" stroke-width="2" stroke-linecap="round"/>
                                        <rect x="20" y="44" width="16" height="8" rx="2" stroke="#1DB954" stroke-width="1.8"/>
                                        <!-- Articulated Arm -->
                                        <path d="M28 44L20 30L34 16L46 22" stroke="#1DB954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="20" cy="30" r="3" fill="#0D120F" stroke="#1DB954" stroke-width="1.8"/>
                                        <circle cx="34" cy="16" r="3.5" fill="#0D120F" stroke="#1DB954" stroke-width="1.8"/>
                                        <!-- Gripper / End Effector -->
                                        <path d="M46 18L52 15M46 26L52 29" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <!-- Target Component -->
                                        <rect x="46" y="36" width="10" height="10" rx="1.5" stroke="#1DB954" stroke-width="1.5" stroke-dasharray="2 2"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Standardized component sourcing, automated surface-mount PCB assembly, firmware flashing, and rigorous environmental QA ensure industrial durability at scale.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 03: Commercial Applications -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 03</span>
                                    <h3 class="pillar-card-title">COMMERCIAL<br>APPLICATIONS</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Connected Enterprise Hub -->
                                        <circle cx="32" cy="32" r="10" stroke="#1DB954" stroke-width="1.8"/>
                                        <circle cx="32" cy="32" r="4" fill="#1DB954"/>
                                        <!-- Outer Deployment Nodes -->
                                        <circle cx="14" cy="16" r="4" stroke="#1DB954" stroke-width="1.6"/>
                                        <circle cx="50" cy="16" r="4" stroke="#1DB954" stroke-width="1.6"/>
                                        <circle cx="14" cy="48" r="4" stroke="#1DB954" stroke-width="1.6"/>
                                        <circle cx="50" cy="48" r="4" stroke="#1DB954" stroke-width="1.6"/>
                                        <!-- Connection Lines -->
                                        <path d="M17.5 19L24.5 25.5M46.5 19L39.5 25.5M17.5 45L24.5 38.5M46.5 45L39.5 38.5" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Deploying turnkey hardware-plus-software solutions across smart warehousing, precision agriculture, energy management, and B2B enterprise licensing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Risk Disclosure & Development Governance Section -->
    <section class="section section-light" id="risks">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">DEVELOPMENT GOVERNANCE</span>
                <h2 class="section-title">R&amp;D Execution, Manufacturing &amp; IP Governance</h2>
                <p class="section-subtitle mx-auto">
                    Hardware development and emerging technology carry technical and commercial execution risks. Crown Asia enforces strict stage-gate milestones to safeguard capital and protect intellectual property.
                </p>
            </div>

            <div class="row g-4">
                <!-- Governance 1: Technical & Prototyping Risk -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon">
                                <i class="bi bi-diagram-3-fill"></i>
                            </div>
                            <h4>Prototyping &amp; Iteration</h4>
                        </div>
                        <p class="risk-card-desc">
                            Engineering complexity and integration challenges when combining custom firmware, sensors, and mechanical robotics into unified systems.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Phased stage-gate funding tied to verified prototype benchmarks.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Modular hardware architecture enabling rapid component upgrades.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Pre-production simulation and stress testing under field conditions.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Development Model</span>
                            <span class="value text-success">Milestone Stage-Gate</span>
                        </div>
                    </div>
                </div>

                <!-- Governance 2: Supply Chain & Manufacturing -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <h4>Manufacturing &amp; Supply Chain</h4>
                        </div>
                        <p class="risk-card-desc">
                            Semiconductor lead times, component cost fluctuations, and assembly quality variances during transition to batch device production.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Multi-vendor BOM (Bill of Materials) sourcing for critical microcontrollers.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Automated optical inspection (AOI) and batch burn-in QA protocols.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Regional assembly partnerships reducing cross-border logistics delays.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Supply Resilience</span>
                            <span class="value text-warning">Dual-Sourced BOM</span>
                        </div>
                    </div>
                </div>

                <!-- Governance 3: IP & Commercialization -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <h4>IP &amp; Market Adoption</h4>
                        </div>
                        <p class="risk-card-desc">
                            Protecting proprietary designs and ensuring commercial demand before scaling full manufacturing output across target industries.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Encrypted firmware, secure bootloaders, and formal IP registration.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Commercial pilot deployments with enterprise and internal group clients.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Compliance testing for international safety and RF standards.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Hardware Security</span>
                            <span class="value text-primary">Encrypted Firmware &amp; IP</span>
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
                <p class="section-subtitle mx-auto">Technical briefs and practical guides on evaluating technology investments and platform operations.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Industrial IoT and Robotics">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Industry Insights</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">Commercializing IoT, Robotics &amp; Edge AI in Industrial Operations</a></h4>
                            <p class="small text-muted mb-3">How connected sensors and automated robotics reduce operating overhead and create scalable B2B revenue.</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Crown Asia R&amp;D Lab</span>
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
                <p class="section-subtitle mx-auto">Key answers regarding Crown Asia's IoT, robotics, AI initiatives, and hardware manufacturing workflows.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="rndFAQ">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What core technologies does Crown Asia's Research &amp; Development division focus on?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#rndFAQ">
                                <div class="accordion-body">
                                    Our R&amp;D division concentrates on four interconnected pillars: industrial Internet of Things (IoT) sensor hardware, autonomous robotics and kinematics, applied AI/machine learning models for edge computing, and end-to-end electronic device manufacturing.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does Crown Asia transition prototypes into manufactured devices?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#rndFAQ">
                                <div class="accordion-body">
                                    We follow a disciplined stage-gate engineering workflow. Once a prototype passes simulation, thermal, and field reliability testing, we finalize the Bill of Materials (BOM) with dual-sourced components and transition to automated PCB assembly, firmware provisioning, and batch quality assurance.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are the primary commercial applications for these R&amp;D products?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#rndFAQ">
                                <div class="accordion-body">
                                    Our devices and AI systems are built for real-world commercial deployment across smart warehouse automation, precision agriculture monitoring, energy optimization in commercial real estate, and B2B enterprise licensing.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How are intellectual property (IP) and hardware designs protected?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#rndFAQ">
                                <div class="accordion-body">
                                    All proprietary schematics, PCB layouts, embedded firmware, and trained AI weights are safeguarded through hardware-level encryption, secure bootloaders, non-disclosure agreements with assembly partners, and formal intellectual property filings where applicable.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How does the R&amp;D division integrate with other Crown Asia business sectors?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#rndFAQ">
                                <div class="accordion-body">
                                    Beyond external B2B commercialization, our R&amp;D division serves as an internal innovation engine—supplying automated sorting robotics for our e-commerce fulfillment hubs, environmental IoT telemetry for our agricultural plantations, and AI analytics for our technology infrastructure.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Where can participants verify project milestones and offering disclosures?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#rndFAQ">
                                <div class="accordion-body">
                                    Approved participants can sign in to the <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-underline">Crown Asia Investor Portal</a> to review verified project milestones, engineering deliverables, and offering memoranda.
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
                    <span><i class="bi bi-cpu"></i> Proprietary Hardware &amp; AI</span>
                    <span><i class="bi bi-wallet2"></i> Instant USDT Settlement</span>
                    <span><i class="bi bi-lock-fill"></i> Stage-Gate Governance</span>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>