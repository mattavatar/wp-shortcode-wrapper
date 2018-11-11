<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.linkedin.com/in/matt-kirk-b281a1122
 * @since      1.0.0
 *
 * @package    Wp_Shortcode_Wrapper
 * @subpackage Wp_Shortcode_Wrapper/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Shortcode_Wrapper
 * @subpackage Wp_Shortcode_Wrapper/includes
 * @author     Matt Kirk <vp@myagame.net>
 */
class Wp_Shortcode_Wrapper_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-shortcode-wrapper',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
