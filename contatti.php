<?php
$page_title = 'Contatti | Granfo Luce';
$page_description = 'Contatta Granfo Luce: showroom, orari e richiesta consulenza.';
include 'includes/page-start-it.php';
?>

    <header class="page-header page-header-compact">
        <div class="page-header-bg"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2000" alt="Showroom Granfo"></div>
        <div class="container page-title">
            <p class="breadcrumb"><a href="index.php">Home</a> / <span>Contatti</span></p>
            <h1>Parliamo di Luce</h1>
        </div>
    </header>


    <section class="section-padding">
        <div class="container">
            <div class="split-layout" style="align-items: flex-start;">
                
                <div class="contact-info reveal">
                    <span class="eyebrow">Vieni a trovarci</span>
                    <h2 style="font-family: var(--font-serif); margin-bottom: 2rem; color: white; font-size: 2.5rem;">Sede & Showroom</h2>
                    
                    <ul class="info-list">
                        <li>
                            <div class="icon-box"><svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                            <div>
                                <strong style="color: white; font-size: 1.1rem;">Indirizzo</strong><br>
                                <span style="color: var(--color-text-muted);">Via Ponte S. Pancrazio 8/a<br>37133 Verona (VR), Italia</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box"><svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>
                            <div>
                                <strong style="color: white; font-size: 1.1rem;">Email</strong><br>
                                <a href="mailto:info@granfoluce.it" style="color: var(--color-accent); text-decoration: underline;">info@granfoluce.it</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box"><svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></div>
                            <div>
                                <strong style="color: white; font-size: 1.1rem;">Telefono</strong><br>
                                <a href="tel:+39045528541" style="color: var(--color-text-muted);">+39 045 528 541</a><br>
                                <a href="tel:+393385978788" style="color: var(--color-text-muted);">+39 338 597 8788</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box"><svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                            <div>
                                <strong style="color: white; font-size: 1.1rem;">Orari Apertura</strong><br>
                                <span style="color: var(--color-text-muted);">Lun:</span> 15:30 - 19:30<br>
                                <span style="color: var(--color-text-muted);">Mar-Sab:</span> 09:00 - 12:30 / 15:30 - 19:30
                            </div>
                        </li>
                    </ul>

                    <div class="map-container" style="margin-top: 2.5rem; border-radius: 12px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); height: 300px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.309787950764!2d11.018265376676356!3d45.4433989710733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477f5f0259695555%3A0x66c0d453667520e0!2sVia%20Ponte%20S.%20Pancrazio%2C%208a%2C%2037133%20Verona%20VR!5e0!3m2!1sit!2sit!4v1703000000000!5m2!1sit!2sit" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="contact-form-wrapper reveal">
                    <?php include 'includes/contact-form.php'; ?>
                </div>

            </div>
        </div>
    </section>

  

    

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const revealElements = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add('active');
                });
            }, { threshold: 0.1 });
            revealElements.forEach(el => revealObserver.observe(el));
        });

        function toggleMenu() { 
            document.getElementById('mobile-menu').classList.toggle('active'); 
            document.body.classList.toggle('no-scroll'); 
        }
        function toggleSearch() { 
            const overlay = document.getElementById('search-overlay'); 
            overlay.classList.toggle('active');
            const input = overlay.querySelector('input');
            if(overlay.classList.contains('active')) {
                input.value = '';
                setTimeout(() => input.focus(), 100);
            }
        }
    </script>
    <script>
        const hidePreloader = () => {
            const preloader = document.getElementById('preloader');
            if (preloader && !preloader.classList.contains('loaded')) {
                preloader.classList.add('loaded');
            }
        };
        window.addEventListener('load', () => {
            requestAnimationFrame(() => {
                setTimeout(hidePreloader, 80);
            });
        });
    </script>
    <script src="luxury.js"></script>
<?php include 'includes/footer-it.php'; ?>
