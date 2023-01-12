<nav class="catalog">
    <ul class="catalog__ul">
		<?php
		$terms = get_terms( [ 'taxonomy' => 'product_cat', ] );
		foreach ( $terms as $term ) : ?>
            <li class="catalog__li <?= $term->name ?>" data-filter="<?= $term->term_id ?>">
				<?php if ( get_post()->post_name == 'shop' ) { ?>
					<?= $term->name ?>
				<?php } else { ?>
                    <a href="<?= get_page_by_title( 'Shop' )->guid ?>"><?= $term->name ?></a>
				<?php } ?>
            </li>
		<?php endforeach ?>
        <li class="catalog__li all active" data-filter="all">all</li>
    </ul>
</nav>