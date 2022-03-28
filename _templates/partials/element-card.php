<?php
/***********************************************************
*
** CARD Element
** @param Array ($args)
** $args[
        layout: String
        type: String
        horizontal: Boolean
        cta: Boolean
    ]
************************************************************/
?>
<div class="card <?php echo isset($args['layout']) ? $args['layout'] : 'card-default';?> <?php echo isset($args['min']) ? 'card-min' : '';?>" data-card-type="<?php echo isset($args['type']) ? $args['type'] : 'default';?>">
    <div class="card-header text-light"></div>
    <div class="row g-0">
        <?php
        // If has thumbnail, show card-image
        if(has_post_thumbnail()){ ?>
            <div class="col <?php echo isset($args['horizontal']) ? 'col-4 col-md-3' : 'col-12';?>">
                <div class="card-image">
                    <?php the_post_thumbnail(); ?>
                    <a class="card-image-link" href="<?php the_permalink(); ?>"></a>
                </div>
            </div>
        <?php } ?>

        <div class="col">
            <div class="card-body ">
                <h5 class="card-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h5>
                <p class="card-text">
                    <?php echo get_the_excerpt(); ?>
                </p>
                <p class="card-action">
                    <a href="<?php the_permalink(); ?>" class="btn btn-md btn-dark">Read more</a>
                </p>
            </div>
        </div>
    </div>
    <div class="card-footer text-light"></div>
</div>
