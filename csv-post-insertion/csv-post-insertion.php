<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              hassanmujtaba.com
 * @since             1.0.0
 * @package           Csv_Post_Insertion
 *
 * @wordpress-plugin
 * Plugin Name:       Insert Posts From CSV
 * Plugin URI:        hassanmujtaba.com/csv-post-insertion
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Hassan Mujtaba
 * Author URI:        hassanmujtaba.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       csv-post-insertion
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CSV_POST_INSERTION_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-csv-post-insertion-activator.php
 */
function activate_csv_post_insertion() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-csv-post-insertion-activator.php';
	Csv_Post_Insertion_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-csv-post-insertion-deactivator.php
 */
function deactivate_csv_post_insertion() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-csv-post-insertion-deactivator.php';
	Csv_Post_Insertion_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_csv_post_insertion' );
register_deactivation_hook( __FILE__, 'deactivate_csv_post_insertion' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-csv-post-insertion.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_csv_post_insertion() {

	$plugin = new Csv_Post_Insertion();
	$plugin->run();

}
run_csv_post_insertion();
