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

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('hamburgers', 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.7.0/hamburgers.min.css');
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('my-framework', get_template_directory_uri() . '/css/my_framework.css' );
	wp_enqueue_style('navigation', get_template_directory_uri() . '/css/navigation.css' );
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js' );
});

add_action('widgets_init', function () {
	$args = array(
		'name' => __('widget_%d'),
		'before_widget' => '<article class="WidgetItem">',
		'after_widget' => '</article>',
		'before_title' => '<h3 class="WidgetItem-title">',
		'after_title' => '</h3>'
	);
	
	register_sidebars(3, $args);
});

add_filter( 'show_admin_bar', '__return_false' );