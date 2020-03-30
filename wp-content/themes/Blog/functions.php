<?php
require get_theme_file_path('/inc/search-route.php');

function custom_rest() {
    register_rest_field('post', 'postImage', array(
        'get_callback' => function () {
            return get_field('couverture');
        }
    ));
}

add_action('rest_api_init', 'custom_rest');

function theme_resources() {

    //wp_enqueue_style('animate', get_theme_file_uri('css/animate.css'));
    wp_enqueue_style('main-css', get_stylesheet_uri());
    //Scripts includes
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery1', get_theme_file_uri('js/jquery/jquery-2.2.4.min.js'), NULL, '.2.2.4', true);
    wp_enqueue_script('popper', get_theme_file_uri('js/bootstrap/popper.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('bstrap', get_theme_file_uri('js/bootstrap/bootstrap.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('plugin', get_theme_file_uri('js/plugins/plugins.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('active', get_theme_file_uri('js/active.js'), array('jquery1'), '1.0', true);
    
    wp_localize_script('active', 'themeData',array(
    'root_url' => get_site_url()
));
}

add_action('wp_enqueue_scripts', 'theme_resources');

function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));
}

add_action('after_setup_theme', 'theme_features');