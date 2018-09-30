<?php
/************************************************************************************
*** Shortcodes - grid
	Shortcodes for elements: buttons, seperator, gap, spacer, videos etc...
************************************************************************************/

// CONTENT SECTION
// Break the contraints of the container
// [section]
function section_func( $atts, $content = null ){
	// Extract attributes from shortcode
	extract( shortcode_atts( array(
		'class' => '', // Add custom classes
		'width' => '', // Set max-with (relative to container/wrapper)
		'align' => '', // Set text alignment
	), $atts ) );
	// Return html
	return "<div class='content-row {$class} off-ctr' style='max-width:{$width}px'><div class='row ${align}'>" . do_shortcode ($content) . '</div></div>';
}
add_shortcode( 'section', 'section_func' );

// COLUMNS
// Easily add columns to content to make creative layouts
// [col sm="" md="" lg="" class=""]
function column_func( $atts, $content = null ) {
	// Extract attributes from shortcode
	extract( shortcode_atts( array(
		'class' => '', // Add custom classes
		'xs'    => '', // Set grid for xsmall screens (bootstrap grid)
		'sm'    => '', // Set grid for small screens (bootstrap grid)
		'md'	=> '', // Set grid for md screens (bootstrap grid)
		'lg'	=> '', // Set grid for lg screens (bootstrap grid)
	), $atts ) );

	// Create arrays for bootstrap classes
	$xsmall = '';
	$small = '';
	$medium = '';
	$large = '';

	// Check $atts array for supplied value
	if(array_key_exists('xs', $atts)){
		$xsmall = 'col-xs-' . $xs;
	}
	if(array_key_exists('sm', $atts)){
		$small = 'col-sm-' . $sm;
	}
	if(array_key_exists('md', $atts)){
		$medium = 'col-md-' . $md;
	}
	if(array_key_exists('lg', $atts)){
		$large = 'col-lg-' . $lg;
	}

	// Return div with proper bootstrap classes
	return "<div class='$xsmall $small $medium $large {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col', 'column_func' );
add_shortcode( 'col-child', 'column_func' );
