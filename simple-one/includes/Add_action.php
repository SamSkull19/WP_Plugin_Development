<?php

class Add_Action {
    public function __construct() {
        add_action('admin_notices', [$this, 'check_notices']);
        add_action('wp_head', [$this, 'wp_header_script']);
        add_action('admin_head', [$this, 'admin_header_script']);
        add_action('admin_footer_text', [$this, 'change_admin_footer_text']);
        add_action('admin_footer', [$this, 'change_admin_footer']);
    }

    public function check_notices() {
        echo "<div class='notice notice-success is-dismissible'><p>Welcome to my Simple Plugin</p></div>";
        echo "<div class='notice notice-error is-dismissible'><p>Some Error Occured in Simple Plugin</p></div>";
    }

    public function wp_header_script() {
        if(is_admin()) {
            return;
        }
        echo "<style>body{background-color: #6666}</style>";
    }
    
    public function admin_header_script() {
        if(!is_admin()) {
            return;
        }
        echo "<style>body{background-color: #f8f4f4}</style>";
    }
    
    public function change_admin_footer_text($footer_text) {
        $footer_new = $footer_text . ' Copyright by Sifat Samin';
        echo $footer_new;
    }
    
    public function change_admin_footer() {
        $footer_text = "<p style='text-align:center'>All Right Reserved By Sifat Samin</p>";
        echo $footer_text;
    }
}