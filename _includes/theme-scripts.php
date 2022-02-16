<?php
/************************************************************************************
*** Scripts
	Add scripts/styles to theme
************************************************************************************/
// Setup function
add_action( 'wp_enqueue_scripts', 'substrate_theme_load_scripts' );
function substrate_theme_load_scripts() {
	// Jquery
	// wp_enqueue_script( 'jquery' );

	// Site functions
	wp_enqueue_script( 'theme-functions', get_stylesheet_directory_uri() . '/_assets/themejs.js', '', true );
}
?>
