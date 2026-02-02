#!/usr/bin/env python3
"""
Generator script for Granfo Luce product pages.
Creates properly formatted HTML product pages following the ofelia-applique.html template.
"""

products = [
    {
        "filename": "gabs-sospensione.html",
        "title": "GABS Sospensione Lampadario | Granfo Luce Verona",
        "meta_desc": "Scopri GABS Sospensione di Granfo Luce: design geometrico innovativo. Illuminazione moderna per spazi contemporanei.",
        "breadcrumb": "Prodotti / Sospensioni / GABS",
        "image": "../images/prodotti/Sospensione/gabs.webp",
        "h2": "Design Geometrico Innovativo",
        "para1": "GABS rappresenta l'innovazione nel design illuminotecnico. Con le sue forme geometriche affascinanti, questa sospensione crea effetti luminosi straordinari che trasformano qualsiasi ambiente in uno spazio di riflessione e creatività.",
        "para2": "Ideale per uffici moderni, spazi di co-working, camere da letto contemporanee e zone living innovative. GABS si distingue per la sua capacità di adattarsi perfettamente a progetti di design audace.",
        "tech_specs": [
            ("Tipo", "Sospensione"),
            ("Materiale", "Vetro soffiato / Metallo"),
            ("Design", "Geometrico innovativo"),
            ("Attacco", "E27"),
            ("Colori", "Vari"),
            ("Tipo Luce", "Diffusa/Diretta")
        ],
        "quote": "La geometria è il linguaggio dell'innovazione. GABS parla il dialetto della luce contemporanea.",
        "features": [
            ("Design Innovativo", "Forme geometriche affascinanti che creano effetti luminosi unici."),
            ("Versatile", "Adatto a qualsiasi ambiente contemporaneo e moderno."),
            ("Effetti Luminosi", "Crea giochi di luce straordinari e suggestivi.")
        ],
        "related": [
            ("camilla-sospensione.html", "CAMILLA Sospensione", "Vetro Murano fumé", "../images/prodotti/Sospensione/camilla.webp"),
            ("domus-sospensione.html", "Domus Sospensione", "Vetro trasparente", "../images/prodotti/Sospensione/domus.webp"),
            ("cono-sospensione.html", "Cono Sospensione", "Design minimalista", "../images/prodotti/Sospensione/cono.webp")
        ],
        "en_link": "../en/products-single/gabs-suspension.html"
    },
    {
        "filename": "garden-light-spot.html",
        "title": "Garden Light Spot | Granfo Luce Verona",
        "meta_desc": "Scopri Garden Light Spot di Granfo Luce: illuminazione esterna professionale. Spot LED per giardini e spazi outdoor.",
        "breadcrumb": "Prodotti / Outdoor / Garden Light Spot",
        "image": "../images/prodotti/Outdoor/garden-light.webp",
        "h2": "Illuminazione Esterna Professionale",
        "para1": "Garden Light Spot è la soluzione innovativa per illuminare spazi esterni con stile e funzionalità. Progettato specificamente per resistere alle condizioni atmosferiche, questo spot LED combina efficienza energetica e design contemporaneo.",
        "para2": "Perfetto per giardini, terrazze, facciate e spazi pubblici. Garden Light Spot trasforma gli ambienti esterni in scenari suggestivi, grazie alla sua tecnologia LED avanzata e alla versatilità cromatica.",
        "tech_specs": [
            ("Tipo", "Spot LED esterno"),
            ("Materiale", "Alluminio / Vetro resistente"),
            ("Potenza", "Variabile"),
            ("Colore Luce", "Bianca/Calda"),
            ("Resistenza", "IP65"),
            ("Tipo Luce", "LED")
        ],
        "quote": "La luce esterna crea magia. Garden Light Spot è il vostro alleato per scenari notturni straordinari.",
        "features": [
            ("LED Avanzato", "Tecnologia LED efficiente e duratura per spazi esterni."),
            ("Resistente", "Protezione IP65 contro pioggia e intemperie."),
            ("Versatile", "Adatto a giardini, terrazze e facciate moderne.")
        ],
        "related": [
            ("camilla-sospensione.html", "CAMILLA Sospensione", "Vetro Murano", "../images/prodotti/Sospensione/camilla.webp"),
            ("terra-light.html", "Terra Light", "Piantana esterna", "../images/prodotti/Terra/terra.webp"),
            ("prodotto-outdoor.html", "Prodotto Outdoor", "Illuminazione esterna", "../images/prodotti/Outdoor/outdoor.webp")
        ],
        "en_link": "../en/products-single/garden-light-spot.html"
    }
]

def generate_html_template(product):
    """Generate complete HTML for a product page."""
    
    # Build tech specs list
    tech_specs_html = ""
    for label, value in product["tech_specs"]:
        tech_specs_html += f'                            <li><strong style="color: white;">{label}:</strong> {value}</li>\n'
    
    # Build features section
    features_html = ""
    for feature_title, feature_desc in product["features"]:
        features_html += f'''                <div style="padding: 1.5rem; background: rgba(255,255,255,0.05); border-radius: 8px;">
                    <h3 style="color: white; margin-bottom: 1rem;">{feature_title}</h3>
                    <p style="color: var(--color-text-muted);">{feature_desc}</p>
                </div>
'''
    
    # Build related products
    related_html = ""
    for link, title, desc, img in product["related"]:
        related_html += f'''                <a href="{link}" style="text-decoration: none;">
                    <div style="background: rgba(255,255,255,0.05); padding: 1rem; border-radius: 8px; text-align: center;">
                        <img src="{img}" alt="{title}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; margin-bottom: 1rem;">
                        <h3 style="color: white;">{title}</h3>
                        <p style="color: var(--color-text-muted); font-size: 0.9rem;">{desc}</p>
                    </div>
                </a>
'''
    
    html = f'''<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{product["title"]}</title>
    <meta name="description" content="{product["meta_desc"]}">
    <link rel="stylesheet" href="../style.css">
    <script type="application/ld+json">
    {{
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "{product['title'].split(' | ')[0]}",
      "brand": {{"@type": "Brand", "name": "Granfo Luce"}},
      "description": "{product['meta_desc']}",
      "image": "https://granfoluce.com{product['image']}",
      "offers": {{
        "@type": "AggregateOffer",
        "availability": "https://schema.org/InStock",
        "priceCurrency": "EUR"
      }}
    }}
    </script>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <style>
        a, button, .btn, [onclick], label, .product-item, .wishlist-btn {{ cursor: pointer !important; }}
        input, textarea, [contenteditable="true"] {{ cursor: text; }}
    </style>
</head>
<body>
    <div id="preloader">
        <img src="../images/brand/granfoluce-logo.png" alt="GRANFOLUCE" class="preloader-icon">
    </div>

    <nav class="navbar">
        <div class="container nav-container">
            <a href="../index.html" class="logo"><img src="../images/brand/granfoluce-logo.png" alt="GRANFOLUCE" style="height: 50px;"></a>
            <ul class="nav-links">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../aurum.html">Domus</a></li>
                <li><a href="../prodotti.html" class="active">Prodotti</a></li>
                <li><a href="../cataloghi.html">Cataloghi</a></li>
                <li><a href="../progetti.html">Progetti</a></li>
                <li><a href="../chi-siamo.html">Chi Siamo</a></li>
                <li><a href="../contatti.html">Contatti</a></li>
            </ul>
            <div class="nav-actions">
                <button class="icon-btn" onclick="toggleSearch()" aria-label="Cerca"><svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                <div class="lang-selector"><a href="#" class="lang-item active">IT</a><a href="{product['en_link']}" class="lang-item">EN</a></div>
                <button class="menu-toggle" onclick="toggleMenu()" aria-label="Menu"><span></span><span></span><span></span></button>
            </div>
        </div>
        <div id="mobile-menu" class="mobile-menu">
            <a href="../index.html">Home</a>
            <a href="../aurum.html">Domus</a>
            <a href="../prodotti.html">Prodotti</a>
            <a href="../cataloghi.html">Cataloghi</a>
            <a href="../progetti.html">Progetti</a>
            <a href="../chi-siamo.html">Chi Siamo</a>
            <a href="../contatti.html">Contatti</a>
        </div>
    </nav>

    <div id="search-overlay" class="search-overlay">
        <button class="close-search" onclick="toggleSearch()">✕</button>
        <div class="search-container"><input type="text" placeholder="Cerca..."></div>
    </div>

    <header class="page-header">
        <div class="page-header-bg"><img src="{product['image']}" alt="Product"></div>
        <div class="container page-title">
            <p class="breadcrumb"><a href="../index.html">Home</a> / {product["breadcrumb"]}</p>
            <h1>{product["breadcrumb"].split(' / ')[-1]}</h1>
        </div>
    </header>

    <section class="section-padding">
        <div class="container">
            <div class="split-layout-safe">
                <div class="split-image reveal" style="text-align: center;">
                    <img src="{product['image']}" alt="Product" style="width: 100%; max-width: 500px; height: auto; border-radius: 8px;">
                </div>
                
                <div class="split-content reveal">
                    <h2 style="font-family: var(--font-serif); font-size: 2rem; margin-bottom: 1.5rem; color: white;">{product["h2"]}</h2>
                    
                    <p style="color: var(--color-text-muted); margin-bottom: 1.5rem; line-height: 1.8;">
                        {product["para1"]}
                    </p>
                    
                    <p style="color: var(--color-text-muted); margin-bottom: 2rem; line-height: 1.8;">
                        {product["para2"]}
                    </p>

                    <div style="background: rgba(255,255,255,0.05); padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem;">
                        <h3 style="color: white; margin-bottom: 1rem;">Scheda Tecnica</h3>
                        <ul style="color: var(--color-text-muted); line-height: 2; list-style: none;">
{tech_specs_html}                        </ul>
                    </div>

                    <div style="border-left: 3px solid var(--color-accent); padding-left: 1.5rem; margin-bottom: 2rem;">
                        <p style="font-style: italic; color: white; font-size: 1rem;">
                            "{product["quote"]}"
                        </p>
                    </div>

                    <a href="../contatti.html" class="btn btn-gold" style="display: inline-block;">Richiedi Preventivo</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-dark" style="border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <h2 style="color: white; text-align: center; margin-bottom: 2rem;">Perché Scegliere Questo Prodotto</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
{features_html}            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h2 style="color: white; text-align: center; margin-bottom: 2rem;">Prodotti Correlati</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
{related_html}            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-col brand-col">
                <a href="../index.html" class="footer-logo"><img src="../images/brand/granfoluce-logo.png" alt="GRANFOLUCE" style="height: 60px;"></a>
                <p class="copyright">© 2025 GRANFO ILLUMINAZIONE S.N.C.<br>All Rights Reserved.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/Granfoluce.lampadari/" target="_blank" rel="noopener"><svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg></a>
                    <a href="https://www.instagram.com/granfoluce/" target="_blank" rel="noopener"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path></svg></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>MENU</h4>
                <ul>
                    <li><a href="../chi-siamo.html">Chi Siamo</a></li>
                    <li><a href="../prodotti.html">Prodotti</a></li>
                    <li><a href="../contatti.html">Contattaci</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>INFO</h4>
                <div class="footer-text-group">
                    <p>GRANFO ILLUMINAZIONE S.N.C.</p>
                    <p style="font-size: 0.75rem; color: var(--color-text-muted); margin-top: 0.75rem; opacity: 0.8;">Granfo Luce è il marchio commerciale di Granfo Illuminazione S.N.C., unica sede Via Ponte S. Pancrazio 8, Verona.</p>
                </div>
            </div>
            <div class="footer-col">
                <h4>CONTATTI</h4>
                <div class="contact-rows">
                    <p><span class="label">Email:</span><br><a href="mailto:granfoluce@hotmail.it" class="highlight-link">granfoluce@hotmail.it</a></p>
                    <p><span class="label">Telefono:</span><br><a href="tel:+39045528541" class="highlight-link">+39 045 528541</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="../nav-behavior.js"></script>
    <script>
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', function() {{
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > 50) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
            if (scrollTop > lastScrollTop && scrollTop > navbar.offsetHeight) navbar.classList.add('nav-hidden');
            else navbar.classList.remove('nav-hidden');
            lastScrollTop = scrollTop;
        }});

        function toggleMenu() {{ 
            document.getElementById('mobile-menu').classList.toggle('active'); 
            document.body.classList.toggle('no-scroll'); 
        }}
        function toggleSearch() {{ 
            const overlay = document.getElementById('search-overlay'); 
            overlay.classList.toggle('active');
            const input = overlay.querySelector('input');
            if(overlay.classList.contains('active')) {{
                input.value = '';
                setTimeout(() => input.focus(), 100);
            }}
        }}
    </script>
    <script>
        const hidePreloader = () => {{
            const preloader = document.getElementById('preloader');
            if (preloader && !preloader.classList.contains('loaded')) {{
                preloader.classList.add('loaded');
            }}
        }};
        window.addEventListener('load', () => {{
            requestAnimationFrame(() => {{
                setTimeout(hidePreloader, 80);
            }});
        }});
    </script>
</body>
</html>'''
    
    return html

# Print Python code to generate the products
print("Python generator script created - Run this with: python3 generate_products.py")
