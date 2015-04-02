<?php
// file not accessable directly in browser
if ( !defined( 'ABSPATH' ) ) {	die( "No script kiddies please!" ); }
?>
<?php 
// initiate function for adding custom post type tournament
add_action( 'init', 'adding_new_tournament' );
// Function for custom post type tournament
function adding_new_tournament() {
	register_post_type( 'sm_tournament',
	array(
	'labels' => array(
	'name' => 'Tournament',
	'singular_name' => 'Tournament',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New Tournament',
	'edit' => 'Edit',
	'edit_item' => 'Edit Tournament',
	'new_item' => 'New Tournament',
	'view' => 'View',
	'view_item' => 'View Tournament',
	'search_items' => 'Search Tournament',
	'not_found' => 'No Tournament found',
	'not_found_in_trash' => 'No Tournament found in Trash',
	'parent' => 'Parent Tournament'
			),
			'public' => true,
			'menu_position' => 8,
			'supports' => array( 'title', 'editor', 'thumbnail'),
			'taxonomies' => array( 'sm_seasons', 'sm_venue' ),
			'menu_icon' => plugins_url( 'images/basketball-16.png', __FILE__ ),
			'has_archive' => true
		)
	);
}