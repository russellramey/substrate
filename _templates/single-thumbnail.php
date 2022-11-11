<?php
/***********************************************************
*
** SINGLE - WITH THUMBNAIL
** Single view for posts that HAVE a featured image/thumbnail.
*
************************************************************/
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(['entry-content']); ?>>
    <?php
    // WP Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php
        // Entry header
        get_template_part('_templates/partials/entry-header'); ?>

        <?php
        // Entry tags
        get_template_part('_templates/partials/entry-meta'); ?>

        <?php
        // Entry thumbnail
        get_template_part('_templates/partials/entry-thumbnail'); ?>

        <?php
        // Entry body
        get_template_part('_templates/partials/entry-body'); ?>

    <?php endwhile; endif; ?>
</div>
