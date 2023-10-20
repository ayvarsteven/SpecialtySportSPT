<?php 

//  Load Stylesheet
function load_css() {
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), false, 'all');
    wp_enqueue_style('normalize');

    wp_register_style('my-theme-styles', get_template_directory_uri() . '/css/styles.css', array(), false, 'all');
    wp_enqueue_style('my-theme-styles');
}

add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript
function load_js() {
    wp_register_script('appjs', get_template_directory_uri() . '/js/app.js', '', false, true);
    wp_enqueue_script('appjs');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');

// Menus 
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);