<?php
/************************************************************************************
*** Scripts
	Add scripts to theme
************************************************************************************/
// Setup function
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
	// Jquery
	wp_enqueue_script( 'jquery' );

	// Site functions
	wp_enqueue_script( 'base-functions', get_stylesheet_directory_uri() . '/assets/js/base.functions.js', '', true );
	wp_enqueue_script( 'theme-functions', get_stylesheet_directory_uri() . '/assets/js/theme.functions.js', '', true );
}
?>
