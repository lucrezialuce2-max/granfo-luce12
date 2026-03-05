<?php
$page_lang = $page_lang ?? 'it';
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($page_lang, ENT_QUOTES, 'UTF-8'); ?>">
<head>
<?php include __DIR__ . '/head.php'; ?>
</head>
<body>
    <div id="preloader">
        <img src="./images/brand/granfoluce-logo.png" alt="GRANFOLUCE" class="preloader-icon">
    </div>

<?php include __DIR__ . '/header-it.php'; ?>
