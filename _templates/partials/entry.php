<?php
// Global Variables
global $partial;
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); //WP Post Classes ?>>
    <header class="entry-header">
        <?php edit_post_link(); //WP Edit Post Link ?>
        <?php
        // If is singluar
        if ( is_singular() ) { ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php } else { ?>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
        <?php } ?>

        <?php
        // If not search
        if ( !is_search() ) {
            // If not search show entry meta
            get_template_part( $partial . '/entry-meta' );
        } ?>
    </header>

    <?php
    // Get content
    if(is_archive() || is_search() || !is_single() ) {
        get_template_part( $partial . '/entry-summary');
    } else {
        get_template_part( $partial . '/entry-content');
    } ?>
    

    <?php if ( is_single() ) {
        // Add footer for search results
        get_template_part( $partial . '/entry-footer' );
    } ?>
</article>
