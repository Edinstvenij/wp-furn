<div class="menu">
    <div class="content">
        <div class="row row-jcsb row-ai-center">
            <div class="wrapper-img wrapper-header-all-product-logo"><?= the_custom_logo(); ?></a></div>
            <span class="menu-toggle menu__button" id="buttonInMenu"></span>
        </div>
        <div class="menu__body">
            <div class="row row-jcsb nav__row">
				<?= wp_nav_menu( [
					'theme_location' => 'primary',
					'container'      => 'nav',
					'echo'           => true,
					'fallback_cb'    => 'wp_page_menu',
					'items_wrap'     => '<ul class="nav__ul">%3$s</ul>',
				] ); ?>
                <div class="nav__ul nav__li-col not_available">
                    <li>
                        <span>
                            <a href="#">virtual showroom</a>
                            <p>coming soon</p>
                         </span>
                    </li>
                </div>
            </div>
            <div class="row row-jcsb row-ai-center menu__social">
                <div class="copyright"> &#169; <?= date( 'Y' ); ?> Furn. All rights reserved. Ukraine, Odessa</div>

				<?= wp_nav_menu( [
					'theme_location' => 'socialNetwork',
					'container'      => null,
					'echo'           => true,
					'fallback_cb'    => 'wp_page_menu',
					'items_wrap'     => '<ul class="row menu__social-ul">%3$s</ul>',
				] ); ?>
            </div>
        </div>
    </div>
</div>