<?php
$page_title = 'Granfo Luce | Lampadari e Progettazione Illuminotecnica Verona';
$page_description = 'Granfo Luce a Verona: lampade artigianali, illuminazione tecnica e progetti su misura dal 1970.';
?>
<!DOCTYPE html>
<html lang="it">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>
    <div id="preloader">
        <img src="./images/brand/granfoluce-logo.png" alt="GRANFOLUCE" class="preloader-icon">
    </div>

<?php include 'includes/header-it.php'; ?>

    <header class="hero-slider">
        <div class="slide active">
            <div class="slide-bg"><img src="images/hero/hero-main-graphic.webp" alt="Granfo Luce Design" width="1920" height="1080" loading="lazy"><div class="overlay"></div></div>
            <div class="hero-content">
                <p class="subtitle">Design & Illuminazione</p>
                <h1> Artigiani della luce dal <br><i>1970</i></h1>
                <p class="description">Progettiamo e realizziamo soluzioni luminose uniche, unendo maestria artigiana e tecnologia contemporanea.</p>
                <div class="hero-buttons">
                    <a href="progetti.php" class="btn btn-gold">Scopri i Progetti</a>
                    <a href="chi-siamo.php" class="btn btn-outline">Vieni a Trovarci</a>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-bg"><img src="images/hero/fungonero.webp" alt="Progetti Custom" width="1920" height="1080" loading="lazy"><div class="overlay"></div></div>
            <div class="hero-content">
                <p class="subtitle">Comfort Visivo</p>
                <h1>Luce  <i><br>Architetturale.</i></h1>
                <p class="description">Sistemi integrati e soluzioni minimali. Quando la tecnologia scompare per dare spazio solo alla bellezza del tuo ambiente.</p>
                <div class="hero-buttons"><a href="contatti.php" class="btn btn-gold">Richiedi Consulenza</a></div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-bg"><img src="images/hero/hero-novità.webp" alt="Nuova Collezione" width="1920" height="1080" loading="lazy"><div class="overlay"></div></div>
            <div class="hero-content">
                <p class="subtitle">Novità 2026</p>
                <h1>Collezione <br><i>Domus.</i></h1>
                <p class="description">Vetro di Murano e design contemporaneo. Ogni lampada è un pezzo unico, irripetibile come la tua casa.</p>
                <div class="hero-buttons"><a href="cataloghi.php" class="btn btn-gold">Scopri la collezione</a></div>
            </div>
        </div>
        <!-- Video Slide (wait until end) -->
        <div class="slide">
            <div class="slide-bg">
                <video src="./images/videos/luna.mp4" autoplay muted playsinline></video>
                <div class="overlay"></div>
            </div>
            <div class="hero-content"></div>
        </div>
        <button class="slider-btn prev" onclick="changeSlide(-1)">❮</button>
        <button class="slider-btn next" onclick="changeSlide(1)">❯</button>
        <div class="slider-dots">
            <span class="dot active" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </header>

    <script>
    // Gestione Transizione Pagina
    document.addEventListener("DOMContentLoaded", () => {
        // 1. Fade In all'apertura
        document.body.classList.add("loaded");

        // 2. Intercetta i click sui link
        const links = document.querySelectorAll('a[href]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Se è un link interno e non un'ancora (#) o mailto/tel
                if (href.startsWith(window.location.origin) || (href.indexOf(':') === -1 && !href.startsWith('#'))) {
                    e.preventDefault();
                    document.body.classList.add('fade-out'); // Avvia Fade Out
                    
                    // Aspetta la fine dell'animazione poi cambia pagina
                    setTimeout(() => {
                        window.location.href = href;
                    }, 800); // 800ms deve coincidere con il CSS transition
                }
            });
        });
    });
</script>

    <section id="prodotti" class="section-padding">
        <div class="container">
            <div class="section-header">
                <div><span class="eyebrow">Prodotti</span><h2>Esplora le Categorie</h2></div>
                <a href="prodotti.php#catalogo" class="link-arrow">Vedi tutto →</a>
            </div>
            <div class="products-slider reveal">
                <a href="prodotti.php?categoria=sospensione#catalogo" class="product-item"><img src="images/prodotti/Sospensione/fungonero.webp" alt="Sospensione" width="300" height="300" loading="lazy"><div class="card-content"><h3>Sospensione</h3></div></a>
                <a href="prodotti.php?categoria=tavolo#catalogo" class="product-item"><img src="images/prodotti/Tavolo/tavolocubo.webp" alt="Tavolo" width="300" height="300" loading="lazy"><div class="card-content"><h3>Tavolo</h3></div></a>
                <a href="prodotti.php?categoria=terra#catalogo" class="product-item"><img src="images/prodotti/Terra/terralight.webp" alt="Terra" width="300" height="300" loading="lazy"><div class="card-content"><h3>Terra</h3></div></a>
                <a href="prodotti.php?categoria=parete#catalogo" class="product-item"><img src="images/prodotti/Parete/appliquev.webp" alt="Parete" width="300" height="300" loading="lazy"><div class="card-content"><h3>Parete</h3></div></a>
                <a href="prodotti.php?categoria=soffitto#catalogo" class="product-item"><img src="images/prodotti/Soffitto/plafonierab.webp" alt="Soffitto" width="300" height="300" loading="lazy"><div class="card-content"><h3>Soffitto</h3></div></a>
                <a href="prodotti.php?categoria=outdoor#catalogo" class="product-item"><img src="images/prodotti/copertina-prodotti.webp" alt="Outdoor" width="300" height="300" loading="lazy"><div class="card-content"><h3>Outdoor</h3></div></a>
            </div>
        </div>
    </section>

    <section id="progetti" class="projects-section">
        <div class="container">
            <div class="section-header">
                <div><span class="eyebrow">Progetti</span><h2>Oltre lo standard</h2><h5 class="portfolio-lede">Una selezione di realizzazioni complesse che raccontano la nostra capacità di trasformare la luce in scultura. <br> La dimostrazione che, nel nostro laboratorio, nessuna sfida è impossibile.</h5></div>
                <a href="progetti.php" class="link-arrow">Vedi tutti→</a>
            </div>
            <div class="projects-grid-scroll reveal">
                <a href="progetti.php" class="project-card"><img src="images/progetti/progetto-2.webp" alt="2" width="400" height="500" loading="lazy"><div class="card-content"><span class="card-tag">Doha • Qatar</span><h3>Residenza Privata</h3></div></a>
                <a href="progetti.php" class="project-card"><img src="images/progetti/progetto-3.webp" alt="3" width="400" height="500" loading="lazy"><div class="card-content"><span class="card-tag">Dubai • EAU</span><h3>Penthouse</h3></div></a>
                <a href="progetti.php" class="project-card"><img src="images/progetti/progetto-4.webp" alt="4" width="400" height="500" loading="lazy"><div class="card-content"><span class="card-tag">Mosca • Russia</span><h3>Villa Privata</h3></div></a>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-header center-text">
                <span class="eyebrow">Workflow</span>
            </div>
            <div class="process-grid">
                <div class="process-step reveal"><div class="step-number">01</div><h3><br>Ascolto e Consulenza</h3><p>Non analizziamo solo gli spazi, ascoltiamo le tue idee.</p></div>
                <div class="process-step reveal"><div class="step-number">02</div><h3>Studio e Progettazione</h3><p>Sviluppiamo disegni tecnici e calcoli illuminotecnici precisi per definire dimensioni, materiali e resa luminosa prima di andare in produzione.</p></div>
                <div class="process-step reveal"><div class="step-number">03</div><h3><br>Produzione Artigianale</h3><p>Diamo vita al progetto nel nostro laboratorio.</p></div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-dark">
        <div class="container">
            <div class="section-header"><div><span class="eyebrow">Recensioni</span><h2>Dicono di Noi</h2></div></div>
            <div class="reviews-grid">
                <div class="review-card reveal"><div class="stars">★★★★★</div><p class="review-text"><br>"Abbiamo arredato la nostra casa con le lampade di Granfo Luce. Mi sono trovata benissimo. Ricevo moltissimi complimenti per i prodotti che ho acquistato."</p><h5>Cliente</h5></div>
                <div class="review-card reveal"><div class="stars">★★★★★</div><p class="review-text"><br>"È un posto magico: ogni lampadario ha una storia ed è un capolavoro!"</p><h5>Cliente</h5></div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-header center-text"><h2>Cosa devi sapere</h2></div>
            <div class="faq-container reveal">
                <div class="faq-item"><button class="faq-question">Realizzate lampade su misura? <span>+</span></button><div class="faq-answer"><p>Assolutamente sì. Uniamo la maestria artigiana alle tue esigenze: personalizziamo ogni dettaglio, dalla finitura alla dimensione, per offrirti non solo una lampada, ma un elemento di design unico e su misura.</p></div></div>
                <div class="faq-item"><button class="faq-question">Operate solo a Verona? <span>+</span></button><div class="faq-answer"><p>La nostra sede è a Verona, ma operiamo ovunque. Seguiamo progetti in tutta Italia e all'estero, garantendo la stessa cura e competenza tecnica, sia per residenze private che per grandi spazi architettonici.</p></div></div>
                <div class="faq-item"><button class="faq-question">Offrite consulenza illuminotecnica? <span>+</span></button><div class="faq-answer"><p>Certamente. Oltre alla creazione artigianale, offriamo un servizio tecnico completo: calcoli illuminotecnici e progettazione su misura per assicurare che ogni ambiente abbia la luce corretta, funzionale e performante.</p></div></div>
                <div class="faq-item"><button class="faq-question">Che tipo di illuminazione trattate? <span>+</span></button><div class="faq-answer"><p>Viviamo di due anime complementari. Da noi trovi sia l'illuminazione decorativa, fatta di pezzi artigianali dal calore unico, sia l'illuminazione tecnica e architetturale, essenziale e invisibile. Il nostro obiettivo è far convivere questi due mondi nel tuo spazio.</p></div></div>
            </div>
        </div>
    </section>

<?php
$testo_cta = 'Diamo forma alla tua luce';
include 'includes/cta-section.php';
?>

<?php include 'includes/footer-it.php'; ?>
