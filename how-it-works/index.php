<?php
require_once dirname(__DIR__) . '/config.php';

$page_title = "How It Works | Crown Asia LLC";
$page_desc  = "Understand the complete Crown Asia investor journey: registration and verification, USDT funding, selecting offerings, tracking allocations, and USDT withdrawals.";
include_once ROOT_PATH . 'header.php';
?>

    <!-- 1. Investor Journey Overview (Inner Hero) -->
    <section class="inner-hero">
        <div class="container inner-hero-content">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb">
                        <a href="<?= $base_url ?>">Home</a>
                        <span class="separator"><i class="bi bi-chevron-right"></i></span>
                        <span class="active">How It Works</span>
                    </nav>

                    <h1 class="inner-hero-title">How Investing Works on<br><span class="accent">Crown Asia</span></h1>
                    <p class="inner-hero-lead mb-4">
                        Our public platform provides full visibility into our eight industries, offering terms, and risk disclosures. Account registration, identity verification, USDT funding, investment confirmations, and withdrawals take place securely inside the Crown Asia Investor Portal.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#investor-journey" class="btn-green">Explore 5-Step Journey <i class="bi bi-arrow-down ms-1"></i></a>
                        <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="btn-ghost">Open Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    </div>
                </div>

                <!-- Right Column: Portal Execution Summary -->
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="hero-summary-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="topic-badge-pill dark mb-0">INVESTOR WORKFLOW</span>
                            <span class="small text-success fw-semibold"><i class="bi bi-shield-lock-fill me-1"></i> Portal Secured</span>
                        </div>
                        <h4 class="text-white mb-3" style="font-size: 20px;">End-to-End Lifecycle</h4>

                        <div class="hero-summary-row">
                            <span class="text-white-50">01. Onboarding</span>
                            <span class="text-white fw-semibold">Registration &amp; KYC Verification</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">02. Capital Rail</span>
                            <span class="text-success fw-semibold">USDT Multi-Network Funding</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">03. Allocation</span>
                            <span class="text-white fw-semibold">Choose &amp; Confirm Offering</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">04. Monitoring</span>
                            <span class="text-white fw-semibold">Live Dashboard &amp; Milestones</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">05. Settlement</span>
                            <span class="text-white fw-semibold">Redemption &amp; USDT Withdrawal</span>
                        </div>

                        <div class="mt-4 pt-2">
                            <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="btn-green w-100 text-center py-2" style="font-size: 12px;">
                                <i class="bi bi-wallet2 me-1"></i> Read USDT Funding &amp; Withdrawal Guide
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2 to 6. Five-Stage Detailed Investor Journey -->
    <section class="section section-light" id="investor-journey">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill light">STEP-BY-STEP PROCESS</span>
                <h2 class="section-title">The Five Stages of Participation</h2>
                <p class="section-subtitle mx-auto">Every operational step is structured for clarity, regulatory compliance, and transparent tracking inside your investor dashboard.</p>
            </div>

            <div class="row g-4">
                <!-- Stage 01: Registration, Eligibility & Verification -->
                <div class="col-12" data-aos="fade-up">
                    <div class="journey-step-card">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-start gap-3 mb-3">
                                    <div class="journey-step-num">01</div>
                                    <div>
                                        <span class="portal-action-pill mb-2"><i class="bi bi-person-badge"></i> Executed in Investor Portal</span>
                                        <h3 class="mb-1" style="font-size: 22px;">Registration, Eligibility &amp; Verification</h3>
                                    </div>
                                </div>
                                <p class="about-copy mb-3">
                                    Begin by creating your personal or corporate account on the Crown Asia Investor Portal. Before funding or subscribing to an offering, participants must meet our jurisdiction eligibility criteria and complete Know Your Customer (KYC) and Anti-Money Laundering (AML) verification.
                                </p>
                                <div class="d-flex flex-wrap gap-3 small text-muted">
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Email &amp; 2FA Account Security</span>
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Jurisdiction Eligibility Screening</span>
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Identity &amp; Document Verification</span>
                                </div>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <div class="p-3 rounded-4 bg-light border text-start">
                                    <div class="small fw-bold text-dark mb-1">Before You Register</div>
                                    <p class="small text-muted mb-3">Confirm your country and investor classification meet our compliance standards.</p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="btn-green py-2 px-3" style="font-size: 11.5px;">Create Account</a>
                                        <a href="<?= $base_url ?>legal/investor-eligibility/" class="btn btn-sm btn-outline-dark rounded-pill px-3">Eligibility Rules</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stage 02: USDT Funding -->
                <div class="col-12" data-aos="fade-up">
                    <div class="journey-step-card">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-start gap-3 mb-3">
                                    <div class="journey-step-num">02</div>
                                    <div>
                                        <span class="portal-action-pill mb-2"><i class="bi bi-wallet2"></i> Executed in Investor Portal</span>
                                        <h3 class="mb-1" style="font-size: 22px;">USDT Funding</h3>
                                    </div>
                                </div>
                                <p class="about-copy mb-3">
                                    Once your account is verified, navigate to the Wallet / Deposit section inside the Investor Portal. Select a confirmed supported blockchain network, copy your dedicated deposit address, and transfer <strong>USDT</strong>. After required network confirmations complete, your portal balance updates automatically.
                                </p>
                                <div class="d-flex flex-wrap gap-3 small text-muted">
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Confirmed Blockchain Networks</span>
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Automated On-Chain Tracking</span>
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Transparent Network Rules</span>
                                </div>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <div class="p-3 rounded-4 bg-light border text-start">
                                    <div class="small fw-bold text-dark mb-1">Need Deposit Instructions?</div>
                                    <p class="small text-muted mb-3">Review supported networks, confirmation counts, and fee details before sending USDT.</p>
                                    <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="btn-green py-2 px-3" style="font-size: 11.5px;">
                                        USDT Deposits &amp; Withdrawals <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stage 03: Choose and Confirm an Investment -->
                <div class="col-12" data-aos="fade-up">
                    <div class="journey-step-card">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-start gap-3 mb-3">
                                    <div class="journey-step-num">03</div>
                                    <div>
                                        <span class="portal-action-pill mb-2"><i class="bi bi-check2-square"></i> Executed in Investor Portal</span>
                                        <h3 class="mb-1" style="font-size: 22px;">Choose and Confirm an Investment</h3>
                                    </div>
                                </div>
                                <p class="about-copy mb-3">
                                    Browse approved offerings across Real Estate, Forex Trading, Agriculture, Certified Gemstones, and Technology. Review the offering memorandum, minimum USDT requirement, term duration, fee structure, and sector risks—then enter your allocation amount in the Investor Portal and digitally confirm your subscription.
                                </p>
                                <div class="d-flex flex-wrap gap-3 small text-muted">
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Clear Minimums &amp; Term Lengths</span>
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Digital Subscription Agreement</span>
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Multi-Sector Diversification</span>
                                </div>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <div class="p-3 rounded-4 bg-light border text-start">
                                    <div class="small fw-bold text-dark mb-1">Explore Open Offerings</div>
                                    <p class="small text-muted mb-3">Compare active and upcoming offerings across Crown Asia's eight industries.</p>
                                    <a href="<?= $base_url ?>investment-opportunities/" class="btn-green py-2 px-3" style="font-size: 11.5px;">
                                        Browse Opportunities <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stage 04: Track an Investment -->
                <div class="col-12" data-aos="fade-up">
                    <div class="journey-step-card">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-start gap-3 mb-3">
                                    <div class="journey-step-num">04</div>
                                    <div>
                                        <span class="portal-action-pill mb-2"><i class="bi bi-speedometer2"></i> Executed in Investor Portal</span>
                                        <h3 class="mb-1" style="font-size: 22px;">Track an Investment</h3>
                                    </div>
                                </div>
                                <p class="about-copy mb-3">
                                    Monitor all active positions from a unified dashboard inside the Investor Portal. View allocation receipts, term countdowns, project progress updates, distribution schedules, and full ledger history for every deposit, payout, and fee deduction.
                                </p>
                                <div class="d-flex flex-wrap gap-3 small text-muted">
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Real-Time Portfolio Overview</span>
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Milestone &amp; Audit Updates</span>
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Complete Transaction Ledger</span>
                                </div>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <div class="p-3 rounded-4 bg-light border text-start">
                                    <div class="small fw-bold text-dark mb-1">Existing Investor?</div>
                                    <p class="small text-muted mb-3">Sign in directly to view your active allocations and distribution statements.</p>
                                    <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn btn-sm btn-dark rounded-pill px-4 py-2">
                                        Investor Login <i class="bi bi-box-arrow-up-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stage 05: Investment Redemption & USDT Withdrawal -->
                <div class="col-12" data-aos="fade-up">
                    <div class="journey-step-card">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-start gap-3 mb-3">
                                    <div class="journey-step-num">05</div>
                                    <div>
                                        <span class="portal-action-pill mb-2"><i class="bi bi-arrow-up-right-circle"></i> Executed in Investor Portal</span>
                                        <h3 class="mb-1" style="font-size: 22px;">Investment Redemption &amp; USDT Withdrawal</h3>
                                    </div>
                                </div>
                                <p class="about-copy mb-3">
                                    Scheduled distributions and matured principal redemptions are credited in <strong>USDT</strong> to your Investor Portal wallet in accordance with each offering's redemption terms. From your wallet, submit a withdrawal request to your external USDT address and track its status through on-chain completion.
                                </p>
                                <div class="d-flex flex-wrap gap-3 small text-muted">
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Automated Maturity Settlement</span>
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> Reinvest or Withdraw Externally</span>
                                    <span><i class="bi bi-check-circle-fill text-success me-1"></i> TxID Confirmation Tracking</span>
                                </div>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <div class="p-3 rounded-4 bg-light border text-start">
                                    <div class="small fw-bold text-dark mb-1">Withdrawal Processing</div>
                                    <p class="small text-muted mb-3">Check minimum withdrawal limits, supported networks, and processing windows.</p>
                                    <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/#withdrawals" class="btn-green py-2 px-3" style="font-size: 11.5px;">
                                        View Withdrawal Terms <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FAQs & Guide Section -->
    <section class="section section-white" id="how-faq">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill light">PROCESS GUIDANCE</span>
                <h2 class="section-title">How It Works — Frequently Asked Questions</h2>
                <p class="section-subtitle mx-auto">Answers to common questions about onboarding, portal security, and managing investments on Crown Asia.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="howItWorksFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="howFaq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#howCol1" aria-expanded="true" aria-controls="howCol1">
                                    Why do registration, deposits, and investments happen inside the Investor Portal?
                                </button>
                            </h2>
                            <div id="howCol1" class="accordion-collapse collapse show" aria-labelledby="howFaq1" data-bs-parent="#howItWorksFAQ">
                                <div class="accordion-body">
                                    Separating our public informational website from the authenticated Investor Portal ensures strict identity verification (KYC/AML), encrypted wallet session management, and secure audit trails for every transaction and subscription agreement.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="howFaq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#howCol2" aria-expanded="false" aria-controls="howCol2">
                                    How long does account verification take after registering?
                                </button>
                            </h2>
                            <div id="howCol2" class="accordion-collapse collapse" aria-labelledby="howFaq2" data-bs-parent="#howItWorksFAQ">
                                <div class="accordion-body">
                                    Standard KYC document reviews are typically completed within 24 business hours once clear identification and proof-of-address documents are submitted inside the Investor Portal.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="howFaq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#howCol3" aria-expanded="false" aria-controls="howCol3">
                                    Can I hold a USDT balance in my portal wallet before choosing an offering?
                                </button>
                            </h2>
                            <div id="howCol3" class="accordion-collapse collapse" aria-labelledby="howFaq3" data-bs-parent="#howItWorksFAQ">
                                <div class="accordion-body">
                                    Yes. Once verified, you can fund your Investor Portal wallet with USDT at any time and allocate funds into one or multiple approved offerings whenever you are ready.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="howFaq4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#howCol4" aria-expanded="false" aria-controls="howCol4">
                                    Can I redeem an investment early before its scheduled term ends?
                                </button>
                            </h2>
                            <div id="howCol4" class="accordion-collapse collapse" aria-labelledby="howFaq4" data-bs-parent="#howItWorksFAQ">
                                <div class="accordion-body">
                                    Redemption rules depend on the specific offering structure. Real-asset offerings (such as real estate or plantation cycles) follow fixed maturity schedules, while certain liquidity offerings provide periodic redemption windows with advance notice. Always review the Redemption Terms section on the offering's detail page before confirming.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="<?= $base_url ?>faq/" class="btn btn-outline-success rounded-pill px-4 py-2 fw-semibold" style="font-size: 13px;">
                            Explore Full FAQ Directory <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portal CTAs -->
    <section class="cta-section">
        <div class="cta-glow-blob"></div>
        <div class="container" data-aos="zoom-in">
            <div class="cta-card-luxury">
                <span class="topic-badge-pill mb-3">GET STARTED TODAY</span>
                <h2>Begin Your <span>Investor Journey</span></h2>
                <p>Create your verified account on the Crown Asia Investor Portal or review our detailed USDT funding guide.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="cta-btn-primary">
                        <i class="bi bi-person-plus-fill me-1"></i> Open Investor Portal
                    </a>
                    <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="cta-btn-secondary">
                        <i class="bi bi-wallet2 me-1"></i> USDT Deposits &amp; Withdrawals
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>