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
<header class="bt-header">
    <div class="bt-header--main">
        <div class="bt-logo">
            <a href="<?php echo bloginfo('url'); ?>" title="Home">
                <img src="#" width="auto" height="auto" alt="<?php echo bloginfo('name'); ?>" />
                <span>Title</span>
            </a>
        </div>
        <div class="bt-nav--main">
            <?php
                // WP menu
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu'
                    )
                );
            ?>
        </div>

        <div class="bt-hamburger">
            <a href="#" title="Show menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
        </div>
    </div>
</header>

<!-- CONTENT -->
<div class="wrapper container">
