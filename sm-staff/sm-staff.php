<?php
/**
 * Plugin Name: SM Staff
 * Plugin URI: http://www.biralsabia.com/playpal
 * Description: Declares a plugin that will create a custom tax type displaying movie reviews.
 * Version: 1.0
 * Author: Adeel Mughal @ Bir Al Sabia
 * Author URI: http://www.biralsabia.net/team
 * Network: false
 * License: GPLv2 (http://www.gnu.org/licenses/gpl-2.0.html)
 */
// add new staff function
function add_new_staff() {
	// Add new "Locations" taxonomy to Posts
	
	$addIn = array( 'page','sm_team' );
	
	register_taxonomy( 'sm_staff', $addIn, array(
	// Hierarchical taxonomy (like categories)
	'hierarchical' => true,
	// This array of options controls the labels displayed in the WordPress Admin UI
	'labels' => array(
	'name' => _x( 'Staff', 'taxonomy general name' ),
	'singular_name' => _x( 'Staff', 'taxonomy singular name' ),
	'search_items' =>  __( 'Search Staff' ),
	'all_items' => __( 'All Staff' ),
	'parent_item' => __( 'Parent Staff' ),
	'parent_item_colon' => __( 'Parent Staff' ),
	'edit_item' => __( 'Edit Staff' ),
	'update_item' => __( 'Update Staff' ),
	'add_new_item' => __( 'Add New Staff' ),
	'new_item_name' => __( 'New Staff' ),
	'menu_name' => __( 'Staff' ),
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
// initiate function when file accessed in browser by admin
add_action( 'init', 'add_new_staff', 0 );

