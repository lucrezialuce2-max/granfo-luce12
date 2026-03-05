# ==========================================
# CONFIGURAZIONE PERCORSI
# ==========================================

# Imposta la root una cartella sopra la posizione dello script (assumendo che lo script sia in /tools)
$root = Join-Path $PSScriptRoot ".."

Write-Host "Inizio rigenerazione sito EN..." -ForegroundColor Cyan
Write-Host "Root del progetto: $root" -ForegroundColor DarkGray

# ==========================================
# DIZIONARIO MAPPE FILE
# ==========================================

$rootMap = [ordered]@{
    "index.html"          = "en\index.html"
    "prodotti.php"       = "en\products.html"
    "cataloghi.html"      = "en\catalogs.html"
    "progetti.html"       = "en\projects.html"
    "blog.html"           = "en\blog.html"
    "chi-siamo.html"      = "en\about.html"
    "contatti.html"       = "en\contacts.html"
    "privacy-policy.html" = "en\privacy-policy.html"
    "domus.html"          = "en\domus.html"
    "grazie.html"         = "en\thank-you.html"
}

$productMap = [ordered]@{
    "prodotti-singoli\applique-v-parete.html"   = "en\products-single\applique-v-parete.html"
    "prodotti-singoli\barcelo-tavolo.html"      = "en\products-single\barcelo-table.html"
    "prodotti-singoli\barra-parete.html"        = "en\products-single\barra-parete.html"
    "prodotti-singoli\bolla-sospensione.html"   = "en\products-single\bolla-sospensione.html"
    "prodotti-singoli\camilla-sospensione.html" = "en\products-single\camilla-suspension.html"
    "prodotti-singoli\cono-sospensione.html"    = "en\products-single\cono-sospensione.html"
    "prodotti-singoli\domus-sospensione.html"   = "en\products-single\domus-suspension.html"
    "prodotti-singoli\ellisse-parete.html"      = "en\products-single\ellisse-parete.html"
    "prodotti-singoli\fungo-black.html"         = "en\products-single\luminero-suspension.html"
    "prodotti-singoli\gabs-sospensione.html"    = "en\products-single\gabs-sospensione.html"
    "prodotti-singoli\garden-light-spot.html"   = "en\products-single\garden-light-spot.html"
    "prodotti-singoli\ofelia-applique.html"     = "en\products-single\ofelia-applique.html"
    "prodotti-singoli\ofelia-sospensione.html"  = "en\products-single\ofelia-suspension.html"
    "prodotti-singoli\piantana-bolle.html"      = "en\products-single\piantana-bolle.html"
    "prodotti-singoli\prodotto-outdoor.html"    = "en\products-single\outdoor-product.html"
    "prodotti-singoli\sospensione-fungo.html"   = "en\products-single\sospensione-fungo.html"
    "prodotti-singoli\sospensione-piatto.html"  = "en\products-single\sospensione-piatto.html"
    "prodotti-singoli\sospensione-tubo.html"    = "en\products-single\sospensione-tubo.html"
    "prodotti-singoli\tavolo-cubo.html"         = "en\products-single\tavolo-cubo.html"
    "prodotti-singoli\terra-light.html"         = "en\products-single\terra-light.html"
    "prodotti-singoli\vino-sospensione.html"    = "en\products-single\vino-suspension.html"
}

# ==========================================
# DIZIONARIO TRADUZIONI
# ==========================================

$replacements = [ordered]@{
    # -- General Structure --
    'lang="it"' = 'lang="en"'
    'Artigiani della luce dal' = 'Artisans of light since'
    'Design & Illuminazione' = 'Design & Lighting'
    'Comfort Visivo' = 'Visual Comfort'
    'Novità 2026' = 'New for 2026'
    
    # -- Company Info & Taglines --
    'Vetro di Murano e design contemporaneo. Ogni lampada è un pezzo unico, irripetibile come la tua casa.' = 'Murano glass and contemporary design. Each lamp is a unique piece, as one-of-a-kind as your home.'
    'Progettiamo e realizziamo soluzioni luminose uniche, unendo maestria artigiana e tecnologia contemporanea.' = 'We design and craft unique lighting solutions, combining artisanal mastery with contemporary technology.'
    'Sistemi integrati e soluzioni minimali. Quando la tecnologia scompare per dare spazio solo alla bellezza del tuo ambiente.' = 'Integrated systems and minimal solutions. When technology disappears to leave room only for the beauty of your space.'
    'Luce  <i><br>Architetturale.</i>' = 'Architectural <i><br>Light.</i>'
    'Artigiani della luce dal 1970.' = 'Artisans of light since 1970.'
    'Granfo Luce | Lampadari e Progettazione Illuminotecnica Verona' = 'Granfo Luce | Chandeliers and Lighting Design Verona'
    'Esperti in lampadari artigianali, luce architetturale e progetti su misura dal 1970.' = 'Experts in handcrafted chandeliers, architectural lighting, and bespoke projects since 1970.'
    'Scopri le nostre collezioni in vetro di Murano e design su misura.' = 'Discover our collections in Murano glass and bespoke design.'
    
    # -- Specific Terms --
    'vetro di Murano' = 'Murano glass'
    'Design su misura' = 'bespoke design'
    'Design Contemporary' = 'contemporary design'
    'Chi Siamo' = 'About'
    'Contattaci' = 'Contact Us'
    'Contatti' = 'Contacts'
    'Cataloghi' = 'Catalogs'
    'Progetti' = 'Projects'
    'Prodotti' = 'Products'
    'Collezioni & Cataloghi | GRANFO' = 'Collections & Catalogs | GRANFO'
    
    # -- Calls to Action / Headers --
    'I nostri Cataloghi' = 'Our Catalogs'
    'Scarica i Cataloghi GRANFO Illuminazione.' = 'Download GRANFO catalogs.'
    'Sfoglia le nostre creazioni e trova l''ispirazione per il tuo prossimo progetto.' = 'Browse our creations and find inspiration for your next project.'
    'Scarica il Catalogo' = 'Download catalog'
    'Area Professionisti' = 'Professional Area'
    'Progetti la luce?' = 'Designing light?'
    'lighting Designers' = 'lighting designers'
    'Parla con il nostro ufficio tecnico' = 'Talk to our technical team'
    'Scopri i Progetti' = 'Discover the Projects'
    'Scopri la collezione' = 'Discover the collection'
    'Scopri le nostre collezioni' = 'Discover our collections'
    'Vieni a Trovarci' = 'Visit us'
    'Progetti Custom' = 'Custom Projects'
    'Nuova Collezione' = 'New Collection'
    'Collezione <br><i>Domus.</i>' = 'Collection <br><i>Domus.</i>'
    'Artigiano al lavoro' = 'Artisan at work'
    'Le Collezioni' = 'Collections'
    'Collezione Domus' = 'Domus Collection'
    'Collezione Generale' = 'General Collection'
    'Collezione Venezia' = 'Venice Collection'
    'Design della Luce' = 'Lighting Design'
    'Esplora le Categorie' = 'Explore Categories'
    
    # -- Product Categories --
    'Sospensione' = 'Suspension'
    'Tavolo' = 'Table'
    'Terra' = 'Floor'
    'Parete' = 'Wall'
    'Soffitto' = 'Ceiling'
    
    # -- Descriptions --
    'Una selezione di realizzazioni complesse che raccontano la nostra capacità di trasformare la luce in scultura.' = 'A selection of complex projects that show our ability to transform light into sculpture.'
    'Esclusiva' = 'Exclusive'
    'L''eleganza del vetro di Murano' = 'The elegance of Murano glass'
    'La luce non è mai stata così materica.' = 'Light has never felt so tangible.'
    'Domus nasce dall''incontro tra l''antica tradizione del vetro cotto' = 'Domus is born from the meeting of the ancient tradition of kiln-fired glass'
    'le lastre non sono fisse' = 'the plates are not fixed'
    'puoi comporle e ricomporle' = 'you can compose and recompose them'
    'Vetro di Murano - Arancio e Smeraldo' = 'Murano glass - Orange and Emerald'
    'Vetro di Murano - Cristallo e Lapislazzulo' = 'Murano glass - Crystal and Lapis Lazuli'
    'Nessun prodotto trovato con questo colore.' = 'No products found with this color.'
    'Mostra tutti' = 'Show all'
    'Clicca su un colore per filtrare i prodotti.' = 'Click a color to filter products.'
    
    # -- FAQ / Long Text --
    'Realizzate lampade su misura?' = 'Do you make bespoke lamps?'
    'Assolutamente sì. Uniamo la maestria artigiana alle tue esigenze' = 'Absolutely. We combine artisanal mastery with your needs'
    'Operate solo a Verona?' = 'Do you only operate in Verona?'
    'La nostra sede è a Verona, ma operiamo ovunque.' = 'Our headquarters are in Verona, but we operate everywhere.'
    'Che tipo di illuminazione trattate?' = 'What type of lighting do you handle?'
    'Viviamo di due anime complementari.' = 'We live by two complementary souls.'
    'Cliente' = 'Customer'
    'Nota: Per maggiori informazioni e varianti Contattaci.' = 'Note: For more information and variants contact us.'
    
    # -- Technical Specs --
    'value="vetro">Vetro' = 'value="vetro">Glass'
    'Barra Vetro' = 'Glass Bar'
    'Sospensione in vetro soffiato' = 'Blown glass suspension'
    'Realizzazione Artigianale su Misura' = 'Bespoke handcrafted production'
    'Vari colori disponibili' = 'Various colors available'
    'Due dimensioni' = 'Two sizes'
    'Vetro soffiato' = 'Blown glass'
    'Varianti colore' = 'Color variants'
    'Due misure disponibili' = 'Two sizes available'
    'Sospensione Murano' = 'Murano suspension'
    'Colore Fumuè' = 'Smoky gray'
    'Maestri artigiani Murano' = 'Murano master artisans'
    'Maestri di Murano' = 'Murano masters'
    'Vetro in pasta trasparente' = 'Transparent glass paste'
    'Dettaglio vetro' = 'Glass detail'
    'Dettaglio finitura' = 'Finish detail'
    'in ambiente' = 'in setting'
    'Dettaglio Bagno' = 'Bathroom detail'
    
    # -- Locations / Projects --
    'Cascata di Vetro' = 'Glass Cascade'
    'Salone delle Feste' = 'Grand Hall'
    'Villa sul Mare' = 'Seaside Villa'
    'Dettagli di Luce' = 'Light Details'
    'Cupola Artistica' = 'Artistic Dome'
    'Mosca' = 'Moscow'
    'Arabia Saudita' = 'Saudi Arabia'
    'Italia' = 'Italy'
    'EAU' = 'UAE'
    
    # -- Forms & Privacy --
    'Informativa sulla Privacy' = 'Privacy Notice'
    'Sede & Showroom' = 'Headquarters & Showroom'
    'Indirizzo' = 'Address'
    'Telefono' = 'Phone'
    'Orari Apertura' = 'Opening hours'
    'Lun:' = 'Mon:'
    'Mar-Sab:' = 'Tue-Sat:'
    'Scrivici un messaggio' = 'Send us a message'
    'Il tuo nome' = 'Your name'
    'Nome e Cognome' = 'Full name'
    'Messaggio' = 'Message'
    'Invia Richiesta' = 'Send request'
    'Cookie' = 'Cookies'
    'Titolare del Trattamento' = 'Data Controller'
    'Dati Raccolti' = 'Data Collected'
    'Diritti dell''Interessato' = 'Data Subject Rights'
    
    # -- Filters & UI --
    'Filtra' = 'Filter'
    'Vedi Risultati' = 'View results'
    'Applica filtri' = 'Apply filters'
    'Categoria' = 'Category'
    'Materiale' = 'Material'
    'Metallo' = 'Metal'
    'Oro' = 'Gold'
    'Stile' = 'Style'
    'Moderno' = 'Modern'
    'Classico' = 'Classic'
    'Contemporaneo' = 'Contemporary'
    'Vasi e Oggettistica' = 'Vases & Decor'
    'Sospensioni' = 'Suspensions'
    'Lampada a sospensione' = 'Suspension lamp'
    'Lampada da tavolo' = 'Table lamp'
    'Prezzo su richiesta' = 'Price on request'
    'Richiedi Consulenza' = 'Request consultation'
    'Richiedi Informazioni' = 'Request information'
    'Vedi tutto' = 'View all'
    'Vedi tutti' = 'View all'
    'Torna alla home' = 'Back to home'
    'Grazie' = 'Thank you'
    'Messaggio inviato' = 'Message sent'
}

# ==========================================
# FUNZIONI DI ELABORAZIONE
# ==========================================

function Apply-Replacements([string]$content) {
    # 1. Applicazione dizionario
    foreach ($key in $replacements.Keys) {
        $content = $content -replace [regex]::Escape($key), $replacements[$key]
    }

    # 2. Correzioni specifiche post-traduzione
    $content = $content -replace 'con Socket E27', 'with E27 socket'
    $content = $content -replace 'Handcrafted Design', 'Handcrafted design'
    $content = $content -replace 'Thank you per averci contattato.*', 'Thank you for contacting us. We will get back to you as soon as possible.'
    $content = $content -replace 'Il tuo messaggio è stato ricevuto con successo.*', 'Your message has been received successfully. Our team will get back to you as soon as possible.'
    $content = $content -replace 'Nel frattempo, puoi esplorare.*', 'In the meantime, you can explore our collections or visit our showroom in Verona.'
    $content = $content -replace 'Scopri i Products', 'Discover the products'
    $content = $content -replace 'Dettaglio progetto', 'Project detail'
    $content = $content -replace 'Chiudi', 'Close'
    $content = $content -replace 'Tocca fuori per chiudere', 'Click outside to close'

    # 3. Entità HTML (Frecce, Copyright)
    $content = $content -replace '→', '&rarr;'
    $content = $content -replace '↑', '&uarr;'
    $content = $content -replace '×', '&times;'
    $content = $content -replace '©', '&copy;'
    
    return $content
}

function Normalize-ImagePaths([string]$content) {
    # Corregge i percorsi immagini tradotti erroneamente
    $content = $content -replace '(?i)images/Products/', 'images/prodotti/'
    $content = $content -replace '(?i)images/Projects/', 'images/progetti/'
    $content = $content -replace '(?i)images/Catalogs/', 'images/cataloghi/'
    
    # Corregge le sottocartelle
    $content = $content -replace '(?i)images/prodotti/Suspension/', 'images/prodotti/Sospensione/'
    $content = $content -replace '(?i)images/prodotti/Table/', 'images/prodotti/Tavolo/'
    $content = $content -replace '(?i)images/prodotti/Floor/', 'images/prodotti/Terra/'
    $content = $content -replace '(?i)images/prodotti/Wall/', 'images/prodotti/Parete/'
    $content = $content -replace '(?i)images/prodotti/Ceiling/', 'images/prodotti/Soffitto/'
    
    # Corregge nomi file specifici
    $content = $content -replace '(?i)copertina-Products\.webp', 'copertina-prodotti.webp'
    $content = $content -replace '(?i)hero-Projects\.webp', 'hero-progetti.webp'
    
    return $content
}

function Update-Links([string]$content, [int]$depth) {
    # Determina il prefisso del percorso (../ o ../../)
    $prefix = "../" * $depth

    # CSS e JS
    $content = $content -replace 'href="style\.css(\?[^"\s]*)?"', ('href="' + $prefix + 'style.css$1"')
    $content = $content -replace 'src="luxury\.js(\?[^"\s]*)?"', ('src="' + $prefix + 'luxury.js$1"')
    $content = $content -replace 'src="nav-behavior\.js(\?[^"\s]*)?"', ('src="' + $prefix + 'nav-behavior.js$1"')
    $content = $content -replace 'src="product-search-index\.js(\?[^"\s]*)?"', ('src="' + $prefix + 'product-search-index.js$1"')
    
    # Risorse (Images, Files, Videos)
    $content = $content -replace '(href|src)="(\./)?images/', ('$1="' + $prefix + 'images/')
    $content = $content -replace 'url\((\s*["'']?)(\./)?images/', ('url($1' + $prefix + 'images/')
    $content = $content -replace '(href|src)="files/', ('$1="' + $prefix + 'files/')
    $content = $content -replace '(href|src)="videos/', ('$1="' + $prefix + 'videos/')
    
    # Pagine HTML (Rinomina i link interni alla versione inglese)
    $content = $content -replace 'chi-siamo\.html', 'about.html'
    $content = $content -replace 'prodotti\.html', 'products.html'
    $content = $content -replace 'cataloghi\.html', 'catalogs.html'
    $content = $content -replace 'progetti\.html', 'projects.html'
    $content = $content -replace 'contatti\.html', 'contacts.html'
    $content = $content -replace 'grazie\.html', 'thank-you.html'
    $content = $content -replace 'prodotti-singoli/', 'products-single/'

    # Se siamo in profondità 2 (prodotti singoli), dobbiamo aggiustare i link per tornare alla root corretta
    if ($depth -eq 2) {
        $content = $content -replace '\.\./about\.html', '../about.html'
        $content = $content -replace '\.\./products\.html', '../products.html'
        $content = $content -replace '\.\./catalogs\.html', '../catalogs.html'
        $content = $content -replace '\.\./projects\.html', '../projects.html'
        $content = $content -replace '\.\./contacts\.html', '../contacts.html'
    }

    $content = Normalize-ImagePaths $content
    return $content
}

function Ensure-ProjectsModal([string]$content) {
    if ($content -match 'id="project-modal"') { return $content }
    
    # Modale pulita senza caratteri strani
    $modal = @'
    <div id="project-modal" class="project-modal" role="dialog" aria-modal="true" aria-hidden="true">
        <div class="project-modal-content" onclick="event.stopPropagation()">
            <button class="project-modal-close" onclick="closeProjectModal()" aria-label="Close">&times;</button>
            <img id="modal-project-image" src="" alt="Project detail" loading="lazy">
            <div class="project-modal-text">
                <span id="modal-project-tag" class="project-modal-tag"></span>
                <h3 id="modal-project-title"></h3>
                <p id="modal-project-desc"></p>
            </div>
            <div class="project-modal-hint">Click outside to close</div>
        </div>
    </div>
'@
    $footerToken = '<footer class="footer">'
    if ($content -match $footerToken) {
        $replacement = $modal + "`r`n`r`n" + $footerToken
        return ($content -replace [regex]::Escape($footerToken), $replacement)
    }
    return $content + "`r`n`r`n" + $modal
}

function Set-LangSelector([string]$content, [string]$itRel) {
    $itRel = $itRel -replace '\\', '/'
    $block = '<div class="lang-selector"><a href="' + $itRel + '" class="lang-item">IT</a><a href="#" class="lang-item active">EN</a></div>'
    return $content -replace '<div class="lang-selector">.*?</div>', $block
}

# ==========================================
# ESECUZIONE SCRIPT
# ==========================================

# 1. Elaborazione Root Files
$i = 0
foreach ($pair in $rootMap.GetEnumerator()) {
    $i++
    $percent = [math]::Round(($i / ($rootMap.Count + $productMap.Count)) * 100)
    Write-Progress -Activity "Rigenerazione pagine EN" -Status "Elaborazione: $($pair.Key)" -PercentComplete $percent

    $src = Join-Path $root $pair.Key
    $dst = Join-Path $root $pair.Value
    
    if (!(Test-Path $src)) { 
        Write-Warning "File non trovato: $src"
        continue 
    }

    # LEGGE IN UTF8 (Fondamentale!)
    $content = Get-Content $src -Raw -Encoding UTF8
    
    if ($pair.Key -eq 'progetti.html') {
        $content = Ensure-ProjectsModal $content
    }

    $content = Apply-Replacements $content
    $content = Update-Links $content 1
    
    $itRel = "../" + $pair.Key
    $content = Set-LangSelector $content $itRel
    
    # SALVA IN UTF8
    $dstDir = Split-Path $dst
    if (!(Test-Path $dstDir)) { New-Item -ItemType Directory -Force -Path $dstDir | Out-Null }
    Set-Content -Path $dst -Value $content -Encoding UTF8
}

# 2. Elaborazione Product Files
foreach ($pair in $productMap.GetEnumerator()) {
    $i++
    $percent = [math]::Round(($i / ($rootMap.Count + $productMap.Count)) * 100)
    Write-Progress -Activity "Rigenerazione prodotti EN" -Status "Elaborazione: $($pair.Key)" -PercentComplete $percent

    $src = Join-Path $root $pair.Key
    $dst = Join-Path $root $pair.Value

    if (!(Test-Path $src)) { continue }

    $content = Get-Content $src -Raw -Encoding UTF8
    $content = Apply-Replacements $content
    $content = Update-Links $content 2
    
    $itRel = "../../" + $pair.Key.Replace('\','/')
    $content = Set-LangSelector $content $itRel
    
    $dstDir = Split-Path $dst
    if (!(Test-Path $dstDir)) { New-Item -ItemType Directory -Force -Path $dstDir | Out-Null }
    Set-Content -Path $dst -Value $content -Encoding UTF8
}

Write-Progress -Activity "Rigenerazione completata" -Completed
Write-Host "FATTO! Pagine inglesi rigenerate con successo." -ForegroundColor Green