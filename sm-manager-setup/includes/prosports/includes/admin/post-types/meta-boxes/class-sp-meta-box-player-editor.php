<?php
/**
 * Player Editor
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin/Meta_Boxes
 * @version     0.8
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * SP_Meta_Box_Player_Editor
 */
class SP_Meta_Box_Player_Editor {

	/**
	 * Output the metabox
	 */
	public static function output( $post ) {
		wp_editor( $post->post_content, 'content' );
	}
}