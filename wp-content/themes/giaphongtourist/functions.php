<?php
if ( ! function_exists( 'theme_setup' ) ) :
  function theme_setup () {
    add_theme_support( 'title-tag' );

    register_nav_menus(
      array(
        'primary' => __( 'Primary' ),
      )
    );
  }
endif;
add_action( 'after_setup_theme', 'theme_setup' );

function header_scripts() {
  wp_enqueue_style("theme_styles", get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'header_scripts' );

// add custom menu li class name
function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->li_class)) {
    $classes[] = $args->li_class;
  }
  switch ($item->menu_order) {
    case 1:
      $classes[] = 'yellow';
      break;
    case 2:
      $classes[] = 'orange';
      break;
    case 3:
      $classes[] = 'red';
      break;
    case 4:
      $classes[] = 'green';
      break;
    default:
      $classes[] = 'violet';
      break;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);