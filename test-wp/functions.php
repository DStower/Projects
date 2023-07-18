<?php

// Load Styles
function testwp_register_styles(){
    //$version = wp_get_theme()->get('Version');
    wp_register_style('testwp-style', get_stylesheet_uri());
    wp_enqueue_style('testwp-style');

    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '6.1.1', 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('nunito-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap', array(), false, 'all');
    wp_enqueue_style('nunito-fonts');
}
add_action('wp_enqueue_scripts', 'testwp_register_styles');

// Load jQuery
function testwp_include_custom_jquery(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', 'all');
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'testwp_include_custom_jquery');

// Load JavaScript
function testwp_register_scripts(){
    wp_register_script('testwp-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), false, 'all');
    wp_enqueue_script('testwp-script');

    wp_register_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js?onload=onLoadRecaptcha&render=6Ld7E14iAAAAAE5Vb34eJrd0zap9jgsKjOQPFsDC', array(), false, 'all');
    wp_enqueue_script('google-recaptcha');
}
add_action('wp_enqueue_scripts', 'testwp_register_scripts');  

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menu('primary', 'Navigation');
