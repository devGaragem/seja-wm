<?php 

require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/custom-post-types.php';
require_once get_template_directory() . '/inc/config-admin.php';

add_theme_support("post-thumbnails");


// Load more

function load_more_items() {
  global $wp_query;

  wp_enqueue_script('jquery');

  wp_register_script('load_more', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery') );

  wp_localize_script( 'load_more', 'load_params', array(
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
    'posts' => json_encode( $wp_query->query_vars ),
    'current_page' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
    'max_page' => $wp_query->max_num_pages
  ) );

  wp_enqueue_script( 'load_more' );
}

add_action( 'wp_enqueue_scripts', 'load_more_items' );