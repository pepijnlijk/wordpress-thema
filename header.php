<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="with=device-width">
        <title><?php bloginfo('name'); ?> </title>
        <?php wp_head(); ?>
        </head>

    <body <?php body_class(); ?>>

        <div class="container">

        <!-- Header -->

            <header class="site-header">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h5><?php bloginfo('description'); ?></h5>
            </header>


