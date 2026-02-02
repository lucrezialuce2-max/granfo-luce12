# PRODUCT PAGE TEMPLATE UPDATE GUIDE

## Status Summary
✅ COMPLETED:
- ofelia-applique.html (template reference)
- camilla-sospensione.html (fully updated)
- domus-sospensione.html (fully updated)
- bolla-sospensione.html (fully updated)
- cono-sospensione.html (header updated)
- gabs-sospensione.html (updated with cursor CSS + scripts)
- garden-light-spot.html (updated with cursor CSS + scripts)

## REMAINING 14 PRODUCTS TO UPDATE:

### Instructions for Each File:
Each file needs the following updates:

#### 1. ADD CURSOR CSS IN HEAD (after `<link rel="icon"...>`)
```html
<style>
    a, button, .btn, [onclick], label, .product-item, .wishlist-btn { cursor: pointer !important; }
    input, textarea, [contenteditable="true"] { cursor: text; }
</style>
```

#### 2. REPLACE FOOTER SECTION
Replace the old footer div with:
```html
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
```

#### 3. REPLACE SCRIPTS SECTION
Replace:
```html
<script src="../nav-behavior.js"></script>
<script src="../luxury.js"></script>
```

With:
```html
<script src="../nav-behavior.js"></script>
<script>
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > 50) navbar.classList.add('scrolled');
        else navbar.classList.remove('scrolled');
        if (scrollTop > lastScrollTop && scrollTop > navbar.offsetHeight) navbar.classList.add('nav-hidden');
        else navbar.classList.remove('nav-hidden');
        lastScrollTop = scrollTop;
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
```

## REMAINING FILES TO UPDATE:

1. **applique-v-parete.html** - APPLIQUE PARETE
2. **barra-parete.html** - BARRA PARETE
3. **barcelo-tavolo.html** - BARCELO TAVOLO
4. **ellisse-parete.html** - ELLISSE PARETE
5. **fungo-black.html** - FUNGO BLACK
6. **fungo-black-premium.html** - FUNGO BLACK PREMIUM
7. **piantana-bolle.html** - PIANTANA BOLLE
8. **prodotto-outdoor.html** - PRODOTTO OUTDOOR
9. **sospensione-fungo.html** - SOSPENSIONE FUNGO
10. **sospensione-piatto.html** - SOSPENSIONE PIATTO
11. **sospensione-tubo.html** - SOSPENSIONE TUBO
12. **tavolo-cubo.html** - TAVOLO CUBO
13. **terra-light.html** - TERRA LIGHT
14. **vino-sospensione.html** - VINO SOSPENSIONE

## CRITICAL ELEMENTS ALL FILES MUST HAVE:

### ✅ HEAD SECTION
- DOCTYPE html lang="it"
- Meta charset, viewport
- Title, meta description
- JSON-LD Product schema
- Link to style.css
- Icon favicon
- **CURSOR CSS STYLE** ← REQUIRED

### ✅ BODY STRUCTURE
- Preloader div with logo
- Navbar with language selector (IT/EN links)
- Search overlay
- Header with breadcrumb and h1
- Main section with split-layout-safe
  - Left: split-image with product image
  - Right: split-content with h2, 2 paragraphs, tech specs, quote, button
- "Perché Scegliere [Product]" section with 3 feature boxes
- "Prodotti Correlati" section with 3 related products
- **NEW FOOTER** with footer-grid

### ✅ SCRIPTS
- nav-behavior.js
- **NEW INLINE SCROLL SCRIPT** (navbar hide on scroll)
- **NEW PRELOADER SCRIPT**
- NO luxury.js reference

## QUICK UPDATE CHECKLIST:

For each remaining file:
- [ ] Add cursor CSS in `<style>` tag in HEAD
- [ ] Update footer to new footer-grid structure
- [ ] Replace script section with new navigation + preloader scripts
- [ ] Verify all links use relative paths (../)
- [ ] Check breadcrumbs point to correct category
- [ ] Verify EN language links are correct

## PRODUCT DATA TEMPLATE:

Each product should follow this structure:
```
Title: [PRODUCT NAME] [TYPE] | Granfo Luce Verona
Meta: [PRODUCT] di Granfo Luce: [DESCRIPTION]. [BENEFIT].
Breadcrumb: Prodotti / [CATEGORY] / [PRODUCT NAME]
Image: ../images/prodotti/[CATEGORY]/[FILENAME].webp
H2: [HEADLINE]
Para1: [INTRODUCTION - Material, style, usage]
Para2: [BENEFITS & APPLICATIONS]
Tech Specs: [6-7 key specs]
Quote: [BRAND VOICE QUOTE]
Features: [3 key selling points]
Related: [3 related products]
```

---

**Last Updated:** February 2, 2026
**Template Version:** 1.0 (Based on ofelia-applique.html)
