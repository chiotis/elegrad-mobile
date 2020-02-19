<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Alerts.
	 */

	$labels = [
		"name" => __( "Alerts", "elegrad-mobile" ),
		"singular_name" => __( "Alert", "elegrad-mobile" ),
		"menu_name" => __( "My Alerts", "elegrad-mobile" ),
		"all_items" => __( "All Alerts", "elegrad-mobile" ),
		"add_new" => __( "Add new", "elegrad-mobile" ),
		"add_new_item" => __( "Add new Alert", "elegrad-mobile" ),
		"edit_item" => __( "Edit Alert", "elegrad-mobile" ),
		"new_item" => __( "New Alert", "elegrad-mobile" ),
		"view_item" => __( "View Alert", "elegrad-mobile" ),
		"view_items" => __( "View Alerts", "elegrad-mobile" ),
		"search_items" => __( "Search Alerts", "elegrad-mobile" ),
		"not_found" => __( "No Alerts found", "elegrad-mobile" ),
		"not_found_in_trash" => __( "No Alerts found in trash", "elegrad-mobile" ),
		"parent" => __( "Parent Alert:", "elegrad-mobile" ),
		"featured_image" => __( "Featured image for this Alert", "elegrad-mobile" ),
		"set_featured_image" => __( "Set featured image for this Alert", "elegrad-mobile" ),
		"remove_featured_image" => __( "Remove featured image for this Alert", "elegrad-mobile" ),
		"use_featured_image" => __( "Use as featured image for this Alert", "elegrad-mobile" ),
		"archives" => __( "Alert archives", "elegrad-mobile" ),
		"insert_into_item" => __( "Insert into Alert", "elegrad-mobile" ),
		"uploaded_to_this_item" => __( "Upload to this Alert", "elegrad-mobile" ),
		"filter_items_list" => __( "Filter Alerts list", "elegrad-mobile" ),
		"items_list_navigation" => __( "Alerts list navigation", "elegrad-mobile" ),
		"items_list" => __( "Alerts list", "elegrad-mobile" ),
		"attributes" => __( "Alerts attributes", "elegrad-mobile" ),
		"name_admin_bar" => __( "Alert", "elegrad-mobile" ),
		"item_published" => __( "Alert published", "elegrad-mobile" ),
		"item_published_privately" => __( "Alert published privately.", "elegrad-mobile" ),
		"item_reverted_to_draft" => __( "Alert reverted to draft.", "elegrad-mobile" ),
		"item_scheduled" => __( "Alert scheduled", "elegrad-mobile" ),
		"item_updated" => __( "Alert updated.", "elegrad-mobile" ),
		"parent_item_colon" => __( "Parent Alert:", "elegrad-mobile" ),
	];

	$args = [
		"label" => __( "Alerts", "elegrad-mobile" ),
		"labels" => $labels,
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
		"rewrite" => [ "slug" => "alert", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-warning",
		"supports" => [ "title" ],
		"taxonomies" => [ "alert_type" ],
	];

	register_post_type( "alert", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Κατηγορίες.
	 */

	$labels = [
		"name" => __( "Κατηγορίες", "elegrad-mobile" ),
		"singular_name" => __( "Κατηγορία", "elegrad-mobile" ),
		"menu_name" => __( "Τύπος", "elegrad-mobile" ),
		"all_items" => __( "All Τύπος", "elegrad-mobile" ),
		"edit_item" => __( "Edit Τύποι", "elegrad-mobile" ),
		"view_item" => __( "View Τύποι", "elegrad-mobile" ),
		"update_item" => __( "Update Τύποι name", "elegrad-mobile" ),
		"add_new_item" => __( "Add new Τύποι", "elegrad-mobile" ),
		"new_item_name" => __( "New Τύποι name", "elegrad-mobile" ),
		"parent_item" => __( "Parent Τύποι", "elegrad-mobile" ),
		"parent_item_colon" => __( "Parent Τύποι:", "elegrad-mobile" ),
		"search_items" => __( "Search Τύπος", "elegrad-mobile" ),
		"popular_items" => __( "Popular Τύπος", "elegrad-mobile" ),
		"separate_items_with_commas" => __( "Separate Τύπος with commas", "elegrad-mobile" ),
		"add_or_remove_items" => __( "Add or remove Τύπος", "elegrad-mobile" ),
		"choose_from_most_used" => __( "Choose from the most used Τύπος", "elegrad-mobile" ),
		"not_found" => __( "No Τύπος found", "elegrad-mobile" ),
		"no_terms" => __( "No Τύπος", "elegrad-mobile" ),
		"items_list_navigation" => __( "Τύπος list navigation", "elegrad-mobile" ),
		"items_list" => __( "Τύπος list", "elegrad-mobile" ),
	];

	$args = [
		"label" => __( "Κατηγορίες", "elegrad-mobile" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'alert_type', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "alert_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];
	register_taxonomy( "alert_type", [ "alert" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
