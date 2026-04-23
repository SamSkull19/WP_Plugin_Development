<?php

/**
 * Plugin Name: Simple One
 * Description: Simple Testing Plugin One
 * Author: Samin
 * Version: 1.0.0
 */

class WP_DEMO_HOOKS {
    public function __construct() {
        add_filter("the_content", [$this, "content_change"]);
        add_filter("the_title", [$this, "title_change"]);
        add_filter("the_author", [$this, "author_change"]);
    }

    public function content_change($content) {
        $new_content = $content . "<p>Sifat Samin<p>";
        return $new_content;
    }
    
    public function title_change($title) {
        $new_title = "<p>Title : $title </p>" . "<p>Written By - Sifat Samin<p>";
        return $new_title;
    }

    public function author_change($name) {
        $new_name= "Sifat $name Sarker";
        return strtoupper($new_name);
    }
}

new WP_DEMO_HOOKS();