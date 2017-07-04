<?php

/*
 * Enqueue and register scripts the right way.
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('build', get_theme_file_uri('/css/main.css'), [], '', 'all');
    wp_enqueue_script('build', get_theme_file_uri('/js/custom.min.js'), ['jquery']);

    // if not using contact form plugin, delete below
    wp_dequeue_style('forms-front');
});

add_action('after_setup_theme', function () {
        // Register wp_nav_menu() menus
    register_nav_menus([
        'footer-other' => __('Footer Other', 'adtrak')
    ]);
});
