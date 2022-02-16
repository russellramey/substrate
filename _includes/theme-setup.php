<?php
/************************************************************************************
*** Theme set up funcitons
	Thumbnails, navigation menus, theme support, etc...
************************************************************************************/
// Setup function
function substrate_theme_setup() {
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;

    // Add title tag support
	add_theme_support( 'title-tag' );
    // Feed support
	add_theme_support( 'automatic-feed-links' );
    // Post thumbnail support
	add_theme_support( 'post-thumbnails' );
    // Register Navigation Menu
	include 'theme-menus.php';
}
// Add setup to theme
add_action( 'after_setup_theme', 'substrate_theme_setup' );
?>
