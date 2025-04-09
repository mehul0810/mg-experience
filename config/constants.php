<?php
// Bailout, if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

# Set constants.
define( 'MG_EXPERIENCE_VERSION', '1.0.0' );
define( 'MG_EXPERIENCE_FILE', dirname( dirname( __FILE__ ) ) . '/mg-experience.php' );
define( 'MG_EXPERIENCE_PATH', plugin_dir_path( MG_EXPERIENCE_FILE ) );
define( 'MG_EXPERIENCE_URL', plugin_dir_url( MG_EXPERIENCE_FILE ) );