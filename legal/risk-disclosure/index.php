<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Risk Disclosure | Crown Asia LLC";
$page_desc  = "Comprehensive Risk Disclosure statement covering general investment risks, sector-specific exposures, USDT blockchain transfer risks, and liquidity/redemption terms.";
include_once ROOT_PATH . 'header.php';
?>

    <section class="inner-hero">
        <div class="container inner-hero-content">
            <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb" data-aos="fade-down">
                <a href="<?= $base_url ?>">Home</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <a href="<?= $base_url ?>legal/">Legal &amp; Disclosures</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span class="active">Risk Disclosure</span>
            </nav>

            <div class="col-lg-8" data-aos="fade-up">
                <div class="topic-badge-pill dark mb-3">MANDATORY INVESTOR READING</div>
                <h1 class="inner-hero-title">Risk Disclosure Statement</h1>
                <p class="inner-hero-lead mb-0">
                    All investments involve financial risk, including the possible loss of principal. Carefully evaluate the risk categories below alongside each offering's specific memorandum before committing funds.
                </p>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="row g-4">
                <!-- 1. General Investment Risks -->
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon"><i class="bi bi-graph-down-arrow"></i></div>
                            <h4>1. General Investment &amp; Capital Risks</h4>
                        </div>
                        <p class="risk-card-desc">
                            Participation in private commercial and asset-backed offerings carries inherent market, economic, and operational uncertainties:
                        </p>
                        <ul class="risk-protocols-list">
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>No Guaranteed Returns:</strong> Target yields, projected margins, and historical sector performance are not guarantees of future returns.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Principal Loss Exposure:</strong> Macroeconomic downturns, regulatory changes, or adverse business conditions may reduce distributions or result in partial or total loss of invested capital.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>No Deposit Insurance:</strong> Allocations are not bank deposits and are not insured by the FDIC or any government agency.</span></li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Capital Standard</span>
                            <span class="value text-dark">Risk Capital Only</span>
                        </div>
                    </div>
                </div>

                <!-- 2. Sector & Offering Risks -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber"><i class="bi bi-layers-half"></i></div>
                            <h4>2. Sector &amp; Offering-Specific Risks</h4>
                        </div>
                        <p class="risk-card-desc">
                            Each of Crown Asia's eight operating sectors faces distinct operational and market variables:
                        </p>
                        <ul class="risk-protocols-list">
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Forex &amp; Financial Markets:</strong> Exchange rate volatility, interest rate shifts, and leverage amplification.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Real Estate, Agriculture &amp; Trade:</strong> Construction delays, property valuation cycles, weather/crop yield variances, and international freight disruptions.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Tech, R&amp;D, E-Commerce &amp; Gems:</strong> Hardware prototyping timelines, cybersecurity threats, inventory turnover, and precious stone resale liquidity.</span></li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Due Diligence</span>
                            <span class="value text-warning">Review Offering Memorandum</span>
                        </div>
                    </div>
                </div>

                <!-- 3. USDT Transfer Risks -->
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue"><i class="bi bi-currency-exchange"></i></div>
                            <h4>3. USDT &amp; Blockchain Transfer Risks</h4>
                        </div>
                        <p class="risk-card-desc">
                            Funding, distributions, and redemptions settled in Tether (USDT) involve digital asset and network risks:
                        </p>
                        <ul class="risk-protocols-list">
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Irreversible Transactions:</strong> Blockchain transfers cannot be reversed once broadcast. Sending USDT to an incorrect address or unsupported network (e.g., mismatched TRC20/ERC20/BEP20) may result in permanent loss.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Stablecoin &amp; Network Risk:</strong> Temporary stablecoin peg deviations, third-party wallet compromises, or blockchain network congestion can affect settlement timing.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Wallet Custody Responsibility:</strong> Participants are solely responsible for securing their external wallet private keys and verifying destination addresses before withdrawal.</span></li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Transfer Protocol</span>
                            <span class="value text-primary">Verify Network &amp; Address</span>
                        </div>
                    </div>
                </div>

                <!-- 4. Liquidity & Redemption Risks -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon"><i class="bi bi-hourglass-split"></i></div>
                            <h4>4. Liquidity &amp; Redemption Risks</h4>
                        </div>
                        <p class="risk-card-desc">
                            Private offerings do not trade on public secondary exchanges and are subject to defined lock-in and redemption schedules:
                        </p>
                        <ul class="risk-protocols-list">
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Fixed Term Commitments:</strong> Capital allocated to real estate, plantation cycles, or trade contracts remains committed until scheduled maturity or exit events.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Notice &amp; Processing Windows:</strong> Redemptions and external USDT withdrawals require advance notice (where specified) and treasury security review.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Asset Liquidation Timing:</strong> Unforeseen market illiquidity may extend asset exit timelines beyond initial estimates.</span></li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Horizon Planning</span>
                            <span class="value text-success">Match Term to Liquidity Needs</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 p-4 rounded-4 bg-white border d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3" data-aos="fade-up">
                <div>
                    <h5 class="mb-1" style="font-size: 16px;">Questions About Offering Terms or Risk Controls?</h5>
                    <p class="small text-muted mb-0">Review our USDT guide or contact our compliance team before funding your account.</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="btn btn-outline-dark rounded-pill px-4 py-2" style="font-size: 12px; font-weight: 600;">USDT Guide</a>
                    <a href="<?= $base_url ?>legal/" class="btn-green py-2 px-4" style="font-size: 12px;">All Legal Policies</a>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>