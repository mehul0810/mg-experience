<?php
/**
 * MG Experience | Actions.
 * 
 * @package WordPress
 * @subpackage MG Experience
 * @since 1.0.0
 */

namespace MG\Experience\Includes;


// Bailout, if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Filters {
    /**
	 * Constructor.
	 *
	 * @since  1.0.0
	 * @access public
	 *
	 * @return void
	 */
	public function __construct() {
		
		add_filter( 'edd_purchase_download_form', [ $this, 'custom_hide_all_edd_purchase_forms' ],10, 2 );
		
	}

    /**
     * Hide all EDD purchase forms
     *
     * @param string $form
     * @param array  $atts
     *
     * @return string
     */
    public function custom_hide_all_edd_purchase_forms( $form, $atts ) {

        return ''; // Completely hides all EDD purchase forms

    }
}