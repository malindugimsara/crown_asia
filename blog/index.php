<?php
require_once dirname(__DIR__) . '/config.php';

$page_title = "Knowledge Hub & Market Insights | Crown Asia LLC";
$page_desc  = "Explore executive briefings, sector due diligence checklists, USDT settlement guides, and macroeconomic analysis from Crown Asia's investment research team.";
include_once ROOT_PATH . 'header.php';

// Articles Data
$articles = [
    // 1. Due Diligence - Article 1
    [
        'id'        => 1,
        'slug'      => 'how-to-evaluate-an-investment-opportunity',
        'title'     => 'How to Evaluate an Investment Opportunity: 7 Due Diligence Steps for Smart Investors',
        'category'  => 'Due Diligence',
        'author'    => 'Marcus Sterling',
        'role'      => 'Chief Investment Strategist',
        'avatar'    => 'assets/images/blog/avatar-1.webp',
        'image'     => 'assets/images/blog/blog-1.webp',
        'date'      => 'Nov 12, 2026',
        'read_time' => '6 min read',
        'excerpt'   => 'Before allocating capital, sophisticated investors follow a disciplined due diligence methodology covering legal charter verification, cash flow modeling, risk buffers, and asset backing.',
        'featured'  => true
    ],
    // 2. Due Diligence - Article 2
    [
        'id'        => 2,
        'slug'      => 'financial-audit-and-balance-sheet-verification',
        'title'     => 'Balance Sheet Verification & Escrow Safeguards in Private Offerings',
        'category'  => 'Due Diligence',
        'author'    => 'Sarah Jenkins, Esq.',
        'role'      => 'Senior Legal Counsel',
        'avatar'    => 'assets/images/blog/avatar-2.webp',
        'image'     => 'assets/images/blog/blog-8.webp',
        'date'      => 'Nov 10, 2026',
        'read_time' => '5 min read',
        'excerpt'   => 'A structured walkthrough of auditing independent bank reconciliations, third-party asset valuations, and milestone-based escrow release schedules before committing funds.',
        'featured'  => false
    ],
    // 3. USDT & Settlement - Article 1
    [
        'id'        => 3,
        'slug'      => 'usdt-cross-border-investment-rails',
        'title'     => 'USDT Investment Rails: Fast, Borderless & Transparent Asset Settlement',
        'category'  => 'USDT & Settlement',
        'author'    => 'Elena Vance',
        'role'      => 'Head of Digital Settlement',
        'avatar'    => 'assets/images/blog/avatar-2.webp',
        'image'     => 'assets/images/blog/blog-2.webp',
        'date'      => 'Nov 08, 2026',
        'read_time' => '5 min read',
        'excerpt'   => 'How institutional stablecoin settlement via TRC20, ERC20, and BEP20 eliminates SWIFT correspondent delays, high foreign exchange friction, and weekend banking lockups.',
        'featured'  => false
    ],
    // 4. USDT & Settlement - Article 2
    [
        'id'        => 4,
        'slug'      => 'multi-network-treasury-architecture-and-cold-custody',
        'title'     => 'Multi-Sig Treasury Architecture: Securing Digital Capital Across Global Nodes',
        'category'  => 'USDT & Settlement',
        'author'    => 'Elena Vance',
        'role'      => 'Head of Digital Settlement',
        'avatar'    => 'assets/images/blog/avatar-2.webp',
        'image'     => 'assets/images/blog/blog-9.webp',
        'date'      => 'Nov 05, 2026',
        'read_time' => '6 min read',
        'excerpt'   => 'Deep dive into segregated cold storage vaults, multi-signature threshold approval workflows, and automated on-chain verification safeguarding institutional USDT capital.',
        'featured'  => false
    ],
    // 5. Multi-Sector Strategy - Article 1
    [
        'id'        => 5,
        'slug'      => 'multi-sector-risk-diversification',
        'title'     => 'Multi-Sector Risk Diversification: Mitigating Market Volatility in 2026',
        'category'  => 'Strategy',
        'author'    => 'David Reynolds',
        'role'      => 'Portfolio Director',
        'avatar'    => 'assets/images/blog/avatar-1.webp',
        'image'     => 'assets/images/blog/blog-3.webp',
        'date'      => 'Nov 03, 2026',
        'read_time' => '7 min read',
        'excerpt'   => 'Why holding non-correlated business divisions—from quantitative forex trading to physical real estate corridors and industrial manufacturing—protects investor capital across global economic cycles.',
        'featured'  => false
    ],
    // 6. Multi-Sector Strategy - Article 2
    [
        'id'        => 6,
        'slug'      => 'cross-border-supply-chain-modernization-and-trade',
        'title'     => 'Capitalizing on Cross-Border Trade & Value-Added Export Supply Chains',
        'category'  => 'Strategy',
        'author'    => 'David Reynolds',
        'role'      => 'Portfolio Director',
        'avatar'    => 'assets/images/blog/avatar-1.webp',
        'image'     => 'assets/images/blog/blog-10.webp',
        'date'      => 'Nov 01, 2026',
        'read_time' => '6 min read',
        'excerpt'   => 'Analyzing how direct agricultural processing, customs-bonded logistics hubs, and bilateral merchant credit agreements generate resilient, inflation-hedged yields.',
        'featured'  => false
    ],
    // 7. Risk & Governance - Article 1
    [
        'id'        => 7,
        'slug'      => 'state-of-new-mexico-llc-governance',
        'title'     => 'Corporate Governance & Transparency: Inside Our New Mexico LLC Structure',
        'category'  => 'Compliance',
        'author'    => 'Sarah Jenkins, Esq.',
        'role'      => 'Senior Legal Counsel',
        'avatar'    => 'assets/images/blog/avatar-2.webp',
        'image'     => 'assets/images/blog/blog-4.webp',
        'date'      => 'Oct 29, 2026',
        'read_time' => '4 min read',
        'excerpt'   => 'An in-depth look at our formal LLC registration in Albuquerque, New Mexico, regulatory filings, banking controls, and contractual obligations protecting investor funds.',
        'featured'  => false
    ],
    // 8. Risk & Governance - Article 2
    [
        'id'        => 8,
        'slug'      => 'global-kyc-aml-compliance-and-investor-protection',
        'title'     => 'Institutional Compliance Standards: Automated AML/KYC & Investor Protections',
        'category'  => 'Compliance',
        'author'    => 'Sarah Jenkins, Esq.',
        'role'      => 'Senior Legal Counsel',
        'avatar'    => 'assets/images/blog/avatar-2.webp',
        'image'     => 'assets/images/blog/blog-11.webp',
        'date'      => 'Oct 26, 2026',
        'read_time' => '5 min read',
        'excerpt'   => 'How biometric identity checks, sanctioned entity screening, and strict jurisdictional investor qualification guidelines maintain institutional credibility and legal compliance.',
        'featured'  => false
    ],
    // 9. Real Estate - Article 1
    [
        'id'        => 9,
        'slug'      => 'commercial-real-estate-corridors',
        'title'     => 'Commercial Real Estate in the Southwest: Yields, Logistics & Asset Backing',
        'category'  => 'Real Estate',
        'author'    => 'Marcus Sterling',
        'role'      => 'Chief Investment Strategist',
        'avatar'    => 'assets/images/blog/avatar-1.webp',
        'image'     => 'assets/images/blog/blog-5.webp',
        'date'      => 'Oct 24, 2026',
        'read_time' => '6 min read',
        'excerpt'   => 'Analyzing warehouse, mixed-use commercial, and prime logistics corridors along US Interstate routes driving high tenant occupancy and inflation-protected cash flow yields.',
        'featured'  => false
    ],
    // 10. Real Estate - Article 2
    [
        'id'        => 10,
        'slug'      => 'cross-border-real-estate-syndication-and-land-titling',
        'title'     => 'Cross-Border Real Estate: Land Rights, SPVs & Sovereign Freehold Titles',
        'category'  => 'Real Estate',
        'author'    => 'Marcus Sterling',
        'role'      => 'Chief Investment Strategist',
        'avatar'    => 'assets/images/blog/avatar-1.webp',
        'image'     => 'assets/images/blog/blog-12.webp',
        'date'      => 'Oct 20, 2026',
        'read_time' => '6 min read',
        'excerpt'   => 'Understanding Special Purpose Vehicles, international tax treaties, and conservative below-market acquisition basis in Dubai and US property syndications.',
        'featured'  => false
    ],
    // 11. Forex Trading - Article 1
    [
        'id'        => 11,
        'slug'      => 'forex-quantitative-hedging-strategies',
        'title'     => 'Institutional Forex Strategies: Quantitative Hedging & Capital Preservation',
        'category'  => 'Forex',
        'author'    => 'David Reynolds',
        'role'      => 'Portfolio Director',
        'avatar'    => 'assets/images/blog/avatar-1.webp',
        'image'     => 'assets/images/blog/blog-6.webp',
        'date'      => 'Oct 18, 2026',
        'read_time' => '5 min read',
        'excerpt'   => 'How systematic algorithmic trade execution and Tier-1 prime liquidity feeds prevent drawdowns while capturing micro-arbitrage opportunities across G10 currency pairs.',
        'featured'  => false
    ],
    // 12. Forex Trading - Article 2
    [
        'id'        => 12,
        'slug'      => 'macro-liquidity-and-g10-drawdown-management',
        'title'     => 'Navigating FX Volatility: Tier-1 Prime Liquidity & 1:10 Leverage Limits',
        'category'  => 'Forex',
        'author'    => 'David Reynolds',
        'role'      => 'Portfolio Director',
        'avatar'    => 'assets/images/blog/avatar-1.webp',
        'image'     => 'assets/images/blog/blog-7.webp',
        'date'      => 'Oct 15, 2026',
        'read_time' => '5 min read',
        'excerpt'   => 'Managing currency risk through mathematical exposure limits, dynamic algorithmic stop-loss protocols, and strict leverage discipline across institutional FX portfolios.',
        'featured'  => false
    ]
];

// Live Database Integration with graceful fallback to predefined array
try {
    require_once ROOT_PATH . 'db.php';
    if (isset($conn)) {
        $dbStmt = $conn->query("SELECT * FROM blog_posts WHERE is_published = 1 AND deleted_at IS NULL ORDER BY is_featured DESC, id DESC");
        $dbRows = $dbStmt ? $dbStmt->fetchAll(PDO::FETCH_ASSOC) : [];
        if (!empty($dbRows)) {
            $liveArticles = [];
            foreach ($dbRows as $row) {
                $liveArticles[] = [
                    'id'        => (int) $row['id'],
                    'slug'      => $row['slug'],
                    'title'     => $row['title'],
                    'category'  => $row['category'],
                    'category_slug' => $row['category_slug'] ?? '',
                    'author'    => $row['author_name'] ?? 'Crown Asia Research Desk',
                    'role'      => $row['author_role'] ?? 'Investment Strategy Team',
                    'avatar'    => 'assets/images/blog/avatar-1.webp',
                    'image'     => $row['cover_image'] ?? 'assets/images/blog/blog-1.webp',
                    'date'      => !empty($row['created_at']) ? date('M d, Y', strtotime($row['created_at'])) : 'Recent',
                    'read_time' => $row['read_time'] ?? '5 min read',
                    'excerpt'   => $row['excerpt'] ?? '',
                    'featured'  => !empty($row['is_featured'])
                ];
            }
            if (!empty($liveArticles)) {
                $articles = $liveArticles;
            }
        }
    }
} catch (Exception $e) {
    // Fallback to static articles array if database unavailable
}

$featured_post = $articles[0];
$grid_posts    = $articles; // Display all articles across categories
?>

    <!-- 1. Inner Hero Section -->
    <section class="inner-hero">
        <div class="container inner-hero-content">
            <div class="row align-items-center g-5">
                <div class="col-lg-8" data-aos="fade-right">
                    <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb">
                        <a href="<?= $base_url ?>">Home</a>
                        <span class="separator"><i class="bi bi-chevron-right"></i></span>
                        <span class="active">Knowledge Hub</span>
                    </nav>

                    <span class="topic-badge-pill dark mb-3 d-inline-flex align-items-center">
                        <i class="bi bi-journal-bookmark-fill me-2 text-success"></i>RESEARCH &amp; EXECUTIVE BRIEFINGS
                    </span>

                    <h1 class="inner-hero-title">
                        Investor Insights &amp; <br><span class="accent">Market Intelligence</span>
                    </h1>
                    <p class="inner-hero-lead mb-4">
                        Discover institutional-grade due diligence frameworks, digital USDT settlement analysis, macroeconomic research, and sector performance reviews published by Crown Asia.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#articles-grid" class="btn-green">Browse Latest Articles <i class="bi bi-arrow-down ms-1"></i></a>
                        <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="btn-ghost">Access Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    </div>
                </div>

                <!-- Right Column: Research Highlights Card -->
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="hero-summary-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="topic-badge-pill dark mb-0">RESEARCH DESK</span>
                            <span class="small text-success fw-semibold"><i class="bi bi-shield-check me-1"></i> Verified</span>
                        </div>
                        <h4 class="text-white mb-3" style="font-size: 20px;">Desk Coverage</h4>

                        <div class="hero-summary-row">
                            <span class="text-white-50">Sectors Analyzed</span>
                            <span class="text-success fw-bold">8 Strategic Divisions</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">Settlement Standard</span>
                            <span class="text-white fw-semibold">USDT TRC20 / ERC20</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">Compliance Framework</span>
                            <span class="text-white fw-semibold">US LLC Registered</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">Update Cadence</span>
                            <span class="text-success fw-semibold">Weekly Briefings</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Main Blog Section -->
    <section class="section section-light blog-page-section" id="articles-grid">
        <div class="container position-relative" style="z-index: 2;">

            <!-- Category Filter Pills -->
            <div class="blog-filter-bar" data-aos="fade-up">
                <button type="button" class="blog-filter-pill active" data-filter="all">
                    All Briefings <span class="badge-count"><?= count($articles) ?></span>
                </button>
                <button type="button" class="blog-filter-pill" data-filter="Due Diligence">
                    Due Diligence <span class="badge-count">2</span>
                </button>
                <button type="button" class="blog-filter-pill" data-filter="USDT & Settlement">
                    USDT &amp; Settlement <span class="badge-count">2</span>
                </button>
                <button type="button" class="blog-filter-pill" data-filter="Strategy">
                    Multi-Sector Strategy <span class="badge-count">2</span>
                </button>
                <button type="button" class="blog-filter-pill" data-filter="Compliance">
                    Risk &amp; Governance <span class="badge-count">2</span>
                </button>
                <button type="button" class="blog-filter-pill" data-filter="Real Estate">
                    Real Estate <span class="badge-count">2</span>
                </button>
                <button type="button" class="blog-filter-pill" data-filter="Forex">
                    Forex Trading <span class="badge-count">2</span>
                </button>
            </div>

            <!-- Spotlight Featured Article -->
            <div class="featured-briefing-card" id="featuredBriefingCard" data-category="<?= htmlspecialchars($featured_post['category']) ?>" data-aos="fade-up">
                <div class="row g-0 align-items-stretch">
                    <div class="col-lg-6">
                        <div class="featured-img-wrap">
                            <img src="<?= $base_url . $featured_post['image'] ?>" alt="<?= htmlspecialchars($featured_post['title']) ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-briefing-content">
                            <div class="featured-tag">
                                <i class="bi bi-star-fill"></i> Spotlight Briefing
                            </div>
                            <h2 class="featured-title">
                                <a href="<?= $base_url ?>blog/<?= $featured_post['slug'] ?>/">
                                    <?= htmlspecialchars($featured_post['title']) ?>
                                </a>
                            </h2>
                            <p class="featured-desc">
                                <?= htmlspecialchars($featured_post['excerpt']) ?>
                            </p>
                            <div class="featured-meta-row">
                                <span><i class="bi bi-person-circle"></i> <?= $featured_post['author'] ?></span>
                                <span><i class="bi bi-calendar3"></i> <?= $featured_post['date'] ?></span>
                                <span><i class="bi bi-clock"></i> <?= $featured_post['read_time'] ?></span>
                            </div>
                            <div>
                                <a href="<?= $base_url ?>blog/<?= $featured_post['slug'] ?>/" class="btn-green">
                                    Read Complete Analysis <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid & Sidebar Row -->
            <div class="row g-5">
                <!-- Left Column: Articles Grid -->
                <div class="col-lg-8">
                    <div class="row g-4" id="blogGridContainer">
                        <?php foreach ($grid_posts as $idx => $post): ?>
                            <div class="col-md-6 blog-item-col <?= $idx >= 6 ? 'd-none' : '' ?>" data-category="<?= htmlspecialchars($post['category']) ?>" data-aos="fade-up">
                                <article class="blog-card-modern">
                                    <div class="blog-card-thumb">
                                        <img src="<?= $base_url . $post['image'] ?>" alt="<?= htmlspecialchars($post['title']) ?>">
                                        <span class="blog-badge-category"><?= htmlspecialchars($post['category']) ?></span>
                                        <span class="blog-badge-date"><?= htmlspecialchars($post['date']) ?></span>
                                    </div>
                                    <div class="blog-card-body">
                                        <div class="blog-card-meta">
                                            <span><i class="bi bi-person"></i> <?= htmlspecialchars($post['author']) ?></span>
                                            <span><i class="bi bi-clock"></i> <?= htmlspecialchars($post['read_time']) ?></span>
                                        </div>
                                        <h3 class="blog-card-title">
                                            <a href="<?= $base_url ?>blog/<?= $post['slug'] ?>/">
                                                <?= htmlspecialchars($post['title']) ?>
                                            </a>
                                        </h3>
                                        <p class="blog-card-desc">
                                            <?= htmlspecialchars($post['excerpt']) ?>
                                        </p>
                                        <div class="blog-card-footer">
                                            <div class="blog-author-wrap">
                                                <img src="<?= $base_url . $post['avatar'] ?>" alt="<?= htmlspecialchars($post['author']) ?>" class="blog-author-avatar" width="32" height="32" loading="lazy">
                                                <span class="blog-author-name"><?= htmlspecialchars($post['author']) ?></span>
                                            </div>
                                            <a href="<?= $base_url ?>blog/<?= $post['slug'] ?>/" class="blog-read-link">
                                                Read Article <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>

                        <!-- Empty State if no articles match search/filter -->
                        <div id="blogNoResults" class="col-12 text-center py-5 d-none">
                            <div class="p-4 p-md-5 bg-white rounded-4 border shadow-sm">
                                <i class="bi bi-search text-success fs-1 mb-3 d-inline-block"></i>
                                <h4 class="fw-bold mb-2">No Briefings Found</h4>
                                <p class="text-muted small mb-3">No research articles match your selected criteria. Try another keyword or reset the filter.</p>
                                <button type="button" class="btn-green btn-sm" onclick="filterCategory('all')">
                                    <i class="bi bi-arrow-counterclockwise me-1"></i> View All Briefings
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination (6 Articles per page: Page 01 & Page 02) -->
                    <div class="blog-pagination-wrap" id="blogPaginationWrap" data-aos="fade-up">
                        <ul class="blog-pagination-list" id="blogPaginationList">
                            <li class="blog-pagination-item active" data-page="1"><a href="javascript:void(0)" onclick="goToBlogPage(1)">01</a></li>
                            <li class="blog-pagination-item" data-page="2"><a href="javascript:void(0)" onclick="goToBlogPage(2)">02</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column: Sidebar -->
                <div class="col-lg-4">
                    <aside class="blog-sidebar">
                        <div class="blog-sidebar-sticky">

                            <!-- Search Widget -->
                            <div class="blog-widget" data-aos="fade-up">
                                <h4 class="blog-widget-title">Search Briefings</h4>
                                <div class="widget-search-form">
                                    <input type="text" id="blogSearchInput" class="widget-search-input" placeholder="Search keywords, sectors...">
                                    <button type="button" id="blogSearchBtn" class="widget-search-btn" aria-label="Search">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Categories Widget -->
                            <div class="blog-widget" data-aos="fade-up" data-aos-delay="50">
                                <h4 class="blog-widget-title">Research Categories</h4>
                                <ul class="widget-category-list">
                                    <li>
                                        <a href="javascript:void(0)" onclick="filterCategory('Due Diligence')">
                                            <span><i class="bi bi-folder2-open me-2 text-success"></i> Due Diligence</span>
                                            <span class="cat-count">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="filterCategory('USDT & Settlement')">
                                            <span><i class="bi bi-wallet2 me-2 text-success"></i> USDT &amp; Settlement</span>
                                            <span class="cat-count">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="filterCategory('Strategy')">
                                            <span><i class="bi bi-layers me-2 text-success"></i> Multi-Sector Strategy</span>
                                            <span class="cat-count">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="filterCategory('Compliance')">
                                            <span><i class="bi bi-shield-check me-2 text-success"></i> Risk &amp; Governance</span>
                                            <span class="cat-count">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="filterCategory('Real Estate')">
                                            <span><i class="bi bi-building me-2 text-success"></i> Commercial Real Estate</span>
                                            <span class="cat-count">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="filterCategory('Forex')">
                                            <span><i class="bi bi-graph-up-arrow me-2 text-success"></i> Forex Trading</span>
                                            <span class="cat-count">2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Recent Posts Widget -->
                            <div class="blog-widget" data-aos="fade-up" data-aos-delay="100">
                                <h4 class="blog-widget-title">Recent Briefings</h4>
                                <?php foreach (array_slice($articles, 0, 3) as $rpost): ?>
                                    <div class="widget-recent-item">
                                        <div class="widget-recent-thumb">
                                            <img src="<?= $base_url . $rpost['image'] ?>" alt="<?= htmlspecialchars($rpost['title']) ?>">
                                        </div>
                                        <div class="widget-recent-info">
                                            <span class="widget-recent-date"><i class="bi bi-calendar-event"></i> <?= $rpost['date'] ?></span>
                                            <h5 class="widget-recent-title">
                                                <a href="<?= $base_url ?>blog/<?= $rpost['slug'] ?>/">
                                                    <?= htmlspecialchars($rpost['title']) ?>
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Investor Portal CTA Box -->
                            <div class="widget-portal-box" data-aos="fade-up" data-aos-delay="150">
                                <div class="widget-portal-icon">
                                    <i class="bi bi-shield-lock-fill"></i>
                                </div>
                                <h4>Crown Asia Portal</h4>
                                <p>
                                    Execute investments across our eight sectors with verified USDT funding and real-time portfolio analytics.
                                </p>
                                <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="btn-green w-100">
                                    Create Investor Account <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>

                            <!-- Tags Cloud Widget -->
                            <div class="blog-widget" data-aos="fade-up" data-aos-delay="200">
                                <h4 class="blog-widget-title">Strategic Tags</h4>
                                <div class="widget-tag-cloud">
                                    <a href="javascript:void(0)" class="widget-tag-item" onclick="filterSearch('USDT')">#USDT</a>
                                    <a href="javascript:void(0)" class="widget-tag-item" onclick="filterSearch('Due Diligence')">#DueDiligence</a>
                                    <a href="javascript:void(0)" class="widget-tag-item" onclick="filterSearch('Real Estate')">#RealEstate</a>
                                    <a href="javascript:void(0)" class="widget-tag-item" onclick="filterSearch('Forex')">#Forex</a>
                                    <a href="javascript:void(0)" class="widget-tag-item" onclick="filterSearch('Compliance')">#Compliance</a>
                                    <a href="javascript:void(0)" class="widget-tag-item" onclick="filterSearch('Diversification')">#Diversification</a>
                                    <a href="javascript:void(0)" class="widget-tag-item" onclick="filterSearch('Gold')">#Gold</a>
                                    <a href="javascript:void(0)" class="widget-tag-item" onclick="filterSearch('Asset Backed')">#AssetBacked</a>
                                </div>
                            </div>

                            <!-- Newsletter Subscription Widget -->
                            <div class="blog-widget widget-newsletter-box" data-aos="fade-up" data-aos-delay="250">
                                <h4 class="blog-widget-title">Executive Newsletter</h4>
                                <p>Get our monthly investment memorandum, macroeconomic briefings, and risk disclosures delivered to your inbox.</p>
                                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Crown Asia Research Briefings.');">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Your business email" required style="border-radius: 12px; font-size: 13.5px; padding: 12px 14px; border-color: #DCE4DE;">
                                    </div>
                                    <button type="submit" class="btn-green w-100" style="padding: 12px 20px;">
                                        Subscribe to Research <i class="bi bi-send ms-1"></i>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </aside>
                </div>
            </div>

        </div>
    </section>

    <!-- Client-side Interactive Filter & Search Script -->
    <script>
    (function () {
        function normalizeCategory(str) {
            return (str || '')
                .toLowerCase()
                .replace(/&amp;/g, '&')
                .replace(/[^a-z0-9]/g, '');
        }

        function matchCategory(itemCat, filterCat) {
            if (!filterCat || filterCat === 'all') return true;
            return normalizeCategory(itemCat) === normalizeCategory(filterCat);
        }

        function initBlogFilter() {
            const filterPills    = document.querySelectorAll('.blog-filter-pill');
            const blogCols       = Array.from(document.querySelectorAll('.blog-item-col'));
            const searchInput    = document.getElementById('blogSearchInput');
            const searchBtn      = document.getElementById('blogSearchBtn');
            const featuredCard   = document.getElementById('featuredBriefingCard');
            const noResults      = document.getElementById('blogNoResults');
            const paginationWrap = document.getElementById('blogPaginationWrap');
            const paginationList = document.getElementById('blogPaginationList');

            const ITEMS_PER_PAGE = 6;
            let currentFilteredCols = blogCols.slice();
            let currentPage = 1;

            function renderPage(page, shouldScroll = true) {
                currentPage = page;
                const totalItems = currentFilteredCols.length;
                const totalPages = Math.ceil(totalItems / ITEMS_PER_PAGE);

                if (currentPage > totalPages) currentPage = totalPages || 1;
                if (currentPage < 1) currentPage = 1;

                const startIdx = (currentPage - 1) * ITEMS_PER_PAGE;
                const endIdx   = startIdx + ITEMS_PER_PAGE;

                // Hide all cards first, then reveal only items within current page range
                blogCols.forEach(col => col.classList.add('d-none'));

                currentFilteredCols.slice(startIdx, endIdx).forEach(col => {
                    col.classList.remove('d-none');
                });

                // Update pagination controls (01, 02)
                if (paginationWrap && paginationList) {
                    if (totalPages <= 1) {
                        paginationWrap.classList.add('d-none');
                    } else {
                        paginationWrap.classList.remove('d-none');
                        let html = '';
                        for (let i = 1; i <= totalPages; i++) {
                            const label = i < 10 ? '0' + i : String(i);
                            const activeClass = i === currentPage ? ' active' : '';
                            html += `<li class="blog-pagination-item${activeClass}" data-page="${i}"><a href="javascript:void(0)" onclick="goToBlogPage(${i})">${label}</a></li>`;
                        }
                        paginationList.innerHTML = html;
                    }
                }

                if (shouldScroll) {
                    const gridElem = document.getElementById('articles-grid');
                    if (gridElem) {
                        gridElem.scrollIntoView({ behavior: 'smooth' });
                    }
                }

                if (window.AOS && typeof window.AOS.refresh === 'function') {
                    setTimeout(() => window.AOS.refresh(), 50);
                }
            }

            window.goToBlogPage = function (page) {
                renderPage(page, true);
            };

            function applyFilter(category, shouldScroll = false) {
                if (searchInput) {
                    searchInput.value = '';
                }

                // Update active filter pill
                filterPills.forEach(p => {
                    const pFilter = p.getAttribute('data-filter') || 'all';
                    if (category === 'all') {
                        if (pFilter === 'all') p.classList.add('active');
                        else p.classList.remove('active');
                    } else {
                        if (matchCategory(pFilter, category)) p.classList.add('active');
                        else p.classList.remove('active');
                    }
                });

                // Toggle spotlight briefing (only show on 'all')
                if (featuredCard) {
                    if (category === 'all') {
                        featuredCard.classList.remove('d-none');
                    } else {
                        featuredCard.classList.add('d-none');
                    }
                }

                // Filter matching columns
                currentFilteredCols = blogCols.filter(col => {
                    const colCat = col.getAttribute('data-category');
                    return matchCategory(colCat, category);
                });

                if (noResults) {
                    if (currentFilteredCols.length === 0) noResults.classList.remove('d-none');
                    else noResults.classList.add('d-none');
                }

                renderPage(1, shouldScroll);
            }

            function performSearch(query) {
                const term = (query || '').toLowerCase().trim();

                if (term) {
                    filterPills.forEach(p => p.classList.remove('active'));
                } else {
                    const allPill = document.querySelector('.blog-filter-pill[data-filter="all"]');
                    if (allPill) allPill.classList.add('active');
                }

                if (featuredCard) {
                    if (!term) {
                        featuredCard.classList.remove('d-none');
                    } else {
                        const fText = featuredCard.innerText.toLowerCase();
                        if (fText.includes(term)) {
                            featuredCard.classList.remove('d-none');
                        } else {
                            featuredCard.classList.add('d-none');
                        }
                    }
                }

                currentFilteredCols = blogCols.filter(col => {
                    const text = col.innerText.toLowerCase();
                    return !term || text.includes(term);
                });

                if (noResults) {
                    if (currentFilteredCols.length === 0) noResults.classList.remove('d-none');
                    else noResults.classList.add('d-none');
                }

                renderPage(1, false);
            }

            window.filterCategory = function (cat) {
                applyFilter(cat, true);
            };

            window.filterSearch = function (keyword) {
                if (searchInput) {
                    searchInput.value = keyword;
                }
                performSearch(keyword);
                const gridElem = document.getElementById('articles-grid');
                if (gridElem) {
                    gridElem.scrollIntoView({ behavior: 'smooth' });
                }
            };

            filterPills.forEach(pill => {
                pill.addEventListener('click', function () {
                    const filter = this.getAttribute('data-filter') || 'all';
                    applyFilter(filter, false);
                });
            });

            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    performSearch(this.value);
                });
            }
            if (searchBtn && searchInput) {
                searchBtn.addEventListener('click', function () {
                    performSearch(searchInput.value);
                });
            }

            // Initial render: 6 articles per page (Page 1)
            applyFilter('all', false);
        }

        // Initialize immediately or on DOM ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initBlogFilter);
        } else {
            initBlogFilter();
        }
    })();
    </script>

<?php include_once ROOT_PATH . 'footer.php'; ?>
