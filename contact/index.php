<?php
require_once dirname(__DIR__) . '/config.php';

$page_title = "Contact Us | Crown Asia LLC";
$page_desc  = "Get in touch with Crown Asia LLC. Reach out for general enquiries, investor support, or verified corporate contact details in Albuquerque, New Mexico.";
include_once ROOT_PATH . 'header.php';
?>
    <!-- 1. Contact Introduction (Inner Hero) -->
    <section class="inner-hero">
        <div class="container inner-hero-content">
            <nav class="breadcrumb-custom" aria-label="breadcrumb" data-aos="fade-down">
                <a href="<?= $base_url ?>">Home</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span class="active">Contact Us</span>
            </nav>

            <div class="row align-items-center g-4">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="topic-badge-pill dark">Global Communications</div>
                    <h1 class="inner-hero-title">Connect With <span style="color: var(--green-bright);">Crown Asia LLC</span></h1>
                    <p class="inner-hero-lead mb-0">
                        Whether you are exploring institutional partnerships, have questions regarding our eight diversified business sectors, or require dedicated investor account assistance, our corporate desk is ready to help.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Investor Support Route vs General Enquiry Banner -->
    <section class="section section-white pb-0">
        <div class="container">
            <div class="row g-4">
                <!-- General Enquiry Route -->
                <div class="col-md-6" data-aos="fade-up">
                    <div class="activity-card d-flex flex-column">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="activity-icon mb-0">
                                <i class="bi bi-chat-square-text-fill"></i>
                            </div>
                            <div>
                                <span class="badge bg-success bg-opacity-10 text-success mb-1">Public Desk</span>
                                <h4 class="mb-0">General &amp; Partnership Enquiries</h4>
                            </div>
                        </div>
                        <p class="mb-4">
                            For business proposals, sector-specific questions, media requests, or general information about Crown Asia LLC operations, please use our enquiry form below.
                        </p>
                        <div class="mt-auto">
                            <a href="#enquiry-form" class="btn-green py-2 px-4" style="font-size: 12px;">
                                <i class="bi bi-arrow-down-circle me-2"></i>Go to Enquiry Form
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Investor Support Route -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="activity-card d-flex flex-column" style="border-color: rgba(15, 157, 88, 0.35); background: linear-gradient(145deg, #ffffff, #f3faf6);">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="activity-icon mb-0">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <div>
                                <span class="badge bg-dark text-white mb-1">Registered Investors</span>
                                <h4 class="mb-0">Investor Support Route</h4>
                            </div>
                        </div>
                        <p class="mb-4">
                            For account verification (KYC), USDT deposit/withdrawal tracking, offering allocations, or dashboard assistance, please sign in to the Investor Portal for priority ticket support.
                        </p>
                        <div class="mt-auto d-flex flex-wrap gap-2">
                            <a href="<?= $portal_login_url ?>" class="btn-green py-2 px-4" style="font-size: 12px;">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Open Investor Portal
                            </a>
                            <a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/" class="btn btn-outline-dark rounded-pill py-2 px-3" style="font-size: 12px; font-weight: 500;">
                                USDT Guide
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Verified Contact Details & General Enquiry Form -->
    <section class="section section-light" id="enquiry-form">
        <div class="container">
            <div class="row g-4">
                <!-- Left Column: Verified Contact Details -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="contact-info-card">
                        <div class="topic-badge-pill dark mb-3">Verified Details</div>
                        <h3>Corporate Headquarters</h3>
                        <p>Official registered office and verified communication channels for Crown Asia LLC.</p>

                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="bi bi-building-check"></i></div>
                            <div>
                                <div class="label">Registered Entity</div>
                                <div class="value">Crown Asia LLC<br><span class="small text-white-50">Registered in New Mexico, USA</span></div>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <div>
                                <div class="label">Head Office Address</div>
                                <div class="value">10242 Coors Bypass Blvd. N.W.<br>Albuquerque, New Mexico 87114<br>United States</div>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="bi bi-envelope-fill"></i></div>
                            <div>
                                <div class="label">Official Email</div>
                                <div class="value"><a href="mailto:info@crownasia.io">info@crownasia.io</a></div>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="bi bi-globe2"></i></div>
                            <div>
                                <div class="label">Official Domain</div>
                                <div class="value"><a href="https://crownasia.io" target="_blank" rel="noopener">crownasia.io</a></div>
                            </div>
                        </div>

                        <div class="contact-item mb-0">
                            <div class="contact-item-icon"><i class="bi bi-clock-fill"></i></div>
                            <div>
                                <div class="label">Response Window</div>
                                <div class="value">Monday – Friday (9:00 AM – 6:00 PM MST)<br><span class="small text-white-50">Typical response within 24 business hours</span></div>
                            </div>
                        </div>

                        <div class="contact-social">
                            <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: General Enquiry Form & Map -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-form-card">
                        <div class="topic-badge-pill light mb-2">Direct Message</div>
                        <h4 class="mb-1">General Enquiry Form</h4>
                        <p class="text-muted mb-4" style="font-size:14px;">Please select the relevant department or industry sector so we can route your message accurately.</p>

                        <form id="contactForm" action="<?= $base_url ?>contact-handler.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="float-field">
                                        <input type="text" name="name" id="name" placeholder=" " required>
                                        <label for="name">Full Name *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-field">
                                        <input type="tel" name="phone" id="phone" placeholder=" ">
                                        <label for="phone">Phone / WhatsApp Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-field">
                                        <input type="email" name="email" id="email" placeholder=" " required>
                                        <label for="email">Email Address *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-field">
                                        <select name="enquiry_type" id="enquiry_type" required>
                                            <option value="" selected disabled></option>
                                            <option value="General Enquiry">General Enquiry</option>
                                            <option value="Investment Opportunities">Investment Opportunities</option>
                                            <option value="Partnership & B2B">Partnership &amp; B2B</option>
                                            <option value="Investor Portal Assistance">Investor Portal Assistance</option>
                                            <option value="Compliance & Legal">Compliance &amp; Legal</option>
                                        </select>
                                        <label for="enquiry_type">Enquiry Category *</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="float-field">
                                        <select name="sector" id="sector" required>
                                            <option value="" selected disabled></option>
                                            <option value="All / Not Applicable">Not Sector Specific</option>
                                            <option value="Forex Trading">Forex Trading</option>
                                            <option value="Real Estate Investment">Real Estate Investment</option>
                                            <option value="Research & Development">Research &amp; Development</option>
                                            <option value="Technology & Communications">Technology &amp; Communications</option>
                                            <option value="Trading, Import & Export">Trading, Import &amp; Export</option>
                                            <option value="E-Commerce">E-Commerce</option>
                                            <option value="Gems & Gemstones">Gems &amp; Gemstones</option>
                                            <option value="Agriculture & Plantation">Agriculture &amp; Plantation</option>
                                        </select>
                                        <label for="sector">Related Industry Sector *</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="float-field">
                                        <textarea name="message" id="message" placeholder=" " required></textarea>
                                        <label for="message">Your Message *</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="text-muted small mb-3">
                                        <i class="bi bi-info-circle me-1 text-success"></i> Never share passwords, private keys, or sensitive wallet credentials through this public form.
                                    </p>
                                    <button type="submit" class="btn-green w-100 text-center border-0" style="cursor:pointer;">
                                        <i class="bi bi-send me-2"></i>Submit Enquiry
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Google Map Embed -->
                    <div class="map-wrap">
                        <iframe src="https://maps.google.com/maps?q=10242%20Coors%20Bypass%20Blvd.%20N.W.,%20Albuquerque,%20NM%2087114&amp;z=16&amp;output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Crown Asia LLC Albuquerque Office"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once ROOT_PATH . 'footer.php'; ?>