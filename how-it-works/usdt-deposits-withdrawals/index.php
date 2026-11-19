<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "USDT Deposits & Withdrawals | Crown Asia LLC";
$page_desc  = "Complete guide to USDT (TRC20) funding on Crown Asia: official TRON network instructions, deposit and withdrawal steps, fees, limits, processing times, and transaction support.";
include_once ROOT_PATH . 'header.php';
?>

    <!-- 1. USDT Funding Overview (Inner Hero) -->
    <section class="inner-hero">
        <div class="container inner-hero-content">
            <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb" data-aos="fade-down">
                <a href="<?= $base_url ?>">Home</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <a href="<?= $base_url ?>how-it-works/">How It Works</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span class="active">USDT Deposits &amp; Withdrawals</span>
            </nav>

            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="topic-badge-pill dark mb-3">TREASURY &amp; SETTLEMENT GUIDE</div>
                    <h1 class="inner-hero-title">USDT Deposits &amp;<br><span class="accent">Withdrawals Guide</span></h1>
                    <p class="inner-hero-lead mb-4">
                        Crown Asia utilizes Tether (USDT) on the TRON network (TRC20) for fast, borderless, and transparent capital settlement. Review official network specifications, step-by-step transfer instructions, processing windows, and transaction verification help below.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="https://crownasia.io/profile" target="_blank" rel="noopener" class="btn-green">Open Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                        <a href="#fees-limits" class="btn-ghost">Fees &amp; Limits</a>
                    </div>
                </div>

                <!-- Right Column: Critical Network Safety Notice -->
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="hero-summary-card">
                        <div class="d-flex align-items-center gap-2 text-warning mb-2">
                            <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                            <span class="small fw-bold text-uppercase" style="letter-spacing: 1px;">Important Network Rule</span>
                        </div>
                        <h4 class="text-white mb-3" style="font-size: 19px;">Exclusively USDT (TRC20)</h4>
                        <p class="small text-white-50 mb-3" style="line-height: 1.7;">
                            Only send USDT via the <strong>TRON (TRC20)</strong> network. Sending via non-supported networks will result in permanent, irreversible loss of funds.
                        </p>
                        <div class="p-3 rounded-3" style="background: rgba(29, 185, 84, 0.1); border: 1px solid rgba(29, 185, 84, 0.3);">
                            <div class="small text-white fw-semibold mb-1"><i class="bi bi-check-circle-fill text-success me-1"></i> Verification Checklist</div>
                            <div class="small text-white-50">Always ensure your transfer address begins with a "T" (TRON Base58 address) and verify details inside your Investor Portal deposit screen before sending.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Confirmed Supported Network -->
    <section class="section section-white" id="supported-networks">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill light">BLOCKCHAIN RAIL</span>
                <h2 class="section-title">Official Supported Network</h2>
                <p class="section-subtitle mx-auto">All treasury inbound funding and outbound distributions are processed exclusively via the <strong>TRON (TRC20)</strong> blockchain rail.</p>
            </div>

            <div class="row justify-content-center">
                <!-- Network: TRC20 -->
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="activity-card border-success border-opacity-25 p-4 p-md-5">
                        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
                            <div class="d-flex align-items-center gap-3">
                                <div class="activity-icon mb-0"><i class="bi bi-lightning-charge-fill"></i></div>
                                <div>
                                    <h3 class="mb-0 text-dark">TRON Blockchain (TRC20)</h3>
                                    <span class="text-muted small">Official Primary Settlement Standard</span>
                                </div>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill px-3 py-2 fw-semibold">
                                <i class="bi bi-shield-check me-1"></i> Exclusively Supported
                            </span>
                        </div>
                        <p class="lead fs-6 text-muted mb-4">
                            Crown Asia utilizes <strong>USDT-TRC20</strong> on the TRON network as our single standardized settlement rail. Offering near-instant block finality, predictable sub-dollar network transfer fees, and institutional smart contract transparency, TRC20 guarantees friction-free capital deployment for global investors.
                        </p>
                        <div class="row g-3 border-top pt-4">
                            <div class="col-sm-6 col-md-3">
                                <div class="small text-muted mb-1">Token Standard</div>
                                <strong class="text-dark d-block">USDT-TRC20</strong>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="small text-muted mb-1">Confirmations</div>
                                <strong class="text-dark d-block">20 Blocks (~1–3 Mins)</strong>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="small text-muted mb-1">Address Format</div>
                                <strong class="text-dark d-block">Starts with "T" (Base58)</strong>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="small text-muted mb-1">Explorer</div>
                                <strong class="text-dark d-block"><a href="https://tronscan.org" target="_blank" rel="noopener" class="text-success text-decoration-none">Tronscan.org <i class="bi bi-box-arrow-up-right small"></i></a></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 & 4. Deposit Steps & Withdrawal Steps (Two-Column Process Guide) -->
    <section class="section section-light" id="withdrawals">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Left Column: Deposit Steps & Confirmation -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="bg-white rounded-4 p-4 p-md-5 border h-100">
                        <span class="topic-badge-pill light mb-2">INBOUND FUNDING</span>
                        <h3 class="mb-2">Deposit Steps &amp; Confirmation</h3>
                        <p class="text-muted small mb-4">Follow these steps inside your verified Investor Portal account to fund your USDT balance:</p>

                        <div class="step-sequence-item">
                            <div class="step-circle-badge">1</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Sign In &amp; Open Wallet Deposit</h6>
                                <p class="small text-muted mb-0">Log in to the <a href="https://crownasia.io/profile" target="_blank" rel="noopener" class="text-success fw-semibold">Investor Portal</a> (ensure KYC verification is approved) and select <strong>Deposit USDT</strong>.</p>
                            </div>
                        </div>

                        <div class="step-sequence-item">
                            <div class="step-circle-badge">2</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Verify USDT-TRC20 Network</h6>
                                <p class="small text-muted mb-0">Confirm the official <strong>USDT (TRC20)</strong> network selection to display your dedicated portal deposit QR code and TRON wallet address.</p>
                            </div>
                        </div>

                        <div class="step-sequence-item">
                            <div class="step-circle-badge">3</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Transfer USDT from Your Wallet</h6>
                                <p class="small text-muted mb-0">Paste the exact portal deposit address into your external wallet or exchange, double-check that the network is TRC20, and broadcast the transfer.</p>
                            </div>
                        </div>

                        <div class="step-sequence-item">
                            <div class="step-circle-badge">4</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">On-Chain Confirmation &amp; Balance Credit</h6>
                                <p class="small text-muted mb-0">Once 20 block confirmations complete, your deposit status updates from <em>Confirming</em> to <em>Completed</em> and your portal USDT balance becomes available for allocation.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Withdrawal Steps & Request Status -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="bg-white rounded-4 p-4 p-md-5 border h-100">
                        <span class="topic-badge-pill light mb-2">OUTBOUND SETTLEMENT</span>
                        <h3 class="mb-2">Withdrawal Steps &amp; Request Status</h3>
                        <p class="text-muted small mb-4">Withdraw available distributions or redeemed principal to your personal external USDT wallet:</p>

                        <div class="step-sequence-item">
                            <div class="step-circle-badge">1</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Verify TRC20 Destination Address</h6>
                                <p class="small text-muted mb-0">Ensure your external receiving wallet or exchange supports <strong>USDT-TRC20</strong> (address must begin with "T").</p>
                            </div>
                        </div>

                        <div class="step-sequence-item">
                            <div class="step-circle-badge">2</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Submit Withdrawal Request in Portal</h6>
                                <p class="small text-muted mb-0">Open <strong>Withdraw USDT</strong> in the Investor Portal, enter the withdrawal amount, paste your destination TRC20 address, and confirm via 2FA security verification.</p>
                            </div>
                        </div>

                        <div class="step-sequence-item">
                            <div class="step-circle-badge">3</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Treasury Compliance &amp; Security Review</h6>
                                <p class="small text-muted mb-0">Requests undergo automated and treasury security checks to protect account holders against unauthorized transfers.</p>
                            </div>
                        </div>

                        <div class="step-sequence-item">
                            <div class="step-circle-badge">4</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Track Request Status &amp; TxID</h6>
                                <p class="small text-muted mb-2">Monitor progress in your portal history:</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Pending Review</span>
                                    <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">Processing</span>
                                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Completed (TxID Issued)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Fees, Limits & Processing Times -->
    <section class="section section-white" id="fees-limits">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill light">SCHEDULE &amp; PARAMETERS</span>
                <h2 class="section-title">Fees, Limits &amp; Processing Times</h2>
                <p class="section-subtitle mx-auto">Standard operational parameters for USDT wallet transactions inside the Crown Asia Investor Portal.</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-11">
                    <div class="table-responsive usdt-spec-table">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Transaction Type</th>
                                    <th>Supported Network</th>
                                    <th>Minimum / Limits</th>
                                    <th>Platform Fee</th>
                                    <th>Estimated Processing Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>USDT Deposit</strong></td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1">TRON (TRC20)</span></td>
                                    <td>Min: <strong>50 USDT</strong><br><span class="small text-muted">No upper deposit cap</span></td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success">0% Platform Fee</span><br><span class="small text-muted">(Sender pays network gas)</span></td>
                                    <td><strong>2 – 15 Minutes</strong><br><span class="small text-muted">Automatic after 20 block confirmations</span></td>
                                </tr>
                                <tr>
                                    <td><strong>USDT Withdrawal</strong></td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1">TRON (TRC20)</span></td>
                                    <td>Min: <strong>50 USDT</strong><br><span class="small text-muted">Max: Per verified tier</span></td>
                                    <td><strong>Flat Network Fee</strong><br><span class="small text-muted">(Displayed prior to confirmation)</span></td>
                                    <td><strong>24 – 48 Business Hours</strong><br><span class="small text-muted">Following security approval</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="small text-muted mt-3 mb-0">
                        <i class="bi bi-info-circle text-success me-1"></i> Exact live network gas fees and account-specific limits are always displayed on the confirmation screen inside the Investor Portal before you submit any transaction.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Transaction Help & Troubleshooting -->
    <section class="section section-light" id="transaction-help">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill light">TREASURY SUPPORT</span>
                <h2 class="section-title">Transaction Help &amp; Troubleshooting</h2>
                <p class="section-subtitle mx-auto">Common questions regarding blockchain confirmations, transaction hashes (TxID), and support escalation.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon"><i class="bi bi-hourglass-split"></i></div>
                            <h4>Deposit Not Credited Yet?</h4>
                        </div>
                        <p class="risk-card-desc">
                            Check your transaction hash (TxID) on the official TRON block explorer (<a href="https://tronscan.org" target="_blank" rel="noopener" class="text-success text-decoration-none">Tronscan.org</a>) to confirm the transfer has reached 20 block confirmations and was sent to your exact portal TRC20 address.
                        </p>
                        <div class="risk-metric-tag">
                            <span class="label">First Step</span>
                            <span class="value text-success">Verify TxID on Tronscan</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber"><i class="bi bi-exclamation-diamond-fill"></i></div>
                            <h4>Sent Below Minimum or Wrong Chain?</h4>
                        </div>
                        <p class="risk-card-desc">
                            Deposits sent below the minimum 50 USDT threshold or via unsupported networks cannot be credited automatically. Open a priority treasury ticket inside the Investor Portal with your full TxID for assistance.
                        </p>
                        <div class="risk-metric-tag">
                            <span class="label">Escalation</span>
                            <span class="value text-warning">Submit TxID in Portal</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue"><i class="bi bi-headset"></i></div>
                            <h4>Need Treasury Assistance?</h4>
                        </div>
                        <p class="risk-card-desc">
                            For faster resolution on any deposit or withdrawal inquiry, submit a support ticket directly from your authenticated Investor Portal account—or contact our support desk with your registered email and TxID.
                        </p>
                        <div class="risk-metric-tag">
                            <span class="label">Support Route</span>
                            <span class="value text-primary">Portal Treasury Desk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            </div>
        </div>
    </section>

    <!-- 7. Open Investor Portal CTA -->
    <section class="cta-section">
        <div class="cta-glow-blob"></div>
        <div class="container" data-aos="zoom-in">
            <div class="cta-card-luxury">
                <span class="topic-badge-pill mb-3">WALLET &amp; ALLOCATIONS</span>
                <h2>Manage Your USDT <span>In the Investor Portal</span></h2>
                <p>Sign in to access your verified deposit addresses, track on-chain confirmations, allocate into offerings, or request withdrawals.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="https://crownasia.io/profile" target="_blank" rel="noopener" class="cta-btn-primary">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Open Investor Portal
                    </a>
                    <a href="<?= $base_url ?>contact/" class="cta-btn-secondary">
                        <i class="bi bi-envelope-fill me-1"></i> Contact Treasury Support
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>