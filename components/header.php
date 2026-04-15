<?php
/** @var string $currentPage */
$currentPage = $currentPage ?? '';

function navLink(string $page, string $label, string $href, string $currentPage): string {
    $active = $currentPage === $page ? ' active' : '';
    return '<li class="nav-item' . $active . '"><a class="nav-link" href="' . $href . '">' . htmlspecialchars($label) . '</a></li>';
}
?>
<!--::header part start::-->
<header class="main_menu <?= $currentPage === 'home' ? 'home_menu' : '' ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo.png" alt="KOUBA">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <?= navLink('home',    'Home',    'index.php',   $currentPage) ?>
                            <?= navLink('about',   'About',   'about.php',   $currentPage) ?>
                            <?= navLink('menu',    'Menu',    'menu.php',    $currentPage) ?>
                            <?= navLink('chefs',   'Chefs',   'chefs.php',   $currentPage) ?>
                            <?= navLink('contact', 'Contact', 'contact.php', $currentPage) ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->
