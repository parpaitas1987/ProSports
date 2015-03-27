<?php
/**
 * ProSports Template
 *
 * Functions for the templating system.
 *
 * @author 		ProSports
 * @category 	Core
 * @package 	ProSports/Functions
 * @version     1.5
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_filter( 'body_class', 'sp_body_class' );

/** 
 * WP Header
 *
 * @see  sp_generator_tag()
 */
add_action( 'get_the_generator_html', 'sp_generator_tag', 10, 2 );
add_action( 'get_the_generator_xhtml', 'sp_generator_tag', 10, 2 );

/**
 * Single Event Content
 *
 * @see prosports_output_event_video()
 * @see prosports_output_event_results()
 * @see prosports_output_event_details()
 * @see prosports_output_event_venue()
 * @see prosports_output_event_performance()
 */
add_action( 'prosports_single_event_content', 'prosports_output_event_logos', 0 );
add_action( 'prosports_single_event_content', 'prosports_output_event_video', 10 );
add_action( 'prosports_single_event_content', 'prosports_output_event_results', 20 );
add_action( 'prosports_single_event_content', 'prosports_output_event_details', 30 );
add_action( 'prosports_single_event_content', 'prosports_output_event_venue', 40 );
add_action( 'prosports_single_event_content', 'prosports_output_event_performance', 50 );

/**
 * Single Calendar Content
 *
 * @see prosports_output_calendar()
 */
add_action( 'prosports_single_calendar_content', 'prosports_output_calendar', 10 );

/**
 * Single Team Content
 *
 * @see prosports_output_team_logo()
 * @see prosports_output_team_details()
 * @see prosports_output_team_lists()
 * @see prosports_output_team_tables()
 */
add_action( 'prosports_single_team_content', 'prosports_output_team_logo', 0 );
add_action( 'prosports_single_team_content', 'prosports_output_team_details', 10 );
add_action( 'prosports_single_team_content', 'prosports_output_team_lists', 20 );
add_action( 'prosports_single_team_content', 'prosports_output_team_tables', 30 );

/**
 * After Single Team
 * @see prosports_output_team_link()
 */
add_action( 'prosports_after_single_team', 'prosports_output_team_link', 10 );

/**
 * Single Table Content
 *
 * @see prosports_output_league_table()
 */
add_action( 'prosports_single_table_content', 'prosports_output_league_table', 10 );

/**
 * Single Player Content
 *
 * @see prosports_output_player_photo()
 * @see prosports_output_player_details()
 * @see prosports_output_player_statistics()
 */
add_action( 'prosports_single_player_content', 'prosports_output_player_photo', 0 );
add_action( 'prosports_single_player_content', 'prosports_output_player_details', 10 );
add_action( 'prosports_single_player_content', 'prosports_output_player_statistics', 20 );

/**
 * Single List Content
 *
 * @see prosports_output_player_list()
 */
add_action( 'prosports_single_list_content', 'prosports_output_player_list', 10 );

/**
 * Single Staff Content
 *
 * @see prosports_output_staff_photo()
 * @see prosports_output_staff_details()
 */
add_action( 'prosports_single_staff_content', 'prosports_output_staff_photo', 0 );
add_action( 'prosports_single_staff_content', 'prosports_output_staff_details', 10 );

/**
 * Venue Archive Content
 */
add_action( 'loop_start', 'prosports_output_venue_map' );

/**
 * Adjacent Post Links
 */
add_filter( 'previous_post_link', 'prosports_hide_adjacent_post_links', 10, 4 );
add_filter( 'next_post_link', 'prosports_hide_adjacent_post_links', 10, 4 );

function prosports_the_title( $title, $id = null ) {
	if ( ! $id ) return $title;

	if ( ! is_admin() && in_the_loop() && $id == get_the_ID() ):
		if ( is_singular( 'sp_player' ) ):
			$number = get_post_meta( $id, 'sp_number', true );
			if ( $number != null ):
				$title = '<strong class="sp-player-number">' . $number . '</strong> ' . $title;
			endif;
		elseif ( is_singular( 'sp_staff' ) ):
			$staff = new SP_Staff( $id );
			$role = $staff->role();
			if ( $role ):
				$title = '<strong class="sp-staff-role">' . $role->name . '</strong> ' . $title;
			endif;
		endif;
	endif;

	return $title;
}
add_filter( 'the_title', 'prosports_the_title', 10, 2 );

function prosports_gettext( $translated_text, $untranslated_text, $domain = null ) {
	global $typenow;

	if ( is_admin() ):
		if ( is_sp_config_type( $typenow ) ):
			switch ( $untranslated_text ):
			case 'Excerpt':
				$translated_text = __( 'Description', 'prosports' );
				break;
			case 'Excerpts are optional hand-crafted summaries of your content that can be used in your theme. <a href="http://codex.wordpress.org/Excerpt" target="_blank">Learn more about manual excerpts.</a>':
				$translated_text = __( 'The description is not prominent by default; however, some themes may show it.', 'prosports' );
				break;
			case 'Slug':
				$translated_text = ( in_array( $typenow, array( 'sp_column', 'sp_statistic' ) ) ) ? __( 'Key', 'prosports' ) : __( 'Variable', 'prosports' );
				break;
			case 'Featured Image':
				$translated_text = __( 'Icon', 'prosports' );
				break;
			case 'Set Featured Image':
				$translated_text = __( 'Select Icon', 'prosports' );
				break;
			case 'Set featured image':
				$translated_text = __( 'Add icon', 'prosports' );
				break;
			case 'Remove featured image':
				$translated_text = __( 'Remove icon', 'prosports' );
				break;
			endswitch;
		endif;

		if ( is_sp_post_type( $typenow ) ):
			switch ( $untranslated_text ):
			case 'Author':
				$translated_text = __( 'User', 'prosports' );
				break;
			endswitch;
		endif;

		if ( in_array( $typenow, array( 'sp_player', 'sp_staff' ) ) ):
			switch ( $untranslated_text ):
			case 'Featured Image':
				$translated_text = __( 'Photo', 'prosports' );
				break;
			case 'Set Featured Image':
				$translated_text = __( 'Select Photo', 'prosports' );
				break;
			case 'Set featured image':
				$translated_text = __( 'Add photo', 'prosports' );
				break;
			case 'Remove featured image':
				$translated_text = __( 'Remove photo', 'prosports' );
				break;
			endswitch;
		endif;

		if ( in_array( $typenow, array( 'sp_team' ) ) ):
			switch ( $untranslated_text ):
			case 'Featured Image':
				$translated_text = __( 'Logo', 'prosports' );
				break;
			case 'Set Featured Image':
				$translated_text = __( 'Select Logo', 'prosports' );
				break;
			case 'Set featured image':
				$translated_text = __( 'Add logo', 'prosports' );
				break;
			case 'Remove featured image':
				$translated_text = __( 'Remove logo', 'prosports' );
				break;
			endswitch;
		endif;

		if ( in_array( $typenow, array( 'sp_event' ) ) ):
			switch ( $untranslated_text ):
			case 'Publish <b>immediately</b>':
				$translated_text = __( 'Date/Time:', 'prosports' ) . ' <b>' . __( 'Now', 'prosports' ) . '</b>';
				break;
			endswitch;
		endif;
	else:
		if ( $domain == 'prosports' ):
			if ( ! empty( SP()->text[ $translated_text ] ) ):
				$translated_text = SP()->text[ $translated_text ];
			endif;
    	elseif ( ! current_theme_supports( 'prosports' ) && $untranslated_text == 'Archives' && is_tax( 'sp_venue' ) ):
    		$slug = get_query_var( 'sp_venue' );
		    if ( $slug ):
			    $venue = get_term_by( 'slug', $slug, 'sp_venue' );
				$translated_text = $venue->name;
			endif;
		endif;
	endif;
	
	return $translated_text;
}
add_filter( 'gettext', 'prosports_gettext', 20, 3 );

function prosports_team_permalink( $permalink, $post ) {
    if ( ! is_admin() && 'sp_team' == get_post_type( $post ) ):
    	if ( empty( $post->post_content ) ):
    		$url = get_post_meta( $post->ID, 'sp_url', true );
    		if ( ! empty( $url ) ):
    			return $url;
    		endif;
    	endif;
    endif;
    return $permalink;
}
add_filter( 'post_type_link', 'prosports_team_permalink', 10, 2 );

function prosports_abbreviate_team( $title, $id = null ) {
    if ( ! is_admin() && 'sp_team' == get_post_type( $id ) && get_option( 'prosports_abbreviate_teams', 'yes' ) == 'yes' ):
		if ( in_the_loop() && get_the_ID() == $id ) return $title;
    	$abbreviation = get_post_meta( $id, 'sp_abbreviation', true );
    	if ( ! empty( $abbreviation ) ):
    		return $abbreviation;
    	endif;
    endif;
    return $title;
}
add_filter( 'the_title', 'prosports_abbreviate_team', 10, 2 );

function prosports_no_terms_links( $term_list, $taxonomy ) {

    if ( in_array( $taxonomy, array( 'sp_league', 'sp_season' ) ) )
        return wp_filter_nohtml_kses( $term_list );

    return $term_list;
}
add_filter( 'the_terms', 'prosports_no_terms_links', 10, 2 );

function prosports_pre_get_posts( $query ) {
	$post_type = sp_array_value( $query->query, 'post_type', null );

	if ( is_sp_post_type( $post_type ) ):
		$query->set( 'suppress_filters', 0 );
	endif;

	if ( is_admin() ):
		if ( isset( $query->query[ 'orderby' ] ) || isset( $query->query[ 'order' ] ) ):
			return $query;
		endif;

		if ( is_sp_config_type( $post_type ) ):
			$query->set( 'orderby', 'menu_order' );
			$query->set( 'order', 'ASC' );
		endif;
	else:
		if ( isset( $query->query[ 'sp_venue' ] ) ):
        	$GLOBALS[ 'wp_post_statuses' ][ 'future' ]->public = true;
		endif;
	endif;

	return $query;
}
add_filter('pre_get_posts', 'prosports_pre_get_posts');

function prosports_show_future_posts( $where, $that ) {
    global $wpdb;
    if( 'sp_event' == $that->query_vars['post_type'] && is_archive() )
        $where = str_replace( "{$wpdb->posts}.post_status = 'publish'", "{$wpdb->posts}.post_status = 'publish' OR $wpdb->posts.post_status = 'future'", $where );
    return $where;
}
add_filter( 'posts_where', 'prosports_show_future_posts', 2, 10 );

function prosports_sanitize_title( $title ) {

	if ( isset( $_POST ) && array_key_exists( 'taxonomy', $_POST ) ):

		return $title;
	
	elseif ( isset( $_POST ) && array_key_exists( 'post_type', $_POST ) && is_sp_config_type( $_POST['post_type'] ) ):

		$key = isset( $_POST['sp_key'] ) ? $_POST['sp_key'] : null;

		if ( ! $key ) $key = isset( $_POST['sp_default_key'] ) ? $_POST['sp_default_key'] : null;

		if ( ! $key ) $key = $_POST['post_title'];

		$id = sp_array_value( $_POST, 'post_ID', 'var' );

		$title = sp_get_eos_safe_slug( $key, $id );

	elseif ( isset( $_POST ) && array_key_exists( 'post_type', $_POST ) && $_POST['post_type'] == 'sp_event' ):

		// Auto slug generation
		if ( $_POST['post_title'] == '' && ( $_POST['post_name'] == '' || is_int( $_POST['post_name'] ) ) ):

			$title = '';

		endif;

	endif;

	return $title;
}
add_filter( 'sanitize_title', 'prosports_sanitize_title' );

function prosports_widget_text( $content ) {
	if ( ! preg_match( '/\[[\r\n\t ]*(countdown|events?(_|-)(results|details|performance|calendar|list|blocks)|team(_|-)columns|league(_|-)table|player(_|-)(metrics|performance|list|gallery))?[\r\n\t ].*?\]/', $content ) )
		return $content;

	$content = do_shortcode( $content );

	return $content;
}
add_filter( 'widget_text', 'prosports_widget_text', 9 );

function prosports_post_updated_messages( $messages ) {

	global $typenow, $post;

	if ( in_array( $typenow, array( 'sp_result', 'sp_outcome', 'sp_column', 'sp_metric', 'sp_performance' ) ) ):
		$obj = get_post_type_object( $typenow );

		for ( $i = 0; $i <= 10; $i++ ):
			$messages['post'][ $i ] = __( 'Settings saved.', 'prosports' ) .
				' <a href="' . esc_url( admin_url( 'edit.php?post_type=' . $typenow ) ) . '">' .
				__( 'View All', 'prosports' ) . '</a>';
		endfor;

	elseif ( in_array( $typenow, array( 'sp_event', 'sp_team', 'sp_table', 'sp_player', 'sp_list', 'sp_staff' ) ) ):
		$obj = get_post_type_object( $typenow );

		$messages['post'][1] = __( 'Changes saved.', 'prosports' ) .
			' <a href="' . esc_url( get_permalink($post->ID) ) . '">' . $obj->labels->view_item . '</a>';

		$messages['post'][4] = __( 'Changes saved.', 'prosports' );

		$messages['post'][6] = __( 'Success!', 'prosports' ) .
			' <a href="' . esc_url( get_permalink($post->ID) ) . '">' . $obj->labels->view_item . '</a>';

		$messages['post'][7] = __( 'Changes saved.', 'prosports' );

		$messages['post'][8] = __( 'Success!', 'prosports' ) .
			' <a target="_blank" href="' . esc_url( add_query_arg( 'preview', 'true', get_permalink($post->ID) ) ) . '">' .
			sprintf( __( 'Preview %s', 'prosports' ), $obj->labels->singular_name ) . '</a>';

		$messages['post'][9] = sprintf(
			__( 'Scheduled for: <b>%1$s</b>.', 'prosports' ),
			date_i18n( __( 'M j, Y @ G:i', 'prosports' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post->ID) ) ) .
			' <a target="_blank" href="' . esc_url( get_permalink($post->ID) ) . '">' .
			sprintf( __( 'Preview %s', 'prosports' ), $obj->labels->singular_name ) . '</a>';

		$messages['post'][10] = __( 'Success!', 'prosports' ) .
			' <a target="_blank" href="' . esc_url( add_query_arg( 'preview', 'true', get_permalink($post->ID) ) ) . '">' .
			sprintf( __( 'Preview %s', 'prosports' ), $obj->labels->singular_name ) . '</a>';

	endif;

	return $messages;
}

function prosports_hide_adjacent_post_links( $output = null, $format = null, $link = null, $post = null ) {
	if ( is_object( $post ) && property_exists( $post, 'post_type' ) && in_array( $post->post_type, sp_post_types() ) )
		return false;
	return $output;
}

add_filter('post_updated_messages', 'prosports_post_updated_messages');

