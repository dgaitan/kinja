# Hooks

To define a Hook file and load it in the app. Just create a file with the next
structure:

```php
<?php
/**
 * Your file Hooks
 *
 * @package     kinja
 * @version     1.0.0
 */

namespace App\Hooks;

defined( 'ABSPATH' ) || exit;

use KindHumans\Kinja\Hook\Hooker;

class MyHooks extends Hooker {

    /**
     * Hook initializer
	 * 
	 * In this initializer method, load all the hooks calling
	 * the action() method sending the params.
     */
    public function initialize() {
		$this->action( 'some_wordpress_action', 'callback_to_fire_this_action', 10, 2 );
		$this->filter( 'some_wordpress_filter', 'callback_to_fire_this_filter', 10, 2 );
    }

    /**
     * Some description about your callback for an action
     *
     */
    public function callback_to_fire_this_action( $arg_one, $arg_two ) {}
	
	/**
     * Some description about your callback for a filter
     *
     */
	public function callback_to_fire_this_filter() {}
}

```

Remember allways load this hook on the main hooks loader inside
the config file at `config/app.php`

```php
/**
 * -----------------------------------------
 * Hooks
 * -----------------------------------------
 *
 * Set the hook classes
 */
'hooks' => array(
	'App\Hooks\MyHooks'
)
```
