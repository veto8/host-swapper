<?php

namespace Domain-swapping\App\base;

defined( 'ABSPATH' ) or die( 'Something went wrong' );

/**
 * Fired during plugin deactivation
 *
 * @link       https://myridia.com
 * @since      1.0.0
 *
 * @package    Domain-swapping
 * @subpackage Wphc/App/base
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.1
 * @package    Domain-swapping
 * @subpackage Domain-swapping/App/base
 * @author     Myridia <info@myridia.com>
 */

class WPHCDeactivate{
    function __construct() {
    }

    public function deactivate(){
        delete_option('wphc_setting_option');
    }
}
