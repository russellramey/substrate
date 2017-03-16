<?php
// SERVICE METABOXES
add_action( 'cmb2_init', 'service_metabox' );
function service_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	$service_details = new_cmb2_box( array(
		'id'            => $prefix . 'service_detials',
		'title'         => __( 'Service Details', 'cmb2' ),
		'object_types'  => array( 'service', ), // Post type
	));

	//Add fields here
	$service_details->add_field( array(
		
	));
}
