<?php
/************************************************************************************
*** Scripts
	Add scripts/styles to theme
************************************************************************************/
// Theme front-end scripts
add_action( 'wp_enqueue_scripts', 'substrate_theme_load_scripts' );
function substrate_theme_load_scripts() {
	// Jquery
	// wp_enqueue_script( 'jquery' );

	// Site functions
	wp_enqueue_script( 'theme-functions', get_stylesheet_directory_uri() . '/_assets/themejs.js', '', true );
}
// Theme dashboard/editor scripts
add_action( 'admin_enqueue_scripts', 'substrate_theme_load_admin_scripts', 1 );
function substrate_theme_load_admin_scripts() {
	// Editor functions
	wp_enqueue_script( 'editor-functions', get_stylesheet_directory_uri() . '/_assets/editorjs.js', '', filemtime( plugin_dir_path( dirname(__FILE__) ) . '_assets/editorjs.js' ));
}
?>
