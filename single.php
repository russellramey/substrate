<?php
/***********************************************************
*
** SINGLE - DEFAULT
** Default single view for posts.
*
************************************************************/

// Include header
get_header(); ?>

<?php
// If post has a thumbnail
if ( has_post_thumbnail() && get_post_type() === 'post' ) {
    // Get template with Thumbnail as Hero
    get_template_part('_templates/single-thumbnail');
} else {
    // Get default template
    get_template_part('_templates/single-nothumbnail');
} ?>

<?php
// Include footer
get_footer(); ?>
