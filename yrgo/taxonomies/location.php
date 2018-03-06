<?php
declare(strict_types=1);
add_action('init', function () {
    register_taxonomy('location', ['employee'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New location'),
            'edit_item' => __('Edit location'),
            'name' => __('locations'),
            'search_items' => __('Search locations'),
            'singular_name' => __('location'),
        ],
        'query_var' => true,
        'rewrite' => ['slug' => 'location'],
        'show_admin_column' => true,
        'show_ui' => true,
    ]);
});