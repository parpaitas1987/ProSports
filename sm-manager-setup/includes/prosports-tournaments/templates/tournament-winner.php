<?php
/**
 * Tournament Winner
 *
 * @author 		ProSports
 * @package 	ProSports/Tournaments
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( get_option( 'prosports_tournament_show_winner', 'yes' ) === 'no' ) return;

$defaults = array(
	'id' => get_the_ID(),
	'link_teams' => get_option( 'prosports_link_teams', 'no' ) == 'yes' ? true : false,
);

extract( $defaults, EXTR_SKIP );

if ( ! isset( $id ) )
	$id = get_the_ID();

$winner = get_post_meta( $id, 'sp_winner', true );
if ( ! $winner ) return;

$before = $after = '';
if ( $link_teams ) {
	$before = '<a href="' . get_post_permalink( $winner ) . '">';
	$after = '</a>';
}

?>
<div class="sp-template sp-template-tournament-winner sp-tournament-winner">
	<h4 class="sp-tournament-winner-title"><?php _e( 'Winner', 'prosports' ); ?></h4>
	<?php echo $before; ?>
	<?php if ( has_post_thumbnail( $winner ) ): ?>
		<?php echo get_the_post_thumbnail( $winner, 'prosports-fit-icon' ); ?><br>
	<?php else: ?>
		<strong><?php echo get_the_title( $winner ); ?></strong>
	<?php endif; ?>
	<?php echo $after; ?>
</div>