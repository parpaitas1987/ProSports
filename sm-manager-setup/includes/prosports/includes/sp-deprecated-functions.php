<?php
/**
 * Deprecated functions
 *
 * Where functions come to retire.
 *
 * @author 		ProSports
 * @category 	Core
 * @package 	ProSports/Functions
 * @version     0.7.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/* Shortcodes */
add_shortcode( 'events-calendar', 'SP_Shortcodes::event_calendar' );
add_shortcode( 'events-list', 'SP_Shortcodes::event_list' );
add_shortcode( 'league-table', 'SP_Shortcodes::league_table' );
add_shortcode( 'player-list', 'SP_Shortcodes::player_list' );
add_shortcode( 'player-gallery', 'SP_Shortcodes::player_gallery' );

/* Functions */
function prosports_flush_rewrite_rules() {
	return sp_flush_rewrite_rules();
}
function prosports_nonce() {
	return sp_nonce();
}
function prosports_array_between( $array = array(), $delimiter = 0, $index = 0 ) {
	return sp_array_between( $array, $delimiter, $index );
}
function prosports_array_value( $arr = array(), $key = 0, $default = null ) {
	return sp_array_value( $arr, $key, $default );
}
function prosports_array_combine( $keys = array(), $values = array() ) {
	return sp_array_combine( $keys, $values );
}
function prosports_numbers_to_words( $str ) {
	return sp_numbers_to_words( $str );
}
function prosports_get_the_term_id( $post_id, $taxonomy, $index ) {
	return sp_get_the_term_id( $post_id, $taxonomy, $index );
}
function prosports_get_post_views( $post_id ) {
	return sp_get_post_views( $post_id );
}
function prosports_set_post_views( $post_id ) {
	return sp_set_post_views( $post_id );
}
function prosports_get_post_precision( $post_id ) {
	return sp_get_post_precision( $post_id );
}
function prosports_get_post_calculate( $post_id ) {
	return sp_get_post_calculate( $post_id );
}
function prosports_get_post_equation( $post_id ) {
	return sp_get_post_equation( $post_id );
}
function prosports_get_post_order( $post_id ) {
	return sp_get_post_order( $post_id );
}
function prosports_dropdown_taxonomies( $args = array() ) {
	return sp_dropdown_taxonomies( $args );
}
function prosports_dropdown_pages( $args = array() ) {
	return sp_dropdown_pages( $args );
}
function prosports_posts( $post_id = null, $meta = 'post' ) {
	return sp_posts( $post_id, $meta );
}
function prosports_post_checklist( $post_id = null, $meta = 'post', $display = 'block', $filter = null, $index = null ) {
	return sp_post_checklist( $post_id, $meta, $display, $filter, $index );
}
function prosports_calculate_selector( $post_id, $selected = null ) {
	return sp_calculate_selector( $post_id, $selected);
}
function prosports_get_equation_optgroup_array( $post_id, $type = null, $variations = null, $defaults = null, $totals = true ) {
	return sp_get_equation_optgroup_array( $post_id, $type, $variations, $defaults, $totals );
}
function prosports_equation_selector( $post_id, $selected = null, $groups = array() ) {
	return sp_equation_selector( $post_id, $selected, $groups );
}
function prosports_get_var_labels( $post_type ) {
	return sp_get_var_labels( $post_type );
}
function prosports_get_var_equations( $post_type ) {
	return sp_get_var_equations( $post_type );
}
function prosports_edit_calendar_table( $data = array(), $usecolumns = null ) {
	return sp_edit_calendar_table( $data, $usecolumns );
}
function prosports_edit_league_table( $columns = array(), $usecolumns = null, $data = array(), $placeholders = array() ) {
	return sp_edit_league_table( $columns, $usecolumns, $data, $placeholders );
}
function prosports_edit_player_list_table( $columns = array(), $usecolumns = null, $data = array(), $placeholders = array() ) {
	return sp_edit_player_list_table( $columns, $usecolumns, $data, $placeholders );
}
function prosports_edit_team_columns_table( $league_id, $columns = array(), $data = array(), $placeholders = array(), $merged = array(), $seasons = array(), $readonly = true ) {
	return sp_edit_team_columns_table( $league_id, $columns, $data, $placeholders, $merged, $seasons, $readonly );
}
function prosports_edit_player_performance_table( $id = null, $league_id, $columns = array(), $data = array(), $placeholders = array(), $merged = array(), $seasons_teams = array(), $readonly = true ) {
	return sp_edit_player_performance_table( $id, $league_id, $columns, $data, $placeholders, $merged, $seasons_teams, $readonly );
}
function prosports_edit_event_results_table( $columns = array(), $data = array() ) {
	return sp_edit_event_results_table( $columns, $data );
}
function prosports_event_player_status_selector( $team_id, $player_id, $value = null ) {
	return sp_event_player_status_selector( $team_id, $player_id, $value );
}
function prosports_event_player_sub_selector( $team_id, $player_id, $value, $data = array() ) {
	return sp_event_player_sub_selector( $team_id, $player_id, $value, $data );
}
function prosports_edit_event_players_table( $columns = array(), $data = array(), $team_id ) {
	return sp_edit_event_players_table( $columns, $data, $team_id );
}
function prosports_post_adder( $post_type = 'post', $label = null ) {
	return sp_post_adder( $post_type, $label );
}
function prosports_taxonomy_adder( $taxonomy = 'category', $post_type = 'post', $label = null ) {
	return sp_taxonomy_adder( $taxonomy, $post_type, $label );
}
function prosports_update_post_meta( $post_id, $meta_key, $meta_value, $default = null ) {
	return sp_update_post_meta( $post_id, $meta_key, $meta_value, $default );
}
function prosports_update_post_meta_recursive( $post_id, $meta_key, $meta_value ) {
	return sp_update_post_meta_recursive( $post_id, $meta_key, $meta_value );
}
function prosports_get_eos_safe_slug( $title, $post_id = 'var' ) {
	return sp_get_eos_safe_slug( $title, $post_id );
}
function prosports_solve( $equation, $vars, $precision = 0 ) {
	return sp_solve( $equation, $vars, $precision );
}
function prosports_get_calendar_data( $post_id = null, $admin = false ) {
	return sp_get_calendar_data( $post_id, $admin );
}
function prosports_get_team_columns_data( $post_id, $league_id, $admin = false ) {
	return sp_get_team_columns_data( $post_id, $league_id, $admin );
}
function prosports_get_league_table_data( $post_id, $breakdown = false ) {
	return sp_get_league_table_data( $post_id, $breakdown );
}
function prosports_sort_table_teams ( $a, $b ) {
	return sp_sort_table_teams( $a, $b );
}
function prosports_get_player_list_data( $post_id, $admin = false ) {
	return sp_get_player_list_data( $post_id, $admin );
}
function prosports_get_player_roster_data( $post_id, $admin = false ) {
	return sp_get_player_roster_data( $post_id, $admin );
}
function prosports_sort_list_players ( $a, $b ) {
	return sp_sort_list_players( $a, $b );
}
function prosports_get_player_metrics_data( $post_id ) {
	return sp_get_player_metrics_data( $post_id );
}
function prosports_get_next_event( $args = array() ) {
	return sp_get_next_event( $args );
}
function prosports_delete_duplicate_post( &$post ) {
	return sp_delete_duplicate_post( $post );
}
function prosports_highlight_admin_menu( $p = 'options-general.php', $s = 'prosports' ) {
	return sp_highlight_admin_menu( $p, $s );
}

if ( !function_exists( 'sp_get_team_columns_data' ) ) {
	function sp_get_team_columns_data( $post_id, $league_id, $admin = false ) {
		$team = new SP_Team( $post_id );
		return $team->data( $league_id, $admin );
	}
}

if ( !function_exists( 'sp_get_league_table_data' ) ) {
	function sp_get_league_table_data( $post_id, $admin = false ) {		
		$table = new SP_League_Table( $post_id );
		return $table->data( $admin );
	}
}

if ( !function_exists( 'sp_get_player_statistics_data' ) ) {
	function sp_get_player_statistics_data( $post_id, $league_id, $admin = false ) {
		$list = new SP_Player_List( $post_id );
		return $list->data( $league_id, $admin );
	}
}

if ( !function_exists( 'sp_get_player_list_data' ) ) {
	function sp_get_player_list_data( $post_id, $admin = false ) {
		$list = new SP_Player_List( $post_id );
		return $list->data( $admin );
	}
}
