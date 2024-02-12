<?php
// Adding required files
require_once(get_template_directory().'/inc/property-meta-components.php');
require_once(get_template_directory().'/inc/seo-meta-components.php');

// Added basic theme support options
add_theme_support( 'title-tag');
add_theme_support( 'html5');
add_theme_support( 'custom-logo');
add_theme_support( 'custom-header');
add_theme_support( 'custom-background');
add_theme_support( 'post-thumbnails');
add_theme_support( 'post-formats', ['aside', 'video', 'gallery']);


// Adding styles to theme

function propertypress_enqueue_style(){

    // adding style.css
	wp_enqueue_style('main-css' , get_stylesheet_directory_uri().'/style.css', [], time() , 'all');

}

add_action('wp_enqueue_scripts', 'propertypress_enqueue_style');

// Adding admin to theme

function propertypress_enqueue_admin_style(){

	// adding admin stylesheet
	wp_enqueue_style('admin-css' , get_stylesheet_directory_uri().'/inc/assets/admin-style.css', [], time() , 'all');

}
add_action( 'admin_enqueue_scripts', 'propertypress_enqueue_admin_style');


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
    // Register widget for footer first column

    register_sidebar( [

        'name' => esc_html__('Footer One', 'propertypress'),
        'id' => 'main-sidebar',
        'description' => esc_html__('Footer first column', 'propertypress'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'

    ] );
    // Register widget for footer second column

    register_sidebar( [

        'name' => esc_html__('Footer Second', 'propertypress'),
        'id' => 'main-sidebar',
        'description' => esc_html__('Footer second column', 'propertypress'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'

    ] );
    // Register widget for footer first column

    register_sidebar( [

        'name' => esc_html__('Footer Three', 'propertypress'),
        'id' => 'main-sidebar',
        'description' => esc_html__('Footer third column', 'propertypress'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'

    ] );

}

add_action('widgets_init', 'propertypress_widgets_init');

// Filter to set excerpt length

function propertypress_set_excerpt_length($default_ex_length){

$new_excerpt_length  = 100;

return $new_excerpt_length;


}

add_filter( 'excerpt_length', 'propertypress_set_excerpt_length', 10, 1);

// Filter to add read more link at end of excerpt

function propertypress_modify_excerpt_more(){

    global $post;

    $new_read_more_link = '...<a class="excerpt-more-link" href="'.get_permalink( $post->ID ).'">'
    .esc_html__( ' Read More', 'propertypress' ).
    '</a>';

    return $new_read_more_link;

}


add_filter( 'excerpt_more','propertypress_modify_excerpt_more', 10 );

// Register custom post type Property Listing

function propertypress_register_my_cpts() {

	/**
	 * Post Type: Property Listings.
	 */

	$labels = [
		"name" => esc_html__( "Property Listings", "propertypress" ),
		"singular_name" => esc_html__( "Property Listing", "propertypress" ),
		"menu_name" => esc_html__( "Property Listings", "propertypress" ),
		"all_items" => esc_html__( "All Property Listings", "propertypress" ),
		"add_new" => esc_html__( "New Property Listing", "propertypress" ),
		"add_new_item" => esc_html__( "Add New Property Listing", "propertypress" ),
		"edit_item" => esc_html__( "Edit Property Listing", "propertypress" ),
		"new_item" => esc_html__( "New Property Listing", "propertypress" ),
		"view_item" => esc_html__( "Edit Property Listing", "propertypress" ),
		"view_items" => esc_html__( "View Property Listings", "propertypress" ),
		"search_items" => esc_html__( "Search Property Listings", "propertypress" ),
		"not_found" => esc_html__( "Property Listings Not Found", "propertypress" ),
		"featured_image" => esc_html__( "Property Listing Featured Image", "propertypress" ),
		"set_featured_image" => esc_html__( "Set Property Listing Featured Image", "propertypress" ),
		"remove_featured_image" => esc_html__( "Remove Property Listing Featured Image", "propertypress" ),
		"use_featured_image" => esc_html__( "Use as featured image for Property Listing", "propertypress" ),
		"archives" => esc_html__( "Property Listing Archives", "propertypress" ),
		"insert_into_item" => esc_html__( "Insert into Property Listing", "propertypress" ),
		"uploaded_to_this_item" => esc_html__( "Uploaded to this Property Listing", "propertypress" ),
		"filter_items_list" => esc_html__( "Filter Property Listing list", "propertypress" ),
		"items_list_navigation" => esc_html__( "Property Listing list Navigation", "propertypress" ),
		"items_list" => esc_html__( "Property Listings List", "propertypress" ),
		"attributes" => esc_html__( "Property Listings Attributes", "propertypress" ),
		"name_admin_bar" => esc_html__( "Property Listing", "propertypress" ),
		"item_published" => esc_html__( "Property Listing Published", "propertypress" ),
		"item_published_privately" => esc_html__( "Property Listing published privately", "propertypress" ),
		"item_reverted_to_draft" => esc_html__( "Property Listing reverted to draft", "propertypress" ),
		"item_trashed" => esc_html__( "Property Listing trashed", "propertypress" ),
		"item_scheduled" => esc_html__( "Property Listing scheduled", "propertypress" ),
		"item_updated" => esc_html__( "Property Listing Updated", "propertypress" ),
	];

	$args = [
		"label" => esc_html__( "Property Listings", "propertypress" ),
		"labels" => $labels,
		"description" => "Post type for property listings.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "property_listing", "with_front" => true ],
		"query_var" => "property_listing",
		"menu_icon" => "dashicons-admin-home",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "post-formats" ],
		"show_in_graphql" => false,
	];

	register_post_type( "property_listing", $args );
}

add_action( 'init', 'propertypress_register_my_cpts' );




?>