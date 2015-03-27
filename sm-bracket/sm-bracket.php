<?php
/**
 * Plugin Name: SM Tournament Bracket
 * Plugin URI: http://www.biralsabia.com/playpal
 * Description: Declares a plugin that will create a custom post type displaying movie reviews.
 * Version: 1.0
 * Author: Adeel Mughal @ Bir Al Sabia
 * Author URI: http://www.biralsabia.net/team
 * Network: false
 * License: GPLv2 (http://www.gnu.org/licenses/gpl-2.0.html)
 */
// check if file access direct
if (!defined('ABSPATH')) {
	die("No script kiddies please!");
}
?>
<?php
// Add menu in admin left column
add_action('admin_menu', 'add_bracket_menu');
function add_bracket_menu() {
	$menu_icon = SPORTSMANAGER__PLUGIN_URL.'sm-bracket/images/explore_audience-16.png';
	add_menu_page ( 'Playoff Bracket', 'Playoff Bracket', 'administrator', __FILE__, 'elemination_bracket',$menu_icon );
}

// Display section
function elemination_bracket() {
	?>
<div class="wrap">
	<h2>Playoff Brackets</h2>
<div class="bracket_inner">

<?php

$rounds = log( count( $competitors ), 2 ) + 1;

// round one
for( $i = 0; $i < log( count( $competitors ), 2 ); $i++ )
{
	$seeded = array( );
	foreach( $competitors as $competitor )
	{
		$splice = pow( 2, $i );

		$seeded = array_merge( $seeded, array_splice( $competitors, 0, $splice ) );
		$seeded = array_merge( $seeded, array_splice( $competitors, -$splice ) );
	}
	$competitors = $seeded;
}

$events = array_chunk( $seeded, 2 );

if( $rounds > 2 )
{
	$round_index = count( $events );

	// second round
	for( $i = 0; $i < count( $competitors ) / 2; $i++ )
	{
		array_push( $events, array(
		array( 'from_event_index' => $i, 'from_event_rank' => 1 ), // rank 1 = winner
		array( 'from_event_index' => ++$i, 'from_event_rank' => 1 )
		) );
	}

	$round_matchups = array( );
	for( $i = 0; $i < count( $competitors ) / 2; $i++ )
	{
		array_push( $round_matchups, array(
		array( 'from_event_index' => $i, 'from_event_rank' => 2 ), // rank 2 = loser
		array( 'from_event_index' => ++$i, 'from_event_rank' => 2 )
		) );
	}
	$events = array_merge( $events, $round_matchups );

	for( $i = 0; $i < count( $round_matchups ); $i++ )
	{
		array_push( $events, array(
		array( 'from_event_index' => $i + count( $competitors ) / 2, 'from_event_rank' => 2 ),
		array( 'from_event_index' => $i + count( $competitors ) / 2 + count( $competitors ) / 2 / 2, 'from_event_rank' => 1 )
		) );
	}
}

if( $rounds > 3 )
{
	// subsequent rounds
	for( $i = 0; $i < $rounds - 3; $i++ )
	{
		$round_events = pow( 2, $rounds - 3 - $i );
		$total_events = count( $events );

		for( $j = 0; $j < $round_events; $j++ )
		{
			array_push( $events, array(
			array( 'from_event_index' => $j + $round_index, 'from_event_rank' => 1 ),
			array( 'from_event_index' => ++$j + $round_index, 'from_event_rank' => 1 )
			) );
		}

		for( $j = 0; $j < $round_events; $j++ )
		{
			array_push( $events, array(
			array( 'from_event_index' => $j + $round_index + $round_events * 2, 'from_event_rank' => 1 ),
			array( 'from_event_index' => ++$j + $round_index + $round_events * 2, 'from_event_rank' => 1 )
			) );
		}

		for( $j = 0; $j < $round_events / 2; $j++ )
		{
			array_push( $events, array(
			array( 'from_event_index' => $j + $total_events, 'from_event_rank' => 2 ),
			array( 'from_event_index' => $j + $total_events + $round_events / 2, 'from_event_rank' => 1 )
			) );
		}

		$round_index = $total_events;
	}

}

if( $rounds > 1 )
{
	// finals
	array_push( $events, array(
	array( 'from_event_index' => count( $events ) - 3, 'from_event_rank' => 1 ),
	array( 'from_event_index' => count( $events ) - 1, 'from_event_rank' => 1 )
	) );
}

?>

</div>
	</div>	
	
	<?php 
}


//add_shortcode( 'show-bracket' , 'is_player' );