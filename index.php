<?php
/* Template Name: Dashboard */

if (!is_user_logged_in()) { // je vérifie si je suis connecté
  wp_redirect( home_url() . "/connexion" ); // si pas je redirige vers la page login
	exit;
}

get_header();

?>

coucou c'est une page privée

<?php
$user = wp_get_current_user();
var_dump($user);
?>

<?php get_footer(); ?>