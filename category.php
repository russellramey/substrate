<?php
// Get the header
get_header(); ?>

<section id="content" role="main">
    <div class="entry-header">
        <h1 class="entry-title"><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
        <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
    </div>

    <?php
    // Start WP Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( $partial . '/entry' ); ?>
    <?php
    // End WP Loop
    endwhile; endif; ?>

    <?php
    // Get pagination
    get_template_part( $partial . '/pagination' ); ?>
</section>

<?php
// Get the footer
get_footer(); ?>
