<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRANFO | Light Design Verona</title>
    <meta name="description" content="Artisans of light since 1970. Discover our collections in Murano glass and bespoke design. Located in Verona, Italy.">
    <link rel="stylesheet" href="/style.css?v=4.9">
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
      "description": "Granfo Luce - Artisans of light since 1970 in Verona with Murano glass and bespoke design solutions",
      "sameAs": [
        "https://www.facebook.com/Granfoluce.lampadari/",
        "https://www.instagram.com/granfoluce/",
        "https://it.pinterest.com/granfolucefb/"
      ]
    }
    </script>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <meta property="og:title" content="GRANFO | Light Design Verona">
    <meta property="og:description" content="Artisans of light since 1970. Discover our collections in Murano glass and bespoke design.">
    <meta property="og:image" content="https://granfoluce.com/images/hero/hero-main-graphic.webp">
    <meta property="og:url" content="https://granfoluce.com">
    <meta property="og:type" content="website">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Segoe+UI:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Preloader critico per evitare flash iniziale */
        #preloader { position: fixed; inset: 0; display: flex; align-items: center; justify-content: center; background: #0e1713; z-index: 99999; opacity: 1; visibility: visible; transition: opacity 0.3s ease, visibility 0.3s ease; }
        #preloader.loaded { opacity: 0; visibility: hidden; pointer-events: none; }
        .preloader-icon { width: 120px; height: auto; animation: breathe 2s infinite ease-in-out; }
        @keyframes breathe { 0%, 100% { transform: scale(1); opacity: 1; } 50% { transform: scale(1.05); opacity: 0.7; } }
        
        /* Prevent layout shift */
        body { font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Playfair Display', Georgia, serif; }
    </style>
</head>
<body>
    <div id="preloader">
        <img src="../images/brand/granfoluce-logo.png" alt="GRANFOLUCE" class="preloader-icon">
    </div>

    <?php
    $currentPage = basename(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: 'index.php');
    $isActive = function (array $pages) use ($currentPage) {
        return in_array($currentPage, $pages, true) ? 'active' : '';
    };
    ?>
    <nav class="navbar">
        <div class="container nav-container">
            <a href="index.php" class="logo"><img src="../images/brand/granfoluce-logo.png" alt="GRANFOLUCE" style="height: 50px;"></a>
            <div class="nav-links">
                <a href="index.php" class="<?php echo $isActive(['index.php']); ?>">Home</a>
                <a href="products.php" class="<?php echo $isActive(['products.php', 'domus.php']); ?>">Products</a>
                <a href="catalogs.php" class="<?php echo $isActive(['catalogs.php']); ?>">Catalogs</a>
                <a href="projects.php" class="<?php echo $isActive(['projects.php']); ?>">Projects</a>
                <a href="blog.php" class="<?php echo $isActive(['blog.php']); ?>">Blog</a>
                <a href="about.php" class="<?php echo $isActive(['about.php']); ?>">About</a>
                <a href="contacts.php" class="<?php echo $isActive(['contacts.php']); ?>">Contacts</a>
            </div>
            <div class="nav-actions">
                <button class="icon-btn" onclick="toggleSearch()" aria-label="Search"><svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                <div class="lang-selector"><a href="../chi-siamo.php" class="lang-item">IT</a><a href="#" class="lang-item active">EN</a></div>
                <button class="menu-toggle" onclick="toggleMenu()" aria-label="Menu"><span></span><span></span><span></span></button>
            </div>
        </div>
        <div id="mobile-menu" class="mobile-menu">
            <a href="index.php" class="<?php echo $isActive(['index.php']); ?>">Home</a>
            <a href="products.php" class="<?php echo $isActive(['products.php', 'domus.php']); ?>">Products</a>
            <a href="catalogs.php" class="<?php echo $isActive(['catalogs.php']); ?>">Catalogs</a>
            <a href="projects.php" class="<?php echo $isActive(['projects.php']); ?>">Projects</a>
            <a href="blog.php" class="<?php echo $isActive(['blog.php']); ?>">Blog</a>
            <a href="about.php" class="<?php echo $isActive(['about.php']); ?>">About</a>
            <a href="contacts.php" class="<?php echo $isActive(['contacts.php']); ?>">Contacts</a>
        </div>
    </nav>

    <div id="search-overlay" class="search-overlay">
        <button class="close-search" onclick="toggleSearch()">✕</button>
        <div class="search-container"><input type="text" placeholder="Search..."></div>
    </div>

