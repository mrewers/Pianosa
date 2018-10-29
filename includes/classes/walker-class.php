<?php

// namespace Pianosa;

class Walker_Nav_Primary extends Walker_Nav_Menu {

  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = ( $depth ) ? str_repeat( " ", $depth ) : '';

    $submenu = ( $depth > 0 ) ? 'pianosa-submenu' : '';

    $output .= "\n$indent<ul class=\"pianosa-dropdown-menu $submenu depth-$depth\">\n";
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $indent = ( $depth ) ? str_repeat( " ", $depth ) : '';

    // Sets the <li> element in dropdown menu
    $li_attrs = '';
    $class_names = $value = '';

    $classes = empty( $item->classes ) ? array() : ( array ) $item->classes;

    $classes[] = ( $args->walker->has_children ) ? 'pianosa-dropdown' : '';
    $classes[] = ( $item->current || $item->current_item_ancestor ) ? 'active' : '';
    $classes[] = 'pianosa-menu-item';
    if ( $depth && $args->walker->has_children ) {
      $classes[] = 'pianosa-submenu';
    }

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="' . esc_attr( $class_names ) . '"';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names . $li_attrs . '>';

    // Sets the <a> element in dropdown menu
    $a_attrs = !empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title). '"' : '';
    $a_attrs .= !empty( $item->attr_target ) ? ' target="' . esc_attr( $item->attr_target). '"' : '';
    $a_attrs .= !empty( $item->attr_xfn ) ? ' rel="' . esc_attr( $item->attr_xfn). '"' : '';
    $a_attrs .= !empty( $item->attr_url ) ? ' href="' . esc_attr( $item->attr_url). '"' : '';

    $a_attrs .= ( $args->walker->has_children ) ? ' class="pianosa-dropdown-toggle" data-toggle="dropdown"' : '';

    $item_output = $args->before;
    $item_output .= '<a' . $a_attrs . '>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

}