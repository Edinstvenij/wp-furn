<?php
$filters = [
	'table',
	'sitting',
	'all',
];
?>


<?= get_header(); ?>

<div class="header__nav-overlay"></div>
<header class="header-all-product">
    <div class="container">
        <div class="row header-all-product__row">
            <div class="wrapper-img wrapper-header-all-product-logo"><?= the_custom_logo(); ?></div>
            <nav class="catalog">
                <ul class="catalog__ul">
					<?php foreach ( $filters as $value ) : ?>
                        <li class="catalog__li <?= $value == 'all' ? "active" : '' ?>" data-filter="<?= $value ?>"><?= $value ?></li>
					<?php endforeach ?>
                </ul>
            </nav>
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