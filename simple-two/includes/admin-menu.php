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
    }

    public function simple_two_content() {
        include_once plugin_dir_path(__FILE__) . 'simple-two-contents.php';
    }
}