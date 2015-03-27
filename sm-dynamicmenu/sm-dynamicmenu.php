<?php
/**
 * Plugin Name: SM Dynamic Menu
 * Plugin URI: http://www.biralsabia.com/playpal
 * Description: Declares a plugin that will create a custom tax type displaying movie reviews.
 * Version: 1.0
 * Author: Adeel Mughal @ Bir Al Sabia
 * Author URI: http://www.biralsabia.net/team
 * Network: false
 * License: GPLv2 (http://www.gnu.org/licenses/gpl-2.0.html)
 */
if ( !defined( 'ABSPATH' ) ) {
	die( "No script kiddies please!" );
}
?>
<?php
add_action( 'admin_menu', 'admin_menu_dynamic_plugin' );
function admin_menu_dynamic_plugin() {
	$menu_icon = SPORTSMANAGER__PLUGIN_URL.'sm-sportsmanager/assets/images/icon-16-1.png';
	add_menu_page ( 'Dynamic Menu', 'Dynamic Menu', 'administrator', __FILE__, 'dynamic_menu_page',$menu_icon,5.5 );
}
function dynamic_menu_page() {
?>
<div class="wrap">
<h2>Display Menu Structure</h2>	
<br>
<?php
$sql = "SELECT * FROM wp_term_taxonomy as wptx JOIN wp_terms as wpterm ON wptx.term_taxonomy_id = wpterm.term_id WHERE wptx.taxonomy = 'sm_tournament_leagues'";
$result = mysql_query( $sql );
//create a multidimensional array to hold a list of menu and parent menu
	$menu = array(
		'menus' => array(),
		'parent_menus' => array()
	);
	//build the array lists with data from the menu table
	while ( $row = mysql_fetch_assoc( $result ) ) {
		//creates entry into menus array with current menu id ie. $menus['menus'][1]
		$menu['menus'][$row['term_taxonomy_id']] = $row;
		//creates entry into parent_menus array. parent_menus array contains a list of all menus with children
		$menu['parent_menus'][$row['parent']][] = $row['term_taxonomy_id'];
	}
	// Create the main function to build milti-level menu. It is a recursive function.	
	function buildMenu( $parent, $menu ) {
	$html = "";
	if ( isset( $menu['parent_menus'][$parent] ) ) {
		$html .= "<ul>";
		foreach ($menu['parent_menus'][$parent] as $menu_id) {
			if ( !isset( $menu['parent_menus'][$menu_id] ) ) {
				$html .= "<li>Child Menu - <a href='" . $menu['menus'][$menu_id]['slug'] . "'>" . $menu['menus'][$menu_id]['name'] . "</a> ".$menu['menus'][$menu_id]['count']." </li>";
			}
			if ( isset( $menu['parent_menus'][$menu_id] ) ) {
				$html .= "<li>Parent Menu - <a href='" . $menu['menus'][$menu_id]['slug'] . "'>" . $menu['menus'][$menu_id]['name'] . "</a> ".$menu['menus'][$menu_id]['count']." ";
				$html .= buildMenu( $menu_id, $menu );
				$html .= "</li>";
			}
		}
		$html .= "</ul>";
	}
	return $html;
}
echo buildMenu( 0,$menu );
?>
</div>
<?php
}