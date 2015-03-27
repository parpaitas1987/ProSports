<?php
/**
 * ProSports formats
 *
 * The ProSports formats class stores preset sport data.
 *
 * @class 		SP_Formats
 * @version     1.4
 * @package		ProSports/Classes
 * @category	Class
 * @author 		ProSports
 */
class SP_Formats {

	/** @var array Array of formats */
	private $data;

	/**
	 * Constructor for the formats class - defines all preset formats.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {
		$this->data = apply_filters( 'prosports_formats', array(
			'event' => array(
				'league' => __( 'Competitive', 'prosports' ),
				'friendly' => __( 'Friendly', 'prosports' ),
			),
			'calendar' => array(
				'calendar' => __( 'Calendar', 'prosports' ),
				'list' => __( 'List', 'prosports' ),
				'blocks' => __( 'Blocks', 'prosports' ),
			),
			'list' => array(
				'list' => __( 'List', 'prosports' ),
				'gallery' => __( 'Gallery', 'prosports' ),
			),
		));
	}

	public function __get( $key ) {
		return ( array_key_exists( $key, $this->data ) ? $this->data[ $key ] : null );
	}

	public function __set( $key, $value ){
		$this->data[ $key ] = $value;
	}
}
