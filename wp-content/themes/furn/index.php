<?= get_header(); ?>

<!-- block navigation -->
<?php require_once 'assets/blocks/navigation.php' ?>
<!-- END block navigation -->

<section id="top" class="header">
    <div class="header__wrapper">
        <section class="header__body">
            <div class="swiper slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper slider__wrapper">
                    <!-- Slides -->
					<?php
					$sliderPhotos = get_posts( [
						'posts_per_page' => 0,
						'category_name'  => '',
						'post_type'      => 'main_slider',
						'order'          => 'ASC',
					] );
					foreach ( $sliderPhotos as $post ) {
						setup_postdata( $post ); ?>
                        <div class="swiper-slide slider__slide">
                            <div class="slider__wrapper-img"><?= the_post_thumbnail( 'full' ); ?></div>
                        </div>
					<?php }
					wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="row row-ai-center row-position-rel">
                <div class="header__logo wrapper-img wrapper-header-logo">
                    <img src="<?= get_template_directory_uri() . DIRECTORY_SEPARATOR ?>assets/img/logo.svg" alt="logo">
                </div>
                <div class="header__burger header__burger-main menu-toggle">
                    <span class="header__burger-desctop"><a href="#top">MENU+</a></span>
                    <span class="header__burger-mobail"><a href="#top"></a></span>
                </div>
            </div>
            <div class="header__marquee">
                <div>
                    <p>HI, IT'S THE UKRAINIAN FURNITURE MANUFACTURE</p>
                    <p>HI, IT'S THE UKRAINIAN FURNITURE MANUFACTURE</p>
                    <p>HI, IT'S THE UKRAINIAN FURNITURE MANUFACTURE</p>
                    <p>HI, IT'S THE UKRAINIAN FURNITURE MANUFACTURE</p>
                </div>
            </div>
        </section>
    </div>
</section>

<?= get_footer(); ?>
