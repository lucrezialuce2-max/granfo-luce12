<?php
$page_title = 'Collezione Domus | Granfo Luce';
$page_description = 'Domus: la collezione esclusiva GRANFO in vetro di Murano.';
?>
<!DOCTYPE html>
<html lang="it">
<head>
<?php include 'includes/head.php'; ?>
<style>
/* Stile per il filtro attivo */
.swatch-item { cursor: pointer; transition: transform 0.2s; }
.swatch-item:hover { transform: scale(1.05); }
.swatch-item.active-filter .swatch-img { border: 2px solid var(--color-accent); transform: scale(1.1); }

/* Bottone reset filtro */
.reset-filter-btn {
    display: none;
    margin: 20px auto;
    background: transparent;
    border: 1px solid var(--color-text-muted);
    color: var(--color-text-muted);
    padding: 8px 16px;
    cursor: pointer;
    font-size: 0.9rem;
    transition: all 0.3s;
    border-radius: 4px;
}
.reset-filter-btn:hover {
    border-color: white;
    color: white;
}
</style>
</head>
<body>
    <div id="preloader">
        <img src="./images/brand/granfoluce-logo.png" alt="GRANFOLUCE" class="preloader-icon">
    </div>

<?php include 'includes/header-it.php'; ?>

    <header class="page-header">
        <div class="page-header-bg">
            <img src="images/hero/hero-novità.webp" alt="Domus" width="1600" height="600" loading="lazy">
        </div>
        <div class="container page-title">
            <p class="breadcrumb"><a href="index.php">Home</a> / <span>Domus</span></p>
            <h1>Collezione Domus</h1>
        </div>
    </header>

    <section class="section-padding" id="catalogo">
        <div class="container">
            <div class="section-header">
                <div>
                    <span class="eyebrow">Esclusiva</span>
                    <h2>L'eleganza del vetro di Murano</h2>
                </div>
            </div>

            <div class="description-section reveal" style="margin-bottom: 3rem; max-width: 800px;">
                <p style="line-height: 1.8; color: var(--color-text-muted); font-size: 1rem;">
                    <strong>La luce non è mai stata così materica.</strong> Domus nasce dall'incontro tra l'antica tradizione del vetro cotto e un design contemporaneo basato sull'incastro puro.
                </p>
                <p style="line-height: 1.8; color: var(--color-text-muted); font-size: 1rem; margin-top: 1.25rem;">
                    Ogni lampada è fatta di formelle in vetro artistico, lavorate a mano per esaltare texture e imperfezioni che rendono ogni pezzo unico. La vera magia è la libertà: <strong>le lastre non sono fisse</strong>, puoi comporle e ricomporle per creare volumi e giochi di colore sempre nuovi.
                </p>
            </div>

            <div class="products-page-grid-aurum reveal" id="product-grid" style="margin-bottom: 4rem;">
                <div class="product-item" data-category="tavolo" data-colors="arancio,smeraldo" data-price="medium" data-material="metallo" data-line="aurum" data-product-id="tavolo-lastra">
                    <button class="wishlist-btn" aria-label="Aggiungi alla wishlist" title="Aggiungi alla Wishlist">
                        <svg viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <img src="images/prodotti/Tavolo/vetri-lastra.webp" alt="Lampada da Tavolo Domus" loading="lazy" width="800" height="1000" onclick="openLightbox(this.src)" style="cursor: pointer;">
                    <div class="p-3">
                        <h3>Lampada da Tavolo Domus</h3>
                        <p style="color:var(--color-text-muted); font-size:0.9rem;">Vetro di Murano - Arancio e Smeraldo</p>
                    </div>
                </div>

                <div class="product-item" data-category="sospensione" data-colors="cristallo,lapislazzulo" data-price="high" data-material="metallo" data-line="aurum" data-product-id="sospensione-aurum">
                    <button class="wishlist-btn" aria-label="Aggiungi alla wishlist" title="Aggiungi alla Wishlist">
                        <svg viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                    <img src="images/prodotti/Sospensione/sospensione-aurum.webp" alt="Sospensione Domus" loading="lazy" width="800" height="1000" onclick="openLightbox(this.src)" style="cursor: pointer;">
                    <div class="p-3">
                        <h3>Sospensione Domus</h3>
                        <p style="color:var(--color-text-muted); font-size:0.9rem;">Vetro di Murano - Cristallo e Lapislazzulo</p>
                    </div>
                </div>
            </div>

            <div id="no-results" style="display:none; text-align:center; padding: 2rem; color: var(--color-text-muted);">
                <p>Nessun prodotto trovato con questo colore.</p>
                <button onclick="filterAurumByColor('All')" style="background:none; border:none; color:var(--color-accent); text-decoration:underline; cursor:pointer;">Mostra tutti</button>
            </div>

            <div style="text-align: center; margin: 3rem 0 2rem 0;">
                <p style="color: var(--color-text-muted); font-size: 1rem;">Clicca su un colore per filtrare i prodotti.</p>
            </div>

            <div class="color-swatches reveal" style="margin-bottom: 3rem;">
                <div class="color-swatches-grid">
                    <div class="swatch-item" id="filter-Cristallo" onclick="filterAurumByColor('Cristallo')">
                        <div class="swatch-img">
                            <img src="images/colori/cristallo.webp" alt="Cristallo" loading="lazy">
                        </div>
                        <span class="swatch-label">Cristallo</span>
                    </div>

                    <div class="swatch-item" id="filter-Ambra" onclick="filterAurumByColor('Ambra')">
                        <div class="swatch-img">
                            <img src="images/colori/ambra.webp" alt="Ambra" loading="lazy">
                        </div>
                        <span class="swatch-label">Ambra</span>
                    </div>

                    <div class="swatch-item" id="filter-Ametista" onclick="filterAurumByColor('Ametista')">
                        <div class="swatch-img">
                            <img src="images/colori/ametista.webp" alt="Ametista" loading="lazy">
                        </div>
                        <span class="swatch-label">Ametista</span>
                    </div>

                    <div class="swatch-item" id="filter-Arancio" onclick="filterAurumByColor('Arancio')">
                        <div class="swatch-img">
                            <img src="images/colori/arancio.webp" alt="Arancio" loading="lazy">
                        </div>
                        <span class="swatch-label">Arancio</span>
                    </div>

                    <div class="swatch-item" id="filter-Ossidiana" onclick="filterAurumByColor('Ossidiana')">
                        <div class="swatch-img">
                            <img src="images/colori/ossidiana.webp" alt="Ossidiana" loading="lazy">
                        </div>
                        <span class="swatch-label">Ossidiana</span>
                    </div>

                    <div class="swatch-item" id="filter-Smeraldo" onclick="filterAurumByColor('Smeraldo')">
                        <div class="swatch-img">
                            <img src="images/colori/smeraldo.webp" alt="Smeraldo" loading="lazy">
                        </div>
                        <span class="swatch-label">Smeraldo</span>
                    </div>

                    <div class="swatch-item" id="filter-Opaline" onclick="filterAurumByColor('Opaline')">
                        <div class="swatch-img">
                            <img src="images/colori/opalino.webp" alt="Opaline" loading="lazy">
                        </div>
                        <span class="swatch-label">Opaline</span>
                    </div>

                    <div class="swatch-item" id="filter-Cioccolato" onclick="filterAurumByColor('Cioccolato')">
                        <div class="swatch-img">
                            <img src="images/colori/cioccolato.webp" alt="Cioccolato" loading="lazy">
                        </div>
                        <span class="swatch-label">Cioccolato</span>
                    </div>

                    <div class="swatch-item" id="filter-Antracite" onclick="filterAurumByColor('Antracite')">
                        <div class="swatch-img">
                            <img src="images/colori/antracite.webp" alt="Antracite" loading="lazy">
                        </div>
                        <span class="swatch-label">Antracite</span>
                    </div>
                </div>
                <button id="reset-filter" class="reset-filter-btn" onclick="filterAurumByColor('All')">Mostra Tutti i Colori</button>
            </div>

            <div class="aurum-cta reveal" style="text-align: center; margin-bottom: 4rem; padding: 3rem 1.5rem; background: rgba(255,255,255,0.02); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
                <h3 style="font-family: var(--font-serif); font-size: 2rem; color: white; margin-bottom: 1rem;">Vuoi creare la tua combinazione unica?</h3>
                <p style="color: var(--color-text-muted); margin-bottom: 2rem;">Scegli i colori e le forme per il tuo progetto su misura.</p>
                <a href="contatti.php" class="btn btn-gold">Parla con il designer</a>
            </div>
        </div>
    </section>

    <!-- Lightbox -->
    <div id="lightbox" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.95); z-index:99999; align-items:center; justify-content:center;" onclick="closeLightbox()">
        <div class="lightbox-inner" style="display:flex; flex-direction:column; align-items:center; max-width:100%;" onclick="event.stopPropagation()">
            <img id="lightbox-img" src="" style="max-width:90%; max-height:80vh; object-fit:contain; border-radius:4px; box-shadow: 0 0 20px rgba(0,0,0,0.5);">
            <div id="lightbox-caption" style="margin-top:1rem; color:white; text-align:center; font-family:var(--font-sans);"></div>
        </div>
        <button style="position:absolute; top:20px; right:20px; background:none; border:none; color:white; font-size:2.5rem; cursor:pointer;" onclick="closeLightbox()">×</button>
    </div>

    <script>
    // LIGHTBOX (ZOOM)
    function openLightbox(src) {
        const lb = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');
        const caption = document.getElementById('lightbox-caption');

        img.src = src;

        // Trova didascalia (Title + Desc)
        const pageImg = Array.from(document.querySelectorAll('img')).find(i => i.src === src || i.src.includes(src));
        if (pageImg) {
            const card = pageImg.closest('.product-item');
            if (card) {
                const title = card.querySelector('h3')?.innerText || '';
                const desc = card.querySelector('p')?.innerText || '';
                caption.innerHTML = `<strong>${title}</strong><br>${desc}`;
            }
        }

        lb.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        const lb = document.getElementById('lightbox');
        lb.style.display = 'none';
        document.body.style.overflow = '';
    }

    // FILTRO COLORI FUNZIONANTE
    function filterAurumByColor(selectedColor) {
        const products = document.querySelectorAll('.product-item');
        const swatches = document.querySelectorAll('.swatch-item');
        const resetBtn = document.getElementById('reset-filter');
        const noResults = document.getElementById('no-results');
        let visibleCount = 0;

        // 1. Gestione stato visuale swatches (Active border)
        swatches.forEach(s => s.classList.remove('active-filter'));
        if (selectedColor !== 'All') {
            const activeSwatch = document.getElementById('filter-' + selectedColor);
            if(activeSwatch) activeSwatch.classList.add('active-filter');
            if(resetBtn) resetBtn.style.display = 'block';
        } else {
            if(resetBtn) resetBtn.style.display = 'none';
        }

        // 2. Filtro logico
        products.forEach(product => {
            const productColors = product.getAttribute('data-colors') ? product.getAttribute('data-colors').toLowerCase() : '';
            
            // Se è "All" o se il colore selezionato è incluso nella lista colori del prodotto
            if (selectedColor === 'All' || productColors.includes(selectedColor.toLowerCase())) {
                product.style.display = 'block';
                visibleCount++;
            } else {
                product.style.display = 'none';
            }
        });

        // 3. Gestione "Nessun risultato"
        if (visibleCount === 0) {
            if(noResults) noResults.style.display = 'block';
        } else {
            if(noResults) noResults.style.display = 'none';
        }
        
        // Scroll alla griglia
        document.getElementById('product-grid').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
    </script>

<?php
$testo_cta = 'Vuoi una lampada su misura?';
include 'includes/cta-section.php';
?>

<?php include 'includes/footer-it.php'; ?>

</body>
</html>
