<?php
// Meta fileds for seo



function register_seo_settings_extra(){

    add_meta_box(
        'seo_setting_extra_id',                 // Unique ID
        __( 'SEO Setting', 'propertypress' ),      // Box title
        'register_seo_settings_html',  // Content callback, must be of type callable
        'post',
        'side'                            // Post type
    );

}

add_action( 'add_meta_boxes', 'register_seo_settings_extra');

function register_seo_settings_html($post){

    include( get_template_directory() . '/inc/forms/seo-components-form.php' );
}

function update_seo_setting_meta_box_values($post_id){

    $pt_seo_meta_values = [

        '_seo_title',
        '_seo_description',

    ];
    //update_post_meta( $post_id, '_property_type_meta', $_POST['_property_type_meta'] );
    foreach( $pt_seo_meta_values as $seo_value ){

        if( array_key_exists($seo_value, $_POST) ){

            update_post_meta( $post_id, $seo_value, $_POST[$seo_value] );
        }

    }
 
}

    add_action( 'save_post', 'update_seo_setting_meta_box_values' );

    function insert_seo_meta_tags(){

        global $post;

        echo '<meta name="title" content="'.get_post_meta( $post->ID, "_seo_title", true).'"/>'.'\n'.'<meta name="description" content="'.get_post_meta( $post->ID, "_seo_description", true).'"/>';

    }

    add_action( 'wp_head', 'insert_seo_meta_tags' );


?>