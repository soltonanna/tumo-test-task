<?php
if ( ! defined( 'URL' ) ) {
    define('URL', get_template_directory_uri() . '/');
}

require get_template_directory() . '/inc/customizer-settings.php';

require_once get_template_directory() . '/inc/styles-scripts.php';

require_once get_template_directory() . '/inc/related-posts-widget.php';  


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


function custom_category_widget_count($links) {
    $links = preg_replace('/\((\d+)\)/', '<span class="cat-count">$1</span>', $links);
    return $links;
}
add_filter('wp_list_categories', 'custom_category_widget_count');



