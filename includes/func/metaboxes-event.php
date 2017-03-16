<?php
// EVENTS METABOXES
add_action( 'cmb2_init', 'events_metabox' );
function events_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	$event_details = new_cmb2_box( array(
		'id'            => $prefix . 'event_detials',
		'title'         => __( 'Event Details', 'cmb2' ),
		'object_types'  => array( 'events', ), // Post type
	));

	$event_details->add_field( array(
		'name'       => __( 'URL', 'cmb2' ),
		'desc'       => __( 'URL or link to event page or registration page', 'cmb2' ),
		'id'         => $prefix . 'event_url',
		'type'       => 'text',
	));
	$event_details->add_field( array(
		'name' => 'Start Date',
		'id'   => $prefix . 'event_start',
		'type' => 'text_date_timestamp',
	));
	$event_details->add_field( array(
		'name' => 'End Date',
		'id'   => $prefix . 'event_end',
		'type' => 'text_date_timestamp',
	));
}
