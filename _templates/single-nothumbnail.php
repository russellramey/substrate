<?php
/***********************************************************
*
** SINGLE - WITH NO THUMBNAIL
** Single view for posts that DON'T HAVE a featured image/thumbnail.
*
************************************************************/

// Include header
get_header(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(['entry-content']); ?>>
    <?php
    // WP Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
