<?php
// Meta fileds for property listing.



function register_property_listing_extra(){

    add_meta_box(
        'property_listing_extra_id',                 // Unique ID
        __( 'Add Property Details Below', 'propertypress' ),      // Box title
        'property_listing_extra_html',  // Content callback, must be of type callable
        'property_listing',
        'side'                            // Post type
    );

}

add_action( 'add_meta_boxes', 'register_property_listing_extra');

function property_listing_extra_html($post){

    include( get_template_directory() . '/inc/forms/property-components-form.php' );
}

function update_property_listing_meta_box_values($post_id){

    $pt_meta_values = [

        '_property_type',
        '_property_bedrooms',
        '_property_bathrooms',
        '_property_kitchens',
        '_property_parkings',
        '_property_price',
        '_property_period',
        '_property_address',

    ];
    //update_post_meta( $post_id, '_property_type_meta', $_POST['_property_type_meta'] );
    foreach( $pt_meta_values as $pt_value ){

        if( array_key_exists($pt_value, $_POST) ){

            update_post_meta( $post_id, $pt_value, $_POST[$pt_value] );
        }

    }
 
}

    add_action( 'save_post', 'update_property_listing_meta_box_values' );


?>