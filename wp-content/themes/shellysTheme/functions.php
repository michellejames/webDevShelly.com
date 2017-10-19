<?php 
/**
 * Proper way to enqueue scripts and styles.
 */
function load_scripts() {		//change function name
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
    wp_enqueue_style( 'bootstrap_styles', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" );
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_script( 'bootstrap_scripts', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array("jquery"), '1.0.0', true );


}
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
add_action( 'wp_enqueue_scripts', 'load_scripts' );		//hook in wordpress


// no closing php tag for whatever reason!!!


add_theme_support("menus");