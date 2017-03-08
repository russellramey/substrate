<?php
// Get the header
get_header(); ?>

<section id="content" role="main">
    <div class="header">
        <h1 class="entry-title"><?php _e( 'Tag Archives: ', 'devmod' ); ?><?php single_tag_title(); ?></h1>
    </div>

    <?php
    // Start WP Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( $partial . '/entry' ); ?>
    <?php
    // End WP Loop
    endwhile; endif; ?>

    <?php
    // Pagination
    get_template_part( $partial . '/pagination'); ?>
</section>

<?php
// Get the footer
get_footer(); ?>
