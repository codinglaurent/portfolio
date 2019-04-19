<?php   include_once "head.php" ?>
<?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<body>
<header>
    <nav id="mc-nav">
        <?php the_custom_logo(); ?>
        <p><?php bloginfo( 'name' ); ?> / <?php bloginfo('description'); ?></p>

        <?php
            wp_nav_menu( array( 
                'theme_location' => 'primary-menu', 
                'container_class' => 'custom-menu-class' ) ); 
        ?>
        <?php
            wp_nav_menu( array( 
                'theme_location' => 'external-link-menu', 
                'container_class' => 'custom-menu-class' ) ); 
        ?>
    </nav><!-- /nav-->





</header><!-- /header -->