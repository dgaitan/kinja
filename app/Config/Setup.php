<?php
/**
 * Plugin or Theme Loader.
 *
 * @package kinja
 */

namespace App\Config;

defined( 'ABSPATH' ) || exit;

use KindHumans\Kinja\Hook\Hooker;

class Setup extends Hooker {

	/**
	 * Call here all the hooks to setup
	 * the plugin or theme
	 *
	 * @since 1.0.0
	 */
    public function initialize() {
        $this->action( 'after_setup_theme', 'setup' );
		$this->action( 'after_setup_theme', 'register_menus' );
        $this->action( 'wp_enqueue_scripts', 'dequeue_scripts' );
        $this->action( 'get_footer', 'frontend_assets' );
        $this->action( 'admin_enqueue_scripts', 'admin_assets' );
        $this->action( 'widgets_init', 'sidebars' );
    }

    public function dequeue_scripts() {}

	/**
     * Frontend stylesheets and javascript
     *
     * @return void
     */
    public function frontend_assets() {

    }

    /**
     * Admin stylesheets and javascript
     *
     * @return void
     */
    public function admin_assets() {}

	/**
     * Register Sidebars
     *
     * @return void
     */
    public function sidebars() {}

    /**
     * Load Main Setup for theme
     *
     * @return void
     */
    public function setup() {}

    /**
     * Register Menus
     *
     */
    public function register_menus() {}
}
