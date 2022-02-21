<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!-- Wrapper -->
    <div id="wrapper" class="hfeed">

        <!-- Header -->
        <?php
        // Header template
        get_template_part('_templates/partials/element-header'); ?>

        <!-- Content Container -->
        <section id="content" class="container-fluid max-width-xxl">
