<?php
/************************************************************************************
*** Theme color pallete
	Available colors and color classes for block editor...
************************************************************************************/
// Setup function
function substrate_theme_colors() {
	// Disable custom color selection
	add_theme_support( 'disable-custom-colors' );
	// Editor Color Palette (Sabre brand)
	add_theme_support( 'editor-color-palette', array(
		array('name' => 'Gold', 'slug' => 'gold', 'color' => '#DBFF00'),
		array('name' => 'Purple', 'slug' => 'purple', 'color' => '#B10BFF'),
	    array('name' => 'Gray', 'slug' => 'gray', 'color' => '#818181'),
		array('name' => 'Gray Light', 'slug' => 'gray-light', 'color' => '#E5E5E5'),
	    array('name' => 'White', 'slug' => 'white', 'color' => '#FBFBFB'),
		array('name' => 'Pure White', 'slug' => 'pure-white', 'color' => '#ffffff'),
		array('name' => 'Black', 'slug' => 'black', 'color' => '#212121'),
		array('name' => 'Pure Black', 'slug' => 'pure-black', 'color' => '#000000'),
	));
}
// Add setup to theme
add_action( 'after_setup_theme', 'substrate_theme_colors' );
?>
