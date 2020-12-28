<?php
    function calling_resources(){
        wp_enqueue_style('mainstyle', get_stylesheet_uri(), ' ', '0.1.0');
        wp_enqueue_style('progressive-circle-style', get_template_directory_uri().'/css/progresscircle.css', '', '0.1.0');

    }

    add_action('wp_enqueue_scripts', 'calling_resources');


    function basic_setup(){
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'basic_setup');


?>