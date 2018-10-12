<?php

/**
 * Autoload classes - any class that is in the admin directory with a [NAME]-class.php file format will be autoloaded'
 */

 require_once get_stylesheet_directory() . '/includes/autoloader.php';

Pianosa_Autoloader::register( get_stylesheet_directory() . '/admin/' );

use Pianosa\Settings_Page as Settings_Page;

class PianosaSite {
  
  function __construct() {
    add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_pianosa' ) );
    add_action ( 'init', array( $this, 'register_pianosa_admin' ) );
    add_action( 'after_setup_theme', array( $this, 'pianosa_setup' ) );
    add_action( 'widgets_init', array( $this, 'pianosa_widget_setup' ) );
    add_filter( 'admin_footer_text', array( $this, 'pianosa_admin_footer' ) );
    add_filter( 'the_generator', array( $this, 'pianosa_remove_version' ) );
  }

  
  // Enqueues theme's styles and scripts
  function enqueue_pianosa() {
    wp_enqueue_style( 'pianosa_style', get_template_directory_uri() . '/style.css', array(), '0.0.1', 'all');
    wp_enqueue_script( 'pianosa_scripts', get_template_directory_uri() . '/assets/js/bundle.min.js', array(), '1.0.0', true );
  }

  // Add theme settings page to appearance menu
  function register_pianosa_admin() {
    new Settings_Page();
  }

  // Add theme support and nav menu options
  function pianosa_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array('aside', 'image', 'status', 'video') );

    register_nav_menu( 'primary_nav', 'Primary Header Navigation' );
    register_nav_menu( 'footer_nav', 'Footer Navigation' );
  }

  // Add default sidebar
  function pianosa_widget_setup() {
    register_sidebar(
      array(
        'name'          => 'Default Sidebar',
        'id'            => 'sidebar-default',
        'class'         => 'default-admin',
        'description'   => 'Default theme sidebar',
        'before_widget' => '<aside id="%1$s" class="sidebar %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="sidebar-title">',
        'after_title'   => '</h3>',
      )
    );
  }

  // Adds custom admin footer tagline
  function pianosa_admin_footer () {
    $pianosa = '<a href="https://github.com/mrewers/Pianosa" target="_blank">Pianosa</a>';
    $squadron = '<a href="https://github.com/mrewers/Squadron-256" target="_blank">Squadron 256</a>';
    $wordpress = '<a href="http://www.wordpress.org" target="_blank">WordPress</a>';
    
    if ( is_plugin_active( 'squadron-256/squadron-256.php' ) ) {
      echo 'Powered by ' . $pianosa . ' and ' . $squadron . ' | Built on ' . $wordpress . '</p>';
    } else {
      echo 'Powered by ' . $pianosa . ' | Built on ' . $wordpress . '</p>';
    }
  }
    
  // Removes the WordPress version number from your site's frontend (in the interest of security)
  function pianosa_remove_version() {
    return '';
  }
}

new PianosaSite();