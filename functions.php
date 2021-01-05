<?php
    function calling_resources(){
        wp_enqueue_style('mainstyle', get_stylesheet_uri(), ' ', '0.1.0');
        wp_enqueue_style('progressive-circle-style', get_template_directory_uri().'/css/progresscircle.css', '', '0.1.0');
    }

    add_action('wp_enqueue_scripts', 'calling_resources');

    function calling_script(){
        // wp_enqueue_script('progressive-circle-jquery', get_template_directory_uri().'/https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', '', '0.1.0');
        wp_enqueue_script('progressive-circle-js', get_template_directory_uri().'/jss/progresscircle.js', array ('jquery'), '0.1.0');
    }
    add_action('wp_enqueue_scripts', 'calling_script');
    // function basic_setup(){
    //     register_nav_menus(array(
    //         'primary' => __('Primary Menu')
    //     ));
    // }

    

    function out_theme_setup(){
        register_nav_menus(array(
            'navigationMenu' => 'navigationbar'
        ));
    }

    add_action('after_setup_theme', 'out_theme_setup');



?>