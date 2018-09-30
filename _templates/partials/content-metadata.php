<?php
// Get all meta data of post
$metadata = get_post_meta(get_the_ID());
$custom_meta = array();
// For each entry get the value as variable
foreach ( $metadata as $key => $value ) {
    // Create variable with value
    ${$key} = $value[0];
    // Add variables to array to unset later
    $custom_meta[] = $key;
} ?>
