<?php
/**
 * App loader
 *
 * This class load the entire application
 * for WP plugin or theme.
 *
 * @package kinja
 * @since 1.0.0
 */

namespace App;

defined( 'ABSPATH' ) || exit;

use KindHumans\Kinja\Registers\Theme;

class App extends Theme {

    public function get_textdomain() : string {
        return 'kinja';
    }
}
