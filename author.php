<?php
// Get the header
get_header(); ?>

<section id="content" role="main">
    <header class="header">
        <?php the_post(); ?>
        <h1 class="entry-title author"><?php _e( 'Author Archives', 'blankslate' ); ?>: <?php the_author_link(); ?></h1>
        <?php if ( '' != get_the_author_meta( 'user_description' ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . get_the_author_meta( 'user_description' ) . '</div>' ); ?>
        <?php rewind_posts(); ?>
    </header>

    <?php
    // Start WP Loop
    while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
    <?php
    // End WP Loop
    endwhile; ?>

    <?php
    // Get pagination
    get_template_part( 'partials/pagination' ); ?>
</section>

<?php
// Get the footer
get_footer(); ?>
