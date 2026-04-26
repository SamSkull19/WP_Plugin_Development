<?php

defined('ABSPATH') or exit;

class COLUMN_TEST {
    public function __construct() {
        add_filter('manage_posts_columns', [$this, 'add_custom_column'], 10, 1);
        add_action('manage_posts_custom_column', [$this, 'render_columns'], 10, 2);

        // add_action('current_screen', [$this, 'debug_screen'], 10, 1);
        add_filter('manage_edit-post_sortable_columns', [$this, 'make_sortable_columns'], 10, 1);
        add_action('pre_get_posts', [$this, 'sort_column']);
    }

    // public function debug_screen($screen) {
    //     // $screen is passed directly as a parameter here
    //     var_dump($screen->id);
    // }

    // public function add_custom_column($columns) {
    //     $columns['price'] = 'Price';

    //     return $columns;
    // }

    public function add_custom_column($columns) {
        $first_part = array_slice($columns, 0, 3, true);
        $second_part = array_slice($columns, 3, count($columns), true);

        $first_part['price'] = 'Price';

        return array_merge($first_part, $second_part);
    }

    public function render_columns($column_name, $post_id) {
        if($column_name === 'price') {
            // $price = get_post_meta($post_id, 'prices', true);
            $price = get_field('prices', $post_id);
            
            echo $price;
        }
    }

    public function make_sortable_columns($columns) {
        $columns['price'] = 'price';
        return $columns;
    }

    public function sort_column($query) {
        if($query->get('orderby') === 'price') {
            $query->set('meta_key', 'prices');
            $query->set('orderby', 'meta_value_num');
        }
    }
}