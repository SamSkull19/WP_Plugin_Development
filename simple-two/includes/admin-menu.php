<?php

class Admin_Menu {
    public function __construct() {
        add_action('admin_menu', [$this, 'admin_menu_page']);
    }

    public function admin_menu_page() {
        add_menu_page(
            'Simple Two',
            'Simple Two Menu',
            'manage_options',
            'simple-two',
            [$this, 'simple_two_content'],
            'dashicons-media-spreadsheet',
            50
        );

        add_submenu_page(
            'simple-two',
            'Dashboard',
            'Dashboard',
            'manage_options',
            'simple-two',
            [$this, 'simple_two_content']
        );
        
        add_submenu_page(
            'simple-two',
            'Settings',
            'Settings',
            'manage_options',
            'simple-two-settings',
            [$this, 'simple_two_settings']
        );

        add_submenu_page(
            'simple-two',
            'About Page',
            'About Page',
            'manage_options',
            'simple-two-about',
            [$this, 'simple_two_about']
        );
    }

    public function simple_two_content() {
        include_once plugin_dir_path(__FILE__) . 'simple-two-contents.php';
    }
    
    public function simple_two_settings() {
        echo "<div class='wrap'><h1>Settings Page</h1></div>";
    }

    public function simple_two_about() {
        echo "<div class='wrap'><h1>About Page</h1></div>";
    }
}