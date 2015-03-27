<?php
/**
 * Player Shortcode
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin/Meta_Boxes
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * SP_Meta_Box_Player_Shortcode
 */
class SP_Meta_Box_Player_Shortcode {

	/**
	 * Output the metabox
	 */
	public static function output( $post ) {
		?>
		<p class="howto">
			<?php _e( 'Copy this code and paste it into your post, page or text widget content.', 'prosports' ); ?>
		</p>
		<p>
			<strong><?php _e( 'Details', 'prosports' ); ?></strong>
		</p>
		<p><input type="text" value="[player_details <?php echo $post->ID; ?>]" readonly="readonly" class="code widefat"></p>
		<p>
			<strong><?php _e( 'Statistics', 'prosports' ); ?></strong>
		</p>
		<p><input type="text" value="[player_statistics <?php echo $post->ID; ?>]" readonly="readonly" class="code widefat"></p>
		<?php
	}
}