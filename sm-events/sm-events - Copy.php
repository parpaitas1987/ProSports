<?php
/**
 * Plugin Name: SM Teams
 * Plugin URI: http://www.biralsabia.com/playpal
 * Description: Declares a plugin that will create a custom post type displaying movie reviews.
 * Version: 1.0
 * Author: Adeel Mughal @ Bir Al Sabia
 * Author URI: http://www.biralsabia.net/team
 * Network: false
 * License: GPLv2 (http://www.gnu.org/licenses/gpl-2.0.html)
 */
// check file not accessable directly
if ( !defined( 'ABSPATH' ) ) {
	die( "No script kiddies please!" );
}
?>
<?php 
// add menu and create custom post type
add_action( 'init', 'adding_new_events' );
function adding_new_events() {
	register_post_type( 'sm_events',
	array(
	'labels' => array(
	'name' => 'Events',
	'singular_name' => 'Events',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New Event',
	'edit' => 'Edit',
	'edit_item' => 'Edit Event',
	'new_item' => 'New Event',
	'view' => 'View',
	'view_item' => 'View Event',
	'search_items' => 'Search Event',
	'not_found' => 'No Event found',
	'not_found_in_trash' => 'No Event found in Trash',
	'parent' => 'Parent Event'
			),
			'public' => true,
			'menu_position' => 7,
			//'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies' => array( 'sm_seasons','sm_venue' ),
			'menu_icon' => plugins_url( 'images/Clock-16.png', __FILE__ ),
			'has_archive' => true
		)
	);
}
// Add custom port type taxanomy
add_filter( 'manage_edit-sm_events_columns', 'my_edit_sm_events_columns_events' ) ;

function my_edit_sm_events_columns_events( $columns ) {

	$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => __( 'Events' ),
			//'season' => __( 'Season' ),
			//'team' => __( 'Team' ),
			'date' => __( 'Date' )
	);

	return $columns;
}


