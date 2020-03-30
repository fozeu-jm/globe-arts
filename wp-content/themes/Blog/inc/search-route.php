<?php

add_action('rest_api_init', 'registerSearch');

function registerSearch() {
    register_rest_route('globarts/v1', 'search', array(
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'search_results',
    ));
}

function search_results($data) {
    $custom = new WP_Query(array(
        'post_type' => array('post', 'page'),
        's' => sanitize_text_field($data['key'])
    ));
    $result = array(
        'posts' => array(),
        'pages' => array()
    );
    while ($custom->have_posts()) {
        $custom->the_post();
        if (get_post_type() == 'post') {
            array_push($result['posts'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'image' => get_field('couverture')
            ));
        } elseif (get_post_type() == 'page') {
            array_push($result['pages'], array(
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
            ));
        }
    }
    return $result;
}
