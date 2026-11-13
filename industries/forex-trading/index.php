<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Forex Trading | Crown Asia LLC";
$page_desc  = "Crown Asia's disciplined foreign exchange activities, quantitative macro strategy, liquidity management, and institutional risk governance.";
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
                        <span class="active">Forex Trading</span>
                    </nav>

                    <h1 class="inner-hero-title">Forex Trading &amp;<br><span class="accent">Liquidity Management</span></h1>
                    <p class="inner-hero-lead mb-4">
                        Disciplined currency execution, quantitative macro positioning, and institutional risk governance across 24/5 global FX markets.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#activities" class="btn-green">Explore Core Activities</a>
                        <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-ghost">Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="sector-hero-visual">
                        <div class="hero-image-frame">
                            <img src="<?= $base_url ?>assets/images/forex-hero.webp" alt="Crown Asia Institutional Forex Trading Desk" class="img-fluid">
                            <div class="hero-live-pill">
                                <span class="live-dot pulse"></span>
                                <span>24/5 Institutional FX Desk Active</span>
                            </div>
                            <div class="hero-floating-stat">
                                <div class="stat-icon"><i class="bi bi-activity"></i></div>
                                <div>
                                    <div class="stat-title">Liquidity Aggregation</div>
                                    <div class="stat-sub">Tier-1 ECN Prime Feeds</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview & Forex Activities Section -->
    <section class="section section-white" id="activities">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill">CORE OPERATIONS</span>
                <h2 class="section-title">Forex Activities</h2>
                <p class="section-subtitle mx-auto">Our foreign exchange activities are built on systematic risk control, deep multi-tier liquidity, and quantitative analysis rather than speculative exposure.</p>
            </div>

            <div class="row g-4">
                <!-- Activity 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <h4>G10 Currency Execution</h4>
                        <p>Active participation in deep, institutional currency pairs including EUR/USD, GBP/USD, and USD/JPY, capitalizing on macroeconomic trends and monetary policy divergence.</p>
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-cpu-fill"></i></div>
                        <h4>Quantitative Algorithms</h4>
                        <p>Proprietary rule-based execution models that eliminate emotional bias, dynamically rebalance exposure, and operate with millisecond latency precision.</p>
                    </div>
                </div>

                <!-- Activity 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-safe2"></i></div>
                        <h4>Treasury &amp; Hedging</h4>
                        <p>Corporate currency risk mitigation protecting Crown Asia's multi-industry international holdings against exchange rate volatility and purchasing power erosion.</p>
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                    <div class="activity-card">
                        <div class="activity-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <h4>Cross-Session Arbitrage</h4>
                        <p>Capitalizing on continuous order flow transitions between Tokyo, London, and New York market sessions to capture structural pricing discrepancies.</p>
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
                <h2 class="strategy-heading-main">MARKETS &amp; EXECUTION STRATEGY</h2>
                <p class="strategy-lead-sub mx-auto">
                    How Crown Asia maintains competitive stability across institutional global foreign exchange venues.
                </p>
            </div>

            <div class="strategy-connector-wrap">
                <div class="row g-4">
                    <!-- Pillar 01: Global Macro Modeling -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 01</span>
                                    <h3 class="pillar-card-title">GLOBAL MACRO<br>MODELING</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Globe -->
                                        <circle cx="28" cy="28" r="18" stroke="#1DB954" stroke-width="1.8"/>
                                        <ellipse cx="28" cy="28" rx="8" ry="18" stroke="#1DB954" stroke-width="1.8"/>
                                        <path d="M10 28H46" stroke="#1DB954" stroke-width="1.8"/>
                                        <path d="M14 19H42" stroke="#1DB954" stroke-width="1.4" stroke-dasharray="2 2"/>
                                        <path d="M14 37H42" stroke="#1DB954" stroke-width="1.4" stroke-dasharray="2 2"/>
                                        <!-- Growth Trend Arrow -->
                                        <path d="M34 42L44 26L56 20M56 20V30M56 20H46" stroke="#1DB954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <!-- Financial Bar Graph -->
                                        <rect x="42" y="44" width="4" height="12" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                        <rect x="48" y="38" width="4" height="18" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                        <rect x="54" y="32" width="4" height="24" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Our quantitative research team models real-time economic indicators, interest rate differentials, inflation data, and sovereign balance sheets to identify mid-to-long-term directional bias.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 02: Tier-1 Bank Liquidity -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 02</span>
                                    <h3 class="pillar-card-title">TIER-1 BANK<br>LIQUIDITY</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Bank Roof / Pediment -->
                                        <path d="M14 20L34 8L54 20H14Z" stroke="#1DB954" stroke-width="1.8" stroke-linejoin="round"/>
                                        <!-- Dollar Sign inside Pediment -->
                                        <path d="M34 12V16M32 13.5C32 12.8 33 12.5 34 12.5C35 12.5 36 12.8 36 13.5C36 14.5 32 14.5 32 15.5C32 16.2 33 16.5 34 16.5C35 16.5 36 16.2 36 15.5" stroke="#1DB954" stroke-width="1.3" stroke-linecap="round"/>
                                        <!-- Base & Beam -->
                                        <path d="M16 20H52M12 48H44" stroke="#1DB954" stroke-width="1.8"/>
                                        <!-- Columns -->
                                        <path d="M18 20V48M25 20V48M32 20V48M39 20V48" stroke="#1DB954" stroke-width="1.8"/>
                                        <!-- Institutional Terminal / Calculator -->
                                        <rect x="42" y="30" width="16" height="24" rx="2" stroke="#1DB954" stroke-width="1.8" fill="rgba(14,18,16,0.9)"/>
                                        <rect x="45" y="33" width="10" height="4" stroke="#1DB954" stroke-width="1.4"/>
                                        <circle cx="47" cy="42" r="1" fill="#1DB954"/>
                                        <circle cx="53" cy="42" r="1" fill="#1DB954"/>
                                        <circle cx="47" cy="47" r="1" fill="#1DB954"/>
                                        <circle cx="53" cy="47" r="1" fill="#1DB954"/>
                                        <circle cx="47" cy="51" r="1" fill="#1DB954"/>
                                        <circle cx="53" cy="51" r="1" fill="#1DB954"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Trading operations interface directly with tier-1 prime broker liquidity pools, ensuring institutional-grade order execution, minimal slippage, and robust negative balance guarantees.
                            </p>
                        </div>
                    </div>

                    <!-- Pillar 03: Systematic Capital Allocation -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                        <div class="pillar-glass-card">
                            <div class="pillar-header-row">
                                <div>
                                    <span class="pillar-tag-glow">Pillar 03</span>
                                    <h3 class="pillar-card-title">SYSTEMATIC CAPITAL<br>ALLOCATION</h3>
                                </div>
                                <div class="pillar-icon-box">
                                    <svg class="pillar-icon-svg" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Pie Chart -->
                                        <circle cx="24" cy="24" r="16" stroke="#1DB954" stroke-width="1.8"/>
                                        <path d="M24 24L38 16M24 24V8" stroke="#1DB954" stroke-width="1.8" stroke-linecap="round"/>
                                        <!-- Data / Analytics Lines -->
                                        <path d="M46 12H58M46 18H54M46 24H58" stroke="#1DB954" stroke-width="1.6" stroke-linecap="round"/>
                                        <!-- Ascending Allocation Bars -->
                                        <rect x="18" y="44" width="6" height="12" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                        <rect x="28" y="38" width="6" height="18" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                        <rect x="38" y="32" width="6" height="24" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                        <rect x="48" y="24" width="6" height="32" rx="1" stroke="#1DB954" stroke-width="1.6"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="pillar-body-text">
                                Strict position sizing protocols dictate that no individual currency theme carries outsized risk. Portfolio allocations automatically contract during elevated market stress.
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
                <h2 class="section-title">Currency, Leverage &amp; Liquidity Risk Governance</h2>
                <p class="section-subtitle mx-auto">
                    Foreign exchange operations carry inherent market risks. Crown Asia adheres to rigorous institutional protocols to isolate exposure, cap drawdowns, and safeguard participant capital.
                </p>
            </div>

            <div class="row g-4">
                <!-- Risk 1: Currency Risk -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon">
                                <i class="bi bi-arrow-left-right"></i>
                            </div>
                            <h4>Currency Volatility</h4>
                        </div>
                        <p class="risk-card-desc">
                            Fluctuations triggered by sovereign monetary policy divergence, macroeconomic reports, and geopolitical events that impact exchange rates.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Multi-currency basket diversification across G10 liquid pairs.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Zero unhedged exposure in illiquid or emerging market currencies.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Automated stop-loss &amp; real-time Value at Risk (VaR) monitoring.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Volatility Cap</span>
                            <span class="value text-success">Strict ATR Hard Stops</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 2: Leverage Risk -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>
                            <h4>Leverage &amp; Margin</h4>
                        </div>
                        <p class="risk-card-desc">
                            Amplification of exposure that can accelerate drawdowns during rapid market expansions or sudden liquidity contraction events.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Conservative institutional leverage (maximum 1:10 effective ratio).</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Dynamic margin buffers preventing forced liquidation scenarios.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Position sizing contracts automatically during heightened volatility.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Max Effective Leverage</span>
                            <span class="value text-warning">1:10 Conservative Ratio</span>
                        </div>
                    </div>
                </div>

                <!-- Risk 3: Liquidity Risk -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue">
                                <i class="bi bi-droplet-half"></i>
                            </div>
                            <h4>Liquidity &amp; Execution</h4>
                        </div>
                        <p class="risk-card-desc">
                            Slippage, order execution delays, and market gaps that may occur during market transitions, roll-over periods, or off-peak hours.
                        </p>
                        <ul class="risk-protocols-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Direct connectivity to Tier-1 Electronic Communication Networks (ECNs).</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Mandatory blackout windows during low-liquidity rollover times.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Deep aggregate order books with multi-venue prime broker redundancy.</span>
                            </li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Execution Latency</span>
                            <span class="value text-primary">&lt;15ms Fast Fill</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Risk Disclosure Callout Banner (Clean Glass Design - No Side Border) -->
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
                <p class="section-subtitle mx-auto">In-depth research and practical guides for navigating currency investments and platform operations.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
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

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
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

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Currency Risk Management">
                        </div>
                        <div class="article-body">
                            <span class="article-category">Market Research</span>
                            <h4 class="article-title"><a href="<?= $base_url ?>blog/">Navigating FX Volatility in Multi-Currency Portfolios</a></h4>
                            <p class="small text-muted mb-3">Understanding the interplay between interest rate differentials, inflation, and global liquidity flow.</p>
                            <span class="article-date"><i class="bi bi-calendar3 me-1"></i> Macro Insights</span>
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
                <p class="section-subtitle mx-auto">Key answers regarding Crown Asia's Forex trading operations, liquidity infrastructure, and risk governance.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="forexFAQ">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How does Crown Asia mitigate currency risk and market volatility?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#forexFAQ">
                                <div class="accordion-body">
                                    Crown Asia trades exclusively in liquid G10 currency pairs and liquid crosses. We enforce algorithmic stop-losses, automated drawdown caps, and multi-currency hedging protocols. We never hold unhedged positions in exotic or illiquid currencies, ensuring that sudden macroeconomic shifts do not jeopardize principal capital.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What leverage ratios are used in Crown Asia's foreign exchange operations?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#forexFAQ">
                                <div class="accordion-body">
                                    Unlike retail trading platforms that offer speculative 1:100 or 1:500 leverage, Crown Asia operates strictly with conservative institutional leverage (maximum 1:10 effective leverage). Furthermore, position sizes automatically contract during high-volatility events to maintain robust margin buffers.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How does Crown Asia access and route foreign exchange liquidity?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#forexFAQ">
                                <div class="accordion-body">
                                    Our trading infrastructure connects directly to Tier-1 institutional prime broker liquidity pools and Electronic Communication Networks (ECNs). This multi-venue routing provides institutional execution speed (&lt;15ms latency), deep order books, and minimal slippage without broker counterparty conflict.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What are the operating hours of Crown Asia's Forex trading desks?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#forexFAQ">
                                <div class="accordion-body">
                                    Global currency markets operate 24 hours a day, 5 days a week. Our proprietary quantitative systems and operational desks monitor international order flow continuously across the Tokyo, London, and New York market sessions.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How does the Forex division integrate with other Crown Asia business sectors?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#forexFAQ">
                                <div class="accordion-body">
                                    In addition to generating independent returns, our Forex division serves as an active corporate treasury and foreign exchange hedging desk for Crown Asia's real estate acquisitions, international trade, agricultural exports, and e-commerce supply chains.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Where can participants verify audit statements and performance disclosures?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#forexFAQ">
                                <div class="accordion-body">
                                    Approved participants can log in to the secure <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-underline">Crown Asia Investor Portal</a> to view real-time portfolio allocations, verified audited financials, and regulatory filings.
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
                    <span><i class="bi bi-shield-check"></i> Multi-Venue Liquidity</span>
                    <span><i class="bi bi-wallet2"></i> Instant USDT Settlement</span>
                    <span><i class="bi bi-lock-fill"></i> Institutional Risk Governance</span>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>

