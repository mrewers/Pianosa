<?php

// namespace Pianosa;

class Walker_Nav_Primary extends Walker_Nav_Menu {

  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat( "\t", $depth );

    $submenu = ( $depth > 0 ) ? 'pianosa-submenu' : '';

    $output .= "\n$indent<ul class=\"pianosa-dropdown-menu $submenu depth-$depth\">\n";
  }

  // function start_el() {

  // }

}