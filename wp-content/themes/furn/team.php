<?php
/*
Template Name: team
*/
get_header( 'team' ); ?>

    <main id="top" class="wrapper-container-designer">
        <section class="about">
            <div class="about__text">
                <div class="designer__subtitle designer__subtitle-descpription"><?= the_content(); ?></div>
            </div>
        </section>
        <section class="designer">
            <div class="designer__wrapper">
				<?php
				$my_posts = get_posts( array(
					'orderby'          => 'date',
					'order'            => 'ASC',
					'include'          => array(),
					'exclude'          => array(),
					'post_type'        => 'team',
					'suppress_filters' => true
				) );

				global $post;

				foreach ( $my_posts as $post ) {
					setup_postdata( $post ); ?>

                    <div class="wrapper-img designer__wrapper-item">
						<?= the_post_thumbnail( 'full', [ 'class' => 'designer__img', ] ); ?>
                        <div class="designer__description">
                            <div class="designer__description-background"></div>
                            <a href="<?= the_permalink() ?>">
                                <div class="designer__text">
                                    <h2 class="designer__title"><?= the_title(); ?></h2>
                                    <p class="designer__title designer__title-subtitle"><?= the_field( 'job_title' ); ?></p>
                                    <div class="designer__subtitle"><?= the_content(); ?></div>
                                </div>
                            </a>
                        </div>

                    </div>


				<?php }
				wp_reset_postdata();
				?>
            </div>
        </section>
    </main>
    <!-- END main -->

<?= get_footer(); ?>