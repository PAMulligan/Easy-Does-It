<?
add_action( 'wp_enqueue_scripts', 'easy_does_it_enqueue_styles' );

function easy_does_it_enqueue_styles() {
	wp_enqueue_style( 
		'easy-does-it-style', 
		get_stylesheet_uri()
	);
}
?>