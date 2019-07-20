<?php
/**
 * Plugin Name: JW Plugin Starter
 *
 * @package jw-plugin-starter
 */

/**
 * Plugin bootstrap file.
 */

require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Initiates the main plugin class and provides its instance.
 *
 * @since 0.0.0
 * @return JohnWatkins0\JwPluginStarter\Plugin
 */
function jw_plugin_starter() : JohnWatkins0\JwPluginStarter\Plugin {
	static $instance;

	if ( is_null( $instance ) ) {
		$instance = new JohnWatkins0\JwPluginStarter\Plugin( __FILE__ );
		$instance->init();
	}

	return $instance;
}
add_action( 'jw_plugin_starter', 'jw_plugin_starter' );

do_action( 'jw_plugin_starter' );
