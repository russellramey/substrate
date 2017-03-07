<section class="entry-summary">
    <?php
    // Show excerpt
    the_excerpt(); ?>

    <?php
    // If is search
    if( is_search() ) { ?>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
    <?php } ?>
</section>
