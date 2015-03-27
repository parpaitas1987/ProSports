<?php
/**
 * Plugin Name: SM Players
 * Plugin URI: http://www.biralsabia.com/playpal
 * Description: Declares a plugin that will create a custom post type displaying movie reviews.
 * Version: 1.0
 * Author: Adeel Mughal @ Bir Al Sabia
 * Author URI: http://www.biralsabia.net/team
 * Network: false
 * License: GPLv2 (http://www.gnu.org/licenses/gpl-2.0.html)
 */
// check if file accessable directly
if ( !defined('ABSPATH') ) {
	die( "No script kiddies please!" );
}
?>
<?php 
// initiate function after accessing page
add_action( 'init', 'adding_new_player' );
// Function for adding new player, by post type
function adding_new_player() {
	register_post_type( 'sm_player',
	array(
	'labels' 				=> array(
	'name' 					=> 'Player',
	'singular_name' 		=> 'Player',
	'add_new' 				=> 'Add New',
	'add_new_item' 			=> 'Add New Player',
	'edit' 					=> 'Edit',
	'edit_item' 			=> 'Edit Player',
	'new_item' 				=> 'New Player',
	'view' 					=> 'View',
	'view_item' 			=> 'View Player',
	'search_items' 			=> 'Search Player',
	'not_found' 			=> 'No Player found',
	'not_found_in_trash' 	=> 'No Player found in Trash',
	'parent' 				=> 'Parent Player'),
			'public' 		=> true,
			'menu_position' => 7,
			'supports' 		=> array( 'title', 'editor', 'thumbnail'),
			'taxonomies' 	=> array( 'sm_seasons' ),
			'menu_icon' 	=> plugins_url( 'images/user-group-16.png', __FILE__ ),
			'has_archive' 	=> true
		)
	);
}
// Add metaboxes for custom post type with some additional fields
add_action( 'add_meta_boxes', 'nw_add_custom_meta_box_player' );
function nw_add_custom_meta_box_player() {
	$screens = array( 'sm_player' ); // add items to add to multiple post types
	foreach ( $screens as $screen ) {
		add_meta_box(
		'player_team', // $id
		'Player Team / Info', // $title
		'show_custom_meta_box_player', // $callback
		$screen, // $page
		'normal', // $context
		'high' // $priority
		);
	}
}
// Display metabox for custom post type under texteditor
function show_custom_meta_box_player( $post ) {
	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'player', 'player_nonce' );
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
	_e( 'Select Team', 'myplugin_textdomain' );
	echo '</label> ';
	$value = get_post_meta( $post->ID, 'player_team', true );
	$value_array = get_posts( $args );
	echo '<select name="player_team" id="player_team">';
	echo '<option value="0">Select Team</option>';
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
	?><hr />
	<label for="display_name">Display name</label>
	<input type="text" style="width:250px;" name="display_name" value="<?php echo $get_user_info['display_name']; ?>" id="display_name" /><br />
	<label for="user_email">Player email</label>
	<input type="text" style="width:250px;" name="user_email" value="<?php echo $get_user_info['user_email']; ?>" id="user_login" /><br />
	<label for="user_login">Username</label>
	<input type="text" style="width:250px;" name="user_login" value="<?php echo $get_user_info['user_login']; ?>" id="user_login" /><br />
	<label for="user_pass">Password</label>
	<input type="password" style="width:250px;" name="user_pass" id="user_pass" />
	<input type="hidden" name="old_pass" value="<?php echo $get_user_info['user_pass']; ?>" />
	<?php 
}
// Save custom post type and save metadata in post_metadata
function nuggetweb_save_meta_box_data_player( $post_id ) {
	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
	extract($_POST);
	// Check if our nonce is set.
	if ( ! isset( $_POST['player_nonce'] ) ) {
		return;
	}
	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['player_nonce'], 'player' ) ) {
		return;
	}
	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Check the user's permissions.
	if ( isset( $_POST['player_team'] ) && 'page' == $_POST['post_type'] ) {
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
	if ( ! isset( $_POST['player_team'] ) ) {
		return;
	}
	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['player_team'] );
	//2015-01-19 06:22:46
	$reg_date = date('Y-m-d h:i:s');
	// Insert User info into user table
	global $wpdb;
	$get_user_count 		= $wpdb->get_var("SELECT COUNT(*) from wp_users WHERE player_id = '$post->ID'");
	if ($get_user_count<1) {
	$add_user_info 			= $wpdb->query("INSERT INTO wp_users SET 
			player_id 		= '$post_id',
			user_login 		= '$user_login',
			user_pass 		= '".md5($user_pass)."',
			user_email 		= '$user_email',
			display_name 	= '$display_name',
			user_registered = '$reg_date'
			");
	$lastid = $wpdb->insert_id;
	add_user_meta($lastid,'show_admin_bar_front','false');
	$show_ser = array('sm_player'=>'1');
	$show_ser = maybe_serialize($show_ser);
	add_user_meta($lastid,'wp_capabilities',$show_ser);
	} else {	
		if ($user_pass!='') {
			$update_pass = md5($user_pass);
		} else {
			$update_pass = $old_pass;
		}
		$add_user_info = $wpdb->query("UPDATE wp_users SET
				user_login = '$user_login',
				user_pass = '$update_pass',
				user_email = '$user_email',
				display_name = '$display_name',
				user_registered = '$reg_date' WHERE player_id = '$post_id'");
	}
	// Update the meta field in the database.
	update_post_meta( $post_id, 'player_team', $my_data );
}
add_action( 'save_post', 'nuggetweb_save_meta_box_data_player' );
add_filter( 'manage_edit-sm_player_columns', 'my_edit_sm_player_columns_player' ) ;
function my_edit_sm_player_columns_player( $columns ) {
	$columns 			= array(
			'cb' 		=> '<input type="checkbox" />',
			'title' 	=> __( 'Players' ),
			'season' 	=> __( 'Season' ),
			'team' 		=> __( 'Team' ),
			'date' 		=> __( 'Date' )
	);
	return $columns;
}
add_action( 'manage_sm_player_posts_custom_column', 'my_manage_sm_player_columns', 10, 2 );
function my_manage_sm_player_columns( $column, $post_id ) {
	//echo $column;
	switch ( $column ) {
		case 'team':
			$get_player = get_post_meta( $post_id, 'player_team', true );
			echo get_the_title($get_player);
			break;
		case 'season':	
			$get_season = get_the_terms($post_id, 'sm_seasons');
			if ($get_season!='') {
				foreach ($get_season as $val) {
					echo $val->name .'<br>';
				}
			} else {
				echo 'Unknown';
			}
			break;
		default :
			break;
	}
}
add_filter( 'manage_edit-sm_player_sortable_columns', 'my_sm_player_sortable_columns' );
function my_sm_player_sortable_columns( $columns ) {
	$columns['season'] = 'season';
	$columns['team'] = 'team';
	return $columns;
}