<?php
/**
 * This file has the config and loader of components
 * for app.
 */

return array(
    /**
     * -----------------------------------------
     * Setup
     * -----------------------------------------
     *
     * Set the setup class
     */
    'setup' => 'App\Config\Setup',

    /**
     * -----------------------------------------
     * Theme Settings
     * -----------------------------------------
     *
     * Set the theme setting class
     */
    // 'theme_settings' => 'App\Modules\Settings',

    /**
     * -----------------------------------------
     * Environments
     * -----------------------------------------
     *
     * Set the site domains for each environment
     *
     */
    'envs' => array(
        'prod'    => 'kinja.com',
        'staging' => 'staging.kinja.com'
    ),

    /**
     * -----------------------------------------
     * Hooks
     * -----------------------------------------
     *
     * Set the hook classes
     */
    'hooks' => array(),

    /**
     * -----------------------------------------
     * Blocks
     * -----------------------------------------
     *
     * Set the gutenberg block classes
     */
    'blocks' => array(),

    /**
     * -----------------------------------------
     * Modules
     * -----------------------------------------
     *
     * Set the modules
     */
    'modules' => array(
    )
);
