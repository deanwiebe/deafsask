<?php

function register_post_types(){
    register_post_type('event', array(
        'show_in_rest' => true,
        'public' => true,
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'supports' => array( 
            'thumbnail',
            'title',
            'editor'
        ),
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));
    register_post_type('news', array(
        'show_in_rest' => true,
        'public' => true,
        'rewrite' => array('slug' => 'news'),
        'has_archive' => true,
        'supports' => array( 
            'thumbnail',
            'title',
            'editor'
        ),
        'labels' => array(
            'name' => 'News',
            'add_new_item' => 'Add New News',
            'edit_item' => 'Edit News',
            'all_items' => 'All News',
            'singular_name' => 'News'
        ),
        'menu_icon' => 'dashicons-sos'
    ));
    register_post_type('resource', array(
        'show_in_rest' => true,
        'public' => true,
        'rewrite' => array('slug' => 'resources'),
        'has_archive' => true,
        'supports' => array( 
            'thumbnail',
            'title',
            'editor'
        ),
        'labels' => array(
            'name' => 'Resources',
            'add_new_item' => 'Add New Resource',
            'edit_item' => 'Edit Resource',
            'all_items' => 'All Resources',
            'singular_name' => 'Resource'
        ),
        'menu_icon' => 'dashicons-shield'
    ));
}
add_action('init', 'register_post_types');