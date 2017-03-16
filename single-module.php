<!DOCTYPE html>
<html <?php language_attributes(); // WP Lang attribute ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); //WP Charset ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); // WP Style sheet directory ?>" />
    <?php wp_head(); //WP header ?>
</head>
<body <?php body_class(); // WP body classes?>>

<div class="dm-module dm-module--full row" style="padding:40px 0;">
    <div class="inner container">
        <?php
        // Start WP Loop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php
        // End WP Loop
        endwhile; endif; ?>
    </div>
</div>

<?php wp_footer(); //WP Footer ?>
</body>
</html>
