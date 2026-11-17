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
                        <a href="#analytics" class="btn-green"><i class="bi bi-graph-up-arrow me-1"></i> Interactive Charts &amp; Analytics</a>
                        <a href="#activities" class="btn-ghost">Explore Core Activities</a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <div class="sector-hero-visual">
                        <div class="hero-image-frame">
                            <img src="<?= $base_url ?>assets/images/hero/forex-hero.webp" alt="Crown Asia Institutional Forex Trading Desk" class="img-fluid" width="1024" height="768">
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

    <!-- 3. Institutional Performance & Analytics Dashboard (Interactive Charts) -->
    <section class="fx-analytics-section" id="analytics">
        <div class="fx-analytics-bg"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill dark">QUANTITATIVE INTELLIGENCE</span>
                <h2 class="strategy-heading-main">Performance &amp; Execution Analytics</h2>
                <p class="strategy-lead-sub mx-auto">
                    Live-modeled quantitative yield trajectories, multi-pair G10 allocation weights, 24/5 liquidity windows, and institutional risk metrics.
                </p>
            </div>

            <!-- Top KPI Overview Strip -->
            <div class="row g-3 mb-5" data-aos="fade-up">
                <div class="col-xl-3 col-sm-6">
                    <div class="fx-kpi-card">
                        <div class="fx-kpi-label">Cumulative Strategy Yield</div>
                        <div class="fx-kpi-value text-success">+31.84%</div>
                        <div class="fx-kpi-badge"><i class="bi bi-graph-up-arrow"></i> Net Audited Track Record</div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="fx-kpi-card">
                        <div class="fx-kpi-label">Max Historical Drawdown</div>
                        <div class="fx-kpi-value text-white">2.84%</div>
                        <div class="fx-kpi-badge" style="color:#F59E0B;"><i class="bi bi-shield-check"></i> Capped by Circuit Breaker</div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="fx-kpi-card">
                        <div class="fx-kpi-label">Sharpe Ratio (Annualized)</div>
                        <div class="fx-kpi-value text-success">2.46</div>
                        <div class="fx-kpi-badge"><i class="bi bi-award-fill"></i> Institutional Risk-Adjusted</div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="fx-kpi-card">
                        <div class="fx-kpi-label">Execution Latency (ECN)</div>
                        <div class="fx-kpi-value text-white">&lt; 12 ms</div>
                        <div class="fx-kpi-badge" style="color:#38BDF8;"><i class="bi bi-cpu-fill"></i> Tier-1 Direct Routing</div>
                    </div>
                </div>
            </div>

            <!-- Main Interactive Chart Grid (Row 1) -->
            <div class="row g-4 mb-4">
                <!-- Col-lg-8: Cumulative Alpha Growth vs Benchmark -->
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="fx-terminal-card">
                        <div class="fx-chart-header">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span class="badge bg-success bg-opacity-25 text-success border border-success border-opacity-50 rounded-pill px-2 py-1" style="font-size: 11px;">
                                        <i class="bi bi-circle-fill me-1" style="font-size: 6px;"></i> Strategy Growth
                                    </span>
                                    <span class="small text-white-50">AUDITED HISTORICAL INDEX</span>
                                </div>
                                <h3 class="fx-chart-title">Quantitative Strategy Yield vs Global Benchmark</h3>
                                <p class="fx-chart-subtitle">Cumulative returns modeled against HFRX Global Macro Currency Index</p>
                            </div>

                            <!-- Interactive Timeframe Controls -->
                            <div class="fx-timeframe-group" id="fxTimeframeControls">
                                <button type="button" class="fx-timeframe-btn active" data-period="1y">1 Year</button>
                                <button type="button" class="fx-timeframe-btn" data-period="2y">2 Years</button>
                                <button type="button" class="fx-timeframe-btn" data-period="all">All-Time</button>
                            </div>
                        </div>

                        <!-- Chart Canvas Container -->
                        <div class="fx-chart-canvas-wrap">
                            <canvas id="fxPerformanceChart"></canvas>
                        </div>

                        <!-- Bottom Metric Mini-Grid -->
                        <div class="fx-chart-footer-metrics">
                            <div class="fx-chart-metric-item">
                                <div class="fx-chart-metric-label">Monthly Win Rate</div>
                                <div class="fx-chart-metric-val text-success">71.4%</div>
                            </div>
                            <div class="fx-chart-metric-item">
                                <div class="fx-chart-metric-label">Profit Factor</div>
                                <div class="fx-chart-metric-val text-white">2.18</div>
                            </div>
                            <div class="fx-chart-metric-item">
                                <div class="fx-chart-metric-label">Average Monthly Gain</div>
                                <div class="fx-chart-metric-val text-success">+2.42%</div>
                            </div>
                            <div class="fx-chart-metric-item">
                                <div class="fx-chart-metric-label">Max Recovery Period</div>
                                <div class="fx-chart-metric-val text-white">&lt; 14 Days</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Col-lg-4: Currency Exposure & Allocation -->
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="fx-terminal-card">
                        <div class="fx-chart-header">
                            <div>
                                <span class="badge bg-success bg-opacity-25 text-success border border-success border-opacity-50 rounded-pill px-2 py-1 mb-1" style="font-size: 11px;">
                                    Portfolio Allocation
                                </span>
                                <h3 class="fx-chart-title">G10 Pair Weightings</h3>
                                <p class="fx-chart-subtitle">Disciplined exposure limit across deep sovereign liquidity</p>
                            </div>
                        </div>

                        <!-- Doughnut Canvas Container -->
                        <div class="fx-chart-canvas-wrap d-flex align-items-center justify-content-center" style="min-height: 220px; max-height: 230px;">
                            <canvas id="fxAllocationChart"></canvas>
                            <div class="fx-doughnut-center">
                                <div class="fx-doughnut-center-num">100%</div>
                                <div class="fx-doughnut-center-lbl">G10 Majors</div>
                            </div>
                        </div>

                        <!-- Breakdown List -->
                        <ul class="fx-currency-list">
                            <li class="fx-currency-item">
                                <div><span class="fx-currency-dot" style="background:#1DB954;"></span><span class="fx-currency-name">EUR / USD</span></div>
                                <div class="fx-currency-pct">35%</div>
                                <span class="fx-currency-spread">0.1 pip avg</span>
                            </li>
                            <li class="fx-currency-item">
                                <div><span class="fx-currency-dot" style="background:#22C55E;"></span><span class="fx-currency-name">GBP / USD</span></div>
                                <div class="fx-currency-pct">25%</div>
                                <span class="fx-currency-spread">0.2 pip avg</span>
                            </li>
                            <li class="fx-currency-item">
                                <div><span class="fx-currency-dot" style="background:#10B981;"></span><span class="fx-currency-name">USD / JPY</span></div>
                                <div class="fx-currency-pct">18%</div>
                                <span class="fx-currency-spread">0.2 pip avg</span>
                            </li>
                            <li class="fx-currency-item">
                                <div><span class="fx-currency-dot" style="background:#059669;"></span><span class="fx-currency-name">USD / CHF</span></div>
                                <div class="fx-currency-pct">12%</div>
                                <span class="fx-currency-spread">0.3 pip avg</span>
                            </li>
                            <li class="fx-currency-item">
                                <div><span class="fx-currency-dot" style="background:#047857;"></span><span class="fx-currency-name">AUD / USD &amp; CAD</span></div>
                                <div class="fx-currency-pct">10%</div>
                                <span class="fx-currency-spread">0.3 pip avg</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Deep-Dive Analytics (Row 2: 24/5 Sessions + Risk Comparison) -->
            <div class="row g-4">
                <!-- Col-lg-7: 24/5 Global Trading Windows & Liquidity Waves -->
                <div class="col-lg-7" data-aos="fade-up">
                    <div class="fx-terminal-card">
                        <div class="fx-chart-header">
                            <div>
                                <span class="badge bg-success bg-opacity-25 text-success border border-success border-opacity-50 rounded-pill px-2 py-1 mb-1" style="font-size: 11px;">
                                    Market Microstructure
                                </span>
                                <h3 class="fx-chart-title">24/5 Global Liquidity Waves &amp; Prime Execution Windows</h3>
                                <p class="fx-chart-subtitle">Order flow execution synchronized to global trading sessions to minimize slippage</p>
                            </div>
                        </div>

                        <!-- Session Waves Chart Canvas -->
                        <div class="fx-chart-canvas-wrap" style="min-height: 250px;">
                            <canvas id="fxLiquidityChart"></canvas>
                        </div>

                        <!-- Session Timeline Indicators -->
                        <div class="fx-session-pills">
                            <span class="fx-session-pill"><i class="bi bi-clock"></i> Tokyo: 00:00 – 08:00 UTC</span>
                            <span class="fx-session-pill"><i class="bi bi-clock"></i> London: 08:00 – 16:00 UTC</span>
                            <span class="fx-session-pill highlight"><i class="bi bi-lightning-charge-fill"></i> Peak Overlap: 13:00 – 16:00 UTC (Sub-0.2 pip)</span>
                            <span class="fx-session-pill"><i class="bi bi-clock"></i> New York: 13:00 – 21:00 UTC</span>
                        </div>
                    </div>
                </div>

                <!-- Col-lg-5: Institutional Model vs Speculative Retail Model -->
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="80">
                    <div class="fx-terminal-card">
                        <div class="fx-chart-header">
                            <div>
                                <span class="badge bg-success bg-opacity-25 text-success border border-success border-opacity-50 rounded-pill px-2 py-1 mb-1" style="font-size: 11px;">
                                    Risk Governance
                                </span>
                                <h3 class="fx-chart-title">Institutional Protocol vs Retail Speculation</h3>
                                <p class="fx-chart-subtitle">Architectural safeguards designed for long-term capital preservation</p>
                            </div>
                        </div>

                        <!-- Comparison Matrix -->
                        <div class="d-flex flex-column gap-2 mb-3">
                            <div class="fx-compare-row">
                                <span class="fx-compare-label">Max Effective Leverage</span>
                                <div>
                                    <span class="fx-compare-crown me-3"><i class="bi bi-check-circle-fill"></i> 1:10 Cap</span>
                                    <span class="fx-compare-retail">1:500 Speculative</span>
                                </div>
                            </div>

                            <div class="fx-compare-row">
                                <span class="fx-compare-label">Stop-Loss Discipline</span>
                                <div>
                                    <span class="fx-compare-crown me-3"><i class="bi bi-check-circle-fill"></i> 100% Algorithmic ATR</span>
                                    <span class="fx-compare-retail">Manual / Unhedged</span>
                                </div>
                            </div>

                            <div class="fx-compare-row">
                                <span class="fx-compare-label">Execution Venue</span>
                                <div>
                                    <span class="fx-compare-crown me-3"><i class="bi bi-check-circle-fill"></i> Tier-1 Direct ECN</span>
                                    <span class="fx-compare-retail">B-Book / Dealing Desk</span>
                                </div>
                            </div>

                            <div class="fx-compare-row">
                                <span class="fx-compare-label">Drawdown Safeguard</span>
                                <div>
                                    <span class="fx-compare-crown me-3"><i class="bi bi-check-circle-fill"></i> Circuit Breaker @ 3.5%</span>
                                    <span class="fx-compare-retail">Margin Call / Stop-Out</span>
                                </div>
                            </div>

                            <div class="fx-compare-row">
                                <span class="fx-compare-label">Currency Restriction</span>
                                <div>
                                    <span class="fx-compare-crown me-3"><i class="bi bi-check-circle-fill"></i> G10 Majors Only</span>
                                    <span class="fx-compare-retail">Volatile Exotic Pairs</span>
                                </div>
                            </div>
                        </div>

                        <!-- Callout Note -->
                        <div class="p-3 rounded-3 mt-auto" style="background: rgba(29, 185, 84, 0.08); border: 1px solid rgba(29, 185, 84, 0.2);">
                            <div class="d-flex align-items-center gap-2 text-success fw-semibold small mb-1">
                                <i class="bi bi-shield-shaded fs-6"></i> Capital Preservation Guarantee
                            </div>
                            <p class="small text-white-50 mb-0" style="font-size: 11.5px; line-height: 1.5;">
                                By restricting trade parameters to Tier-1 institutional liquidity pools with hard ATR stops, capital drawdown remains mathematically contained even during sovereign rate shock events.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Bottom Action -->
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-green px-4 py-3">
                    Access Institutional Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i>
                </a>
                <span class="d-block small text-white-50 mt-2">
                    <i class="bi bi-lock-fill text-success me-1"></i> Verified investors can monitor real-time positions and daily audited statements inside the portal.
                </span>
            </div>
        </div>
    </section>
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

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
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

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <article class="article-card">
                        <div class="article-img-wrap">
                            <img src="<?= $base_url ?>assets/images/common/fx-terminal.webp" alt="Currency Risk Management" width="800" height="500" loading="lazy">
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

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Forex Analytics Charts Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof Chart === 'undefined') return;

    // Set Global Chart Defaults for Dark Theme
    Chart.defaults.font.family = "'Poppins', sans-serif";
    Chart.defaults.color = 'rgba(255, 255, 255, 0.65)';
    Chart.defaults.plugins.tooltip.backgroundColor = 'rgba(10, 16, 13, 0.95)';
    Chart.defaults.plugins.tooltip.titleColor = '#FFFFFF';
    Chart.defaults.plugins.tooltip.bodyColor = '#1DB954';
    Chart.defaults.plugins.tooltip.borderColor = 'rgba(29, 185, 84, 0.35)';
    Chart.defaults.plugins.tooltip.borderWidth = 1;
    Chart.defaults.plugins.tooltip.padding = 12;
    Chart.defaults.plugins.tooltip.cornerRadius = 8;

    // 1. Performance Chart (Cumulative Yield vs Benchmark)
    const perfCanvas = document.getElementById('fxPerformanceChart');
    if (perfCanvas) {
        const ctx = perfCanvas.getContext('2d');

        // Create Emerald Glow Gradient
        const greenGradient = ctx.createLinearGradient(0, 0, 0, 280);
        greenGradient.addColorStop(0, 'rgba(29, 185, 84, 0.38)');
        greenGradient.addColorStop(0.6, 'rgba(29, 185, 84, 0.12)');
        greenGradient.addColorStop(1, 'rgba(29, 185, 84, 0.0)');

        // Timeframe Dataset Map
        const datasetsMap = {
            '1y': {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                strategy: [2.4, 5.1, 7.8, 10.4, 13.2, 16.1, 18.9, 21.6, 24.5, 27.2, 29.8, 31.8],
                benchmark: [0.6, 1.1, 1.8, 2.3, 2.9, 3.4, 4.0, 4.5, 5.1, 5.7, 6.2, 6.8]
            },
            '2y': {
                labels: ['Q1 25', 'Q2 25', 'Q3 25', 'Q4 25', 'Q1 26', 'Q2 26', 'Q3 26', 'Q4 26'],
                strategy: [7.8, 16.1, 24.5, 31.8, 41.2, 49.8, 58.5, 68.4],
                benchmark: [1.8, 3.4, 5.1, 6.8, 8.6, 10.4, 12.1, 13.9]
            },
            'all': {
                labels: ['2023 H1', '2023 H2', '2024 H1', '2024 H2', '2025 H1', '2025 H2', '2026 H1', '2026 H2'],
                strategy: [14.2, 28.6, 44.5, 62.1, 80.4, 98.7, 118.2, 138.6],
                benchmark: [3.4, 7.1, 10.8, 14.6, 18.5, 22.3, 26.1, 30.2]
            }
        };

        const perfChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: datasetsMap['1y'].labels,
                datasets: [
                    {
                        label: 'Crown Asia Quantitative Strategy',
                        data: datasetsMap['1y'].strategy,
                        borderColor: '#1DB954',
                        backgroundColor: greenGradient,
                        borderWidth: 3,
                        fill: true,
                        tension: 0.35,
                        pointBackgroundColor: '#1DB954',
                        pointBorderColor: '#FFFFFF',
                        pointBorderWidth: 1.5,
                        pointRadius: 3.5,
                        pointHoverRadius: 6.5
                    },
                    {
                        label: 'Global Macro FX Benchmark (HFRX)',
                        data: datasetsMap['1y'].benchmark,
                        borderColor: 'rgba(165, 185, 175, 0.55)',
                        backgroundColor: 'transparent',
                        borderWidth: 2,
                        borderDash: [5, 5],
                        fill: false,
                        tension: 0.35,
                        pointRadius: 0,
                        pointHoverRadius: 5
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    mode: 'index',
                    intersect: false
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        align: 'end',
                        labels: {
                            boxWidth: 12,
                            boxHeight: 12,
                            usePointStyle: true,
                            pointStyle: 'circle',
                            color: 'rgba(255, 255, 255, 0.75)',
                            font: { size: 11.5, weight: '500' }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return ' ' + context.dataset.label + ': +' + context.parsed.y + '%';
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.04)',
                            drawBorder: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.55)',
                            font: { size: 11 }
                        }
                    },
                    y: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.06)',
                            drawBorder: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.55)',
                            font: { size: 11 },
                            callback: function (val) {
                                return '+' + val + '%';
                            }
                        }
                    }
                }
            }
        });

        // Handle Timeframe Button Switching
        const timeframeBtns = document.querySelectorAll('#fxTimeframeControls .fx-timeframe-btn');
        timeframeBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                timeframeBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const period = this.getAttribute('data-period');
                const targetData = datasetsMap[period];
                if (targetData && perfChart) {
                    perfChart.data.labels = targetData.labels;
                    perfChart.data.datasets[0].data = targetData.strategy;
                    perfChart.data.datasets[1].data = targetData.benchmark;
                    perfChart.update('active');
                }
            });
        });
    }

    // 2. Allocation Doughnut Chart
    const allocCanvas = document.getElementById('fxAllocationChart');
    if (allocCanvas) {
        new Chart(allocCanvas.getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: ['EUR / USD', 'GBP / USD', 'USD / JPY', 'USD / CHF', 'AUD / USD & CAD'],
                datasets: [{
                    data: [35, 25, 18, 12, 10],
                    backgroundColor: ['#1DB954', '#22C55E', '#10B981', '#059669', '#047857'],
                    borderColor: '#0D1410',
                    borderWidth: 3,
                    hoverOffset: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '74%',
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return ' ' + context.label + ': ' + context.parsed + '% Exposure';
                            }
                        }
                    }
                }
            }
        });
    }

    // 3. 24/5 Global Liquidity Waves Chart
    const liqCanvas = document.getElementById('fxLiquidityChart');
    if (liqCanvas) {
        const lCtx = liqCanvas.getContext('2d');
        const lGrad = lCtx.createLinearGradient(0, 0, 0, 220);
        lGrad.addColorStop(0, 'rgba(29, 185, 84, 0.45)');
        lGrad.addColorStop(0.5, 'rgba(29, 185, 84, 0.15)');
        lGrad.addColorStop(1, 'rgba(29, 185, 84, 0.01)');

        new Chart(lCtx, {
            type: 'line',
            data: {
                labels: ['00:00 (Tokyo)', '02:00', '04:00', '06:00', '08:00 (London)', '10:00', '12:00', '13:00 (Peak Overlap)', '14:00', '15:00', '16:00 (London Close)', '18:00 (NY)', '20:00', '22:00'],
                datasets: [{
                    label: 'Global FX Liquidity Depth Index (0-100)',
                    data: [34, 28, 26, 42, 80, 88, 82, 100, 97, 94, 85, 60, 42, 28],
                    borderColor: '#1DB954',
                    backgroundColor: lGrad,
                    borderWidth: 2.5,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: function (context) {
                        const idx = context.dataIndex;
                        return (idx >= 7 && idx <= 9) ? '#22C55E' : '#1DB954';
                    },
                    pointBorderColor: '#FFFFFF',
                    pointBorderWidth: 1.5,
                    pointRadius: function (context) {
                        const idx = context.dataIndex;
                        return (idx === 7) ? 6 : 3;
                    },
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return ' Liquidity Depth: ' + context.parsed.y + '/100 Index';
                            },
                            afterLabel: function (context) {
                                if (context.dataIndex >= 7 && context.dataIndex <= 9) {
                                    return ' ★ Peak Institutional Liquidity: Sub-0.2 pip spreads';
                                }
                                return '';
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.03)',
                            drawBorder: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.55)',
                            font: { size: 10.5 },
                            maxRotation: 45,
                            minRotation: 0
                        }
                    },
                    y: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.05)',
                            drawBorder: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.55)',
                            font: { size: 10.5 },
                            callback: function (val) {
                                return val + ' idx';
                            }
                        }
                    }
                }
            }
        });
    }
});
</script>

<?php include_once ROOT_PATH . 'footer.php'; ?>

