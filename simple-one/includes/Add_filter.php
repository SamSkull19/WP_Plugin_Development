<?php

class Add_Filter {
    public function __construct() {
        add_filter("the_content", [$this, "content_change"]);
        add_filter("the_title", [$this, "title_change"]);
        add_filter("the_author", [$this, "author_change"]);
        // add_filter("the_title", [$this, "color_change"]);
        add_filter("the_title", [$this, "color_change_for_a_specific_post"]);
        add_filter("the_content", [$this, "word_count"]);
    }

    public function content_change($content) {
        $new_content = $content . "<p>Sifat Samin<p>";
        return $new_content;
    }
    
    public function title_change($title) {
        if (is_admin()) {
            return $title;
        }

        $new_title = "<p>Title : $title </p>" . "<p>Written By - Sifat Samin<p>";
        return $new_title;
    }

    public function author_change($name) {
        $new_name= "Sifat $name Sarker";
        return strtoupper($new_name);
    }
    
    // public function color_change($title) {
    //     if (!is_single() && !is_archive()) {
    //         return $title;
    //     }

    //     $new_title = "<span style='color:red'>" . strtoupper($title) . "</span>";
    //     return $new_title;
    // }
    
    public function color_change_for_a_specific_post($title) {
        if (!is_single() && !is_archive()) {
            return $title;
        }

        $color = (get_the_ID() == 6) ? 'blue' : 'red';

        return "<span style='color:$color'>" . strtoupper($title) . "</span>";
    }
    
    public function word_count($content) {
        if (!is_single() && !is_archive()) {
            return $content;
        }

        $total_word_num = str_word_count(strip_tags($content));
        $word_per_min = 150;
        $total_reading_time = ceil($total_word_num / $word_per_min);

        $content = "<p>Total Reading Time: {$total_reading_time} minutes</p> $content";
        
        return $content;
    }
}
