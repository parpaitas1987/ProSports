<?php
/**
 * Event Video
 *
 * @author 		ProSports
 * @package 	ProSports/Templates
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! isset( $id ) )
	$id = get_the_ID();

$video_url = get_post_meta( $id, 'sp_video', true );
if ( $video_url ):
	?>
	<div class="sp-template sp-template-event-video sp-event-video">
		<h4 class="sp-table-caption"><?php _e( 'Video', 'prosports' ); ?></h4>
		<?php
	    global $wp_embed;
	    echo $wp_embed->autoembed( $video_url );
	    ?>
	</div>
    <?php
endif;
?>