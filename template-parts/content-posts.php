<article id="post-<?php the_ID();?>" <?php post_class();?>>

    <header class="entry-header">
        
        <?php the_title( '<h1><a href="'.esc_url(get_permalink()).'">', '</a></h1>' );?>
        
        <div class="byline">
            <?php esc_html_e( 'Author: '); the_author_posts_link();?>
        
        </div>
    </header>

    <div class="entry-content">
        <p><?php the_excerpt();?></p>
    </div>

</article>