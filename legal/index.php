<?php
require_once dirname(__DIR__) . '/config.php';

$page_title = "Legal & Disclosures | Crown Asia LLC";
$page_desc  = "Official legal overview, New Mexico LLC corporate disclosures, investor policy directory, and offering documentation for Crown Asia LLC.";
include_once ROOT_PATH . 'header.php';
?>

<!-- Legal Hero -->
<section class="inner-hero">
    <div class="container inner-hero-content">
        <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb" data-aos="fade-down">
            <a href="<?= $base_url ?>">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Legal &amp; Disclosures</span>
        </nav>

        <div class="row align-items-center g-4">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="topic-badge-pill dark mb-3">GOVERNANCE &amp; TRANSPARENCY</div>
                <h1 class="inner-hero-title">Legal &amp; Regulatory<br><span class="accent">Disclosures</span></h1>
                <p class="inner-hero-lead mb-0">
                    Crown Asia LLC operates under structured corporate governance and transparent investor disclosures. Review our entity registration details, platform policies, risk disclosures, and investor eligibility standards below.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Company Disclosures -->
<section class="section section-white">
    <div class="container">
        <div class="row align-items-center g-4 mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="topic-badge-pill light">ENTITY DISCLOSURES</span>
                <h2 class="section-title">Corporate Registration &amp; Jurisdiction</h2>
                <p class="about-copy mb-3">
                    Crown Asia LLC is a legally registered and tax-compliant Limited Liability Company organized under the laws of the State of New Mexico, United States, operating across eight diversified commercial sectors.
                </p>
                <p class="about-copy mb-0">
                    Information published on <strong>crownasia.io</strong> is provided for informational purposes only and does not constitute a public securities solicitation in any jurisdiction where such offer or participation is unlawful.
                </p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="bg-light rounded-4 p-4 border">
                    <h5 class="mb-3" style="font-family: 'Poppins', sans-serif; font-weight: 600;">Verified Entity Summary</h5>
                    <div class="d-flex justify-content-between py-2 border-bottom small">
                        <span class="text-muted">Legal Entity Name</span>
                        <strong class="text-dark">Crown Asia LLC</strong>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom small">
                        <span class="text-muted">Jurisdiction of Formation</span>
                        <strong class="text-dark">State of New Mexico, USA</strong>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom small">
                        <span class="text-muted">Registered Principal Office</span>
                        <strong class="text-dark text-end">10242 Coors Bypass Blvd. N.W., Albuquerque, NM 87114</strong>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom small">
                        <span class="text-muted">Official Compliance Contact</span>
                        <strong class="text-dark"><a href="mailto:web@crownasia.io" class="text-success text-decoration-none">web@crownasia.io</a></strong>
                    </div>
                    <div class="d-flex justify-content-between pt-2 small">
                        <span class="text-muted">Settlement Currency</span>
                        <strong class="text-dark">USDT (Confirmed Portal Networks)</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Policy Directory -->
        <div class="text-center mb-4 pt-3" data-aos="fade-up">
            <span class="topic-badge-pill light">POLICY DIRECTORY</span>
            <h2 class="section-title">Platform &amp; Investor Policies</h2>
            <p class="section-subtitle mx-auto">Please read each policy carefully before using this website or participating in any offering through the Investor Portal.</p>
        </div>

        <div class="row g-4">
            <!-- Terms of Use -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="activity-card d-flex flex-column">
                    <div class="activity-icon"><i class="bi bi-file-text-fill"></i></div>
                    <h4>Terms of Use</h4>
                    <p class="mb-4">Governs public website access, intellectual property, user responsibilities, and limitation of liability.</p>
                    <a href="<?= $base_url ?>legal/terms-of-use/" class="mt-auto small fw-semibold text-success text-decoration-none stretched-link">
                        Read Terms of Use <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Privacy Policy -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="80">
                <div class="activity-card d-flex flex-column">
                    <div class="activity-icon"><i class="bi bi-shield-lock-fill"></i></div>
                    <h4>Privacy Policy</h4>
                    <p class="mb-4">Details personal data collection, KYC/AML record retention, security safeguards, and user privacy rights.</p>
                    <a href="<?= $base_url ?>legal/privacy-policy/" class="mt-auto small fw-semibold text-success text-decoration-none stretched-link">
                        Read Privacy Policy <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Risk Disclosure -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="160">
                <div class="activity-card d-flex flex-column">
                    <div class="activity-icon"><i class="bi bi-exclamation-triangle-fill"></i></div>
                    <h4>Risk Disclosure</h4>
                    <p class="mb-4">Outlines general capital risk, sector-specific exposures, USDT blockchain transfer risks, and liquidity terms.</p>
                    <a href="<?= $base_url ?>legal/risk-disclosure/" class="mt-auto small fw-semibold text-success text-decoration-none stretched-link">
                        Read Risk Disclosure <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Investor Eligibility -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="240">
                <div class="activity-card d-flex flex-column">
                    <div class="activity-icon"><i class="bi bi-person-check-fill"></i></div>
                    <h4>Investor Eligibility</h4>
                    <p class="mb-4">Defines eligible jurisdictions, individual and corporate investor criteria, KYC verification, and offering restrictions.</p>
                    <a href="<?= $base_url ?>legal/investor-eligibility/" class="mt-auto small fw-semibold text-success text-decoration-none stretched-link">
                        Read Eligibility Policy <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Offering Documents Overview -->
<section class="section section-light">
    <div class="container">
        <div class="bg-white rounded-4 p-4 p-md-5 border" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="topic-badge-pill light mb-2">OFFERING DOCUMENTATION</span>
                    <h3 class="mb-2">Offering Memoranda &amp; Subscription Agreements</h3>
                    <p class="about-copy mb-0">
                        Each approved investment opportunity includes an offering-specific memorandum, fee schedule, use-of-funds breakdown, and digital subscription agreement. Verified participants can inspect and download complete offering documents inside the Crown Asia Investor Portal prior to confirming any USDT allocation.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex flex-wrap justify-content-lg-end gap-2">
                        <a href="<?= $base_url ?>investment-opportunities/" class="btn-green">Browse Offerings</a>
                        <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-semibold" style="font-size: 13px;">Investor Portal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once ROOT_PATH . 'footer.php'; ?>