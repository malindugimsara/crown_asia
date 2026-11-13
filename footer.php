<?php
require_once __DIR__ . '/config.php';

$portal_login_url    = $portal_login_url ?? 'https://portal.crownasia.io/login';
$portal_register_url = $portal_register_url ?? 'https://portal.crownasia.io/register';
?>

<footer class="footer-modern">
    <div class="footer-glow-top"></div>

    <div class="container position-relative" style="z-index: 2;">
        <!-- Top Investor Portal Quick Strip -->
        <div class="footer-portal-strip d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3">
                <div class="contact-item-icon mb-0" style="width: 46px; height: 46px; border-radius: 12px;">
                    <i class="bi bi-shield-check fs-5"></i>
                </div>
                <div>
                    <h6 class="text-white mb-1" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 15px;">
                        Crown Asia LLC &middot; Registered US Investment &amp; Business Group
                    </h6>
                    <p class="small text-white-50 mb-0">
                        Transparent asset-backed offerings across 8 industries with secure USDT settlement.
                    </p>
                </div>
            </div>
            <div class="d-flex flex-wrap gap-2 flex-shrink-0">
                <a href="<?= $base_url ?>investment-opportunities/" class="btn-green py-2 px-4" style="font-size: 12px;">
                    Explore Offerings
                </a>
                <a href="<?= $portal_login_url ?>" target="_blank" rel="noopener" class="btn-ghost py-2 px-4" style="font-size: 12px;">
                    Investor Portal <i class="bi bi-box-arrow-up-right ms-1"></i>
                </a>
            </div>
        </div>

        <!-- Main 4-Column Navigation & Legal Grid -->
        <div class="row g-4 g-lg-5">
            <!-- Column 1: Brand & Verified Head Office -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-logo d-flex align-items-center gap-3 mb-3">
                    <img src="<?= $base_url ?>assets/images/logo.png" alt="Crown Asia">
                    <div class="brand-text">
                        <div class="name">CROWN ASIA</div>
                        <div class="sub">International</div>
                    </div>
                </div>
                <p class="small mb-4" style="line-height: 1.7; color: rgba(255,255,255,0.6);">
                    A diversified United States limited liability company operating across eight strategic sectors. Registered, tax-compliant, and committed to transparent governance.
                </p>

                <div class="footer-hq-item">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>10242 Coors Bypass Blvd. N.W., Albuquerque, New Mexico 87114, USA</span>
                </div>
                <div class="footer-hq-item">
                    <i class="bi bi-envelope-fill"></i>
                    <a href="mailto:info@crownasia.io">info@crownasia.io</a>
                </div>
                <div class="footer-hq-item mb-3">
                    <i class="bi bi-globe2"></i>
                    <a href="https://crownasia.io" target="_blank" rel="noopener">crownasia.io</a>
                </div>

                <div class="contact-social mt-3 pt-3">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <!-- Column 2: Platform & Investor Resources -->
            <div class="col-lg-2 col-md-6 col-6">
                <h5 class="footer-heading">Platform</h5>
                <ul class="footer-nav-list">
                    <li><a href="<?= $base_url ?>"><i class="bi bi-chevron-right"></i>Home</a></li>
                    <li><a href="<?= $base_url ?>investment-opportunities/"><i class="bi bi-chevron-right"></i>Opportunities</a></li>
                    <li><a href="<?= $base_url ?>how-it-works/"><i class="bi bi-chevron-right"></i>How It Works</a></li>
                    <li><a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/"><i class="bi bi-chevron-right"></i>USDT Guide</a></li>
                    <li><a href="<?= $base_url ?>about/"><i class="bi bi-chevron-right"></i>About Us</a></li>
                    <li><a href="<?= $base_url ?>blog/"><i class="bi bi-chevron-right"></i>Blog &amp; Insights</a></li>
                    <li><a href="<?= $base_url ?>contact/"><i class="bi bi-chevron-right"></i>Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 3: Eight Strategic Industries -->
            <div class="col-lg-3 col-md-6 col-6">
                <h5 class="footer-heading">Our Industries</h5>
                <ul class="footer-nav-list">
                    <li><a href="<?= $base_url ?>industries/forex-trading/"><i class="bi bi-chevron-right"></i>Forex Trading</a></li>
                    <li><a href="<?= $base_url ?>industries/real-estate/"><i class="bi bi-chevron-right"></i>Real Estate</a></li>
                    <li><a href="<?= $base_url ?>industries/research-and-development/"><i class="bi bi-chevron-right"></i>Research &amp; Development</a></li>
                    <li><a href="<?= $base_url ?>industries/technology-and-communications/"><i class="bi bi-chevron-right"></i>Tech &amp; Communications</a></li>
                    <li><a href="<?= $base_url ?>industries/import-export/"><i class="bi bi-chevron-right"></i>Import &amp; Export</a></li>
                    <li><a href="<?= $base_url ?>industries/ecommerce/"><i class="bi bi-chevron-right"></i>E-Commerce</a></li>
                    <li><a href="<?= $base_url ?>industries/gems-and-gemstones/"><i class="bi bi-chevron-right"></i>Gems &amp; Gemstones</a></li>
                    <li><a href="<?= $base_url ?>industries/agriculture-and-plantation/"><i class="bi bi-chevron-right"></i>Agriculture &amp; Plantation</a></li>
                </ul>
            </div>

            <!-- Column 4: Dedicated Legal & Disclosures Box -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-legal-box h-100">
                    <h5 class="footer-heading">Legal &amp; Disclosures</h5>
                    <ul class="footer-nav-list mb-3">
                        <li><a href="<?= $base_url ?>legal/"><i class="bi bi-file-earmark-text"></i>Legal Overview &amp; Disclosures</a></li>
                        <li><a href="<?= $base_url ?>legal/terms-of-use/"><i class="bi bi-file-check"></i>Terms of Use</a></li>
                        <li><a href="<?= $base_url ?>legal/privacy-policy/"><i class="bi bi-shield-lock"></i>Privacy Policy</a></li>
                        <li><a href="<?= $base_url ?>legal/risk-disclosure/"><i class="bi bi-exclamation-triangle"></i>Risk Disclosure</a></li>
                        <li><a href="<?= $base_url ?>legal/investor-eligibility/"><i class="bi bi-person-check"></i>Investor Eligibility</a></li>
                    </ul>
                    <div class="pt-2 border-top border-secondary border-opacity-25">
                        <span class="small text-white-50 d-block" style="font-size: 11.5px;">
                            <i class="bi bi-building-check text-success me-1"></i> New Mexico Registered LLC
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modern Glassmorphic Risk Notice Banner -->
        <div class="footer-risk-glass d-flex align-items-start gap-3">
            <i class="bi bi-info-circle-fill text-success fs-5 mt-1 flex-shrink-0"></i>
            <p class="small text-white-50 mb-0" style="font-size: 12px; line-height: 1.65;">
                <strong class="text-white">Risk Notice:</strong> Investments involve financial risk, including potential loss of principal. Past performance is not indicative of future results. Information on this website is for informational purposes only and does not constitute a public solicitation where unlawful. Please review our <a href="<?= $base_url ?>legal/risk-disclosure/">Risk Disclosure</a>, <a href="<?= $base_url ?>legal/investor-eligibility/">Investor Eligibility</a>, and <a href="<?= $base_url ?>legal/terms-of-use/">Terms of Use</a> before participating.
            </p>
        </div>

        <!-- Modern Bottom Copyright & Legal Quick Links -->
        <div class="footer-bottom-modern">
            <div class="row align-items-center g-2">
                <div class="col-lg-5 text-center text-lg-start">
                    <p class="mb-0">&copy; <?= date('Y'); ?> Crown Asia LLC. All Rights Reserved.</p>
                </div>
                <div class="col-lg-4 text-center footer-bottom-links">
                    <a href="<?= $base_url ?>legal/terms-of-use/">Terms</a>
                    <span class="mx-2 text-white-50">&middot;</span>
                    <a href="<?= $base_url ?>legal/privacy-policy/">Privacy</a>
                    <span class="mx-2 text-white-50">&middot;</span>
                    <a href="<?= $base_url ?>legal/risk-disclosure/">Risks</a>
                    <span class="mx-2 text-white-50">&middot;</span>
                    <a href="<?= $base_url ?>legal/investor-eligibility/">Eligibility</a>
                </div>
                <div class="col-lg-3 text-center text-lg-end">
                    <p class="mb-0">Designed by Crown Asia IT Team</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Contact & Back to Top Buttons -->
<a class="whatsapp-float" href="mailto:info@crownasia.io" aria-label="Email Crown Asia">
    <i class="bi bi-envelope-fill"></i>
</a>
<button class="back-to-top" id="backToTop" aria-label="Back to top">
    <svg width="50" height="50" viewBox="0 0 50 50">
        <circle class="track" cx="25" cy="25" r="20"></circle>
        <circle class="bar" id="progressCircle" cx="25" cy="25" r="20"></circle>
    </svg>
    <i class="bi bi-chevron-up"></i>
</button>

<!-- Toast Notification -->
<div class="toast-msg" id="toastMsg"><i class="bi bi-check-circle-fill me-2" style="color:var(--green-bright);"></i>Thank you. Our team will contact you within 24 hours.</div>

<!-- Core Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="<?= $base_url ?>assets/js/swiper.min.js"></script>
<script src="<?= $base_url ?>assets/js/main.js"></script>
</body>

</html>