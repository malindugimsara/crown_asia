<?php
require_once dirname(__DIR__) . '/config.php';

$page_title    = "Frequently Asked Questions (FAQ) | Investor Knowledge | Crown Asia LLC";
$page_desc     = "Find authoritative answers to common investor questions regarding Crown Asia LLC corporate registration, USDT funding rails, offering terms, and risk governance.";
$page_keywords = "Crown Asia FAQ, USDT investment FAQ, New Mexico LLC verification, investor eligibility, withdrawal policy, risk management";
$canonical_url = "https://crownasia.io/faq/";
include_once ROOT_PATH . 'header.php';

// FAQ Items Data
$faqs = [
    [
        'category' => 'Corporate & Legal',
        'q' => 'Is Crown Asia LLC a legally registered company in the United States?',
        'a' => 'Yes. Crown Asia LLC is a formally incorporated Limited Liability Company registered in the State of New Mexico, USA (Business ID / Secretary of State Filing). Our principal corporate mailing address is located at 10242 Coors Bypass Blvd. N.W., Albuquerque, NM 87114. Investors can independently verify our legal charter through the official New Mexico Secretary of State Business Registry portal.'
    ],
    [
        'category' => 'Corporate & Legal',
        'q' => 'What business model does Crown Asia operate?',
        'a' => 'Crown Asia operates as a diversified commercial holding company managing active operations across eight strategic business sectors: Foreign Exchange (Forex) Trading, Real Estate Investments, Research & Development, Technology & Cloud Infrastructure, Import-Export Logistics, E-Commerce, Gems & Precious Minerals, and Agriculture & Plantation. We do not operate as an unhedged retail brokerage; our capital deployment is structured into asset-backed commercial divisions.'
    ],
    [
        'category' => 'USDT & Funding',
        'q' => 'Why does Crown Asia use USDT for investor funding and distributions?',
        'a' => 'Tether (USDT) operates on high-throughput blockchain networks (TRC20, ERC20, and BEP20) pegged 1:1 to the US Dollar. By utilizing USDT, we eliminate multi-day correspondent banking delays, international wire friction, excessive FX conversion fees, and weekend bank lockouts. Investors benefit from borderless, cryptographic transaction verification and sub-minute settlement finality.'
    ],
    [
        'category' => 'USDT & Funding',
        'q' => 'How long do USDT deposits and withdrawals take to process?',
        'a' => 'USDT deposits are verified on-chain and typically reflect in your Investor Portal within 10 to 30 minutes following standard blockchain network confirmations (12 to 20 block confirmations). Withdrawal requests undergo multi-factor internal authorization and compliance review and are typically disbursed within 24 to 48 business hours directly to your whitelisted blockchain wallet address.'
    ],
    [
        'category' => 'Offerings & Returns',
        'q' => 'What is the minimum investment requirement to participate?',
        'a' => 'Minimum participation thresholds vary by specific offering and sector. Entry-level opportunities in our Agriculture and E-Commerce tranches begin at 500 USDT, while Institutional Quantitative Forex and Priority Real Estate Pools typically carry minimums of 1,000 to 2,500 USDT. Full details are published transparently on each offering memorandum.'
    ],
    [
        'category' => 'Offerings & Returns',
        'q' => 'How are profit distributions calculated and paid out?',
        'a' => 'Distributions are determined by the specific terms of each participation note. Fixed-yield and asset-backed notes generally disburse distributions on a monthly or quarterly basis directly in USDT to your portal wallet. You may choose to withdraw your distributions to your personal external wallet or reallocate them toward new open offerings.'
    ],
    [
        'category' => 'Verification & KYC',
        'q' => 'Who is eligible to invest with Crown Asia?',
        'a' => 'Participation is open to eligible individual and institutional investors globally who meet our regulatory onboarding requirements. In compliance with international anti-money laundering (AML) protocols, participants must complete identity verification (KYC), provide proof of address, and satisfy jurisdiction eligibility checks. We cannot onboard residents of FATF blacklisted nations or sanctioned jurisdictions.'
    ],
    [
        'category' => 'Verification & KYC',
        'q' => 'What documents are required for KYC verification?',
        'a' => 'Individual investors are required to submit a valid government-issued photo ID (Passport or National Identity Card) and a proof of address document (utility bill or bank statement issued within the last 90 days). Corporate accounts require Certificate of Incorporation, Memorandum and Articles of Association, and UBO (Ultimate Beneficial Owner) disclosures.'
    ],
    [
        'category' => 'Risk & Security',
        'q' => 'How does Crown Asia protect investor capital against market risk?',
        'a' => 'We deploy a rigorous capital preservation framework. In our trading operations (Forex and Commodities), strict automated stop-loss limits (capped at &le; 2% daily risk), segregated liquidity accounts, and algorithmic hedging are strictly enforced. In hard asset divisions (Real Estate and Agriculture), principal is collateralized by verified title deeds, physical commodities in insured vaults, or binding B2B export purchase agreements.'
    ],
    [
        'category' => 'Risk & Security',
        'q' => 'Are investor portal accounts protected by two-factor authentication (2FA)?',
        'a' => 'Yes. Account security is paramount. The Crown Asia Investor Portal requires mandatory Two-Factor Authentication (2FA via Google Authenticator or SMS/Email OTP) for all sensitive operations, including withdrawal address whitelisting, password updates, and capital disbursement confirmations.'
    ]
];
?>

    <!-- 1. Hero Section -->
    <section class="inner-hero">
        <div class="strategy-grid-bg"></div>
        <div class="strategy-glow-blob top-right"></div>
        <div class="strategy-glow-blob bottom-left"></div>

        <div class="container inner-hero-content">
            <div class="row align-items-center g-5">
                <div class="col-lg-8" data-aos="fade-right">
                    <nav class="breadcrumb-custom mb-3" aria-label="Breadcrumb">
                        <a href="<?= $base_url ?>">Home</a>
                        <span class="separator"><i class="bi bi-chevron-right"></i></span>
                        <span class="active">Frequently Asked Questions</span>
                    </nav>

                    <span class="topic-badge-pill dark mb-3 d-inline-flex align-items-center">
                        <i class="bi bi-patch-question-fill me-2 text-success"></i>INVESTOR KNOWLEDGE BASE
                    </span>

                    <h1 class="inner-hero-title">
                        Frequently Asked <br><span class="accent">Questions &amp; Answers</span>
                    </h1>
                    <p class="inner-hero-lead mb-4">
                        Review comprehensive answers to common inquiries regarding our New Mexico LLC charter, multi-network USDT settlement, minimum thresholds, and risk governance.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#faq-accordion" class="btn-green">Explore FAQs <i class="bi bi-arrow-down ms-1"></i></a>
                        <a href="<?= $base_url ?>contact/" class="btn-ghost">Contact Support Desk <i class="bi bi-envelope ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left">
                    <div class="hero-summary-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="topic-badge-pill dark mb-0">HELP DESK</span>
                            <span class="small text-success fw-semibold"><i class="bi bi-check-circle-fill me-1"></i> Live</span>
                        </div>
                        <h4 class="text-white mb-3" style="font-size: 20px;">Support Metrics</h4>

                        <div class="hero-summary-row">
                            <span class="text-white-50">KYC Verification</span>
                            <span class="text-success fw-semibold">&lt; 12 Hours</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">USDT Confirmation</span>
                            <span class="text-white fw-semibold">10 – 30 Minutes</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">Support Availability</span>
                            <span class="text-white fw-semibold">24/5 Mon – Fri</span>
                        </div>
                        <div class="hero-summary-row">
                            <span class="text-white-50">Jurisdiction</span>
                            <span class="text-success fw-semibold">New Mexico, USA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FAQ Main Section -->
    <section class="section section-light" id="faq-accordion">
        <div class="container position-relative" style="z-index: 2;">

            <!-- Search & Filter Controls -->
            <div class="row justify-content-center mb-5" data-aos="fade-up">
                <div class="col-lg-8">
                    <div class="bg-white p-3 p-md-4 rounded-4 shadow-sm border mb-4">
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-0 ps-2"><i class="bi bi-search text-success fs-5"></i></span>
                            <input type="text" id="faqSearchInput" class="form-control border-0 shadow-none" placeholder="Search keywords (e.g. USDT, KYC, withdrawal, risk, registration)..." style="font-size: 15px;">
                        </div>
                    </div>

                    <!-- Category Pills -->
                    <div class="blog-filter-bar justify-content-center mb-0">
                        <button type="button" class="blog-filter-pill active" data-filter="all">All Questions</button>
                        <button type="button" class="blog-filter-pill" data-filter="Corporate & Legal">Corporate &amp; Legal</button>
                        <button type="button" class="blog-filter-pill" data-filter="USDT & Funding">USDT &amp; Funding</button>
                        <button type="button" class="blog-filter-pill" data-filter="Offerings & Returns">Offerings &amp; Returns</button>
                        <button type="button" class="blog-filter-pill" data-filter="Verification & KYC">KYC &amp; Eligibility</button>
                        <button type="button" class="blog-filter-pill" data-filter="Risk & Security">Risk &amp; Security</button>
                    </div>
                </div>
            </div>

            <!-- Accordion List -->
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion custom-accordion" id="faqMainAccordion">
                        <?php foreach ($faqs as $idx => $faq): ?>
                            <div class="accordion-item faq-item-card mb-3 border rounded-3 overflow-hidden shadow-sm" data-category="<?= htmlspecialchars($faq['category']) ?>" data-aos="fade-up">
                                <h2 class="accordion-header" id="heading-<?= $idx ?>">
                                    <button class="accordion-button <?= $idx !== 0 ? 'collapsed' : '' ?> fw-semibold py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $idx ?>" aria-expanded="<?= $idx === 0 ? 'true' : 'false' ?>" aria-controls="collapse-<?= $idx ?>" style="font-size: 16px;">
                                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill me-3 px-2 py-1" style="font-size: 11px;">
                                            <?= htmlspecialchars($faq['category']) ?>
                                        </span>
                                        <?= htmlspecialchars($faq['q']) ?>
                                    </button>
                                </h2>
                                <div id="collapse-<?= $idx ?>" class="accordion-collapse collapse <?= $idx === 0 ? 'show' : '' ?>" aria-labelledby="heading-<?= $idx ?>" data-bs-parent="#faqMainAccordion">
                                    <div class="accordion-body px-4 py-3 text-secondary" style="font-size: 14.5px; line-height: 1.75; background: #FFFFFF;">
                                        <?= htmlspecialchars($faq['a']) ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- No Results Notice -->
                    <div id="faqNoResults" class="text-center py-5 d-none">
                        <i class="bi bi-question-circle text-muted" style="font-size: 48px;"></i>
                        <h4 class="mt-3 text-dark">No Matching Questions Found</h4>
                        <p class="text-muted">Try different keywords or contact our 24/5 investor support desk directly.</p>
                        <a href="<?= $base_url ?>contact/" class="btn-green mt-2">Contact Support Desk</a>
                    </div>
                </div>
            </div>

            <!-- Bottom Support CTA Card -->
            <div class="row justify-content-center mt-5" data-aos="fade-up">
                <div class="col-lg-9">
                    <div class="p-4 p-md-5 rounded-4 text-center" style="background: linear-gradient(135deg, #060B08 0%, #0E1812 100%); border: 1px solid rgba(29, 185, 84, 0.35); box-shadow: 0 15px 40px rgba(0,0,0,0.3);">
                        <span class="topic-badge-pill dark mb-3">STILL HAVE QUESTIONS?</span>
                        <h3 class="text-white mb-2" style="font-family: 'Cinzel', serif; font-size: 26px;">Speak With Our Investor Relations Desk</h3>
                        <p class="text-white-50 mx-auto mb-4" style="max-width: 580px; font-size: 14px;">
                            Our corporate compliance officers and treasury specialists are available to review tailored allocation inquiries, offering memoranda, and institutional partnership agreements.
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="<?= $base_url ?>contact/" class="btn-green">Inquire Online <i class="bi bi-envelope ms-1"></i></a>
                            <a href="<?= $portal_register_url ?>" target="_blank" rel="noopener" class="btn-ghost">Create Portal Account <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- FAQ JSON-LD Structured Data Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        <?php 
        $json_faqs = [];
        foreach ($faqs as $f) {
            $json_faqs[] = json_encode([
                "@type" => "Question",
                "name" => $f['q'],
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => $f['a']
                ]
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        }
        echo implode(",\n        ", $json_faqs);
        ?>
      ]
    }
    </script>

    <!-- Filter & Search Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('faqSearchInput');
        const filterPills = document.querySelectorAll('.blog-filter-pill');
        const faqItems    = document.querySelectorAll('.faq-item-card');
        const noResults   = document.getElementById('faqNoResults');

        let currentCategory = 'all';

        function filterList() {
            const query = (searchInput.value || '').toLowerCase().trim();
            let visibleCount = 0;

            faqItems.forEach(item => {
                const cat = item.getAttribute('data-category');
                const text = item.innerText.toLowerCase();

                const matchesCat = (currentCategory === 'all' || cat === currentCategory);
                const matchesQuery = (!query || text.includes(query));

                if (matchesCat && matchesQuery) {
                    item.style.display = '';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            if (visibleCount === 0) {
                noResults.classList.remove('d-none');
            } else {
                noResults.classList.add('d-none');
            }
        }

        filterPills.forEach(pill => {
            pill.addEventListener('click', function () {
                filterPills.forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                currentCategory = this.getAttribute('data-filter');
                filterList();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', filterList);
        }
    });
    </script>

<?php include_once ROOT_PATH . 'footer.php'; ?>
