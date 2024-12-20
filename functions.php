<?php

add_theme_support('title-tag'); // support de mon title tag
add_theme_support('post-thumbnails'); // support du thumbnail sur mes articles
add_theme_support('menus'); // support des menus par notre theme

function mon_theme_styles() {
    wp_enqueue_style('mon-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mon_theme_styles');
?>

<?php

function styles_scripts()
{
  wp_enqueue_style(
    'bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
  );
  wp_enqueue_style(
    'style',
    get_template_directory_uri() . '/css/app.css'
  );

  wp_enqueue_script(
    'bootstrap-bundle',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
    false,
    1,
    true
  );
  wp_enqueue_script(
    'app-js',
    get_template_directory_uri() . '/assets/js/app.js',
    ['bootstrap-bundle'],
    1,
    true
  );
}
add_action('wp_enqueue_scripts', 'styles_scripts');

function mytheme_add_page_template_support() {
  add_theme_support('page-attributes');
}
add_action('after_setup_theme', 'mytheme_add_page_template_support');

function ajouter_mon_css() {
  wp_enqueue_style('mon-style', get_stylesheet_directory_uri() . '/css/style-personnalise.css');
}
add_action('wp_enqueue_scripts', 'ajouter_mon_css');

function mon_theme_register_menus() {
  register_nav_menus(array(
      'main-menu' => __('Menu Principal'),
  ));
}
add_action('after_setup_theme', 'mon_theme_register_menus');


function tf_check_user_role( $roles ) {
	
	if ( !is_user_logged_in() ) {
		return;
	}

	$user = wp_get_current_user();
	
	$currentUserRoles = $user->roles;
	
	$isMatching = array_intersect( $currentUserRoles, $roles);
	$response = false; 

	if ( !empty($isMatching) ) {
		$response = true;
	}

	return $response;
}
$roles = [ 'contributor' ];
if ( tf_check_user_role($roles) ) {
	add_filter('show_admin_bar', '__return_false');
}

function messagerie_shortcode() {
  ob_start();
  include 'chemin/vers/votre/fichier/messagerie.php';
  return ob_get_clean();
}
add_shortcode('messagerie', 'messagerie_shortcode');

function enqueue_custom_scripts() {
 
  wp_enqueue_script(
      'message', 
      get_template_directory_uri() . '/js/message.js', 
      array('jquery'), 
      '1.0.0',
      true 
  );
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


?>