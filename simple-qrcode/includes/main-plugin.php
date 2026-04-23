<?php

class Simple_QR_Code_Main {
    public function __construct() {
        $this->load_files();
        $this->load_classes();
        
        add_action('wp_enqueue_scripts', [$this, 'frontend_enqueue_assets']);
    }

    public function load_files() {
        require_once SIMPLE_QR_CODE_PATH . 'includes/class-qr-code.php';
    }

    public function load_classes() {
        new Simple_QR_Code_File();
    }

    public function frontend_enqueue_assets() {
        wp_enqueue_style(
            'simple-qr-code-style',
            SIMPLE_QR_CODE_URL . 'assets/css/qrcode.css',
            [],
            SIMPLE_QR_CODE_VERSION,
            'all' // Media Type
        );

        wp_enqueue_script(
            'simple-qr-code-script',
            SIMPLE_QR_CODE_URL . 'assets/js/qrcode.js',
            ['qrcodejs'],
            SIMPLE_QR_CODE_VERSION,
            true
        );

        wp_enqueue_script(
            'qrcodejs',
            'https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js',
            [],
            '1.0.0',
            true
        );

        wp_localize_script(
            'simple-qr-code-script',
            'simple_qr_code_data',
            [
                'post_url' => get_permalink(),
            ]
        );
    }
}