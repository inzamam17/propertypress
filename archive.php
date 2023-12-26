<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <h1><?php echo the_archive_title();?></h1>
        <?php if(have_posts()): while( have_posts() ): the_post()?>
            
            <?php get_template_part( 'template-parts/content', 'posts' );?>

        <?php endwhile; else:?>
            
            <?php get_template_part( 'template-parts/content' , 'none' );?>
            
        <?php endif;?>
        <?php echo paginate_links()?>
        <p>Archive.php</p>
    </main>
</div>
<?php get_sidebar();?>

    
<?php get_footer(); ?>