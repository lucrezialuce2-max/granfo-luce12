<?php
$page_title = $page_title ?? 'Granfo Luce | Lampadari e Progettazione Illuminotecnica Verona';
$page_description = $page_description ?? 'Granfo Luce (Granfo Illuminazione S.N.C.) a Verona in Via Ponte S. Pancrazio 8. Esperti in lampadari artigianali, luce architetturale e progetti su misura dal 1970.';
$page_og_image = $page_og_image ?? 'https://granfoluce.com/images/hero/hero-main-graphic.webp';
$page_url = $page_url ?? 'https://granfoluce.com';
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
<link rel="stylesheet" href="/style.css?v=4.9">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($page_og_image, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:type" content="website">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Granfo Luce",
  "legalName": "Granfo Illuminazione S.N.C.",
  "url": "https://granfoluce.com",
  "telephone": "+39 045 528541",
  "email": "info@granfoluce.it",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Via Ponte S. Pancrazio 8",
    "addressLocality": "Verona",
    "postalCode": "37133",
    "addressCountry": "IT"
  },
  "image": "https://granfoluce.com/images/brand/granfoluce-logo.png",
  "description": "Granfo Luce - Esperti in lampadari artigianali, luce architetturale e progetti su misura dal 1970 a Verona",
  "sameAs": [
    "https://www.facebook.com/Granfoluce.lampadari/",
    "https://www.instagram.com/granfoluce/",
    "https://it.pinterest.com/granfolucefb/"
  ]
}
</script>
<style>
    #preloader { position: fixed; inset: 0; display: flex; align-items: center; justify-content: center; background: #0e1713; z-index: 99999; opacity: 1; visibility: visible; transition: opacity 0.3s ease, visibility 0.3s ease; }
    #preloader.loaded { opacity: 0; visibility: hidden; pointer-events: none; }
    .preloader-icon { width: 120px; height: auto; animation: breathe 2s infinite ease-in-out; }
    @keyframes breathe { 0%, 100% { transform: scale(1); opacity: 1; } 50% { transform: scale(1.05); opacity: 0.7; } }
    body { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
    h1, h2, h3, h4, h5, h6 { font-family: 'Playfair Display', Georgia, serif; }
</style>
