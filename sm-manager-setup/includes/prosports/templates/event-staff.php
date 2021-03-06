<?php
/**
 * Event Staff
 *
 * @author 		ProSports
 * @package 	ProSports/Templates
 * @version     1.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$defaults = array(
	'id' => get_the_ID(),
	'index' => 0,
	'link_posts' => get_option( 'prosports_link_staff', 'yes' ) == 'yes' ? true : false,
);

$staffs = array_filter( sp_array_between( (array)get_post_meta( $id, 'sp_staff', false ), 0, $index ) );

if ( ! $staffs ) return;

extract( $defaults, EXTR_SKIP );
?>
<p class="sp-event-staff">
<?php
foreach( $staffs as $staff_id ):

	if ( ! $staff_id )
		continue;

	$name = get_the_title( $staff_id );

	if ( ! $name )
		continue;

	$staff = new SP_Staff( $staff_id );

	$role = $staff->role();

	if ( $role )
		echo $role->name;
	else
		_e( 'Staff', 'prosports' );

	echo ': ';

	if ( $link_posts ):
		$permalink = get_post_permalink( $staff_id );
		$name =  '<a href="' . $permalink . '">' . $name . '</a>';
	endif;

	echo $name . '<br>';

endforeach;
?>
</p>