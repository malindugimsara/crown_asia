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

    <!-- 3. How Investing Works Section (NEW) -->
    <section class="strategy-section-dark" id="how-it-works">
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

            <div class="row g-4 mt-4">
                <!-- Step 01 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="pillar-glass-card">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="pillar-tag-glow mb-0">Step 01</span>
                            <i class="bi bi-person-check-fill text-success fs-4"></i>
                        </div>
                        <h3 class="pillar-card-title mb-3">REGISTER &amp;<br>VERIFY KYC</h3>
                        <p class="pillar-body-text">
                            Create your account on the Crown Asia Investor Portal and complete identity and eligibility verification.
                        </p>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="pillar-glass-card">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="pillar-tag-glow mb-0">Step 02</span>
                            <i class="bi bi-wallet2 text-success fs-4"></i>
                        </div>
                        <h3 class="pillar-card-title mb-3">FUND VIA<br>USDT NETWORK</h3>
                        <p class="pillar-body-text">
                            Deposit USDT securely using supported blockchain networks with automated on-chain confirmation tracking.
                        </p>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="pillar-glass-card">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="pillar-tag-glow mb-0">Step 03</span>
                            <i class="bi bi-layers-fill text-success fs-4"></i>
                        </div>
                        <h3 class="pillar-card-title mb-3">SELECT AN<br>OFFERING</h3>
                        <p class="pillar-body-text">
                            Review offering memoranda, terms, and risk disclosures across our eight sectors and confirm your allocation.
                        </p>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="pillar-glass-card">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="pillar-tag-glow mb-0">Step 04</span>
                            <i class="bi bi-graph-up-arrow text-success fs-4"></i>
                        </div>
                        <h3 class="pillar-card-title mb-3">TRACK &amp;<br>WITHDRAW USDT</h3>
                        <p class="pillar-body-text">
                            Monitor performance milestones inside your dashboard and request USDT withdrawals upon distribution or redemption.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 d-flex flex-wrap justify-content-center gap-3" data-aos="fade-up">
                <a href="<?= $base_url ?>how-it-works/" class="btn-green">Complete Investor Guide</a>
                <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="btn-ghost">USDT Deposits &amp; Withdrawals</a>
            </div>
        </div>
    </section>

    <!-- 4. Eight Industries / Services Section (Updated with Clear Sector Links) -->
    <section class="section section-light" id="services">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill light">DIVERSIFIED PORTFOLIO</span>
                <h2 class="section-title">Eight Strategic Industries</h2>
                <p class="section-subtitle mx-auto">Explore dedicated sector briefings, operational strategies, and risk governance across our eight core business divisions.</p>
            </div>
            <div class="row g-4">
                <!-- 1. Forex Trading -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <article class="sector-card d-flex flex-column">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Forex Trading">
                        </div>
                        <div class="sector-body d-flex flex-column flex-grow-1">
                            <div class="sector-icon"><i class="bi bi-currency-exchange"></i></div>
                            <h4><a href="<?= $base_url ?>industries/forex-trading/" class="stretched-link text-decoration-none text-reset">Forex Trading</a></h4>
                            <p class="mb-3">Disciplined foreign exchange operations, liquid market participation, and proactive risk and currency management strategies.</p>
                            <span class="mt-auto small fw-semibold text-success">Explore Sector &amp; Strategy <i class="bi bi-arrow-right ms-1"></i></span>
                        </div>
                    </article>
                </div>
                <!-- 2. Real Estate Investment -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="60">
                    <article class="sector-card d-flex flex-column">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Real Estate Investment">
                        </div>
                        <div class="sector-body d-flex flex-column flex-grow-1">
                            <div class="sector-icon"><i class="bi bi-houses"></i></div>
                            <h4><a href="<?= $base_url ?>industries/real-estate/" class="stretched-link text-decoration-none text-reset">Real Estate</a></h4>
                            <p class="mb-3">Property development and land investments across priority markets including Dubai, Maldives, Sri Lanka, Thailand, and the USA.</p>
                            <span class="mt-auto small fw-semibold text-success">Explore Sector &amp; Markets <i class="bi bi-arrow-right ms-1"></i></span>
                        </div>
                    </article>
                </div>
                <!-- 3. Research & Development -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                    <article class="sector-card d-flex flex-column">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Research and Development">
                        </div>
                        <div class="sector-body d-flex flex-column flex-grow-1">
                            <div class="sector-icon"><i class="bi bi-cpu"></i></div>
                            <h4><a href="<?= $base_url ?>industries/research-and-development/" class="stretched-link text-decoration-none text-reset">Research &amp; Dev</a></h4>
                            <p class="mb-3">IoT, robotics, and applied AI initiatives, pioneering next-generation devices and high-impact commercial applications.</p>
                            <span class="mt-auto small fw-semibold text-success">Explore Sector &amp; Lab <i class="bi bi-arrow-right ms-1"></i></span>
                        </div>
                    </article>
                </div>
                <!-- 4. Technology & Communications -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="180">
                    <article class="sector-card d-flex flex-column">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Technology and Communications">
                        </div>
                        <div class="sector-body d-flex flex-column flex-grow-1">
                            <div class="sector-icon"><i class="bi bi-broadcast"></i></div>
                            <h4><a href="<?= $base_url ?>industries/technology-and-communications/" class="stretched-link text-decoration-none text-reset">Technology &amp; Comms</a></h4>
                            <p class="mb-3">2030 focus on scalable AI and cloud technology infrastructure, enterprise digital services, and robust telecom systems.</p>
                            <span class="mt-auto small fw-semibold text-success">Explore 2030 Roadmap <i class="bi bi-arrow-right ms-1"></i></span>
                        </div>
                    </article>
                </div>
                <!-- 5. Trading, Import & Export -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <article class="sector-card d-flex flex-column">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Trading, Import &amp; Export">
                        </div>
                        <div class="sector-body d-flex flex-column flex-grow-1">
                            <div class="sector-icon"><i class="bi bi-arrow-left-right"></i></div>
                            <h4><a href="<?= $base_url ?>industries/import-export/" class="stretched-link text-decoration-none text-reset">Import &amp; Export</a></h4>
                            <p class="mb-3">Sourcing and global distribution of coconuts, spices, rubber, value-added goods, and quality apparel products.</p>
                            <span class="mt-auto small fw-semibold text-success">Explore Trade Corridors <i class="bi bi-arrow-right ms-1"></i></span>
                        </div>
                    </article>
                </div>
                <!-- 6. E-Commerce -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="60">
                    <article class="sector-card d-flex flex-column">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="E-Commerce">
                        </div>
                        <div class="sector-body d-flex flex-column flex-grow-1">
                            <div class="sector-icon"><i class="bi bi-cart4"></i></div>
                            <h4><a href="<?= $base_url ?>industries/ecommerce/" class="stretched-link text-decoration-none text-reset">E-Commerce</a></h4>
                            <p class="mb-3">Digital commerce platforms, logistics management, modern fulfillment space, and smart secure warehousing solutions.</p>
                            <span class="mt-auto small fw-semibold text-success">Explore Fulfillment Hubs <i class="bi bi-arrow-right ms-1"></i></span>
                        </div>
                    </article>
                </div>
                <!-- 7. Gems & Gemstones -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                    <article class="sector-card d-flex flex-column">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Gems and Gemstones">
                        </div>
                        <div class="sector-body d-flex flex-column flex-grow-1">
                            <div class="sector-icon"><i class="bi bi-gem"></i></div>
                            <h4><a href="<?= $base_url ?>industries/gems-and-gemstones/" class="stretched-link text-decoration-none text-reset">Gems &amp; Gemstones</a></h4>
                            <p class="mb-3">Ethical sourcing, grading, certification, and trading of precious and semi-precious stones across international markets.</p>
                            <span class="mt-auto small fw-semibold text-success">Explore Gem Operations <i class="bi bi-arrow-right ms-1"></i></span>
                        </div>
                    </article>
                </div>
                <!-- 8. Agriculture & Plantation -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="180">
                    <article class="sector-card d-flex flex-column">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Agriculture and Plantation">
                        </div>
                        <div class="sector-body d-flex flex-column flex-grow-1">
                            <div class="sector-icon"><i class="bi bi-tree"></i></div>
                            <h4><a href="<?= $base_url ?>industries/agriculture-and-plantation/" class="stretched-link text-decoration-none text-reset">Agriculture &amp; Plantation</a></h4>
                            <p class="mb-3">Large-scale agricultural crop production, sustainable plantation management, and development of value-added food products.</p>
                            <span class="mt-auto small fw-semibold text-success">Explore Agro Projects <i class="bi bi-arrow-right ms-1"></i></span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. About Crown Asia Section -->
    <section class="section section-white" id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="about-visual">
                        <div class="about-frame"></div>
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Crown Asia office">
                        <div class="since-badge">
                            <div class="yr">2022</div>
                            <div class="lb">Since</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="ps-lg-3">
                        <div class="section-label">Who We Are</div>
                        <div class="green-line"></div>
                        <h2 class="section-title">A Trusted American<br>Business Conglomerate</h2>
                        <p class="about-copy mb-3">
                            Crown Asia LLC is a legally registered and tax-compliant limited liability company based in Albuquerque, New Mexico, USA. With continuous operations, we have established ourselves as a diversified business group operating across eight high-growth sectors.
                        </p>
                        <p class="about-copy mb-4">
                            Our company is built on the principles of transparency, integrity, and sustainable growth. Every sector is backed by tangible assets, verified operations, and experienced management.
                        </p>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="about-detail">
                                    <div class="about-icon"><i class="bi bi-shield-check"></i></div>
                                    <div>
                                        <h5>Legally Registered</h5>
                                        <p>Registered LLC in New Mexico, United States</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-detail">
                                    <div class="about-icon"><i class="bi bi-graph-up-arrow"></i></div>
                                    <div>
                                        <h5>Asset-Backed</h5>
                                        <p>Real business operations across 8 sectors</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-detail">
                                    <div class="about-icon"><i class="bi bi-people-fill"></i></div>
                                    <div>
                                        <h5>Growing Team</h5>
                                        <p>Professional management &amp; dedicated workforce</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-detail">
                                    <div class="about-icon"><i class="bi bi-globe-americas"></i></div>
                                    <div>
                                        <h5>Global Reach</h5>
                                        <p>Cross-border investments and strategic trading</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= $base_url ?>about/" class="btn-green">More About Crown Asia <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter Section -->
    <section class="stats-section">
        <div class="container">
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
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="How to Evaluate an Investment Opportunity">
                        </div>
                        <div class="article-body d-flex flex-column flex-grow-1">
                            <span class="article-category">Investor Education</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">How to Evaluate an Investment Opportunity Before You Commit</a></h4>
                            <p class="small text-muted mb-3">A practical framework for reviewing asset backing, term structures, fee schedules, and offering-specific risk disclosures.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Investor Guide</span>
                                <a href="<?= $base_url ?>blog/" class="small fw-semibold text-success text-decoration-none">Read Article &rarr;</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Article 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <article class="article-card d-flex flex-column">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="What to Review Before Investing in a Real Estate Project">
                        </div>
                        <div class="article-body d-flex flex-column flex-grow-1">
                            <span class="article-category">Market Research</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">What to Review Before Investing in a Real Estate Project</a></h4>
                            <p class="small text-muted mb-3">Evaluating location fundamentals, title verification, construction milestones, and exit liquidity in Dubai, Sri Lanka, and US markets.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Real Estate Desk</span>
                                <a href="<?= $base_url ?>blog/" class="small fw-semibold text-success text-decoration-none">Read Article &rarr;</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Article 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <article class="article-card d-flex flex-column">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1621416894569-0f39ed31d247?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="How USDT Deposits and Withdrawals Work">
                        </div>
                        <div class="article-body d-flex flex-column flex-grow-1">
                            <span class="article-category">Platform Guide</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/">How USDT Deposits and Withdrawals Work on Crown Asia</a></h4>
                            <p class="small text-muted mb-3">Confirmed blockchain networks, deposit confirmation windows, withdrawal request status tracking, and security best practices.</p>
                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Treasury Team</span>
                                <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="small fw-semibold text-success text-decoration-none">Read Guide &rarr;</a>
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

    <!-- 9. Contact Section -->
    <section class="section section-light" id="contact">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-label">Get In Touch</div>
                <div class="green-line center"></div>
                <h2 class="section-title">Contact Us</h2>
                <p class="section-subtitle mx-auto">Have a question or want to explore business opportunities? We'd love to hear from you.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="contact-info-card">
                        <h3>Let's Talk</h3>
                        <p>Reach out to us for any enquiries about our business sectors, investment opportunities, or general information.</p>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <div>
                                <div class="label">Head Office</div>
                                <div class="value">10242 Coors Bypass Blvd. N.W.<br>Albuquerque, New Mexico 87114<br>United States</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="bi bi-envelope-fill"></i></div>
                            <div>
                                <div class="label">Email</div>
                                <div class="value"><a href="mailto:info@crownasia.io">info@crownasia.io</a></div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="bi bi-globe2"></i></div>
                            <div>
                                <div class="label">Website</div>
                                <div class="value"><a href="https://crownasia.io" target="_blank" rel="noopener">crownasia.io</a></div>
                            </div>
                        </div>
                        <div class="contact-social">
                            <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-form-card">
                        <h4 class="mb-1">Send Us a Message</h4>
                        <p class="text-muted mb-4" style="font-size:14px;">Fill out the form below and our team will respond within 24 hours.</p>
                        <form id="contactForm" action="contact-handler.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="float-field">
                                        <input type="text" name="name" id="name" placeholder=" " required>
                                        <label for="name">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-field">
                                        <input type="tel" name="phone" id="phone" placeholder=" ">
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="float-field">
                                        <input type="email" name="email" id="email" placeholder=" " required>
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="float-field">
                                        <select name="subject" id="subject" required>
                                            <option value="" selected disabled></option>
                                            <option>General Enquiry</option>
                                            <option>Investment Opportunities</option>
                                            <option>Forex Trading</option>
                                            <option>Real Estate Investment</option>
                                            <option>Research &amp; Development</option>
                                            <option>Technology &amp; Communications</option>
                                            <option>Trading, Import &amp; Export</option>
                                            <option>E-Commerce</option>
                                            <option>Gems &amp; Gemstones</option>
                                            <option>Agriculture &amp; Plantation</option>
                                            <option>Other</option>
                                        </select>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="float-field">
                                        <textarea name="message" id="message" placeholder=" " required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-green w-100 text-center border-0" style="cursor:pointer;">
                                        <i class="bi bi-send me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="map-wrap">
                        <iframe src="https://www.google.com/maps?q=10242+Coors+Bypass+Blvd+NW,+Albuquerque,+NM+87114&amp;output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Crown Asia location"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/footer.php'; ?>