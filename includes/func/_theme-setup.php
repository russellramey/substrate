<?php
/************************************************************************************
*** Theme set up funcitons
	Thumbnails, navigation menus, theme support, etc...
************************************************************************************/
// Setup function
function devmod_setup() {
    // Theme language support
	load_theme_textdomain( 'devmod', get_template_directory() . '/languages' );

    // Add title tag support
	add_theme_support( 'title-tag' );

    // Feed support
	add_theme_support( 'automatic-feed-links' );

    // Post thumbnail support
	add_theme_support( 'post-thumbnails' );

    // Register Navigation Menu
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;

		// Menu
		register_nav_menus(
		    array(
                // Main Menu
                'main-menu' => __( 'Main Menu', 'devmod' ),
                // Secondary Menu (remove if not needed, or customize to your needs)
                'second-menu' => __( 'Secondary Menu', 'devmod'),
                // Add other menus as needed
            )
	    );
}
// Add setup to theme
add_action( 'after_setup_theme', 'devmod_setup' );

// WP Title
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}
?>
