<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Technology & Communications | Crown Asia LLC";
$page_desc  = "Crown Asia's Technology & Communications division focused on 2030 AI and cloud infrastructure, enterprise telecom services, and scalable digital products.";
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
                        <span class="active">Technology &amp; Communications</span>
                    </nav>

                    <h1 class="inner-hero-title">Technology &amp; Communications<br><span class="accent">AI &amp; Cloud Infrastructure</span></h1>
                    <p class="inner-hero-lead mb-4">
                        Building next-generation AI compute clusters, sovereign cloud infrastructure, enterprise communications networks, and scalable digital products toward our 2030 vision.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#activities" class="btn-green">Explore Tech Services</a>
                        <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-ghost">Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="sector-hero-visual">
                        <div class="hero-image-frame">
                            <img src="<?= $base_url ?>assets/images/hero/technology.webp" alt="Crown Asia AI and Cloud Technology Data Center" class="img-fluid" width="1024" height="768">
                            <div class="hero-live-pill">
                                <span class="live-dot pulse"></span>
                                <span>2030 AI &amp; Cloud Vision Active</span>
                            </div>
                            <div class="hero-floating-stat">
                                <div class="stat-icon"><i class="bi bi-cloud-check-fill"></i></div>
                                <div>
                                    <div class="stat-title">Cloud &amp; AI Compute</div>
                                    <div class="stat-sub">99.99% Enterprise Redundancy</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview & Core Services Section -->
    <section class="section section-white" id="activities">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">CORE OPERATIONS</span>
                <h2 class="section-title">Technology &amp; Communications Services</h2>
                <p class="section-subtitle mx-auto">Delivering resilient cloud architecture, high-speed telecommunications, and proprietary software products engineered for global enterprise scalability.</p>
            </div>

            <div class="row g-4">
                <!-- Activity 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-cloud-fill"></i></div>
                        <h4>AI &amp; Cloud Infrastructure</h4>
                        <p>Deploying high-density GPU compute clusters, enterprise cloud hosting, and distributed storage systems tailored for 2030 AI workloads.</p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-router-fill"></i></div>
                        <h4>Communications Networks</h4>
                        <p>Managing enterprise connectivity, unified cloud telecommunications, low-latency fiber routing, and cross-border network infrastructure.</p>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-window-stack"></i></div>
                        <h4>Products &amp; SaaS Platforms</h4>
                        <p>Developing proprietary enterprise resource planning (ERP), point-of-sale (POS), fintech APIs, and cloud-native commercial software products.</p>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-shield-lock-fill"></i></div>
                        <h4>Cybersecurity &amp; Managed IT</h4>
                        <p>Providing zero-trust network security, automated disaster recovery, SOC threat monitoring, and 24/7 managed infrastructure operations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2030 Vision & Infrastructure Strategy Section -->
    <section class="strategy-section-dark" id="strategy">
        <div class="strategy-grid-bg"></div>
        <div class="strategy-glow-blob top-right"></div>
        <div class="strategy-glow-blob bottom-left"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center" data-aos="fade-up">
                <span class="topic-badge-pill">2030 STRATEGIC ROADMAP</span>
                <h2 class="strategy-heading-main">INFRASTRUCTURE &amp; PRODUCT STRATEGY</h2>
                <p class="strategy-lead-sub mx-auto">
                    How Crown Asia scales AI cloud capacity, communications infrastructure, and commercial software projects toward 2030.
                </p>
            </div>

            <div class="strategy-connector-wrap">
                <div class="row g-4">
                    <!-- Pillar 01: 2030 AI & Cloud Infrastructure -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 01</span>
                                    <h3 class="pillar-card-title">2030 AI &amp; CLOUD<br>INFRASTRUCTURE</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Cloud Outline -->
                                        <path d="M20 34H45C50.5 34 55 29.8 55 24.5C55 19.6 51.2 15.6 46.3 15.1C44.5 9.8 39.5 6 33.5 6C26.5 6 20.8 11.2 20.1 18C15.5 18.7 12 22.6 12 27.3C12 31 15.6 34 20 34Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <!-- Server Nodes & AI Connections -->
                                        <path d="M32 34V42M22 34V40L16 44M42 34V40L48 44" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round"/>
                                        <rect x="26" y="42" width="12" height="14" rx="2" stroke="#1DB954" stroke-width="1.8"/>
                                        <circle cx="14" cy="46" r="3" stroke="#1DB954" stroke-width="1.6"/>
                                        <circle cx="50" cy="46" r="3" stroke="#1DB954" stroke-width="1.6"/>
                                        <path d="M29 46H35M29 50H35" stroke="#1DB954" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Expanding modular data center capacity and high-performance AI compute infrastructure to serve enterprise machine learning, cloud hosting, and regional digital transformation through 2030.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 02: Communications & Network Services -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 02</span>
                                    <h3 class="pillar-card-title">COMMUNICATIONS &amp;<br>NETWORK SERVICES</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Signal Tower -->
                                        <path d="M32 22L22 54H42L32 22Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <path d="M25.5 42H38.5M28 33H36" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round"/>
                                        <circle cx="32" cy="18" r="3" fill="#1DB954"/>
                                        <!-- Broadcast Waves -->
                                        <path d="M22 12C18.5 15.5 18.5 20.5 22 24" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <path d="M42 12C45.5 15.5 45.5 20.5 42 24" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <path d="M16 7C10.5 12.5 10.5 23.5 16 29" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round" stroke-dasharray="2 2"/>
                                        <path d="M48 7C53.5 12.5 53.5 23.5 48 29" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round" stroke-dasharray="2 2"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Operating multi-carrier enterprise connectivity, cloud telephony, secure VPN backbones, and managed communications services designed for uninterrupted business continuity.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 03: Products & Commercial Projects -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 03</span>
                                    <h3 class="pillar-card-title">PRODUCTS &amp;<br>DEPLOYED PROJECTS</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Layered Product Architecture -->
                                        <path d="M32 10L52 20L32 30L12 20L32 10Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <path d="M12 31L32 41L52 31" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 42L32 52L52 42" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                        <!-- Status Nodes -->
                                        <circle cx="32" cy="20" r="2.5" fill="#1DB954"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Building recurring-revenue software products, enterprise management suites, and turnkey digital infrastructure projects serving clients across North America and Asia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Risk Disclosure & Infrastructure Governance Section -->
    <section class="section section-light" id="risks">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">INFRASTRUCTURE GOVERNANCE</span>
                <h2 class="section-title">Cybersecurity, Uptime &amp; Technology Risk Governance</h2>
                <p class="section-subtitle mx-auto">
                    Cloud and telecommunications operations require continuous resilience against cyber threats, hardware lifecycles, and service disruptions. Crown Asia enforces enterprise-grade governance across every deployment.
                </p>
            </div>

            <div class="row g-4">
                <!-- Governance 1: Cybersecurity & Data Protection -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon">
                                <i class="bi bi-shield-shaded"></i>
                            </div>
                            <h4>Cybersecurity &amp; Data Privacy</h4>
                        </div>
                        <p class="risk-card-desc">
                            Protection of enterprise cloud workloads, client databases, and communications traffic against unauthorized intrusion and data breaches.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Zero-trust identity verification and hardware-backed encryption.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>24/7 automated intrusion detection and DDoS mitigation layers.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Immutable encrypted backups across geographically isolated zones.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Security Architecture</span>
                            <span class="value text-success">Zero-Trust &amp; Encrypted</span>
                        </div>
                    </div>
                </div>

                <!-- Governance 2: Hardware & Tech Obsolescence -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber">
                                <i class="bi bi-cpu"></i>
                            </div>
                            <h4>Technology Lifecycle &amp; Scaling</h4>
                        </div>
                        <p class="risk-card-desc">
                            Rapid evolution in AI accelerators, cloud standards, and networking hardware that can impact capital efficiency if uncoordinated.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Phased capital allocation aligned with verified enterprise demand.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Containerized, vendor-agnostic software stacks preventing lock-in.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Scheduled hardware refresh reserves built into operating budgets.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">CapEx Discipline</span>
                            <span class="value text-warning">Phased Modular Scaling</span>
                        </div>
                    </div>
                </div>

                <!-- Governance 3: Network Uptime & SLA Compliance -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue">
                                <i class="bi bi-hdd-network-fill"></i>
                            </div>
                            <h4>Uptime &amp; SLA Continuity</h4>
                        </div>
                        <p class="risk-card-desc">
                            Power, cooling, or fiber backbone interruptions that could affect mission-critical cloud hosting and business communications.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>N+1 redundant power, cooling, and multi-carrier fiber peering.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Automated traffic failover across multi-region availability nodes.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Strict data sovereignty and international telecom compliance.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Availability Target</span>
                            <span class="value text-primary">99.99% Redundant SLA</span>
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
                <p class="section-subtitle mx-auto">Research briefs and practical guides covering AI cloud infrastructure, digital ecosystems, and platform participation.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="<?= $base_url ?>assets/images/offerings/ai-cloud.webp" alt="2030 AI and Cloud Infrastructure" width="800" height="500" loading="lazy">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Market Research</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">The 2030 Outlook for AI Compute &amp; Sovereign Cloud Infrastructure</a></h4>
                            <p class="small text-muted mb-3">Why enterprise AI adoption is driving long-term demand for dedicated data centers and resilient telecom networks.</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Crown Asia Tech Desk</span>
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
                <p class="section-subtitle mx-auto">Key answers regarding Crown Asia's 2030 AI cloud infrastructure roadmap, communications services, and enterprise products.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="techFAQ">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is Crown Asia's 2030 focus in Technology &amp; Communications?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#techFAQ">
                                <div class="accordion-body">
                                    Our 2030 strategic focus centers on building and operating scalable AI compute clusters, high-availability cloud infrastructure, and resilient enterprise communications networks—positioning Crown Asia as a foundational infrastructure provider for data-intensive businesses.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What technology and communications services does this division provide?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#techFAQ">
                                <div class="accordion-body">
                                    We deliver managed cloud hosting, dedicated AI/GPU compute environments, enterprise VoIP and unified telecommunications, secure multi-site network connectivity, and 24/7 cybersecurity and infrastructure management.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What commercial software products and projects are under this sector?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#techFAQ">
                                <div class="accordion-body">
                                    Our product portfolio includes cloud-native Enterprise Resource Planning (ERP) suites, Point-of-Sale (POS) platforms, custom enterprise web and mobile ecosystems, and turnkey digital infrastructure deployments for commercial clients.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How does Crown Asia ensure cloud uptime and data security?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#techFAQ">
                                <div class="accordion-body">
                                    All infrastructure deployments utilize N+1 power and network redundancy, multi-carrier fiber peering, zero-trust security architecture, end-to-end encryption, and automated off-site backups to maintain 99.99% enterprise availability.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How does Technology &amp; Communications support Crown Asia's other industries?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#techFAQ">
                                <div class="accordion-body">
                                    This division serves as the digital backbone across all Crown Asia operations—powering our e-commerce fulfillment platforms, algorithmic forex execution servers, smart real estate management, and agricultural supply-chain software.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Where can participants review project roadmaps and approved offerings?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#techFAQ">
                                <div class="accordion-body">
                                    Verified participants can log in to the <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-underline">Crown Asia Investor Portal</a> to explore approved infrastructure offerings, milestone reports, and audited disclosures.
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
                    <span><i class="bi bi-cloud-check"></i> 2030 AI &amp; Cloud Focus</span>
                    <span><i class="bi bi-wallet2"></i> Instant USDT Settlement</span>
                    <span><i class="bi bi-lock-fill"></i> 99.99% Enterprise SLA</span>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>