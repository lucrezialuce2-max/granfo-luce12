# Script per convertire pagine EN a usare includes
# Converte tutte le pagine en/*.php a usare header-en.php e footer-en.php

$enFolder = "c:\Users\lucre_lsq7qo1\Desktop\lucri\1840 02-03\en"
$files = @(
    "index.php",
    "products.php", 
    "catalogs.php",
    "projects.php",
    "blog.php",
    "contacts.php",
    "domus.php",
    "privacy-policy.php",
    "thank-you.php",
    "blog-3-lighting-layers-living-room.php",
    "blog-bespoke-lighting.php",
    "blog-cleaning-murano-chandelier.php",
    "blog-dark-hallway-lighting.php",
    "blog-table-lamp-height.php",
    "blog-warm-cool-neutral-light.php"
)

foreach ($file in $files) {
    $filePath = Join-Path $enFolder $file
    if (-not (Test-Path $filePath)) {
        Write-Host "❌ File non trovato: $file"
        continue
    }
    
    $content = Get-Content -Path $filePath -Raw -Encoding UTF8
    
    # Pattern per trovare il </div> che chiude search-overlay
    # Questo è dopo <div id="search-overlay"...
    if ($content -match '(<!DOCTYPE html>.*?</div>\s*\n\s*</div>[\r\n]+)(\s*<header class="page-header">)') {
        # Sostituisci header
        $newContent = $content -replace '<!DOCTYPE html>.*?</div>\s*\n\s*</div>[\r\n]+(?=\s*<header class="page-header">)', 
            "<?php include 'includes/header-en.php'; ?>`n"
        
        # Sostituisci footer - cerca </body> </html> alla fine
        $newContent = $newContent -replace '</body>[\r\n]*</html>[\r\n]*$', "<?php include 'includes/footer-en.php'; ?>"
        
        # Scrivi file
        Set-Content -Path $filePath -Value $newContent -Encoding UTF8
        Write-Host "✅ Convertito: $file"
    } else {
        Write-Host "⚠️  Skipped $file - pattern non riconosciuto"
    }
}

Write-Host "`n✅ Conversione completata!"
