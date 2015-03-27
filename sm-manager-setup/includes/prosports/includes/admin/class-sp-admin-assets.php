<?php
/**
 * Load assets.
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin
 * @version     1.5
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'SP_Admin_Assets' ) ) :

/**
 * SP_Admin_Assets Class
 */
class SP_Admin_Assets {

	/**
	 * Hook in tabs.
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
	}

	/**
	 * Enqueue styles
	 */
	public function admin_styles() {
		// Sitewide menu CSS
		wp_enqueue_style( 'prosports-admin-menu-styles', SP()->plugin_url() . '/assets/css/menu.css', array(), SP_VERSION );

		$screen = get_current_screen();

		if ( in_array( $screen->id, sp_get_screen_ids() ) ) {
			// Admin styles for SP pages only
			wp_enqueue_style( 'jquery-chosen', SP()->plugin_url() . '/assets/css/chosen.css', array(), '1.1.0' );
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_style( 'prosports-admin', SP()->plugin_url() . '/assets/css/admin.css', array(), SP_VERSION );
		} elseif ( strpos( $screen->id, 'prosports-config' ) !== false ) {
			wp_enqueue_style( 'prosports-admin', SP()->plugin_url() . '/assets/css/admin.css', array(), SP_VERSION );
		}

		if ( strpos( $screen->id, 'prosports-overview' ) !== false ) {
			wp_enqueue_style( 'prosports-admin-slickmap', SP()->plugin_url() . '/assets/css/slickmap.css', array(), '1.1.0' );
		}

		if ( in_array( $screen->id, array( 'dashboard' ) ) ) {
			wp_enqueue_style( 'prosports-admin-dashboard-styles', SP()->plugin_url() . '/assets/css/dashboard.css', array(), SP_VERSION );
		}

		if ( in_array( $screen->id, array( 'customize' ) ) ) {
			wp_enqueue_style( 'prosports-admin-customize-styles', SP()->plugin_url() . '/assets/css/customize.css', array(), SP_VERSION );
		}

		if ( in_array( $screen->id, array( 'sp_column', 'sp_statistic' ) ) ) {
			wp_enqueue_style( 'prosports-admin-equation-styles', SP()->plugin_url() . '/assets/css/equation.css', array(), SP_VERSION );
		}

		if ( in_array( $screen->id, array( 'sp_calendar', 'widgets' ) ) ) {
		    wp_enqueue_style( 'jquery-ui-style' , '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css' ); 
			wp_enqueue_style( 'prosports-admin-datepicker-styles', SP()->plugin_url() . '/assets/css/datepicker.css', array( 'jquery-ui-style' ), SP_VERSION );
		}

		do_action( 'prosports_admin_css' );
	}

	/**
	 * Enqueue scripts
	 */
	public function admin_scripts() {
		global $wp_query, $post;

		$screen = get_current_screen();

		// Register scripts
		wp_register_script( 'chosen', SP()->plugin_url() . '/assets/js/chosen.jquery.min.js', array( 'jquery' ), '1.1.0', true );

		wp_register_script( 'jquery-tiptip', SP()->plugin_url() . '/assets/js/jquery.tipTip.min.js', array( 'jquery' ), '1.3', true );

		wp_register_script( 'jquery-caret', SP()->plugin_url() . '/assets/js/jquery.caret.min.js', array( 'jquery' ), '1.02', true );

		wp_register_script( 'jquery-countdown', SP()->plugin_url() . '/assets/js/jquery.countdown.min.js', array( 'jquery' ), '2.0.2', true );

		wp_register_script( 'jquery-fitvids', SP()->plugin_url() . '/assets/js/jquery.fitvids.js', array( 'jquery' ), '1.1', true );

		wp_register_script( 'google-maps', 'http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places' );

		wp_register_script( 'jquery-locationpicker', SP()->plugin_url() . '/assets/js/locationpicker.jquery.js', array( 'jquery', 'google-maps' ), '0.1.6', true );

		wp_register_script( 'prosports-admin-locationpicker', SP()->plugin_url() . '/assets/js/admin/locationpicker.js', array( 'jquery', 'google-maps', 'jquery-locationpicker' ), SP_VERSION, true );

		wp_register_script( 'prosports-admin-equationbuilder', SP()->plugin_url() . '/assets/js/admin/equationbuilder.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-draggable', 'jquery-ui-droppable' ), SP_VERSION, true );

		wp_register_script( 'prosports-admin-widgets', SP()->plugin_url() . '/assets/js/admin/widgets.js', array( 'jquery' ), SP_VERSION, true );

		// ProSports admin pages
	    if ( in_array( $screen->id, sp_get_screen_ids() ) || strpos( $screen->id, 'prosports-config' )) {
	    	wp_enqueue_script( 'jquery' );
	    	wp_enqueue_script( 'chosen' );
	    	wp_enqueue_script( 'jquery-ui-core' );
	    	wp_enqueue_script( 'jquery-ui-draggable' );
	    	wp_enqueue_script( 'jquery-ui-droppable' );
	    	wp_enqueue_script( 'jquery-ui-sortable' );
	    	wp_enqueue_script( 'jquery-tiptip' );
	    	wp_enqueue_script( 'jquery-caret' );
	    	wp_enqueue_script( 'jquery-countdown' );
	    	wp_enqueue_script( 'jquery-fitvids' );
	    	wp_enqueue_script( 'prosports-admin', SP()->plugin_url() . '/assets/js/admin/prosports-admin.js', array( 'jquery', 'chosen', 'jquery-ui-core', 'jquery-ui-datepicker', 'jquery-ui-draggable', 'jquery-ui-droppable', 'jquery-ui-sortable', 'jquery-tiptip', 'jquery-caret', 'jquery-countdown', 'jquery-fitvids' ), SP_VERSION, true );
	    	
	    	$strings = array(
				'none' => __( 'None', 'prosports' ),
				'remove_text' => __( '&mdash; Remove &mdash;', 'prosports' ),
				'days' => __( 'days', 'prosports' ),
				'hrs' => __( 'hrs', 'prosports' ),
				'mins' => __( 'mins', 'prosports' ),
				'secs' => __( 'secs', 'prosports' ),
				'displaying_posts' => html_entity_decode( __( 'Displaying %s&#8211;%s of %s', 'prosports' ) ),
	    	);

	    	// Localize scripts
			wp_localize_script( 'prosports-admin', 'localized_strings', $strings );
	    }

		if ( in_array( $screen->id, array( 'widgets' ) ) ) {
	    	wp_enqueue_script( 'prosports-admin-widgets' );
		}

	    // Edit venue pages
	    if ( in_array( $screen->id, array( 'edit-sp_venue' ) ) ) {
	    	wp_enqueue_script( 'google-maps' );
	    	wp_enqueue_script( 'jquery-locationpicker' );
	    	wp_enqueue_script( 'prosports-admin-locationpicker' );
		}

		// Edit equation
		if ( in_array( $screen->id, array( 'sp_column', 'sp_statistic' ) ) ) {
	    	wp_enqueue_script( 'prosports-admin-equationbuilder' );
		}
	}
}

endif;

return new SP_Admin_Assets();
