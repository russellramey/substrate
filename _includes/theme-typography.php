<?php
/************************************************************************************
*** Theme color pallete
	Available colors and color classes for block editor...
************************************************************************************/
// Setup function
function substrate_theme_typography() {
	// Disable custom font sizes
    add_theme_support( 'disable-custom-font-sizes' );
	// Editor Font Sizes
	add_theme_support('editor-font-sizes', array(
		array('name' => 'Small', 'size' => 12, 'slug' => 'small'),
		array('name' => 'Medium', 'size' => 14, 'slug' => 'medium'),
        array('name' => 'Large', 'size' => 21, 'slug' => 'large'),
		array('name' => 'Drama', 'size' => 96, 'slug' => 'drama'),
    ));
}
// Add setup to theme
add_action( 'after_setup_theme', 'substrate_theme_typography' );
?>
