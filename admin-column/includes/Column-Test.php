<?php

defined('ABSPATH') or exit;

class COLUMN_TEST {
    public function __construct() {
        add_filter('manage_posts_columns', [$this, 'add_custom_column']);
    }

    public function add_custom_column($columns) {
        $columns['price'] = 'Price';

        return $columns;
    }
}