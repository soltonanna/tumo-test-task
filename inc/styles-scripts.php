<?php
function register_theme_assets() {
    // Define the Customizer styles
    $custom_css = "
        .header {
            background-color: " . esc_attr(get_theme_mod('header_bg_color', '#ffffff')) . ";
        }
        .footer {
            background-color: " . esc_attr(get_theme_mod('footer_bg_color', '#F9F9F9')) . ";
        }
        .social li {
            border: 1px solid " . esc_attr(get_theme_mod('social_icons_bg_color', '#4CE0D7')) . ";
            background-color: " . esc_attr(get_theme_mod('social_icons_bg_color', '#4CE0D7')) . ";
        }
        .btn,
        .btn * {
            background-color: " . esc_attr(get_theme_mod('buttons_bg_color', '#4CE0D7')) . ";
            border: 2px solid " . esc_attr(get_theme_mod('buttons_bg_color', '#4CE0D7')) . ";
            color: " . esc_attr(get_theme_mod('buttons_text_color', '#000000')) . ";
        }            
    ";

    // Register styles
    wp_register_style('main-styles', URL . 'dist/css/styles.min.css', '', time());
    wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

    // Enqueue styles
    wp_enqueue_style('main-styles');
    wp_enqueue_style('font-awesome');

    // Add inline CSS for Customizer settings
    wp_add_inline_style('main-styles', $custom_css);

    // Register and enqueue scripts
    wp_register_script('main-scripts', URL . 'dist/script/main.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main-scripts');
}

add_action('wp_enqueue_scripts', 'register_theme_assets');
