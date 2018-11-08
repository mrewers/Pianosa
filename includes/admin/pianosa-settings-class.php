<?php

namespace Pianosa;

class Settings_Page {

  public function __construct() {
    add_action( 'admin_menu', array( $this, 'add_pianosa_submenu' ) );
  }
  
  public function add_pianosa_submenu() {
    add_submenu_page(
      'themes.php',
      'Configure Pianosa',
      'Pianosa',
      'manage_options',
      'pianosa_settings',
      array( $this, 'populate_submenu' )
    );
  }

  function populate_submenu() {
    if ( !current_user_can( 'manage_options' ) ) {
      wp_die( esc_html_e( 'You do not have sufficient permissions to access this page.', 'pianosa' ) );
    }

    include( get_template_directory() . '/admin/partials/teaser-settings.php');
  }
}