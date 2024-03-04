<?php 

get_header(); ?>

<div id="primary" class="content-area extended">
    <main id="main" class="site-main">

        <?php if(have_posts()): while( have_posts() ): the_post()?>
            
        <?php get_template_part( 'template-parts/content', 'property' );?>

        <?php endwhile; else:?>
            
            <?php get_template_part( 'template-parts/content' , 'none' );?>
            
        <?php endif;?>

    </main>
</div

    
<?php get_footer(); ?>