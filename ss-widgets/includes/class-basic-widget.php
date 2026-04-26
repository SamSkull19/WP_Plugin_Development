<?php

class SS_WIDGETS_Dashboard {
    public function __construct() {
        add_action('wp_dashboard_setup', [$this, 'register_widget']);
    }

    public function register_widget() {
        wp_add_dashboard_widget(
            'wd_basic_widget',
            'WD Basic Widget',
            [$this, 'render']
        );
    }

    public function render() {
        echo "<h1>Our First Dashboard Widget</h1>";
    }
}