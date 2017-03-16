<?php
// NEWS METABOXES
add_action( 'cmb2_init', 'news_metabox' );
function news_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	$news_details = new_cmb2_box( array(
		'id'            => $prefix . 'news_detials',
		'title'         => __( 'News Item Details', 'cmb2' ),
		'object_types'  => array( 'news', ), // Post type
	));

	//Add fields here
	$news_details->add_field( array(
		
	));
	
}
