<?php
$p_type = get_post_meta( $post->ID, '_property_type', true );
$p_bedrooms = get_post_meta( $post->ID, '_property_bedrooms', true);
$p_bathrooms = get_post_meta( $post->ID, '_property_bathrooms', true);
$p_kitchens = get_post_meta( $post->ID, '_property_kitchens', true);
$p_parkings = get_post_meta( $post->ID, '_property_parkings', true);
$p_price = get_post_meta( $post->ID, '_property_price', true);
$p_period = get_post_meta( $post->ID, '_property_period', true);
$p_address = get_post_meta( $post->ID, '_property_address', true);
?>

<div class="pl_extra_settings">
    
    <div class="pp_extra_settings_container">

        <div class="extra_single_col">

            <div class="pp_extra_settings_component">
                <div class="pp_extra_settings_component_title">
                    <label>Select Property Type:</label>
                </div>
                <div class="pp_extra_settings_component_input">
                    <input type="radio" id="property_type" name="_property_type" value="commercial" <?php checked( $p_type, 'commercial');?> />
                    <label>Commercial</label>

                    <input type="radio" id="property_type" name="_property_type" value="residential" <?php checked( $p_type, 'residential');?>/>
                    <label>Residential</label>
                </div>
            </div>
            <!-- Setings component end-->

            <div class="pp_extra_settings_component">
                <div class="pp_extra_settings_component_title">
                    <label>No. of Bedrooms:</label>
                </div>
                <div class="pp_extra_settings_component_input">
                    <input type="number" name="_property_bedrooms" id="property_bedrooms" value="<?php echo esc_attr($p_bedrooms);?>" />
                </div>
            </div>
            <!-- Setings component end-->

            <div class="pp_extra_settings_component">
                <div class="pp_extra_settings_component_title">
                    <label>No. of Bathrooms:</label>
                </div>
                <div class="pp_extra_settings_component_input">
                    <input type="number" name="_property_bathrooms" id="property_bathrooms" value="<?php echo esc_attr($p_bathrooms);?>" />
                </div>
            </div>
            <!-- Setings component end-->

            <div class="pp_extra_settings_component">
                <div class="pp_extra_settings_component_title">
                    <label>No. of Kitchens:</label>
                </div>
                <div class="pp_extra_settings_component_input">
                    <input type="number" name="_property_kitchens" id="property_kitchens" value="<?php echo esc_attr($p_kitchens);?>" />
                </div>
            </div>
            <!-- Setings component end-->

            <div class="pp_extra_settings_component">
                <div class="pp_extra_settings_component_title">
                    <label>Car Parkings:</label>
                </div>
                <div class="pp_extra_settings_component_input">
                    <input type="number" name="_property_car_kitchens" id="property_car_kitchens" value="<?php echo esc_attr($p_parkings);?>" />
                </div>
            </div>
            <!-- Setings component end-->

            <div class="pp_extra_settings_component">
                <div class="pp_extra_settings_component_title">
                    <label>Price:</label>
                </div>
                <div class="pp_extra_settings_component_input">
                    <input type="number" name="_property_price" id="property_price" value="<?php echo esc_attr($p_price);?>" />
                </div>
            </div>
            <!-- Setings component end-->

            <div class="pp_extra_settings_component">
                <div class="pp_extra_settings_component_title">
                    <label>Period:</label>
                </div>
                <div class="pp_extra_settings_component_input">
                    <select name="_property_period" id="property_period">
                        <option <?php selected( $p_period, 'Annual' );?>><?php esc_html_e( 'Annual', 'propertypress' );?></option>
                        <option <?php selected( $p_period, 'Per Month' );?>><?php esc_html_e( 'Per Month', 'propertypress' );?></option>
                    </select>
                </div>
            </div>
            <!-- Setings component end-->

            <div class="pp_extra_settings_component">
                <div class="pp_extra_settings_component_title">
                    <label>Address:</label>
                </div>
                <div class="pp_extra_settings_component_input">
                    <input type="text" name="_property_address" id="property_address" value="<?php echo esc_attr($p_address);?>" />
                </div>
            </div>
            <!-- Setings component end-->

        </div>
    </div>

</div>
