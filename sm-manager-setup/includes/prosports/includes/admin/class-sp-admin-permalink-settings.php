<?php
/**
 * Adds settings to the permalinks admin settings page.
 *
 * @author 		ProSports
 * @category 	Admin
 * @package 	ProSports/Admin
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'SP_Admin_Permalink_Settings' ) ) :

/**
 * SP_Admin_Permalink_Settings Class
 */
class SP_Admin_Permalink_Settings {

	/**
	 * Hook in tabs.
	 */
	public function __construct() {
		$this->slugs = apply_filters( 'prosports_permalink_slugs', array(
			array( 'event', __( 'Events', 'prosports' ) ),
			array( 'venue', __( 'Venues', 'prosports' ) ),
			array( 'calendar', __( 'Calendars', 'prosports' ) ),
			array( 'team', __( 'Teams', 'prosports' ) ),
			array( 'league', __( 'Competitions', 'prosports' ) ),
			array( 'season', __( 'Seasons', 'prosports' ) ),
			array( 'table', __( 'League Tables', 'prosports' ) ),
			array( 'player', __( 'Players', 'prosports' ) ),
			array( 'position', __( 'Positions', 'prosports' ) ),
			array( 'list', __( 'Player Lists', 'prosports' ) ),
			array( 'staff', __( 'Staff', 'prosports' ) ),
		) );

		add_action( 'admin_init', array( $this, 'settings_init' ) );
		add_action( 'admin_init', array( $this, 'settings_save' ) );
	}

	/**
	 * Init our settings
	 */
	public function settings_init() {
		// Add a section to the permalinks page
		add_settings_section( 'prosports-permalink', __( 'ProSports', 'prosports' ), array( $this, 'settings' ), 'permalink' );

		// Add our settings
		foreach ( $this->slugs as $slug ):
			add_settings_field(	
				$slug[0],							// id
				$slug[1],							// setting title
				array( $this, 'slug_input' ),		// display callback
				'permalink',						// settings page
				'prosports-permalink'				// settings section
			);
		endforeach;
	}

	/**
	 * Show a slug input box.
	 */
	public function slug_input() {
		$slug = array_shift( $this->slugs );
		$key = $slug[0];
		$text = get_option( 'prosports_' . $key . '_slug', null );
		?><fieldset><input id="prosports_<?php echo $key; ?>_slug" name="prosports_<?php echo $key; ?>_slug" type="text" class="regular-text code" value="<?php echo $text; ?>" placeholder="<?php echo $key; ?>"></fieldset><?php
	}

	/**
	 * Show the settings
	 */
	public function settings() {
		echo wpautop( __( 'These settings control the permalinks used for ProSports. These settings only apply when <strong>not using "default" permalinks above</strong>.', 'prosports' ) );
	}

	/**
	 * Save the settings
	 */
	public function settings_save() {
		if ( ! is_admin() )
			return;

		if ( isset( $_POST['permalink_structure'] ) || isset( $_POST['prosports_event_slug'] ) ):
			foreach ( $this->slugs as $slug ):
				$key = 'prosports_' . $slug[0] . '_slug';
				$value = null;
				if ( isset( $_POST[ $key ] ) )
					$value = sanitize_text_field( $_POST[ $key ] );
				if ( empty( $value ) )
					delete_option( $key );
				else
					update_option( $key, $value );
			endforeach;
			sp_flush_rewrite_rules();
		endif;
	}
}

endif;

return new SP_Admin_Permalink_Settings();