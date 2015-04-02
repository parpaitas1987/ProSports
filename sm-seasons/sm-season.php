<?php
// function for adding new season
function add_new_season() {
	// Add new "Locations" taxonomy to Posts
	
	$addIn = array( 'page','sm_team','sp_event' );
	
	register_taxonomy( 'sm_seasons', $addIn, array(
	// Hierarchical taxonomy (like categories)
	'hierarchical' => true,
	// This array of options controls the labels displayed in the WordPress Admin UI
	'labels' => array(
	'name' => _x( 'Seasons', 'taxonomy general name' ),
	'singular_name' => _x( 'Season', 'taxonomy singular name' ),
	'search_items' =>  __( 'Search Seasons' ),
	'all_items' => __( 'All Seasons' ),
	'parent_item' => __( 'Parent Season' ),
	'parent_item_colon' => __( 'Parent Season:' ),
	'edit_item' => __( 'Edit Season' ),
	'update_item' => __( 'Update Season' ),
	'add_new_item' => __( 'Add New Season' ),
	'new_item_name' => __( 'New Season' ),
	'menu_name' => __( 'Season' ),
	),
	// Control the slugs used for this taxonomy
	'rewrite' => array(
	'slug' => 'seasons', // This controls the base slug that will display before each term
	'with_front' => false, // Don't display the category base before "/locations/"
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	),
	));
}
// iniate function when file accessed by admin
add_action( 'init', 'add_new_season', 0 );

