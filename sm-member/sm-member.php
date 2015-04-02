<?php
// create custom post type function
function add_new_memeber_role() {
	// Add new "Locations" taxonomy to Posts
	
	$addIn = array( 'page','sm_team' );
	
	register_taxonomy( 'sm_memeber_role', $addIn, array(
	// Hierarchical taxonomy (like categories)
	'hierarchical' => true,
	// This array of options controls the labels displayed in the WordPress Admin UI
	'labels' => array(
	'name' => _x( 'Memeber Role', 'taxonomy general name' ),
	'singular_name' => _x( 'Memeber Role', 'taxonomy singular name' ),
	'search_items' =>  __( 'Search Memeber Role' ),
	'all_items' => __( 'All Memeber Role' ),
	'parent_item' => __( 'Parent Memeber Role' ),
	'parent_item_colon' => __( 'Parent Memeber Role:' ),
	'edit_item' => __( 'Edit Memeber Role' ),
	'update_item' => __( 'Update Memeber Role' ),
	'add_new_item' => __( 'Add New Memeber Role' ),
	'new_item_name' => __( 'New Memeber Role' ),
	'menu_name' => __( 'Memeber Role' ),
	),
	// Control the slugs used for this taxonomy
	'rewrite' => array(
	'slug' => 'staff', // This controls the base slug that will display before each term
	'with_front' => false, // Don't display the category base before "/locations/"
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	),
	));
}
// initiate function when file accessed
add_action( 'init', 'add_new_memeber_role', 0 );

