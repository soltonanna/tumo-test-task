<?php
function tumo_customize_register($wp_customize) {
    // Custom Theme Colors Section
    $wp_customize->add_section('theme_colors', [
        'title' => __('Custom Theme Colors', 'tumo'),
        'priority' => 20,
    ]);

    // Primary Color
    $wp_customize->add_setting('primary_color', [
        'default' => '#4CE0D7',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', [
        'label'    => __('Primary Color', 'tumo'),
        'section'  => 'theme_colors',
        'settings' => 'primary_color',
    ]));

    // Secondary Color
    $wp_customize->add_setting('secondary_color', [
        'default' => '#BCBCBC',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', [
        'label'    => __('Secondary Color', 'tumo'),
        'section'  => 'theme_colors',
        'settings' => 'secondary_color',
    ]));

    // Text Color
    $wp_customize->add_setting('text_color', [
        'default' => '#262626',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_color', [
        'label'    => __('Text Color', 'tumo'),
        'section'  => 'theme_colors',
        'settings' => 'text_color',
    ]));

    // Header Background Color
    $wp_customize->add_setting('header_bg_color', [
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_bg_color', [
        'label'    => __('Header Background Color', 'tumo'),
        'section'  => 'theme_colors',
        'settings' => 'header_bg_color',
    ]));

    // Footer Background Color
    $wp_customize->add_setting('footer_bg_color', [
        'default'   => '#F9F9F9',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', [
        'label'    => __('Footer Background Color', 'tumo'),
        'section'  => 'theme_colors',
        'settings' => 'footer_bg_color',
    ]));

    // Custom Homepage Settings Section (separate section as requested)
    $wp_customize->add_section('homepage_settings', [
        'title' => __('Custom Homepage Settings', 'tumo'),
        'priority' => 29,
    ]);

    $wp_customize->add_setting('homepage_book_shortcode', [
        'default' => '[book_list]',
        'sanitize_callback' => 'wp_kses_post',
    ]);

    $wp_customize->add_control('homepage_book_shortcode_control', [
        'label'    => __('Book List Shortcode', 'tumo'),
        'section'  => 'homepage_settings',
        'settings' => 'homepage_book_shortcode',
        'type'     => 'textarea',
    ]);

    $wp_customize->add_setting('homepage_books_per_page', [
        'default' => 4,
        'sanitize_callback' => 'absint',
    ]);

    $wp_customize->add_control('homepage_books_per_page_control', [
        'label'    => __('Number of Books', 'tumo'),
        'section'  => 'homepage_settings',
        'settings' => 'homepage_books_per_page',
        'type'     => 'number',
    ]);

    $wp_customize->add_setting('homepage_books_read_more_url', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('homepage_books_read_more_url_control', [
        'label'    => __('Books Page URL', 'tumo'),
        'section'  => 'homepage_settings',
        'settings' => 'homepage_books_read_more_url',
        'type'     => 'url',
    ]);
}
add_action('customize_register', 'tumo_customize_register');
