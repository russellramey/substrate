<div class="entry-body">
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
        // Show excerpt
        the_excerpt(); ?>
    </div>

    <?php
    // If is search
    if( is_search() ) { ?>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
    <?php } ?>
</div>
