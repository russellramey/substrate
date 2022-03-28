<?php
/***********************************************************
*
** SEARCH
** Default search template.
*
************************************************************/

// Include header
get_header(); ?>
    <div class="row">
        <div id="main-content" role="main" class="col-12">
            <div id="post-0" class="entry-content">
                <div class="entry-header">
                    <h1 class="entry-title">Search</h1>
                </div>

                <div class="entry-body">
                    <ul class="post-list row p-0" style="list-style: none">
                        <?php
                        // WP Loop
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li class="post-container col-12">
                                <?php get_template_part( '_templates/partials/element-card', null, ['type' => null, 'min' => null, 'horizontal' => true] ); ?>
                            </li>
                        <?php endwhile; else : ?>

                            <li class="col-12">
                                <h3>Nothing found that match the search criteria.</h3>
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
