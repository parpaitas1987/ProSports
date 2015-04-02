<?php
// check if file accessable directly in browser
if ( !defined( 'ABSPATH' ) ) {
	die( "No script kiddies please!" );
}
?>
<?php 
// create menu in admin panel left section
add_action( 'admin_menu', 'add_settings_menu_playersignup' );
function add_settings_menu_playersignup() {
	$menu_icon = SPORTSMANAGER__PLUGIN_URL.'sm-player-signup/images/user-16.png';
	add_menu_page ( 'Player Signup', 'Player Signup', 'administrator', __FILE__, 'display_player_signup',$menu_icon );
}

function display_player_signup() {
	
	echo 'Hello';
	
}
