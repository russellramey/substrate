<!DOCTYPE html>
<html <?php language_attributes(); // WP Lang attribute ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); //WP Charset ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); // WP Style sheet directory ?>" />
    <?php wp_head(); //WP header ?>
</head>
<body <?php body_class(); // WP body classes?>>

<!-- PAGE WRAPPER -->
<div class="wrapper container">

<!-- HEADER -->
<header class="header">
    <div class="brand">
        <div class="brand-logo">
            <a href="/"><h1><?php echo bloginfo('name'); ?></h1></a>
        </div>
        <div class="brand-desc">
            <?php bloginfo( 'description' ); // WP Description ?>
        </div>
    </div>
    <nav class="menu" role="navigation">
        <div class="search">
            <?php get_search_form(); //WP Searchform ?>
        </div>
        <?php
            // WP menu
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu'
                )
            ); ?>
    </nav>
</header>


<!-- CONTENT -->
