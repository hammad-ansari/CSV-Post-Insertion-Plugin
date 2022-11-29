<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       hassanmujtaba.com
 * @since      1.0.0
 *
 * @package    Csv_Post_Insertion
 * @subpackage Csv_Post_Insertion/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Csv_Post_Insertion
 * @subpackage Csv_Post_Insertion/includes
 * @author     Hassan Mujtaba <hassanmujtaba4632@gmail.com>
 */
class Csv_Post_Insertion_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'csv-post-insertion',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
