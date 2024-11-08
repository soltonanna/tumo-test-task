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

