<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>

  </head>

  <?php 
  
    if( is_front_page() ):
      $pianosa_class = array( 'pianosa_front_page' );
    else:
      $pianosa_class = array( 'pianosa_page' );
    endif;

  ?>

  <body <?php body_class( $pianosa_class ); ?>>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <?php wp_nav_menu( array( 'theme_location'=>'primary_nav' ) ); ?>
