<?php
// Get the header
get_header(); ?>

<section id="content" role="main">
    <?php
    // Start WP Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php edit_post_link(); ?>
                <h1 class="entry-title">
                    <?php the_title(); ?>
                </h1>
            </header>

            <section class="entry-body">
                <?php
                // If has thumbnail
                if ( has_post_thumbnail() ) { ?>
                    <div class="entry-thumb">
                        <?php
                        // Show thumbnail
                        the_post_thumbnail(); ?>
                    </div>
                <?php } ?>

                <div class="entry-content">
                    <?php
                    // Show content
                    the_content(); ?>
                </div>

            </section>

            <section class="entry-footer">

                <div class="entry-links">
                    <?php wp_link_pages(); ?>
                </div>

            </section>
        </article>

    <?php
    // End WP Loop
    endwhile; endif; ?>
</section>

<?php
// Get the footer
get_footer(); ?>
