<!DOCTYPE html>
<html <?php language_attributes(); // WP Lang attribute ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); //WP Charset ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); // WP Style sheet directory ?>" />
    <?php wp_head(); //WP header ?>
</head>
<body <?php body_class(); // WP body classes?>>



<!-- HEADER -->
<header class="dm-header">
    <div class="dm-nav--utility">
        <ul class="off-lft">
            <li><a href="#">Utility Item</a></li>
            <li><a href="#">Utility Item</a></li>
            <li><a href="#">Utility Item</a></li>
            <li><a href="#">Utility Item</a></li>
        </ul>
    </div>
    <div class="dm-header--main">
        <div class="dm-logo">
            <!--<img src="img/sabre-logo-slab.png" width="auto" height="auto">-->
            <span class="dm-tagline">Site Name</span>
        </div>
        <div class="dm-nav--main">
            <?php
                // WP menu
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu'
                    )
                );
            ?>
        </div>
        <div class="dm-search">
            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
    </div>
</header>

<!-- CONTENT -->
<div class="wrapper container">
