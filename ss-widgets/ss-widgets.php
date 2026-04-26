<?php

/**
 * Plugin Name: SS Widgets
 * Description: This is Widgets Collection
 * Author: Sifat Samin
 * Version: 1.0.0
 * Author URI: https://example.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: admin-column
 */

defined('ABSPATH') or exit;

defined('SS_WIDGETS_VERSION') or define('SS_WIDGETS_VERSION', '1.0.0');

defined('SS_WIDGETS_PATH') or define('SS_WIDGETS_PATH', plugin_dir_path(__FILE__));

defined('SS_WIDGETS_URL') or define('SS_WIDGETS_URL', plugin_dir_url(__FILE__));

require_once SS_WIDGETS_PATH . 'includes/main-plugin.php';

new SS_WIDGETS_MAIN();