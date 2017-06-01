<footer class="entry-footer">
    <span class="entry-meta--cat">
        <?php _e( 'Categories: ', 'substrate' ); ?><?php the_category( ', ' ); ?>
    </span>
    <span class="entry-meta--tag"><?php the_tags(); ?></span>

    <?php
    // Get comment count
    //get_template_part('partials/entry', 'comments'); ?>
</footer>
