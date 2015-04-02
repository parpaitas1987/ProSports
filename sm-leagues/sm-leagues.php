<?php
// check file not accessable directly
if ( !defined( 'ABSPATH' ) ) {
	die( "No script kiddies please!" );
}
?>
<?php 
// create custom post type
add_action( 'init', 'adding_new_league' );
function adding_new_league() {
	register_post_type( 'sm_league',
	array(
	'labels' => array(
	'name' => 'Leagues',
	'singular_name' => 'Leagues',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New Leagues',
	'edit' => 'Edit',
	'edit_item' => 'Edit Leagues',
	'new_item' => 'New Leagues',
	'view' => 'View',
	'view_item' => 'View Leagues',
	'search_items' => 'Search Leagues',
	'not_found' => 'No Leagues found',
	'not_found_in_trash' => 'No Leagues found in Trash',
	'parent' => 'Parent Leagues'
			),
			'public' => true,
			'menu_position' => 11,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies' => array( 'sm_seasons','sm_venue' ),
			'menu_icon' => plugins_url( 'images/Communities__Networks-16.png', __FILE__ ),
			'has_archive' => true
		)
	);
}
