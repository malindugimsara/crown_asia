<?php
require_once dirname(__DIR__) . '/config.php';

$page_title = "Investment Opportunities | Crown Asia LLC";
$page_desc  = "Browse approved, asset-backed investment opportunities across Crown Asia's eight strategic business sectors with transparent terms and USDT funding.";
include_once ROOT_PATH . 'header.php';
?>

<!-- 1. Hero & Introduction Section -->
<section class="inner-hero">
    <div class="container inner-hero-content">
        <div class="row align-items-center g-5">
            <div class="col-lg-7" data-aos="fade-right">
                <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb">
                    <a href="<?= $base_url ?>">Home</a>
                    <span class="separator"><i class="bi bi-chevron-right"></i></span>
                    <span class="active">Investment Opportunities</span>
                </nav>

                <h1 class="inner-hero-title">Approved Investment<br><span class="accent">Opportunities &amp; Offerings</span></h1>
                <p class="inner-hero-lead mb-4">
                    Explore structured, asset-backed investment offerings across Crown Asia's eight operating sectors. Review minimum allocations, term horizons, risk disclosures, and participate seamlessly using USDT.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="#offerings-directory" class="btn-green">Browse Offerings <i class="bi bi-arrow-down ms-1"></i></a>
                    <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="btn-ghost">Register to Invest <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                </div>
            </div>

            <!-- Right Column: Visual Hero Media -->
            <div class="col-lg-5" data-aos="fade-left">
                <div class="sector-hero-visual">
                    <div class="hero-image-frame">
                        <img src="<?= $base_url ?>assets/images/hero/opportunities.webp" alt="Crown Asia Approved Investment Opportunities and Offerings" class="img-fluid" width="1024" height="572" loading="eager">
                        <div class="hero-live-pill">
                            <span class="live-dot pulse"></span>
                            <span>Verified USDT Offerings Active</span>
                        </div>
                        <div class="hero-floating-stat">
                            <div class="stat-icon"><i class="bi bi-shield-check"></i></div>
                            <div>
                                <div class="stat-title">8 Strategic Sectors</div>
                                <div class="stat-sub">Asset-Backed USDT Allocations</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2 & 3. Sector & Status Filters + Offering Cards Directory -->
<section class="section section-light" id="offerings-directory">
    <div class="container">
        <div class="text-center mb-4" data-aos="fade-up">
            <span class="topic-badge-pill light">OFFERING DIRECTORY</span>
            <h2 class="section-title">Current &amp; Upcoming Offerings</h2>
            <p class="section-subtitle mx-auto">Filter offerings by business sector or allocation status to review full terms, use of funds, and offering memoranda.</p>
        </div>

        <!-- Interactive Filter Control Bar -->
        <div class="filter-control-panel" data-aos="fade-up">
            <!-- Top Header Row: Title, Live Counter & Quick Reset -->
            <div class="filter-panel-header d-flex flex-wrap align-items-center justify-content-between gap-3 pb-3 mb-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="filter-header-icon">
                        <i class="bi bi-sliders2-vertical"></i>
                    </div>
                    <div>
                        <h5 class="filter-header-title mb-0">Investment Offering Filters</h5>
                        <span class="filter-header-subtitle">Filter asset classes and allocation stages</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <span class="filter-count-badge" id="filterCountBadge">
                        <span class="live-dot pulse"></span>
                        <span><strong id="visibleOfferingsCount">6</strong> of 6 Offerings</span>
                    </span>
                    <button type="button" class="filter-reset-btn" id="filterBarResetBtn" title="Reset all filters">
                        <i class="bi bi-arrow-counterclockwise"></i> <span>Reset</span>
                    </button>
                </div>
            </div>

            <!-- Filter Group 1: Business Sector -->
            <div class="filter-group mb-3">
                <div class="filter-group-header d-flex align-items-center justify-content-between mb-2">
                    <span class="filter-group-label">
                        <i class="bi bi-grid-3x3-gap-fill text-success me-1"></i> Filter by Business Sector
                    </span>
                    <span class="filter-group-hint d-none d-sm-inline">All 8 diversified sectors</span>
                </div>
                <div class="filter-pills-wrap" id="sectorFilters">
                    <button type="button" class="filter-pill-btn active" data-sector="all">
                        <i class="bi bi-grid-fill"></i> All Sectors
                    </button>
                    <button type="button" class="filter-pill-btn" data-sector="real-estate">
                        <i class="bi bi-building"></i> Real Estate
                    </button>
                    <button type="button" class="filter-pill-btn" data-sector="forex-trading">
                        <i class="bi bi-graph-up-arrow"></i> Forex Trading
                    </button>
                    <button type="button" class="filter-pill-btn" data-sector="agriculture">
                        <i class="bi bi-tree"></i> Agriculture
                    </button>
                    <button type="button" class="filter-pill-btn" data-sector="gems">
                        <i class="bi bi-gem"></i> Gems &amp; Gemstones
                    </button>
                    <button type="button" class="filter-pill-btn" data-sector="technology">
                        <i class="bi bi-cpu"></i> Tech &amp; Cloud
                    </button>
                    <button type="button" class="filter-pill-btn" data-sector="ecommerce">
                        <i class="bi bi-cart-check"></i> E-Commerce
                    </button>
                </div>
            </div>

            <div class="filter-divider"></div>

            <!-- Filter Group 2: Status & Active Filter Summary -->
            <div class="filter-group">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                    <div>
                        <div class="filter-group-header mb-2">
                            <span class="filter-group-label">
                                <i class="bi bi-activity text-success me-1"></i> Filter by Allocation Status
                            </span>
                        </div>
                        <div class="filter-pills-wrap" id="statusFilters">
                            <button type="button" class="filter-pill-btn active" data-status="all">
                                <i class="bi bi-circle-fill" style="font-size: 8px;"></i> All Status
                            </button>
                            <button type="button" class="filter-pill-btn" data-status="open">
                                <span class="status-indicator-dot open"></span> Open for Allocation
                            </button>
                            <button type="button" class="filter-pill-btn" data-status="upcoming">
                                <span class="status-indicator-dot upcoming"></span> Upcoming
                            </button>
                            <button type="button" class="filter-pill-btn" data-status="closed">
                                <span class="status-indicator-dot closed"></span> Fully Subscribed
                            </button>
                        </div>
                    </div>

                    <!-- Active Filter Summary Pill -->
                    <div class="active-filter-summary-wrap d-none d-md-block text-end">
                        <span class="summary-label text-muted d-block" style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.8px;">Active Filter</span>
                        <span class="summary-value fw-semibold text-dark" id="activeFilterSummary" style="font-size: 13px;">All Sectors · All Status</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offerings Grid -->
        <div class="row g-4" id="offeringsGrid">
            <!-- Offering 1: Real Estate (Open) -->
            <div class="col-lg-4 col-md-6 offering-item" data-sector="real-estate" data-status="open" data-aos="fade-up">
                <div class="offering-card">
                    <div class="offering-badge-wrap">
                        <img src="<?= $base_url ?>assets/images/offerings/real-estate-pool.webp" alt="Priority Coastal & Urban Real Estate Pool" width="900" height="600" loading="lazy">
                        <span class="offering-status-tag"><i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i> Open</span>
                        <span class="offering-sector-tag">Real Estate</span>
                    </div>
                    <div class="offering-content">
                        <h4>Priority Coastal &amp; Urban Real Estate Pool</h4>
                        <p>Asset-backed property development and land acquisition across high-demand markets in Dubai, Sri Lanka, and the United States.</p>
                        <div class="offering-grid-terms">
                            <div class="offering-term-item">
                                <div class="label">Minimum</div>
                                <div class="val">1,000 USDT</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Term</div>
                                <div class="val">12 – 24 Months</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Distributions</div>
                                <div class="val">Quarterly (USDT)</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Structure</div>
                                <div class="val text-success">Asset-Backed Note</div>
                            </div>
                        </div>
                        <div class="mt-auto d-flex gap-2">
                            <a href="<?= $base_url ?>investment-opportunities/priority-real-estate-pool/" class="btn-green w-100 text-center py-2 px-3" style="font-size: 12px;">View Terms &amp; Invest</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offering 2: Forex Trading (Open) -->
            <div class="col-lg-4 col-md-6 offering-item" data-sector="forex-trading" data-status="open" data-aos="fade-up" data-aos-delay="80">
                <div class="offering-card">
                    <div class="offering-badge-wrap">
                        <img src="<?= $base_url ?>assets/images/offerings/forex-liquidity.webp" alt="G10 Quantitative Liquidity Strategy" width="900" height="600" loading="lazy">
                        <span class="offering-status-tag"><i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i> Open</span>
                        <span class="offering-sector-tag">Forex Trading</span>
                    </div>
                    <div class="offering-content">
                        <h4>G10 Quantitative Liquidity Strategy</h4>
                        <p>Institutional currency execution across liquid G10 pairs utilizing Tier-1 prime broker liquidity and strict 1:10 max leverage controls.</p>
                        <div class="offering-grid-terms">
                            <div class="offering-term-item">
                                <div class="label">Minimum</div>
                                <div class="val">500 USDT</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Term</div>
                                <div class="val">6 – 12 Months</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Distributions</div>
                                <div class="val">Monthly (USDT)</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Risk Control</div>
                                <div class="val text-success">Capped Drawdown</div>
                            </div>
                        </div>
                        <div class="mt-auto d-flex gap-2">
                            <a href="<?= $base_url ?>investment-opportunities/g10-quantitative-liquidity/" class="btn-green w-100 text-center py-2 px-3" style="font-size: 12px;">View Terms &amp; Invest</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offering 3: Agriculture & Plantation (Open) -->
            <div class="col-lg-4 col-md-6 offering-item" data-sector="agriculture" data-status="open" data-aos="fade-up" data-aos-delay="160">
                <div class="offering-card">
                    <div class="offering-badge-wrap">
                        <img src="<?= $base_url ?>assets/images/offerings/plantation-export.webp" alt="Value-Added Plantation & Export Cycle" width="900" height="600" loading="lazy">
                        <span class="offering-status-tag"><i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i> Open</span>
                        <span class="offering-sector-tag">Agriculture</span>
                    </div>
                    <div class="offering-content">
                        <h4>Value-Added Plantation &amp; Spice Export Cycle</h4>
                        <p>Large-scale cultivation and post-harvest processing of organic coconut, Ceylon spices, and specialty tea backed by B2B export orders.</p>
                        <div class="offering-grid-terms">
                            <div class="offering-term-item">
                                <div class="label">Minimum</div>
                                <div class="val">500 USDT</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Term</div>
                                <div class="val">9 – 18 Months</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Distributions</div>
                                <div class="val">Per Harvest Cycle</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Backing</div>
                                <div class="val text-success">Estates &amp; Export POs</div>
                            </div>
                        </div>
                        <div class="mt-auto d-flex gap-2">
                            <a href="<?= $base_url ?>investment-opportunities/plantation-export-cycle/" class="btn-green w-100 text-center py-2 px-3" style="font-size: 12px;">View Terms &amp; Invest</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offering 4: Gems & Gemstones (Open) -->
            <div class="col-lg-4 col-md-6 offering-item" data-sector="gems" data-status="open" data-aos="fade-up">
                <div class="offering-card">
                    <div class="offering-badge-wrap">
                        <img src="<?= $base_url ?>assets/images/offerings/sapphire-lot.webp" alt="Certified Ceylon Sapphire Trading Lot" width="900" height="600" loading="lazy">
                        <span class="offering-status-tag"><i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i> Open</span>
                        <span class="offering-sector-tag">Gems &amp; Gemstones</span>
                    </div>
                    <div class="offering-content">
                        <h4>Certified Ceylon Sapphire Wholesale Lot</h4>
                        <p>Origin sourcing, master lapidary cutting, independent lab certification, and wholesale B2B placement of fine blue sapphires.</p>
                        <div class="offering-grid-terms">
                            <div class="offering-term-item">
                                <div class="label">Minimum</div>
                                <div class="val">1,500 USDT</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Term</div>
                                <div class="val">6 – 12 Months</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Distributions</div>
                                <div class="val">Upon Lot Settlement</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Custody</div>
                                <div class="val text-success">Insured Bonded Vault</div>
                            </div>
                        </div>
                        <div class="mt-auto d-flex gap-2">
                            <a href="<?= $base_url ?>investment-opportunities/certified-sapphire-lot/" class="btn-green w-100 text-center py-2 px-3" style="font-size: 12px;">View Terms &amp; Invest</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offering 5: Technology & Cloud (Upcoming) -->
            <div class="col-lg-4 col-md-6 offering-item" data-sector="technology" data-status="upcoming" data-aos="fade-up" data-aos-delay="80">
                <div class="offering-card">
                    <div class="offering-badge-wrap">
                        <img src="<?= $base_url ?>assets/images/offerings/ai-cloud.webp" alt="2030 AI & Cloud Compute Infrastructure" width="900" height="600" loading="lazy">
                        <span class="offering-status-tag status-upcoming"><i class="bi bi-clock-fill me-1" style="font-size: 9px;"></i> Upcoming</span>
                        <span class="offering-sector-tag">Tech &amp; Cloud</span>
                    </div>
                    <div class="offering-content">
                        <h4>2030 AI &amp; Cloud Compute Infrastructure Tranche</h4>
                        <p>Expansion of modular enterprise cloud servers, GPU compute nodes, and managed communications infrastructure.</p>
                        <div class="offering-grid-terms">
                            <div class="offering-term-item">
                                <div class="label">Minimum</div>
                                <div class="val">2,000 USDT</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Term</div>
                                <div class="val">18 – 36 Months</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Distributions</div>
                                <div class="val">Quarterly (USDT)</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Backing</div>
                                <div class="val text-warning">Enterprise SLA Contracts</div>
                            </div>
                        </div>
                        <div class="mt-auto d-flex gap-2">
                            <a href="<?= $base_url ?>investment-opportunities/ai-cloud-infrastructure-tranche/" class="btn-green w-100 text-center py-2 px-3" style="font-size: 12px;">Preview Offering Brief</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offering 6: E-Commerce (Closed / Fully Subscribed) -->
            <div class="col-lg-4 col-md-6 offering-item" data-sector="ecommerce" data-status="closed" data-aos="fade-up" data-aos-delay="160">
                <div class="offering-card">
                    <div class="offering-badge-wrap">
                        <img src="<?= $base_url ?>assets/images/offerings/smart-warehousing.webp" alt="Smart Warehousing & Fulfillment Hub I" width="900" height="600" loading="lazy">
                        <span class="offering-status-tag status-closed"><i class="bi bi-lock-fill me-1" style="font-size: 9px;"></i> Fully Subscribed</span>
                        <span class="offering-sector-tag">E-Commerce</span>
                    </div>
                    <div class="offering-content">
                        <h4>Smart Warehousing &amp; Fulfillment Hub — Series I</h4>
                        <p>Automated WMS storage facility and regional e-commerce order fulfillment center with biometric security and 3PL logistics.</p>
                        <div class="offering-grid-terms">
                            <div class="offering-term-item">
                                <div class="label">Minimum</div>
                                <div class="val">1,000 USDT</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Term</div>
                                <div class="val">12 Months</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Status</div>
                                <div class="val text-muted">Active / Performing</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Backing</div>
                                <div class="val text-dark">Warehouse Facility</div>
                            </div>
                        </div>
                        <div class="mt-auto d-flex gap-2">
                            <a href="<?= $base_url ?>investment-opportunities/smart-warehousing-series-1/" class="btn btn-outline-secondary rounded-pill w-100 text-center py-2 px-3" style="font-size: 12px; font-weight: 600;">View Historical Summary</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Empty Filter Fallback Message -->
        <div id="noOfferingsMsg" class="text-center py-5 d-none">
            <div class="activity-icon mx-auto mb-3"><i class="bi bi-search"></i></div>
            <h4>No Offerings Match Your Selected Filters</h4>
            <p class="text-muted mb-3">Try resetting the sector or status filter to view all available and upcoming allocations.</p>
            <button type="button" class="btn-green py-2 px-4" id="resetFiltersBtn" style="font-size: 12px;">Reset All Filters</button>
        </div>
    </div>
</section>

<!-- 4. How to Evaluate an Offering Section -->
<section class="strategy-section-dark" id="evaluate">
    <div class="strategy-grid-bg"></div>
    <div class="strategy-glow-blob top-right"></div>
    <div class="strategy-glow-blob bottom-left"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="text-center" data-aos="fade-up">
            <span class="topic-badge-pill">DUE DILIGENCE FRAMEWORK</span>
            <h2 class="strategy-heading-main">HOW TO EVALUATE AN OFFERING</h2>
            <p class="strategy-lead-sub mx-auto">
                Before committing USDT to any offering, review these four essential diligence checkpoints published on every detail page.
            </p>
        </div>

        <div class="row g-4 mt-4">
            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="pillar-glass-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="pillar-tag-glow mb-0">Check 01</span>
                        <i class="bi bi-building-check text-success fs-4"></i>
                    </div>
                    <h3 class="pillar-card-title mb-3">ISSUER &amp;<br>STRUCTURE</h3>
                    <p class="pillar-body-text">
                        Confirm the issuing entity (Crown Asia LLC), legal note or participation structure, and jurisdiction-specific investor eligibility rules.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="pillar-glass-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="pillar-tag-glow mb-0">Check 02</span>
                        <i class="bi bi-layers-half text-success fs-4"></i>
                    </div>
                    <h3 class="pillar-card-title mb-3">USE OF FUNDS &amp;<br>ASSET BACKING</h3>
                    <p class="pillar-body-text">
                        Examine exactly how capital is deployed—whether into real property, audited inventory, trading liquidity, or contracted export cycles.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="pillar-glass-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="pillar-tag-glow mb-0">Check 03</span>
                        <i class="bi bi-calendar2-check text-success fs-4"></i>
                    </div>
                    <h3 class="pillar-card-title mb-3">FEES, TERM &amp;<br>DISTRIBUTIONS</h3>
                    <p class="pillar-body-text">
                        Review the minimum USDT threshold, lock-in term, management or performance fee deductions, and scheduled payout intervals.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="pillar-glass-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="pillar-tag-glow mb-0">Check 04</span>
                        <i class="bi bi-shield-exclamation text-success fs-4"></i>
                    </div>
                    <h3 class="pillar-card-title mb-3">SECTOR RISKS &amp;<br>REDEMPTION</h3>
                    <p class="pillar-body-text">
                        Read offering-specific risk factors and understand maturity redemption procedures and USDT withdrawal processing timelines.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Investor FAQs Section -->
<section class="section section-light" id="faq">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="topic-badge-pill light">INVESTOR QUESTIONS</span>
            <h2 class="section-title">Investment Opportunities FAQs</h2>
            <p class="section-subtitle mx-auto">Key answers on eligibility, minimum allocations, USDT funding, and how offerings operate on Crown Asia.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="accordion custom-accordion" id="opportunitiesFAQ">
                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="oppFaqOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#oppCollapseOne" aria-expanded="true" aria-controls="oppCollapseOne">
                                Who is eligible to participate in Crown Asia investment offerings?
                            </button>
                        </h2>
                        <div id="oppCollapseOne" class="accordion-collapse collapse show" aria-labelledby="oppFaqOne" data-bs-parent="#opportunitiesFAQ">
                            <div class="accordion-body">
                                Participation is open to verified individuals and corporate entities from eligible jurisdictions who pass KYC/AML verification on the Crown Asia Investor Portal and meet any offering-specific requirements. Review our <a href="<?= $base_url ?>legal/investor-eligibility/" class="text-success fw-semibold text-decoration-underline">Investor Eligibility Policy</a> for full details.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="oppFaqTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#oppCollapseTwo" aria-expanded="false" aria-controls="oppCollapseTwo">
                                How do I fund my account and confirm an investment allocation?
                            </button>
                        </h2>
                        <div id="oppCollapseTwo" class="accordion-collapse collapse" aria-labelledby="oppFaqTwo" data-bs-parent="#opportunitiesFAQ">
                            <div class="accordion-body">
                                Once registered and verified in the Investor Portal, deposit <strong>USDT</strong> using a confirmed supported blockchain network. After your deposit confirms on-chain, open your chosen offering, enter your allocation amount (meeting the stated minimum), review the terms, and confirm your participation.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="oppFaqThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#oppCollapseThree" aria-expanded="false" aria-controls="oppCollapseThree">
                                Can I diversify across multiple sectors at the same time?
                            </button>
                        </h2>
                        <div id="oppCollapseThree" class="accordion-collapse collapse" aria-labelledby="oppFaqThree" data-bs-parent="#opportunitiesFAQ">
                            <div class="accordion-body">
                                Yes. Verified investors can allocate USDT across multiple active offerings spanning Real Estate, Forex Trading, Agriculture, Certified Gemstones, and Technology—allowing you to balance short-cycle liquidity with longer-term asset-backed projects.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="oppFaqFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#oppCollapseFour" aria-expanded="false" aria-controls="oppCollapseFour">
                                How do distributions, redemptions, and USDT withdrawals work?
                            </button>
                        </h2>
                        <div id="oppCollapseFour" class="accordion-collapse collapse" aria-labelledby="oppFaqFour" data-bs-parent="#opportunitiesFAQ">
                            <div class="accordion-body">
                                Distributions and matured principal redemptions are credited directly to your Investor Portal balance in USDT according to each offering's schedule. You can submit a withdrawal request to your verified external USDT wallet anytime, subject to standard network fees and processing windows outlined in our <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="text-success fw-semibold text-decoration-underline">USDT Guide</a>.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="oppFaqFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#oppCollapseFive" aria-expanded="false" aria-controls="oppCollapseFive">
                                Are returns guaranteed, and where can I review offering documents?
                            </button>
                        </h2>
                        <div id="oppCollapseFive" class="accordion-collapse collapse" aria-labelledby="oppFaqFive" data-bs-parent="#opportunitiesFAQ">
                            <div class="accordion-body">
                                No. All investments carry financial and sector-specific risks, and returns are not guaranteed. Full offering memoranda, fee schedules, and risk disclosures are published on each individual offering detail page and inside the <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-underline">Investor Portal</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Registration & Login Final CTA Section -->
<section class="cta-section">
    <div class="cta-glow-blob"></div>
    <div class="container" data-aos="zoom-in">
        <div class="cta-card-luxury">
            <span class="topic-badge-pill mb-3">INVESTOR PORTAL ACCESS</span>
            <h2>Ready to Allocate <span>With Confidence?</span></h2>
            <p>Create your investor account to complete verification, fund via USDT, and participate in approved Crown Asia offerings.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="cta-btn-primary">
                    <i class="bi bi-person-plus-fill me-1"></i> Register Now
                </a>
                <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="cta-btn-secondary">
                    <i class="bi bi-box-arrow-in-right me-1"></i> Investor Login
                </a>
            </div>
            <div class="cta-trust-badges mt-4 d-flex flex-wrap justify-content-center gap-4">
                <span><i class="bi bi-shield-check"></i> Registered US LLC</span>
                <span><i class="bi bi-wallet2"></i> Multi-Network USDT</span>
                <span><i class="bi bi-file-earmark-text"></i> Transparent Offering Docs</span>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Sector & Status Filter Script (Runs before footer scripts) -->
<script>
    (function() {
        function initOfferingsFilter() {
            let selectedSector = 'all';
            let selectedStatus = 'all';

            const sectorBtns = document.querySelectorAll('#sectorFilters .filter-pill-btn');
            const statusBtns = document.querySelectorAll('#statusFilters .filter-pill-btn');
            const items = document.querySelectorAll('.offering-item');
            const emptyMsg = document.getElementById('noOfferingsMsg');
            const resetBtn = document.getElementById('resetFiltersBtn');
            const barResetBtn = document.getElementById('filterBarResetBtn');
            const countEl = document.getElementById('visibleOfferingsCount');
            const summaryEl = document.getElementById('activeFilterSummary');

            if (!items.length) return;

            function updateSummary() {
                let activeSectorText = 'All Sectors';
                let activeStatusText = 'All Status';
                
                const activeSectorBtn = document.querySelector('#sectorFilters .filter-pill-btn.active');
                if (activeSectorBtn) activeSectorText = activeSectorBtn.textContent.trim();
                
                const activeStatusBtn = document.querySelector('#statusFilters .filter-pill-btn.active');
                if (activeStatusBtn) activeStatusText = activeStatusBtn.textContent.trim();
                
                if (summaryEl) {
                    summaryEl.textContent = `${activeSectorText} · ${activeStatusText}`;
                }

                if (barResetBtn) {
                    const isFiltered = (selectedSector !== 'all' || selectedStatus !== 'all');
                    if (isFiltered) {
                        barResetBtn.style.borderColor = 'var(--green)';
                        barResetBtn.style.color = 'var(--green)';
                        barResetBtn.style.background = 'rgba(15, 157, 88, 0.08)';
                        barResetBtn.style.fontWeight = '600';
                    } else {
                        barResetBtn.style.borderColor = '#DCE4DF';
                        barResetBtn.style.color = '#4B5563';
                        barResetBtn.style.background = '#FFFFFF';
                        barResetBtn.style.fontWeight = '500';
                    }
                }
            }

            function applyFilters() {
                let visibleCount = 0;
                items.forEach(item => {
                    const itemSector = item.getAttribute('data-sector') || '';
                    const itemStatus = item.getAttribute('data-status') || '';
                    
                    const matchSector = (selectedSector === 'all' || itemSector === selectedSector);
                    const matchStatus = (selectedStatus === 'all' || itemStatus === selectedStatus);

                    if (matchSector && matchStatus) {
                        item.classList.remove('d-none');
                        item.classList.add('aos-animate');
                        item.style.display = '';
                        item.style.opacity = '1';
                        item.style.transform = 'none';
                        item.style.visibility = 'visible';
                        visibleCount++;
                    } else {
                        item.classList.add('d-none');
                        item.style.display = 'none';
                    }
                });

                if (countEl) {
                    countEl.textContent = visibleCount;
                }

                if (emptyMsg) {
                    emptyMsg.classList.toggle('d-none', visibleCount > 0);
                }

                updateSummary();

                if (window.AOS && typeof window.AOS.refresh === 'function') {
                    window.AOS.refresh();
                }
            }

            // Click Sector button
            sectorBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    sectorBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    selectedSector = btn.getAttribute('data-sector') || 'all';

                    // If a specific sector is selected, verify it matches currently selected status.
                    // If no offering matches this combination (e.g. E-Commerce is 'closed' while Status was 'open'),
                    // auto-reset status to 'all' so the user's selected sector is NEVER hidden!
                    if (selectedSector !== 'all' && selectedStatus !== 'all') {
                        const hasMatch = Array.from(items).some(item => {
                            const isSector = (item.getAttribute('data-sector') === selectedSector);
                            const isStatus = (item.getAttribute('data-status') === selectedStatus);
                            return isSector && isStatus;
                        });
                        if (!hasMatch) {
                            selectedStatus = 'all';
                            statusBtns.forEach(b => b.classList.toggle('active', (b.getAttribute('data-status') === 'all')));
                        }
                    }

                    applyFilters();
                });
            });

            // Click Status button
            statusBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    statusBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    selectedStatus = btn.getAttribute('data-status') || 'all';

                    // If a specific status is selected, verify it matches currently selected sector.
                    // If no offering matches this combination, auto-reset sector to 'all'.
                    if (selectedStatus !== 'all' && selectedSector !== 'all') {
                        const hasMatch = Array.from(items).some(item => {
                            const isSector = (item.getAttribute('data-sector') === selectedSector);
                            const isStatus = (item.getAttribute('data-status') === selectedStatus);
                            return isSector && isStatus;
                        });
                        if (!hasMatch) {
                            selectedSector = 'all';
                            sectorBtns.forEach(b => b.classList.toggle('active', (b.getAttribute('data-sector') === 'all')));
                        }
                    }

                    applyFilters();
                });
            });

            function resetAll() {
                selectedSector = 'all';
                selectedStatus = 'all';
                sectorBtns.forEach(b => b.classList.toggle('active', (b.getAttribute('data-sector') === 'all')));
                statusBtns.forEach(b => b.classList.toggle('active', (b.getAttribute('data-status') === 'all')));
                applyFilters();
            }

            if (resetBtn) resetBtn.addEventListener('click', resetAll);
            if (barResetBtn) barResetBtn.addEventListener('click', resetAll);

            // Initial calculation
            applyFilters();
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initOfferingsFilter);
        } else {
            initOfferingsFilter();
        }
    })();
</script>

<?php include_once ROOT_PATH . 'footer.php'; ?>