# ==========================================
# CONFIGURAZIONE PERCORSI
# ==========================================

# Imposta la root una cartella sopra la posizione dello script
$root = Join-Path $PSScriptRoot ".."
$src = Join-Path $root 'index.html'
$dst = Join-Path $root 'en\index.html'

Write-Host "Rigenerazione Index EN in corso..." -ForegroundColor Cyan

# ==========================================
# LETTURA FILE (IMPORTANTE: UTF8)
# ==========================================

if (!(Test-Path $src)) {
    Write-Error "File index.html non trovato nella root!"
    exit
}

$content = Get-Content $src -Raw -Encoding UTF8

# ==========================================
# TRADUZIONI TESTI
# ==========================================

$replacements = [ordered]@{
    'lang="it"' = 'lang="en"'
    'Chi Siamo' = 'About'
    'Contattaci' = 'Contact Us'
    'Contatti' = 'Contacts'
    'Cataloghi' = 'Catalogs'
    'Progetti' = 'Projects'
    'Prodotti' = 'Products'
    'Le Collezioni' = 'Collections'
    'Vieni a trovarci in showroom per scoprire il nostro catalogo nella sua interezza.' = 'Visit our showroom to discover our full catalog.'
    'Filtra' = 'Filter'
    'Vedi Risultati' = 'View results'
    'Applica filtri' = 'Apply filters'
    'Categoria' = 'Category'
    'Materiale' = 'Material'
    'Stile' = 'Style'
    'Moderno' = 'Modern'
    'Classico' = 'Classic'
    'Contemporaneo' = 'Contemporary'
    'Vasi e Oggettistica' = 'Vases & Decor'
    'Soffitto' = 'Ceiling'
    'Parete' = 'Wall'
    'Terra' = 'Floor'
    'Sospensioni' = 'Suspensions'
    'Sospensione' = 'Suspension'
    'Lampada a sospensione' = 'Suspension lamp'
    'Lampada da tavolo' = 'Table lamp'
    'Prezzo su richiesta' = 'Price on request'
    'Richiedi Informazioni' = 'Request information'
    'Caratteristiche principali' = 'Key features'
    'Servizi inclusi' = 'Included services'
    'Consulenza' = 'Consulting'
    'Assistenza' = 'Support'
    'Garanzia' = 'Warranty'
    'anni' = 'years'
    'su difetti di produzione' = 'on manufacturing defects'
    'Prova materiali a Verona' = 'See materials in our Verona showroom'
    'Email' = 'Email'
    'Telefono' = 'Phone'
    'Indirizzo' = 'Address'
    'Attacco' = 'Socket'
    'Colori' = 'Colors'
    'Dimensioni' = 'Dimensions'
    'Lavorazione' = 'Craftsmanship'
    'Tipo luce' = 'Light type'
    'Consumo' = 'Consumption'
    'Design' = 'Design'
    'Funzionalità' = 'Function'
    'Base' = 'Base'
    'Paralume' = 'Shade'
    'Diametro' = 'Diameter'
    'Colore' = 'Color'
    'Mostrando' = 'Showing'
    'Nessun prodotto trovato.' = 'No products found.'
    'Cerca...' = 'Search...'
    'Cerca..' = 'Search..'
    'Cerca' = 'Search'
}

foreach ($key in $replacements.Keys) {
    $content = $content -replace [regex]::Escape($key), $replacements[$key]
}

# ==========================================
# AGGIORNAMENTO LINK (Path Relativi)
# ==========================================

# CSS e JS (gestisce anche eventuali query string tipo style.css?v=1)
$content = $content -replace 'href="style\.css(\?[^"\s]*)?"', 'href="../style.css$1"'
$content = $content -replace 'src="luxury\.js(\?[^"\s]*)?"', 'src="../luxury.js$1"'
$content = $content -replace 'src="nav-behavior\.js(\?[^"\s]*)?"', 'src="../nav-behavior.js$1"'
$content = $content -replace 'src="product-search-index\.js(\?[^"\s]*)?"', 'src="../product-search-index.js$1"'

# Cartelle Risorse
$content = $content -replace '(href|src)="images/', '$1="../images/'
$content = $content -replace '(href|src)="files/', '$1="../files/'
$content = $content -replace '(href|src)="videos/', '$1="../videos/'

# Pagine HTML
$content = $content -replace 'chi-siamo\.html', 'about.html'
$content = $content -replace 'prodotti\.html', 'products.html'
$content = $content -replace 'cataloghi\.html', 'catalogs.html'
$content = $content -replace 'progetti\.html', 'projects.html'
$content = $content -replace 'contatti\.html', 'contacts.html'
$content = $content -replace 'grazie\.html', 'thank-you.html'
$content = $content -replace 'prodotti-singoli/', 'products-single/'

# Selettore Lingua
$langBlock = '<div class="lang-selector"><a href="../index.html" class="lang-item">IT</a><a href="#" class="lang-item active">EN</a></div>'
$content = $content -replace '<div class="lang-selector">.*?</div>', $langBlock

# ==========================================
# SALVATAGGIO
# ==========================================

Set-Content -Path $dst -Value $content -Encoding UTF8
Write-Host "en/index.html aggiornato con successo!" -ForegroundColor Green