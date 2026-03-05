
    <footer>
        <div class="footer-content">
            <div class="footer-col">
                <h4>Granfo Luce</h4>
                <p>Artisans of light since 1970.<br>
                Via Ponte S. Pancrazio, 8<br>
                37133 Verona (VR), Italy<br>
                <strong>Tel.</strong> +39 045 528541<br>
                <strong>Email:</strong> <a href="mailto:info@granfoluce.it">info@granfoluce.it</a>
                </p>
                <div class="social-links">
                    <a href="https://www.facebook.com/Granfoluce.lampadari/" target="_blank" rel="noopener" aria-label="Facebook">f</a>
                    <a href="https://www.instagram.com/granfoluce/" target="_blank" rel="noopener" aria-label="Instagram">📷</a>
                    <a href="https://it.pinterest.com/granfolucefb/" target="_blank" rel="noopener" aria-label="Pinterest">P</a>
                </div>
            </div>
            <div class="footer-col">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="catalogs.php">Catalogs</a></li>
                    <li><a href="projects.php">Projects</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>More</h5>
                <ul>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                    <li><a href="privacy-policy.php">Privacy</a></li>
                </ul>
            </div>
            <div class="footer-col newsletter">
                <h5>Newsletter</h5>
                <p>Subscribe to updates about our collections and projects.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email" required>
                    <button type="submit" class="btn-small">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Granfo Illuminazione S.N.C. All rights reserved. | <a href="privacy-policy.php">Privacy Policy</a></p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        function toggleMenu() { document.getElementById('mobile-menu').classList.toggle('active'); document.body.classList.toggle('no-scroll'); }
        function toggleSearch() { 
            const overlay = document.getElementById('search-overlay');
            overlay.classList.toggle('active');
            const input = overlay.querySelector('input');
            if(overlay.classList.contains('active')) {
                input.value = '';
                setTimeout(() => input.focus(), 100);
            }
        }

        // NAVBAR SCROLL BEHAVIOR
        (function() {
            const nav = document.querySelector('.navbar');
            if (!nav) return;

            const getScrollY = () => window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
            let lastY = getScrollY();
            let ticking = false;

            function applyNavbarState(y) {
                const menuOpen = document.body.classList.contains('no-scroll');

                if (menuOpen) {
                    nav.classList.remove('nav-hidden');
                    nav.classList.remove('nav-transparent');
                    nav.classList.add('nav-blur');
                    return;
                }

                if (y < 50) {
                    nav.classList.remove('nav-blur');
                    nav.classList.remove('nav-hidden');
                    nav.classList.add('nav-transparent');
                } else {
                    nav.classList.remove('nav-transparent');
                    nav.classList.add('nav-blur');

                    if (y > lastY + 4 && y > 90) {
                        nav.classList.add('nav-hidden');
                    } else if (y < lastY - 4 || y <= 10) {
                        nav.classList.remove('nav-hidden');
                    }
                }

                lastY = y;
            }

            function updateNavbar() {
                if (ticking) return;
                ticking = true;
                requestAnimationFrame(() => {
                    applyNavbarState(getScrollY());
                    ticking = false;
                });
            }

            window.addEventListener('scroll', updateNavbar, { passive: true });
            window.addEventListener('wheel', updateNavbar, { passive: true });
            window.addEventListener('touchmove', updateNavbar, { passive: true });
            window.addEventListener('mousemove', () => {
                if (!document.body.classList.contains('no-scroll')) {
                    nav.classList.remove('nav-hidden');
                }
            }, { passive: true });

            setInterval(() => applyNavbarState(getScrollY()), 200);
            applyNavbarState(getScrollY());
        })();

        document.addEventListener('DOMContentLoaded', function() {
            // Magnetic hover effect on buttons
            const setupMagnetic = (element) => {
                element.addEventListener('mousemove', (e) => {
                    const rect = element.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    element.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
                });
                element.addEventListener('mouseleave', () => {
                    element.style.transform = 'translate(0, 0)';
                });
            };
            document.querySelectorAll('.btn, .btn-gold, .btn-small').forEach(setupMagnetic);
        });

        // Progressive image loading
        const images = document.querySelectorAll('img[loading="lazy"]');
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.src = entry.target.dataset.src || entry.target.src;
                        imageObserver.unobserve(entry.target);
                    }
                });
            });
            images.forEach((image) => imageObserver.observe(image));
        }

        // Parallax scroll effect
        const setupParallax = () => {
            const parallaxElements = document.querySelectorAll('[data-parallax]');
            if (parallaxElements.length === 0) return;
            
            const handleParallax = () => {
                parallaxElements.forEach((element) => {
                    const offsetTop = element.offsetTop;
                    const scrollTop = window.scrollY;
                    const distance = scrollTop - offsetTop;
                    if (Math.abs(distance) < window.innerHeight) {
                        element.style.transform = `translateY(${distance * 0.5}px)`;
                    }
                });
            };
            
            window.addEventListener('scroll', handleParallax, { passive: true });
        };
        setupParallax();

        // Mobile viewport height fix
        const vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
        window.addEventListener('resize', () => {
            const vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        });
    </script>
    <script src="/luxury.js"></script>
</body>
</html>
