<?php
// TEAM METABOXES
add_action( 'cmb2_init', 'team_metabox' );
function team_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	$team_details = new_cmb2_box( array(
		'id'            => $prefix . 'team_detials',
		'title'         => __( 'Team Member Details', 'cmb2' ),
		'object_types'  => array( 'team', ), // Post type
	));

	$team_details->add_field( array(
		'name'       => __( 'Position / Title', 'cmb2' ),
		'desc'       => __( 'Current job title or position', 'cmb2' ),
		'id'         => $prefix . 'team_position',
		'type'       => 'text',
	));
}
