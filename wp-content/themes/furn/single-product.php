<?= get_header( 'animated' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="product-preview-wrapper">
        <div class="product-preview">
            <!-- Slider main container -->
            <div class="swiper product-preview__slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper product-preview__slider-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide product-preview__slider-slide">
                        <div class="product-preview__slider-wrapper-img">
							<?= the_post_thumbnail( 'full' ); ?>
                        </div>
                    </div>
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
					<?= the_field( 'product_info' ) ?>
                    <a class="product-info__info-link" href="<?= the_field( 'how_to_care' ) ?>" target="_blank">HOW TO CARE </a>
                    <a class="product-info__info-link" href="<?= the_field( 'fabric_catalog' ) ?>" target="_blank">FABRIC CATALOG</a>
                    <a class="product-info__info-link" href="<?= the_field( 'how_to_download_2d_3d' ) ?>">DOWNLOAD 2D 3D</a>
                    <a class="product-info__info-link" href="<?= the_field( 'shipping_information' ) ?>" target="_blank">SHIPPING INFORMATION</a>
                </div>
                <div class="product-info__wrapper-row-img">
                    <div class="product-info__wrapper-img ">
                        <img src="<?= the_field( 'thumbnail_in_description' ) ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; else: ?>
    Записей нет.
<?php endif;
require_once get_template_directory_uri() . DIRECTORY_SEPARATOR . 'assets/blocks/popup-order.php';
get_footer(); ?>