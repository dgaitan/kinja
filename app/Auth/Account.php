<?php
/**
 * Account Handler
 */

namespace App\Auth;

defined( 'ABSPATH' ) || exit;

use KindHumans\Kinja\Auth\Account as BaseAccount;

class Account extends BaseAccount {

	public $meta = array();

}
