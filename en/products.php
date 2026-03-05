<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chandeliers and Lighting Systems Collection | Granfo Luce Verona</title>
    <meta name="description" content="Granfo Luce (Granfo Illuminazione S.N.C.) in Verona, Via Ponte S. Pancrazio 8. Experts in handcrafted chandeliers, architectural lighting, and bespoke projects since 1970.">
    <link rel="stylesheet" href="../style.css?v=3.9">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Granfo Luce",
      "legalName": "Granfo Illuminazione S.N.C.",
      "url": "https://granfoluce.com",
      "telephone": "+39 045 528541",
      "Email": "granfoluce@hotmail.it",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Via Ponte S. Pancrazio 8",
        "addressLocality": "Verona",
        "postalCode": "37133",
        "addressCountry": "IT"
      },
      "image": "https://granfoluce.com/images/brand/granfoluce-logo.png",
      "description": "Granfo Luce - Experts in handcrafted chandeliers, architectural lighting, and bespoke projects since 1970 in Verona",
      "sameAs": [
        "https://www.facebook.com/Granfoluce.lampadari/",
        "https://www.instagram.com/granfoluce/",
        "https://it.pinterest.com/granfolucefb/"
      ]
    }
    </script>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <meta property="og:description" content="Artisans of light since 1970. Discover our collections in Murano glass and bespoke design.">
<meta property="og:image" content="https://granfoluce.com/images/hero/hero-main-graphic.webp"> <meta property="og:url" content="https://granfoluce.com">
<meta property="og:type" content="website">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Segoe+UI:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Preloader critico per evitare flash iniziale */
        #preloader { position: fixed; inset: 0; display: flex; align-items: center; justify-content: center; background: #0e1713; z-index: 99999; opacity: 1; visibility: visible; transition: opacity 0.3s ease, visibility 0.3s ease; }
        #preloader.loaded { opacity: 0; visibility: hidden; pointer-events: none; }
        .preloader-icon { width: 120px; height: auto; animation: breathe 2s infinite ease-in-out; }
        @keyframes breathe { 0%, 100% { transform: scale(1); opacity: 1; } 50% { transform: scale(1.05); opacity: 0.7; } }
        
        /* Prevent layout shift */
        body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Playfair Display', Georgia, serif; }

        /* Mobile above-the-fold: header più basso su Products */
        @media (max-width: 768px) {
            .page-header { height: 32vh; min-height: 200px; padding-top: 64px; }
        }
    </style>
</head>
<body>
    <div id="preloader">
        <img src="../images/brand/granfoluce-logo.png" alt="GRANFOLUCE" class="preloader-icon">
    </div>

    <nav class="navbar">
        <div class="container nav-container">
            <a href="index.php" class="logo"><img src="../images/brand/granfoluce-logo.png" alt="GRANFOLUCE" style="height: 50px;"></a>
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="products.php" class="active">Products</a>
                <a href="catalogs.php">Catalogs</a>
                <a href="projects.php">Projects</a>
                <a href="blog.php">Blog</a>
                <a href="about.php">About</a>
                <a href="contacts.php">Contacts</a>
            </div>
            <div class="nav-actions">
                <button class="icon-btn" onclick="toggleSearch()" aria-label="Search"><svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                <div class="lang-selector"><a href="../prodotti.php" class="lang-item">IT</a><a href="#" class="lang-item active">EN</a></div>
                <button class="menu-toggle" onclick="toggleMenu()" aria-label="Menu"><span></span><span></span><span></span></button>
            </div>
        </div>
        <div id="mobile-menu" class="mobile-menu">
            <a href="index.php">Home</a>
            <a href="products.php">Products</a>
            <a href="catalogs.php">Catalogs</a>
            <a href="projects.php">Projects</a>
            <a href="blog.php">Blog</a>
            <a href="about.php">About</a>
            <a href="contacts.php">Contacts</a>
        </div>
    </nav>

    <div id="search-overlay" class="search-overlay">
        <button class="close-search" onclick="toggleSearch()" aria-label="Close search">✕</button>
        <div class="search-container"><input type="text" placeholder="Search..."></div>
    </div>

    <header class="page-header">
        <div class="page-header-bg"><img loading="lazy" decoding="async" src="../images/prodotti/copertina-prodotti.webp" alt="Products Granfo Luce"></div>
        <div class="container page-title">
            <p class="breadcrumb" style="text-align: center;"><a href="index.php">Home</a> / <span>Products</span></p>
            <h1 style="text-align: center;">Collections</h1>
            <p style="text-align: center; font-size: 0.95rem; color: var(--color-text-muted); margin-top: 0.4rem;">Visit our showroom to discover our full catalog.</p>
            
            <div class="filter-wrapper-mobile">
                <button class="filter-button-mobile" onclick="toggleFilters()">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M7 12h10M11 18h2"/></svg>
                    Filter e Ordina
                </button>
            </div>
        
            <div class="filters-bar-desktop">
                <select class="filter-dropdown" onchange="filterProducts(this.value, null)">
                    <option value="all">Category</option>
                    <option value="Suspension">Suspension</option>
                    <option value="Table">Table</option>
                    <option value="Ceiling">Ceiling</option>
                    <option value="Wall">Wall</option>
                    <option value="Floor">Floor</option>
                    <option value="Vases & Decor">Oggettistica</option>
                    <option value="outdoor">Outdoor</option>
                </select>
                
                <select class="filter-dropdown">
                    <option value="">Material</option>
                    <option value="vetro">Glass</option>
                    <option value="Metal">Metal</option>
                    <option value="Gold">Gold</option>
                </select>
                
                <select class="filter-dropdown">
                    <option value="">Style</option>
                    <option value="Modern">Modern</option>
                    <option value="Classic">Classic</option>
                    <option value="Contemporary">Contemporary</option>
                </select>
            </div>
        </div>
        </div>
    </header>

    <section class="section-padding" id="catalogo" style="padding-top: 2rem;">
    <div class="container">

        <div style="display:flex; justify-content:center; margin-bottom:0.75rem;">
            <button id="wishlist-chip" class="chip" style="display:none;" hidden onclick="document.getElementById('wishlist')?.scrollIntoView({ behavior: 'smooth' });">Go to wishlist</button>
        </div>

        <p class="results-count" id="results-count" style="margin-bottom: 1rem;"></p>

        <div class="products-page-grid" id="product-grid">
            <!-- BANNER DOMUS: Integrato nella griglia, occupa 2 colonne -->
            <div class="domus-banner-grid">
                <div class="domus-banner">
                    <div class="domus-image-side">
                        <img src="../images/prodotti/domus-copertina.png" alt="Domus Collection">
                    </div>
                    <div class="domus-text-side">
                        <span class="eyebrow">New for 2026</span>
                        <h2>Domus Collection</h2>
                        <p>Vetri ad incastro per combinazioni di luce infinite.</p>
                        <a href="domus.php" class="btn btn-dark">Discover the collection</a>
                    </div>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="low" data-material="vetro" data-product-id="fungo-black" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/fungonero.webp" alt="Fungo Suspension Lamp" style="cursor: pointer;">
                <div class="card-content">
                    <h3>LumiNero Suspension</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Wall" data-price="medium" data-material="Gold" data-product-id="barra-Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Parete/barra.webp" alt="Wall Barra" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Barra Wall</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

             <div class="product-item" data-category="Suspension" data-price="high" data-material="vetro" data-product-id="ofelia-Suspension" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/sospvetro.webp" alt="OFELIA Suspension in Blown glass" style="cursor: pointer;">
                <div class="card-content">
                    <h3>OFELIA</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="garden-light-spot" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/tubo.webp" alt="Tube Suspension" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Spot Suspension</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="camilla-Suspension" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/sospcoll.webp" alt="Suspension Collana" style="cursor: pointer;">
                <div class="card-content">
                    <h3>CAMILLA</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>
            
             <div class="product-item" data-category="Suspension" data-price="high" data-material="Metal" data-line="aurum" data-product-id="domus-Suspension" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist" title="Aggiungi alla Wishlist">
                    <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/sospensione-aurum.webp" alt="Suspension Domus" style="cursor: pointer;">
                <div class="card-content">
                    <h3>DOMUS</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;">Domus Collection</p>
                </div>
            </div>

            <div class="product-item" data-category="Table" data-price="medium" data-material="Metal" data-product-id="Table-cubo" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Tavolo/tavolocubo.webp" alt="Table Cubo" style="cursor: pointer;">
                <div class="card-content">
                    <h3>BARCELÓ</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Table" data-price="medium" data-material="Metal" data-line="aurum" data-product-id="barcelo-Table"  data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Tavolo/vetri-lastra.webp" alt="Table Lastra" style="cursor: pointer;">
                <div class="card-content">
                    <h3>BARCELÓ Table</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;">Domus Collection</p>
                </div>
            </div>

            <div class="product-item" data-category="Floor" data-price="medium" data-material="Metal" data-product-id="Floor-light" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Terra/terralight.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Floor Light</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>
            <div class="product-item" data-category="Floor" data-price="medium" data-material="Metal" data-product-id="piantana-bolle" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Terra/piantana-bolle.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Piantana Bolle</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Wall" data-price="medium" data-material="Metal" data-product-id="ellisse-Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Parete/ellisse.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Ellisse</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>
            <div class="product-item" data-category="Wall" data-price="medium" data-material="Metal" data-product-id="applique-v-Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Parete/appliquev.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Applique V</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="cono-Suspension" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/cono.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Cono</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="gabs-Suspension" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/gabs.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Gabs</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="bolla-Suspension" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/bollasospe.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Bolla Suspension</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="Suspension-fungo" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/sospensione-fungo.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Suspension Fungo</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="Suspension-piatto" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/sospepiatpal.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Suspension Piatto</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="Suspension-tubo" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/sospensione tubo.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Tube Suspension</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="vino-Suspension" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/vino.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Vino Suspension</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/swarovski.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Suspension Swarovski</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/gabbia.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Gabbia</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Wall" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Parete/gangs.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Gangs</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Suspension" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Sospensione/barravetro.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Glass Bar</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Wall" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Parete/3bt.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>3BT</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Wall" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Parete/tubogiga.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Giant Tube</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Ceiling" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img src="../images/prodotti/Soffitto/plafonierab.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Plafoniera B</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;"></p>
                </div>
            </div>

            <div class="product-item" data-category="Ceiling" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img src="../images/prodotti/Soffitto/plafonierac.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Plafoniera C</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;">-</p>
                </div>
            </div>

            <div class="product-item" data-category="Table" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Tavolo/Tabletubo.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Table Tubo</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;">-</p>
                </div>
            </div>

            <div class="product-item" data-category="Table" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Tavolo/fungotavol.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Table Fungo</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;">-</p>
                </div>
            </div>

            <div class="product-item" data-category="Wall" data-price="medium" data-material="Metal" data-product-id="Wall" data-tags="tecnico" data-note="Note: For more information and variants contact us.">
                <button class="wishlist-btn" aria-label="Aggiungi alla wishlist"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                <img loading="lazy" decoding="async" src="../images/prodotti/Parete/padella.webp" alt="Floor Light" style="cursor: pointer;">
                <div class="card-content">
                    <h3>Padella</h3>
                    <p style="color:var(--color-text-muted); font-size:0.9rem;">-</p>
                </div>
            </div>



        </div>
    </div>
</section>

<div class="filter-overlay" id="filter-overlay" onclick="toggleFilters()"></div>
<div class="filter-sheet" id="filter-sheet">
    <div class="filter-header">
        <h3>Filter Products</h3>
        <button class="close-filter" onclick="toggleFilters()">✕</button>
    </div>
    <div class="filter-content">
        <div class="filter-group">
            <div class="filter-group-header">
                <h4>Category</h4>
            </div>
            <div class="filter-chips">
                <label class="filter-chip"><input type="checkbox" value="Suspension" onchange="applyAdvancedFilters()"><span>Suspension</span></label>
                <label class="filter-chip"><input type="checkbox" value="Table" onchange="applyAdvancedFilters()"><span>Table</span></label>
                <label class="filter-chip"><input type="checkbox" value="Ceiling" onchange="applyAdvancedFilters()"><span>Ceiling</span></label>
                <label class="filter-chip"><input type="checkbox" value="Wall" onchange="applyAdvancedFilters()"><span>Wall</span></label>
                <label class="filter-chip"><input type="checkbox" value="Floor" onchange="applyAdvancedFilters()"><span>Floor</span></label>
                <label class="filter-chip"><input type="checkbox" value="Vases & Decor" onchange="applyAdvancedFilters()"><span>Vases & Decor</span></label>
                <label class="filter-chip"><input type="checkbox" value="outdoor" onchange="applyAdvancedFilters()"><span>Outdoor</span></label>
            </div>
        </div>
        <div class="filter-group">
            <div class="filter-group-header">
                <h4>Material</h4>
            </div>
            <div class="filter-chips">
                <label class="filter-chip"><input type="checkbox" value="vetro" onchange="applyAdvancedFilters()"><span>Blown glass</span></label>
                <label class="filter-chip"><input type="checkbox" value="Metal" onchange="applyAdvancedFilters()"><span>Metal</span></label>
                <label class="filter-chip"><input type="checkbox" value="Gold" onchange="applyAdvancedFilters()"><span>Finitura Gold</span></label>
            </div>
        </div>
        <div class="filter-group">
            <div class="filter-group-header">
                <h4>Style</h4>
            </div>
            <div class="filter-chips">
                <label class="filter-chip"><input type="checkbox" value="Modern" onchange="applyAdvancedFilters()"><span>Modern</span></label>
                <label class="filter-chip"><input type="checkbox" value="Classic" onchange="applyAdvancedFilters()"><span>Classic</span></label>
                <label class="filter-chip"><input type="checkbox" value="Contemporary" onchange="applyAdvancedFilters()"><span>Contemporary</span></label>
            </div>
        </div>
    </div>
    <div class="filter-footer">
        <button class="btn btn-gold w-full filter-apply" onclick="applyAdvancedFilters(); toggleFilters()">Apply filters</button>
        <button class="btn filter-reset" onclick="resetFilters()">Reset</button>
    </div>
</div>

    <section class="section-padding" id="wishlist" style="display:none; padding-top:2rem;">
        <div class="container">
            <div class="section-header">
                <div><span class="eyebrow">Favorites</span><h2>Your Wishlist</h2></div>
            </div>
            <div class="wishlist-actions" style="display:flex; gap:0.75rem; flex-wrap:wrap; margin-bottom:1rem;">
                <button class="btn btn-gold" onclick="sendWishlist('whatsapp')" style="padding:0.8rem 1.4rem;">Send via WhatsApp</button>
                <button class="btn btn-outline" onclick="sendWishlist('mail')" style="padding:0.8rem 1.4rem;">Send via Email</button>
            </div>
            <div class="products-page-grid" id="wishlist-grid"></div>
            <p class="results-count" id="wishlist-empty" style="margin-top:1rem;">No products in wishlist.</p>
        </div>
    </section>

   
  <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-col brand-col">
                <a href="index.php" class="footer-logo"><img src="../images/brand/granfoluce-logo.png" alt="GRANFOLUCE" style="height: 60px;"></a>
                <p class="copyright">&copy; 2025 GRANFO ILLUMINAZIONE S.N.C.<br>All Rights Reserved.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/Granfoluce.lampadari/?locale=it_IT" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg></a>
                    <a href="https://www.instagram.com/granfoluce/" aria-label="Instagram"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path></svg></a>
                    <a href="https://it.pinterest.com/granfolucefb/" aria-label="Pinterest"><svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.399.165-1.487-.69-2.435-2.844-2.435-4.576 0-3.719 2.703-7.149 7.808-7.149 4.105 0 7.292 2.925 7.292 6.829 0 4.075-2.57 7.356-6.138 7.356-1.2 0-2.324-.623-2.707-1.36l-.738 2.803c-.266 1.015-.99 2.278-1.477 3.05 1.11.343 2.296.529 3.518.529 6.618 0 11.996-5.383 11.996-12.004C24.013 5.367 18.636 0 12.017 0z"/></svg></a>
                    <a href="https://www.youtube.com/@granfoluce3774/shorts" aria-label="YouTube"><svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>MENU</h4>
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contacts.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>INFO</h4>
                <div class="footer-text-group">
                    <p>GRANFO ILLUMINAZIONE S.N.C.</p>
                    <p>P.IVA 01410980237</p>
                    <p style="font-size: 0.75rem; color: var(--color-text-muted); margin-top: 0.75rem; opacity: 0.8;">
                        Granfo Luce is the trade name of Granfo Illuminazione S.N.C., sole location Via Ponte S. Pancrazio 8, Verona.
                    </p>
                    <a href="privacy-policy.php" class="privacy-link">Privacy Policy</a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Contacts</h4>
                <div class="contact-rows">
                    <p><span class="label">Email:</span><br><a href="mailto:granfoluce@hotmail.it" class="highlight-link">granfoluce@hotmail.it</a></p>
                    <p><span class="label">Phone:</span><br><a href="tel:+39045528541" class="highlight-link">+39 045 528541</a></p>
                    <p><span class="label">Address:</span><br><a href="https://maps.google.com" target="_blank" class="highlight-link underline">via Ponte S. Pancrazio 8 Verona</a></p>
                </div>
            </div>
        </div>
    </footer>


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
        
        // Search: handle Enter and Escape
        (function initSearchHandler(){
            const overlay = document.getElementById('search-overlay');
            const input = overlay ? overlay.querySelector('input') : null;
            if (!input) return;
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') {
                    const q = input.value.trim();
                    if (q.length > 0) {
                        activeSearchQuery = q;
                        toggleSearch();
                        applyAdvancedFilters();
                    }
                } else if (e.key === 'Escape') {
                    toggleSearch();
                }
            });
        })();
        
        /* --- LOGICA FILTRI --- */
let activeCategory = 'all';
let activeSearchQuery = '';

function toggleFilters() {
    const sheet = document.getElementById('filter-sheet');
    const overlay = document.getElementById('filter-overlay');
    const wasOpen = sheet.classList.contains('active');
    sheet.classList.toggle('active');
    overlay.classList.toggle('active');
    if (sheet.classList.contains('active')) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
        if (wasOpen) applyAdvancedFilters();
    }
}

// Filtro rapido per Category (bottoni in alto)
function filterProducts(category, btnElement) {
    activeCategory = category;
    
    // Aggiorna Style bottoni
    document.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
    if (btnElement) btnElement.classList.add('active');

    applyAdvancedFilters(); // Richiama la funzione principale che combina tutto
}

// Auto-Filter in Base al parametro URL
function applyURLFilters() {
    const urlParams = new URLSearchParams(window.location.search);
    let Category = urlParams.get('Category');
    const q = urlParams.get('q');
    const Material = urlParams.get('Material');
    const Style = urlParams.get('Style');
    
    if (Category) {
        // Decodifica il parametro se è URL encoded
        Category = decodeURIComponent(Category).toLowerCase().trim();
        activeCategory = Category;
        
        // Trova il bottone della Category
        let btn = null;
        const chips = document.querySelectorAll('.chip');
        
        for (let chip of chips) {
            const chipText = chip.textContent.toLowerCase().trim();
            const onclickAttr = chip.getAttribute('onclick') || '';
            
            // Matching con il testo del bottone (normalizzato)
            if (chipText === Category || chipText.includes(Category) || Category.includes(chipText)) {
                btn = chip;
                break;
            }
            
            // Fallback: matching con onclick
            if (onclickAttr.includes(`'${Category}'`)) {
                btn = chip;
                break;
            }
        }
        
        if (btn) {
            filterProducts(Category, btn);
        } else {
            applyAdvancedFilters();
        }
    }
    if (q) {
        activeSearchQuery = q;
        const overlay = document.getElementById('search-overlay');
        const input = overlay ? overlay.querySelector('input') : null;
        if (input) input.value = q;
        applyAdvancedFilters();
    }

    if (Material) {
        const values = Material.split(',').map(v => v.trim().toLowerCase()).filter(Boolean);
        values.forEach(val => {
            const cb = document.querySelector(`input[type="checkbox"][value="${val}"]`);
            if (cb) cb.checked = true;
        });
        applyAdvancedFilters();
    }

    if (Style) {
        const values = Style.split(',').map(v => v.trim().toLowerCase()).filter(Boolean);
        values.forEach(val => {
            const cb = document.querySelector(`input[type="checkbox"][value="${val}"]`);
            if (cb) cb.checked = true;
        });
        applyAdvancedFilters();
    }

    // Se arrivo con un anchor, scrolla al target (preferibilmente catalogo per vedere i filtri)
    const hash = window.location.hash;
    if (hash) {
        setTimeout(() => {
            const targetId = hash.replace('#','');
            let target = document.getElementById(targetId);
            if (!target && (hash === '#product-grid' || hash === '#catalogo')) {
                target = document.getElementById('catalogo') || document.getElementById('product-grid');
            }
            if (target) {
                const offset = 90; // lascia spazio per navbar e chip
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        }, 120);
    }
}

// Esegui subito se il documento è già caricato, altrimenti aspetta
if (document.readyState !== 'loading') {
    // Document is interactive or complete, run immediately
    setTimeout(applyURLFilters, 50);
} else {
    // Document is still loading
    document.addEventListener('DOMContentLoaded', applyURLFilters, { once: true });
}

// Logica combinata (Category + Checkbox Prezzo/Material + Filtri prodotto)
function applyAdvancedFilters() {
    const products = document.querySelectorAll('.product-item');
    const domusBanner = document.querySelector('.domus-banner-grid');
    let visibleCount = 0;
    let showDomusBanner = false;

    const normalize = (value) => (value || '')
        .toLowerCase()
        .normalize('NFD')
        .replace(/\p{Diacritic}/gu, '')
        .replace(/[^a-z0-9\s]/gi, ' ')
        .replace(/\s+/g, ' ')
        .trim();

    const stopwords = new Set(['il', 'lo', 'la', 'i', 'gli', 'le', 'un', 'una', 'uno', 'di', 'da', 'a', 'e', 'o', 'per', 'con', 'su', 'in']);
    const genericWords = new Set(['lampada', 'lampade', 'lampadario', 'lampadari', 'luce', 'luci', 'illuminazione']);
    const tokenize = (value) => normalize(value)
        .split(' ')
        .map(t => t.trim())
        .filter(t => t && !stopwords.has(t) && !genericWords.has(t));

    // Prendi i valori delle checkbox selezionate
    const priceFilters = Array.from(document.querySelectorAll('input[type="checkbox"][value="low"]:checked, input[type="checkbox"][value="medium"]:checked, input[type="checkbox"][value="high"]:checked')).map(cb => cb.value);
    const materialFilters = Array.from(document.querySelectorAll('input[type="checkbox"][value="vetro"]:checked, input[type="checkbox"][value="Metal"]:checked, input[type="checkbox"][value="Gold"]:checked')).map(cb => cb.value);
    const categoryFilters = Array.from(document.querySelectorAll('input[type="checkbox"][value="Suspension"]:checked, input[type="checkbox"][value="Table"]:checked, input[type="checkbox"][value="Ceiling"]:checked, input[type="checkbox"][value="Wall"]:checked, input[type="checkbox"][value="Floor"]:checked, input[type="checkbox"][value="Vases & Decor"]:checked, input[type="checkbox"][value="outdoor"]:checked')).map(cb => cb.value);
    const styleFilters = Array.from(document.querySelectorAll('input[type="checkbox"][value="Modern"]:checked, input[type="checkbox"][value="Classic"]:checked, input[type="checkbox"][value="Contemporary"]:checked')).map(cb => cb.value);

    const normalizedQuery = normalize(activeSearchQuery || '');
    const searchTokens = tokenize(activeSearchQuery || '');
    const impliedCategories = new Set();

    if (searchTokens.includes('piantana') || searchTokens.includes('Floor')) impliedCategories.add('Floor');
    if (searchTokens.includes('Table')) impliedCategories.add('Table');
    if (searchTokens.includes('Ceiling') || searchTokens.includes('plafoniera')) impliedCategories.add('Ceiling');
    if (searchTokens.includes('Wall') || searchTokens.includes('applique')) impliedCategories.add('Wall');
    if (searchTokens.includes('Suspension') || searchTokens.includes('pendente') || searchTokens.includes('lampadario')) impliedCategories.add('Suspension');
    if (searchTokens.includes('outdoor') || searchTokens.includes('esterno') || searchTokens.includes('giardino')) impliedCategories.add('outdoor');
    if (searchTokens.includes('vasi') || searchTokens.includes('oggettistica') || searchTokens.includes('oggetti')) impliedCategories.add('Vases & Decor');

    products.forEach(product => {
        const pCat = product.getAttribute('data-category');
        const pPrice = product.getAttribute('data-price');
        const pMat = product.getAttribute('data-material');
        const productId = product.getAttribute('data-product-id');
        const productFilters = (product.dataset.filters || '').toLowerCase(); // Leggi i filtri assegnati via editor
        const pStyle = (product.getAttribute('data-style') || '').toLowerCase();
        const title = (product.querySelector('h3')?.textContent || '').toLowerCase();
        const alt = (product.querySelector('img')?.getAttribute('alt') || '').toLowerCase();
        const tags = (product.getAttribute('data-tags') || '').toLowerCase();
        const line = (product.getAttribute('data-line') || '').toLowerCase();
        const isDomusLine = (line === 'aurum') || title.includes('domus');
        const indexedText = (window.productPageTextIndex && productId && window.productPageTextIndex[productId])
            ? window.productPageTextIndex[productId]
            : '';

        // Logic:
        // 1. Category must match (or be 'all')
        // 2. If price filters are selected, product must match one
        // 3. If material filters are selected, product must match one
        // 4. Full-text search also checks editor-assigned filters
        
        const matchCat = (categoryFilters.length > 0)
            ? categoryFilters.includes(pCat)
            : (impliedCategories.size > 0
                ? impliedCategories.has(pCat)
                : (activeCategory === 'all' || activeCategory === pCat));
        const matchPrice = (priceFilters.length === 0 || priceFilters.includes(pPrice));
        const matchMat = (materialFilters.length === 0 || materialFilters.includes(pMat));
        const matchStyle = (styleFilters.length === 0) || styleFilters.some((filter) =>
            productFilters.includes(filter) ||
            tags.includes(filter) ||
            pStyle.includes(filter) ||
            title.includes(filter)
        );
        const haystack = normalize([
            title,
            pCat || '',
            pMat || '',
            productFilters || '',
            alt || '',
            tags || '',
            pStyle || '',
            indexedText || ''
        ].join(' '));

        const matchText = (searchTokens.length === 0) || searchTokens.every(token => haystack.includes(token));

        if (matchCat && matchPrice && matchMat && matchStyle && matchText) {
            product.hidden = false;
            product.style.removeProperty('display');
            visibleCount++;
            if (isDomusLine) showDomusBanner = true;
            // Piccola animazione di entrata
            product.style.opacity = '0';
            setTimeout(() => product.style.opacity = '1', 50);
        } else {
            product.hidden = true;
            product.style.setProperty('display', 'none', 'important');
        }
    });

    if (domusBanner) {
        domusBanner.style.display = showDomusBanner ? 'block' : 'none';
    }

    // Aggiorna contatore (esclude il banner Domus)
    const countText = document.getElementById('results-count');
    const adjustedCount = showDomusBanner ? Math.max(0, visibleCount - 1) : visibleCount;
    if (adjustedCount === 0) countText.innerText = "No products found.";
    else countText.innerText = `Showing ${adjustedCount} Products`;
}

function resetFilters() {
    document.querySelectorAll('.filter-sheet input[type="checkbox"]').forEach(cb => {
        cb.checked = false;
    });
    activeCategory = 'all';
    activeSearchQuery = '';
    const overlay = document.getElementById('search-overlay');
    const input = overlay ? overlay.querySelector('input') : null;
    if (input) input.value = '';
    applyAdvancedFilters();
}

// Live search on the Products page
(function initSearchLive(){
    const overlay = document.getElementById('search-overlay');
    const input = overlay ? overlay.querySelector('input') : null;
    if (!input) return;
    input.addEventListener('input', (e) => {
        activeSearchQuery = e.target.value || '';
        applyAdvancedFilters();
    });
    input.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') toggleSearch();
    });
})();

const productTemplateMap = {};
const usedProductIds = new Set();

function slugify(value) {
    return (value || '')
        .toLowerCase()
        .normalize('NFD')
        .replace(/\p{Diacritic}/gu, '')
        .replace(/[^a-z0-9]+/g, '-')
        .replace(/^-+|-+$/g, '')
        .replace(/-+/g, '-');
}

function normalizeProductId(item) {
    if (!item) return '';
    const rawId = item.getAttribute('data-product-id') || '';
    const normalizedRaw = normalizeProductIdValue(rawId);
    const normalizedLower = normalizedRaw.toLowerCase();
    const genericIds = new Set([
        'Wall', 'Suspension', 'Table', 'Ceiling', 'Floor',
        'outdoor', 'vasi', 'oggettistica', 'wall', 'table',
        'floor', 'ceiling', 'suspension'
    ]);

    let finalId = normalizedRaw || '';
    const needsNew = !finalId || genericIds.has(normalizedLower) || (usedProductIds.has(finalId) && !normalizedProductPageMap[finalId]);
    if (needsNew) {
        const title = item.querySelector('h3')?.textContent || '';
        const imgSrc = item.querySelector('img')?.getAttribute('src') || '';
        const fileName = imgSrc.split('/').pop() || '';
        const Base = slugify([title, fileName.replace(/\.[^.]+$/, '')].filter(Boolean).join('-')) || 'product';
        finalId = Base;
    }

    if (usedProductIds.has(finalId)) {
        let index = 2;
        while (usedProductIds.has(`${finalId}-${index}`)) index++;
        finalId = `${finalId}-${index}`;
    }

    item.setAttribute('data-product-id', finalId);
    usedProductIds.add(finalId);
    return finalId;
}

// Toast Notification
function showToast(message) {
    const toast = document.createElement('div');
    toast.innerText = message;
    toast.style.cssText = "position:fixed; bottom:20px; left:50%; transform:translateX(-50%); background:var(--color-accent); color:var(--color-bg-main); padding:12px 24px; border-radius:50px; z-index:999999; font-weight:bold; text-align:center; box-shadow:0 5px 15px rgba(0,0,0,0.3); animation: fadeInToast 0.3s ease-out, fadeOutToast 0.3s ease-in 2.7s forwards;";
    document.body.appendChild(toast);
    setTimeout(() => toast.remove(), 3000);
}

function buildProductTemplateMap() {
    document.querySelectorAll('.product-item').forEach(item => {
        const id = normalizeProductId(item);
        if (id && !productTemplateMap[id]) productTemplateMap[id] = item;
    });
}

function wishlistLines() {
    const wishlist = getWishlist();
    if (!wishlist.length) return '';
    const names = wishlist
        .map(id => {
            const item = productTemplateMap[id];
            if (!item) return null;
            return item.querySelector('h3')?.textContent?.trim();
        })
        .filter(Boolean);
    return names.map((name, i) => `${i + 1}. ${name}`).join('%0A');
}

function sendWishlist(channel) {
    const lines = wishlistLines();
    if (!lines) {
        alert('La wishlist è vuota.');
        return;
    }
    if (channel === 'whatsapp') {
        window.open(`https://wa.me/?text=Ecco%20la%20mia%20wishlist%20Illustro%3A%0A${lines}`, '_blank');
    } else if (channel === 'mail') {
        window.location.href = `mailto:?subject=Wishlist%20Illustro&body=Ecco%20la%20mia%20wishlist%20Illustro%3A%0A${lines}`;
    }
}

function getWishlist() {
    const wishlist = localStorage.getItem('granfoluce_wishlist');
    return wishlist ? JSON.parse(wishlist) : [];
}

function saveWishlist(wishlist) {
    localStorage.setItem('granfoluce_wishlist', JSON.stringify(wishlist));
}

function toggleWishlist(productId, btnElement) {
    let wishlist = getWishlist();
    const index = wishlist.indexOf(productId);
    
    if (index > -1) {
        wishlist.splice(index, 1);
        btnElement.classList.remove('active');
        showToast("Rimosso dalla Wishlist");
    } else {
        wishlist.push(productId);
        btnElement.classList.add('active');
        showToast("Aggiunto alla Wishlist!");
        if (navigator.vibrate) { navigator.vibrate(50); }
    }
    
    saveWishlist(wishlist);
    syncWishlistButtons();
    renderWishlist();
}

function syncWishlistButtons() {
    const wishlist = getWishlist();
    document.querySelectorAll('.wishlist-btn').forEach(btn => {
        const item = btn.closest('.product-item');
        const id = item?.getAttribute('data-product-id');
        if (!id) return;
        if (wishlist.includes(id)) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });
}

function bindWishlistButton(btn) {
    if (btn.dataset.bound === 'true') return;
    const productItem = btn.closest('.product-item');
    const productId = productItem.getAttribute('data-product-id');
    const wishlist = getWishlist();
    if (wishlist.includes(productId)) btn.classList.add('active');

    btn.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        toggleWishlist(productId, btn);
    });
    btn.dataset.bound = 'true';
}

function initWishlist() {
    const wishlistBtns = document.querySelectorAll('.wishlist-btn');
    wishlistBtns.forEach(bindWishlistButton);
}

function renderWishlist() {
    const section = document.getElementById('wishlist');
    const grid = document.getElementById('wishlist-grid');
    const empty = document.getElementById('wishlist-empty');
    if (!section || !grid || !empty) return;

    const wishlist = getWishlist();
    grid.innerHTML = '';

    const wishlistChip = document.getElementById('wishlist-chip');

    const validWishlist = wishlist.filter(id => productTemplateMap[id]);
    if (validWishlist.length === 0) {
        if (wishlist.length) saveWishlist([]);
        section.style.display = 'none';
        grid.style.display = 'none';
        empty.style.display = 'none';
        if (wishlistChip) {
            wishlistChip.style.display = 'none';
            wishlistChip.hidden = true;
        }
        return;
    }

    section.style.display = 'block';
    section.style.paddingTop = '1.25rem';
    section.style.paddingBottom = '1.5rem';
    grid.style.display = 'grid';
    empty.style.display = 'none';
    if (wishlistChip) {
        wishlistChip.style.display = 'inline-block';
        wishlistChip.hidden = false;
    }

    validWishlist.forEach(id => {
        const template = productTemplateMap[id];
        if (!template) return;
        const clone = template.cloneNode(true);
        clone.style.display = 'block';
        const btn = clone.querySelector('.wishlist-btn');
        if (btn) {
            btn.classList.add('active');
            btn.removeAttribute('data-bound');
            bindWishlistButton(btn);
        }
        grid.appendChild(clone);
    });
    syncWishlistButtons();
}

// Initialize wishlist on load
window.addEventListener('DOMContentLoaded', () => {
    buildProductTemplateMap();
    initWishlist();
    renderWishlist();
    // Apply initial filters even when a search query is present
    applyAdvancedFilters();
});
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const activeDesktop = document.querySelector('.nav-links a.active');
            if (!activeDesktop) return;
            const targetHref = activeDesktop.getAttribute('href');
            document.querySelectorAll('.mobile-menu a').forEach(link => {
                if (link.getAttribute('href') === targetHref) link.classList.add('active');
            });
        });


        // Native Share API
        async function shareProduct(title, text, url) {
            if (navigator.share) {
                try {
                    await navigator.share({ title: title, text: text, url: url });
                    console.log('Condiviso con successo');
                } catch (err) {
                    console.log('Condivisione annullata');
                }
            } else {
                navigator.clipboard.writeText(url);
                showToast("Link copiato negli appunti!");
            }
        }

        // Lightbox
        function openLightbox(elOrSrc) {
            const lb = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-img');
            const caption = document.getElementById('lightbox-caption');
            const note = document.getElementById('lightbox-note');

            let src = '', title = '', desc = '';
            if (typeof elOrSrc === 'string') {
                src = elOrSrc;
                const imgEl = Array.from(document.querySelectorAll('img')).find(i => (i.currentSrc && i.currentSrc.includes(src)) || i.src.includes(src) || i.getAttribute('src') === src);
                const item = imgEl ? imgEl.closest('.product-item') : null;
                title = item?.querySelector('h3')?.textContent || '';
                desc = item?.querySelector('.p-3 p')?.textContent || imgEl?.alt || '';
            } else {
                const imgEl = elOrSrc;
                src = imgEl.src;
                const item = imgEl.closest('.product-item');
                title = item?.querySelector('h3')?.textContent || '';
                const ps = item ? item.querySelectorAll('.p-3 p') : [];
                desc = ps.length ? ps[0].textContent : imgEl.alt || '';
            }

            img.src = src;
            if (caption) caption.innerHTML = (title ? `<strong>${title}</strong>` : '') + (desc ? `<br>${desc}` : '');
            const item = (typeof elOrSrc === 'string')
                ? Array.from(document.querySelectorAll('img')).find(i => (i.currentSrc && i.currentSrc.includes(src)) || i.src.includes(src) || i.getAttribute('src') === src)?.closest('.product-item')
                : elOrSrc.closest('.product-item');
            const noteText = item?.getAttribute('data-note') || '';
            if (note) {
                note.innerHTML = noteText;
                note.style.display = noteText ? 'block' : 'none';
            }
            document.body.style.overflow = 'hidden';
            lb.style.display = 'flex';
        }
        function closeLightbox() {
            const lb = document.getElementById('lightbox');
            lb.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    </script>
    <div id="lightbox" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.95); z-index:99999; align-items:center; justify-content:center;" onclick="closeLightbox()">
        <div class="lightbox-inner" style="display:flex; flex-direction:column; align-items:center; max-width:100%;" onclick="event.stopPropagation()">
            <img id="lightbox-img" src="" style="max-width:90%; max-height:80%; object-fit:contain; transition: transform 0.2s; cursor: zoom-out;">
            <div class="lightbox-caption" id="lightbox-caption" style="max-width:90%; margin:1rem auto 0; color:#fff; font-size:0.95rem; line-height:1.4; text-align:center;"></div>
            <div id="lightbox-note" class="lightbox-note" style="width:90%; margin:0.5rem auto 0; color:#fff; opacity:0.9; font-size:0.9rem; line-height:1.5; text-align:center; display:none;"></div>
        </div>
        <span style="position:absolute; top:20px; right:20px; color:white; font-size:2rem; cursor:pointer;" onclick="closeLightbox()">&times;</span>
        <span style="position:absolute; bottom:20px; width:100%; text-align:center; color:#888; font-size:0.8rem;">Tocca per chiudere</span>
    </div>
            <script src="../product-search-index.js"></script>
    <script>
        // Mapping Products alle lGold pagine singole
        const productPageMap = {
            'fungo-black': 'Products-singoli/fungo-black.php',
            'ofelia-Suspension': 'Products-singoli/ofelia-Suspension.php',
            'ofelia-applique': 'Products-singoli/ofelia-applique.php',
            'camilla-Suspension': 'Products-singoli/camilla-Suspension.php',
            'domus-Suspension': 'Products-singoli/domus-Suspension.php',
            'garden-light-spot': 'Products-singoli/garden-light-spot.php',
            'barcelo-Table': 'Products-singoli/barcelo-Table.php',
            'barra-Wall': 'Products-singoli/barra-Wall.php',
            'ellisse-Wall': 'Products-singoli/ellisse-Wall.php',
            'applique-v-Wall': 'Products-singoli/applique-v-Wall.php',
            'Floor-light': 'Products-singoli/Floor-light.php',
            'piantana-bolle': 'Products-singoli/piantana-bolle.php',
            'cono-Suspension': 'Products-singoli/cono-Suspension.php',
            'gabs-Suspension': 'Products-singoli/gabs-Suspension.php',
            'bolla-Suspension': 'Products-singoli/bolla-Suspension.php',
            'Suspension-fungo': 'Products-singoli/Suspension-fungo.php',
            'Suspension-piatto': 'Products-singoli/Suspension-piatto.php',
            'Suspension-tubo': 'Products-singoli/Suspension-tubo.php',
            'vino-Suspension': 'Products-singoli/vino-Suspension.php',
            'Table-cubo': 'Products-singoli/Table-cubo.php',
            'prodotto-outdoor': 'Products-singoli/prodotto-outdoor.php'
        };

        const normalizeProductIdValue = (value) => {
            if (!value) return '';
            return value
                .replace(/Suspension/gi, 'Suspension')
                .replace(/Table/gi, 'Table')
                .replace(/Floor/gi, 'Floor')
                .replace(/Wall/gi, 'Wall')
                .replace(/Ceiling/gi, 'Ceiling')
                .replace(/Products-singoli/gi, 'products-single')
                .replace(/_/g, '-')
                .trim();
        };

        const normalizeProductPageMap = (map) => {
            const normalized = {};
            Object.entries(map).forEach(([key, url]) => {
                const id = normalizeProductIdValue(key);
                const cleanUrl = (url || '')
                    .replace(/Products-singoli/gi, 'products-single')
                    .replace(/Suspension/gi, 'Suspension')
                    .replace(/Table/gi, 'Table')
                    .replace(/Floor/gi, 'Floor')
                    .replace(/Wall/gi, 'Wall')
                    .replace(/Ceiling/gi, 'Ceiling');
                normalized[id] = cleanUrl;
            });
            return normalized;
        };

        const normalizedProductPageMap = normalizeProductPageMap(productPageMap);

        function normalizeSearchText(value) {
            return (value || '')
                .toLowerCase()
                .normalize('NFD')
                .replace(/\p{Diacritic}/gu, '')
                .replace(/[^a-z0-9\s]/gi, ' ')
                .replace(/\s+/g, ' ')
                .trim();
        }

        async function buildProductPageTextIndex() {
            if (window.productPageTextIndex) return;
            window.productPageTextIndex = {};

            const entries = Object.entries(normalizedProductPageMap);
            const fetches = entries.map(async ([id, url]) => {
                try {
                    const res = await fetch(url, { cache: 'force-cache' });
                    if (!res.ok) return;
                    const html = await res.text();
                    const doc = new DOMParser().parseFromString(html, 'text/html');
                    const text = normalizeSearchText(doc.body?.innerText || doc.documentElement?.innerText || '');
                    if (text) window.productPageTextIndex[id] = text;
                } catch (err) {
                    // ignore fetch failures (offline or file://)
                }
            });

            await Promise.all(fetches);
        }

        document.addEventListener('DOMContentLoaded', function() {
            const productItems = document.querySelectorAll('.product-item');
            productItems.forEach(item => {
                const productId = item.getAttribute('data-product-id');
                const normalizedId = normalizeProductIdValue(productId);

                if (normalizedId && normalizedProductPageMap[normalizedId]) {
                    // Crea un link wrapper
                    const link = document.createElement('a');
                    link.href = normalizedProductPageMap[normalizedId];
                    link.style.textDecoration = 'none';
                    link.style.color = 'inherit';
                    link.style.display = 'block';
                    link.style.cursor = 'pointer';
                    
                    // Sposta il contenuto del product-item nel link
                    while (item.firstChild) {
                        link.appendChild(item.firstChild);
                    }
                    
                    // Reinserisce il link come unico figlio
                    item.appendChild(link);
                }
            });

            buildProductPageTextIndex().then(() => {
                if (typeof applyAdvancedFilters === 'function') applyAdvancedFilters();
            });
        });
    </script>
    <script>
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // 1. LOGICA Color: Se scorri più di 50px, diventa VERDE. Altrimenti TRASPARENTE.
        if (scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // 2. LOGICA NASCONDI/MOSTRA:
        // Se scorri GIÙ e non sei in cima -> Nascondi la barra
        if (scrollTop > lastScrollTop && scrollTop > navbar.offsetHeight) {
            navbar.classList.add('nav-hidden');
        } else {
            // Se scorri SU -> Mostra la barra
            navbar.classList.remove('nav-hidden');
        }
        
        lastScrollTop = scrollTop;
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
    <script src="../luxury.js"></script>
</body>
</html>


















