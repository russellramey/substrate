<?php
/************************************************************************************
*** METABOXES
	- Global options for the 'Module' post type
	- Uses CMB2 Metabox library
	- Docs: https://github.com/CMB2/CMB2/wiki
************************************************************************************/
// Register new metabox
add_action( 'cmb2_init', 'create_metabox' );
function create_metabox() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	$metabox_var = new_cmb2_box( array(
		'id'            => $prefix . 'metabox_name',
		'title'         => __( 'Metabox Title', 'cmb2' ),
		'object_types'  => array( 'posttype'), // Post type
	));

	// Add your fields below...
	$metabox_var->add_field( array(

	));
}
