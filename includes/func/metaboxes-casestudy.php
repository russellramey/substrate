<?php
// CASESTUDY METABOXES
add_action( 'cmb2_init', 'casestudy_metabox' );
function casestudy_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	$casestudy_details = new_cmb2_box( array(
		'id'            => $prefix . 'casestudy_detials',
		'title'         => __( 'Case Study Details', 'cmb2' ),
		'object_types'  => array( 'study', ), // Post type
	));

	//Add fields here
	$casestudy_details->add_field( array(
		
	));
	
}
