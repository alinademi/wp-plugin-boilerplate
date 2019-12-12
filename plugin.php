<?php 
/**
 * @link            http://wp-plugin-boilerplate.com
 * @since           1.0.0
 * @package         WP_Plugin_Boilerplate
 * 
 * Plugin Name:     WP Plugin Boilerplate
 * Plugin URI:      http://wp-plugin-boilerplate.com/
 * Description:     A WordPress plugin development boilerplate.
 * Version:         1.0.0 
 * Author:          MD Rabiul Islam Robi
 * Author URI:      http://robicse11127.github.io/
 * License:         GPLv3 or later
 * License URI:     http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:     wp-plugin-boilerplate
 */
if( !defined( 'ABSPATH' ) ) exit();
/**
 * Require Autoloader
 */
require_once 'vendor/autoload.php';
/**
 * Require Helper Functions
 */
require_once 'helpers/helpers.php';

use WPPB\Admin\Admin;
use WPPB\Front\Front;
use WPPB\Blocks\Blocks;

/**
 * Define Plugin Constants
 * 
 * @since 1.0.0
 */
define( 'WPPB_VERISON', '1.0.0' );
define( 'WPPB_PLUGIN_PATH', trailingslashit(plugin_dir_path(__FILE__)) );
define( 'WPPB_PLUGIN_URL', trailingslashit(plugins_url('/', __FILE__)) );
define( 'WPPB_PLUGIN_RESOURCE_URL', WPPB_PLUGIN_URL . 'resources' );

class WP_Plugin_Boilerplate {

    /**
     * Construct Function
     */
    public function __construct() {
        $admin      = new Admin();
        $front      = new Front();
        $block      = new Blocks();
    }

}
new WP_Plugin_Boilerplate();