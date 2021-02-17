<?php
/**
 * App Initializer
 *
 * @package kinja
 * @since   2.0.0
 * @author  David Gaitan <jdavid.gaitan@gmail.com>
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( '_APP_VERSION' ) ) define( '_APP_VERSION', '1.0.0' );
if ( ! defined( '_APP_NAME' ) ) define( '_APP_NAME', 'App' );
if ( ! defined( '_APP_ROOT_NAME' ) ) define( '_APP_ROOT_NAME', 'kinja' );

require( dirname( __FILE__ ) ) . '/vendor/autoload.php';

use App\App;

/**
 * Load Kinja instance to prevent use globally
 *
 * @return App
 */
function Kinja() {
	return App::instance();
}

Kinja();

global $kinja;
$kinja = Kinja();
