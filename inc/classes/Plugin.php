<?php
/**
 * Plugin class.
 *
 * @since 0.0.0
 * @package jw-plugin-starter
 */

namespace JohnWatkins0\JwPluginStarter;

/**
 * Plugin class.
 *
 * @since 0.0.0
 */
class Plugin {
	/**
	 * The main plugin file path.
	 *
	 * @since 0.0.0
	 * @var string
	 */
	private $plugin_file;

	/**
	 * Class constructor.
	 *
	 * @param string $plugin_file The main plugin file path.
	 */
	public function __construct( string $plugin_file ) {
		$this->plugin_file = $plugin_file;
	}

	/**
	 * Runs setup.
	 *
	 * @since 0.0.0
	 * @return void
	 */
	public function init() {

	}
}
