<?php
add_action( 'admin_menu', 'displaymenu_login' );

function displaymenu_login() {

	add_menu_page( '', '', '', '', 'sm_login_plugin', NULL, '' );

	add_menu_page( 'Login', 'Login', 'administrator', __FILE__, 'sm_login_plugin', NULL, 15 );

}

function sm_login_plugin() {
$args = array(
        'echo'           => true,
        'redirect'       => site_url( $_SERVER['REQUEST_URI'] ), 
        'form_id'        => 'loginform',
        'label_username' => __( 'Username' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me' ),
        'label_log_in'   => __( 'Log In' ),
        'id_username'    => 'user_login',
        'id_password'    => 'user_pass',
        'id_remember'    => 'rememberme',
        'id_submit'      => 'wp-submit',
        'remember'       => true,
        'value_username' => NULL,
        'value_remember' => false
);
	wp_login_form( $args );
}

add_shortcode( 'display_login', 'sm_login_plugin' );
?>