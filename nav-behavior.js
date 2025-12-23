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
