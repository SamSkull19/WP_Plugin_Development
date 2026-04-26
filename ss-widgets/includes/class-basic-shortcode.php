<?php

class SS_WIDGETS_Basic_Shortcode {
    public function __construct() {
        add_shortcode('helloworld', [$this, 'render']);
    }

    public function render($atts) {
        $atts = shortcode_atts([
            'color' => 'orange',
            'size' => '32px'
        ], $atts);

        return "<h2 style='color:{$atts['color']}; font-size:{$atts['size']};'>Hello World!!!!</h1>";
    }
}