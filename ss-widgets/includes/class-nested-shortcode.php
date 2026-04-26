<?php

class SS_WIDGETS_Nested {
    public function __construct() {
        add_shortcode('alertbox', [$this, 'render']);    
    }

    public function render($atts, $content = null) {
        $atts = shortcode_atts([
            'type' => 'info'
        ], $atts);

        $bgcolors = [
            'info' => '#d1ecf1',
            'error' => '#f8d7da',
            'success' => '#d4edda',
            'warning' => '#fff3cd'
        ];

        $colors = [
            'info' => '#0c5460',
            'error' => '#721c24',
            'success' => '#155724',
            'warning' => '#856404'
        ];

        $output = "<div style='background-color: {$bgcolors[$atts['type']]}; color: {$colors[$atts['type']]}; padding: 10px; border: 1px solid #ffeaa7; border-radius: 4px; margin-bottom: 10px;'>";
        $output .= do_shortcode($content);
        $output .="</div>";

        return $output;
    }
}
