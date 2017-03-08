<?php
// Get the header
get_header(); ?>

<section id="content" role="main">
    <div class="entry-header">
        <h1 class="entry-title">
            <?php
                if ( is_day() ) { printf( __( 'Daily Archives: %s', 'devmod' ), get_the_time( get_option( 'date_format' ) ) ); }
                elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'devmod' ), get_the_time( 'F Y' ) ); }
                elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'devmod' ), get_the_time( 'Y' ) ); }
                else { _e( 'Archives', 'devmod' ); }
            ?>
        </h1>
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
    get_template_part( $partial . '/pagination-single' ); ?>
</section>

<?php
// Get the footer
get_footer(); ?>
