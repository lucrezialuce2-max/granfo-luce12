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
                .search-suggestions a span { display: block; font-size: 0.85rem; color: rgba(255,255,255,0.7); margin-top: 0.15rem; }
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
            { title: 'Domus Collection', url: 'aurum.html', tags: 'domus aurum murano glass modular lamp' },
            { title: 'Catalogs', url: 'catalogs.html', tags: 'downloads pdf venice general collection' },
            { title: 'Projects', url: 'projects.html', tags: 'case studies realizations hospitality' },
            { title: 'About', url: 'about.html', tags: 'story heritage murano craftsmanship' },
            { title: 'Contacts', url: 'contacts.html', tags: 'verona showroom email phone' },
            { title: 'Privacy Policy', url: 'privacy-policy.html', tags: 'privacy cookies data policy' }
        ] : [
            { title: 'Home', url: 'index.html', tags: 'granfo granfoluce home hero' },
            { title: 'Prodotti', url: 'prodotti.html', tags: 'collezioni sospensione tavolo soffitto parete terra domus aurum' },
            { title: 'Collezione Domus', url: 'aurum.html', tags: 'domus aurum vetro murano lampada modulare' },
            { title: 'Cataloghi', url: 'cataloghi.html', tags: 'download pdf venice general collection' },
            { title: 'Progetti', url: 'progetti.html', tags: 'case study realizzazioni hospitality' },
            { title: 'Chi Siamo', url: 'chi-siamo.html', tags: 'storia heritage murano artigianato' },
            { title: 'Contatti', url: 'contatti.html', tags: 'verona showroom email telefono' },
            { title: 'Privacy Policy', url: 'privacy-policy.html', tags: 'privacy cookies dati policy' }
        ];

        const renderSuggestions = (query) => {
            const q = (query || '').trim().toLowerCase();
            const matches = q
                ? suggestions.filter(item => `${item.title} ${item.tags}`.toLowerCase().includes(q)).slice(0, 6)
                : suggestions.slice(0, 5);

            if (!matches.length) {
                suggestionBox.innerHTML = `<div class="empty">${isEnglish ? 'No matches yet. Try another keyword.' : 'Nessun risultato. Prova un’altra parola chiave.'}</div>`;
                return;
            }

            suggestionBox.innerHTML = matches.map(item => `
                <a href="${item.url}">
                    ${item.title}
                    <span>${item.tags}</span>
                </a>
            `).join('');
        };

        renderSuggestions('');

        input.addEventListener('input', () => renderSuggestions(input.value));
        input.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                const first = suggestionBox.querySelector('a');
                if (first) {
                    window.location.href = first.getAttribute('href');
                }
            }
        });
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSearch, { once: true });
    } else {
        initSearch();
    }
})();

// Fast preloader hide (single logo screen)
(() => {
    const preloader = document.getElementById('preloader');
    if (!preloader) return;
    const hide = () => { if (!preloader.classList.contains('loaded')) preloader.classList.add('loaded'); };
    window.addEventListener('load', () => setTimeout(hide, 60));
    setTimeout(hide, 1200); // safety timeout
})();
