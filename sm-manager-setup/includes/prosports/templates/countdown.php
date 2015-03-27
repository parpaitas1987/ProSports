<?php
/**
 * Countdown
 *
 * @author 		ProSports
 * @package 	ProSports/Templates
 * @version     1.5
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$defaults = array(
	'team' => null,
	'id' => null,
	'live' => get_option( 'prosports_enable_live_countdowns', 'yes' ) == 'yes' ? true : false,
);

if ( isset( $id ) ):
	$post = get_post( $id );
else:
	$args = array();
	if ( isset( $team ) )
		$args = array( array( 'key' => 'sp_team', 'value' => $team ) );
	$post = sp_get_next_event( $args );
endif;

extract( $defaults, EXTR_SKIP );

if ( ! isset( $post ) ) return;
?>
<div class="sp-template sp-template-countdown">
	<div class="sp-countdown-wrapper">
		<h3 class="event-name"><a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $post->post_title; ?></a></h3>
		<?php
		if ( isset( $show_venue ) && $show_venue ):
			$venues = get_the_terms( $post->ID, 'sp_venue' );
			if ( $venues ):
				?>
				<h5 class="event-venue"><?php the_terms( $post->ID, 'sp_venue' ); ?></h5>
				<?php
			endif;
		endif;

		if ( isset( $show_league ) && $show_league ):
			$leagues = get_the_terms( $post->ID, 'sp_league' );
			if ( $leagues ):
				foreach( $leagues as $league ):
					$term = get_term( $league->term_id, 'sp_league' );
					?>
					<h5 class="event-league"><?php echo $term->name; ?></h5>
					<?php
				endforeach;
			endif;
		endif;

		$now = new DateTime( current_time( 'mysql', 0 ) );
		$date = new DateTime( $post->post_date );
		$interval = date_diff( $now, $date );

		$days = $interval->invert ? 0 : $interval->days;
		$h = $interval->invert ? 0 : $interval->h;
		$i = $interval->invert ? 0 : $interval->i;
		$s = $interval->invert ? 0 : $interval->s;
		?>
		<p class="countdown sp-countdown<?php if ( $days >= 10 ): ?> long-countdown<?php endif; ?>">
			<time datetime="<?php echo $post->post_date; ?>"<?php if ( $live ): ?> data-countdown="<?php echo str_replace( '-', '/', $post->post_date ); ?>"<?php endif; ?>>
				<span><?php echo sprintf( '%02s', $days ); ?> <small><?php _e( 'days', 'prosports' ); ?></small></span>
				<span><?php echo sprintf( '%02s', $h ); ?> <small><?php _e( 'hrs', 'prosports' ); ?></small></span>
				<span><?php echo sprintf( '%02s', $i ); ?> <small><?php _e( 'mins', 'prosports' ); ?></small></span>
				<span><?php echo sprintf( '%02s', $s ); ?> <small><?php _e( 'secs', 'prosports' ); ?></small></span>
			</time>
		</p>
	</div>
</div>