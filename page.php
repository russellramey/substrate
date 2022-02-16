<?php
/***********************************************************
*
** PAGE TEMPLATE
** WP default template for Page posts.
*
************************************************************/

// Include header
get_header(); ?>

<div id="content" role="main" class="col-12">
    <?php
    // WP Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
