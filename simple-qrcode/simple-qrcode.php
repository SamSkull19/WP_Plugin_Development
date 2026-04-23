<?php

/**
 * Plugin Name: Simple QR Code
 * Description: Simple QR code for finding posts pages.
 * Author: Sifat Samin
 * Version: 1.0.0
 * Author URI: https://example.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: simple-qrcode
 */


defined('ABSPATH') or exit;

const VERSION = '1.0.0';

define('SIMPLE_QR_CODE_VERSION', VERSION);

define('SIMPLE_QR_CODE_PATH', plugin_dir_path(__FILE__));

define('SIMPLE_QR_CODE_URL', plugin_dir_url(__FILE__));

require_once SIMPLE_QR_CODE_PATH . 'includes/main-plugin.php';

new Simple_QR_Code_Main();