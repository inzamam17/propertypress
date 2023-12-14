<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<header>
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php
            $args = [
                'theme-location' => 'main-menu'
            ];
        
            wp_nav_menu( $args );
        ?>
    </nav>
</header>