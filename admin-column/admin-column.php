<?php

/**
 * Plugin Name: Admin Column
 * Description: Admin Column Testing
 * Author: Sifat Samin
 * Version: 1.0.0
 * Author URI: https://example.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: admin-column
 */


defined('ABSPATH') or exit;

defined('ADMIN_COLUMN_VERSION') or define('ADMIN_COLUMN_VERSION', '1.0.0');

defined('ADMIN_COLUMN_PATH') or define('ADMIN_COLUMN_PATH', plugin_dir_path(__FILE__));

defined('ADMIN_COLUMN_URL') or define('ADMIN_COLUMN_URL', plugin_dir_url(__FILE__));

if(file_exists(ADMIN_COLUMN_PATH . 'includes/main-plugin.php')) {
    require_once ADMIN_COLUMN_PATH . 'includes/main-plugin.php';

    new Admin_Column_MAIN();
}


