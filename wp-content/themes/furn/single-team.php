<?php
get_header( 'team' ); ?>
    <main id="top" class="wrapper-container-designer">
        <section class="designer">
            <div class="designer__wrapper">
                <div class="wrapper-img designer__wrapper-item">
                    <img class="designer__img" src="<?= the_post_thumbnail() ?>
                    <div class=" designer__description">
                    <div class="designer__description-background"></div>
                    <div class="designer__text">
                        <h2 class="designer__title"><?= the_title() ?></h2>
                        <p class="designer__title designer__title-subtitle"><?= the_field( 'job_title' ) ?></p>
                        <div class="designer__subtitle"><?= the_content(); ?></div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <!-- END main -->

<?= get_footer(); ?>