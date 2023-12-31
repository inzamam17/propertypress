<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <h2>
            <?php esc_html_e( 'Search Results For', 'propertypress' );   echo get_search_query();?>
        </h2>

        <?php if(have_posts()): while( have_posts() ): the_post()?>
            
            <?php get_template_part( 'template-parts/content', 'search' );?>

        <?php endwhile; else:?>
            
            <?php get_template_part( 'template-parts/content' , 'none' );?>
            
        <?php endif;?>
        <?php echo paginate_links()?>

    </main>
</div>
<?php get_sidebar();?>

    
<?php get_footer(); ?>