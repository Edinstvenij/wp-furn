<?php

//  Style and scripts
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.css' );
	wp_enqueue_style( 'style.min', get_template_directory_uri() . '/assets/css/style.min.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', '3.6.0', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.js', [ 'jquery' ], '8.2.2', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [ 'swiper', 'jquery' ], '1', true );
} );

add_action( 'after_setup_theme', function () {
	register_nav_menu( 'primary', 'Main menu' );
	register_nav_menu( 'socialNetwork', 'Social network' );


} );

add_theme_support( 'custom-logo', [
	'width'       => 268,
	'height'      => 364,
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
] );

add_action( 'init', 'register_post_types' );

function register_post_types() {

	register_post_type( 'main_slider', [
		'label'               => null,
		'labels'              => [
			'name'               => 'Слайдер на главном экране', // основное название для типа записи
			'singular_name'      => 'Фото', // название для одной записи этого типа
			'add_new'            => 'Добавить фотографию', // для добавления новой записи
			'add_new_item'       => 'Добавление фотографии', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование фотографии', // для редактирования типа записи
			'new_item'           => 'Новая фотография', // текст новой записи
			'view_item'          => 'Смотреть фотографию', // для просмотра записи этого типа.
			'search_items'       => 'Искать фотографию', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Слайдер на главном экране', // название меню
		],
		'description'         => 'Фотографии для слайдера на главной странице',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ],
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'team', [
		'label'               => null,
		'labels'              => [
			'name'               => 'Команда', // основное название для типа записи
			'singular_name'      => 'Участник команды', // название для одной записи этого типа
			'add_new'            => 'Добавить нового участника', // для добавления новой записи
			'add_new_item'       => 'Добавить нового участника', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать участника', // для редактирования типа записи
			'new_item'           => 'Новый участник', // текст новой записи
			'view_item'          => 'Смотреть участника', // для просмотра записи этого типа.
			'search_items'       => 'Искать участника', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Команда', // название меню
		],
		'description'         => 'Члены команды для вывода на страницу team',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_menu'        => true,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ],
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

add_filter( 'nav_menu_link_attributes', 'wp_kama_nav_menu_link_attributes_filter', 10, 4 );

/**
 * Function for `nav_menu_link_attributes` filter-hook.
 *
 * @param array $atts The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
 * @param WP_Post $menu_item The current menu item object.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @param int $depth Depth of menu item. Used for padding.
 *
 * @return array
 */
function wp_kama_nav_menu_link_attributes_filter( $atts, $menu_item, $args, $depth ) {

	if ( strpos( $atts['href'], home_url() ) === false ) {
		$atts['target'] = '_blank';
	}

	return $atts;
}


add_action( 'wp_ajax_send_message', 'send_message_contact' );
add_action( 'wp_ajax_nopriv_send_message', 'send_message_contact' );
function send_message_contact() {

	if ( empty( $_POST ) ) {
		wp_die( 'No' );
	}

	// Токен телеграм бота
	$tg_bot_token = '5496993998:AAE2ZHHMi_3aqY3hp1nrF-ae9yLcsxsWqAE';
	// ID Чата
	$chat_id = '-1001569814825';

	$text = '';

	foreach ( $_POST as $key => $val ) {
		if ( empty( $val ) ) {
			wp_die();
		}

		$text .= $key . ": " . $val . "\n";
	}

	$text .= "\n" . $_SERVER['REMOTE_ADDR'];
	$text .= "\n" . date( 'd.m.y H:i:s' );

	$param = [
		"chat_id" => $chat_id,
		"text"    => $text
	];

	$url = "https://api.telegram.org/bot" . $tg_bot_token . "/sendMessage?" . http_build_query( $param );

	file_get_contents( $url );

	foreach ( $_FILES as $file ) {
		echo 1;
		$url = "https://api.telegram.org/bot" . $tg_bot_token . "/sendDocument";

		move_uploaded_file( $file['tmp_name'], $file['name'] );

		$document = new \CURLFile( $file['name'] );

		$ch = curl_init();

		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_POST, 1 );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, [ "chat_id" => $chat_id, "document" => $document ] );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, [ "Content-Type:multipart/form-data" ] );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

		$out = curl_exec( $ch );

		curl_close( $ch );

		unlink( $file['name'] );
	}
	wp_die();
}

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );


add_filter( 'wpcf7_autop_or_not', '__return_false' );