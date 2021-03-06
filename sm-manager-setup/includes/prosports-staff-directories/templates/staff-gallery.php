<?php
/**
 * Staff Gallery
 *
 * @author 		ProSports
 * @package 	ProSports_Staff_Directories
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$defaults = array(
	'id' => get_the_ID(),
	'number' => -1,
	'itemtag' => 'dl',
	'icontag' => 'dt',
	'captiontag' => 'dd',
	'grouptag' => 'h4',
	'columns' => 3,
	'size' => 'thumbnail',
	'show_all_staff_link' => false,
	'link_posts' => get_option( 'prosports_link_staff', 'yes' ) == 'yes' ? true : false,
);

extract( $defaults, EXTR_SKIP );

$itemtag = tag_escape( $itemtag );
$captiontag = tag_escape( $captiontag );
$icontag = tag_escape( $icontag );
$valid_tags = wp_kses_allowed_html( 'post' );
if ( ! isset( $valid_tags[ $itemtag ] ) )
	$itemtag = 'dl';
if ( ! isset( $valid_tags[ $captiontag ] ) )
	$captiontag = 'dd';
if ( ! isset( $valid_tags[ $icontag ] ) )
	$icontag = 'dt';

$columns = intval( $columns );
$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
$size = $size;
$float = is_rtl() ? 'right' : 'left';

$selector = 'sp-staff-gallery-' . $id;

$directory = new SP_Staff_Directory( $id );
$data = $directory->data();

// Remove the first row to leave us with the actual data
unset( $data[0] );

$gallery_style = $gallery_div = '';
if ( apply_filters( 'use_default_gallery_style', true ) )
	$gallery_style = "
	<style type='text/css'>
		#{$selector} {
			margin: auto;
		}
		#{$selector} .gallery-item {
			float: {$float};
			margin-top: 10px;
			text-align: center;
			width: {$itemwidth}%;
		}
		#{$selector} img {
			border: 2px solid #cfcfcf;
		}
		#{$selector} .gallery-caption {
			margin-left: 0;
		}
		/* see gallery_shortcode() in wp-includes/media.php */
	</style>";
$size_class = sanitize_html_class( $size );
$gallery_div = "<div id='$selector' class='gallery galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class}'>";
echo apply_filters( 'gallery_style', $gallery_style . "\n\t\t" );
?>
<div class="sp-template sp-template-staff-gallery">
	<?php echo $gallery_div; ?>
	<?php
	if ( is_int( $number ) && $number > 0 )
		$limit = $number;

	$i = 0;

	foreach( $data as $staff_id => $row ):

		if ( isset( $limit ) && $i >= $limit ) continue;

		$caption = get_the_title( $staff_id );
		$caption = trim( $caption );

	    sp_get_template( 'staff-gallery-thumbnail.php', array(
	    	'id' => $staff_id,
	    	'row' => $row,
	    	'itemtag' => $itemtag,
	    	'icontag' => $icontag,
	    	'captiontag' => $captiontag,
	    	'caption' => $caption,
	    	'size' => $size,
	    	'link_posts' => $link_posts,
	    ), 'staff-gallery-thumbnail', SP_STAFF_DIRECTORIES_DIR . 'templates/' );

		$i++;

	endforeach;

	echo '<br style="clear: both;" />';
		
	echo "</div>\n";

	if ( $show_all_staff_link )
		echo '<a class="sp-staff-directory-link sp-view-all-link" href="' . get_permalink( $id ) . '">' . __( 'View all staff', 'prosports' ) . '</a>';
	?>
</div>