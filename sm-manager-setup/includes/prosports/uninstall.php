<?php
/**
 * ProSports Uninstall
 *
 * Uninstalling ProSports deletes user roles and options.
 *
 * @author 		ProSports
 * @category 	Core
 * @package 	ProSports/Uninstaller
 * @version     0.7
 */
if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) 
	exit();

global $wpdb, $wp_roles;

$status_options = get_option( 'prosports_status_options', array() );

// Roles + caps
$installer = include( 'includes/class-sp-install.php' );
$installer->remove_roles();

// Delete options
$wpdb->query("DELETE FROM $wpdb->options WHERE option_name LIKE 'prosports_%';");

delete_option( 'prosports_installed' );