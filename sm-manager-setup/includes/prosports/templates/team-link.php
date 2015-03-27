<?php
/**
 * Team Link
 *
 * @author 		ProSports
 * @package 	ProSports/Templates
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( get_option( 'prosports_team_show_link', 'yes' ) === 'no' ) return;

if ( ! isset( $id ) )
	$id = get_the_ID();

$url = get_post_meta( $id, 'sp_url', true );

if ( empty( $url ) )
	return false;
?>
<form action="<?php echo $url; ?>"<?php if ( get_option( 'prosports_team_site_target_blank', 'no' ) == 'yes' ) { ?> target="_blank"<?php } ?>>
	<input type="submit" class="button sp-button sp-team-button" value="<?php _e( 'Visit Site', 'prosports' ); ?>">
</form>
<br>