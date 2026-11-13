/**
 * Crown Asia - Main JavaScript Application
 */

(function () {
    'use strict';

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // 1. Preloader & AOS Initialization
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.classList.add('hide');
        }
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: reduceMotion ? 0 : 800,
                once: true,
                offset: 80
            });
        }
    });

    // 2. Navigation & Scroll Indicators
    const navbar = document.getElementById('mainNav');
    const progressBar = document.getElementById('scrollProgress');
    const backToTop = document.getElementById('backToTop');
    const progressCircle = document.getElementById('progressCircle');
    const circumference = 126;

    function onScroll() {
        const scrollY = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const pct = docHeight > 0 ? scrollY / docHeight : 0;

        if (navbar) {
            navbar.classList.toggle('scrolled', scrollY > 40);
        }
        if (progressBar) {
            progressBar.style.width = (pct * 100) + '%';
        }
        if (backToTop) {
            backToTop.classList.toggle('show', scrollY > 400);
        }
        if (progressCircle) {
            progressCircle.style.strokeDashoffset = String(circumference * (1 - pct));
        }

        // Section active highlighting if on page with section IDs
        const sections = document.querySelectorAll('section[id]');
        if (sections.length > 0) {
            let current = '';
            sections.forEach(section => {
                if (scrollY >= section.offsetTop - 140) {
                    current = section.getAttribute('id');
                }
            });
            if (current) {
                document.querySelectorAll('.navbar .nav-link').forEach(link => {
                    const href = link.getAttribute('href');
                    if (href && (href === '#' + current || href.endsWith('#' + current))) {
                        link.classList.add('active');
                    } else if (href && href.startsWith('#')) {
                        link.classList.remove('active');
                    }
                });
            }
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // 3. Mobile Navigation Auto-Collapse
    document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)').forEach(link => {
        link.addEventListener('click', () => {
            const navCollapse = document.getElementById('navMenu');
            if (navCollapse && navCollapse.classList.contains('show') && typeof bootstrap !== 'undefined') {
                bootstrap.Collapse.getOrCreateInstance(navCollapse).hide();
            }
        });
    });

    // 4. Back to Top Click
    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
        });
    }

    // 5. Hero Typewriter Animation
    const typedEl = document.getElementById('typedText');
    if (typedEl) {
        const words = [
            'Real Estate Investment',
            'Forex Trading',
            'Research & Development',
            'Technology & Communications',
            'Trading, Import & Export',
            'E-Commerce',
            'Gems & Gemstones',
            'Agriculture & Plantation'
        ];
        let wordIndex = 0;
        let charIndex = 0;
        let deleting = false;

        function typeLoop() {
            const word = words[wordIndex];
            typedEl.textContent = word.slice(0, charIndex);

            if (!deleting && charIndex < word.length) {
                charIndex++;
                setTimeout(typeLoop, 90);
            } else if (!deleting && charIndex === word.length) {
                deleting = true;
                setTimeout(typeLoop, 1400);
            } else if (deleting && charIndex > 0) {
                charIndex--;
                setTimeout(typeLoop, 45);
            } else {
                deleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                setTimeout(typeLoop, 300);
            }
        }

        if (reduceMotion) {
            typedEl.textContent = words.join('  /  ');
        } else {
            typeLoop();
        }
    }

    // 6. Particle Canvas Effect
    const canvas = document.getElementById('particleCanvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let particles = [];

        function sizeCanvas() {
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
        }

        function makeParticles() {
            const count = Math.min(70, Math.floor((canvas.width * canvas.height) / 18000));
            particles = Array.from({ length: count }, () => ({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                vx: (Math.random() - 0.5) * 0.45,
                vy: (Math.random() - 0.5) * 0.45,
                r: Math.random() * 1.8 + 0.6
            }));
        }

        function drawParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = 'rgba(29, 185, 84, 0.7)';
            particles.forEach((p, i) => {
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
                if (p.y < 0 || p.y > canvas.height) p.vy *= -1;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fill();

                for (let j = i + 1; j < particles.length; j++) {
                    const q = particles[j];
                    const dx = p.x - q.x;
                    const dy = p.y - q.y;
                    const dist = Math.hypot(dx, dy);
                    if (dist < 120) {
                        ctx.strokeStyle = `rgba(29, 185, 84, ${0.18 * (1 - dist / 120)})`;
                        ctx.lineWidth = 1;
                        ctx.beginPath();
                        ctx.moveTo(p.x, p.y);
                        ctx.lineTo(q.x, q.y);
                        ctx.stroke();
                    }
                }
            });
            if (!reduceMotion) requestAnimationFrame(drawParticles);
        }

        sizeCanvas();
        makeParticles();
        if (!reduceMotion) drawParticles();

        window.addEventListener('resize', () => {
            sizeCanvas();
            makeParticles();
        });
    }

    // 7. Animated Statistics Counters
    const counters = document.querySelectorAll('.stat-num');
    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                const el = entry.target;
                const target = parseInt(el.dataset.count, 10);
                const suffix = el.dataset.suffix || '';
                if (reduceMotion) {
                    el.textContent = target + suffix;
                    counterObserver.unobserve(el);
                    return;
                }
                const start = performance.now();
                const duration = 1400;
                function tick(now) {
                    const t = Math.min(1, (now - start) / duration);
                    const eased = 1 - Math.pow(1 - t, 3);
                    el.textContent = Math.round(target * eased) + suffix;
                    if (t < 1) requestAnimationFrame(tick);
                }
                requestAnimationFrame(tick);
                counterObserver.unobserve(el);
            });
        }, { threshold: 0.4 });

        counters.forEach(el => counterObserver.observe(el));
    }

    // 8. Sector Cards 3D Tilt Effect
    const sectorCards = document.querySelectorAll('.sector-card');
    if (sectorCards.length > 0) {
        sectorCards.forEach(card => {
            card.addEventListener('mousemove', e => {
                if (reduceMotion || window.innerWidth < 992) return;
                const r = card.getBoundingClientRect();
                const x = (e.clientX - r.left) / r.width - 0.5;
                const y = (e.clientY - r.top) / r.height - 0.5;
                card.style.transform = `translateY(-10px) rotateX(${(-y * 8).toFixed(2)}deg) rotateY(${(x * 8).toFixed(2)}deg)`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });
        });
    }

    // 9. Contact Form Handling & Toast Feedback
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const toast = document.getElementById('toastMsg');
            if (toast) {
                toast.classList.add('show');
                setTimeout(() => toast.classList.remove('show'), 3800);
            }
            this.reset();
        });
    }
})();

