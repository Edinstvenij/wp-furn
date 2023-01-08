<?php
$filters = [
	'table',
	'sitting',
	'all',
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/swiper.css"/>
    <link rel="stylesheet" href="assets/css/style.min.css">
    <meta name="p:domain_verify" content="dd943541b4e29d1928acdccf90e85b83"/>
    <title><?= wp_get_document_title(); ?></title>
</head>

<body>
<div class="header__nav-overlay"></div>
<header class="header-all-product
  <?php if ( $_SERVER['REQUEST_URI'] != '/shop.php' && $_SERVER['REQUEST_URI'] != '/delivery.php' && $_SERVER['REQUEST_URI'] != '/index.php' && $_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/contact.php' ) {
	echo 'header-product-preview';
} ?>">
    <div class="container">
        <div class="row header-all-product__row">
            <div class="wrapper-img wrapper-header-all-product-logo
         <?php if ( $_SERVER['REQUEST_URI'] != '/shop.php' && $_SERVER['REQUEST_URI'] != '/delivery.php' && $_SERVER['REQUEST_URI'] != '/team.php' && $_SERVER['REQUEST_URI'] != '/index.php' && $_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/contact.php' ) {
				echo 'animation-turn';
			} ?>">

                <a href="/"><img src="assets/img/mini-logo.png" alt=""></a>
            </div>
			<?php if ( $_SERVER['REQUEST_URI'] != '/delivery.php' && $_SERVER['REQUEST_URI'] != '/team.php' && $_SERVER['REQUEST_URI'] != '/index.php' && $_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/contact.php' ) { ?>
                <nav class="catalog">
                    <ul class="catalog__ul">
						<?php if ( $_SERVER['REQUEST_URI'] != '/shop.php' ) { ?>
							<?php foreach ( $filters as $value ) : ?>
                                <li class="catalog__li <?= $value == 'all' ? "active" : '' ?>" data-filter="<?= $value ?>"><a href="all-product.php"><?= $value ?></a></li>
							<?php endforeach ?>
						<?php } else { ?>
							<?php foreach ( $filters as $value ) : ?>
                                <li class="catalog__li <?= $value == 'all' ? "active" : '' ?>" data-filter="<?= $value ?>"><?= $value ?></li>
							<?php endforeach ?>
						<?php } ?>
                    </ul>
                </nav>
                <div class="header__burger header__burger-right menu-toggle">
                    <span class="header__burger-desctop"><a href="#top">MENU+</a></span>
                    <span class="header__burger-mobail header__burger-mobail-top"><a href="#top"></a></span>
                </div>
			<?php } else { ?>
                <div class="header__burger header__burger-right menu-toggle">
                    <span class="header__burger-desctop"><a href="#top">MENU+</a></span>
                    <span class="header__burger-mobail header__burger-mobail-top"><a href="#top"></a></span>
                </div>
			<?php } ?>
        </div>
    </div>

    <!-- block navigation -->
	<?php require_once 'blocks/navigation.php' ?>
    <!-- END block navigation -->
</header>