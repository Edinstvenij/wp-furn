<?= get_header(); ?>

<div class="header__nav-overlay"></div>
<header class="header-all-product">
    <div class="container">
        <div class="row header-all-product__row">
            <div class="wrapper-img wrapper-header-all-product-logo"><?= the_custom_logo(); ?></div>
            <div class="header__burger header__burger-right menu-toggle">
                <span class="header__burger-desctop"><a href="#top">MENU+</a></span>
                <span class="header__burger-mobail header__burger-mobail-top"><a href="#top"></a></span>
            </div>
        </div>
    </div>

    <!-- block navigation -->
	<?php require_once 'assets/blocks/navigation.php' ?>
    <!-- END block navigation -->
</header>