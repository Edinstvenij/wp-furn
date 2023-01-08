<?php
/*
Template Name: shop
*/

$product = [
	[
		'filter' => "sitting",
		'name'   => "prowling lounge chair <br> olive",
		'link'   => "product-armchair-olive.php",
		'srcset' => "img/1-all-product.webp",
		'type'   => "image/webp",
		'img'    => "img/1-all-product.png",
		'alt'    => "SITTING",
	],
	[
		'filter' => "sitting",
		'name'   => "prowling lounge chair<br> grape",
		'link'   => "product-armchair-grape.php",
		'srcset' => "img/2-all-product.webp",
		'type'   => "image/webp",
		'img'    => "img/2-all-product.png",
		'alt'    => "SITTING",
	],
	[
		'filter' => "sitting",
		'name'   => "prowling lounge chair <br> mushroom",
		'link'   => "product-armchair-mushroom.php",
		'srcset' => "img/3-all-product.webp",
		'type'   => "image/webp",
		'img'    => "img/3-all-product.png",
		'alt'    => "SITTING",
	],
	[
		'filter' => "sitting",
		'name'   => "lurking pouf <br> olive",
		'link'   => "product-puff-olive.php",
		'srcset' => "img/4-all-product.webp",
		'type'   => "image/webp",
		'img'    => "img/4-all-product.png",
		'alt'    => "SITTING",
	],
	[
		'filter' => "sitting",
		'name'   => "lurking pouf <br> grape",
		'link'   => "product-puff-grape.php",
		'srcset' => "img/5-all-product.webp",
		'type'   => "image/webp",
		'img'    => "img/5-all-product.png",
		'alt'    => "SITTING",
	],
	[
		'filter' => "sitting",
		'name'   => "lurking pouf <br> mushroom",
		'link'   => "product-puff-mushroom.php",
		'srcset' => "img/6-all-product.webp",
		'type'   => "image/webp",
		'img'    => "img/6-all-product.png",
		'alt'    => "SITTING",
	],
	[
		'filter' => "table",
		'name'   => "LIQUID TABLE",
		'link'   => "product-team.php",
		'srcset' => "img/7-all-product.webp",
		'type'   => "image/webp",
		'img'    => "img/7-all-product.png",
		'alt'    => "table",
	],
]

?>

<?= get_header( 'shop-static' ); ?>

<section class="product-all-product">
    <div class="container">
        <div class="grid">
            <div class="grid__body">
				<?php
				// параметры по умолчанию
				$my_posts = get_posts( array(
					'numberposts'      => 0,
					'orderby'          => 'date',
					'order'            => 'DESC',
					'include'          => array(),
					'exclude'          => array(),
					'post_type'        => 'product',
					'suppress_filters' => true,
				) );

				foreach ( $my_posts as $post ) {
					setup_postdata( $post );
					?>
                    <div class="grid__item table"> <!-- // table-->
                        <p class="grid__item-name"><?= the_title(); ?></p>
                        <div class="wrapper-img wrapper-img-products">
                            <a href="<?= the_permalink(); ?>">
								<?= the_post_thumbnail(); ?>
                            </a>
                        </div>
                    </div>
				<?php }

				wp_reset_postdata();
				?>
            </div>
        </div>
    </div>
</section>

<?= get_footer(); ?>
