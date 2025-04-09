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

class Actions {
    /**
     * The post types to register.
     *
     * @since  1.0.0
     * @access public
     * @var    array
     */
    public $post_types = [];

    /**
     * Constructor.
     *
     * @since  1.0.0
     * @access public
     *
     * @return void
     */
    public function __construct() {
        $this->post_types = [
            'mg_services' => [
                'name'          => esc_html__( 'Services', 'mg-experience' ),
                'singular_name' => esc_html__( 'Service', 'mg-experience' ),
                'plural_name'   => esc_html__( 'Services', 'mg-experience' ),
                'menu_icon'     => 'dashicons-star-filled',
                'supports'      => $this->get_supports(),
                'has_archive'   => true,
                'rewrite'       => [
                    'slug' => 'service'
                ],
            ],
            'mg_case_studies' => [
                'name'          => esc_html__( 'Case Studies', 'mg-experience' ),
                'singular_name' => esc_html__( 'Case Study', 'mg-experience' ),
                'plural_name'   => esc_html__( 'Case Studies', 'mg-experience' ),
                'menu_icon'     => 'dashicons-star-filled',
                'supports'      => $this->get_supports(),
                'has_archive'   => true,
                'rewrite'       => [
                    'slug' => 'case-study'
                ],
            ],
            'mg_code_snippets' => [
                'name'          => esc_html__( 'Code Snippets', 'mg-experience' ),
                'singular_name' => esc_html__( 'Code Snippet', 'mg-experience' ),
                'plural_name'   => esc_html__( 'Code Snippets', 'mg-experience' ),
                'menu_icon'     => 'dashicons-star-filled',
                'supports'      => $this->get_supports(),
                'has_archive'   => true,
                'rewrite'       => [
                    'slug' => 'code-snippet'
                ],
            ],
            'mg_portfolio' => [
                'name'          => esc_html__( 'Portfolios', 'mg-experience' ),
                'singular_name' => esc_html__( 'Portfolio', 'mg-experience' ),
                'plural_name'   => esc_html__( 'Portfolios', 'mg-experience' ),
                'menu_icon'     => 'dashicons-star-filled',
                'supports'      => $this->get_supports(),
                'has_archive'   => true,
                'rewrite'       => [
                    'slug' => 'portfolio'
                ],
            ],
        ];

        // Register post types.
        add_action( 'init', [ $this, 'register_post_types' ] );
    }

    /**
     * Get supports.
     * 
     * @since 1.0.0
     * 
     * @return array
     */
    public function get_supports() {
        return [
            'title',
            'editor',
            'thumbnail',
            'custom-fields'
        ];
    }

    /**
     * Register post types.
     *
     * @since  1.0.0
     * @access public
     *
     * @return void
     */
    public function register_post_types() {
        foreach ( $this->post_types as $post_type => $args ) {
            register_post_type( $post_type, [
                'labels'             => [
                    'name'          => $args['name'],
                    'singular_name' => $args['singular_name'],
                    'menu_name'     => $args['plural_name'],
                ],
                'public'             => true,
                'has_archive'        => $args['has_archive'],
                'rewrite'            => $args['rewrite'],
                'supports'           => $args['supports'],
                'menu_icon'          => $args['menu_icon'],
                'show_in_rest'       => true,
            ] );
        }
    }
}