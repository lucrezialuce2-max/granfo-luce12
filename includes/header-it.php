<?php
$currentPage = basename(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: 'index.php');
$isActive = function (array $pages) use ($currentPage) {
    return in_array($currentPage, $pages, true) ? 'active' : '';
};
?>
<nav class="navbar">
    <div class="container nav-container">
        <a href="index.php" class="logo"><img src="./images/brand/granfoluce-logo.png" alt="GRANFOLUCE" style="height: 50px;"></a>
        <div class="nav-links">
            <a href="index.php" class="<?php echo $isActive(['index.php']); ?>">Home</a>
            <a href="prodotti.php" class="<?php echo $isActive(['prodotti.php', 'domus.php']); ?>">Prodotti</a>
            <a href="cataloghi.php" class="<?php echo $isActive(['cataloghi.php']); ?>">Cataloghi</a>
            <a href="progetti.php" class="<?php echo $isActive(['progetti.php']); ?>">Progetti</a>
            <a href="blog.php" class="<?php echo $isActive(['blog.php']); ?>">Blog</a>
            <a href="chi-siamo.php" class="<?php echo $isActive(['chi-siamo.php']); ?>">Chi Siamo</a>
            <a href="contatti.php" class="<?php echo $isActive(['contatti.php']); ?>">Contatti</a>
        </div>
        <div class="nav-actions">
            <button class="icon-btn" onclick="toggleSearch()"><svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
            <div class="lang-selector"><a href="#" class="lang-item active">IT</a><a href="en/index.php" class="lang-item">EN</a></div>
            <button class="menu-toggle" onclick="toggleMenu()" aria-label="Menu"><span></span><span></span><span></span></button>
        </div>
    </div>
    <div id="mobile-menu" class="mobile-menu">
        <a href="index.php" class="<?php echo $isActive(['index.php']); ?>">Home</a>
        <a href="prodotti.php" class="<?php echo $isActive(['prodotti.php', 'domus.php']); ?>">Prodotti</a>
        <a href="cataloghi.php" class="<?php echo $isActive(['cataloghi.php']); ?>">Cataloghi</a>
        <a href="progetti.php" class="<?php echo $isActive(['progetti.php']); ?>">Progetti</a>
        <a href="blog.php" class="<?php echo $isActive(['blog.php']); ?>">Blog</a>
        <a href="chi-siamo.php" class="<?php echo $isActive(['chi-siamo.php']); ?>">Chi Siamo</a>
        <a href="contatti.php" class="<?php echo $isActive(['contatti.php']); ?>">Contatti</a>
    </div>
</nav>

<div id="search-overlay" class="search-overlay">
    <button class="close-search" onclick="toggleSearch()">✕</button>
    <div class="search-container">
        <input type="text" placeholder="Cerca">
    </div>
</div>

