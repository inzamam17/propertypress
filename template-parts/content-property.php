<article id="post-<?php the_ID();?> single-property-listing" <?php post_class();?>>

    <header class="entry-header">
        <?php the_title( '<h1>', '</h1>' );?>
        
    </header>

    <div class="entry-content">
        <?php if(has_post_thumbnail()):?>
            <div>
                <?php the_post_thumbnail();?>
            </div>
        <?php endif;?>
        <p><?php the_content();?></p>

        <div class="prop-info">
            <div><strong>Address: <?php esc_html_e( get_post_meta( get_the_ID(), '_property_address' ,true ) );?></strong></div>
            
            <div class="specs">
                <div class="specs-meta">
                    <span><strong>Bedrooms: <?php esc_html_e( get_post_meta( get_the_ID(), '_property_bedrooms' ,true ) )?></strong></span>
                    <span><strong>Bathrooms: <?php esc_html_e( get_post_meta( get_the_ID(), '_property_bathrooms' ,true ) )?></strong></span>
                    <span><strong>Kitchens: <?php esc_html_e( get_post_meta( get_the_ID(), '_property_kitchens' ,true ) )?></strong></span>
                    <span><strong>Parkings: <?php esc_html_e( get_post_meta( get_the_ID(), '_property_parkings' ,true ) )?></strong></span>
                </div>
                <div class="price"><strong>Price: </strong><?php esc_html_e( get_post_meta( get_the_ID(), '_property_price' ,true ).'/'.get_post_meta( get_the_ID(), '_property_period' ,true ) )?></div>
            </div>
            
        </div>
    </div>

</article>