<?php
/************************************************************************************
*** Patterns
	Add scripts/styles to theme
************************************************************************************/
// Setup function
function substrate_theme_pattern_setup() {
	// Check to verify sbs_Content_Blocks class exists
	if(class_exists('Substrate_Content_Blocks')){
		// Remove theme support for Core Block patterns
        remove_theme_support('core-block-patterns');

		// Include block patterns init
		include_once get_stylesheet_directory() . '/_templates/patterns/_init.php';
		// Instantiate sbs Block Pattern class
		$sbsBlockPatterns = new Substrate_Content_Block_Patterns();
	}
}
// Add setup to theme
add_action( 'after_setup_theme', 'substrate_theme_pattern_setup' );
?>
