<?php
/***********************************************************
*
** ARCHIVE TEMPLATE
** WP default template for showing post archives.
*
************************************************************/

// Include header
get_header(); ?>
    <div class="row">
        <div id="main-content" role="main" class="col-12">
            <div id="post-0" class="entry-content">
                <div class="entry-header">
                    <h1 class="entry-title"><?php single_cat_title(); ?></h1>
                    <?php
                        // If description exists, show on page
                        if ( '' != category_description() ) {
                            echo apply_filters( 'archive_meta', '<div class="entry-meta">' . category_description() . '</div>' );
                        }
                    ?>
                </div>

                <div class="entry-body">
                    <ul class="post-list row p-0" style="list-style: none">
                        <?php
                        // WP Loop
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li class="post-container col-lg-3 col-md-4 col-sm-6">
                                <?php get_template_part( '_templates/partials/element-card', null, ['type' => null, 'min' => null] ); ?>
                            </li>
                        <?php endwhile; else : ?>

                            <li class="col-12">
                                <h3 class="text-center">Nothing found that match the search criteria.</h3>
                            </li>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
// Include footer
get_footer(); ?>
