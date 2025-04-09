<?php
/**
 * MG Experience | Main File.
 *
 * @package WordPress
 * @subpackage MG Experience
 * @since 1.0.0
 */

namespace MG\Experience;

use MG\Experience\Includes;

// Bailout, if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Loads and registers plugin functionality through WordPress hooks.
 *
 * @since 1.0.0
 */
final class Plugin {

	/**
	 * Registers functionality with WordPress hooks.
	 *
	 * @since  1.0.0
	 * @access public
	 *
	 * @return void
	 */
	public function register() {
		// Handle plugin activation and deactivation.
		register_activation_hook( MG_EXPERIENCE_FILE, [ $this, 'activate' ] );
		register_deactivation_hook( MG_EXPERIENCE_FILE, [ $this, 'deactivate' ] );

		// Register services used throughout the plugin.
		add_action( 'plugins_loaded', [ $this, 'register_services' ] );
	}

	/**
	 * Registers the individual services of the plugin.
	 *
	 * @since  1.0.0
	 * @access public
	 *
	 * @return void
	 */
	public function register_services() {
        new Includes\Actions();
	}

	/**
	 * Handles activation procedures during installation and updates.
	 *
	 * @since  1.0.0
	 * @access public
	 *
	 * @param bool $network_wide Optional. Whether the plugin is being enabled on
	 *                           all network sites or a single site. Default false.
	 *
	 * @return void
	 */
	public function activate( $network_wide = false ) {}

	/**
	 * Handles deactivation procedures.
	 *
	 * @since  1.0.0
	 * @access public
	 *
	 * @return void
	 */
	public function deactivate() {}
}