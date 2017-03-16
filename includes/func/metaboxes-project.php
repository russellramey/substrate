<?php
// PROJECT METABOXES
add_action( 'cmb2_init', 'project_metabox' );
function project_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	$project_details = new_cmb2_box( array(
		'id'            => $prefix . 'project_detials',
		'title'         => __( 'Project Details', 'cmb2' ),
		'object_types'  => array( 'project', ), // Post type
	));

	//Add fields here
	$project_details->add_field( array(
		
	));
	
}
