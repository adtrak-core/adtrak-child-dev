<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/logo.png"/>

    <?php wp_head(); ?>

    <?php
    // if (get_field('google_analytics', 'options')) echo get_field('google_analytics', 'options');
    // if (get_field('schema', 'options')) echo get_field('schema', 'options'); ?>
</head>
<body <?php body_class(); ?>>


    <header role="header" class="site-header">
        <div class="container site-header__top">
            <div class="logo">
                <!-- <h1><img src="<?= get_option('site_logo', 'options'); ?>" alt="<?= get_bloginfo('name'); ?>" class="logo__image"></h1> -->
                <h1><a href="<?= site_url('/'); ?>" title="Link to Home Page"><?= get_bloginfo('name'); ?></a></h1>
            </div>

            <a href="#primaryNavigation" class="burger-menu"><span></span><span></span><span></span></a>
        </div>

        <nav id="primaryNavigation" class="site-header__navigation" role="navigation">
            <?php wp_nav_menu([
                'menu' => 'Primary Menu',
                'menu_class' => "nav nav--header"
            ]); ?>
        </nav>
    </header>

    <main class="site-content">
