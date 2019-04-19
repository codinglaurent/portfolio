<?php

/**
 * Custom Logo
 * 
 * @link https://medium.com/@erkdonovan/how-to-add-a-custom-theme-logo-in-wordpress-1d3cbb290882
 */

add_theme_support( 'custom-logo' );

add_theme_support( 'custom-logo', array(
    'height'      => 52,
    'width'       => 52,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

/** Custom class logo 
 * 
 * @link https://wordpress.stackexchange.com/questions/229905/how-to-add-css-class-to-custom-logo
 */

add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'lg-logo', $html );
    $html = str_replace( 'custom-logo-link', 'lg-logo-link', $html );

    return $html;
}

/**
 * Custom menu
 * 
 * @link https://www.wpbeginner.com/wp-themes/how-to-add-custom-navigation-menus-in-wordpress-3-0-themes/
 */
function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'primary-menu' => __( 'Menu principal' ),
		'external-link-menu' => __( 'Menu 1 lien externe' )
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );