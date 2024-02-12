<?php
$seo_title = get_post_meta( $post->ID, '_seo_title', true );
$seo_desc = get_post_meta( $post->ID, '_seo_description', true);

?>

<div class="pl_extra_settings">
    
    <div class="pp_extra_settings_container">

        <div class="extra_single_col">

            <div class="pp_extra_settings_component">
                <div class="pp_extra_settings_component_title">
                    <label>Meta Title:</label>
                </div>
                <div class="pp_extra_settings_component_input">
                    <input type="text" name="_seo_title" id="seo_title" value="<?php echo esc_attr($seo_title);?>" />
                </div>
            </div>
            <!-- Setings component end-->

            <div class="pp_extra_settings_component">
                <div class="pp_extra_settings_component_title">
                    <label>Meta Description:</label>
                </div>
                <div class="pp_extra_settings_component_input">
                    <textarea name="_seo_description" id="seo_description"><?php echo $seo_desc;?></textarea>
                </div>
            </div>
            <!-- Setings component end-->

        </div>
    </div>

</div>
