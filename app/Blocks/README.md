# Gutenberg Blocks

For this feature is necessary advanced custom fields plugin.

To define a block class, just create the next class:

```php
<?php
/**
 * My Custom Block
 *
 *
 * @package app
 */

namespace App\Blocks;

defined( 'ABSPATH' ) || exit;

use KindHumans\Kinja\Blocks\BlockRegister;

class MyBlock extends BlockRegister {

    /**
     * Set the action hook
     *
     */
    public function initialize() {
        $this->action( 'acf/init', 'my_block_callback' );
    }

    /**
     * Load the BLock
     *
     */
    public function my_block_callback() {
        // check function exists
        if ( function_exists( 'acf_register_block' ) ) {

            // register a testimonial block
            acf_register_block( array(
                'name'				=> 'my_block',
                'title'				=> __( 'My Block', 'slug' ),
                'description'		=> __( 'This is a description for my Block', 'slug' ),
                'render_callback'	=> array( $this, 'render' ),
                'category'			=> 'formatting',
                'icon'				=> $this->get_svg_icon(),
                'keywords'			=> array( 'blocks', 'features', 'content' ),
                'example'           => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'title'       => "Some Title",
                            'content'     => "Dummy content",
                            'is_preview'  => true
                        )
                    )
                )
            ));
        }
    }

}

```

Then just need to register this to the config file:

```php
/**
 * -----------------------------------------
 * Blocks
 * -----------------------------------------
 *
 * Set the gutenberg block classes
 */
'blocks' => array(
	'App\Blocks\MyBlock'
),
```
