# Modules

A module can be a feature/functionality of the theme/plugin

To make a module just create a folder in camelcase with the name of the module. For example your module name can be: "Store". So, you will need to create a folder named: "Store". Inside of the "Store" folder, the most important file is the register of the module. So you should create a `Register.php` file inside your module folder, like this:

```php
<?php
/**
 * My Module Register
 */

namespace App\Modules\MyModule;

defined( 'ABSPATH' ) || exit;

use KindHumans\Kinja\Registers\ModuleRegister;

class Register extends ModuleRegister {

    /**
     * Execute extra methods before construct the module
     *
     */
    public function boot() {}

    /**
     * Module Name
     *
     * @return string
     */
    public function get_module_name() : string {
        return 'MyModule';
    }

    /**
     * MOdule Slug
     *
     * @return string
     */
    public static function get_slug() : string {
        return 'my_module';
    }
}

```

The last step is load this module in the config file:

```php
/**
 * -----------------------------------------
 * Modules
 * -----------------------------------------
 *
 * Set the modules
 */
'modules' => array(
	'MyModule' => 'KindHumans\Modules\MyModule\Register'
)
```

The required file to load actions and filters will be the
own hooks loader class for this module. So, just define a
class Hooks.php and Kinja will load the file automatically.

The Hooks.php file should have the next setup

```php
/**
 * My Module Hooks
 */

namespace App\Modules\MyModule;

defined( 'ABSPATH' ) || exit;

use KindHuman\Kinja\Hook\Hooker;

class Hooks extends Hooker {

	/**
	 * Load here the action and filters
	 * for this module
	 */
	public function initialize() {}
}
```
