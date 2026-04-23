<?php

class Simple_QR_Code_Main {
    public function __construct() {
        $this->load_files();
        $this->load_classes();
    }

    public function load_files() {
        require_once SIMPLE_QR_CODE_PATH . 'includes/class-qr-code.php';
    }

    public function load_classes() {
        new Simple_QR_Code_File();
    }
}