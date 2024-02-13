<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
            

            if( have_posts() ):

                while( have_posts() ): the_post();

                    
                the_title( '<h1>', '</h1>');

                endwhile; 

            else:

                et_template_part( 'template-parts/none' );

            endif;

            wp_reset_postdata();
        ?>

    </main>
</div>
<?php get_sidebar();?>

    
<?php get_footer(); ?>