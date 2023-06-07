<?php
/**
 * wearecactus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wearecactus
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/* Scripts WeAreCactus
--------------------------------------------- */
function wearecactus_scripts() {
	/* css */
	wp_enqueue_style( 'wearecactus-base', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null  );
    wp_enqueue_style( 'wearecactus-style', get_template_directory_uri() . '/css/main.min.css', array(), wp_get_theme()->get( '1.0' )  );

	/* js */
	wp_enqueue_script( 'wearecactus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );
    wp_enqueue_script( 'wearecactus-scripts', get_template_directory_uri() . '/js/main.min.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'wearecactus_scripts' );

/* Menús WeAreCactus
--------------------------------------------- */
function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'main-menu' => __( 'Menú Principal' )
	  )
	);
  }
add_action( 'init', 'wpb_custom_new_menu' );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/* Feature Images WeAreCactus
--------------------------------------------- */
add_theme_support( 'post-thumbnails' );

/* CPT Perros WeAreCactus
--------------------------------------------- */
include_once( get_stylesheet_directory() .'/inc/post-types/perros');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}