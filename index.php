<?php
$page_title = "Crown Asia | Diversified Investment & Business Solutions";
$page_desc  = "Crown Asia LLC - A diversified United States investment and business company operating across eight strategic sectors.";
include_once __DIR__ . '/header.php';
?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <canvas id="particleCanvas"></canvas>
        <div class="hero-grid"></div>
        <div class="hero-blob one"></div>
        <div class="hero-blob two"></div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-badge"><span class="dot"></span> Established &amp; Trusted Since 2022</div>
                    <h1>Building Prosperity Through <span class="accent">Diversified Investments</span></h1>
                    <div class="typed-wrap"><span id="typedText"></span><span class="typed-cursor"></span></div>
                    <p class="lead-copy">Crown Asia LLC is a registered United States company driving sustainable growth across eight strategic industries including real estate, forex, technology, and agriculture.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#services" class="btn-green">Explore Our Sectors</a>
                        <a href="#about" class="btn-ghost">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-logo-wrap">
                        <div class="hero-logo-ring"></div>
                        <div class="hero-logo-glow"></div>
                        <img src="<?= $base_url ?>assets/images/logo.png" alt="Crown Asia logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-hint">
            <div class="mouse"></div>
            Scroll
        </div>
    </section>

    <!-- Eight Industries Marquee -->
    <div class="marquee" aria-hidden="true">
        <div class="marquee-track">
            <span class="marquee-item"><i class="bi bi-currency-exchange"></i>Forex Trading</span>
            <span class="marquee-item"><i class="bi bi-houses"></i>Real Estate Investment</span>
            <span class="marquee-item"><i class="bi bi-cpu"></i>Research &amp; Development</span>
            <span class="marquee-item"><i class="bi bi-broadcast"></i>Technology &amp; Communications</span>
            <span class="marquee-item"><i class="bi bi-arrow-left-right"></i>Trading, Import &amp; Export</span>
            <span class="marquee-item"><i class="bi bi-cart4"></i>E-Commerce</span>
            <span class="marquee-item"><i class="bi bi-gem"></i>Gems &amp; Gemstones</span>
            <span class="marquee-item"><i class="bi bi-tree"></i>Agriculture &amp; Plantation</span>
            <!-- Repeat for continuous loop -->
            <span class="marquee-item"><i class="bi bi-currency-exchange"></i>Forex Trading</span>
            <span class="marquee-item"><i class="bi bi-houses"></i>Real Estate Investment</span>
            <span class="marquee-item"><i class="bi bi-cpu"></i>Research &amp; Development</span>
            <span class="marquee-item"><i class="bi bi-broadcast"></i>Technology &amp; Communications</span>
            <span class="marquee-item"><i class="bi bi-arrow-left-right"></i>Trading, Import &amp; Export</span>
            <span class="marquee-item"><i class="bi bi-cart4"></i>E-Commerce</span>
            <span class="marquee-item"><i class="bi bi-gem"></i>Gems &amp; Gemstones</span>
            <span class="marquee-item"><i class="bi bi-tree"></i>Agriculture &amp; Plantation</span>
        </div>
    </div>

    <!-- About Section -->
    <section class="section section-white" id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="about-visual">
                        <div class="about-frame"></div>
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Crown Asia office">
                        <div class="since-badge">
                            <div class="yr">2022</div>
                            <div class="lb">Since</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="ps-lg-3">
                        <div class="section-label">Who We Are</div>
                        <div class="green-line"></div>
                        <h2 class="section-title">A Trusted American<br>Business Conglomerate</h2>
                        <p class="about-copy mb-3">
                            Crown Asia LLC is a legally registered and tax-compliant limited liability company based in Albuquerque, New Mexico, USA. With continuous operations, we have established ourselves as a diversified business group operating across eight high-growth sectors.
                        </p>
                        <p class="about-copy mb-4">
                            Our company is built on the principles of transparency, integrity, and sustainable growth. Every sector is backed by tangible assets, verified operations, and experienced management.
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="about-detail">
                                    <div class="about-icon"><i class="bi bi-shield-check"></i></div>
                                    <div>
                                        <h5>Legally Registered</h5>
                                        <p>Registered LLC in New Mexico, United States</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-detail">
                                    <div class="about-icon"><i class="bi bi-graph-up-arrow"></i></div>
                                    <div>
                                        <h5>Asset-Backed</h5>
                                        <p>Real business operations across 8 sectors</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-detail">
                                    <div class="about-icon"><i class="bi bi-people-fill"></i></div>
                                    <div>
                                        <h5>Growing Team</h5>
                                        <p>Professional management &amp; dedicated workforce</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-detail">
                                    <div class="about-icon"><i class="bi bi-globe-americas"></i></div>
                                    <div>
                                        <h5>Global Reach</h5>
                                        <p>Cross-border investments and strategic trading</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-md-3" data-aos="fade-up">
                    <div class="stat-box">
                        <div class="stat-num" data-count="3" data-suffix="+">0</div>
                        <div class="stat-label">Years Active</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="80">
                    <div class="stat-box">
                        <div class="stat-num" data-count="8" data-suffix="">0</div>
                        <div class="stat-label">Strategic Sectors</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="160">
                    <div class="stat-box">
                        <div class="stat-num" data-count="10" data-suffix="K+">0</div>
                        <div class="stat-label">Clients Served</div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="240">
                    <div class="stat-box">
                        <div class="stat-num" data-count="50" data-suffix="+">0</div>
                        <div class="stat-label">Team Members</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Eight Industries / Services Section -->
    <section class="section section-light" id="services">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-label">Our Business Sectors</div>
                <div class="green-line center"></div>
                <h2 class="section-title">Eight Strategic Industries</h2>
                <p class="section-subtitle mx-auto">We operate across eight diversified industries, each supported by real assets, experienced teams, and documented business operations.</p>
            </div>
            <div class="row g-4">
                <!-- 1. Forex Trading -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <article class="sector-card">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Forex Trading">
                        </div>
                        <div class="sector-body">
                            <div class="sector-icon"><i class="bi bi-currency-exchange"></i></div>
                            <h4>Forex Trading</h4>
                            <p>Disciplined foreign exchange operations, liquid market participation, and proactive risk and currency management strategies.</p>
                        </div>
                    </article>
                </div>
                <!-- 2. Real Estate Investment -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="60">
                    <article class="sector-card">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Real Estate Investment">
                        </div>
                        <div class="sector-body">
                            <div class="sector-icon"><i class="bi bi-houses"></i></div>
                            <h4>Real Estate</h4>
                            <p>Property development and land investments across priority markets including Dubai, Sri Lanka, Thailand, and the USA.</p>
                        </div>
                    </article>
                </div>
                <!-- 3. Research & Development -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                    <article class="sector-card">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Research and Development">
                        </div>
                        <div class="sector-body">
                            <div class="sector-icon"><i class="bi bi-cpu"></i></div>
                            <h4>Research &amp; Dev</h4>
                            <p>IoT, robotics, and applied AI initiatives, pioneering next-generation devices and high-impact commercial applications.</p>
                        </div>
                    </article>
                </div>
                <!-- 4. Technology & Communications -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="180">
                    <article class="sector-card">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Technology and Communications">
                        </div>
                        <div class="sector-body">
                            <div class="sector-icon"><i class="bi bi-broadcast"></i></div>
                            <h4>Technology &amp; Comms</h4>
                            <p>2030 focus on scalable cloud technology infrastructure, enterprise digital services, and robust telecom systems.</p>
                        </div>
                    </article>
                </div>
                <!-- 5. Trading, Import & Export -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <article class="sector-card">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Trading, Import &amp; Export">
                        </div>
                        <div class="sector-body">
                            <div class="sector-icon"><i class="bi bi-arrow-left-right"></i></div>
                            <h4>Import &amp; Export</h4>
                            <p>Sourcing and global distribution of agricultural commodities, spices, rubber, and high-quality apparel goods.</p>
                        </div>
                    </article>
                </div>
                <!-- 6. E-Commerce -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="60">
                    <article class="sector-card">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="E-Commerce">
                        </div>
                        <div class="sector-body">
                            <div class="sector-icon"><i class="bi bi-cart4"></i></div>
                            <h4>E-Commerce</h4>
                            <p>Digital commerce platforms, logistics management, modern fulfillment space, and smart secure warehousing solutions.</p>
                        </div>
                    </article>
                </div>
                <!-- 7. Gems & Gemstones -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="120">
                    <article class="sector-card">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Gems and Gemstones">
                        </div>
                        <div class="sector-body">
                            <div class="sector-icon"><i class="bi bi-gem"></i></div>
                            <h4>Gems &amp; Gemstones</h4>
                            <p>Ethical sourcing, grading, certification, and trading of precious and semi-precious stones across international markets.</p>
                        </div>
                    </article>
                </div>
                <!-- 8. Agriculture & Plantation -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="180">
                    <article class="sector-card">
                        <div class="sector-media">
                            <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Agriculture and Plantation">
                        </div>
                        <div class="sector-body">
                            <div class="sector-icon"><i class="bi bi-tree"></i></div>
                            <h4>Agriculture &amp; Plantation</h4>
                            <p>Large-scale agricultural crop production, sustainable plantation management, and development of value-added food products.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section section-dark" id="why-us">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-label">Why Choose Us</div>
                <div class="green-line center"></div>
                <h2 class="section-title">Built on Trust, Driven by Results</h2>
                <p class="section-subtitle mx-auto">Our commitment to transparency, legal compliance, and real business operations sets us apart.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="why-card">
                        <i class="bi bi-building-check"></i>
                        <div class="why-num">01</div>
                        <h5>Government Registered</h5>
                        <p>Fully registered as a Limited Liability Company in New Mexico, United States.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="why-card">
                        <i class="bi bi-box-seam"></i>
                        <div class="why-num">02</div>
                        <h5>Real Asset Backed</h5>
                        <p>Every business sector is supported by tangible assets, real operations, and documented financials.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="why-card">
                        <i class="bi bi-award"></i>
                        <div class="why-num">03</div>
                        <h5>Experienced Leadership</h5>
                        <p>Led by experienced directors with proven track records across multiple global industries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section class="cta-section">
        <div class="container" data-aos="zoom-in">
            <h2>Ready to <span>Grow Together?</span></h2>
            <p>Explore partnership opportunities and discover how Crown Asia can help your business reach new heights.</p>
            <a href="#contact" class="btn-green">Contact Us Today</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section section-light" id="contact">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="section-label">Get In Touch</div>
                <div class="green-line center"></div>
                <h2 class="section-title">Contact Us</h2>
                <p class="section-subtitle mx-auto">Have a question or want to explore business opportunities? We'd love to hear from you.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="contact-info-card">
                        <h3>Let's Talk</h3>
                        <p>Reach out to us for any enquiries about our business sectors, investment opportunities, or general information.</p>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <div>
                                <div class="label">Head Office</div>
                                <div class="value">10242 Coors Bypass Blvd. N.W.<br>Albuquerque, New Mexico 87114<br>United States</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="bi bi-envelope-fill"></i></div>
                            <div>
                                <div class="label">Email</div>
                                <div class="value"><a href="mailto:info@crownasia.io">info@crownasia.io</a></div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="bi bi-globe2"></i></div>
                            <div>
                                <div class="label">Website</div>
                                <div class="value"><a href="https://crownasia.io" target="_blank" rel="noopener">crownasia.io</a></div>
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
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-form-card">
                        <h4 class="mb-1">Send Us a Message</h4>
                        <p class="text-muted mb-4" style="font-size:14px;">Fill out the form below and our team will respond within 24 hours.</p>
                        <form id="contactForm" action="contact-handler.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="float-field">
                                        <input type="text" name="name" id="name" placeholder=" " required>
                                        <label for="name">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-field">
                                        <input type="tel" name="phone" id="phone" placeholder=" ">
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="float-field">
                                        <input type="email" name="email" id="email" placeholder=" " required>
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="float-field">
                                        <select name="subject" id="subject" required>
                                            <option value="" selected disabled></option>
                                            <option>General Enquiry</option>
                                            <option>Investment Opportunities</option>
                                            <option>Forex Trading</option>
                                            <option>Real Estate Investment</option>
                                            <option>Research &amp; Development</option>
                                            <option>Technology &amp; Communications</option>
                                            <option>Trading, Import &amp; Export</option>
                                            <option>E-Commerce</option>
                                            <option>Gems &amp; Gemstones</option>
                                            <option>Agriculture &amp; Plantation</option>
                                            <option>Other</option>
                                        </select>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="float-field">
                                        <textarea name="message" id="message" placeholder=" " required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-green w-100 text-center border-0" style="cursor:pointer;">
                                        <i class="bi bi-send me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="map-wrap">
                        <iframe src="https://maps.google.com/maps?q=10242%20Coors%20Bypass%20Blvd.%20N.W.,%20Albuquerque,%20NM%2087114&amp;z=16&amp;output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Crown Asia location"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/footer.php'; ?>
