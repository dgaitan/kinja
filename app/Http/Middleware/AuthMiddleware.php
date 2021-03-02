<?php
/**
 * Simple Auth Required Middleware
 */

namespace App\Http\Middleware;

defined( 'ABSPATH' ) || exit;

use KindHumans\Kinja\Http\Middleware;

class AuthMiddleware extends Middleware {

	/**
	 * Handle Middleware
	 *
	 * If use is not logged in, redirect to login
	 *
	 */
	public function handle() {
		if ( ! is_user_logged_in() ) {
			wp_redirect( '/login' );
			die();
		}
	}
}
