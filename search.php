<?php
// Get the header
get_header(); ?>

<div id="content" role="main">
    <?php
    // If posts found
    if ( have_posts() ) : ?>

        <div class="entry-header">
            <h1 class="entry-title">
                <?php printf( __( 'Search Results for: %s', 'substrate' ), get_search_query() ); ?>
            </h1>
        </div>

    <?php
    // Start WP Loop
    while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( $partial . '/entry' ); ?>
    <?php
    // End WP Loop
    endwhile; ?>

    <?php
    // Get pagination
    get_template_part( $partial . '/pagination' ); ?>

    <?php
    // If no posts found
    else : ?>

        <div id="post-0" class="post no-results not-found">
            <div class="entry-header">
                <h2 class="entry-title"><?php _e( 'Nothing Found', 'substrate' ); ?></h2>
            </div>
            <div class="entry-content">
                <p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'substrate' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </div>

    <?php
    // End If
    endif; ?>
</div>

<?php
// Get the footer
get_footer(); ?>
