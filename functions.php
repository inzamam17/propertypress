<?php
// Added basic theme support options
add_theme_support( 'title-tag');
add_theme_support('custom-logo');
add_theme_support( 'posts-thumbnail');


// Adding styles to theme

function propertypress_enqueue_style(){

    // adding style.css
wp_enqueue_style('main-css' , get_stylesheet_directory_uri().'style.css', [], time() , 'all');

}

add_action('wp_enqueue_scripts', 'propertypress_enqueue_style');


// Register Mneu Locations

register_nav_menus( [

    "main-menu" => esc_html__( 'Main Menu', 'propertypress' ),
    "footer-menu" => esc_html__( 'Footer Menu', 'propertypress' )

] )

?>