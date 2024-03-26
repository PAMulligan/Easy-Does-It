<?php
function easy_does_it_scripts() {
	wp_enqueue_style(
		'easy-does-it-style',
		get_stylesheet_uri()
	);
	wp_enqueue_script(
		'easy-does-it-script',
		'./script.js',
		array('jquery'), 1.1,
		array(
			'strategy' => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'easy_does_it_scripts' );

function register_easy_does_it_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' )
		)
	);
}
add_action( 'init', 'register_easy_does_it_menus' );
?>