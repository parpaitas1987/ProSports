<?php
/**
 * Staff Gallery Thumbnail
 *
 * @author 		ProSports
 * @package 	ProSports_Staff_Directories
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$defaults = array(
	'id' => null,
	'row' => array(),
	'icontag' => 'dt',
	'captiontag' => 'dd',
	'caption' => null,
	'size' => 'thumbnail',
	'link_posts' => get_option( 'prosports_link_staff', 'yes' ) == 'yes' ? true : false,
);

extract( $defaults, EXTR_SKIP );

// Add staff role to caption if available
$staff_role = get_post_meta( $id, 'sp_role', true );
if ( $staff_role )
	$caption = '<strong>' . $staff_role . '</strong> ' . $caption;

// Add caption tag if has caption
if ( $captiontag && $caption )
	$caption = '<' . $captiontag . ' class="wp-caption-text gallery-caption small-3 columns">' . wptexturize( $caption ) . '</' . $captiontag . '>';

if ( $link_posts )
	$caption = '<a href="' . get_permalink( $id ) . '">' . $caption . '</a>';

if ( isset( $limit ) && $i >= $limit )
	continue;

if ( has_post_thumbnail( $id ) )
	$thumbnail = get_the_post_thumbnail( $id, $size );
else
	$thumbnail = '<img width="150" height="150" src="http://www.gravatar.com/avatar/?s=150&d=mm&f=y" class="attachment-thumbnail wp-post-image">';

echo "<{$itemtag} class='gallery-item'>";
echo "
	<{$icontag} class='gallery-icon portrait'>"
		. '<a href="' . get_permalink( $id ) . '">' . $thumbnail . '</a>'
	. "</{$icontag}>";
echo $caption;
echo "</{$itemtag}>";
