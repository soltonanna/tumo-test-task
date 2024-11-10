<?php
function register_theme_assets() {
    // Define the Customize styles
    $custom_css = "
        .header,
        .header .container {
            background-color: " . esc_attr(get_theme_mod('header_bg_color', '#ffffff')) . ";
        }
        .footer,
        .footer .container {
            background-color: " . esc_attr(get_theme_mod('footer_bg_color', '#F9F9F9')) . ";
        }
        .social li {
            border: 1px solid " . esc_attr(get_theme_mod('primary_color', '#4CE0D7')) . ";
            background-color: " . esc_attr(get_theme_mod('primary_color', '#4CE0D7')) . ";
        }
        .btn,
        .btn * {
            background-color: " . esc_attr(get_theme_mod('primary_color', '#4CE0D7')) . ";
            border: 2px solid " . esc_attr(get_theme_mod('primary_color', '#4CE0D7')) . ";
            color: " . esc_attr(get_theme_mod('text_color', '#000000')) . ";
        }
        .primary-text-color {
            color: " . esc_attr(get_theme_mod('primary_color', '#4CE0D7')) . ";
        } 
        .secondary-text-color {
            color: " . esc_attr(get_theme_mod('secondary_color', '#BCBCBC')) . ";
        }

        .text-color,
        p, span, a,
        .menu-items li a {
            color: " . esc_attr(get_theme_mod('text_color', '#262626')) . ";
        }

        .menu-items li a:hover,
        .content-wrp a:hover,
        .single-page .post-navigation > div:before {
            color: " . esc_attr(get_theme_mod('primary_color', '#4CE0D7')) . ";
        }

        .theme-pagination .page-numbers {
            color: " . esc_attr(get_theme_mod('text_color', '#262626')) . ";
        }  
        .theme-pagination .page-numbers.current {
            border: 2px solid " . esc_attr(get_theme_mod('primary_color', '#4CE0D7')) . ";
            background-color: " . esc_attr(get_theme_mod('primary_color', '#4CE0D7')) . ";
        }  
        .theme-pagination .page-numbers:not(.next, .prev, .current) {
            border: 1px solid " . esc_attr(get_theme_mod('secondary_color', '#4CE0D7')) . ";
        }   

    ";

    // Register styles
    wp_register_style('main-styles', URL . 'dist/css/styles.min.css', '', time());
    wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

    // Enqueue styles
    wp_enqueue_style('main-styles');
    wp_enqueue_style('font-awesome');

    // Add inline CSS for Customize settings
    wp_add_inline_style('main-styles', $custom_css);

    // Register and enqueue scripts
    wp_register_script('main-scripts', URL . 'dist/script/main.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main-scripts');
}

add_action('wp_enqueue_scripts', 'register_theme_assets');
