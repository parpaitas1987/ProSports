<?php
/**
 * Event Shortcode
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin/Meta_Boxes
 * @version     0.7.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * SP_Meta_Box_Event_Shortcode
 */
class SP_Meta_Box_Event_Shortcode {

	/**
	 * Output the metabox
	 */
	public static function output( $post ) {
		?>
		<p class="howto">
			<?php _e( 'Copy this code and paste it into your post, page or text widget content.', 'prosports' ); ?>
		</p>
		<p>
			<strong><?php _e( 'Team Results', 'prosports' ); ?></strong>
		</p>
		<p><input type="text" value="[event_results <?php echo $post->ID; ?>]" readonly="readonly" class="code widefat"></p>
		<p>
			<strong><?php _e( 'Details', 'prosports' ); ?></strong>
		</p>
		<p><input type="text" value="[event_details <?php echo $post->ID; ?>]" readonly="readonly" class="code widefat"></p>
		<p>
			<strong><?php _e( 'Player Performance', 'prosports' ); ?></strong>
		</p>
		<p><input type="text" value="[event_performance <?php echo $post->ID; ?>]" readonly="readonly" class="code widefat"></p>
		<?php
	}
}