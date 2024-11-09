<?php
if ( ! defined( 'URL' ) ) {
    define('URL', get_template_directory_uri() . '/');
}

require_once 'inc/styles-scripts.php';



function tumo_custom_theme_setup() {
    /*
    * Enable support for Post Thumbnails on posts and pages.
    */
    add_theme_support('post-thumbnails');

    /*
    * Register navigation menus.
    */
    register_nav_menus( array(
        'top-menu'=> esc_html__( 'Top menu', 'tumo' ),
        'footer-menu'=> esc_html__( 'Footer menu', 'tumo' ),
    ));

    /*
    * Add support for core custom logo.
    */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'tumo_custom_theme_setup' );


function theme_sidebar_registration() {
    register_sidebar( array(
        'name'          => 'Right Sidebar',
        'id'            => 'right-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'theme_sidebar_registration' );

require_once get_template_directory() . '/includes/related-posts-widget.php';  


function tumo_customize_register($wp_customize) {
    /******* 
    * *****  Add a section for the homepage settings */
    $wp_customize->add_section('homepage_settings', [
        'title' => __('Custom Homepage Settings', 'tumo'),
        'priority' => 29,
    ]);

        // Add a setting for the book list shortcode
        $wp_customize->add_setting('homepage_book_shortcode', [
            'default' => '[book_list]',
            'sanitize_callback' => 'wp_kses_post',
        ]);

        // Add a control for the shortcode input
        $wp_customize->add_control('homepage_book_shortcode_control', [
            'label'     => __('Book List Shortcode', 'tumo'),
            'section'   => 'homepage_settings',
            'settings'  => 'homepage_book_shortcode',
            'type'      => 'textarea',
        ]);
        // Add a setting for the default posts per page in the homepage book list
        $wp_customize->add_setting('homepage_books_per_page', [
            'default' => 4,
            'sanitize_callback' => 'absint',
        ]);

        // Add a control for the posts per page input
        $wp_customize->add_control('homepage_books_per_page_control', [
            'label'     => __('Number of Books', 'tumo'),
            'section'   => 'homepage_settings',
            'settings'  => 'homepage_books_per_page',
            'type'      => 'number',
        ]);


        // Add a setting for the "Read More" URL
        $wp_customize->add_setting('homepage_books_read_more_url', [
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ]);

        // Add a control for the "Read More" URL input
        $wp_customize->add_control('homepage_books_read_more_url_control', [
            'label'     => __('Books Page URL', 'tumo'),
            'section'   => 'homepage_settings',
            'settings'  => 'homepage_books_read_more_url',
            'type'      => 'url',
        ]);

    /******* 
    * ***** Section for Header Settings */
    $wp_customize->add_section('header_settings', array(
        'title'    => __('Header Settings', 'tumo'),
        'priority' => 30,
    ));

        // Header Background Color
        $wp_customize->add_setting('header_bg_color', array(
            'default'   => '#ffffff',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_bg_color', array(
            'label'    => __('Header Background Color', 'tumo'),
            'section'  => 'header_settings',
            'settings' => 'header_bg_color',
        )));

    /******* 
    * ***** Section for Footer Settings */
    $wp_customize->add_section('footer_settings', array(
        'title'    => __('Footer Settings', 'tumo'),
        'priority' => 31,
    ));

        // Footer Background Color
        $wp_customize->add_setting('footer_bg_color', array(
            'default'   => '#F9F9F9',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', array(
            'label'    => __('Footer Background Color', 'tumo'),
            'section'  => 'footer_settings',
            'settings' => 'footer_bg_color',
        )));

    /******* 
    * ***** Section for Social Icons Settings */
    $wp_customize->add_section('social_icons_settings', array(
        'title'    => __('Social Icons Settings', 'tumo'),
        'priority' => 32,
    ));

        // Social Icons Background Color
        $wp_customize->add_setting('social_icons_bg_color', array(
            'default'   => '#4CE0D7',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'social_icons_bg_color', array(
            'label'    => __('Social Icons Background Color', 'tumo'),
            'section'  => 'social_icons_settings',
            'settings' => 'social_icons_bg_color',
        )));

    /******* 
    * ***** Section for Buttons Settings */
    $wp_customize->add_section('buttons_settings', array(
        'title'    => __('Buttons Settings', 'tumo'),
        'priority' => 33,
    ));

        // Buttons Background Color
        $wp_customize->add_setting('buttons_bg_color', array(
            'default'   => '#4CE0D7',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'buttons_bg_color', array(
            'label'    => __('Buttons Background Color', 'tumo'),
            'section'  => 'buttons_settings',
            'settings' => 'buttons_bg_color',
        )));

        // Buttons Text Color
        $wp_customize->add_setting('buttons_text_color', array(
            'default'   => '#000000',
            'transport' => 'refresh',
        ));
        
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'buttons_text_color', array(
            'label'    => __('Buttons Text Color', 'tumo'),
            'section'  => 'buttons_settings',
            'settings' => 'buttons_text_color',
        )));  
}
add_action('customize_register', 'tumo_customize_register');


