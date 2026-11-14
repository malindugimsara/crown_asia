<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Terms of Use | Crown Asia LLC";
$page_desc  = "Terms of Use governing access to the Crown Asia LLC public website, intellectual property, user responsibilities, and applicable governing law.";
include_once ROOT_PATH . 'header.php';
?>

<section class="inner-hero">
    <div class="container inner-hero-content">
        <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb" data-aos="fade-down">
            <a href="<?= $base_url ?>">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <a href="<?= $base_url ?>legal/">Legal &amp; Disclosures</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Terms of Use</span>
        </nav>

        <div class="col-lg-8" data-aos="fade-up">
            <div class="topic-badge-pill dark mb-3">EFFECTIVE DATE: NOVEMBER 1, 2026</div>
            <h1 class="inner-hero-title">Terms of Use</h1>
            <p class="inner-hero-lead mb-0">
                Please read these Terms of Use carefully before accessing or using the Crown Asia LLC public website (crownasia.io).
            </p>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="bg-white rounded-4 p-4 p-md-5 border">
                    <h4 class="mb-3">1. Acceptance &amp; Scope of Website Use</h4>
                    <p class="about-copy mb-4">
                        By accessing or browsing <strong>crownasia.io</strong> (the "Website"), operated by Crown Asia LLC ("Crown Asia," "we," or "us"), you agree to be bound by these Terms of Use and all applicable laws and regulations. This public Website provides corporate information, industry briefings, educational guides, and offering summaries. Authenticated investor onboarding, KYC verification, USDT wallet funding, and subscription execution occur exclusively within the separate Crown Asia Investor Portal and are governed by their respective portal and offering agreements.
                    </p>

                    <h4 class="mb-3">2. No Financial, Legal, or Tax Advice</h4>
                    <p class="about-copy mb-4">
                        All materials on this Website are provided strictly for general informational purposes and do not constitute investment, financial, legal, or tax advice. Past performance or operational track records across our business divisions do not guarantee future results. Prospective participants should consult independent legal and financial advisors and review all offering-specific disclosures before making any allocation decision.
                    </p>

                    <h4 class="mb-3">3. User Responsibilities &amp; Prohibited Conduct</h4>
                    <p class="about-copy mb-2">When using this Website, you agree that you will not:</p>
                    <ul class="risk-protocols-list mb-4">
                        <li><i class="bi bi-check-circle-fill"></i><span>Access or attempt to use the Website or Investor Portal from a restricted jurisdiction where participation is prohibited by law.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Submit false, misleading, or fraudulent information through our enquiry forms or verification workflows.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Attempt to interfere with Website security, scrape proprietary data, introduce malicious code, or gain unauthorized access to restricted systems.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Reproduce, distribute, or commercially exploit Crown Asia trademarks, logos, proprietary research, or visual assets without prior written consent.</span></li>
                    </ul>

                    <h4 class="mb-3">4. Applicable Terms, Disclaimers &amp; Governing Law</h4>
                    <p class="about-copy mb-4">
                        The Website is provided on an "as-is" and "as-available" basis without warranties of any kind, express or implied. To the maximum extent permitted by applicable law, Crown Asia LLC shall not be liable for any indirect, incidental, or consequential damages arising from your use of, or inability to access, this Website. These Terms of Use are governed by and construed in accordance with the laws of the State of New Mexico, United States, without regard to conflict-of-law principles.
                    </p>

                    <h4 class="mb-3">5. Contact Information &amp; Effective Date</h4>
                    <p class="about-copy mb-4">
                        These Terms of Use are effective as of <strong>November 1, 2026</strong>. We reserve the right to update these terms periodically; continued use of the Website constitutes acceptance of the revised terms. For legal or compliance questions, contact us at <a href="mailto:web@crownasia.io" class="text-success fw-semibold">web@crownasia.io</a> or by mail at Crown Asia LLC, 10242 Coors Bypass Blvd. N.W., Albuquerque, New Mexico 87114, United States.
                    </p>

                    <div class="pt-3 border-top d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <a href="<?= $base_url ?>legal/" class="small fw-semibold text-success text-decoration-none"><i class="bi bi-arrow-left me-1"></i> Back to Legal &amp; Disclosures</a>
                        <a href="<?= $base_url ?>contact/" class="btn-green py-2 px-4" style="font-size: 12px;">Contact Compliance Desk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once ROOT_PATH . 'footer.php'; ?>