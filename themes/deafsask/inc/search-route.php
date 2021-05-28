<?php

add_action('rest_api_init', 'deafsask_register_api');

function deafsask_register_api(){
    register_rest_route('deafsask/v1', 'search', array(
        'methods' => 'GET',
        'callback' => 'deafsaskSearchResults',
        'permission_callback' => '__return_true'
    ));
}

function deafsaskSearchResults($data){
   $mainQuery = new WP_Query(array(
       'post_type' => array('post', 'page', 'event', 'news', 'resource'),
       's' => sanitize_text_field($data['term'])
   ));
   $results = array(
       'generalInfo' => array(),
       'events' => array(),
       'news' => array(),
       'resources' => array()
   );

    while($mainQuery->have_posts()){
        $mainQuery->the_post();
        if(get_post_type() == 'post' OR get_post_type() == 'page'){
            array_push($results['generalInfo'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'post_type' => get_post_type(),
                'excerpt' => wp_trim_words( get_the_excerpt(), 10, '...' )
            ));
        }
        if(get_post_type() == 'event'){
            array_push($results['events'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'post_type' => get_post_type(),
                'excerpt' => wp_trim_words( get_the_excerpt(), 10, '...' )
            ));
        }
        if(get_post_type() == 'news'){
            array_push($results['news'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'post_type' => get_post_type(),
                'excerpt' => wp_trim_words( get_the_excerpt(), 10, '...' )
            ));
        }
        if(get_post_type() == 'resource'){
            array_push($results['resources'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'post_type' => get_post_type(),
                'excerpt' => wp_trim_words( get_the_excerpt(), 10, '...' )
            ));
        }
    }
   return $results;
}