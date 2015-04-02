<?php
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
// Add metaboxes for custom post type with some additional fields
add_action( 'add_meta_boxes', 'nw_add_custom_meta_box_select_team' );
function nw_add_custom_meta_box_select_team() {

	$screens = array( 'sm_events' ); // add items to add to multiple post types

	foreach ( $screens as $screen ) {
		add_meta_box(
		'event_team', // $id
		'Select Teams', // $title
		'show_custom_meta_box_select_team', // $callback
		$screen, // $page
		'normal', // $context
		'high' // $priority
		);
	}
}
// Show custom meta boxes for the, custom post type events
function show_custom_meta_box_select_team( $post ) {

	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'event_team', 'event_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	*/
	
	$args = array(
			'offset'           => 0,
			'category'         => '',
			'category_name'    => '',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'sm_team',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => false );
	
	
	
	echo '<label for="team_players">';
	_e( 'Select Team A', 'myplugin_textdomain' );
	echo '</label> ';
	
	   $value = get_post_meta( $post->ID, 'event_team_a', true );
	
	$value_array = get_posts( $args );
	
	echo '<select name="player_team_a" id="player_team_a">';
	echo '<option value="0">Select Team A</option>';
	for ($i=0; $i<count($value_array); $i++) {
		if ($value==$value_array[$i]->ID) {
			$slected = 'selected';
		} else {
			$slected = '';
		}
		echo '<option '.$slected.' value="'.$value_array[$i]->ID.'">'.$value_array[$i]->post_title.'</option>';
	}
	
	echo '</select>';
	
	global $wpdb;

	$get_user_info = $wpdb->get_row("SELECT * from wp_users WHERE player_id = '$post->ID'", ARRAY_A);

	echo '<br><label for="team_players">';
	_e( 'Select Team B', 'myplugin_textdomain' );
	echo '</label> ';
	
		$value = get_post_meta( $post->ID, 'event_team_b', true );
		$value_array = get_posts( $args );
	
	echo '<select name="player_team_b" id="player_team_b">';
	echo '<option value="0">Select Team B</option>';
	for ($i=0; $i<count($value_array); $i++) {
		if ($value==$value_array[$i]->ID) {
			$slected = 'selected';
		} else {
			$slected = '';
		}
		echo '<option '.$slected.' value="'.$value_array[$i]->ID.'">'.$value_array[$i]->post_title.'</option>';
	}
	
	echo '</select>';
	
	global $wpdb;
	
//	echo "SELECT * wp_users WHERE player_id = '$post->ID'";
	
	$get_user_info = $wpdb->get_row("SELECT * from wp_users WHERE player_id = '$post->ID'", ARRAY_A);
		
}
// Save post meta data with following post id
function nuggetweb_save_meta_box_data_sevent( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	
	extract( $_POST );

	// Check if our nonce is set.
	if ( ! isset( $_POST['event_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['event_nonce'], 'event_team' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['event_team'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */

	// Make sure that it is set.
	if ( ! isset( $_POST['player_team_a'] ) or ! isset( $_POST['player_team_b'] ) ) {
		return;
	}

	// Sanitize user input.
	$my_data_a =  sanitize_text_field( $_POST['player_team_a'] );
	$my_data_b =  sanitize_text_field( $_POST['player_team_b'] );

	
// Update the meta field in the database.
	update_post_meta( $post_id, 'event_team_a', $my_data_a );

	update_post_meta( $post_id, 'event_team_b', $my_data_b );

}
add_action( 'save_post', 'nuggetweb_save_meta_box_data_sevent' );