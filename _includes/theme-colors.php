<?php
/************************************************************************************
*** Theme color pallete
	Available colors and color classes for block editor...
************************************************************************************/
// Setup function
function substrate_theme_colors() {
	// Disable custom color selection
	add_theme_support( 'disable-custom-colors' );
	// Editor Color Palette
	// Apply filter to be able to edit data array in child theme
	add_theme_support( 'editor-color-palette', apply_filters( 'editor-color-palette', array(
		array('name' => 'BS - Blue', 'slug' => 'blue', 'color' => '#0d6efd'),
		array('name' => 'BS - Indigo', 'slug' => 'indigo', 'color' => '#6610f2'),
	    array('name' => 'BS - Purple', 'slug' => 'purple', 'color' => '#B10BFF'),
		array('name' => 'BS - Pink', 'slug' => 'pink', 'color' => '#d63384'),
	    array('name' => 'BS - Red', 'slug' => 'red', 'color' => '#dc3545'),
		array('name' => 'BS - Orange', 'slug' => 'orange', 'color' => '#fd7e14'),
		array('name' => 'BS - Yellow', 'slug' => 'yellow', 'color' => '#ffc107'),
		array('name' => 'BS - Green', 'slug' => 'green', 'color' => '#198754'),
		array('name' => 'BS - Teal', 'slug' => 'teal', 'color' => '#20c997'),
		array('name' => 'BS - Cyan', 'slug' => 'cyan', 'color' => '#0dcaf0'),
		array('name' => 'BS - Gray', 'slug' => 'gray', 'color' => '#6c757d'),
		array('name' => 'BS - Gray Light', 'slug' => 'gray-light', 'color' => '#ced4da'),
		array('name' => 'BS - Gray Dark', 'slug' => 'gray-dark', 'color' => '#343a40'),
		array('name' => 'BS - Light', 'slug' => 'light', 'color' => '#f8f9fa'),
		array('name' => 'BS - White', 'slug' => 'white', 'color' => '#ffffff'),
		array('name' => 'BS - Dark', 'slug' => 'dark', 'color' => '#212529'),
		array('name' => 'BS - Black', 'slug' => 'black', 'color' => '#000000')
	)));
}
// Add setup to theme
add_action( 'after_setup_theme', 'substrate_theme_colors' );
?>
