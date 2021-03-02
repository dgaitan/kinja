<?php
/**
 * Account related controller
 *
 */

namespace App\Controllers;

defined( 'ABSPATH' ) || exit;

use KindHumans\Kinja\Http\Response;
use App\Auth\Account;

class AccountController {

	/**
	 * My Account Page
	 *
	 * @return void
	 */
	public function my_account() {
		$current_user = new Account();

		$context = array(
			'current_user' => $current_user,
			'active'	   => 'index'
		);

		return Response::render( 'account/dashboard', $context );
	}
}
