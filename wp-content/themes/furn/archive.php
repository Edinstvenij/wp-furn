<?php
/*
Template Name: shop
*/
get_header( 'shop-static' ); ?>

<section class="product-all-product">
    <div class="container">
        <div class="grid">
            <div class="grid__body">
				<?php
				// параметры по умолчанию
				$products = wc_get_products( array(
					'numberposts'      => 0,
					'orderby'          => 'date',
					'order'            => 'ASC',
					'include'          => array(),
					'exclude'          => array(),
					'suppress_filters' => true,
				) );
				foreach ( $products as $product ) {?>


                    <div class="grid__item <?= implode( ' ', $product->get_category_ids() ) ?> "> <!-- // table-->
                        <p class="grid__item-name"><?= $product->get_name(); ?></p>
                        <div class="wrapper-img wrapper-img-products">
                            <a href="<?= $product->get_permalink(); ?>">
								<?= $product->get_image( 'full' ); ?>
                            </a>
                        </div>
                    </div>
				<?php } ?>
            </div>
        </div>
    </div>
</section>

<?= get_footer(); ?>
