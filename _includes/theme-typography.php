<?php
/************************************************************************************
*** Theme font sizes
	Available font sizes for block editor...
************************************************************************************/
// Setup function
function substrate_theme_typography() {
	// Disable custom font sizes
    add_theme_support( 'disable-custom-font-sizes' );
	// Editor Font Sizes
	add_theme_support('editor-font-sizes', apply_filters('editor-font-sizes', array(
        array('name' => 'Smaller', 'size' => 10, 'slug' => 'smaller'),
		array('name' => 'Small', 'size' => 12, 'slug' => 'small'),
		array('name' => 'Medium', 'size' => 14, 'slug' => 'medium'),
        array('name' => 'Large', 'size' => 21, 'slug' => 'large'),
		array('name' => 'Larger', 'size' => 36, 'slug' => 'larger'),
        array('name' => 'X-Large', 'size' => 48, 'slug' => 'x-large'),
    )));
}
// Add setup to theme
add_action( 'after_setup_theme', 'substrate_theme_typography' );
?>
