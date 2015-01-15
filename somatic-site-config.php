<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://somaticstudios.com
 * @since             1.0
 * @package           somatic-site-config
 *
 * @wordpress-plugin
 * Plugin Name:       Somatic Site Config
 * Plugin URI:        https://github.com/israelcurtis/somatic-site-config
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress dashboard.
 * Version:           1.0
 * Author:            Israel Curtis
 * Author URI:        http://somaticstudios.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       somatic-framework-setup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-soma-setup-activator.php
 */
function activate_soma_setup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-soma-setup-activator.php';
	Soma_Setup_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-soma-setup-deactivator.php
 */
function deactivate_soma_setup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-soma-setup-deactivator.php';
	Soma_Setup_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_soma_setup' );
register_deactivation_hook( __FILE__, 'deactivate_soma_setup' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-soma-setup.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_soma_setup() {

	$plugin = new Soma_Setup();
	$plugin->run();

}
run_soma_setup();
