<?php
$pageTitle = $pageTitle ?? '4th ASEAN–China Justice Forum';
$pageDescription = $pageDescription ?? '';
$activePage = $activePage ?? '';
$bannerImage = $bannerImage ?? 'assets/images/banner2.jpg';
$styleVersion = $styleVersion ?? '20260919b';
$ogTitle = $ogTitle ?? null;
$ogDescription = $ogDescription ?? null;
$ogImage = $ogImage ?? null;

function nav_class(string $page, string $activePage): string
{
    return $page === $activePage ? ' class="is-active"' : '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&amp;family=Source+Sans+3:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?= rawurlencode($styleVersion) ?>">
<?php if ($ogTitle !== null): ?>
    <meta property="og:title" content="<?= htmlspecialchars($ogTitle, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>
<?php if ($ogDescription !== null): ?>
    <meta property="og:description" content="<?= htmlspecialchars($ogDescription, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>
<?php if ($ogImage !== null): ?>
    <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>
</head>

<body>
    <a class="skip-link" href="#content">Skip to content</a>
    <header class="site-header">
        <div class="wrap topbar">
            <div class="host">Hosted by the Supreme People's Court of the Socialist Republic of Viet Nam</div>
            <div class="when"><span>Da Nang</span> · 9–12 October 2026</div>
        </div>
        <a class="banner" href="./">
            <img src="<?= htmlspecialchars($bannerImage, ENT_QUOTES, 'UTF-8') ?>"
                alt="The 4th ASEAN–China Justice Forum — Da Nang, Viet Nam, 9–12 October 2026">
        </a>
    </header>
    <div class="nav-wrap">
        <div class="wrap nav-inner">
            <a class="brand" href="./">Justice Forum 2026</a>
            <button class="menu-btn" type="button" aria-expanded="false" aria-controls="site-nav">Menu</button>
            <nav id="site-nav" class="nav" aria-label="Main">
                <div class="drop">
                    <a<?= nav_class('home', $activePage) ?> href="./">Home</a>
                    <div class="drop-menu">
                        <a href="./#introduction">Introduction</a>
                        <a href="./#venue">Venue</a>
                    </div>
                </div>
                <a<?= nav_class('programme', $activePage) ?> href="programme.html">Tentative Programme</a>
                <a<?= nav_class('bilateral', $activePage) ?> href="bilateral-meeting.html">Bilateral Meeting</a>
                <a<?= nav_class('layout', $activePage) ?> href="layout.html">Meeting Room Layout</a>
                <a<?= nav_class('sightseeing', $activePage) ?> href="sightseeing.html">Da Nang Sightseeing Tour</a>
                <a href="https://drive.google.com/drive/folders/1L1gjEtTyr0Xzblm1jfE_zZKrJ3kMIXxA"
                    target="_blank" rel="noopener noreferrer">Photo Gallery</a>
            </nav>
        </div>
    </div>
