<?php
require_once dirname(__DIR__, 2) . '/config.php';

$page_title = "Privacy Policy | Crown Asia LLC";
$page_desc  = "Crown Asia LLC Privacy Policy explaining personal data collection, KYC/AML compliance processing, data sharing and retention, and user privacy rights.";
include_once ROOT_PATH . 'header.php';
?>

    <section class="inner-hero">
        <div class="container inner-hero-content">
            <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb" data-aos="fade-down">
                <a href="<?= $base_url ?>">Home</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <a href="<?= $base_url ?>legal/">Legal &amp; Disclosures</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span class="active">Privacy Policy</span>
            </nav>

            <div class="col-lg-8" data-aos="fade-up">
                <div class="topic-badge-pill dark mb-3">EFFECTIVE DATE: NOVEMBER 1, 2026</div>
                <h1 class="inner-hero-title">Privacy Policy</h1>
                <p class="inner-hero-lead mb-0">
                    How Crown Asia LLC collects, uses, safeguards, and retains personal information across our public website and investor onboarding workflows.
                </p>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="bg-white rounded-4 p-4 p-md-5 border">
                        <h4 class="mb-3">1. Information We Collect &amp; How We Use It</h4>
                        <p class="about-copy mb-2">Crown Asia LLC collects personal information strictly necessary to operate our services, respond to inquiries, and fulfill regulatory compliance obligations:</p>
                        <ul class="risk-protocols-list mb-4">
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Public Website &amp; Enquiry Data:</strong> Name, email address, phone number, and message details submitted via our contact forms to respond to business or investor inquiries.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Investor Verification (KYC/AML) Data:</strong> Government-issued identification, proof of residential address, corporate formation records (for entity accounts), and accreditation/eligibility declarations submitted inside the Investor Portal.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Transaction &amp; Wallet Records:</strong> Public blockchain wallet addresses, USDT deposit/withdrawal transaction hashes (TxIDs), and allocation records required for accounting, settlement, and audit compliance.</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span><strong>Technical &amp; Security Logs:</strong> IP address, browser type, and session timestamps used to protect platform security, prevent fraud, and improve website performance.</span></li>
                        </ul>

                        <h4 class="mb-3">2. Data Sharing &amp; Retention</h4>
                        <p class="about-copy mb-4">
                            We do not sell, rent, or trade your personal information to third parties. Information may be shared solely with vetted service providers operating under strict confidentiality obligations—including identity verification (KYC/AML) providers, cloud hosting infrastructure, independent financial auditors, and regulatory or law enforcement authorities where required by applicable law. Personal and transaction records are retained only for as long as necessary to fulfill operational purposes and satisfy statutory AML, tax, and corporate recordkeeping mandates.
                        </p>

                        <h4 class="mb-3">3. Data Security Safeguards</h4>
                        <p class="about-copy mb-4">
                            We implement administrative, technical, and physical security controls—including TLS/SSL encryption in transit, encrypted storage for sensitive verification documents, role-based access restrictions, and multi-factor authentication—to safeguard your personal data against unauthorized access or disclosure.
                        </p>

                        <h4 class="mb-3">4. Your Privacy Rights &amp; Contact</h4>
                        <p class="about-copy mb-4">
                            Depending on your jurisdiction, you may have the right to request access to, correction of, or deletion of your personal information (subject to mandatory legal and AML retention obligations), or to object to certain processing activities. This Privacy Policy is effective as of <strong>November 1, 2026</strong>. To exercise your privacy rights or submit a data protection inquiry, contact our Privacy Officer at <a href="mailto:info@crownasia.io" class="text-success fw-semibold">info@crownasia.io</a> or write to Crown Asia LLC, 10242 Coors Bypass Blvd. N.W., Albuquerque, New Mexico 87114, United States[cite: 5].
                        </p>

                        <div class="pt-3 border-top d-flex flex-wrap justify-content-between align-items-center gap-3">
                            <a href="<?= $base_url ?>legal/" class="small fw-semibold text-success text-decoration-none"><i class="bi bi-arrow-left me-1"></i> Back to Legal &amp; Disclosures</a>
                            <a href="<?= $base_url ?>contact/" class="btn-green py-2 px-4" style="font-size: 12px;">Contact Privacy Desk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>