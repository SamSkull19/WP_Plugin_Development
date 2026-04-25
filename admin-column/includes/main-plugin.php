<?php

defined('ABSPATH') or exit;

class Admin_Column_MAIN {
    public function __construct() {
        add_action('plugins_loaded', [$this, 'init_plugin']);
    }

    public function init_plugin() {
        $this->init_hooks();
        $this->init_classes();
    }

    public function init_hooks() {
        if(file_exists(ADMIN_COLUMN_PATH . 'includes/Column-Test.php')) {
            include_once ADMIN_COLUMN_PATH . 'includes/Column-Test.php';
        }
    }
    
    public function init_classes() {
        new COLUMN_TEST();
    }
}