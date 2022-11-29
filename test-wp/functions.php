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

// Google Recaptcha Check
//6Ld7E14iAAAAAL4JdS6ITWxNlrzxMeoKq8BABRu_
/* function google_recaptcha_check(){
    if(isset($_POST['recaptcha_token'])){ 
        $token = $_POST['recaptcha_token'];
        $secret = "6Ld7E14iAAAAAL4JdS6ITWxNlrzxMeoKq8BABRu_";
    
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$token";
        $response = file_get_contents($url);
        $response = json_decode($response);
    }
}
add_action('wp_enqueue_scripts', 'google_recaptcha_check'); */

function is_valid_captcha($captcha) {
    $captcha_postdata = http_build_query(array(
                                'secret' => '6Ld7E14iAAAAAL4JdS6ITWxNlrzxMeoKq8BABRu_',
                                'response' => $captcha,
                                'remoteip' => $_SERVER['REMOTE_ADDR']));
    $captcha_opts = array('http' => array(
                          'method'  => 'POST',
                          'header'  => 'Content-type: application/x-www-form-urlencoded',
                          'content' => $captcha_postdata));
    $captcha_context  = stream_context_create($captcha_opts);
    $captcha_response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify" , false , $captcha_context), true);
        if($captcha_response['success'] && $captcha_response['score'] > 0.5){
            wp_die();
        }
    }
add_action('wp_enqueue_scripts', 'is_valid_captcha');     

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menu('primary', 'Navigation');