<?php
//add_action('nombre_acción', 'función_a_ejecutar');
//add_filter('nombre_filtro', 'función_a_ejecutar');

function guauguau_setup() {
	add_theme_support( 'post-thumbnails' );
	
	//Ocultar la versión de WordPress del head
	remove_action( 'wp_head', 'wp_generator' );

	$html5_opts = array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption'
	);

	add_theme_support( 'html5', $html5_opts );

	$locations = array(
		'menu_main' => 'Menú Principal',
		'menu_social' => 'Menu Social'
	);

	register_nav_menus( $locations );
}

add_action('after_setup_theme', 'guauguau_setup');

add_filter('excerpt_more', function () {
	return '&nbsp;<a href="' . get_permalink() . '">leer más...</a>';
});

add_filter('excerpt_length', function () {
	return 20;
});