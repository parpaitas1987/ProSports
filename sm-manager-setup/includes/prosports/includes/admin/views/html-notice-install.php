<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<div id="message" class="updated prosports-message">
	<p><strong><?php printf( __( 'Welcome to ProSports %s', 'prosports' ), SP()->version ); ?></strong></p>
	<p class="submit">
		<a class="button-primary" href="<?php echo admin_url( add_query_arg( array( 'page' => 'sp-about', 'install_prosports' => 'true' ), 'index.php' ) ); ?>"><?php _e( "Get Started", 'prosports' ); ?></a>
		<a class="button-secondary" href="<?php echo add_query_arg('skip_install_prosports', 'true' ); ?>"><?php _e( 'Hide this notice', 'prosports' ); ?></a>
	</p>
</div>