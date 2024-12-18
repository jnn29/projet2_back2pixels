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






function create_account(){
	//You may need some data validation here
	$user = ( isset($_POST['uname']) ? $_POST['uname'] : '' );
	$pass = ( isset($_POST['upass']) ? $_POST['upass'] : '' );
	$email = ( isset($_POST['uemail']) ? $_POST['uemail'] : '' );

	if ( !username_exists( $user )  && !email_exists( $email ) ) {
		$user_login = wp_slash( $user );
		$user_email = wp_slash( $email );
		$user_pass = $pass;

		$userdata = compact('user_login', 'user_email', 'user_pass');
		$user_id = wp_insert_user($userdata);

		if( !is_wp_error($user_id) ) {
			// user has been created
			$user = new WP_User( $user_id );
			$user->set_role( 'contributor' ); // type d'user que je veux a ce moment la
			// redirection après connexion
			wp_redirect(esc_url(home_url('/dashboard')));
			exit;
		} else {
			//$user_id is a WP_Error object. Manage the error
		}
	}
}
add_action('init', 'create_account');



