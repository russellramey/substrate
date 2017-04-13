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
		'class' => '',
		'width' => '',
		'align' => '',
		'max_width' => ''
	), $atts ) );
	// Return html
	return "<div class='content-row {$class} {$width} off-ctr' style='max-width:{$max_width}px'><div class='row ${align}'>" . do_shortcode ($content) . '</div></div>';
}
add_shortcode( 'section', 'section_func' );

// COLUMNS
// Easily add columns to content to make creative layouts
// [col sm="" md="" lg="" class=""]
function column_func( $atts, $content = null ) {
	// Extract attributes from shortcode
	extract( shortcode_atts( array(
		'class' => '',
		'sm'    => '',
		'md'	=> '',
		'lg'	=> '',
	), $atts ) );


	// Create arrays for bootstrap classes
	$small = '';
	$medium = '';
	$large = '';

	// Check $atts array for value
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
	return "<div class='$small $medium $large {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col', 'column_func' );
add_shortcode( 'col-child', 'column_func' );

// FULL WIDTH
// Break the contraints of the container
// [fullwidth]
function fullwidth_func( $atts, $content = null ){
	return '<div class="module full-width">' . do_shortcode ($content) . '</div>';
}
add_shortcode( 'fullwidth', 'fullwidth_func' );
