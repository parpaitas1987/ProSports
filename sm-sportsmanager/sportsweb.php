<?php

// Make sure we don't expose any info if called directly
if ( ! defined( 'ABSPATH' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
// Do not change anything
?>
<?php 

add_action('admin_menu', 'add_settings_menu');
function add_settings_menu() {
	$menu_icon = SPORTSMANAGER__PLUGIN_URL.'sm-sportsmanager/assets/images/icon-16-1.png';
	//add_menu_page ( 'Sports Manager', 'Sports Manager', 'administrator', __FILE__, 'sportsmanager_dashboard',$menu_icon,3 );
	add_option('_sm_manager_setting','0',false);
}
// sportsmanager dashboard
function sportsmanager_dashboard() { ?>
	<link rel='stylesheet' href='<?php echo SPORTSMANAGER__PLUGIN_URL.'sm-sportsmanager/assets/css/style.css' ?>' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo SPORTSMANAGER__PLUGIN_URL.'sm-sportsmanager/vpanel_style/vpanel_style.css' ?>' type='text/css' media='all' />
	<?php
		$get_setting = get_option('_sm_manager_setting');
		include  SPORTSMANAGER__PLUGIN_DIR.'sm-sportsmanager/functions.php';
		include  SPORTSMANAGER__PLUGIN_DIR.'sm-sportsmanager/sm_setting/sm_settings.php';
	?>
	<script type='text/javascript' src='<?php echo SPORTSMANAGER__PLUGIN_URL.'sm-sportsmanager/assets/js/script.js' ?>'></script>
	<?php
}
// update sports manager setting
function update_sm_settings() {
	if (isset($_POST) && $_POST)  {
	extract($_POST);
	$sm_setting_arr['logo_image'] =$logo_image; 
	$sm_setting_arr['sitename'] =$sitename;
	$sm_setting_arr['time_zone'] =$time_zone;
	$sm_setting_arr['prosports_sport'] =$prosports_sport;
	$sm_setting_arr['playoff_elemination'] =$playoff_elemination;
	
	$sm_setting_arr['team_logo'] =$team_logo;
	$sm_setting_arr['player_picture'] =$player_picture;
	
	
	$sm_setting_arr['player_register'] =$player_register;
	$sm_setting_arr['custom_css'] =$custom_css;
	update_option('_sm_manager_setting',$sm_setting_arr,false);
	}
}
add_action( 'init', 'update_sm_settings' );