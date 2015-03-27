<?php
/*
Plugin Name: ProSports Tournaments
Plugin URI: http://prosportspro.com/
Description: Adds tournament groups and brackets to ProSports.
Author: ProSports
Author URI: http://prosportspro.com
Version: 1.4
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Main ProSports Tournaments Class
 *
 * @class ProSports_Tournaments
 * @version	1.4
 */
class ProSports_Tournaments {

	/**
	 * Constructor
	 */
	public function __construct() {
		// Define constants
		$this->define_constants();

		// Include required files
		$this->includes();

		// Hooks
		register_activation_hook( __FILE__, array( $this, 'install' ) );
		add_action( 'init', array( $this, 'init' ) );
		add_action( 'prosports_include_post_type_handlers', array( $this, 'include_post_type_handlers' ) );
		add_filter( 'prosports_permalink_slugs', array( $this, 'add_permalink_slug' ) );
		add_filter( 'prosports_post_types', array( $this, 'add_post_type' ) );
		add_filter( 'prosports_screen_ids', array( $this, 'add_screen_ids' ) );
		add_action( 'prosports_single_tournament_content', array( $this, 'output_tournament_winner' ), 0 );
		add_action( 'prosports_single_tournament_content', array( $this, 'output_tournament_bracket' ), 10 );
		add_action( 'prosports_after_single_tournament', 'prosports_output_br_tag', 100 );
		add_filter( 'prosports_formats', array( $this, 'add_formats' ) );
		add_filter( 'prosports_text', array( $this, 'add_text_options' ) );
	    add_filter( 'prosports_enqueue_styles', array( $this, 'add_styles' ) );
		add_filter( 'prosports_menu_items', array( $this, 'add_menu_item' ), 30 );
		add_filter( 'prosports_event_settings', array( $this, 'add_options' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
		add_action( 'prosports_frontend_css', array( $this, 'frontend_css' ) );

		if ( defined( 'SP_PRO_PLUGIN_FILE' ) )
			register_activation_hook( SP_PRO_PLUGIN_FILE, array( $this, 'install' ) );
	}

	/**
	 * Define constants.
	*/
	private function define_constants() {
		if ( !defined( 'SP_TOURNAMENTS_VERSION' ) )
			define( 'SP_TOURNAMENTS_VERSION', '1.4' );

		if ( !defined( 'SP_TOURNAMENTS_URL' ) )
			define( 'SP_TOURNAMENTS_URL', plugin_dir_url( __FILE__ ) );

		if ( !defined( 'SP_TOURNAMENTS_DIR' ) )
			define( 'SP_TOURNAMENTS_DIR', plugin_dir_path( __FILE__ ) );
	}

	/**
	 * Include required files.
	*/
	private function includes() {
		include_once( 'includes/class-sp-tournament.php' );

		if ( ! is_admin() || defined( 'DOING_AJAX' ) ) {
			$this->frontend_includes();
		}
	}

	/**
	 * Include required frontend files.
	 */
	public function frontend_includes() {
		include_once( 'includes/class-sp-tournament-template-loader.php' );
	}

	/**
	 * Init plugin when WordPress Initialises.
	 */
	public function init() {
		// Register post type
		$this->register_post_type();
	}

	public function register_post_type() {
		register_post_type( 'sp_tournament',
			apply_filters( 'prosports_register_post_type_tournament',
				array(
					'labels' => array(
						'name' 					=> __( 'Tournaments', 'prosports' ),
						'singular_name' 		=> __( 'Tournament', 'prosports' ),
						'add_new_item' 			=> __( 'Add New Tournament', 'prosports' ),
						'edit_item' 			=> __( 'Edit Tournament', 'prosports' ),
						'new_item' 				=> __( 'New', 'prosports' ),
						'view_item' 			=> __( 'View', 'prosports' ),
						'search_items' 			=> __( 'Search', 'prosports' ),
						'not_found' 			=> __( 'No results found.', 'prosports' ),
						'not_found_in_trash' 	=> __( 'No results found.', 'prosports' ),
					),
					'public' 				=> true,
					'show_ui' 				=> true,
					'capability_type' 		=> 'sp_tournament',
					'map_meta_cap' 			=> true,
					'publicly_queryable' 	=> true,
					'exclude_from_search' 	=> false,
					'hierarchical' 			=> false,
					'rewrite' 				=> array( 'slug' => get_option( 'prosports_tournament_slug', 'tournament' ) ),
					'supports' 				=> array( 'title', 'author', 'thumbnail' ),
					'has_archive' 			=> false,
					'show_in_nav_menus' 	=> true,
					'show_in_menu' 			=> 'edit.php?post_type=sp_event',
					'show_in_admin_bar' 	=> true,
				)
			)
		);
	}

	/**
	 * Add post type
	 */
	public static function add_post_type( $post_types = array() ) {
		$post_types[] = 'sp_tournament';
		return $post_types;
	}
	/**
	 * Add screen ids
	 */
	public static function add_screen_ids( $screen_ids = array() ) {
		$screen_ids[] = 'edit-sp_tournament';
		$screen_ids[] = 'sp_tournament';
		return $screen_ids;
	}

	/**
	 * Output the tournament winner.
	 *
	 * @access public
	 * @return void
	 */
	public static function output_tournament_winner() {
		$id = get_the_ID();
		sp_get_template( 'tournament-winner.php', array( 'id' => $id ), 'tournament-winner', SP_TOURNAMENTS_DIR . 'templates/' );
	}

	/**
	 * Output the tournament bracket.
	 *
	 * @access public
	 * @return void
	 */
	public static function output_tournament_bracket() {
		$id = get_the_ID();
		sp_get_template( 'tournament-bracket.php', array( 'id' => $id ), 'tournament-bracket', SP_TOURNAMENTS_DIR . 'templates/' );
	}

	/**
	 * Conditonally load classes and functions only needed when viewing the post type.
	 */
	public function include_post_type_handlers() {
		include_once( 'includes/class-sp-tournament-meta-boxes.php' );
		include_once( 'includes/class-sp-admin-cpt-tournament.php' );
	}

	/**
	 * Add slug to permalink options.
	 *
	 * @return array
	 */
	public function add_permalink_slug( $slugs ) {
		$slugs[] = array( 'tournament', __( 'Tournaments', 'prosports' ) );
		return $slugs;
	}

	/**
	 * Add options to settings page.
	 *
	 * @return array
	 */
	public function add_options( $settings ) {
		return array_merge( $settings, array(
			array( 'title' => __( 'Tournaments', 'prosports' ), 'type' => 'title', 'id' => 'tournament_options' ),

			array(
				'title'     => __( 'Teams', 'prosports' ),
				'desc' 		=> __( 'Display logos', 'prosports' ),
				'id' 		=> 'prosports_tournament_show_logos',
				'default'	=> 'yes',
				'type' 		=> 'checkbox',
			),

			array( 'type' => 'sectionend', 'id' => 'tournament_options' ),
		) );
	}


	/** 
	 * Add formats.
	 */
	public function add_formats( $formats ) {
		$formats['event']['tournament'] = __( 'Tournament', 'prosports' );
		return $formats;
	}

	/**
	 * Add text options 
	 */
	public function add_text_options( $options = array() ) {
		return array_merge( $options, array(
			__( 'Winner', 'prosports' ),
		) );
	}

	/**
	 * Add styles to SP frontend
	 */
	public function add_styles( $styles = array() ) {
		$styles['prosports-tournaments'] = array(
			'src'     => str_replace( array( 'http:', 'https:' ), '', SP_TOURNAMENTS_URL ) . 'css/prosports-tournaments.css',
			'deps'    => 'prosports-general',
			'version' => SP_TOURNAMENTS_VERSION,
			'media'   => 'all'
		);

		if ( is_rtl() ) {
			$styles['prosports-tournaments-rtl'] = array(
				'src'     => str_replace( array( 'http:', 'https:' ), '', SP_TOURNAMENTS_URL ) . 'css/prosports-tournaments-rtl.css',
				'deps'    => 'prosports-tournaments',
				'version' => SP_TOURNAMENTS_VERSION,
				'media'   => 'all'
			);
		} else {
			$styles['prosports-tournaments-ltr'] = array(
				'src'     => str_replace( array( 'http:', 'https:' ), '', SP_TOURNAMENTS_URL ) . 'css/prosports-tournaments-ltr.css',
				'deps'    => 'prosports-tournaments',
				'version' => SP_TOURNAMENTS_VERSION,
				'media'   => 'all'
			);
		}
		return $styles;
	}

	/**
	 * Install
	 */
	public function install() {
		$this->add_capabilities();
		$this->register_post_type();

		// Update version
		update_option( 'prosports_tournaments_version', SP_TOURNAMENTS_VERSION );

		// Flush rules after install
		flush_rewrite_rules();
	}

	/**
	 * Add capabilities
	 */
	public function add_capabilities() {
		global $wp_roles;

		if ( class_exists( 'WP_Roles' ) ):
			if ( ! isset( $wp_roles ) ):
				$wp_roles = new WP_Roles();
			endif;
		endif;

		if ( is_object( $wp_roles ) ):
			$capability_type = 'sp_tournament';
			$capabilities = array(
				"edit_{$capability_type}",
				"read_{$capability_type}",
				"edit_{$capability_type}s",
				"edit_published_{$capability_type}s",
				"assign_{$capability_type}_terms",
			);

			foreach ( $capabilities as $cap ):
				$wp_roles->add_cap( 'sp_team_manager', $cap );
			endforeach;

			$capabilities = array_merge( $capabilities, array(
				"delete_{$capability_type}",
				"edit_others_{$capability_type}s",
				"publish_{$capability_type}s",
				"read_private_{$capability_type}s",
				"delete_{$capability_type}s",
				"delete_private_{$capability_type}s",
				"delete_published_{$capability_type}s",
				"delete_others_{$capability_type}s",
				"edit_private_{$capability_type}s",
				"manage_{$capability_type}_terms",
				"edit_{$capability_type}_terms",
				"delete_{$capability_type}_terms",
			));

			foreach ( $capabilities as $cap ):
				$wp_roles->add_cap( 'sp_league_manager', $cap );
				$wp_roles->add_cap( 'administrator', $cap );
			endforeach;
		endif;
	}

	/**
	 * Add menu item
	 */
	public function add_menu_item( $items ) {
		$items[] = 'edit.php?post_type=sp_tournament';
		return $items;
	}

	/**
	 * Add taxonomy to event
	 */
	public function add_event_taxonomy( $taxonomies ) {
		$taxonomies = array_merge( array( 'sp_group' => 'sp_tournament' ), $taxonomies );
		return $taxonomies;
	}

	/**
	 * Register/queue frontend scripts.
	 *
	 * @access public
	 * @return void
	 */
	public function load_scripts() {
		wp_enqueue_script( 'prosports-tournaments', SP_TOURNAMENTS_URL .'js/prosports-tournaments.js', array( 'jquery' ), time(), true );
	}

	/**
	 * Enqueue scripts
	 */
	public function admin_enqueue_scripts() {
		$screen = get_current_screen();

		wp_enqueue_style( 'prosports-tournaments-admin', SP_TOURNAMENTS_URL . 'css/admin.css', array( 'prosports-admin-menu-styles' ), time() );

		if ( in_array( $screen->id, array( 'sp_tournament', 'edit-sp_tournament' ) ) ) {
			wp_enqueue_script( 'prosports-tournaments-admin', SP_TOURNAMENTS_URL . 'js/admin.js', array( 'jquery' ), SP_TOURNAMENTS_VERSION );
		}
	}

	public static function frontend_css( $colors ) {
		if ( isset( $colors['highlight'] ) ) {
			echo '.sp-tournament-bracket .sp-event{border-color:' . $colors['highlight'] . ' !important}';
			echo '.sp-tournament-bracket .sp-team .sp-team-name:before{border-left-color:' . $colors['highlight'] . ' !important}';
		}
		if ( isset( $colors['text'] ) ) {
			echo '.sp-tournament-bracket .sp-team .sp-team-name{color:' . $colors['text'] . ' !important}';
		}
		if ( isset( $colors['heading'] ) ) {
			echo '.sp-tournament-bracket .sp-team .sp-team-name.sp-heading{color:' . $colors['heading'] . ' !important}';
		}
	}
}

new ProSports_Tournaments();
