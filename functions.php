<?php
// Added basic theme support options
add_theme_support('custom-logo');
add_theme_support( 'posts-thumbnail')

function propertypress_enqueue_style(){

wp_enqueue_style('main-css' , get_stylesheet_directory_uri().'style.css', [], time() , 'all');

}

add_action('wp_enqueue_scripts', 'propertypress_enqueue_style');

?>