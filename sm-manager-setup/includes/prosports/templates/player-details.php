<?php
/**
 * Player Details
 *
 * @author 		ProSports
 * @package 	ProSports/Templates
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( get_option( 'prosports_player_show_details', 'yes' ) === 'no' ) return;

if ( ! isset( $id ) )
	$id = get_the_ID();

$defaults = array(
	'show_nationality_flags' => get_option( 'prosports_player_show_flags', 'yes' ) == 'yes' ? true : false,
	'link_teams' => get_option( 'prosports_link_teams', 'no' ) == 'yes' ? true : false,
);

extract( $defaults, EXTR_SKIP );

$countries = SP()->countries->countries;

$player = new SP_Player( $id );

$nationality = $player->nationality;
$current_teams = $player->current_teams();
$past_teams = $player->past_teams();
$metrics_before = $player->metrics( true );
$metrics_after = $player->metrics( false );

$common = array();
if ( $nationality ):
	$country_name = sp_array_value( $countries, $nationality, null );
	$common[ __( 'Nationality', 'prosports' ) ] = $country_name ? ( $show_nationality_flags ? '<img src="' . plugin_dir_url( SP_PLUGIN_FILE ) . '/assets/images/flags/' . strtolower( $nationality ) . '.png" alt="' . $nationality . '"> ' : '' ) . $country_name : '&mdash;';
endif;

$position_names = array();
$positions = get_the_terms( $id, 'sp_position' );
if ( $positions ): foreach ( $positions as $position ):
	$position_names[] = $position->name;
endforeach; endif;

$common[ __( 'Position', 'prosports' ) ] = implode( ', ', $position_names );

$data = array_merge( $metrics_before, $common, $metrics_after );

if ( $current_teams ):
	$teams = array();
	foreach ( $current_teams as $team ):
		$team_name = get_the_title( $team );
		if ( !$link_teams ) $team_name = '<a href="' . get_post_permalink( $team ) . '">' . $team_name . '</a>';
		$teams[] = $team_name;
	endforeach;
	$label = _n( 'Current Team', 'Current Teams', count( $teams ), 'prosports' );
	$data[ $label ] = implode( ', ', $teams );
endif;

if ( $past_teams ):
	$teams = array();
	foreach ( $past_teams as $team ):
		$team_name = get_the_title( $team );
		if ( !$link_teams ) $team_name = '<a href="' . get_post_permalink( $team ) . '">' . $team_name . '</a>';
		$teams[] = $team_name;
	endforeach;
	$data[ __( 'Past Teams', 'prosports' ) ] = implode( ', ', $teams );
endif;

$output = '<div class="sp-template sp-template-player-details sp-template-details"><div class="sp-list-wrapper"><dl class="sp-player-details">';

foreach( $data as $label => $value ):

	$output .= '<dt>' . $label . '</dt><dd>' . $value . '</dd>';

endforeach;

$output .= '</dl></div></div>';

echo $output;
