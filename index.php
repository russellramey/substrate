<?php
// Get the header
get_header(); ?>

<div id="content" role="main">
    <?php
    // Start WP Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
    <?php
    // End WP Loop
    endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</div>

<?php
// Get the footer
get_footer(); ?>
