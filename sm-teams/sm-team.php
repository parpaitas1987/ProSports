<?php
// disallow file access directly in browser
if ( !defined( 'ABSPATH' ) ) {	die( "No script kiddies please!" ); }
?>
<?php
// initating function of addition new team
add_action( 'init', 'adding_new_team' );
// function for adding new team by post type
function adding_new_team() {
	register_post_type( 'sm_team',
	array(
	'labels' => array(
	'name' => 'Teams',
	'singular_name' => 'Teams',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New Team',
	'edit' => 'Edit',
	'edit_item' => 'Edit Team',
	'new_item' => 'New Team',
	'view' => 'View',
	'view_item' => 'View Team',
	'search_items' => 'Search Team',
	'not_found' => 'No Team found',
	'not_found_in_trash' => 'No Team found in Trash',
	'parent' => 'Parent Team'
			),
			'public' => true,
			'menu_position' => 4,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies' => array( 'sm_seasons' ),
			'menu_icon' => plugins_url( 'images/partner-16.png', __FILE__ ),
			'has_archive' => true
		)
	);
}
// Add post meta data with meta box
add_action( 'add_meta_boxes', 'nw_add_custom_meta_box' );
// Function for create meta box
function nw_add_custom_meta_box() {

	$screens = array( 'sm_team' ); // add items to add to multiple post types

	foreach ( $screens as $screen ) {
		add_meta_box(
		'team_players', // $id
		'Allow Team Player', // $title
		'show_custom_meta_box', // $callback
		$screen, // $page
		'normal', // $context
		'high' // $priority
		);
	}
}
// Display custom meta box
function show_custom_meta_box( $post ) {
    // Add an nonce field so we can check for it later.
    wp_nonce_field( 'player', 'player_nonce' );
    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $value = get_post_meta( $post->ID, 'team_players', true );

    if ($value!='') {
    	$value=$value;
    } else {
    	$value='12';
    }
    echo '<label for="team_players">';
    _e( 'Allow Player in Team', 'myplugin_textdomain' );
    echo '</label> ';
    echo '<input type="text" id="team_players" name="team_players" value="' . esc_attr( $value ) . '" size="10" />';
}
// Saving custom post type with button submit
function nuggetweb_save_meta_box_data( $post_id ) {
	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */
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
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

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
	if ( ! isset( $_POST['team_players'] ) ) {
		return;
	}

	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['team_players'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'team_players', $my_data );
}

add_action( 'save_post', 'nuggetweb_save_meta_box_data' );

add_filter( 'manage_edit-sm_team_columns', 'my_edit_sm_team_columns' ) ;

function my_edit_sm_team_columns( $columns ) {

	$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => __( 'Teams' ),
			'season' => __( 'Season' ),
			'allowed_player' => __( 'Allowed Players' ),
			'date' => __( 'Date' )
	);

	return $columns;
}

add_action( 'manage_sm_team_posts_custom_column', 'my_manage_sm_team_columns', 10, 2 );

function my_manage_sm_team_columns( $column, $post_id ) { 
	//echo $column;
	switch ($column) {
		
		case 'allowed_player':
			/* Get the post meta. */
			$get_player = get_post_meta( $post_id, 'team_players', true );
			echo $get_player .' Players allowed';
		break;
		case 'season':
			//echo 'Hello';
			
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

add_filter( 'manage_edit-sm_team_sortable_columns', 'my_sm_team_sortable_columns' );

function my_sm_team_sortable_columns( $columns ) {

	$columns['season'] = 'season';

	return $columns;
}