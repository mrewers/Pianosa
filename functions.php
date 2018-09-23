<?php

class PianosaSite {
  
  function __construct() {
    add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_pianosa' ) );
    add_action( 'after_setup_theme', array( $this, 'pianosa_setup' ) );
  }
  
  function enqueue_pianosa() {
    wp_enqueue_style( 'pianosa_style', get_template_directory_uri() . '/style.css', array(), '0.0.1', 'all');
    wp_enqueue_script( 'pianosa_scripts', get_template_directory_uri() . '/assets/js/bundle.min.js', array(), '1.0.0', true );
  }

  function pianosa_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array('aside', 'image', 'status', 'video') );

    register_nav_menu( 'primary_nav', 'Primary Header Navigation' );
    register_nav_menu( 'footer_nav', 'Footer Navigation' );
  } 
}

new PianosaSite();