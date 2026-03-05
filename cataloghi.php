<?php
$page_title = 'Cataloghi | Granfo Luce';
$page_description = 'Sfoglia i cataloghi Granfo Luce e scopri collezioni decorative e tecniche.';
include 'includes/page-start-it.php';
?>

    <header class="page-header catalog-page-header">
        <div class="page-header-bg">
            <img src="./images/cataloghi/tubs.webp" alt="Design della Luce" width="1600" height="600" loading="lazy">
        </div>
        <div class="container page-title">
            <p class="breadcrumb"><a href="index.php">Home</a> / <span>Cataloghi</span></p>
            <h1 style="text-align: center;">I nostri Cataloghi</h1>
            <p class="subtitle" style="margin-top: 1rem; color: #ccc; text-transform: none; letter-spacing: 0.05em; font-family: var(--font-sans); text-align: center;">
                Sfoglia le nostre creazioni e trova l'ispirazione per il tuo prossimo progetto.
            </p>
        </div>
    </header>

    <section class="section-padding bg-dark">
        <div class="container" style="max-width: 1240px;">
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; margin-bottom: 3rem;" class="catalogs-grid-responsive">
                
                <!-- Collezione Generale -->
                <div class="catalog-card-large reveal">
                    <img src="./images/cataloghi/furniture-catalogue.webp" alt="Collezione Generale 2025-2026" style="width: 100%; height: 380px; object-fit: cover; border-radius: 12px;">
                    <div style="padding: 1.4rem 1rem;">
                        <h3 style="font-family: var(--font-serif); font-size: 1.6rem; color: white; margin-bottom: 0.5rem;">Collezione Generale</h3>
                        <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">Una panoramica completa delle nostre soluzioni decorative e tecniche. L'essenza di Granfo Luce in un unico volume.</p>
                        <a href="files/furniture-catalogue-25-26.pdf" class="btn btn-gold" download style="display: inline-flex; align-items: center; gap: 0.5rem;">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path></svg>
                            Scarica il Catalogo
                        </a>
                    </div>
                </div>

                <!-- Collezione Venezia -->
                <div class="catalog-card-large reveal">
                    <img src="./images/cataloghi/products-venezia.webp" alt="Collezione Venezia" style="width: 100%; height: 380px; object-fit: cover; border-radius: 12px;">
                    <div style="padding: 1.4rem 1rem;">
                        <h3 style="font-family: var(--font-serif); font-size: 1.6rem; color: white; margin-bottom: 0.5rem;">Collezione Venezia</h3>
                        <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">L'eleganza del vetro e la tradizione artigiana reinterpretata in chiave moderna. Pezzi unici per ambienti esclusivi.</p>
                        <a href="files/products-venezia.pdf" class="btn btn-gold" download style="display: inline-flex; align-items: center; gap: 0.5rem;">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path></svg>
                            Scarica il Catalogo
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="architects-section section-padding">
        <div class="container center-text">
            <span class="eyebrow">Area Professionisti</span>
            <h2 style="margin-bottom: 1.5rem; color: white; font-family: var(--font-serif); font-size: 2.5rem; text-align: center;">Progetti la luce?</h2>
            <p style="color: var(--color-text-muted); max-width: 600px; margin: 0 auto 2rem auto;">
                Collaboriamo con architetti e lighting designer fornendo supporto tecnico, file 3D e realizzazioni su misura per contract e residenziale.
            </p>
            <a href="contatti.php" class="btn btn-gold">Parla con il nostro ufficio tecnico</a>
        </div>
    </section>

   

    <script>
        function toggleMenu() { document.getElementById('mobile-menu').classList.toggle('active'); document.body.classList.toggle('no-scroll'); }
        function toggleSearch() { const overlay = document.getElementById('search-overlay'); overlay.classList.toggle('active'); const input = overlay.querySelector('input'); if(overlay.classList.contains('active')) { input.value = ''; setTimeout(() => input.focus(), 100); } }
        const revealElements = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => { entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('active'); } }); }, { threshold: 0.1 });
        revealElements.forEach(el => revealObserver.observe(el));
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














