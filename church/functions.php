<?php 

add_action( 'wp_enqueue_scripts', 'church_style' );
add_action( 'wp_enqueue_scripts', 'church_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function church_style() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	wp_enqueue_style( 'style-libs', get_stylesheet_uri() . '/assets/css/libs.min.css' );
	wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script-libs', get_template_directory_uri() . '/assets/js/libs.min.js', array(), '1.0.0', true );
}

function church_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );



	wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'script-libs', get_template_directory_uri() . '/assets/js/libs.min.js', array('jquery'), '1.0.0', true );
}




 ?>