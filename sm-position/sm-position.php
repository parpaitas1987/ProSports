<?php
/**
 * Plugin Name: SM Venue
 * Plugin URI: http://www.biralsabia.com/playpal
 * Description: Declares a plugin that will create a custom tax type displaying movie reviews.
 * Version: 1.0
 * Author: Adeel Mughal @ Bir Al Sabia
 * Author URI: http://www.biralsabia.net/team
 * Network: false
 * License: GPLv2 (http://www.gnu.org/licenses/gpl-2.0.html)
 */
// create custom post type for postion
function add_new_position() {
	// Add new "Locations" taxonomy to Posts
	$addIn = array( 'page','sm_player' );
	// Register taxonomy
	register_taxonomy( 'sm_position', $addIn, array(
	// Hierarchical taxonomy (like categories)
	'hierarchical' => true,
	// This array of options controls the labels displayed in the WordPress Admin UI
	'labels' => array(
	'name' => _x( 'Position', 'taxonomy general name' ),
	'singular_name' => _x( 'Position', 'taxonomy singular name' ),
	'search_items' =>  __( 'Search Position' ),
	'all_items' => __( 'All Position' ),
	'parent_item' => __( 'Parent Position' ),
	'parent_item_colon' => __( 'Parent Position:' ),
	'edit_item' => __( 'Edit Position' ),
	'update_item' => __( 'Update Position' ),
	'add_new_item' => __( 'Add New Position' ),
	'new_item_name' => __( 'New Position' ),
	'menu_name' => __( 'Position' ),
	),
	// Control the slugs used for this taxonomy
	'rewrite' => array(
	'slug' => 'position', // This controls the base slug that will display before each term
	'with_front' => false, // Don't display the category base before "/locations/"
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	),
	));
}
// Initiate New Position Function
add_action( 'init', 'add_new_position', 0 );

