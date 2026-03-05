<?php
$page_title = 'Prodotti | Granfo Luce';
$page_description = 'Catalogo Granfo Luce: sospensioni, lampade da tavolo, terra, parete, soffitto e outdoor.';
?>
<!DOCTYPE html>
<html lang="it">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body style="overflow-x: hidden;">
    <div id="preloader">
        <img src="./images/brand/granfoluce-logo.png" alt="GRANFOLUCE" class="preloader-icon">
    </div>

<?php include 'includes/header-it.php'; ?>

    <section class="products-page-intro section-padding">
        <div class="container">
            <p class="breadcrumb products-breadcrumb"><a href="index.php">Home</a> / <span>Prodotti</span></p>
            <div class="products-intro-center">
                <h1>Le Collezioni</h1>
                <p>Vieni a trovarci in showroom per scoprire il nostro catalogo nella sua interezza.</p>
            </div>

            <a href="domus.php" class="products-domus-showcase" aria-label="Scopri la Collezione Domus">
                <div class="products-domus-gallery">
                    <img src="images/prodotti/domus-copertina.png" alt="Domus Cover" loading="eager">
                </div>
                <div class="products-domus-copy">
                    <h2>Domus: L'Arte del Vetro di Murano.</h2>
                    <p>Vetri ad incastro per combinazioni di luce infinite, creando atmosfere uniche dal 1970.</p>
                    <span class="products-domus-cta">SCOPRI LA COLLEZIONE COMPLETA</span>
                </div>
            </a>
        </div>
    </section>

    <section id="catalogo" class="products-section section-padding">
        <div class="container products-layout">
            <aside class="products-sidebar" aria-label="Filtri prodotti">
                <h3>FILTRI</h3>

                <div class="products-filter-group">
                    <h4>Categoria</h4>
                    <button class="filter-chip active" data-category="all">Tutti</button>
                    <button class="filter-chip" data-category="sospensione">Sospensione</button>
                    <button class="filter-chip" data-category="tavolo">Tavolo</button>
                    <button class="filter-chip" data-category="terra">Terra</button>
                    <button class="filter-chip" data-category="parete">Parete</button>
                    <button class="filter-chip" data-category="soffitto">Soffitto</button>
                    <button class="filter-chip" data-category="outdoor">Outdoor</button>
                </div>

                <div class="products-filter-group products-filter-static">
                    <h4>Materiale</h4>
                    <span>Vetro</span>
                    <span>Ottone Satinato</span>
                    <span>Cemento</span>
                    <span>Legno</span>
                </div>

                <div class="products-filter-group products-filter-static">
                    <h4>Stile</h4>
                    <span>Contemporaneo</span>
                    <span>Minimal</span>
                    <span>Classico</span>
                </div>
            </aside>

            <div class="products-main-content">
                <div class="products-grid-header">
                    <span id="products-counter">Mostrando 0 di 0 prodotti</span>
                </div>

                <div class="products-page-grid" id="products-grid">

                <!-- Sospensione -->
                <a href="prodotti-singoli/camilla-sospensione.php" class="product-item" data-category="sospensione" data-product="camilla">
                    <img src="images/prodotti/Sospensione/gabbia.webp" alt="Camilla Sospensione" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">SOSPENSIONE</span>
                        <h3>CAMILLA</h3>
                        <p class="product-price">€ 179,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('camilla');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/domus-sospensione.php" class="product-item" data-category="sospensione" data-product="domus">
                    <img src="images/prodotti/Sospensione/sospcoll.webp" alt="Domus Sospensione" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">SOSPENSIONE</span>
                        <h3>DOMUS</h3>
                        <p class="product-price">€ 199,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('domus');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/bolla-sospensione.php" class="product-item" data-category="sospensione" data-product="bolla">
                    <img src="images/prodotti/Sospensione/bollasospe.webp" alt="Bolla Sospensione" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">SOSPENSIONE</span>
                        <h3>BOLLA</h3>
                        <p class="product-price">€ 169,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('bolla');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/gabs-sospensione.php" class="product-item" data-category="sospensione" data-product="gabs">
                    <img src="images/prodotti/Sospensione/gabs.webp" alt="Gabs Sospensione" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">SOSPENSIONE</span>
                        <h3>GABS</h3>
                        <p class="product-price">€ 189,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('gabs');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/cono-sospensione.php" class="product-item" data-category="sospensione" data-product="cono">
                    <img src="images/prodotti/Sospensione/cono.webp" alt="Cono Sospensione" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">SOSPENSIONE</span>
                        <h3>CONO</h3>
                        <p class="product-price">€ 159,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('cono');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/sospensione-fungo.php" class="product-item" data-category="sospensione" data-product="fungo">
                    <img src="images/prodotti/Sospensione/fungonero.webp" alt="Fungo Sospensione" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">SOSPENSIONE</span>
                        <h3>FUNGO</h3>
                        <p class="product-price">€ 175,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('fungo');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/ofelia-sospensione.php" class="product-item" data-category="sospensione" data-product="ofelia-sosp">
                    <img src="images/prodotti/Sospensione/sospvetro.webp" alt="Ofelia Sospensione" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">SOSPENSIONE</span>
                        <h3>OFELIA</h3>
                        <p class="product-price">€ 209,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('ofelia-sosp');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/vino-sospensione.php" class="product-item" data-category="sospensione" data-product="vino">
                    <img src="images/prodotti/Sospensione/vino.webp" alt="Vino Sospensione" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">SOSPENSIONE</span>
                        <h3>VINO</h3>
                        <p class="product-price">€ 165,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('vino');">Scopri</button>
                    </div>
                </a>

                <!-- Tavolo -->
                <a href="prodotti-singoli/barcelo-tavolo.php" class="product-item" data-category="tavolo" data-product="barcelo">
                    <img src="images/prodotti/Tavolo/fungotavol.webp" alt="Barcelo Tavolo" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">TAVOLO</span>
                        <h3>BARCELO</h3>
                        <p class="product-price">€ 139,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('barcelo');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/tavolo-cubo.php" class="product-item" data-category="tavolo" data-product="cubo">
                    <img src="images/prodotti/Tavolo/tavolocubo.webp" alt="Cubo Tavolo" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">TAVOLO</span>
                        <h3>CUBO</h3>
                        <p class="product-price">€ 149,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('cubo');">Scopri</button>
                    </div>
                </a>

                <!-- Terra -->
                <a href="prodotti-singoli/terra-light.php" class="product-item" data-category="terra" data-product="terra">
                    <img src="images/prodotti/Terra/terralight.webp" alt="Terra Light" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">TERRA</span>
                        <h3>TERRA LIGHT</h3>
                        <p class="product-price">€ 249,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('terra');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/piantana-bolle.php" class="product-item" data-category="terra" data-product="bolle">
                    <img src="images/prodotti/Terra/piantana-bolle.webp" alt="Piantana Bolle" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">TERRA</span>
                        <h3>PIANTANA BOLLE</h3>
                        <p class="product-price">€ 279,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('bolle');">Scopri</button>
                    </div>
                </a>

                <!-- Parete -->
                <a href="prodotti-singoli/applique-v-parete.php" class="product-item" data-category="parete" data-product="appliquev">
                    <img src="images/prodotti/Parete/appliquev.webp" alt="Applique V" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">PARETE</span>
                        <h3>APPLIQUE V</h3>
                        <p class="product-price">€ 119,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('appliquev');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/barra-parete.php" class="product-item" data-category="parete" data-product="barra">
                    <img src="images/prodotti/Parete/barra.webp" alt="Barra Parete" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">PARETE</span>
                        <h3>BARRA</h3>
                        <p class="product-price">€ 129,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('barra');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/ellisse-parete.php" class="product-item" data-category="parete" data-product="ellisse">
                    <img src="images/prodotti/Parete/ellisse.webp" alt="Ellisse Parete" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">PARETE</span>
                        <h3>ELLISSE</h3>
                        <p class="product-price">€ 115,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('ellisse');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/ofelia-applique.php" class="product-item" data-category="parete" data-product="ofelia-app">
                    <img src="images/prodotti/Parete/tubino.webp" alt="Ofelia Applique" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">PARETE</span>
                        <h3>OFELIA</h3>
                        <p class="product-price">€ 139,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('ofelia-app');">Scopri</button>
                    </div>
                </a>

                <!-- Soffitto -->
                <a href="prodotti-singoli/sospensione-piatto.php" class="product-item" data-category="soffitto" data-product="piatto">
                    <img src="images/prodotti/Soffitto/plafonierab.webp" alt="Piatto Soffitto" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">SOFFITTO</span>
                        <h3>PLAFONIERA PIATTO</h3>
                        <p class="product-price">€ 99,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('piatto');">Scopri</button>
                    </div>
                </a>

                <a href="prodotti-singoli/sospensione-tubo.php" class="product-item" data-category="soffitto" data-product="tubo">
                    <img src="images/prodotti/Soffitto/plafonierac.webp" alt="Tubo Soffitto" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">SOFFITTO</span>
                        <h3>PLAFONIERA TUBO</h3>
                        <p class="product-price">€ 109,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('tubo');">Scopri</button>
                    </div>
                </a>

                <!-- Outdoor -->
                <a href="prodotti-singoli/garden-light-spot.php" class="product-item" data-category="outdoor" data-product="garden">
                    <img src="images/prodotti/copertina-prodotti.webp" alt="Garden Light" width="400" height="500" loading="lazy">
                    <div class="card-content">
                        <span class="card-category">OUTDOOR</span>
                        <h3>GARDEN SPOT</h3>
                        <p class="product-price">€ 89,00</p>
                        <button class="btn-discover" onclick="event.preventDefault(); event.stopPropagation(); openQuickPreview('garden');">Scopri</button>
                    </div>
                </a>

            </div>

        </div>
    </section>

    <!-- Mobile Sticky Bottom Bar -->
    <div class="sticky-bottom-bar">
        <button class="bottom-bar-btn" id="open-filters" aria-label="Filtri">
            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M3 12h12M3 20h6"></path>
            </svg>
            <span>FILTRI</span>
        </button>
    </div>

    <!-- Bottom Sheet - Filtri -->
    <div class="bottom-sheet" id="filters-sheet">
        <div class="bottom-sheet-backdrop" onclick="closeBottomSheet()"></div>
        <div class="bottom-sheet-content">
            <div class="bottom-sheet-handle"></div>
            <div class="bottom-sheet-header">
                <h3>Filtra per Categoria</h3>
                <button class="close-sheet" onclick="closeBottomSheet()" aria-label="Chiudi">✕</button>
            </div>
            <div class="bottom-sheet-body">
                <button class="filter-option active" data-filter="all">
                    <span class="filter-label">Tutti i Prodotti</span>
                    <span class="filter-check">✓</span>
                </button>
                <button class="filter-option" data-filter="sospensione">
                    <span class="filter-label">Sospensione</span>
                    <span class="filter-check">✓</span>
                </button>
                <button class="filter-option" data-filter="tavolo">
                    <span class="filter-label">Tavolo</span>
                    <span class="filter-check">✓</span>
                </button>
                <button class="filter-option" data-filter="terra">
                    <span class="filter-label">Terra</span>
                    <span class="filter-check">✓</span>
                </button>
                <button class="filter-option" data-filter="parete">
                    <span class="filter-label">Parete</span>
                    <span class="filter-check">✓</span>
                </button>
                <button class="filter-option" data-filter="soffitto">
                    <span class="filter-label">Soffitto</span>
                    <span class="filter-check">✓</span>
                </button>
                <button class="filter-option" data-filter="outdoor">
                    <span class="filter-label">Outdoor</span>
                    <span class="filter-check">✓</span>
                </button>
            </div>
            <div class="bottom-sheet-footer">
                <button class="sheet-action sheet-reset" id="filter-reset" type="button">Reset</button>
                <button class="sheet-action sheet-apply" id="filter-apply" type="button">Applica filtri</button>
            </div>
        </div>
    </div>

    <!-- Quick Preview Modal -->
    <div class="quick-preview-modal" id="quick-preview">
        <div class="quick-preview-backdrop" onclick="closeQuickPreview()"></div>
        <div class="quick-preview-content">
            <button class="close-preview" onclick="closeQuickPreview()" aria-label="Chiudi">✕</button>
            <div class="preview-image-container">
                <img id="preview-image" src="" alt="" width="400" height="500">
            </div>
            <div class="preview-details">
                <span class="preview-category" id="preview-category"></span>
                <h3 id="preview-title"></h3>
                <p id="preview-description"></p>
                <div class="preview-specs" id="preview-specs"></div>
                <a href="#" id="preview-link" class="btn btn-gold w-full">Vedi Dettagli Completi</a>
            </div>
        </div>
    </div>

    <script>
    // ====== MOBILE-NATIVE UX INTERACTIONS ======
    
    // 2. BOTTOM SHEET - Filtri
    const filtersSheet = document.getElementById('filters-sheet');
    const openFiltersBtn = document.getElementById('open-filters');
    const filterResetBtn = document.getElementById('filter-reset');
    const filterApplyBtn = document.getElementById('filter-apply');

    let currentFilter = 'all';
    let pendingFilter = 'all';

    function getFilterCount(category) {
        return Array.from(productItems).filter(item => category === 'all' || item.dataset.category === category).length;
    }

    function setPendingFilter(category) {
        pendingFilter = category;
        filterOptions.forEach(option => {
            option.classList.toggle('active', option.dataset.filter === pendingFilter);
        });
        if (filterApplyBtn) {
            filterApplyBtn.textContent = `Applica filtri (${getFilterCount(pendingFilter)})`;
        }
    }

    function openBottomSheet() {
        setPendingFilter(currentFilter);
        filtersSheet?.classList.add('active');
        document.body.style.overflow = 'hidden';
        document.body.style.overflowX = 'hidden';
    }

    function closeBottomSheet() {
        filtersSheet?.classList.remove('active');
        document.body.style.overflow = '';
        document.body.style.overflowX = 'hidden';
    }

    openFiltersBtn?.addEventListener('click', openBottomSheet);

    // 3. FILTER LOGIC - Desktop & Mobile
    const filterChips = document.querySelectorAll('.filter-chip');
    const filterOptions = document.querySelectorAll('.filter-option');
    const productItems = document.querySelectorAll('.product-item');
    const productsCounter = document.getElementById('products-counter');

    function updateProductsCounter() {
        if (!productsCounter) return;
        const visibleCount = Array.from(productItems).filter(item => item.style.display !== 'none').length;
        productsCounter.textContent = `Mostrando ${visibleCount} di ${productItems.length} prodotti`;
    }

    function applyFilter(category) {
        currentFilter = category;
        productItems.forEach(item => {
            if (category === 'all' || item.dataset.category === category) {
                item.style.display = '';
                setTimeout(() => item.classList.add('fade-in'), 10);
            } else {
                item.classList.remove('fade-in');
                setTimeout(() => item.style.display = 'none', 300);
            }
        });

        // Update active states
        filterChips.forEach(chip => {
            chip.classList.toggle('active', chip.dataset.category === category);
        });
        filterOptions.forEach(option => {
            option.classList.toggle('active', option.dataset.filter === category);
        });

        updateProductsCounter();
    }

    filterChips.forEach(chip => {
        chip.addEventListener('click', () => applyFilter(chip.dataset.category));
    });

    filterOptions.forEach(option => {
        option.addEventListener('click', () => {
            setPendingFilter(option.dataset.filter);
        });
    });

    filterResetBtn?.addEventListener('click', () => {
        setPendingFilter('all');
    });

    filterApplyBtn?.addEventListener('click', () => {
        applyFilter(pendingFilter);
        closeBottomSheet();
    });

    // 4. QUICK PREVIEW - Long press / Tap
    const productsData = {
        camilla: { 
            category: 'Sospensione', 
            title: 'CAMILLA', 
            image: 'images/prodotti/Sospensione/gabbia.webp',
            description: 'Sospensione in vetro soffiato Murano fumé, realizzata dai maestri artigiani veneziani.',
            specs: ['Vetro soffiato Murano', 'Colore fumé', 'Attacco E27', 'Dimmerabile'],
            link: 'prodotti-singoli/camilla-sospensione.php'
        },
        domus: {
            category: 'Sospensione',
            title: 'DOMUS',
            image: 'images/prodotti/Sospensione/sospcoll.webp',
            description: 'Sospensione in vetro pasta trasparente Murano, disponibile in vari colori.',
            specs: ['Vetro trasparente', 'Vari colori', 'Attacco E27', 'Design contract'],
            link: 'prodotti-singoli/domus-sospensione.php'
        },
        bolla: {
            category: 'Sospensione',
            title: 'BOLLA',
            image: 'images/prodotti/Sospensione/bollasospe.webp',
            description: 'Sospensione moderna con vetro soffiato a bolla, design contemporaneo.',
            specs: ['Vetro soffiato', 'Design moderno', 'Attacco E27', 'Luce diffusa'],
            link: 'prodotti-singoli/bolla-sospensione.php'
        },
        gabs: {
            category: 'Sospensione',
            title: 'GABS',
            image: 'images/prodotti/Sospensione/gabs.webp',
            description: 'Sospensione elegante con forme organiche, perfetta per ambienti sofisticati.',
            specs: ['Vetro artigianale', 'Design esclusivo', 'Attacco E27', 'Made in Italy'],
            link: 'prodotti-singoli/gabs-sospensione.php'
        },
        cono: {
            category: 'Sospensione',
            title: 'CONO',
            image: 'images/prodotti/Sospensione/cono.webp',
            description: 'Sospensione a forma conica, design essenziale e raffinato.',
            specs: ['Forma conica', 'Luce diretta', 'Attacco E27', 'Minimalista'],
            link: 'prodotti-singoli/cono-sospensione.php'
        },
        fungo: {
            category: 'Sospensione',
            title: 'FUNGO',
            image: 'images/prodotti/Sospensione/fungonero.webp',
            description: 'Sospensione iconica a forma di fungo, design vintage contemporaneo.',
            specs: ['Design iconico', 'Vetro nero', 'Attacco E27', 'Luce ambientale'],
            link: 'prodotti-singoli/sospensione-fungo.php'
        },
        'ofelia-sosp': {
            category: 'Sospensione',
            title: 'OFELIA',
            image: 'images/prodotti/Sospensione/sospvetro.webp',
            description: 'Sospensione raffinata con dettagli artigianali, eleganza senza tempo.',
            specs: ['Artigianato luxury', 'Vetro pregiato', 'Attacco E27', 'Esclusiva'],
            link: 'prodotti-singoli/ofelia-sospensione.php'
        },
        vino: {
            category: 'Sospensione',
            title: 'VINO',
            image: 'images/prodotti/Sospensione/vino.webp',
            description: 'Sospensione ispirata alle forme naturali, design organico.',
            specs: ['Forma organica', 'Vetro colore vino', 'Attacco E27', 'Design unico'],
            link: 'prodotti-singoli/vino-sospensione.php'
        },
        barcelo: {
            category: 'Tavolo',
            title: 'BARCELO',
            image: 'images/prodotti/Tavolo/fungotavol.webp',
            description: 'Lampada da tavolo elegante, perfetta per scrivania e comodino.',
            specs: ['Design raffinato', 'Base solida', 'Attacco E27', 'Dimmerabile'],
            link: 'prodotti-singoli/barcelo-tavolo.php'
        },
        cubo: {
            category: 'Tavolo',
            title: 'CUBO',
            image: 'images/prodotti/Tavolo/tavolocubo.webp',
            description: 'Lampada da tavolo geometrica, design minimalista contemporaneo.',
            specs: ['Forma cubica', 'Design minimal', 'Attacco E27', 'Compatta'],
            link: 'prodotti-singoli/tavolo-cubo.php'
        },
        terra: {
            category: 'Terra',
            title: 'TERRA LIGHT',
            image: 'images/prodotti/Terra/terralight.webp',
            description: 'Lampada da terra moderna, illuminazione d\'ambiente sofisticata.',
            specs: ['Illuminazione verticale', 'Base stabile', 'Attacco E27', 'Altezza regolabile'],
            link: 'prodotti-singoli/terra-light.php'
        },
        bolle: {
            category: 'Terra',
            title: 'PIANTANA BOLLE',
            image: 'images/prodotti/Terra/piantana-bolle.webp',
            description: 'Piantana scultorea con elementi a bolla, design artistico.',
            specs: ['Design scultoreo', 'Elementi multipli', 'Attacco E27', 'Statement piece'],
            link: 'prodotti-singoli/piantana-bolle.php'
        },
        appliquev: {
            category: 'Parete',
            title: 'APPLIQUE V',
            image: 'images/prodotti/Parete/appliquev.webp',
            description: 'Applique a parete con design a V, luce elegante e direzionale.',
            specs: ['Montaggio a parete', 'Design a V', 'Attacco E27', 'Luce direzionale'],
            link: 'prodotti-singoli/applique-v-parete.php'
        },
        barra: {
            category: 'Parete',
            title: 'BARRA',
            image: 'images/prodotti/Parete/barra.webp',
            description: 'Barra luminosa a parete, illuminazione lineare e moderna.',
            specs: ['Design lineare', 'Luce diffusa', 'LED integrato', 'Minimal'],
            link: 'prodotti-singoli/barra-parete.php'
        },
        ellisse: {
            category: 'Parete',
            title: 'ELLISSE',
            image: 'images/prodotti/Parete/ellisse.webp',
            description: 'Applique ellittica, forma morbida e luce avvolgente.',
            specs: ['Forma ellittica', 'Luce soft', 'Attacco E27', 'Design elegante'],
            link: 'prodotti-singoli/ellisse-parete.php'
        },
        'ofelia-app': {
            category: 'Parete',
            title: 'OFELIA',
            image: 'images/prodotti/Parete/tubino.webp',
            description: 'Applique raffinata Ofelia, eleganza a parete.',
            specs: ['Design luxury', 'Vetro pregiato', 'Attacco E27', 'Artigianale'],
            link: 'prodotti-singoli/ofelia-applique.php'
        },
        piatto: {
            category: 'Soffitto',
            title: 'PLAFONIERA PIATTO',
            image: 'images/prodotti/Soffitto/plafonierab.webp',
            description: 'Plafoniera piatta a soffitto, design discreto e funzionale.',
            specs: ['Montaggio a soffitto', 'Profilo basso', 'Attacco E27', 'Luce uniforme'],
            link: 'prodotti-singoli/sospensione-piatto.php'
        },
        tubo: {
            category: 'Soffitto',
            title: 'PLAFONIERA TUBO',
            image: 'images/prodotti/Soffitto/plafonierac.webp',
            description: 'Plafoniera tubolare, illuminazione lineare a soffitto.',
            specs: ['Design tubolare', 'Luce lineare', 'LED integrato', 'Moderna'],
            link: 'prodotti-singoli/sospensione-tubo.php'
        },
        garden: {
            category: 'Outdoor',
            title: 'GARDEN SPOT',
            image: 'images/prodotti/copertina-prodotti.webp',
            description: 'Faretto da giardino resistente, illuminazione outdoor di qualità.',
            specs: ['IP65 impermeabile', 'Per esterni', 'LED integrato', 'Resistente'],
            link: 'prodotti-singoli/garden-light-spot.php'
        }
    };

    function openQuickPreview(productId) {
        const product = productsData[productId];
        if (!product) return;

        document.getElementById('preview-category').textContent = product.category.toUpperCase();
        document.getElementById('preview-title').textContent = product.title;
        document.getElementById('preview-image').src = product.image;
        document.getElementById('preview-image').alt = product.title;
        document.getElementById('preview-description').textContent = product.description;
        document.getElementById('preview-link').href = product.link;

        const specsContainer = document.getElementById('preview-specs');
        specsContainer.innerHTML = product.specs.map(spec => 
            `<span class="spec-badge">${spec}</span>`
        ).join('');

        document.getElementById('quick-preview').classList.add('active');
        document.body.style.overflow = 'hidden';
        document.body.style.overflowX = 'hidden';
    }

    function closeQuickPreview() {
        document.getElementById('quick-preview').classList.remove('active');
        document.body.style.overflow = '';
        document.body.style.overflowX = 'hidden';
    }

    // 5. LAZY LOADING - Progressive image loading
    if ('IntersectionObserver' in window) {
        const lazyImages = document.querySelectorAll('img[loading="lazy"]');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('lazy-fade-in');
                    observer.unobserve(img);
                }
            });
        }, { rootMargin: '100px' });

        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // 6. URL PARAMETER HANDLING - Category from URL
    const urlParams = new URLSearchParams(window.location.search);
    const categoryParam = urlParams.get('categoria');
    if (categoryParam) {
        applyFilter(categoryParam);
    } else {
        updateProductsCounter();
    }
    </script>

<?php
$testo_cta = 'Vuoi una consulenza sul prodotto giusto?';
include 'includes/cta-section.php';
?>

<?php include 'includes/footer-it.php'; ?>
