<?php
/**
 * Plugin Name: SM Leagues Menu
 * Plugin URI: http://www.biralsabia.com/playpal
 * Description: Declares a plugin that will create a custom tax type displaying movie reviews.
 * Version: 1.0
 * Author: Adeel Mughal @ Bir Al Sabia
 * Author URI: http://www.biralsabia.net/team
 * Network: false
 * License: GPLv2 (http://www.gnu.org/licenses/gpl-2.0.html)
 */
if ( !defined( 'ABSPATH' ) ) {
	die( "No script kiddies please!" );
}
?>
<?php
/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
// Display post type for the league tournament taxanomies
function sm_league_tournament_tax() {

	$labels = array(
		'name'					=> _x( 'Competition', 'Taxonomy plural name', 'text-domain' ),
		'singular_name'			=> _x( 'Competition', 'Taxonomy singular name', 'text-domain' ),
		'search_items'			=> __( 'Search Competition', 'text-domain' ),
		'popular_items'			=> __( 'Popular Competition', 'text-domain' ),
		'all_items'				=> __( 'All Competition', 'text-domain' ),
		'parent_item'			=> __( 'Parent Competition', 'text-domain' ),
		'parent_item_colon'		=> __( 'Parent Singular', 'text-domain' ),
		'edit_item'				=> __( 'Edit Singular', 'text-domain' ),
		'update_item'			=> __( 'Update Competition', 'text-domain' ),
		'add_new_item'			=> __( 'Add New Competition', 'text-domain' ),
		'new_item_name'			=> __( 'New Competition Name', 'text-domain' ),
		'add_or_remove_items'	=> __( 'Add or remove Competition', 'text-domain' ),
		'choose_from_most_used'	=> __( 'Choose from most used text-domain', 'text-domain' ),
		'menu_name'				=> __( 'Competition', 'text-domain' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'sm_tournament_leagues', array( 'sm_league' ), $args );
}
// Initiate function for calling custom post type
add_action( 'init', 'sm_league_tournament_tax' );
?>