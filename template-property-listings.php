<?php 
// Template Name: Property Listings

get_header(); ?>
<div id="primary" class="content-area extended">
    <main id="main" class="site-main">

        <div class="properties-list">

    
            <?php
                $cp_args = array(

                    'post_type' => 'property_listing',
                    'posts_per_page' => 10

                );
                    

                $pl_post_data = new WP_Query($cp_args);

                if( $pl_post_data->have_posts() ):

                    while( $pl_post_data->have_posts() ):

                        $pl_post_data->the_post();

                        get_template_part( 'template-parts/content', 'property-posts'  );

                    endwhile; 

                else:

                    et_template_part( 'template-parts/none' );

                endif;

                wp_reset_postdata();
            ?>
        </div>

    </main>
</div

    
<?php get_footer(); ?>