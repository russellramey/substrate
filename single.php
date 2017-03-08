<?php
// Get the header
get_header(); ?>

<section id="content" role="main">
    <?php
    // Start WP Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( $partial . '/entry' ); ?>
    <?php
    // End WP Loop
    endwhile; endif; ?>

    <footer class="footer">
        <?php
        // Pagination
        get_template_part( $partial . '/pagination-single' ); ?>
    </footer>
</section>

<?php
// Get the footer
get_footer(); ?>
