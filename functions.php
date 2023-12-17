<?php
// Added basic theme support options
add_theme_support( 'title-tag');
add_theme_support( 'html5');
add_theme_support( 'custom-logo');
add_theme_support( 'custom-header');
add_theme_support( 'custom-background');
add_theme_support( 'post-thumbnails');


// Adding styles to theme

function propertypress_enqueue_style(){

    // adding style.css
wp_enqueue_style('main-css' , get_stylesheet_directory_uri().'/style.css', [], time() , 'all');

}

add_action('wp_enqueue_scripts', 'propertypress_enqueue_style');


// Register Mneu Locations

register_nav_menus( [

    "main-menu" => esc_html__( 'Main Menu', 'propertypress' ),
    "footer-menu" => esc_html__( 'Footer Menu', 'propertypress' )

] );

// Register widget areas
function propertypress_widgets_init(){

    // Register sidebar for pages

    register_sidebar( [

        'name' => esc_html__('Main Sidebar', 'propertypress'),
        'id' => 'main-sidebar',
        'description' => esc_html__('Pages sidebar', 'propertypress'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'

    ] );

}

add_action('widgets_init', 'propertypress_widgets_init');

?>