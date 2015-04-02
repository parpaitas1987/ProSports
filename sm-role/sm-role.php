<?php
// create custom role
function add_new_custom_roles() {
	add_role( 'custom_role', 'League Manager', array( 'read' => true, 'level_0' => true ) );
	add_role( 'custom_role', 'Team Manager', array( 'read' => true, 'level_0' => true ) );
	add_role( 'custom_role', 'Event Manager', array( 'read' => true, 'level_0' => true ) );
	add_role( 'custom_role', 'Staff', array( 'read' => true, 'level_0' => true ) );
	add_role( 'custom_role', 'Player', array( 'read' => true, 'level_0' => true ) );
}
// activation hook for initiating function after plugin activation
register_activation_hook( __FILE__, 'add_new_custom_roles' );