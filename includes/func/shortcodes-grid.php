<?php
/************************************************************************************
*** Shortcodes - grid
	Shortcodes for elements: buttons, seperator, gap, spacer, videos etc...
************************************************************************************/

// ROW
// use a row to wrap columns - create a new row for columns
// [row]
function row_func( $atts, $content = null ){
	return '<div class="row">' . do_shortcode ($content) . '</div>';
}
add_shortcode( 'row', 'row_func' );

// COLUMNS
// Easily add columns to content to make creative layouts
// [col width=" " break=" " class=" "]
function column_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
		'width' => '',
		'break' => 'sm'
	), $atts ) );
	return "<div class='col-{$break}-{$width} {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col', 'column_func' );

// FULL WIDTH
// Break the contraints of the container
// [fullwidth]
function fullwidth_func( $atts, $content = null ){
	return '<div class="module full-width">' . do_shortcode ($content) . '</div>';
}
add_shortcode( 'fullwidth', 'fullwidth_func' );
