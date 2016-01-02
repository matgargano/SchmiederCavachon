<?php
/**
 * The functions file for the simone-child theme.
 */


/**
 * Enqueue scripts and styles.
 */
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '3.3.6', true );
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

function lander_scripts() {
	if ( is_front_page() ) {		
		wp_enqueue_style( 'lander-styles', get_stylesheet_directory_uri() . '/lander-style.css');
		wp_enqueue_style( 'lander-nav-styles', get_stylesheet_directory_uri() . '/lander-nav-style.css');
		wp_enqueue_script( 'lander-script', get_stylesheet_directory_uri() . '/js/landerscripts.js', array('jquery'), '20151117');
	}
}

add_action('wp_enqueue_scripts', 'lander_scripts');

add_image_size( 'testimonial-mug', 253,253, true );




function mytheme_setup() {

	register_nav_menus(
	array(
	'footer_nav' => __( 'Footer Menu', 'bootpress' ),
	'top_menu' => __( 'Top Menu', 'bootpress' )
	)
);

}

add_action( 'after_setup_theme', 'mytheme_setup' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


// Excludes the testimonials from being displayed with the other posts on the News page
// 208 = the ID of the testimonials category, which is different for every WP site so it will change if this function is used again elsewhere 
function exclude_testimonials( $query ) {
	if ( !$query->is_category('testimonials') && $query->is_main_query() ) {
		$query->set('cat', '-208');
	}
}

add_action( 'pre_get_posts', 'exclude_testimonials');