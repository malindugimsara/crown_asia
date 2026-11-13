<?php
// Base URL configuration (works seamlessly on both localhost subfolders and root domain)
if (!isset($base_url)) {
    $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    $base_url = rtrim($script_dir, '/') . '/';
}

$portal_login_url    = $portal_login_url ?? 'https://portal.crownasia.io/login';
$portal_register_url = $portal_register_url ?? 'https://portal.crownasia.io/register';
?>

<footer class="footer">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Brand & Company Overview -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-logo d-flex align-items-center gap-3 mb-3">
                    <img src="<?= $base_url ?>assets/images/logo.png" alt="Crown Asia">
                    <div class="brand-text">
                        <div class="name">CROWN ASIA</div>
                        <div class="sub">International</div>
                    </div>
                </div>
                <p class="small">A diversified United States investment and business company operating across eight strategic sectors. Registered, tax-compliant, and committed to transparency.</p>
                <div class="contact-social mt-3 pt-0 border-0">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links & Investor Resources -->
            <div class="col-lg-2 col-md-6 col-6">
                <h5>Platform</h5>
                <ul class="footer-links">
                    <li><a href="<?= $base_url ?>">Home</a></li>
                    <li><a href="<?= $base_url ?>investment-opportunities/">Opportunities</a></li>
                    <li><a href="<?= $base_url ?>how-it-works/">How It Works</a></li>
                    <li><a href="<?= $base_url ?>how-it-works/usdt-deposits-withdrawals/">USDT Guide</a></li>
                    <li><a href="<?= $base_url ?>about/">About Us</a></li>
                    <li><a href="<?= $base_url ?>blog/">Blog &amp; Insights</a></li>
                    <li><a href="<?= $base_url ?>faq/">Investor FAQs</a></li>
                    <li><a href="<?= $base_url ?>contact/">Contact Us</a></li>
                </ul>
            </div>

            <!-- Eight Industries -->
            <div class="col-lg-3 col-md-6 col-6">
                <h5>Our Industries</h5>
                <ul class="footer-links">
                    <li><a href="<?= $base_url ?>industries/forex-trading/">Forex Trading</a></li>
                    <li><a href="<?= $base_url ?>industries/real-estate/">Real Estate</a></li>
                    <li><a href="<?= $base_url ?>industries/research-and-development/">Research &amp; Development</a></li>
                    <li><a href="<?= $base_url ?>industries/technology-and-communications/">Tech &amp; Communications</a></li>
                    <li><a href="<?= $base_url ?>industries/import-export/">Import &amp; Export</a></li>
                    <li><a href="<?= $base_url ?>industries/ecommerce/">E-Commerce</a></li>
                    <li><a href="<?= $base_url ?>industries/gems-and-gemstones/">Gems &amp; Gemstones</a></li>
                    <li><a href="<?= $base_url ?>industries/agriculture-and-plantation/">Agriculture &amp; Plantation</a></li>
                </ul>
            </div>

            <!-- Legal & Contact Info -->
            <div class="col-lg-4 col-md-6">
                <h5>Legal &amp; Disclosures</h5>
                <ul class="footer-links mb-4">
                    <li><a href="<?= $base_url ?>legal/">Legal Overview &amp; Disclosures</a></li>
                    <li><a href="<?= $base_url ?>legal/terms-of-use/">Terms of Use</a></li>
                    <li><a href="<?= $base_url ?>legal/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="<?= $base_url ?>legal/risk-disclosure/">Risk Disclosure</a></li>
                    <li><a href="<?= $base_url ?>legal/investor-eligibility/">Investor Eligibility</a></li>
                </ul>

                <h5>Head Office</h5>
                <p class="small mb-2"><i class="bi bi-geo-alt-fill me-2" style="color:var(--green-bright);"></i>10242 Coors Bypass Blvd. N.W., Albuquerque, NM 87114, USA</p>
                <p class="small mb-2"><i class="bi bi-envelope-fill me-2" style="color:var(--green-bright);"></i><a href="mailto:info@crownasia.io">info@crownasia.io</a></p>
                <p class="small mb-0"><i class="bi bi-globe2 me-2" style="color:var(--green-bright);"></i><a href="https://crownasia.io" target="_blank" rel="noopener">crownasia.io</a></p>
            </div>
        </div>

        <!-- Risk Notice Bar (Investment Specification) -->
        <div class="mt-4 pt-3 border-top border-secondary border-opacity-25">
            <p class="small text-white-50 mb-0" style="font-size: 12px; line-height: 1.6;">
                <strong>Risk Notice:</strong> Investments involve financial risk, including potential loss of principal. Past performance is not indicative of future results. Please review our <a href="<?= $base_url ?>legal/risk-disclosure/" class="text-decoration-underline text-white-50">Risk Disclosure</a> and <a href="<?= $base_url ?>legal/investor-eligibility/" class="text-decoration-underline text-white-50">Investor Eligibility</a> guidelines before participating.
            </p>
        </div>

        <div class="footer-bottom mt-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?= date('Y'); ?> Crown Asia LLC. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
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
<script src="<?= $base_url ?>assets/js/main.js"></script>
</body>
</html>
