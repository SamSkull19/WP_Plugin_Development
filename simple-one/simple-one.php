<?php

/**
 * Plugin Name: Simple One
 * Description: Simple Testing Plugin One
 * Author: Samin
 * Version: 1.0.0
 */

class WP_DEMO_HOOKS {
    public function __construct() {
        $this->require_file();
        $this->instantiate();
    }

    public function require_file() {
        require_once plugin_dir_path(__FILE__) . 'includes/Add_filter.php';
    }
    
    public function instantiate() {
        new Add_Filter();
    }
}

new WP_DEMO_HOOKS();