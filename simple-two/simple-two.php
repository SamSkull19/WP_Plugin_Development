<?php

/**
 * Plugin Name: Simple Two
 * Description: Simple Testing Plugin Two
 * Author: Samin
 * Version: 1.0.0
 */

class WP_DEMO_HOOKS {
    public function __construct() {
        $this->require_file();
        $this->instantiate();
    }

    public function require_file() {
        require_once plugin_dir_path(__FILE__) . 'includes/admin-menu.php';
    }
    
    public function instantiate() {
        new Admin_Menu();
    }
}

new WP_DEMO_HOOKS();