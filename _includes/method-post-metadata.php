<?php
/************************************************************************************
*** Function - Get Metadata
	Look up entry meta by key name...
************************************************************************************/
// Setup function
function post_metadata($key, $id = null) {
	// If no ID, use current post ID
	if(!$id) $id = get_the_ID();
	// Get post metadata
	$metadata = get_post_meta($id, $key, false);
	// If no metadata for key
	if(!$metadata) return false;
	// Return data
	return $metadata;
}
?>
