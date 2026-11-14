<?php
require_once dirname(__DIR__) . '/config.php';

$page_title = "Contact Us | Corporate Headquarters & Investor Desk | Crown Asia LLC";
$page_desc  = "Connect with Crown Asia LLC. Reach out for institutional partnerships, dedicated investor account support, or verified corporate details in Albuquerque, New Mexico.";
include_once ROOT_PATH . 'header.php';

$status = $_GET['status'] ?? '';
?>

<!-- 1. Contact Hero / Breadcrumbs -->
<section class="inner-hero">
    <div class="container inner-hero-content">
        <nav class="breadcrumb-custom" aria-label="breadcrumb" data-aos="fade-down">
            <a href="<?= $base_url ?>">Home</a>
            <span class="separator"><i class="bi bi-chevron-right"></i></span>
            <span class="active">Contact Us</span>
        </nav>

        <div class="row align-items-center g-5">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="topic-badge-pill dark mb-3">Global Communications Desk</div>
                <h1 class="inner-hero-title">Connect With <br><span class="accent">Crown Asia LLC</span></h1>
                <p class="inner-hero-lead mb-4">
                    Whether you are exploring strategic business partnerships, evaluating allocations across our eight diversified sectors, or requiring dedicated investor portal assistance, our corporate team is at your service.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#contact-form" class="btn-green">Send an Inquiry <i class="bi bi-arrow-down ms-1"></i></a>
                    <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-ghost">Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left">
                <div class="sector-hero-visual">
                    <div class="hero-image-frame">
                        <img src="<?= $base_url ?>assets/images/hero/contact.webp" alt="Crown Asia Global Corporate Headquarters &amp; Communications Desk" class="img-fluid" width="1024" height="572" loading="eager">
                        <div class="hero-live-pill">
                            <span class="live-dot pulse"></span>
                            <span>Communications Desk Active</span>
                        </div>
                        <div class="hero-floating-stat">
                            <div class="stat-icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <div>
                                <div class="stat-title">Albuquerque, New Mexico</div>
                                <div class="stat-sub">Corporate Registered HQ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- 2. Top Contact Info Grid (Demo style-2 4-Box Overview) -->
<section class="section section-white pb-0">
    <div class="container">
        <div class="row g-4">
            <!-- Box 1: Headquarters -->
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="50">
                <div class="contact-grid-card">
                    <div class="contact-grid-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h3 class="contact-grid-title">Headquarters</h3>
                    <p class="contact-grid-text">
                        10242 Coors Bypass Blvd. N.W.<br>
                        Albuquerque, NM 87114<br>
                        <strong>United States</strong>
                    </p>
                </div>
            </div>

            <!-- Box 2: Official Emails -->
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-grid-card">
                    <div class="contact-grid-icon">
                        <i class="bi bi-envelope-open-fill"></i>
                    </div>
                    <h3 class="contact-grid-title">Email Desks</h3>
                    <ul class="contact-grid-list">
                        <li><a href="mailto:info@crownasia.io"><i class="bi bi-arrow-right-short text-success"></i>info@crownasia.io</a></li>
                        <li><a href="mailto:investors@crownasia.io"><i class="bi bi-arrow-right-short text-success"></i>investors@crownasia.io</a></li>
                        <li><a href="mailto:partnerships@crownasia.io"><i class="bi bi-arrow-right-short text-success"></i>partnerships@crownasia.io</a></li>
                    </ul>
                </div>
            </div>

            <!-- Box 3: Working Hours & Support -->
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="contact-grid-card">
                    <div class="contact-grid-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h3 class="contact-grid-title">Hours &amp; Windows</h3>
                    <p class="contact-grid-text">
                        <strong>Mon – Fri:</strong> 9:00 AM – 6:00 PM MST<br>
                        <span class="text-success fw-semibold"><i class="bi bi-lightning-charge-fill me-1"></i>24/7 Portal Ticket Monitoring</span><br>
                        <span class="small text-muted">Avg response within 24 business hrs</span>
                    </p>
                </div>
            </div>

            <!-- Box 4: Investor Portal Support -->
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-grid-card">
                    <div class="contact-grid-icon">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>
                    <h3 class="contact-grid-title">Investor Priority</h3>
                    <p class="contact-grid-text mb-3">
                        Direct ticket escalation for KYC, offering memorandums, and USDT deposit confirmations.
                    </p>
                    <a href="<?= $portal_login_url ?>" class="btn-green py-1 px-3 mt-auto" style="font-size: 12px;">
                        Sign In to Portal <i class="bi bi-box-arrow-in-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Dual Channel: General Enquiries vs Registered Investor Route -->
<section class="section section-white pb-0">
    <div class="container">
        <div class="row g-4">
            <!-- General Enquiry Route -->
            <div class="col-md-6" data-aos="fade-up">
                <div class="activity-card d-flex flex-column h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="activity-icon mb-0">
                            <i class="bi bi-chat-square-text-fill"></i>
                        </div>
                        <div>
                            <span class="badge bg-success bg-opacity-10 text-success mb-1">Public &amp; Partner Desk</span>
                            <h4 class="mb-0">General &amp; Partnership Inquiries</h4>
                        </div>
                    </div>
                    <p class="mb-4 text-muted" style="font-size: 14.5px; line-height: 1.7;">
                        For institutional co-investments, supplier inquiries across our trading divisions, media requests, or general corporate information, please submit your message via our direct routing form below.
                    </p>
                    <div class="mt-auto">
                        <a href="#enquiry-form" class="btn-green py-2 px-4" style="font-size: 12.5px;">
                            <i class="bi bi-arrow-down-circle me-2"></i>Go to Enquiry Form
                        </a>
                    </div>
                </div>
            </div>

            <!-- Investor Support Route -->
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="activity-card d-flex flex-column h-100" style="border-color: rgba(15, 157, 88, 0.35); background: linear-gradient(145deg, #ffffff, #f3faf6);">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="activity-icon mb-0">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <div>
                            <span class="badge bg-dark text-white mb-1">Active Investors</span>
                            <h4 class="mb-0">Priority Investor Route</h4>
                        </div>
                    </div>
                    <p class="mb-4 text-muted" style="font-size: 14.5px; line-height: 1.7;">
                        Active account holders receive dedicated priority routing for KYC onboarding, USDT settlement verification, distribution statements, and multi-sector offering allocations through the Investor Dashboard.
                    </p>
                    <div class="mt-auto d-flex flex-wrap gap-2">
                        <a href="<?= $portal_login_url ?>" class="btn-green py-2 px-4" style="font-size: 12.5px;">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Open Investor Portal
                        </a>
                        <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="btn btn-outline-dark rounded-pill py-2 px-3" style="font-size: 12.5px; font-weight: 500;">
                            USDT Guide
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Verified Contact Details & General Enquiry Form -->
<section class="section section-light" id="enquiry-form">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <!-- Left Column: Verified Contact Details Card -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="contact-info-card">
                    <div class="contact-entity-badge">
                        <i class="bi bi-patch-check-fill"></i> Verified Corporate Entity
                    </div>
                    <h3>Corporate Headquarters</h3>
                    <p>Official registered records, legal establishment, and direct communication points for Crown Asia LLC.</p>

                    <!-- Registered Entity -->
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="bi bi-building-check"></i></div>
                        <div>
                            <div class="label">Registered Entity</div>
                            <div class="value">
                                Crown Asia LLC<br>
                                <span class="small text-white-50">Registered Domestic LLC &middot; New Mexico, USA</span>
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="bi bi-geo-alt-fill"></i></div>
                        <div>
                            <div class="label">Head Office Address</div>
                            <div class="value">
                                10242 Coors Bypass Blvd. N.W.<br>
                                Albuquerque, New Mexico 87114<br>
                                United States of America
                            </div>
                        </div>
                    </div>

                    <!-- Official Emails -->
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="bi bi-envelope-fill"></i></div>
                        <div>
                            <div class="label">Primary Email Desk</div>
                            <div class="value"><a href="mailto:info@crownasia.io">info@crownasia.io</a></div>
                        </div>
                    </div>

                    <!-- Official Domain -->
                    <div class="contact-item">
                        <div class="contact-item-icon"><i class="bi bi-globe2"></i></div>
                        <div>
                            <div class="label">Official Web Portal</div>
                            <div class="value"><a href="https://crownasia.io" target="_blank" rel="noopener">crownasia.io</a></div>
                        </div>
                    </div>

                    <!-- Response Window -->
                    <div class="contact-item mb-0">
                        <div class="contact-item-icon"><i class="bi bi-clock-fill"></i></div>
                        <div>
                            <div class="label">Working Window &amp; SLA</div>
                            <div class="value">
                                Monday – Friday (9:00 AM – 6:00 PM MST)<br>
                                <span class="small text-white-50">Guaranteed response within 24 business hours</span>
                            </div>
                        </div>
                    </div>

                    <!-- Department Direct Routing Pills -->
                    <div class="dept-pill-group">
                        <span class="text-white-50 small w-100 mb-1" style="font-size: 11px; letter-spacing: 1px; text-transform: uppercase;">Direct Routing:</span>
                        <a href="mailto:investors@crownasia.io" class="dept-pill"><i class="bi bi-graph-up-arrow text-success"></i> Investors</a>
                        <a href="mailto:partnerships@crownasia.io" class="dept-pill"><i class="bi bi-handshake text-success"></i> Partnerships</a>
                        <a href="mailto:compliance@crownasia.io" class="dept-pill"><i class="bi bi-shield-check text-success"></i> Compliance</a>
                        <a href="mailto:media@crownasia.io" class="dept-pill"><i class="bi bi-broadcast text-success"></i> Media</a>
                    </div>

                    <!-- Social Links -->
                    <div class="contact-social">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Enhanced General Enquiry Form -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-form-card">
                    <div class="topic-badge-pill light mb-2">Direct Routing Form</div>
                    <h4 class="mb-1" style="font-family: 'Poppins', sans-serif; font-weight: 700;">Submit an Official Inquiry</h4>
                    <p class="text-muted mb-3" style="font-size:14px;">Select the pertinent division or category to direct your inquiry to the relevant corporate officer.</p>

                    <!-- Alerts for PHP handler fallback -->
                    <?php if ($status === 'success'): ?>
                        <div class="alert alert-success d-flex align-items-center gap-2 mb-4" role="alert">
                            <i class="bi bi-check-circle-fill fs-5"></i>
                            <div>Thank you! Your message has been received. A corporate officer will respond within 24 business hours.</div>
                        </div>
                    <?php elseif ($status === 'error'): ?>
                        <div class="alert alert-danger d-flex align-items-center gap-2 mb-4" role="alert">
                            <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                            <div>Please ensure all required fields (*) and a valid email address are provided.</div>
                        </div>
                    <?php endif; ?>

                    <!-- Security Notice Pill -->
                    <div class="contact-security-pill">
                        <i class="bi bi-shield-fill-check"></i>
                        <div><strong>Encrypted Submission:</strong> Inquiries are transmitted via 256-bit SSL encryption. Never disclose seed phrases or private passwords.</div>
                    </div>

                    <form id="contactForm" action="<?= $base_url ?>contact-handler.php" method="POST">
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="float-field">
                                    <input type="text" name="name" id="name" placeholder=" " required>
                                    <label for="name">Full Name *</label>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6">
                                <div class="float-field">
                                    <input type="email" name="email" id="email" placeholder=" " required>
                                    <label for="email">Corporate or Personal Email *</label>
                                </div>
                            </div>

                            <!-- Phone / WhatsApp Number -->
                            <div class="col-md-6">
                                <div class="float-field">
                                    <input type="tel" name="phone" id="phone" placeholder=" ">
                                    <label for="phone">Phone / WhatsApp (Optional)</label>
                                </div>
                            </div>

                            <!-- Enquiry Category -->
                            <div class="col-md-6">
                                <div class="float-field">
                                    <select name="enquiry_type" id="enquiry_type" required>
                                        <option value="" selected disabled></option>
                                        <option value="General Corporate Enquiry">General Corporate Enquiry</option>
                                        <option value="Institutional Investment & Allocation">Institutional Investment &amp; Allocation</option>
                                        <option value="B2B & Joint Venture Partnership">B2B &amp; Joint Venture Partnership</option>
                                        <option value="Investor Portal & KYC Assistance">Investor Portal &amp; KYC Assistance</option>
                                        <option value="USDT Deposit / Withdrawal Query">USDT Deposit / Withdrawal Query</option>
                                        <option value="Compliance, Tax & Legal Verification">Compliance, Tax &amp; Legal Verification</option>
                                    </select>
                                    <label for="enquiry_type">Enquiry Category *</label>
                                </div>
                            </div>

                            <!-- Related Industry Sector -->
                            <div class="col-md-6">
                                <div class="float-field">
                                    <select name="sector" id="sector" required>
                                        <option value="" selected disabled></option>
                                        <option value="All / Corporate Group">All / Corporate Group</option>
                                        <option value="Forex Trading">Forex Trading</option>
                                        <option value="Real Estate Investment">Real Estate Investment</option>
                                        <option value="Research & Development">Research &amp; Development</option>
                                        <option value="Technology & Communications">Technology &amp; Communications</option>
                                        <option value="Trading, Import & Export">Trading, Import &amp; Export</option>
                                        <option value="E-Commerce">E-Commerce</option>
                                        <option value="Gems & Gemstones">Gems &amp; Gemstones</option>
                                        <option value="Agriculture & Plantation">Agriculture &amp; Plantation</option>
                                    </select>
                                    <label for="sector">Related Strategic Sector *</label>
                                </div>
                            </div>

                            <!-- Subject Line -->
                            <div class="col-md-6">
                                <div class="float-field">
                                    <input type="text" name="subject" id="subject" placeholder=" " required>
                                    <label for="subject">Subject Line *</label>
                                </div>
                            </div>

                            <!-- Message Body -->
                            <div class="col-12">
                                <div class="float-field">
                                    <textarea name="message" id="message" placeholder=" " required></textarea>
                                    <label for="message">Your Message or Project Details *</label>
                                </div>
                            </div>

                            <!-- Submission Button -->
                            <div class="col-12">
                                <button type="submit" class="btn-green w-100 text-center border-0 py-3" style="cursor:pointer; font-size: 15px;">
                                    <i class="bi bi-send-fill me-2"></i>Send Message Securely
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- 5. Interactive Location Map Box -->
        <div class="row mt-4">
            <div class="col-12" data-aos="fade-up">
                <div class="contact-map-box">
                    <div class="contact-map-header">
                        <div>
                            <span class="badge bg-success bg-opacity-10 text-success mb-1">Corporate Location</span>
                            <h5 class="mb-0" style="font-family: 'Poppins', sans-serif; font-weight: 700;">Albuquerque, New Mexico Office</h5>
                            <p class="text-muted small mb-0">10242 Coors Bypass Blvd. N.W., Albuquerque, NM 87114, USA</p>
                        </div>
                        <div>
                            <a href="https://maps.google.com/?q=10242+Coors+Bypass+Blvd.+N.W.,+Albuquerque,+NM+87114" target="_blank" rel="noopener" class="btn btn-outline-dark rounded-pill px-3 py-2" style="font-size: 13px;">
                                <i class="bi bi-geo-alt-fill text-success me-1"></i>Open in Google Maps
                            </a>
                        </div>
                    </div>
                    <div class="contact-map-frame">
                        <iframe src="https://maps.google.com/maps?q=10242%20Coors%20Bypass%20Blvd.%20N.W.,%20Albuquerque,%20NM%2087114&amp;z=15&amp;output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Crown Asia LLC Albuquerque Office"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Quick Contact FAQs Accordion -->
<section class="section section-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5" data-aos="fade-up">
                <span class="topic-badge-pill light">Quick Assistance</span>
                <h2 class="section-title">Frequently Asked Inquiries</h2>
                <p class="section-subtitle mx-auto">Common questions regarding communication, response times, and investor routing.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <!-- FAQ 1 -->
                <div class="contact-faq-item">
                    <button class="contact-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq1" aria-expanded="true">
                        <span>How quickly will our company respond to inquiries?</span>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div id="contactFaq1" class="collapse show">
                        <div class="contact-faq-body">
                            All general and institutional inquiries received during normal business hours (Monday – Friday, 9:00 AM – 6:00 PM Mountain Standard Time) are reviewed and acknowledged within 24 business hours. Registered investors with active ticket submissions inside the Investor Portal receive priority responses.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="contact-faq-item">
                    <button class="contact-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq2" aria-expanded="false">
                        <span>Where do I submit KYC verification or account documents?</span>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div id="contactFaq2" class="collapse">
                        <div class="contact-faq-body">
                            For security and regulatory compliance, identity documents and proof of address should never be sent via public email or web forms. Please sign in to the secure <a href="<?= $portal_login_url ?>" class="text-success text-decoration-underline">Investor Portal</a> and upload your verification documents through the encrypted KYC verification tab.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="contact-faq-item">
                    <button class="contact-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq3" aria-expanded="false">
                        <span>Can we schedule an in-person or video consultation?</span>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div id="contactFaq3" class="collapse">
                        <div class="contact-faq-body">
                            Yes. Institutional investors, fund partners, and high-net-worth participants can schedule virtual video briefings or in-person visits to our Albuquerque corporate headquarters. Please select "Institutional Investment &amp; Allocation" on the inquiry form above with your proposed dates.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="contact-faq-item">
                    <button class="contact-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq4" aria-expanded="false">
                        <span>How do I verify the authenticity of Crown Asia communications?</span>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div id="contactFaq4" class="collapse">
                        <div class="contact-faq-body">
                            Official Crown Asia LLC communications originate strictly from authorized <code>@crownasia.io</code> email domains or official dashboard notifications. Crown Asia representatives will never contact you via unofficial social media asking for wallet private keys, passwords, or direct cryptocurrency transfers outside the verified portal.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Active Investor CTA Banner -->
<section class="section section-light pt-0">
    <div class="container">
        <div class="contact-cta-card" data-aos="fade-up">
            <div class="row align-items-center g-4 position-relative" style="z-index: 2;">
                <div class="col-lg-8">
                    <span class="badge bg-success bg-opacity-25 text-white mb-2 px-3 py-1" style="letter-spacing: 1px;">REGISTERED INVESTOR PLATFORM</span>
                    <h3 class="mb-2" style="font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: 700;">Already an Active Crown Asia Investor?</h3>
                    <p class="mb-0 text-white-50" style="font-size: 14.5px; line-height: 1.65;">
                        Skip standard email queues. Access live allocation milestones, request USDT distributions, or open dedicated support tickets directly inside your investor portal.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
                        <a href="<?= $portal_login_url ?>" class="btn-green py-2 px-4">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Sign In to Portal
                        </a>
                        <a href="<?= $base_url ?>how-it-works/" class="btn btn-outline-light rounded-pill py-2 px-3" style="font-size: 13px;">
                            How It Works
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once ROOT_PATH . 'footer.php'; ?>