<?php
/**
 * Plugin Name: MG Experience
 * Description: A plugin to manage the MG Experience.
 * Version: 1.0.0
 * Author: Mehul Gohil
 * Author URI: https://mehulgohil.com   
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mg-experience
 * Domain Path: /languages
 * Requires at least: 5.0
 * Requires PHP: 7.4
 * Tested up to: 6.3
 */

namespace MG\Experience;

// Bail if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once __DIR__ . '/config/constants.php';

// Automatically loads files used throughout the plugin.
require_once MG_EXPERIENCE_PATH . 'vendor/autoload.php';

// Initialize the plugin.
$plugin = new Plugin();
$plugin->register();