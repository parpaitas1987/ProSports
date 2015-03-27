<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'ProSports_Pro' ) ) :

/**
 * Main ProSports Pro Class
 *
 * @class ProSports_Pro
 * @version	1.5
 */
final class ProSports_Pro {

	/**
	 * @var string
	 */
	public $version = '1.5';

	/**
	 * ProSports Pro Constructor.
	 * @access public
	 * @return ProSports_Pro
	 */
	public function __construct() {
		// Define constants
		$this->define_constants();

		// Include required files
		$this->includes();

		// Install
		if ( class_exists( 'SP_Install' ) ):
			$install = new SP_Install();
			register_activation_hook( SP_PRO_PLUGIN_FILE, array( $install, 'install' ) );
		endif;

		// Hooks
		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), array( $this, 'action_links' ) );
		add_action( 'admin_init', array( $this, 'deactivate_core' ) );
		add_action( 'before_prosports_init', array( $this, 'load_module_translations' ), 0 );
		add_action( 'get_the_generator_html', array( $this, 'generator_tag' ), 10, 2 );
		add_action( 'get_the_generator_xhtml', array( $this, 'generator_tag' ), 10, 2 );
		add_action( 'prosports_required_plugins', array( $this, 'unrequire_core' ) );

		// Loaded action
		do_action( 'prosports_pro_loaded' );
	}

	/**
	 * Define SP Constants.
	 */
	private function define_constants() {
		define( 'SP_PRO_PLUGIN_FILE', __FILE__ );
		define( 'SP_PRO_VERSION', $this->version );

		if ( ! defined( 'SP_PRO_TEMPLATE_PATH' ) ) {
			define( 'SP_PRO_TEMPLATE_PATH', $this->template_path() );
		}

		if ( ! defined( 'SP_PRO_DELIMITER' ) ) {
			define( 'SP_PRO_DELIMITER', '|' );
		}
	}

	/**
	 * Include ProSports core and modules.
	 */
	private function includes() {
		$dir = scandir( $this->plugin_path() . '/includes' );
		if ( $dir ) {
			foreach ( $dir as $module ) {
				$path = $this->plugin_path() . '/includes/' . $module;
				if ( $path && substr( $module, 0, 1 ) !== '.' ) {
					$file = '/' . $module . '.php';
					if ( is_readable( $path . $file ) ) {
						include_once( $path . $file );
					}
				}
			}
		}
	}

	/**
	 * Show action links on the plugin screen.
	 *
	 * @param mixed $links
	 * @return array
	 */
	public function action_links( $links ) {
		return array_merge( array(
			'<a href="' . admin_url( 'admin.php?page=prosports' ) . '">' . __( 'Settings', 'prosports' ) . '</a>',
			
		), $links );
	}

	public function deactivate_core() {
		if ( is_plugin_active( 'prosports/prosports.php' ) ) {
			deactivate_plugins( 'prosports/prosports.php' );
		}
	}

	/**
	 * Load Localisation files.
	 *
	 * Note: the first-loaded translation file overrides any following ones if the same translation is present
	 */
	public function load_module_translations() {
		$locale = apply_filters( 'plugin_locale', get_locale(), 'prosports' );

		// Global + Frontend Locale
		load_textdomain( 'prosports', dirname( __FILE__ ) . "/languages/prosports-pro-$locale.mo" );
	}

	/**
	 * Output generator tag to aid debugging.
	 */
	function generator_tag( $gen, $type ) {
		switch ( $type ) {
			case 'html':
				$gen .= "\n" . '<meta name="generator" content="ProSports Pro ' . esc_attr( SP_PRO_VERSION ) . '">';
				break;
			case 'xhtml':
				$gen .= "\n" . '<meta name="generator" content="ProSports Pro ' . esc_attr( SP_PRO_VERSION ) . '" />';
				break;
		}
		return $gen;
	}

	/**
	 * Unrequire ProSports core
	 */
	function unrequire_core( $plugins = array() ) {
		foreach ( $plugins as $index => $plugin ):
			if ( sp_array_value( $plugin, 'slug' ) == 'prosports' ) unset( $plugins[ $index ] );
		endforeach;
		return $plugins;
	}

	/** Helper functions ******************************************************/

	/**
	 * Get the plugin url.
	 *
	 * @return string
	 */
	public function plugin_url() {
		return untrailingslashit( plugins_url( '/', __FILE__ ) );
	}

	/**
	 * Get the plugin path.
	 *
	 * @return string
	 */
	public function plugin_path() {
		return untrailingslashit( plugin_dir_path( __FILE__ ) );
	}

	/**
	 * Get the template path.
	 *
	 * @return string
	 */
	public function template_path() {
		return apply_filters( 'SP_PRO_TEMPLATE_PATH', 'prosports-pro/' );
	}
}

endif;

new ProSports_Pro();
