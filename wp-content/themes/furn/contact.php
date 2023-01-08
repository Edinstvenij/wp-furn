<?php
/*
Template Name: contact
*/

get_header( 'static' );
?>
    <div class="container">
        <section class="contact">
            <div class="row row-jcsb contact__row">
                <div class="col contact__col">
                    <p class="contact__title"><?= the_field( 'text_left-top' ) ?></p>
                    <p class="contact__title contact__site">Fürn.</p>
                    <div class="contact__links">
                        <a class="contact__link" href="mailto:<?= the_field( 'email_address' ) ?>"><?= the_field( 'email_address' ) ?></a>
                        <p class="contact__link"><?= the_field( 'address' ) ?></p>
                        <a class="contact__link" href="tel:<?= the_field( 'phone' ) ?>"><?= the_field( 'phone' ) ?></a>
                    </div>
                </div>
                <div class="col contact__col">
                    <p class="contact__title"><?= the_field( 'text_right-top' ) ?></p>
                    <form class="form" action="telegram.php" method="POST">
                        <div class="col form__col">
                            <input name="form-name" type="hidden" value="Form contact page">
                            <input class="form__input" id="user-name" type="text" name="name" placeholder="YOUR NAME" minlength="2" maxlength="20" required>
                            <input class="form__input" id="user-email" type="email" name="email" placeholder="YOUR EMAIL" required>
                            <button id="tg-form-btn" class="form__button" type="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row contact__row">
				<?= wp_nav_menu( [
					'theme_location' => 'socialNetwork',
					'container'      => null,
					'echo'           => true,
					'fallback_cb'    => 'wp_page_menu',
					'items_wrap'     => '<ul class="row menu__social-ul contact__social-ul">%3$s</ul>',
				] ); ?>
            </div>
        </section>
    </div>

<?= get_footer(); ?>