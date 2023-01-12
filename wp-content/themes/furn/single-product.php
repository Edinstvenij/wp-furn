<?= get_header( 'shop-animated' );
$product = wc_get_product();
?>
    <section class="product-preview-wrapper">
        <div class="product-preview">
            <!-- Slider main container -->
            <div class="swiper product-preview__slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper product-preview__slider-wrapper">
                    <!-- Slides -->
					<?php foreach ( $product->get_gallery_image_ids() as $gallery_image_id ) { ?>
                        <div class="swiper-slide product-preview__slider-slide">
                            <div class="product-preview__slider-wrapper-img">
								<?= wp_get_attachment_image( $gallery_image_id, 'full' ); ?>
                            </div>
                        </div>
					<?php } ?>
                </div>
                <!-- If we need navigation buttons -->
                <div class="product-preview__slider-button-prev">
                    <div class="product-preview__slider-wrapper-button">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/product/arrow-left.svg" alt="">
                    </div>
                </div>
                <div class="product-preview__slider-button-next">
                    <div class="product-preview__slider-wrapper-button">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/product/arrow-right.svg" alt="">
                    </div>
                </div>
                <!-- If we need titles and order buttons -->
                <div class="col product-preview__slider-col">
                    <div class="product-preview__slider-col-wrapper">
                        <p class="product-preview__slider-product-name">prowling lounge chair olive</p>
                        <button class="product-preview__slider-product-order-button" style="background-color: <?= the_field( 'color' ) ?>;">Check
                            price
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-info" style="background-color: <?= the_field( 'color' ) ?>;">
        <div class="product-info__wrapper">
            <div class="row product-info__row">
                <div class="col product-info__info-col">
                    <p class="product-info__info-link">PRODUCT INFORMATION</p>
					<?= $product->get_description(); ?>

					<?php if ( get_field( 'how_to_care' ) != null ) { ?>
                        <a class="product-info__info-link" href="<?= the_field( 'how_to_care' ) ?>" target="_blank">HOW TO CARE </a>
					<?php } ?>

					<?php if ( get_field( 'fabric_catalog' ) != null ) { ?>
                        <a class="product-info__info-link" href="<?= the_field( 'fabric_catalog' ) ?>" target="_blank">FABRIC CATALOG</a>
					<?php } ?>

					<?php if ( get_field( 'how_to_download_2d_3d' ) != null ) { ?>
                        <a class="product-info__info-link" href="<?= the_field( 'how_to_download_2d_3d' ) ?>">DOWNLOAD 2D 3D</a>
					<?php } ?>

					<?php if ( get_field( 'shipping_information' ) != null ) { ?>
                        <a class="product-info__info-link" href="<?= the_field( 'shipping_information' ) ?>" target="_blank">SHIPPING INFORMATION</a>
					<?php } ?>
                </div>
				<?php if ( get_field( 'miniature' ) != null ) { ?>
                    <div class="product-info__wrapper-row-img">
                        <div class="product-info__wrapper-img ">
                            <img src="<?= the_field( 'miniature' ) ?>" alt="">
                        </div>
                    </div>
				<?php } ?>
            </div>
        </div>
    </section>
<?php require_once 'assets/blocks/popup-order.php';
get_footer(); ?>