<?php
/*
Template Name: delivery
*/
get_header( 'static' ); ?>

    <div class="container">
        <section class="delivery">

            <div class="delivery__item">
                <h4 class="delivery__title">Information about delivery</h4>
                <div class="delivery__text">
					<?= the_field( 'information_about_delivery' ) ?>
                </div>
            </div>

            <div class="delivery__item">
                <h4 class="delivery__title">Lead time</h4>
                <div class="delivery__text">
					<?= the_field( 'lead_time' ) ?>
                </div>
            </div>

            <div class="delivery__item">
                <h4 class="delivery__title">Returns</h4>
                <div class="delivery__text">
					<?= the_field( 'returns' ) ?>
                </div>
            </div>

            <div class="delivery__item">
                <h4 class="delivery__title">Damaged or defective items</h4>
                <div class="delivery__text">
					<?= the_field( 'damaged_or_defective_items' ) ?>
                </div>
            </div>

        </section>
    </div>

<?= get_footer(); ?>