<?php

// custom post
if(!function_exists('mycustompost')){
    function mycustompost(){
        register_post_type('MySlider',
        array(
            'labels' => array(
                'name' => __('My Slider', 'wp_theme_development'), //menu name and Text Domain:
                'singular_name' => __('My Slider', 'wp_theme_development'), //for single item
                'menu_name' => __('My Services', 'wp_theme_development'), 
                'all_items' => __('My All Services List', 'wp_theme_development'), 
                'view_item' => __('View Services', 'wp_theme_development'),
                'add_new_item' => __('Add New Services', 'wp_theme_development'),
                'edit_item' => __('Edit Services', 'wp_theme_development'),
                'update_item' => __('Update Services', 'wp_theme_development'),
                'search_items' => __('Search Services', 'wp_theme_development'),
                'not_found' => __('No Services Found', 'wp_theme_development'),
                'not_found_in_trash' => __('No Services Found in Trash', 'wp_theme_development'),
                
            ),
            'public' => true,
            // 'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'), //post type supports
            'capability_type' => 'post', //define custom type post 
            'menu_position' => 10, //set menu position
        )
    );
    }
}
add_action('init', 'mycustompost');

?>