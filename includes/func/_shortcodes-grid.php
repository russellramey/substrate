<?php
/*********************** COLUMNS FOR GRID **************************/
//[row]
function row_func( $atts, $content = null ){

	return '<div class="row">' . do_shortcode ($content) . '</div>';
}
add_shortcode( 'row', 'row_func' );

//[onecolumn]
function onecolumn_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-1 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col1', 'onecolumn_func' );

//[twocolumns]
function twocolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-2 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col2', 'twocolumns_func' );

//[threecolumns]
function threecolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-3 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col3', 'threecolumns_func' );

//[fourcolumns]
function fourcolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-4 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col4', 'fourcolumns_func' );

//[fivecolumns]
function fivecolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-5 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col5', 'fivecolumns_func' );

//[sixcolumns]
function sixcolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-6 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col6', 'sixcolumns_func' );

//[sevencolumns]
function sevencolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-7 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col7', 'sevencolumns_func' );

//[eightcolumns]
function eightcolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-8 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col8', 'eightcolumns_func' );

//[ninecolumns]
function ninecolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-9 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col9', 'ninecolumns_func' );

//[tencolumns]
function tencolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-10 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col10', 'tencolumns_func' );

//[elevencolumns]
function elevencolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-11 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col11', 'elevencolumns_func' );

//[twelvecolumns]
function twelvecolumns_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );

	return "<div class='col-sm-12 {$class}'>" . do_shortcode ($content) . "</div>";
}
add_shortcode( 'col12', 'twelvecolumns_func' );
