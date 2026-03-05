/* LUXURY ENGINE - Centralized Transitions & UI */

document.addEventListener("DOMContentLoaded", () => {
    const preloader = document.getElementById('preloader');
    
    // 1. GESTIONE CARICAMENTO INIZIALE - IMMEDIATO, SENZA RITARDI
    document.body.classList.add('loaded');

    const hidePreloader = () => {
        if (preloader) {
            preloader.classList.add('loaded');
        }
    };

    hidePreloader();

    window.addEventListener('pageshow', (event) => {
        if (event.persisted && preloader) {
            preloader.classList.add('loaded');
            document.body.classList.add('loaded');
        }
    });

    // 2. GESTIONE TRANSIZIONI IN USCITA (Click sui Link)
    const links = document.querySelectorAll('a[href]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            const target = this.getAttribute('target');
            
            if (href && 
                target !== '_blank' && 
                (href.startsWith('/') || href.startsWith(window.location.origin) || !href.includes(':')) && 
                !href.startsWith('#') && 
                !href.startsWith('mailto:') && 
                !href.startsWith('tel:')) {
                
                e.preventDefault();
                
                if (preloader) preloader.classList.remove('loaded');
                document.body.classList.remove('loaded');
                
                setTimeout(() => {
                    window.location.href = href;
                }, 600); 
            }
        });
    });

    // 3. BLUR-TO-SHARP SCROLL EFFECT (Digital Exhibition)
    const blurElements = document.querySelectorAll('.blur-on-scroll');
    
    const blurObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-focus');
            } else {
                entry.target.classList.remove('in-focus');
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -10% 0px'
    });
    
    blurElements.forEach(el => blurObserver.observe(el));
});
