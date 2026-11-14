<?php
require_once dirname(__DIR__) . '/config.php';

// Get slug from URL (Default: priority-real-estate-pool)
$slug = isset($_GET['slug']) ? preg_replace('/[^a-z0-9\-]/', '', strtolower($_GET['slug'])) : 'priority-real-estate-pool';

// Offerings Data Repository
$offerings = [
    'priority-real-estate-pool' => [
        'title'         => 'Priority Coastal & Urban Real Estate Pool',
        'code'          => 'CA-RE-2026-01',
        'sector'        => 'Real Estate Investment',
        'sector_url'    => 'industries/real-estate/',
        'status'        => 'Open for Allocation',
        'hero_img'      => $base_url . 'assets/images/offerings/real-estate-pool.webp',
        'summary'       => 'Asset-backed property acquisition, residential development, and commercial land positioning across priority growth markets in Dubai, Sri Lanka, and the United States.',
        'issuer'        => 'Crown Asia LLC (New Mexico, USA)',
        'structure'     => 'Asset-Backed Participation Note',
        'minimum'       => '100 USDT',
        'currency'      => 'USDT  ERC20',
        'eligibility'   => 'KYC-Verified Eligible Investors',
        'distributions' => 'Quarterly in USDT',
        'mgmt_fee'      => '1.5% Annual Administration Fee',
        'perf_fee'      => '15% Above Hurdle Rate',
        'redemption'    => 'Capital Liquidity Window (30-Day Prior Notice)',
        'strategy_p1'   => 'The Priority Coastal & Urban Real Estate Pool deploys investor capital into vetted residential developments, hospitality-linked properties, and high-appreciation urban land parcels across Crown Asia’s priority jurisdictions: Dubai (UAE), Sri Lanka, and the United States.',
        'strategy_p2'   => 'Capital is allocated strictly toward properties with verified title deeds, independent third-party valuation reports, and clear exit pathways via unit pre-sales, commercial leasing, or institutional refinancing.',
        'use_of_funds'  => [
            ['label' => 'Direct Property Acquisition & Construction Milestones', 'pct' => 65],
            ['label' => 'Title Verification, Escrow & Legal Structuring',      'pct' => 15],
            ['label' => 'Property Management & Operational Reserve',          'pct' => 12],
            ['label' => 'Liquidity Buffer & Audit Governance',                'pct' => 8],
        ],
        'risks' => [
            [
                'icon'  => 'bi-building-exclamation',
                'color' => '',
                'title' => 'Construction & Timeline Risk',
                'desc'  => 'Permitting approvals, contractor schedules, or material cost shifts may extend project completion timelines.',
                'items' => [
                    'Phased capital release tied to verified engineering milestones.',
                    'Fixed-price contractor agreements with performance bonds.',
                    'Priority allocation to near-completion or income-producing assets.'
                ],
                'tag_label' => 'Development Control',
                'tag_val'   => 'Milestone Escrow Release'
            ],
            [
                'icon'  => 'bi-graph-down-arrow',
                'color' => 'amber',
                'title' => 'Property Valuation & Market Cycles',
                'desc'  => 'Regional real estate demand, interest rate shifts, or local currency movements can influence resale valuations.',
                'items' => [
                    'Geographic diversification across USD-pegged (Dubai/USA) and high-yield markets.',
                    'Conservative loan-to-value acquisition benchmarks below market comps.',
                    'Dual exit options: direct unit sale or ongoing rental yield.'
                ],
                'tag_label' => 'Valuation Buffer',
                'tag_val'   => 'Below-Market Entry Basis'
            ],
            [
                'icon'  => 'bi-hourglass-split',
                'color' => 'blue',
                'title' => 'Liquidity & Capital Redemption',
                'desc'  => 'Real estate assets are managed for ongoing capital yield and value appreciation prior to scheduled project exit or liquidity windows.',
                'items' => [
                    'Standard distribution guidelines disclosed prior to USDT commitment.',
                    'Dedicated quarterly distribution reserve for scheduled payouts.',
                    'Transparent portal reporting on project sales and occupancy.'
                ],
                'tag_label' => 'Liquidity Profile',
                'tag_val'   => 'Quarterly Yield Distribution'
            ]
        ]
    ],
    'g10-quantitative-liquidity' => [
        'title'         => 'G10 Quantitative Liquidity Strategy',
        'code'          => 'CA-FX-2026-02',
        'sector'        => 'Forex Trading',
        'sector_url'    => 'industries/forex-trading/',
        'status'        => 'Open for Allocation',
        'hero_img'      => $base_url . 'assets/images/offerings/forex-liquidity.webp',
        'summary'       => 'Disciplined institutional currency execution across major G10 pairs utilizing Tier-1 bank liquidity pools, quantitative macro models, and strict 1:10 max leverage caps.',
        'issuer'        => 'Crown Asia LLC (New Mexico, USA)',
        'structure'     => 'Managed Liquidity Strategy Note',
        'minimum'       => '100 USDT',
        'currency'      => 'USDT  ERC20',
        'eligibility'   => 'KYC-Verified Eligible Investors',
        'distributions' => 'Monthly in USDT',
        'mgmt_fee'      => '1.0% Annual Management Fee',
        'perf_fee'      => '20% High-Water Mark Allocation',
        'redemption'    => 'Monthly Liquidity Window (30-Day Prior Notice)',
        'strategy_p1'   => 'The G10 Quantitative Liquidity Strategy executes systematic currency positioning across deep, institutional foreign exchange pairs including EUR/USD, GBP/USD, USD/JPY, and USD/CHF.',
        'strategy_p2'   => 'Orders route directly to Tier-1 ECN liquidity venues with algorithmic stop-loss limits, real-time Value-at-Risk (VaR) monitoring, and automated position contraction during elevated macro volatility.',
        'use_of_funds'  => [
            ['label' => 'Tier-1 Prime Broker Margin & Liquidity Collateral', 'pct' => 75],
            ['label' => 'Unencumbered Cash & Drawdown Protection Reserve',   'pct' => 15],
            ['label' => 'Quantitative Infrastructure & Low-Latency Hosting', 'pct' => 6],
            ['label' => 'Independent Risk Audit & Compliance',               'pct' => 4],
        ],
        'risks' => [
            [
                'icon'  => 'bi-arrow-left-right',
                'color' => '',
                'title' => 'Macro & Currency Volatility',
                'desc'  => 'Central bank policy surprises and geopolitical events can trigger rapid exchange rate swings.',
                'items' => [
                    'Strict restriction to liquid G10 major currency pairs.',
                    'Hard ATR stop-loss orders enforced on every active position.',
                    'Automated drawdown circuit breakers at portfolio level.'
                ],
                'tag_label' => 'Volatility Cap',
                'tag_val'   => 'Algorithmic Hard Stops'
            ],
            [
                'icon'  => 'bi-lightning-charge-fill',
                'color' => 'amber',
                'title' => 'Leverage Amplification',
                'desc'  => 'Using margin in currency markets magnifies both potential gains and potential losses.',
                'items' => [
                    'Conservative maximum 1:10 effective leverage cap.',
                    'Dynamic margin buffers preventing forced liquidation.',
                    'Automatic exposure reduction ahead of major rate announcements.'
                ],
                'tag_label' => 'Leverage Limit',
                'tag_val'   => 'Max 1:10 Institutional Cap'
            ],
            [
                'icon'  => 'bi-droplet-half',
                'color' => 'blue',
                'title' => 'Execution & Rollover Gaps',
                'desc'  => 'Weekend market gaps or daily rollover periods can cause temporary spread widening.',
                'items' => [
                    'Multi-venue Tier-1 ECN liquidity aggregation (<15ms latency).',
                    'Mandatory trading blackout windows during illiquid rollover hours.',
                    'Redundant prime broker connectivity.'
                ],
                'tag_label' => 'Execution Venue',
                'tag_val'   => 'Tier-1 ECN Prime Feeds'
            ]
        ]
    ]
];

// Fallback to first offering if selected slug is not found
$offering = $offerings[$slug] ?? $offerings['priority-real-estate-pool'];

// Portal Invest Now URL
$portal_invest_url = $portal_login_url . '?offering=' . urlencode($slug);

$page_title    = $offering['title'] . " | Crown Asia LLC";
$page_desc     = $offering['summary'];
$canonical_url = "https://crownasia.io/investment-opportunities/{$slug}/";
$og_image      = $offering['hero_img'];
$og_type       = "product";
include_once ROOT_PATH . 'header.php';
?>

<!-- Financial Product JSON-LD Schema -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FinancialProduct",
        "name": <?= json_encode($offering['title']) ?>,
        "description": <?= json_encode($offering['summary']) ?>,
        "category": <?= json_encode($offering['sector']) ?>,
        "provider": {
            "@type": "FinancialService",
            "name": "Crown Asia LLC",
            "url": "https://crownasia.io/"
        },
        "offers": {
            "@type": "Offer",
            "price": <?= json_encode($offering['minimum']) ?>,
            "priceCurrency": "USD"
        }
    }
</script>

<!-- 1. Offering Hero & Invest Now Section -->
<section class="inner-hero">
    <div class="container inner-hero-content">
        <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb" data-aos="fade-down">
            <a href="<?= $base_url ?>">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <a href="<?= $base_url ?>investment-opportunities/">Investment Opportunities</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active"><?= htmlspecialchars($offering['code']) ?></span>
        </nav>

        <div class="row align-items-center g-5">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                    <span class="topic-badge-pill dark mb-0"><?= htmlspecialchars($offering['sector']) ?></span>
                    <span class="badge bg-success bg-opacity-25 text-success border border-success border-opacity-50 rounded-pill px-3 py-2">
                        <i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i> <?= htmlspecialchars($offering['status']) ?>
                    </span>
                </div>

                <h1 class="inner-hero-title"><?= htmlspecialchars($offering['title']) ?></h1>
                <p class="inner-hero-lead mb-4"><?= htmlspecialchars($offering['summary']) ?></p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="<?= $portal_invest_url ?>" target="_blank" rel="noopener" class="btn-green">
                        Invest Now <i class="bi bi-arrow-up-right ms-1"></i>
                    </a>
                    <a href="#offering-documents" class="btn-ghost">
                        <i class="bi bi-file-earmark-pdf me-1"></i> Offering Documents
                    </a>
                </div>
            </div>

            <!-- Hero Image Preview -->
            <div class="col-lg-5" data-aos="fade-left">
                <div class="sector-hero-visual">
                    <div class="hero-image-frame">
                        <img src="<?= htmlspecialchars($offering['hero_img']) ?>" alt="<?= htmlspecialchars($offering['title']) ?>" class="img-fluid">
                        <div class="hero-live-pill">
                            <span class="live-dot pulse"></span>
                            <span>Offering ID: <?= htmlspecialchars($offering['code']) ?></span>
                        </div>
                        <div class="hero-floating-stat">
                            <div class="stat-icon"><i class="bi bi-wallet2"></i></div>
                            <div>
                                <div class="stat-title">Minimum Allocation</div>
                                <div class="stat-sub"><?= htmlspecialchars($offering['minimum']) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Detail Content + Sticky Sidebar -->
<section class="section section-light">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Left Column (8 Cols): Full Offering Specification -->
            <div class="col-lg-8">

                <!-- 2. Issuer, Structure, Minimum, Currency, Distributions & Eligibility -->
                <div class="mb-5" data-aos="fade-up">
                    <span class="topic-badge-pill light">KEY SPECIFICATIONS</span>
                    <h2 class="section-title mb-4">Issuer, Structure &amp; Offering Specifications</h2>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="term-spec-card">
                                <div class="term-spec-label"><i class="bi bi-building-check text-success me-1"></i> Issuer</div>
                                <div class="term-spec-value"><?= htmlspecialchars($offering['issuer']) ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="term-spec-card">
                                <div class="term-spec-label"><i class="bi bi-diagram-3 text-success me-1"></i> Investment Structure</div>
                                <div class="term-spec-value"><?= htmlspecialchars($offering['structure']) ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="term-spec-card">
                                <div class="term-spec-label"><i class="bi bi-cash-coin text-success me-1"></i> Minimum Investment</div>
                                <div class="term-spec-value text-success"><?= htmlspecialchars($offering['minimum']) ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="term-spec-card">
                                <div class="term-spec-label"><i class="bi bi-currency-dollar text-success me-1"></i> Settlement Currency</div>
                                <div class="term-spec-value"><?= htmlspecialchars($offering['currency']) ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="term-spec-card">
                                <div class="term-spec-label"><i class="bi bi-arrow-repeat text-success me-1"></i> Distribution Schedule</div>
                                <div class="term-spec-value"><?= htmlspecialchars($offering['distributions']) ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="term-spec-card">
                                <div class="term-spec-label"><i class="bi bi-person-badge text-success me-1"></i> Investor Eligibility</div>
                                <div class="term-spec-value"><?= htmlspecialchars($offering['eligibility']) ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Project or Strategy & Use of Funds -->
                <div class="bg-white rounded-4 p-4 p-md-5 border mb-5" data-aos="fade-up">
                    <span class="topic-badge-pill light">CAPITAL DEPLOYMENT</span>
                    <h3 class="mb-3">Project Strategy &amp; Use of Funds</h3>
                    <p class="about-copy mb-3"><?= htmlspecialchars($offering['strategy_p1']) ?></p>
                    <p class="about-copy mb-4"><?= htmlspecialchars($offering['strategy_p2']) ?></p>

                    <div class="p-4 rounded-4" style="background: var(--off-white); border: 1px solid #E2EAE5;">
                        <h5 class="mb-3" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 16px;">
                            <i class="bi bi-pie-chart-fill text-success me-2"></i>Target Use of Funds Breakdown
                        </h5>
                        <?php foreach ($offering['use_of_funds'] as $fund): ?>
                            <div class="fund-bar-item">
                                <div class="d-flex justify-content-between small fw-semibold">
                                    <span><?= htmlspecialchars($fund['label']) ?></span>
                                    <span class="text-success"><?= (int)$fund['pct'] ?>%</span>
                                </div>
                                <div class="fund-bar-track">
                                    <div class="fund-bar-fill" style="width: <?= (int)$fund['pct'] ?>%;"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-4 pt-2">
                        <a href="<?= $base_url . htmlspecialchars($offering['sector_url']) ?>" class="small fw-semibold text-success text-decoration-none">
                            Explore Underlying <?= htmlspecialchars($offering['sector']) ?> Division <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>

                <!-- 4. Investor Rights, Fees & Distributions -->
                <div class="bg-white rounded-4 p-4 p-md-5 border mb-5" data-aos="fade-up">
                    <span class="topic-badge-pill light">GOVERNANCE &amp; PAYOUTS</span>
                    <h3 class="mb-4">Investor Rights, Fees &amp; Distributions</h3>

                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 h-100" style="background: #F8FAF9; border: 1px solid #E6ECE8;">
                                <div class="activity-icon mb-3" style="width: 44px; height: 44px; font-size: 18px;">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5 style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600;">Investor Rights</h5>
                                <p class="small text-muted mb-0">Pro-rata participation entitlement, verified portal allocation certificate, quarterly operational reporting, and audited asset disclosures.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 h-100" style="background: #F8FAF9; border: 1px solid #E6ECE8;">
                                <div class="activity-icon mb-3" style="width: 44px; height: 44px; font-size: 18px;">
                                    <i class="bi bi-percent"></i>
                                </div>
                                <h5 style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600;">Transparent Fees</h5>
                                <p class="small text-muted mb-1"><strong>Management:</strong> <?= htmlspecialchars($offering['mgmt_fee']) ?></p>
                                <p class="small text-muted mb-0"><strong>Performance:</strong> <?= htmlspecialchars($offering['perf_fee']) ?>. Zero hidden entry fees.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 rounded-3 h-100" style="background: #F8FAF9; border: 1px solid #E6ECE8;">
                                <div class="activity-icon mb-3" style="width: 44px; height: 44px; font-size: 18px;">
                                    <i class="bi bi-calendar2-check"></i>
                                </div>
                                <h5 style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600;">Distributions</h5>
                                <p class="small text-muted mb-0"><strong>Schedule:</strong> <?= htmlspecialchars($offering['distributions']) ?>. Credited directly to your Investor Portal USDT balance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Offering-Specific Risks -->
                <div class="mb-5" data-aos="fade-up">
                    <span class="topic-badge-pill light">RISK FACTORS</span>
                    <h3 class="mb-3">Offering-Specific Risks &amp; Controls</h3>
                    <p class="text-muted small mb-4">All investments carry financial risk, including potential loss of principal. Review the specific risk factors and mitigation protocols applicable to this offering:</p>

                    <div class="row g-4">
                        <?php foreach ($offering['risks'] as $risk): ?>
                            <div class="col-md-4">
                                <div class="risk-card">
                                    <div class="risk-card-header">
                                        <div class="risk-card-icon <?= htmlspecialchars($risk['color']) ?>">
                                            <i class="bi <?= htmlspecialchars($risk['icon']) ?>"></i>
                                        </div>
                                        <h4 style="font-size: 16px;"><?= htmlspecialchars($risk['title']) ?></h4>
                                    </div>
                                    <p class="risk-card-desc small"><?= htmlspecialchars($risk['desc']) ?></p>
                                    <ul class="risk-protocols-list">
                                        <?php foreach ($risk['items'] as $item): ?>
                                            <li>
                                                <i class="bi bi-check-circle-fill"></i>
                                                <span class="small"><?= htmlspecialchars($item) ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="risk-metric-tag">
                                        <span class="label"><?= htmlspecialchars($risk['tag_label']) ?></span>
                                        <span class="value text-success"><?= htmlspecialchars($risk['tag_val']) ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- 6. Redemption & USDT Withdrawal Terms -->
                <div class="bg-white rounded-4 p-4 p-md-5 border mb-5" data-aos="fade-up">
                    <span class="topic-badge-pill light">LIQUIDITY &amp; SETTLEMENT</span>
                    <h3 class="mb-3">Redemption &amp; USDT Withdrawal Terms</h3>
                    <p class="about-copy mb-4">
                        Principal redemption and profit distributions are processed exclusively in <strong>USDT</strong> through the Crown Asia Investor Portal to your verified external wallet address.
                    </p>

                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 border bg-light">
                                <div class="small text-uppercase text-muted fw-semibold">Maturity Redemption</div>
                                <div class="fw-bold text-dark mt-1"><?= htmlspecialchars($offering['redemption']) ?></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 border bg-light">
                                <div class="small text-uppercase text-muted fw-semibold">Supported USDT Networks</div>
                                <div class="fw-bold text-dark mt-1">TRC20 (Tron) · ERC20 · BEP20</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 border bg-light">
                                <div class="small text-uppercase text-muted fw-semibold">Withdrawal Processing</div>
                                <div class="fw-bold text-dark mt-1">24 – 48 Business Hours</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 border bg-light">
                                <div class="small text-uppercase text-muted fw-semibold">Withdrawal Fee</div>
                                <div class="fw-bold text-dark mt-1">Standard On-Chain Network Gas Only</div>
                            </div>
                        </div>
                    </div>

                    <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="small fw-semibold text-success text-decoration-none">
                        View Full USDT Deposit &amp; Withdrawal Guide <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>

                <!-- 7. Offering Documents -->
                <div class="mb-4" id="offering-documents" data-aos="fade-up">
                    <span class="topic-badge-pill light">DISCLOSURES &amp; FILINGS</span>
                    <h3 class="mb-3">Offering Documents</h3>
                    <p class="text-muted small mb-4">Review official offering disclosures below. Full subscription agreements are executed digitally inside the Investor Portal prior to funding.</p>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="doc-item-card">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="doc-file-icon"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-dark">Offering Memorandum</h6>
                                        <span class="small text-muted">PDF &middot; Strategy, Terms &amp; Structure</span>
                                    </div>
                                </div>
                                <a href="<?= $portal_invest_url ?>" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success rounded-pill px-3">Portal Access</a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="doc-item-card">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="doc-file-icon"><i class="bi bi-shield-exclamation"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-dark">Risk Disclosure Statement</h6>
                                        <span class="small text-muted">Public Policy &middot; Sector &amp; USDT Risks</span>
                                    </div>
                                </div>
                                <a href="<?= $base_url ?>legal/risk-disclosure/" class="btn btn-sm btn-outline-dark rounded-pill px-3">Read</a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="doc-item-card">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="doc-file-icon"><i class="bi bi-person-check-fill"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-dark">Investor Eligibility Criteria</h6>
                                        <span class="small text-muted">Public Policy &middot; Jurisdiction &amp; KYC</span>
                                    </div>
                                </div>
                                <a href="<?= $base_url ?>legal/investor-eligibility/" class="btn btn-sm btn-outline-dark rounded-pill px-3">Read</a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="doc-item-card">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="doc-file-icon"><i class="bi bi-file-earmark-check-fill"></i></div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-dark">Asset &amp; Registration Verification</h6>
                                        <span class="small text-muted">Verified LLC &amp; Sector Backing</span>
                                    </div>
                                </div>
                                <a href="<?= $base_url ?>legal/" class="btn btn-sm btn-outline-dark rounded-pill px-3">View</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column (4 Cols): Sticky Invest Now Card -->
            <div class="col-lg-4">
                <div class="sticky-invest-card" data-aos="fade-left">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-success bg-opacity-25 text-success border border-success border-opacity-50 rounded-pill px-3 py-1">
                            <?= htmlspecialchars($offering['status']) ?>
                        </span>
                        <span class="small text-white-50"><?= htmlspecialchars($offering['code']) ?></span>
                    </div>

                    <h4 class="text-white mb-2" style="font-size: 20px;"><?= htmlspecialchars($offering['title']) ?></h4>
                    <p class="small text-white-50 mb-4">Complete verification and allocate funds directly through the secure Crown Asia Investor Portal.</p>

                    <div class="invest-spec-row">
                        <span class="text-white-50">Minimum Entry</span>
                        <span class="text-success fw-bold"><?= htmlspecialchars($offering['minimum']) ?></span>
                    </div>
                    <div class="invest-spec-row">
                        <span class="text-white-50">Currency</span>
                        <span class="text-white fw-semibold">USDT</span>
                    </div>
                    <div class="invest-spec-row">
                        <span class="text-white-50">Distributions</span>
                        <span class="text-white fw-semibold"><?= htmlspecialchars($offering['distributions']) ?></span>
                    </div>
                    <div class="invest-spec-row mb-4">
                        <span class="text-white-50">Issuer</span>
                        <span class="text-white fw-semibold">Crown Asia LLC</span>
                    </div>

                    <a href="<?= $portal_invest_url ?>" target="_blank" rel="noopener" class="btn-green w-100 text-center mb-3">
                        Invest Now via Portal <i class="bi bi-box-arrow-up-right ms-1"></i>
                    </a>
                    <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="btn-ghost w-100 text-center py-2" style="font-size: 12px;">
                        New Investor? Register Now
                    </a>

                    <div class="mt-4 pt-3 border-top border-secondary border-opacity-25">
                        <p class="small text-white-50 mb-0" style="font-size: 11.5px; line-height: 1.5;">
                            <i class="bi bi-lock-fill text-success me-1"></i> Your selected offering (<strong><?= htmlspecialchars($offering['code']) ?></strong>) is preserved when signing in to the Investor Portal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. Offering FAQs & Portal CTA -->
<section class="section section-white" id="offering-faq">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="topic-badge-pill light">OFFERING QUESTIONS</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle mx-auto">Common questions regarding subscription, USDT funding, distributions, and redemption for this offering.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="accordion custom-accordion" id="offeringDetailFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="detFaq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#detCol1" aria-expanded="true" aria-controls="detCol1">
                                How do I subscribe to <?= htmlspecialchars($offering['title']) ?>?
                            </button>
                        </h2>
                        <div id="detCol1" class="accordion-collapse collapse show" aria-labelledby="detFaq1" data-bs-parent="#offeringDetailFAQ">
                            <div class="accordion-body">
                                Click <strong>Invest Now</strong> on this page to open the Crown Asia Investor Portal. After logging in (or registering and completing KYC verification), deposit at least <strong><?= htmlspecialchars($offering['minimum']) ?></strong> into your portal wallet and confirm your allocation for offering <strong><?= htmlspecialchars($offering['code']) ?></strong>.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="detFaq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detCol2" aria-expanded="false" aria-controls="detCol2">
                                How and when are distributions paid out?
                            </button>
                        </h2>
                        <div id="detCol2" class="accordion-collapse collapse" aria-labelledby="detFaq2" data-bs-parent="#offeringDetailFAQ">
                            <div class="accordion-body">
                                Distributions are calculated according to the offering memorandum and credited in <strong>USDT</strong> on a <strong><?= htmlspecialchars(strtolower($offering['distributions'])) ?></strong> basis directly to your Investor Portal balance, where you can withdraw them to your verified external wallet.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="detFaq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#detCol3" aria-expanded="false" aria-controls="detCol3">
                                How are capital redemption and withdrawals handled?
                            </button>
                        </h2>
                        <div id="detCol3" class="accordion-collapse collapse" aria-labelledby="detFaq3" data-bs-parent="#offeringDetailFAQ">
                            <div class="accordion-body">
                                In accordance with offering terms (subject to standard redemption notice guidelines), your capital allocation and accrued distributions are settled directly in USDT to your secure portal wallet for external withdrawal or portfolio rebalancing.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portal Final CTA -->
<section class="cta-section">
    <div class="cta-glow-blob"></div>
    <div class="container" data-aos="zoom-in">
        <div class="cta-card-luxury">
            <span class="topic-badge-pill mb-3">SECURE PORTAL EXECUTION</span>
            <h2>Proceed to <span>Investor Portal</span></h2>
            <p>Sign in or create an account to review complete offering memoranda, fund via USDT, and confirm your allocation.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="<?= $portal_invest_url ?>" target="_blank" rel="noopener" class="cta-btn-primary">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Invest Now in Portal
                </a>
                <a href="<?= $base_url ?>investment-opportunities/" class="cta-btn-secondary">
                    <i class="bi bi-arrow-left me-1"></i> Back to All Offerings
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once ROOT_PATH . 'footer.php'; ?>