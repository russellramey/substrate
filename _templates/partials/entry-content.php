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
        // Show content
        the_content(); ?>
    </div>

</div>
