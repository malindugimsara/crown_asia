<?php
$page_title = "Crown Asia | Diversified Investment & Business Solutions";
$page_desc  = "Crown Asia LLC - A diversified United States investment and business company operating across eight strategic sectors with transparent USDT funding.";
include_once __DIR__ . '/header.php';

// Portal URLs (header.php / config.php හි අර්ථ දක්වා නොමැති නම් fallback ලෙස)
$portal_login_url    = $portal_login_url ?? 'https://portal.crownasia.io/login';
$portal_register_url = $portal_register_url ?? 'https://portal.crownasia.io/register';
?>

    <!-- 1. Hero Section with Updated Platform CTAs -->
    <section class="hero" id="home">
        <canvas id="particleCanvas"></canvas>
        <div class="hero-grid"></div>
        <div class="hero-blob one"></div>
        <div class="hero-blob two"></div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-badge"><span class="dot"></span> 8 Strategic Sectors &middot; Live Investor Portal</div>
                    <h1>Building Prosperity Through <span class="accent">Diversified Investments</span></h1>
                    <div class="typed-wrap"><span id="typedText"></span><span class="typed-cursor"></span></div>
                    <p class="lead-copy">Crown Asia LLC is a registered United States company offering structured, asset-backed investment opportunities across real estate, forex, technology, trade, gems, and agriculture with seamless USDT settlement.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?= $base_url ?>investment-opportunities/" class="btn-green">Explore Opportunities <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="<?= $base_url ?>how-it-works/" class="btn-ghost">How Investing Works</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-logo-wrap">
                        <div class="hero-logo-ring"></div>
                        <div class="hero-logo-glow"></div>
                        <img src="<?= $base_url ?>assets/images/logo.png" alt="Crown Asia logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-hint">
            <div class="mouse"></div>
            Scroll
        </div>
    </section>

    <!-- Eight Industries Marquee Overview Section -->
    <section class="section-marquee-overview">
        <div class="container text-center mb-4" data-aos="fade-up">
            <span class="topic-badge-pill light">STRATEGIC SECTORS</span>
            <h2 class="section-title mb-2">Our Eight Diversified Industries</h2>
            <p class="section-subtitle mx-auto">Operating across premier global growth markets supported by real assets, institutional governance, and cross-border agility.</p>
        </div>
        <div class="marquee" aria-label="Our Eight Business Sectors">
        <div class="marquee-track">
            <a href="<?= $base_url ?>industries/forex-trading/" class="marquee-card">
                <div class="marquee-icon-box"><i class="bi bi-currency-exchange"></i></div>
                <span class="marquee-card-label">Forex Trading</span>
            </a>
            <a href="<?= $base_url ?>industries/real-estate/" class="marquee-card">
                <div class="marquee-icon-box"><i class="bi bi-buildings"></i></div>
                <span class="marquee-card-label">Real Estate Investment</span>
            </a>
            <a href="<?= $base_url ?>industries/research-and-development/" class="marquee-card">
                <div class="marquee-icon-box"><i class="bi bi-cpu"></i></div>
                <span class="marquee-card-label">Research &amp; Development</span>
            </a>
            <a href="<?= $base_url ?>industries/technology-and-communications/" class="marquee-card">
                <div class="marquee-icon-box"><i class="bi bi-broadcast"></i></div>
                <span class="marquee-card-label">Technology &amp; Communications</span>
            </a>
            <a href="<?= $base_url ?>industries/import-export/" class="marquee-card">
                <div class="marquee-icon-box"><i class="bi bi-arrow-left-right"></i></div>
                <span class="marquee-card-label">Trading, Import &amp; Export</span>
            </a>
            <a href="<?= $base_url ?>industries/ecommerce/" class="marquee-card">
                <div class="marquee-icon-box"><i class="bi bi-cart4"></i></div>
                <span class="marquee-card-label">E-Commerce</span>
            </a>
            <a href="<?= $base_url ?>industries/gems-and-gemstones/" class="marquee-card">
                <div class="marquee-icon-box"><i class="bi bi-gem"></i></div>
                <span class="marquee-card-label">Gems &amp; Gemstones</span>
            </a>
            <a href="<?= $base_url ?>industries/agriculture-and-plantation/" class="marquee-card">
                <div class="marquee-icon-box"><i class="bi bi-tree"></i></div>
                <span class="marquee-card-label">Agriculture &amp; Plantation</span>
            </a>

            <!-- Repeat for seamless continuous loop -->
            <a href="<?= $base_url ?>industries/forex-trading/" class="marquee-card" tabindex="-1" aria-hidden="true">
                <div class="marquee-icon-box"><i class="bi bi-currency-exchange"></i></div>
                <span class="marquee-card-label">Forex Trading</span>
            </a>
            <a href="<?= $base_url ?>industries/real-estate/" class="marquee-card" tabindex="-1" aria-hidden="true">
                <div class="marquee-icon-box"><i class="bi bi-buildings"></i></div>
                <span class="marquee-card-label">Real Estate Investment</span>
            </a>
            <a href="<?= $base_url ?>industries/research-and-development/" class="marquee-card" tabindex="-1" aria-hidden="true">
                <div class="marquee-icon-box"><i class="bi bi-cpu"></i></div>
                <span class="marquee-card-label">Research &amp; Development</span>
            </a>
            <a href="<?= $base_url ?>industries/technology-and-communications/" class="marquee-card" tabindex="-1" aria-hidden="true">
                <div class="marquee-icon-box"><i class="bi bi-broadcast"></i></div>
                <span class="marquee-card-label">Technology &amp; Communications</span>
            </a>
            <a href="<?= $base_url ?>industries/import-export/" class="marquee-card" tabindex="-1" aria-hidden="true">
                <div class="marquee-icon-box"><i class="bi bi-arrow-left-right"></i></div>
                <span class="marquee-card-label">Trading, Import &amp; Export</span>
            </a>
            <a href="<?= $base_url ?>industries/ecommerce/" class="marquee-card" tabindex="-1" aria-hidden="true">
                <div class="marquee-icon-box"><i class="bi bi-cart4"></i></div>
                <span class="marquee-card-label">E-Commerce</span>
            </a>
            <a href="<?= $base_url ?>industries/gems-and-gemstones/" class="marquee-card" tabindex="-1" aria-hidden="true">
                <div class="marquee-icon-box"><i class="bi bi-gem"></i></div>
                <span class="marquee-card-label">Gems &amp; Gemstones</span>
            </a>
            <a href="<?= $base_url ?>industries/agriculture-and-plantation/" class="marquee-card" tabindex="-1" aria-hidden="true">
                <div class="marquee-icon-box"><i class="bi bi-tree"></i></div>
                <span class="marquee-card-label">Agriculture &amp; Plantation</span>
            </a>
        </div>
    </div>
</section>

    <!-- 2. Featured Investment Opportunities Section (NEW) -->
    <section class="section section-light" id="featured-opportunities">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 gap-3" data-aos="fade-up">
                <div>
                    <span class="topic-badge-pill light">ACTIVE ALLOCATIONS</span>
                    <h2 class="section-title mb-2">Featured Investment Opportunities</h2>
                    <p class="section-subtitle mb-0">Participate in approved, asset-backed offerings with transparent terms, clear risk disclosures, and direct USDT settlement.</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="<?= $base_url ?>investment-opportunities/" class="btn-green">View All Offerings <i class="bi bi-grid-fill ms-1"></i></a>
                </div>
            </div>

            <div class="row g-4">
                <!-- Offering 1: Real Estate -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="offering-card">
                        <div class="offering-badge-wrap">
                            <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&amp;fit=crop&amp;w=900&amp;q=80" alt="Priority Real Estate Development Fund">
                            <span class="offering-status-tag"><i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i> Open for Allocation</span>
                            <span class="offering-sector-tag">Real Estate</span>
                        </div>
                        <div class="offering-content">
                            <h4>Priority Coastal &amp; Urban Real Estate Pool</h4>
                            <p>Asset-backed property acquisition and development across high-growth corridors in Dubai, Sri Lanka, and the United States.</p>
                            <div class="offering-grid-terms">
                                <div class="offering-term-item">
                                    <div class="label">Minimum</div>
                                    <div class="val">1,000 USDT</div>
                                </div>
                                <div class="offering-term-item">
                                    <div class="label">Term Horizon</div>
                                    <div class="val">12 – 24 Months</div>
                                </div>
                                <div class="offering-term-item">
                                    <div class="label">Currency</div>
                                    <div class="val">USDT (TRC20/ERC20)</div>
                                </div>
                                <div class="offering-term-item">
                                    <div class="label">Backing</div>
                                    <div class="val text-success">Real Property Assets</div>
                                </div>
                            </div>
                            <div class="mt-auto d-flex gap-2">
                                <a href="<?= $base_url ?>investment-opportunities/" class="btn-green w-100 text-center py-2 px-3" style="font-size: 12px;">Review Offering Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offering 2: Institutional Forex -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="offering-card">
                        <div class="offering-badge-wrap">
                            <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&amp;fit=crop&amp;w=900&amp;q=80" alt="G10 Quantitative Liquidity Strategy">
                            <span class="offering-status-tag"><i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i> Open for Allocation</span>
                            <span class="offering-sector-tag">Forex Trading</span>
                        </div>
                        <div class="offering-content">
                            <h4>G10 Quantitative Liquidity Strategy</h4>
                            <p>Disciplined foreign exchange execution across liquid G10 pairs utilizing Tier-1 bank liquidity and strict 1:10 max leverage controls.</p>
                            <div class="offering-grid-terms">
                                <div class="offering-term-item">
                                    <div class="label">Minimum</div>
                                    <div class="val">500 USDT</div>
                                </div>
                                <div class="offering-term-item">
                                    <div class="label">Term Horizon</div>
                                    <div class="val">6 – 12 Months</div>
                                </div>
                                <div class="offering-term-item">
                                    <div class="label">Currency</div>
                                    <div class="val">USDT Multi-Network</div>
                                </div>
                                <div class="offering-term-item">
                                    <div class="label">Risk Protocol</div>
                                    <div class="val text-success">Capped Drawdown</div>
                                </div>
                            </div>
                            <div class="mt-auto d-flex gap-2">
                                <a href="<?= $base_url ?>investment-opportunities/" class="btn-green w-100 text-center py-2 px-3" style="font-size: 12px;">Review Offering Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offering 3: Agriculture & Value-Added Exports -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="offering-card">
                        <div class="offering-badge-wrap">
                            <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&amp;fit=crop&amp;w=900&amp;q=80" alt="Agro-Processing & Export Facility">
                            <span class="offering-status-tag"><i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i> Open for Allocation</span>
                            <span class="offering-sector-tag">Agriculture &amp; Trade</span>
                        </div>
                        <div class="offering-content">
                            <h4>Value-Added Plantation &amp; Export Cycle</h4>
                            <p>Direct cultivation and value-added processing of organic coconut, Ceylon spices, and specialty crops for confirmed B2B export orders.</p>
                            <div class="offering-grid-terms">
                                <div class="offering-term-item">
                                    <div class="label">Minimum</div>
                                    <div class="val">500 USDT</div>
                                </div>
                                <div class="offering-term-item">
                                    <div class="label">Term Horizon</div>
                                    <div class="val">9 – 18 Months</div>
                                </div>
                                <div class="offering-term-item">
                                    <div class="label">Currency</div>
                                    <div class="val">USDT (TRC20/BEP20)</div>
                                </div>
                                <div class="offering-term-item">
                                    <div class="label">Backing</div>
                                    <div class="val text-success">Estates &amp; PO Contracts</div>
                                </div>
                            </div>
                            <div class="mt-auto d-flex gap-2">
                                <a href="<?= $base_url ?>investment-opportunities/" class="btn-green w-100 text-center py-2 px-3" style="font-size: 12px;">Review Offering Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. How Investing Works Section (Modern Working Process Style from Demo Index-5) -->
    <section class="investor-journey-section" id="how-it-works">
        <div class="strategy-grid-bg"></div>
        <div class="strategy-glow-blob top-right"></div>
        <div class="strategy-glow-blob bottom-left"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center" data-aos="fade-up">
                <span class="topic-badge-pill">INVESTOR JOURNEY</span>
                <h2 class="strategy-heading-main">HOW INVESTING WORKS</h2>
                <p class="strategy-lead-sub mx-auto">
                    A streamlined, transparent four-step process from investor verification to USDT funding, live portfolio tracking, and redemptions.
                </p>
            </div>

            <div class="journey-process-inner">
                <div class="journey-process-wrapper">
                    <!-- Step 01 -->
                    <div class="journey-process-item" data-aos="fade-up" data-aos-delay="50">
                        <span class="journey-step-indicator">Step 01</span>
                        <div class="journey-step-head">
                            <span class="journey-big-num">01</span>
                            <div class="journey-step-icon">
                                <i class="bi bi-person-check-fill"></i>
                            </div>
                        </div>
                        <h3 class="journey-card-title">REGISTER &amp;<br>VERIFY KYC</h3>
                        <p class="journey-card-desc">
                            Create your account on the Crown Asia Investor Portal and complete identity and eligibility verification.
                        </p>
                    </div>

                    <!-- Step 02 -->
                    <div class="journey-process-item" data-aos="fade-up" data-aos-delay="150">
                        <span class="journey-step-indicator">Step 02</span>
                        <div class="journey-step-head">
                            <span class="journey-big-num">02</span>
                            <div class="journey-step-icon">
                                <i class="bi bi-wallet2"></i>
                            </div>
                        </div>
                        <h3 class="journey-card-title">FUND VIA<br>USDT NETWORK</h3>
                        <p class="journey-card-desc">
                            Deposit USDT securely using supported blockchain networks with automated on-chain confirmation tracking.
                        </p>
                    </div>

                    <!-- Step 03 -->
                    <div class="journey-process-item" data-aos="fade-up" data-aos-delay="250">
                        <span class="journey-step-indicator">Step 03</span>
                        <div class="journey-step-head">
                            <span class="journey-big-num">03</span>
                            <div class="journey-step-icon">
                                <i class="bi bi-layers-fill"></i>
                            </div>
                        </div>
                        <h3 class="journey-card-title">SELECT AN<br>OFFERING</h3>
                        <p class="journey-card-desc">
                            Review offering memoranda, terms, and risk disclosures across our eight sectors and confirm your allocation.
                        </p>
                    </div>

                    <!-- Step 04 -->
                    <div class="journey-process-item" data-aos="fade-up" data-aos-delay="350">
                        <span class="journey-step-indicator">Step 04</span>
                        <div class="journey-step-head">
                            <span class="journey-big-num">04</span>
                            <div class="journey-step-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                        </div>
                        <h3 class="journey-card-title">TRACK &amp;<br>WITHDRAW USDT</h3>
                        <p class="journey-card-desc">
                            Monitor performance milestones inside your dashboard and request USDT withdrawals upon distribution or redemption.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 d-flex flex-wrap justify-content-center gap-3 position-relative" style="z-index: 2;" data-aos="fade-up">
                <a href="<?= $base_url ?>how-it-works/" class="btn-green">Complete Investor Guide</a>
                <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="btn-ghost">USDT Deposits &amp; Withdrawals</a>
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
                                                <img src="<?= $base_url ?>assets/images/forex-hero.webp" alt="Forex Trading">
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
                                                <img src="<?= $base_url ?>assets/images/real-state.webp" alt="Real Estate Investment">
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
                                                <img src="<?= $base_url ?>assets/images/rd.webp" alt="Research and Development">
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
                                                <img src="<?= $base_url ?>assets/images/technology.webp" alt="Technology and Communications">
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
                                                <img src="<?= $base_url ?>assets/images/import_export.webp" alt="Trading, Import and Export">
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
                                                <img src="<?= $base_url ?>assets/images/ecom.webp" alt="E-Commerce">
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
                                                <img src="<?= $base_url ?>assets/images/gem.webp" alt="Gems and Gemstones">
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
                                                <img src="<?= $base_url ?>assets/images/agriculture.webp" alt="Agriculture and Plantation">
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

    <!-- 5. About Crown Asia Section -->
    <section class="section section-white about-section" id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Visual Media Column -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="about-visual-wrap">
                        <div class="about-visual">
                            <div class="about-visual-inner">
                                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Crown Asia Head Office">
                                <div class="about-visual-overlay"></div>
                            </div>
                            <div class="about-frame"></div>
                            
                            <!-- Floating Since 2022 Badge -->
                            <div class="since-badge">
                                <div class="since-icon-wrap">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <div class="since-text">
                                    <div class="yr">2022</div>
                                    <div class="lb">Operating Since</div>
                                </div>
                            </div>

                            <!-- Floating Trust & Compliance Card -->
                            <div class="about-trust-card" data-aos="fade-up" data-aos-delay="200">
                                <div class="trust-icon">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <div class="trust-info">
                                    <span class="trust-title">Registered in USA</span>
                                    <span class="trust-desc">New Mexico &middot; Tax Compliant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content & Features Column -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="ps-lg-4">
                        <div class="sec-heading style-4 mb-4 text-start">
                            <span class="sub-title"><i class="bi bi-patch-check-fill me-1"></i>Who We Are</span>
                            <h2 class="sec-title mt-2 mb-3">A Trusted American<br><span class="accent-title">Business Conglomerate</span></h2>
                        </div>
                        
                        <p class="about-lead">
                            <strong>Crown Asia LLC</strong> is a legally registered and tax-compliant limited liability company based in Albuquerque, New Mexico, USA. With continuous operations, we have established ourselves as a diversified business group operating across eight high-growth sectors.
                        </p>
                        <p class="about-copy mb-4">
                            Our company is built on the principles of transparency, integrity, and sustainable growth. Every sector is backed by tangible assets, verified operations, and experienced management.
                        </p>
                        
                        <div class="row g-3 mb-4 pb-2">
                            <!-- Feature 1 -->
                            <div class="col-sm-6">
                                <div class="about-feature-card">
                                    <div class="about-feature-icon">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <div class="about-feature-content">
                                        <h5>Legally Registered</h5>
                                        <p>Registered LLC in New Mexico, United States</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature 2 -->
                            <div class="col-sm-6">
                                <div class="about-feature-card">
                                    <div class="about-feature-icon">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <div class="about-feature-content">
                                        <h5>Asset-Backed</h5>
                                        <p>Real business operations across 8 sectors</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature 3 -->
                            <div class="col-sm-6">
                                <div class="about-feature-card">
                                    <div class="about-feature-icon">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <div class="about-feature-content">
                                        <h5>Growing Team</h5>
                                        <p>Professional management &amp; dedicated workforce</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature 4 -->
                            <div class="col-sm-6">
                                <div class="about-feature-card">
                                    <div class="about-feature-icon">
                                        <i class="bi bi-globe-americas"></i>
                                    </div>
                                    <div class="about-feature-content">
                                        <h5>Global Reach</h5>
                                        <p>Cross-border investments &amp; strategic trading</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA & Trust Pill -->
                        <div class="about-cta-wrap d-flex flex-wrap align-items-center gap-3">
                            <a href="<?= $base_url ?>about/" class="btn-green">More About Crown Asia <i class="bi bi-arrow-right ms-1"></i></a>
                            <div class="about-security-badge d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                <span class="small text-muted fw-semibold">State of New Mexico Verified LLC</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter Section -->
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
                        <div class="stat-label">Years Active</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="80">
                    <div class="stat-box">
                        <div class="stat-num" data-count="8" data-suffix="">0</div>
                        <div class="stat-label">Strategic Sectors</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="160">
                    <div class="stat-box">
                        <div class="stat-num" data-count="10" data-suffix="K+">0</div>
                        <div class="stat-label">Clients Served</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="240">
                    <div class="stat-box">
                        <div class="stat-num" data-count="50" data-suffix="+">0</div>
                        <div class="stat-label">Team Members</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Latest Blog Articles & Market Insights Section (NEW) -->
    <section class="section section-light" id="latest-articles">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 gap-3" data-aos="fade-up">
                <div>
                    <span class="topic-badge-pill light">INSIGHTS &amp; RESEARCH</span>
                    <h2 class="section-title mb-2">Latest Blog Articles</h2>
                    <p class="section-subtitle mb-0">Investor education, sector due diligence checklists, and step-by-step platform guides from Crown Asia.</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="<?= $base_url ?>blog/" class="btn-green">Visit Knowledge Hub <i class="bi bi-journal-text ms-1"></i></a>
                </div>
            </div>

            <div class="row g-4">
                <!-- Article 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <article class="article-card d-flex flex-column">
                        <div class="article-img-wrap">
                            <img src="<?= $base_url ?>assets/images/blog/blog-1.webp" alt="How to Evaluate an Investment Opportunity" width="800" height="450" loading="lazy">
                        </div>
                        <div class="article-body d-flex flex-column flex-grow-1">
                            <span class="article-category">Due Diligence</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/how-to-evaluate-an-investment-opportunity/">How to Evaluate an Investment Opportunity: 7 Due Diligence Steps</a></h4>
                            <p class="small text-muted mb-3">A practical framework for reviewing legal charters, cash flow modeling, risk buffers, and tangible collateral.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Nov 12, 2026</span>
                                <a href="<?= $base_url ?>blog/how-to-evaluate-an-investment-opportunity/" class="small fw-semibold text-success text-decoration-none">Read Briefing &rarr;</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Article 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <article class="article-card d-flex flex-column">
                        <div class="article-img-wrap">
                            <img src="<?= $base_url ?>assets/images/blog/blog-5.webp" alt="Commercial Real Estate in the Southwest" width="800" height="450" loading="lazy">
                        </div>
                        <div class="article-body d-flex flex-column flex-grow-1">
                            <span class="article-category">Commercial Real Estate</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/commercial-real-estate-corridors/">Commercial Real Estate in the Southwest: Yields &amp; Asset Backing</a></h4>
                            <p class="small text-muted mb-3">Evaluating prime logistics corridors, tenant occupancy, and inflation-hedged yields along US interstate routes.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Oct 24, 2026</span>
                                <a href="<?= $base_url ?>blog/commercial-real-estate-corridors/" class="small fw-semibold text-success text-decoration-none">Read Briefing &rarr;</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Article 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <article class="article-card d-flex flex-column">
                        <div class="article-img-wrap">
                            <img src="<?= $base_url ?>assets/images/blog/blog-2.webp" alt="USDT Investment Rails" width="800" height="450" loading="lazy">
                        </div>
                        <div class="article-body d-flex flex-column flex-grow-1">
                            <span class="article-category">Digital Settlement</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/usdt-cross-border-investment-rails/">USDT Investment Rails: Fast, Borderless &amp; Transparent Asset Settlement</a></h4>
                            <p class="small text-muted mb-3">How institutional stablecoins eliminate multi-day correspondent banking friction and weekend market lockups.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Nov 08, 2026</span>
                                <a href="<?= $base_url ?>blog/usdt-cross-border-investment-rails/" class="small fw-semibold text-success text-decoration-none">Read Briefing &rarr;</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Investor FAQs Section (NEW) -->
    <section class="section section-white" id="home-faq">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill light">INVESTOR SUPPORT</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle mx-auto">Quick answers regarding account eligibility, USDT funding, investment structures, and portal operations.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="homeInvestorFAQ">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="homeFaqOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#homeCollapseOne" aria-expanded="true" aria-controls="homeCollapseOne">
                                    How do I get started as an investor on Crown Asia?
                                </button>
                            </h2>
                            <div id="homeCollapseOne" class="accordion-collapse collapse show" aria-labelledby="homeFaqOne" data-bs-parent="#homeInvestorFAQ">
                                <div class="accordion-body">
                                    Click <strong>Register Now</strong> to create your account on the Crown Asia Investor Portal, complete your identity and eligibility verification, deposit USDT via a supported network, and select an approved offering that matches your goals.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="homeFaqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#homeCollapseTwo" aria-expanded="false" aria-controls="homeCollapseTwo">
                                    Which currency and networks are used for deposits and withdrawals?
                                </button>
                            </h2>
                            <div id="homeCollapseTwo" class="accordion-collapse collapse" aria-labelledby="homeFaqTwo" data-bs-parent="#homeInvestorFAQ">
                                <div class="accordion-body">
                                    Funding, allocations, distributions, and redemptions are settled in <strong>USDT</strong> across confirmed supported networks inside the Investor Portal. Review our <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="text-success fw-semibold text-decoration-underline">USDT Deposits &amp; Withdrawals Guide</a> for step-by-step instructions and network details.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="homeFaqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#homeCollapseThree" aria-expanded="false" aria-controls="homeCollapseThree">
                                    Are Crown Asia investment offerings backed by real business operations?
                                </button>
                            </h2>
                            <div id="homeCollapseThree" class="accordion-collapse collapse" aria-labelledby="homeFaqThree" data-bs-parent="#homeInvestorFAQ">
                                <div class="accordion-body">
                                    Yes. Crown Asia LLC is a registered New Mexico limited liability company operating across eight real-economy sectors—including real estate, forex liquidity, R&amp;D, technology infrastructure, import/export, e-commerce, certified gemstones, and agriculture. Each offering page outlines its specific structure, use of funds, and risk disclosures.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="homeFaqFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#homeCollapseFour" aria-expanded="false" aria-controls="homeCollapseFour">
                                    Where can I track my active investments and review legal disclosures?
                                </button>
                            </h2>
                            <div id="homeCollapseFour" class="accordion-collapse collapse" aria-labelledby="homeFaqFour" data-bs-parent="#homeInvestorFAQ">
                                <div class="accordion-body">
                                    Once verified, you can track active allocations, distribution schedules, and redemption requests directly inside the <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-underline">Investor Portal</a>. Public policy documents are always accessible in our <a href="<?= $base_url ?>legal/" class="text-success fw-semibold text-decoration-underline">Legal &amp; Disclosures</a> directory.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="<?= $base_url ?>faq/" class="btn btn-outline-success rounded-pill px-4 py-2 fw-semibold" style="font-size: 13px;">
                            View All Investor FAQs <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Final Call To Action Section -->
    <section class="cta-section">
        <div class="cta-glow-blob"></div>
        <div class="container" data-aos="zoom-in">
            <div class="cta-card-luxury">
                <span class="topic-badge-pill mb-3">START INVESTING</span>
                <h2>Ready to <span>Grow Together?</span></h2>
                <p>Explore approved investment opportunities across eight strategic industries or create your verified investor account today.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?= $base_url ?>investment-opportunities/" class="cta-btn-primary">
                        <i class="bi bi-grid-fill me-1"></i> Explore Offerings
                    </a>
                    <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="cta-btn-secondary">
                        <i class="bi bi-person-plus-fill me-1"></i> Register Now
                    </a>
                </div>
            </div>
        </div>
    </section>

   

<?php include_once __DIR__ . '/footer.php'; ?>