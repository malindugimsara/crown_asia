<?php
require_once dirname(__DIR__) . '/config.php';

$page_title = "Forex Investment Opportunity | Crown Asia LLC";
$page_desc  = "Institutional quantitative Forex Trading investment opportunity on Crown Asia with transparent audited metrics, risk preservation, and USDT (TRC20) settlement.";
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
                    <span class="active">Forex Investment Opportunity</span>
                </nav>

                <h1 class="inner-hero-title">Institutional Forex<br><span class="accent">Investment Opportunity</span></h1>
                <p class="inner-hero-lead mb-4">
                    Crown Asia LLC manages commercial operations across eight business sectors, with external investor capital participation deployed exclusively into our institutional quantitative Foreign Exchange (Forex) liquidity desk. Review our active offering terms, performance metrics, and participate securely using USDT (TRC20).
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="#offerings-directory" class="btn-green">Browse Forex Offering <i class="bi bi-arrow-down ms-1"></i></a>
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
                            <span>Verified Forex Desk Active</span>
                        </div>
                        <div class="hero-floating-stat">
                            <div class="stat-icon"><i class="bi bi-shield-check"></i></div>
                            <div>
                                <div class="stat-title">Institutional Forex Liquidity</div>
                                <div class="stat-sub">USDT (TRC20) Settlement</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2 & 3. Active Forex Investment Offerings -->
<section class="section section-light" id="offerings-directory">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="topic-badge-pill light">ACTIVE ALLOCATION DESK</span>
            <h2 class="section-title">Institutional Forex Investment Offerings</h2>
            <p class="section-subtitle mx-auto">Crown Asia deploys investor capital exclusively into our high-liquidity, algorithmic Foreign Exchange trading desks with transparent on-chain auditing and USDT (TRC20) settlement.</p>
        </div>

        <!-- Offerings Grid -->
        <div class="row g-4" id="offeringsGrid">
            <!-- Offering 1: G10 Quantitative Liquidity Strategy (Open) -->
            <div class="col-lg-6 offering-item" data-sector="forex-trading" data-status="open" data-aos="fade-up">
                <div class="offering-card h-100">
                    <div class="offering-badge-wrap">
                        <img src="<?= $base_url ?>assets/images/offerings/forex-liquidity.webp" alt="G10 Quantitative Liquidity Strategy" width="900" height="600" loading="lazy">
                        <span class="offering-status-tag"><i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i> Open for Allocation</span>
                        <span class="offering-sector-tag">Forex Trading</span>
                    </div>
                    <div class="offering-content">
                        <h4>G10 Quantitative Liquidity Strategy</h4>
                        <p>Institutional currency execution across liquid G10 currency pairs utilizing Tier-1 prime broker liquidity and strict 1:10 max leverage controls.</p>
                        <div class="offering-grid-terms">
                            <div class="offering-term-item">
                                <div class="label">Minimum</div>
                                <div class="val">100 USDT</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Distributions</div>
                                <div class="val">Monthly (USDT)</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Risk Protocol</div>
                                <div class="val text-success">Capped ATR Drawdown</div>
                            </div>
                        </div>
                        <div class="mt-auto d-flex gap-2">
                            <a href="<?= $base_url ?>investment-opportunities/g10-quantitative-liquidity/" class="btn-green w-100 text-center py-2 px-3" style="font-size: 12px;">View Terms &amp; Offering Memo</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offering 2: Institutional Macro Alpha Strategy (Open) -->
            <div class="col-lg-6 offering-item" data-sector="forex-trading" data-status="open" data-aos="fade-up" data-aos-delay="80">
                <div class="offering-card h-100">
                    <div class="offering-badge-wrap">
                        <img src="<?= $base_url ?>assets/images/blog/blog-1.webp" alt="Institutional Macro Alpha Strategy" width="900" height="600" loading="lazy">
                        <span class="offering-status-tag"><i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i> Open for Allocation</span>
                        <span class="offering-sector-tag">Forex Trading</span>
                    </div>
                    <div class="offering-content">
                        <h4>Institutional Macro Alpha Strategy</h4>
                        <p>Global interest rate differential modeling and sovereign economic data forecasting with automated Value-at-Risk (VaR) position contraction.</p>
                        <div class="offering-grid-terms">
                            <div class="offering-term-item">
                                <div class="label">Distributions</div>
                                <div class="val">Monthly (USDT)</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Settlement</div>
                                <div class="val">TRON (TRC20)</div>
                            </div>
                            <div class="offering-term-item">
                                <div class="label">Auditing</div>
                                <div class="val text-success">Daily On-Chain Logs</div>
                            </div>
                        </div>
                        <div class="mt-auto d-flex gap-2">
                            <a href="<?= $base_url ?>industries/forex-trading/" class="btn-green w-100 text-center py-2 px-3" style="font-size: 12px;">Inspect Live Trading Metrics</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Corporate Separation Notice -->
            <div class="col-12" data-aos="fade-up">
                <div class="p-4 rounded-4 bg-white border border-secondary border-opacity-25 shadow-sm">
                    <div class="d-flex align-items-start gap-3">
                        <div class="activity-icon mb-0 flex-shrink-0"><i class="bi bi-shield-lock-fill text-success"></i></div>
                        <div>
                            <h5 class="text-dark mb-2">Corporate Holding Structure &amp; Capital Mandate</h5>
                            <p class="text-muted small mb-0" style="line-height: 1.7;">
                                Crown Asia LLC manages operations across eight strategic commercial sectors: Foreign Exchange, Commercial Real Estate, R&amp;D, Tech &amp; Cloud, Import-Export Logistics, E-Commerce, Gems &amp; Gemstones, and Agriculture. 
                                <strong>Our other seven commercial sectors are funded through internal group equity and corporate treasury reserves, and are not open for external public investment subscriptions.</strong> 
                                Capital participation available through our Investor Portal is deployed exclusively into our institutional Foreign Exchange (Forex) liquidity operations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
                    <h3 class="pillar-card-title mb-3">FEES &amp;<br>DISTRIBUTIONS</h3>
                    <p class="pillar-body-text">
                        Review the minimum USDT threshold, management or performance fee deductions, and scheduled payout intervals.
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
                                How do I fund my account and confirm a Forex investment allocation?
                            </button>
                        </h2>
                        <div id="oppCollapseTwo" class="accordion-collapse collapse" aria-labelledby="oppFaqTwo" data-bs-parent="#opportunitiesFAQ">
                            <div class="accordion-body">
                                Once registered and verified in the Investor Portal, deposit <strong>USDT (TRC20)</strong> via the TRON network. After your deposit confirms on-chain (20 block confirmations), open the Forex offering, enter your allocation amount (minimum 100 USDT), review the terms, and confirm your participation.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="oppFaqThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#oppCollapseThree" aria-expanded="false" aria-controls="oppCollapseThree">
                                Can I invest in Crown Asia's other 7 commercial sectors?
                            </button>
                        </h2>
                        <div id="oppCollapseThree" class="accordion-collapse collapse" aria-labelledby="oppFaqThree" data-bs-parent="#opportunitiesFAQ">
                            <div class="accordion-body">
                                No. Crown Asia’s other seven commercial divisions (Commercial Real Estate, Agriculture &amp; Plantation, Gems &amp; Gemstones, Tech &amp; Cloud, E-Commerce, Logistics, and R&amp;D) are private commercial operations funded entirely through corporate equity and retained group capital. External investor capital allocation is exclusively deployed into our Institutional Foreign Exchange (Forex) Trading desk.
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
                <span><i class="bi bi-wallet2"></i> USDT (TRC20) Settlement</span>
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

            if (!items.length || !sectorBtns.length) return;

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