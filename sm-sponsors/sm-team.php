<?php
if ( !defined( 'ABSPATH' ) ) {
	die( "No script kiddies please!" );
}
?>
<?php 
// Initiate function for custom post type
add_action( 'init', 'adding_new_sponsors' );
// Custom post type sponsors
function adding_new_sponsors() {
	register_post_type( 'sm_sponsors',
	array(
	'labels' => array(
	'name' => 'Sponsors',
	'singular_name' => 'Sponsors',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New',
	'edit' => 'Edit',
	'edit_item' => 'Edit Sponsors',
	'new_item' => 'New Sponsors',
	'view' => 'View',
	'view_item' => 'View Sponsors',
	'search_items' => 'Search Sponsors',
	'not_found' => 'No Sponsors found',
	'not_found_in_trash' => 'No Sponsors found in Trash',
	'parent' => 'Parent Sponsors'
			),
			'public' => true,
			'menu_position' => 7,
			//'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			//'taxonomies' => array( 'sm_seasons' ),
			'menu_icon' => plugins_url( 'images/advertising-16.png', __FILE__ ),
			'has_archive' => true
		)
	);
}

