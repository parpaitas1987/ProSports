<?php
/**
 * Staff Shortcode
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin/Meta_Boxes
 * @version     1.4.7
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * SP_Meta_Box_Staff_Shortcode
 */
class SP_Meta_Box_Staff_Shortcode {

	/**
	 * Output the metabox
	 */
	public static function output( $post ) {
		?>
		<p class="howto">
			<?php _e( 'Copy this code and paste it into your post, page or text widget content.', 'prosports' ); ?>
		</p>
		<p><input type="text" value="[staff <?php echo $post->ID; ?>]" readonly="readonly" class="code widefat"></p>
		<?php
	}
}