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

	// Contact: Email
	$team_details->add_field( array(
		'name'       => __( 'Email', 'cmb2' ),
		'desc'       => __( 'Email address', 'cmb2' ),
		'id'         => $prefix . 'team_email',
		'type'       => 'text',
	));
	// Contact: Linked In
	$team_details->add_field( array(
		'name'       => __( 'Linked In', 'cmb2' ),
		'desc'       => __( 'Linked In profile URL', 'cmb2' ),
		'id'         => $prefix . 'team_linkedin',
		'type'       => 'text',
	));
	// Contact: Twitter
	$team_details->add_field( array(
		'name'       => __( 'Twitter', 'cmb2' ),
		'desc'       => __( 'Twitter profile URL', 'cmb2' ),
		'id'         => $prefix . 'team_twitter',
		'type'       => 'text',
	));
	// Contact: Facebook
	$team_details->add_field( array(
		'name'       => __( 'Facekbook', 'cmb2' ),
		'desc'       => __( 'Facebook profile URL', 'cmb2' ),
		'id'         => $prefix . 'team_facebook',
		'type'       => 'text',
	));
}
