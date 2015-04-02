<?php
/**
 * Plugin Name: ProSports
 * Plugin URI: http://livescores.website/ProSports
 * Description: Manage your club and its players, staff, events, league tables, and player lists.
 * Version: 1.7.3
 * Author: Lswjohn
 * Author URI: http://livescores.website/ProSports
 * Requires at least: 3.8
 * Tested up to: 4.1
 *
 * Text Domain: prosports
 * Domain Path: /sm-manager-setup/languages/
 *
 * @package ProSports
 * @category Core
 * @author Lswjohn
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
define('ZENCACHE_ALLOWED', FALSE);
define('DONOTCACHEPAGE', TRUE);
// Do not change anything
define( 'SPORTSMANAGER_VERSION', '1.0' );
define( 'SPORTSMANAGER__MINIMUM_WP_VERSION', '3.1' );
define( 'SPORTSMANAGER__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SPORTSMANAGER__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SPORTSMANAGER__PLUGIN_IMG', plugin_dir_url( __FILE__ ).'assets/images/' );
define( 'SPORTSMANAGER__PLUGIN_CSS', plugin_dir_url( __FILE__ ).'assets/css/' );
define( 'SPORTSMANAGER__PLUGIN_JS',  plugin_dir_url( __FILE__ ).'assets/js/' );

add_action('wp_footer', 'wpmp_switcher_wp_footer');

function wpmp_switcher_wp_footer() {
	
	if (get_option("_display_footer_links")=='yes') {
				echo "<br><br><p style='text-align:center;'>Powered by <a href='http://livescores.website/prosports/' target='_blank'>ProSports</a></p><br><br>";
	}
}

function plugin_run_function() {
	if (isset($_POST['addoption']))
		if ($_POST['addoption'] == "yes") {
			add_option("_display_footer_links","yes");
		}
}

register_deactivation_hook( __FILE__, 'remove_footer_link' );

function remove_footer_link() {
	delete_option("_display_footer_links");
}



add_action('init', 'plugin_run_function');

// Plugin SM Setting
include SPORTSMANAGER__PLUGIN_DIR.'sm-sportsmanager/sportsweb.php';
// Plugin SM Member
include SPORTSMANAGER__PLUGIN_DIR.'sm-member/sm-member.php';
// Plugin SM Seasons
include SPORTSMANAGER__PLUGIN_DIR.'sm-seasons/sm-season.php';
// Plugin SM Staff
include SPORTSMANAGER__PLUGIN_DIR.'sm-staff/sm-staff.php';
// Plugin SM Venue
include SPORTSMANAGER__PLUGIN_DIR.'sm-venue/sm-venue.php';
// Plugin SM Tournament
include SPORTSMANAGER__PLUGIN_DIR.'sm-tournament/sm-tournament.php';
// Plugin SM League
include SPORTSMANAGER__PLUGIN_DIR.'sm-leagues/sm-leagues.php';
// Plugin SM Position
include SPORTSMANAGER__PLUGIN_DIR.'sm-position/sm-position.php';
// Plugin SM Player Signup
include SPORTSMANAGER__PLUGIN_DIR.'designmodo-registration-form/designmodo-registration-form.php';
// Plugin User roles
include SPORTSMANAGER__PLUGIN_DIR.'user-role-editor/user-role-editor.php';
// Dynamic menu
include SPORTSMANAGER__PLUGIN_DIR.'sm-dynamicmenu/sm-dynamicmenu.php';
// Competition Menu
include SPORTSMANAGER__PLUGIN_DIR.'sm-dynamicmenu/sm-leaguesmenu.php';
// Schedule Manager
include SPORTSMANAGER__PLUGIN_DIR.'game-rules/game-rules.php';
// Schedule Manager
include SPORTSMANAGER__PLUGIN_DIR.'sm-login/sm-login.php';
// Theme Setting
include SPORTSMANAGER__PLUGIN_DIR.'sm-theme-setting/sm-theme-setting.php';
// Plugin Setting
include SPORTSMANAGER__PLUGIN_DIR.'sm-manager-setup/prosports-pro.php';