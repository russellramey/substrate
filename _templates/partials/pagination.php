<?php
// If global query (default loop query)
global $wp_query;
if ( $wp_query->max_num_pages > 1 ) { ?>

    <div id="nav-below" class="navigation" role="navigation">
        <ul class="pagination">
            <li class="prev-entries"><?php next_posts_link(sprintf( __( '<i class="fa fa-chevron-left"></i> OLDER', 'substrate' ) ) ) ?></li>
            <li class="next-entries"><?php previous_posts_link(sprintf( __( 'NEWER <i class="fa fa-chevron-right"></i>', 'substrate' ) ) ) ?></li>
        </ul>
    </div>

<?php } else { ?>

    <div id="nav-below" class="navigation" role="navigation">
        <?php
        // If is single post/entry
        if (is_single()) { ?>
            <ul class="pagination pagination-single">
                <li class="prev-entry"><?php previous_post_link( '%link', '<i class="fa fa-chevron-left"></i> PREV', false ); ?></li>
                <li class="next-entry"><?php next_post_link( '%link', 'NEXT <i class="fa fa-chevron-right"></i>', false ); ?></li>
            </ul>
        <?php }
        // If post/entry list
        else if(isset($content)) { ?>
            <ul class="pagination">
                <li class="prev-entries"><?php next_posts_link( '<i class="fa fa-chevron-left"></i> OLDER', $content->max_num_pages) ?></li>
                <li class="next-entries"><?php previous_posts_link( 'NEWER <i class="fa fa-chevron-right"></i>', $content->max_num_pages) ?></li>
            </ul>
        <?php } ?>
    </div>

<?php } ?>
