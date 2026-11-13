<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Investor Eligibility | Crown Asia LLC";
$page_desc  = "Investor eligibility requirements for Crown Asia LLC: eligible jurisdictions, individual and corporate investor types, KYC/AML verification, and offering restrictions.";
include_once ROOT_PATH . 'header.php';
?>

    <section class="inner-hero">
        <div class="container inner-hero-content">
            <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb" data-aos="fade-down">
                <a href="<?= $base_url ?>">Home</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <a href="<?= $base_url ?>legal/">Legal &amp; Disclosures</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span class="active">Investor Eligibility</span>
            </nav>

            <div class="col-lg-8" data-aos="fade-up">
                <div class="topic-badge-pill dark mb-3">COMPLIANCE &amp; ONBOARDING</div>
                <h1 class="inner-hero-title">Investor Eligibility Criteria</h1>
                <p class="inner-hero-lead mb-0">
                    Participation in Crown Asia offerings is restricted to verified individuals and entities meeting jurisdictional, KYC/AML, and offering-specific qualification standards.
                </p>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="row g-4 mb-4">
                <!-- 1. Eligible Countries & Investor Types -->
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon"><i class="bi bi-globe-americas"></i></div>
                            <h4>Eligible Countries &amp; Investor Types</h4>
                        </div>
                        <p class="risk-card-desc">
                            Accounts may be opened by qualified applicants residing or incorporated in non-restricted jurisdictions:
                        </p>
                        <ul class="risk-protocols-list">
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Individual Investors:</strong> Natural persons aged 18+ (or age of legal majority in their jurisdiction) acting on their own behalf.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Corporate &amp; Institutional Entities:</strong> Legally registered companies, trusts, or funds with verified beneficial ownership.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Excluded Jurisdictions:</strong> Residents or entities from OFAC-sanctioned territories, FATF high-risk jurisdictions, or countries where private USDT offerings are prohibited are ineligible.</span></li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Jurisdiction Check</span>
                            <span class="value text-success">OFAC &amp; AML Screened</span>
                        </div>
                    </div>
                </div>

                <!-- 2. Verification Requirements -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="80">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon amber"><i class="bi bi-person-vcard-fill"></i></div>
                            <h4>Verification Requirements (KYC/AML)</h4>
                        </div>
                        <p class="risk-card-desc">
                            All prospective investors must complete identity verification inside the Crown Asia Investor Portal prior to funding:
                        </p>
                        <ul class="risk-protocols-list">
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Identity Verification:</strong> Valid government-issued passport, national ID card, or driver's license with biometric liveness check.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Address Confirmation:</strong> Recent utility bill, bank statement, or government correspondence (dated within 90 days).</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Corporate Documentation:</strong> Certificate of incorporation, board resolution, and UBO (Ultimate Beneficial Owner) disclosures for business accounts.</span></li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Approval Window</span>
                            <span class="value text-warning">Typically &lt;24 Business Hours</span>
                        </div>
                    </div>
                </div>

                <!-- 3. Offering-Specific Restrictions -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="160">
                    <div class="risk-card">
                        <div class="risk-card-header">
                            <div class="risk-card-icon blue"><i class="bi bi-file-earmark-lock2-fill"></i></div>
                            <h4>Offering-Specific Restrictions</h4>
                        </div>
                        <p class="risk-card-desc">
                            Certain offerings may carry additional regulatory or structural eligibility parameters:
                        </p>
                        <ul class="risk-protocols-list">
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Accredited / Sophisticated Status:</strong> Specific private offerings may require accredited, professional, or qualified investor attestation under applicable US or local securities exemptions.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Minimum &amp; Maximum Caps:</strong> Each offering enforces a minimum USDT entry threshold and per-investor allocation limit.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Self-Certification:</strong> Applicants must formally acknowledge risk disclosures and local legal compliance prior to subscription.</span></li>
                        </ul>
                        <div class="risk-metric-tag">
                            <span class="label">Offering Compliance</span>
                            <span class="value text-primary">Per-Offering Verification</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Portal Registration CTA -->
            <div class="bg-white rounded-4 p-4 p-md-5 border d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3" data-aos="fade-up">
                <div>
                    <h4 class="mb-1" style="font-size: 20px;">Ready to Complete Your Investor Verification?</h4>
                    <p class="small text-muted mb-0">Create your Investor Portal account to submit KYC documents and unlock access to approved offerings.</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="btn-green">Register in Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                    <a href="<?= $base_url ?>legal/" class="btn btn-outline-dark rounded-pill px-4 py-2" style="font-size: 13px; font-weight: 600;">Legal Directory</a>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>