<?php

/*
 * Enqueue and register scripts the right way.
 */
add_action('wp_enqueue_scripts', function () {
    // wp_enqueue_style('build', get_theme_file_uri('/css/main.css'), [], '', 'all');
    // wp_enqueue_script('build', get_theme_file_uri('/js/min/build.js'), ['jquery']);
});