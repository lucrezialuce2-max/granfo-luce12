<?php
$page_title = 'Progetti | Granfo Luce';
$page_description = 'Una selezione di progetti di illuminazione su misura realizzati da Granfo Luce.';
include 'includes/page-start-it.php';
?>

    <header class="page-header page-header-compact">
        <div class="page-header-bg"><img src="./images/hero/hero-progetti.webp" alt="Progetti"></div>
        <div class="container page-title">
            <p class="breadcrumb"><a href="index.php">Home</a> / <span>Progetti</span></p>
            <h1 style="text-align: center;">I Nostri Progetti</h1>
        </div>
    </header>

    <section class="section-padding" style="padding-top: 0.5rem;">
        <div class="container">
            <div class="section-header" style="text-align: center; display: block; margin-bottom: 0; padding-top: 0;">
            </div>

            <div class="projects-page-grid reveal">
                <article class="project-card" data-desc="Installazione monumentale in vetro soffiato blu e bianco per l'ingresso principale. Altezza complessiva: 6 metri.">
                    <img src="images/progetti/progetto-2.webp" alt="Scalinata Doha" loading="lazy">
                    <div class="card-content"><span class="card-tag">Doha ÔÇó Qatar</span><h3>Cascata di Vetro</h3></div>
                </article>

                <article class="project-card" data-desc="Progettazione completa per attico di lusso. Lampadari classici veneziani rivisitati con palette colori contemporanea.">
                    <img src="images/progetti/progetto-3.webp" alt="Penthouse Dubai" loading="lazy">
                    <div class="card-content"><span class="card-tag">Dubai ÔÇó EAU</span><h3>Penthouse Palm</h3></div>
                </article>

                <article class="project-card" data-desc="Sistema di illuminazione a cascata che attraversa tre piani della villa, creando un effetto pioggia di luce.">
                    <img src="images/progetti/progetto-4.webp" alt="Villa Mosca" loading="lazy">
                    <div class="card-content"><span class="card-tag">Mosca ÔÇó Russia</span><h3>Villa Imperial</h3></div>
                </article>

                <article class="project-card" data-desc="Lampadario centrale per salone di rappresentanza. Struttura in oro 24k e cristallo molato a mano.">
                    <img src="images/progetti/progetto-5.webp" alt="Villa Dubai" loading="lazy">
                    <div class="card-content"><span class="card-tag">Dubai ÔÇó EAU</span><h3>Salone delle Feste</h3></div>
                </article>

                <article class="project-card" data-desc="Illuminazione architetturale esterna e interna per residenza privata sul mare.">
                    <img src="images/progetti/progetto-6.webp" alt="Jeddah Villa" loading="lazy">
                    <div class="card-content"><span class="card-tag">Jeddah ÔÇó Arabia Saudita</span><h3>Villa sul Mare</h3></div>
                </article>

                <article class="project-card" data-desc="Dettaglio bagno padronale: applique su misura in vetro artistico per integrarsi con i marmi.">
                    <img src="images/progetti/progetto-7.webp" alt="Dettaglio Bagno" loading="lazy">
                    <div class="card-content"><span class="card-tag">Jeddah ÔÇó Arabia Saudita</span><h3>Dettagli di Luce</h3></div>
                </article>

                <article class="project-card" data-desc="Complesso residenziale di lusso: illuminazione aree comuni e appartamenti privati.">
                    <img src="images/progetti/progetto-8.webp" alt="Residence Doha" loading="lazy">
                    <div class="card-content"><span class="card-tag">Doha ÔÇó Qatar</span><h3>Royal Residence</h3></div>
                </article>

                <article class="project-card" data-desc="Cupola in vetro artistico retroilluminata per soffitto a cassettoni.">
                    <img src="images/progetti/progetto-1.webp" alt="Soffitto Decorato" loading="lazy">
                    <div class="card-content"><span class="card-tag">Verona ÔÇó Italia</span><h3>Cupola Artistica</h3></div>
                </article>
            </div>
        </div>
    </section>

    <section class="section-padding cta-progetto-mente" style="border-top: 1px solid rgba(255,255,255,0.05); text-align: center;">
        <div class="container reveal cta-progetto-mente">
            <h2 style="font-family: var(--font-serif); font-size: 2.5rem; color: white; margin-bottom: 1rem; text-align: center;">Hai un progetto in mente?</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; text-align: center;">
                Dalla consulenza tecnica alla realizzazione di pezzi unici. Parliamo di come illuminare i tuoi spazi.
            </p>
            <a href="contatti.php" class="btn btn-gold">Richiedi una consulenza</a>
        </div>
    </section>

    <div id="project-modal" class="project-modal" role="dialog" aria-modal="true" aria-hidden="true">
        <div class="project-modal-content" onclick="event.stopPropagation()">
            <button class="project-modal-close" onclick="closeProjectModal()" aria-label="Chiudi">&times;</button>
            <img id="modal-project-image" src="" alt="Dettaglio progetto" loading="lazy">
            <div class="project-modal-text">
                <span id="modal-project-tag" class="project-modal-tag"></span>
                <h3 id="modal-project-title"></h3>
                <p id="modal-project-desc"></p>
            </div>
            <div class="project-modal-hint">Tocca fuori per chiudere</div>
        </div>
    </div>


   
   

    <script>
        // ANIMAZIONE REVEAL
        document.addEventListener('DOMContentLoaded', () => {
            const revealElements = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add('active');
                });
            }, { threshold: 0.1 });
            revealElements.forEach(el => revealObserver.observe(el));
        });

        // MENU MOBILE
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

        // LOGICA MODALE
        function openProjectModal(img, tag, title, desc) {
            document.getElementById('modal-project-image').src = img;
            document.getElementById('modal-project-tag').textContent = tag;
            document.getElementById('modal-project-title').textContent = title;
            document.getElementById('modal-project-desc').textContent = desc || "Dettagli del progetto non disponibili.";
            
            document.getElementById('project-modal').classList.add('active');
            document.body.classList.add('no-scroll');
        }
        
        function closeProjectModal() {
            document.getElementById('project-modal').classList.remove('active');
            document.body.classList.remove('no-scroll');
        }
        
        // Collega i click sulle card
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.projects-page-grid .project-card').forEach(card => {
                card.addEventListener('click', function() {
                    const img = this.querySelector('img').src;
                    const tag = this.querySelector('.card-tag').textContent;
                    const title = this.querySelector('h3').textContent;
                    const desc = this.getAttribute('data-desc');
                    openProjectModal(img, tag, title, desc);
                });
            });
            
            // Chiudi cliccando fuori o con ESC
            document.getElementById('project-modal').addEventListener('click', (e) => {
                if (e.target.id === 'project-modal') closeProjectModal();
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeProjectModal();
            });
        });
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















