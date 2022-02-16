<?php
/***********************************************************
*
** CARD Element
** @param Array ($args)
** $args[
        type: String
        cta: Boolean
    ]
************************************************************/
?>
<div class="card <?php echo $args['type'];?> <?php echo ($args['min']) ? 'card-min' : '';?>">
    <div class="card-header text-light"></div>

    <?php
    // If has thumbnail, show card-image
    if(has_post_thumbnail()){ ?>
        <div class="card-image">
            <?php the_post_thumbnail(); ?>
            <a class="card-image-link" href="<?php the_permalink(); ?>"></a>
        </div>
    <?php } ?>

    <div class="card-body">
        <h5 class="card-title">
            <?php the_title(); ?>
        </h5>
        <p class="card-text">
            <?php echo get_the_excerpt(); ?>
        </p>
        <p class="card-action">
            <a href="<?php the_permalink(); ?>" class="btn btn-md btn-dark">Read more</a>
        </p>
    </div>

    <div class="card-footer text-light"></div>
</div>
