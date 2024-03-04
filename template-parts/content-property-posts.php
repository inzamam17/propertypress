
<div class="property-list-item">
    <div class="property-list-content">
        <div class="property-img">
            <?php if(has_post_thumbnail()): ?>
                
                <a href="<?php esc_url( get_post_permalink() );?>">
                    <?php the_post_thumbnail();?>
                </a>
            <?php endif;?>
        </div>
        <div class="property-title">
        <?php the_title( '<h1><a href="'.esc_url(get_permalink()).'">', '</a></h1>' );?>
        </div>
        <div class="property-specs">
            <p class="property-address"><?php esc_html_e( get_post_meta( get_the_ID(), '_property_address' ,true ), 'propertypress' );?></p>
            <p>
                <span class="property-type"><strong>Type: <?php echo get_post_meta( get_the_ID(), '_property_type' ,true );?></strong> </span>
                <span class="property-price"><strong>Price: <?php echo get_post_meta( get_the_ID(), '_property_price' ,true ).'/'.get_post_meta( get_the_ID(), '_property_period' ,true );?></strong> </span>
            </p>
        </div>
    </div>
</div>