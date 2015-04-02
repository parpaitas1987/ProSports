<?php
include_once(dirname (__FILE__) . '/tableinstall.php');
register_activation_hook(__FILE__,'install_bracket_tables');

add_action('admin_menu', 'bracket_plugin_menu');
function bracket_plugin_menu() {
    if (is_admin()){
        add_menu_page('bracket plugin options', 'Tournament Brackets', 'manage_options', 'bracket-plugin', 'bracket_plugin_options') ;
		add_submenu_page('bracket-plugin', '8 Player Bracket Options', '8 Player Bracket Options', 'manage_options', 'bracket-plugin-8p', 'bracket_sub_8p'); 
		add_submenu_page('bracket-plugin', '16 Player Bracket Options', '16 Player Bracket Options', 'manage_options', 'bracket-plugin-16p', 'bracket_sub_16p'); 
		add_submenu_page('bracket-plugin', '32 Player Bracket Options', '32	Player Bracket Options', 'manage_options', 'bracket-plugin-32p', 'bracket_sub_32p'); 
		add_submenu_page('bracket-plugin', '64 Player Bracket Options', '64	Player Bracket Options', 'manage_options', 'bracket-plugin-64p', 'bracket_sub_64p');
		add_submenu_page('bracket-plugin', '8 Player Double Elimination Options', '8 Player Double Elimination Options', 'manage_options', 'bracket-plugin-8p-de', 'bracket_sub_8p_de'); 
		add_submenu_page('bracket-plugin', '16 Player Double Elimination Options', '16 Player Double Elimination Options', 'manage_options', 'bracket-plugin-16p-de', 'bracket_sub_16p_de'); 
		}
}
function bracket_plugin_options(){
?>
<h2>SM Sports - Tournament Bracket System</h2>
<br />
<br />
Welcome to SM tournament bracket system.<br />
Below you will find all the different bracket systems available which have been split into different categories (single elimination, double elimination etc).
<h2>Single Elimination</h2>
<table class="widefat page fixed" cellpadding="0">
      <thead>
        <tr>

          <th class="manage-column"><?php _e('SINGLE Bracket System')?></th>
		  <th class="manage-column"><?php _e('Bracket Description')?></th>
 
        </tr>
      </thead>
      <tfoot>
        <tr>

          <th class="manage-column"><?php _e('SINGLE Bracket System')?></th>
		  <th class="manage-column"><?php _e('Bracket Description')?></th>
          
        </tr>
      </tfoot>
      <tbody>
     	 <tr>
		  <td><input type="button" class="button-secondary" value="<?php _e('8 Player Brackets')?>" onclick="window.location='?page=bracket-plugin-8p'" /><br /><br /></td>
		  <td>Single elimination 8 player bracket.</td>
		  </tr>
		  <tr>
		  <td><input type="button" class="button-secondary" value="<?php _e('16 Player Brackets')?>" onclick="window.location='?page=bracket-plugin-16p'" /><br /><br /></td>
		  <td>Single elimination 16 player bracket.</td>
		  </tr>
		  <tr>
		  <td><input type="button" class="button-secondary" value="<?php _e('32 Player Brackets')?>" onclick="window.location='?page=bracket-plugin-32p'" /><br /><br /></td>
		  <td>Single elimination 32 player bracket.</td>
		  </tr>
		  <tr>
		  <td><input type="button" class="button-secondary" value="<?php _e('64 Player Brackets')?>" onclick="window.location='?page=bracket-plugin-64p'" /><br /><br /></td>
		  <td>Single elimination 64 player bracket.</td>
		  </tr>
		 </td>
       </th> 
      </tbody>
    </table>
	<br />
	<br />
	<h2>Double Elimination</h2>
	<table class="widefat page fixed" cellpadding="0">
      <thead>
        <tr>

          <th class="manage-column"><?php _e('DOUBLE Elimination Bracket System')?></th>
		  <th class="manage-column"><?php _e('Bracket Description')?></th>
 
        </tr>
      </thead>
      <tfoot>
        <tr>

          <th class="manage-column"><?php _e('DOUBLE Elimination Bracket System')?></th>
		  <th class="manage-column"><?php _e('Bracket Description')?></th>
          
        </tr>
      </tfoot>
      <tbody>

           
          
          <tr>
		  <td><input type="button" class="button-secondary" value="<?php _e('8 Player Double Elimination Brackets')?>" onclick="window.location='?page=bracket-plugin-8p-de'" /><br /><br /></td>
		  <td>Double elimination 8 player bracket.</td>
		  </tr>
		  
          <tr>
		  <td><input type="button" class="button-secondary" value="<?php _e('16 Player Double Elimination Brackets')?>" onclick="window.location='?page=bracket-plugin-16p-de'" /><br /><br /></td>
		  <td>Double elimination 16 player bracket.</td>
		  </tr>
		  
		  <tr>
		  <td></td>
		  <td></td>
		  </tr>
		  
		  <tr>
		  <td></td>
		  <td></td>
		  </tr>
		  
		 </td>

       </th> 
      </tbody>
    </table>



<?php
}


function bracket_sub_8p() {

/**Get all the data from the tabe wp_bracket_8player**/
function bracket_get_tournament_8p() {
    global $wpdb;
    $tournament_name = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."bracket_8player ORDER BY id ASC");
    return $tournament_name;
}

require_once('bracket_8p.php');

    bracket_action();
    if (empty($_GET['edit'])) {
      /**Display the data into the Dashboard**/
        bracket_manage_tournament_8p();
    } else {
      /**Display a form to add or update the data**/
        bracket_add_tournament_8p();   
    }
}

function bracket_sub_16p() {

/**Get all the data from the tabe wp_bracket_16player**/
function bracket_get_tournament_16p() {
    global $wpdb;
    $tournament_name = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."bracket_16player ORDER BY id ASC");
    return $tournament_name;
}
require_once('bracket_16p.php');

    bracket_action();
    if (empty($_GET['edit'])) {
      /**Display the data into the Dashboard**/
        bracket_manage_tournament_16p();
    } else {
      /**Display a form to add or update the data**/
        bracket_add_tournament_16p();   
    }
}
function bracket_sub_32p() {

/**Get all the data from the tabe wp_bracket_32player**/
function bracket_get_tournament_32p() {
    global $wpdb;
    $tournament_name = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."bracket_32player ORDER BY id ASC");
    return $tournament_name;
}
require_once('bracket_32p.php');

    bracket_action();
    if (empty($_GET['edit'])) {
      /**Display the data into the Dashboard**/
        bracket_manage_tournament_32p();
    } else {
      /**Display a form to add or update the data**/
        bracket_add_tournament_32p();   
    }
}

function bracket_sub_64p() {

/**Get all the data from the tabe wp_bracket_16player**/
function bracket_get_tournament_64p() {
    global $wpdb;
    $tournament_name = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."bracket_64player ORDER BY id ASC");
    return $tournament_name;
}
require_once('bracket_64p.php');

    bracket_action();
    if (empty($_GET['edit'])) {
      /**Display the data into the Dashboard**/
        bracket_manage_tournament_64p();
    } else {
      /**Display a form to add or update the data**/
        bracket_add_tournament_64p();   
    }
}

function bracket_sub_8p_de() {

/**Get all the data from the tabe wp_bracket_8player**/
function bracket_get_tournament_8p() {
    global $wpdb;
    $tournament_name = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."bracket_8player_de ORDER BY id ASC");
    return $tournament_name;
}

require_once('bracket_8p.php');

    bracket_action();
    if (empty($_GET['edit'])) {
      /**Display the data into the Dashboard**/
        bracket_manage_tournament_8p();
    } else {
      /**Display a form to add or update the data**/
        bracket_add_tournament_8p();   
    }
}

function bracket_sub_16p_de() {

/**Get all the data from the tabe wp_bracket_16player**/
function bracket_get_tournament_16p() {
    global $wpdb;
    $tournament_name = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."bracket_16player_de ORDER BY id ASC");
    return $tournament_name;
}
require_once('bracket_16p.php');

    bracket_action();
    if (empty($_GET['edit'])) {
      /**Display the data into the Dashboard**/
        bracket_manage_tournament_16p();
    } else {
      /**Display a form to add or update the data**/
        bracket_add_tournament_16p();   
    }
}

function showbracket_home($barckId) {
	require_once('bracket_8p.php');
	
	bracket_get_tournament_namerow(2);
	
}




add_shortcode('8pbrack','showbracket_home');


//bracket_sub_64p

?>