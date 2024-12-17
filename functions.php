<?php


add_theme_support('title-tag');
add_theme_support('post-thumbnails'); 
add_theme_support('menus'); 


function mon_theme_styles_scripts() {

    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
    );


    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri()
    );


    wp_enqueue_script(
        'bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.3',
        true
    );


    wp_enqueue_script(
        'app-js',
        get_template_directory_uri() . '/assets/js/app.js',
        ['bootstrap-bundle'],
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'mon_theme_styles_scripts');

function create_post_type()
{
  register_post_type('games', [
    'labels' => ['name' => 'Games'],
    'supports' => ['title', 'editor', 'thumbnail'],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'games']
  ]);
  register_post_type('stations', [
    'labels' => ['name' => 'Stations'],
    'supports' => ['title', 'editor', 'thumbnail'],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'stations']
  ]);
}
add_action('init', 'create_post_type');

function custom_login_form() {
    ob_start();
    include 'login.php'; 
    return ob_get_clean();
}
add_shortcode('login_form', 'custom_login_form');


function mytheme_add_page_template_support() {
    add_theme_support('page-attributes');
}
add_action('after_setup_theme', 'mytheme_add_page_template_support');

?>
