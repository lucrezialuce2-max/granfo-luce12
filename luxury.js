/* LUXURY ENGINE - Centralized Transitions & UI */

document.addEventListener("DOMContentLoaded", () => {
    const preloader = document.getElementById('preloader');
    
    // 1. GESTIONE CARICAMENTO INIZIALE
    // Aggiungiamo la classe al body per il fade-in del contenuto
    setTimeout(() => {
        document.body.classList.add('loaded'); // Gestito dal CSS body.loaded
    }, 100);

    // Funzione per nascondere il preloader
    const hidePreloader = () => {
        if (preloader) {
            // Aggiunge la classe .loaded che nel CSS ha opacity: 0
            preloader.classList.add('loaded');
        }
    };

    // Nascondiamo il preloader appena il DOM è pronto (o puoi usare window.load per attendere le immagini)
    // Usiamo un piccolo ritardo per assicurarci che l'utente veda il logo
    window.addEventListener('load', () => {
        setTimeout(hidePreloader, 500); 
    });

    // Fallback: se window.load non parte per qualche motivo, forza la chiusura dopo 3 secondi
    setTimeout(hidePreloader, 3000);

    // Gestione tasto "Indietro" del browser (fix cache bfcache)
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
            
            // Verifica se è un link interno valido che richiede transizione
            if (href && 
                target !== '_blank' && 
                (href.startsWith('/') || href.startsWith(window.location.origin) || !href.includes(':')) && 
                !href.startsWith('#') && 
                !href.startsWith('mailto:') && 
                !href.startsWith('tel:')) {
                
                e.preventDefault();
                
                // Rimuovi la classe .loaded per far riapparire il preloader (Fade In del logo)
                if (preloader) preloader.classList.remove('loaded');
                
                // Opzionale: Fade out del body
                document.body.classList.remove('loaded');
                
                // Aspetta la fine dell'animazione CSS (600ms) poi cambia pagina
                setTimeout(() => {
                    window.location.href = href;
                }, 600); 
            }
        });
    });
});