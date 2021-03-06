<?php

const SIDEBAR_NAME = 'sidebar-1';

function portfolio_register_styles() {
    $theme_version = wp_get_theme()->get('Version');
    $webpack_stylesheet_path = get_template_directory_uri() . '/assets/main.css';

    wp_enqueue_style('portfolio-webpack-styles',  $webpack_stylesheet_path, null, $theme_version);
}

add_action('wp_enqueue_scripts', 'portfolio_register_styles');

function portfolio_base_path() {
    return esc_url(home_url('/'));
}

function portfolio_sidebar_classes() {
    return is_active_sidebar(SIDEBAR_NAME) ? 'col-sm-12 col-md-4 col-lg-3' : '';
}

function portfolio_content_classes() {
    return is_active_sidebar(SIDEBAR_NAME) ? 'col-sm-12 col-md-8 col-lg-9' : 'col-12';
}