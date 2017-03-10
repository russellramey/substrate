<?php

	// Get content meta from metaboxes
    // Event URL
    $event_url  = get_post_meta( get_the_ID(), '_cmb_event_url', true );
    // Start Date
    $event_start_timestamp  = get_post_meta( get_the_ID(), '_cmb_event_start', true );
    // End Date
    $event_end_timestamp  = get_post_meta( get_the_ID(), '_cmb_event_end', true );

?>