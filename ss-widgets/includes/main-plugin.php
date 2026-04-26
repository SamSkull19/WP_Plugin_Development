<?php

class SS_WIDGETS_MAIN {
    public function __construct() {
        add_action('admin_enqueue_scripts', [$this, 'load_admin_assets']);
        $this->load_dependencies();
        $this->instantiate();
    }

    public function load_admin_assets($hook) {
        if($hook !== 'index.php') {
            return;
        }

        wp_enqueue_style(
            'wp-admin-css',
            SS_WIDGETS_URL . 'css/admin.css',
            [],
            time()
        );
    }

    public function load_dependencies() {
        require_once SS_WIDGETS_PATH . 'includes/class-basic-widget.php';
        require_once SS_WIDGETS_PATH . 'includes/class-stats-widget.php';
    }

    public function instantiate() {
        new SS_WIDGETS_Dashboard();
        new SS_WIDGETS_STATS();
    }
}