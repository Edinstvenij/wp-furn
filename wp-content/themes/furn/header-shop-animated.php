<?= get_header(); ?>
<div class="header__nav-overlay"></div>
<header class="header-all-product header-product-preview">
    <div class="container">
        <div class="row header-all-product__row">
            <div class="wrapper-img wrapper-header-all-product-logo animation-turn"><?= the_custom_logo(); ?></div>
			<?php require_once 'assets/blocks/catalog.php' ?>
            <div class="header__burger header__burger-right menu-toggle">
                <span class="header__burger-desctop"><a href="#top">MENU+</a></span>
                <span class="header__burger-mobail header__burger-mobail-top"><a href="#top"></a></span>
            </div>
        </div>
    </div>
	<?php require_once 'assets/blocks/navigation.php' ?>
</header>