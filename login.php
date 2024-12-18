<?php
/* Template Name: Log In */

if (!is_user_logged_in()) {
  // si je suis déjà connecté je suis redirigé vers la page home
  wp_redirect( home_url('/') );
	exit;
}
get_header();

?>

    <nav class="navbar navbar-expand-lg position-absolute w-100" style="z-index: 10;">
        <div class="container">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/homepage'))); ?>" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/Fichier 1.svg" alt="Logo" width="70" height="58">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/jeux-video'))); ?>" class="nav-link active">Jeux vidéo</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/consoles'))); ?>" class="nav-link active">Consoles</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/qui-sommes-nous'))); ?>" class="nav-link active">Qui sommes-nous</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/inscription'))); ?>" class="custom-button">S'inscrire/Se connecter</a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/inscription'))); ?>" class="custom-button">Créer une annonce</a>
                </div>
            </div>
        </div>
    </nav>

<div class="container my-5">
    <form action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post" class="mx-auto" style="max-width: 400px;">
        <!-- Champ pour le nom d'utilisateur ou e-mail -->
        <div class="mb-3">
            <label for="log" class="form-label">Nom d'utilisateur ou adresse e-mail</label>
            <input 
                type="text" 
                class="form-control" 
                id="log" 
                name="log" 
                value="<?php echo esc_attr( $user_login ); ?>" 
                placeholder="Entrez votre nom d'utilisateur ou e-mail" 
                required>
        </div>

        <!-- Champ pour le mot de passe -->
        <div class="mb-3">
            <label for="pwd" class="form-label">Mot de passe</label>
            <input 
                type="password" 
                class="form-control" 
                id="pwd" 
                name="pwd" 
                placeholder="Entrez votre mot de passe" 
                required>
        </div>

        <!-- Bouton de connexion -->
        <div class="d-grid">
            <input 
                type="submit" 
                name="submit" 
                value="Se connecter" 
                class="custom-button">
        </div>

        <!-- Champ caché pour la redirection -->
        <input 
            type="hidden" 
            name="redirect_to" 
            value="<?php echo esc_url(get_permalink(get_page_by_path('/dashboard'))); ?>">
    </form>
</div>

<?php get_footer(); ?>