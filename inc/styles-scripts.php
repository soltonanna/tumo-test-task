<?php
function register_theme_assets() {
    /**
     * * Register styles
    */
    wp_register_style('main-styles', URL . 'dist/css/styles.min.css', '', time());
    wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

    /**
     * * Register scripts
    */
    wp_register_script('main-scripts', URL . 'dist/script/main.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_style('main-styles');
    wp_enqueue_style('font-awesome');

    wp_enqueue_script('main-scripts');
}

add_action( 'wp_enqueue_scripts', 'register_theme_assets' );