<footer class="entry-footer">
    <span class="entry-meta--cat">
        <?php _e( 'Categories: ', 'devmod' ); ?><?php the_category( ', ' ); ?>
    </span>
    <span class="entry-meta--tag"><?php the_tags(); ?></span>

    <?php
    // Get comment count
    get_template_part('partials/_entry', 'comments'); ?>
</footer>
