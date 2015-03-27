<?php
/**
 * The template for displaying tournament content.
 *
 * Override this template by copying it to yourtheme/prosports/content-single-tournament.php
 *
 * @author 		ProSports
 * @package 	ProSports_Tournaments
 * @version     1.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( ! in_the_loop() ) return; // Return if not in main loop

/**
 * prosports_before_single_tournament hook
 */
do_action( 'prosports_before_single_tournament' );

if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}

do_action( 'prosports_single_tournament_content' );

do_action( 'prosports_after_single_tournament' );
