<article id="post-<?php the_ID();?>" <?php post_class();?>>

    <header class="entry-header">
        
        <h2>
            <a href="<?php the_permalink();?>">
                <?php echo get_post_type( $post );  the_title();?>
            </a>
        </h2>
        
        <div class="byline">
            <?php esc_html_e( 'Author: '); the_author_posts_link();?>
        </div>
    </header>

    <div class="entry-content">
        <p><?php the_excerpt();?></p>
    </div>

</article>