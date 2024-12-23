<?php
/* Template Name: Log In */

if (is_user_logged_in()) {
  wp_redirect( home_url('/') );
	exit;
}
get_header();

?>




<body>
    <nav class="navbar navbar-expand-lg position-absolute w-100" style="z-index: 10;">
        <div class="container">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/homepage'))); ?>" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/Logo.svg" alt="Logo" width="70" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/jeux-video'))); ?>" class="nav-link active">JEUX VIDÉO</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/consoles'))); ?>" class="nav-link active">CONSOLES</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/qui-sommes-nous'))); ?>" class="nav-link active">QUI SOMMES-NOUS</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/inscription'))); ?>" class="custom-button">S'INSCRIRE/SE CONNECTER</a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/inscription'))); ?>" class="custom-button">CRÉER UNE ANNONCE</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="position-relative">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero.png" 
            alt="gensquijouent" 
            class="img-fluid w-100" 
            style="border-radius: 0;">

        <div class="position-absolute top-50 start-50 translate-middle text-center text-white  p-md-4">
            <h1 class="display-3 display-md-1"><b>CONNEXION</b></h1>
            <p class="lead lead-md">Bienvenue ! Connecte-toi pour accéder à ton espace personnel et profiter de tous nos services.</p>
        </div>
    </div>



    <div class="container my-5">
        <form action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post" class="mx-auto" style="max-width: 400px;">
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

            <div class="d-grid">
                <input 
                    type="submit" 
                    name="submit" 
                    value="Se connecter" 
                    class="custom-button">
            </div>

            <input 
                type="hidden" 
                name="redirect_to" 
                value="<?php echo esc_url(get_permalink(get_page_by_path('/dashboard'))); ?>">
        </form>
    </div>
</body>

<?php get_footer(); ?>