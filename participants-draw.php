<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://krupalpanchal.in
 * @since             1.0.0
 * @package           Participants_Draw
 *
 * @wordpress-plugin
 * Plugin Name:       Participants Draw
 * Plugin URI:        https://wordpress.org/plugins/participants-draw/
 * Description:       This plugin will help you to draw the participants for your game or any other activities.
 * Version:           1.0.0
 * Author:            Krupal Panchal
 * Author URI:        https://krupalpanchal.in/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       participants-draw
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
define( 'PARTICIPANTS_DRAW_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-participants-draw-activator.php
 */
function activate_participants_draw() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-participants-draw-activator.php';
	Participants_Draw_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-participants-draw-deactivator.php
 */
function deactivate_participants_draw() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-participants-draw-deactivator.php';
	Participants_Draw_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_participants_draw' );
register_deactivation_hook( __FILE__, 'deactivate_participants_draw' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-participants-draw.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_participants_draw() {

	$plugin = new Participants_Draw();
	$plugin->run();

}
run_participants_draw();
