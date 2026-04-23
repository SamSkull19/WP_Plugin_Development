<?php

class Simple_QR_Code_File {
    public function __construct() {
        add_filter('the_content', [$this, 'apply_file']);
    }

    public function apply_file($content) {
        $content = $content . 'QR Code';
        return $content;
    }
}