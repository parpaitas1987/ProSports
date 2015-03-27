<?php
/**
 * Event Details
 *
 * @author 		ProSports
 * @package 	ProSports/Templates
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( get_option( 'prosports_event_show_details', 'yes' ) === 'no' ) return;

if ( ! isset( $id ) )
	$id = get_the_ID();

$scrollable = get_option( 'prosports_enable_scrollable_tables', 'yes' ) == 'yes' ? true : false;
$date = get_the_time( get_option('date_format'), $id );
$time = get_the_time( get_option('time_format'), $id );

$data = array( __( 'Date', 'prosports' ) => $date, __( 'Time', 'prosports' ) => $time );

$taxonomies = apply_filters( 'prosports_event_taxonomies', array( 'sp_league' => null, 'sp_season' => null ) );

foreach ( $taxonomies as $taxonomy => $post_type ):
	$terms = get_the_terms( $id, $taxonomy );
	if ( $terms ):
		$obj = get_taxonomy( $taxonomy );
		$term = array_shift( $terms );
		$data[ $obj->labels->singular_name ] = $term->name;
	endif;
endforeach;
?>
<div class="sp-template sp-template-event-details">
	<h4 class="sp-table-caption"><?php _e( 'Details', 'prosports' ); ?></h4>
	<div class="sp-table-wrapper<?php if ( $scrollable ) { ?> sp-scrollable-table-wrapper<?php } ?>">
		<table class="sp-event-details sp-data-table">
			<thead>
				<tr>
					<?php $i = 0; foreach( $data as $label => $value ):	?>
						<th><?php echo $label; ?></th>
					<?php $i++; endforeach; ?>
				</tr>
			</thead>
			<tbody>
				<tr class="odd">
					<?php $i = 0; foreach( $data as $value ):	?>
						<td><?php echo $value; ?></td>
					<?php $i++; endforeach; ?>
				</tr>
			</tbody>
		</table>
	</div>
</div>