<?php

class Simple_QR_Code_File {
    public function __construct() {
        add_filter('the_content', [$this, 'add_qr_code_with_content']);
    }

    public function add_qr_code_with_content($content) {
        if(!is_singular()) {
            return $content;
        }

        $position = 'bottom-right';
        $size = 128;
        $color = '#000000';
        $heading = 'Scan Me';

        $content .= "<div class='simple-qrcode-container " . esc_attr($position) . "'>";
        $content .= "<div class='simple-qrcode-heading'>" . esc_html($heading) . "</div>";
        $content .= "<div class='simple-qrcode' data-size='" . esc_attr($size) . "' data-color='" . esc_attr($color) . "'></div>";
        $content .= "</div>";

        return $content;
    }
}