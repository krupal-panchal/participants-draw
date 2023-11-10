<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://krupalpanchal.in
 * @since      1.0.0
 *
 * @package    Participants_Draw
 * @subpackage Participants_Draw/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Participants_Draw
 * @subpackage Participants_Draw/includes
 * @author     Krupal Panchal <krupalpanchal1506@gmail.com>
 */
class Participants_Draw_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'participants-draw',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
