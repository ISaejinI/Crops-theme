<?php 
add_filter('sanitize_file_name', 'remove_accents');

function crops_register_assets()
{
    wp_enqueue_style('main', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'crops_register_assets');

function crops_login_logo() {
    wp_enqueue_style(
        "crops-login",
        get_template_directory_uri() . "/assets/css/login.css",
        array('login')
    );
}
add_action('login_enqueue_scripts', 'crops_login_logo');