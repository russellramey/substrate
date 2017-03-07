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
	wp_enqueue_script( '' );
}
?>
