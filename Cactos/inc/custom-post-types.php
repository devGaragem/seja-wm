<?php
function register_custom_post_types() {

	$labels = [
		"name" => __( "Banners da tela inicial", "custom-post-type-ui" ),
		"singular_name" => __( "Banner da tela inicial", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Banner da tela inicial", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "banners", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type("banners", $args );


  
	$labels2 = [
		"name" => __( "Depoimentos", "custom-post-type-ui" ),
		"singular_name" => __( "Depoimento", "custom-post-type-ui" ),
	];

	$args2 = [
		"label" => __( "Depoimento", "custom-post-type-ui" ),
		"labels" => $labels2,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "depoimento", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-awards",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
    'taxonomies'          => array('category'),
		"show_in_graphql" => false,
	];

	register_post_type("depoimento", $args2 );




	$labels3 = [
		"name" => __( "Serviços", "custom-post-type-ui" ),
		"singular_name" => __( "Serviço", "custom-post-type-ui" ),
	];

	$args3 = [
		"label" => __( "Serviço", "custom-post-type-ui" ),
		"labels" => $labels3,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "servico", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-building",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
    'taxonomies'          => array('category'),
		"show_in_graphql" => false,
	];

	register_post_type("servico", $args3 );
}

add_action( 'init', 'register_custom_post_types' );

?>