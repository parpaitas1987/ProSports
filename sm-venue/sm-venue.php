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
// add new venue function
function add_new_venue() {
	// Add new "Locations" taxonomy to Posts
	$addIn = array( 'page','sm_team','sp_event' );
	register_taxonomy( 'sm_venue', $addIn, array(
	// Hierarchical taxonomy (like categories)
	'hierarchical' => true,
	// This array of options controls the labels displayed in the WordPress Admin UI
	'labels' => array(
	'name' => _x( 'Venue', 'taxonomy general name' ),
	'singular_name' => _x( 'Venue', 'taxonomy singular name' ),
	'search_items' =>  __( 'Search Venue' ),
	'all_items' => __( 'All Venue' ),
	'parent_item' => __( 'Parent Venue' ),
	'parent_item_colon' => __( 'Parent Venue:' ),
	'edit_item' => __( 'Edit Venue' ),
	'update_item' => __( 'Update Venue' ),
	'add_new_item' => __( 'Add New Venue' ),
	'new_item_name' => __( 'New Venue' ),
	'menu_name' => __( 'Venue' ),
	),
	// Control the slugs used for this taxonomy
	'rewrite' => array(
	'slug' => 'venue', // This controls the base slug that will display before each term
	'with_front' => false, // Don't display the category base before "/locations/"
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	),
	));
}
// Initiate custom post type for adding new venue
add_action( 'init', 'add_new_venue', 0 );