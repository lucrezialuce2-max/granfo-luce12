// Global toggles (fallbacks for pages without inline scripts)
if (typeof window.toggleMenu !== 'function') {
    window.toggleMenu = function toggleMenu() {
        const menu = document.getElementById('mobile-menu');
        if (menu) menu.classList.toggle('active');
        document.body.classList.toggle('no-scroll');
    };
}

if (typeof window.toggleSearch !== 'function') {
    window.toggleSearch = function toggleSearch() {
        const overlay = document.getElementById('search-overlay');
        if (!overlay) return;
        overlay.classList.toggle('active');
        const input = overlay.querySelector('input');
        if (overlay.classList.contains('active') && input) {
            input.value = '';
            setTimeout(() => input.focus(), 100);
        }
    };
}

// Navbar behavior: transparent at top, blur below, hide on scroll down, show on scroll up; menu open forces visible
(() => {
    if (window.__navEnhanced) return;
    window.__navEnhanced = true;

    const nav = document.querySelector('.navbar');
    if (!nav) return;

    const header = document.querySelector('.hero-slider') || document.querySelector('.page-header');
    let lastScroll = window.scrollY || 0;

    // Stato iniziale: trasparente e senza blur
    nav.classList.add('nav-transparent');
    nav.classList.remove('nav-blur');

    const showNav = () => nav.classList.remove('nav-hidden');
    const hideNav = () => { if ((window.scrollY || 0) > 50) nav.classList.add('nav-hidden'); };

    const applyMenuState = (menuOpen) => {
        if (menuOpen) {
            nav.classList.remove('nav-transparent');
            nav.classList.add('nav-blur');
            nav.classList.add('nav-menu-open');
            nav.style.background = '';
            nav.style.backdropFilter = '';
            showNav();
        } else {
            nav.classList.remove('nav-menu-open');
        }
    };

    const updateNavbar = () => {
        const y = window.scrollY || 0;
        const menuOpen = document.body.classList.contains('no-scroll');
        const headerHeight = header ? header.offsetHeight || 0 : 0;
        const inHeaderZone = header ? y < Math.max(headerHeight - 140, 0) : false;
        const atTop = y < 50; // trasparente in cima a qualsiasi pagina

        if (!menuOpen && (atTop || inHeaderZone)) {
            nav.classList.remove('nav-blur');
            nav.classList.remove('nav-hidden');
            nav.classList.add('nav-transparent');
            nav.classList.remove('nav-menu-open');
            nav.style.background = 'transparent';
            nav.style.backdropFilter = 'none';
        } else {
            nav.classList.remove('nav-transparent');
            nav.classList.add('nav-blur');
            if (!menuOpen) nav.classList.remove('nav-menu-open');
            nav.style.background = '';
            nav.style.backdropFilter = '';
        }

        const scrollingDown = y > lastScroll + 4;
        const scrollingUp = y < lastScroll - 4;

        if (menuOpen) {
            applyMenuState(true);
        } else if (scrollingDown) {
            hideNav();
        } else if (scrollingUp) {
            showNav();
        }

        lastScroll = y;
    };

    ['scroll', 'resize'].forEach(evt => window.addEventListener(evt, () => { updateNavbar(); }, { passive: true }));
    ['mousemove', 'touchstart'].forEach(evt => window.addEventListener(evt, () => { showNav(); }, { passive: true }));

    // Sincronizza quando si tocca il toggle menu
    const menuToggle = document.querySelector('.menu-toggle');
    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            setTimeout(() => {
                const menuOpen = document.body.classList.contains('no-scroll');
                applyMenuState(menuOpen);
                updateNavbar();
            }, 0);
        });
    }

    // Osserva cambi di classe sul body (no-scroll) per catturare altri toggle
    const observer = new MutationObserver(() => {
        const menuOpen = document.body.classList.contains('no-scroll');
        applyMenuState(menuOpen);
        updateNavbar();
    });
    observer.observe(document.body, { attributes: true, attributeFilter: ['class'] });

    updateNavbar();
})();

// Image path fallback for EN pages
document.addEventListener('error', function(e) {
    const img = e.target;
    if (!img || !img.tagName || img.tagName.toLowerCase() !== 'img') return;
    if (img.dataset && img.dataset.pathFallback === '1') return;

    const src = img.getAttribute('src');
    if (!src || /^https?:/i.test(src) || src.startsWith('data:')) return;

    let nextSrc = null;
    if (src.includes('../images/')) {
        nextSrc = src.replace('../images/', 'images/');
    } else if (src.includes('../../images/')) {
        nextSrc = src.replace('../../images/', '../images/');
    } else if (src.startsWith('images/')) {
        nextSrc = '../' + src;
    }

    if (nextSrc && nextSrc !== src) {
        if (img.dataset) img.dataset.pathFallback = '1';
        img.src = nextSrc;
    }
}, true);

// Highlight current page in desktop + mobile menus
(() => {
    const normalizePath = (path) => {
        if (!path) return '';
        return path.replace(/\/$/, '');
    };

    const getBasename = (path) => {
        if (!path) return '';
        const clean = path.split('?')[0].split('#')[0];
        const parts = clean.split('/').filter(Boolean);
        return parts.length ? parts[parts.length - 1] : '';
    };

    const currentPath = normalizePath(window.location.pathname || '/');
    const currentBase = getBasename(currentPath) || 'index.html';

    const isSamePath = (linkPath) => {
        const linkNorm = normalizePath(linkPath);
        if (linkNorm === currentPath) return true;

        // Handle index.html as folder root
        if (linkNorm.endsWith('/index.html') && currentPath === normalizePath(linkNorm.replace(/\/index\.html$/, ''))) {
            return true;
        }
        if (currentPath.endsWith('/index.html') && linkNorm === normalizePath(currentPath.replace(/\/index\.html$/, ''))) {
            return true;
        }

        // Fallback: match by filename (works for file:// and nested paths)
        const linkBase = getBasename(linkNorm) || 'index.html';
        return linkBase === currentBase;
    };

    const setActiveLinks = (selector) => {
        const links = document.querySelectorAll(selector);
        if (!links.length) return;
        links.forEach(link => link.classList.remove('active'));

        let matched = false;
        links.forEach(link => {
            const href = link.getAttribute('href');
            if (!href || href.startsWith('#')) return;
            const linkPath = new URL(href, window.location.origin).pathname;
            if (!matched && isSamePath(linkPath)) {
                link.classList.add('active');
                matched = true;
            }
        });
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            setActiveLinks('.nav-links a');
            setActiveLinks('.mobile-menu a');
        }, { once: true });
    } else {
        setActiveLinks('.nav-links a');
        setActiveLinks('.mobile-menu a');
    }
})();

// Remove Domus link from EN navbar (except Domus page)
(() => {
    const path = window.location.pathname || '';
    const isEnglish = path.includes('/en/');
    const isDomusPage = /\/domus\.html?$/.test(path);
    if (!isEnglish || isDomusPage) return;

    const selectors = ['.nav-links a', '#mobile-menu a'];
    selectors.forEach((selector) => {
        document.querySelectorAll(selector).forEach((link) => {
            const href = (link.getAttribute('href') || '').toLowerCase();
            const text = (link.textContent || '').trim().toLowerCase();
            if (href.includes('domus.html') || text === 'domus') {
                link.remove();
            }
        });
    });
})();

// Iubenda cookie consent (choices + per-purpose)
(() => {
    if (window.__iubendaLoaded) return;
    window.__iubendaLoaded = true;

    const isEnglish = window.location.pathname.includes('/en/');
    const lang = isEnglish ? 'en' : 'it';
    const policyUrl = 'privacy-policy.html';

    // TODO: replace with your real Iubenda IDs
    const siteId = window.__IUB_SITE_ID || 0;
    const cookiePolicyId = window.__IUB_COOKIE_POLICY_ID || 0;

    window._iub = window._iub || [];
    window._iub.csConfiguration = {
        lang,
        siteId,
        cookiePolicyId,
        countryDetection: true,
        enableGdpr: true,
        gdprAppliesGlobally: true,
        enableCcpa: false,
        enableLgpd: false,
        perPurposeConsent: true,
        purposes: '1,2,3,4,5',
        privacyPolicyUrl: policyUrl,
        cookiePolicyUrl: policyUrl,
        banner: {
            position: 'float-bottom-center',
            backgroundOverlay: false,
            acceptButtonDisplay: true,
            customizeButtonDisplay: true,
            rejectButtonDisplay: true,
            closeButtonDisplay: true,
            listPurposes: true,
            acceptButtonCaption: isEnglish ? 'Accept' : 'Accetta',
            customizeButtonCaption: isEnglish ? 'Customize' : 'Personalizza',
            rejectButtonCaption: isEnglish ? 'Reject' : 'Rifiuta',
            closeButtonCaption: '×',
            cookiePolicyLinkCaption: isEnglish ? 'cookie policy' : 'cookie policy'
        }
    };

    const script = document.createElement('script');
    script.src = 'https://cdn.iubenda.com/cs/iubenda_cs.js';
    script.async = true;
    script.charset = 'UTF-8';
    document.head.appendChild(script);
})();

// Search overlay with typeahead suggestions (IT + EN)
(() => {
    const initSearch = () => {
        const overlay = document.getElementById('search-overlay');
        if (!overlay) return;
        const input = overlay.querySelector('input');
        if (!input) return;

        // Inject a small style for the suggestion list if not present
        if (!document.getElementById('search-suggest-styles')) {
            const style = document.createElement('style');
            style.id = 'search-suggest-styles';
            style.textContent = `
                .search-suggestions { margin-top: 0.75rem; background: rgba(0,0,0,0.6); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 0.25rem; max-height: 260px; overflow-y: auto; box-shadow: 0 10px 30px rgba(0,0,0,0.25); }
                .search-suggestions a { display: block; padding: 0.65rem 0.85rem; color: white; text-decoration: none; border-radius: 10px; transition: background 0.2s ease; }
                .search-suggestions a span { display: none; }
                .search-suggestions a:hover { background: rgba(255,255,255,0.08); }
                .search-suggestions .empty { padding: 0.65rem 0.85rem; color: rgba(255,255,255,0.7); }
            `;
            document.head.appendChild(style);
        }

        let suggestionBox = overlay.querySelector('.search-suggestions');
        if (!suggestionBox) {
            suggestionBox = document.createElement('div');
            suggestionBox.className = 'search-suggestions';
            const container = overlay.querySelector('.search-container') || overlay;
            container.appendChild(suggestionBox);
        }

        const isEnglish = window.location.pathname.includes('/en/');
        const suggestions = isEnglish ? [
            { title: 'Home', url: 'index.html', tags: 'granfo granfoluce home hero' },
            { title: 'Products', url: 'products.html', tags: 'collections pendant table ceiling wall floor domus aurum' },
            { title: 'Domus Collection', url: 'domus.html', tags: 'domus aurum murano glass modular lamp' },
            { title: 'Catalogs', url: 'catalogs.html', tags: 'downloads pdf venice general collection' },
            { title: 'Projects', url: 'projects.html', tags: 'case studies realizations hospitality' },
            { title: 'About', url: 'about.html', tags: 'story heritage murano craftsmanship' },
            { title: 'Contacts', url: 'contacts.html', tags: 'verona showroom email phone' },
            { title: 'Privacy Policy', url: 'privacy-policy.html', tags: 'privacy cookies data policy' },
            { title: 'Pendant', url: 'products.html?categoria=sospensione', tags: 'pendant suspension hanging' },
            { title: 'Table', url: 'products.html?categoria=tavolo', tags: 'table lamp desk' },
            { title: 'Ceiling', url: 'products.html?categoria=soffitto', tags: 'ceiling flush mount' },
            { title: 'Wall', url: 'products.html?categoria=parete', tags: 'wall sconce' },
            { title: 'Floor', url: 'products.html?categoria=terra', tags: 'floor standing' },
            { title: 'Objects', url: 'products.html?categoria=vasi%20e%20oggettistica', tags: 'vases objects tableware' },
            { title: 'Outdoor', url: 'products.html?categoria=outdoor', tags: 'outdoor garden exterior' }
        ] : [
            { title: 'Home', url: 'index.html', tags: 'granfo granfoluce home hero' },
            { title: 'Prodotti', url: 'prodotti.html', tags: 'collezioni sospensione tavolo soffitto parete terra domus aurum' },
            { title: 'Collezione Domus', url: 'domus.html', tags: 'domus aurum vetro murano lampada modulare' },
            { title: 'Cataloghi', url: 'cataloghi.html', tags: 'download pdf venice general collection' },
            { title: 'Progetti', url: 'progetti.html', tags: 'case study realizzazioni hospitality' },
            { title: 'Chi Siamo', url: 'chi-siamo.html', tags: 'storia heritage murano artigianato' },
            { title: 'Contatti', url: 'contatti.html', tags: 'verona showroom email telefono' },
            { title: 'Privacy Policy', url: 'privacy-policy.html', tags: 'privacy cookies dati policy' },
            { title: 'Sospensione', url: 'prodotti.html?categoria=sospensione', tags: 'pendant sospensione hanging lampada' },
            { title: 'Tavolo', url: 'prodotti.html?categoria=tavolo', tags: 'table tavolo lamp desk lampada' },
            { title: 'Soffitto', url: 'prodotti.html?categoria=soffitto', tags: 'ceiling soffitto flush mount lampada' },
            { title: 'Parete', url: 'prodotti.html?categoria=parete', tags: 'wall parete sconce lampada' },
            { title: 'Terra', url: 'prodotti.html?categoria=terra', tags: 'floor terra standing lampada' },
            { title: 'Oggettistica', url: 'prodotti.html?categoria=vasi%20e%20oggettistica', tags: 'vasi objects tableware oggetti' },
        ];

        const normalize = (value) => (value || '')
            .toLowerCase()
            .normalize('NFD')
            .replace(/\p{Diacritic}/gu, '')
            .replace(/[^a-z0-9\s]/gi, ' ')
            .replace(/\s+/g, ' ')
            .trim();

        const stopwords = isEnglish
            ? new Set(['the', 'a', 'an', 'of', 'for', 'and', 'or', 'to', 'in', 'on', 'with'])
            : new Set(['il', 'lo', 'la', 'i', 'gli', 'le', 'un', 'una', 'uno', 'di', 'da', 'a', 'e', 'o', 'per', 'con', 'su', 'in']);

        const tokenize = (value) => normalize(value)
            .split(' ')
            .map(t => t.trim())
            .filter(t => t && !stopwords.has(t));

        const genericWords = isEnglish
            ? new Set(['lamp', 'lamps', 'light', 'lights', 'lighting'])
            : new Set(['lampada', 'lampade', 'lampadario', 'lampadari', 'luce', 'luci', 'illuminazione']);

        const renderSuggestions = (query) => {
            const q = (query || '').trim();
            const tokens = tokenize(q);
            const meaningfulTokens = tokens.filter(t => !genericWords.has(t));
            
            // Only show suggestions if user has typed something
            if (!meaningfulTokens.length) {
                suggestionBox.innerHTML = '';
                return;
            }

            const matches = suggestions
                .map(item => {
                    const haystack = normalize(`${item.title} ${item.tags}`);
                    const title = normalize(item.title);
                    const allTokensMatch = meaningfulTokens.every(t => haystack.includes(t));
                    if (!allTokensMatch) return null;

                    let score = 0;
                    meaningfulTokens.forEach(t => {
                        if (title.startsWith(t)) score += 3;
                        if (title.includes(t)) score += 2;
                        if (haystack.includes(t)) score += 1;
                    });
                    return { item, score };
                })
                .filter(Boolean)
                .sort((a, b) => b.score - a.score)
                .slice(0, 6)
                .map(({ item }) => item);

            if (!matches.length) {
                suggestionBox.innerHTML = `<div class="empty">${isEnglish ? 'No matches. Try another keyword.' : 'Nessun risultato. Prova un\'altra parola chiave.'}</div>`;
                return;
            }

            suggestionBox.innerHTML = matches.map(item => `
                <a href="${item.url}">
                    ${item.title}
                    <span>${item.tags}</span>
                </a>
            `).join('');
        };

        const categoryMatchers = isEnglish ? [
            { category: 'sospensione', keywords: ['pendant', 'suspension', 'hanging'] },
            { category: 'tavolo', keywords: ['table', 'desk'] },
            { category: 'soffitto', keywords: ['ceiling', 'flush'] },
            { category: 'parete', keywords: ['wall', 'sconce'] },
            { category: 'terra', keywords: ['floor', 'standing'] },
            { category: 'vasi e oggettistica', keywords: ['objects', 'vases', 'tableware'] },
            { category: 'outdoor', keywords: ['outdoor', 'garden', 'exterior'] }
        ] : [
            { category: 'sospensione', keywords: [
                'sospensione', 'sospensioni', 'lampada sospensione', 'lampada a sospensione',
                'lampadario', 'lampadari', 'lampadario pendente', 'lampadario a sospensione',
                'pendente', 'pendant', 'hanging'
            ] },
            { category: 'tavolo', keywords: [
                'tavolo', 'tavoli', 'lampada da tavolo', 'lampada a tavolo', 'abat jour', 'abat-jour',
                'table', 'desk'
            ] },
            { category: 'soffitto', keywords: [
                'soffitto', 'plafoniera', 'plafoniere', 'lampada a soffitto', 'ceiling'
            ] },
            { category: 'parete', keywords: [
                'parete', 'applique', 'lampada da parete', 'lampada a parete', 'wall', 'sconce'
            ] },
            { category: 'terra', keywords: [
                'terra', 'piantana', 'piantane', 'lampada da terra', 'lampada a terra',
                'floor', 'standing'
            ] },
            { category: 'vasi e oggettistica', keywords: [
                'vasi', 'oggettistica', 'oggetti', 'vasi e oggettistica', 'accessori'
            ] },
            { category: 'outdoor', keywords: [
                'outdoor', 'esterno', 'esterni', 'lampada da esterno', 'lampade da esterno',
                'luce esterna', 'luci esterne', 'giardino'
            ] }
        ];

        const materialMatchers = isEnglish ? [
            { material: 'vetro', keywords: ['glass', 'murano'] },
            { material: 'metallo', keywords: ['metal', 'steel', 'aluminum', 'brass'] },
            { material: 'oro', keywords: ['gold', 'golden', 'brass'] }
        ] : [
            { material: 'vetro', keywords: ['vetro', 'vetro soffiato', 'murano'] },
            { material: 'metallo', keywords: ['metallo', 'acciaio', 'alluminio', 'ferro', 'ottone'] },
            { material: 'oro', keywords: ['oro', 'dorato', 'finitura oro', 'ottone', 'ottone spazzolato'] }
        ];

        const styleMatchers = isEnglish ? [
            { style: 'moderno', keywords: ['modern', 'minimal', 'minimalist'] },
            { style: 'classico', keywords: ['classic'] },
            { style: 'contemporaneo', keywords: ['contemporary'] }
        ] : [
            { style: 'moderno', keywords: ['moderno', 'minimal', 'minimalista'] },
            { style: 'classico', keywords: ['classico'] },
            { style: 'contemporaneo', keywords: ['contemporaneo'] }
        ];

        const resolveSearchTarget = (query) => {
            const q = (query || '').trim();
            const tokens = tokenize(q);
            const normalizedQuery = normalize(q);

            let category = null;
            for (const item of categoryMatchers) {
                const keywordHit = item.keywords.some(k => {
                    const normKey = normalize(k);
                    return normalizedQuery.includes(normKey) || tokens.includes(normKey);
                });
                if (keywordHit) {
                    category = item.category;
                    break;
                }
            }

            const materials = new Set();
            materialMatchers.forEach(item => {
                const hit = item.keywords.some(k => {
                    const normKey = normalize(k);
                    return normalizedQuery.includes(normKey) || tokens.includes(normKey);
                });
                if (hit) materials.add(item.material);
            });

            const styles = new Set();
            styleMatchers.forEach(item => {
                const hit = item.keywords.some(k => {
                    const normKey = normalize(k);
                    return normalizedQuery.includes(normKey) || tokens.includes(normKey);
                });
                if (hit) styles.add(item.style);
            });

            return {
                type: 'query',
                query: q,
                category,
                materials: Array.from(materials),
                styles: Array.from(styles)
            };
        };

        input.addEventListener('input', () => renderSuggestions(input.value));
        input.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                e.stopImmediatePropagation();
                const rawQuery = input.value || '';
                const trimmed = rawQuery.trim();
                if (!trimmed) return;

                const target = resolveSearchTarget(trimmed);
                const path = window.location.pathname || '';
                const isProductsPage = isEnglish
                    ? path.includes('/en/products.html')
                    : path.includes('prodotti.html');

                if (isProductsPage && typeof window.applyAdvancedFilters === 'function') {
                    if (target.category) window.activeCategory = target.category;
                    if (Array.isArray(target.materials)) {
                        target.materials.forEach(mat => {
                            const cb = document.querySelector(`input[type="checkbox"][value="${mat}"]`);
                            if (cb) cb.checked = true;
                        });
                    }
                    if (Array.isArray(target.styles)) {
                        target.styles.forEach(style => {
                            const cb = document.querySelector(`input[type="checkbox"][value="${style}"]`);
                            if (cb) cb.checked = true;
                        });
                    }
                    window.activeSearchQuery = trimmed;
                    window.applyAdvancedFilters();
                    if (typeof window.toggleSearch === 'function') window.toggleSearch();
                    return;
                }

                const base = isEnglish
                    ? (path.includes('/en/products-single/') ? '../products.html' : 'en/products.html')
                    : (path.includes('/prodotti-singoli/') ? '../prodotti.html' : 'prodotti.html');
                const params = new URLSearchParams();
                if (target.category) params.set('categoria', target.category);
                if (target.materials && target.materials.length) params.set('materiale', target.materials.join(','));
                if (target.styles && target.styles.length) params.set('stile', target.styles.join(','));
                params.set('q', trimmed);
                window.location.href = `${base}?${params.toString()}`;
            }
        }, true);
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSearch, { once: true });
    } else {
        initSearch();
    }
})();
