<?php
/**
 * Team Details
 *
 * @author 		ProSports
 * @package 	ProSports/Templates
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( get_option( 'prosports_team_show_details', 'no' ) === 'no' ) return;

if ( ! isset( $id ) )
	$id = get_the_ID();

$data = array();

$terms = get_the_terms( $id, 'sp_league' );
if ( $terms ):
	$leagues = array();
	foreach ( $terms as $term ):
		$leagues[] = $term->name;
	endforeach;
	$data[ _n( 'Competition', 'Competitions', sizeof( $leagues ), 'prosports' ) ] = implode( ', ', $leagues );
endif;

$terms = get_the_terms( $id, 'sp_season' );
if ( $terms ):
	$seasons = array();
	foreach ( $terms as $term ):
		$seasons[] = $term->name;
	endforeach;
	$data[ _n( 'Season', 'Seasons', sizeof( $seasons ), 'prosports' ) ] = implode( ', ', $seasons );
endif;

$terms = get_the_terms( $id, 'sp_venue' );
if ( $terms ):
	if ( get_option( 'prosports_team_link_venues', 'no' ) === 'yes' ):
		$data[ __( 'Home', 'prosports' ) ] = get_the_term_list( $id, 'sp_venue' );
	else:
		$venues = array();
		foreach ( $terms as $term ):
			$venues[] = $term->name;
		endforeach;
		$data[ __( 'Home', 'prosports' ) ] = implode( ', ', $venues );
	endif;
endif;

$output = '<div class="sp-list-wrapper">' .
	'<dl class="sp-team-details">';

foreach( $data as $label => $value ):

	$output .= '<dt>' . $label . '</dt><dd>' . $value . '</dd>';

endforeach;

$output .= '</dl></div>';
?>
<div class="sp-template sp-template-team-details sp-template-details">
	<?php echo $output; ?>
</div>