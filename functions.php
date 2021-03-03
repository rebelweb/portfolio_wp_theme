<?php

function portfolio_register_styles() {
    $theme_version = wp_get_theme()->get('Version');
    $webpack_stylesheet_path = get_template_directory_uri() . '/assets/main.css';

    wp_enqueue_style('portfolio-webpack-styles',  $webpack_stylesheet_path, null, $theme_version);
}

add_action('wp_enqueue_scripts', 'portfolio_register_styles');
