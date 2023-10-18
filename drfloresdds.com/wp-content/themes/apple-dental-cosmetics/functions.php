<?php

// function apple_dental_cosmetics_files()
// {
//     wp_enqueue_style('normalize.css', get_theme_file_uri('/css/normalize.css'));
//     wp_enqueue_style('apple-dental_main-styles', get_theme_file_uri('/css/styles.css'));
//     wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800&display=swap');
// }

// add_action('wp_enqueue_scripts', 'apple_dental_cosmetics_files');

function apple_dental_cosmetics_load_scripts() {
    wp_enqueue_style('normalize.css', get_theme_file_uri('/css/normalize.css'));
    wp_enqueue_style('apple-dental_main-styles', get_theme_file_uri('/css/styles.css'), array(), filemtime(get_template_directory() . '/css/styles.css'));
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800&display=swap');
    // wp_enqueue_style('apple-dental-cosmetics-style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'apple_dental_cosmetics_load_scripts' );
