<?php
/* Template Name: Inscription */

if (!is_user_logged_in()) {
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
            <h1 class="display-3 display-md-1"><b>INSCRIPTION</b></h1>
            <p class="lead lead-md">Rejoins la communauté en quelques clics : inscris-toi et commence à échanger tes jeux et consoles dès maintenant !</p>
        </div>
    </div>



  
    <div class="container my-5">
    <form method="post" name="myForm" class="mx-auto" style="max-width: 400px;">

        <div class="mb-3">
            <label for="uname" class="form-label"><h5><b>Nom d'utilisateur</b></h5></label>
            <input 
                type="text" 
                class="form-control" 
                id="uname" 
                name="uname" 
                placeholder="Entrez votre nom d'utilisateur" 
                required>
        </div>


        <div class="mb-3">
            <label for="email" class="form-label"><h5><b>Adresse e-mail</b></h5></label>
            <input 
                type="email" 
                class="form-control" 
                id="email" 
                name="uemail" 
                placeholder="Entrez votre adresse e-mail" 
                required>
        </div>

        <div class="mb-3">
            <label for="upass" class="form-label"><h5><b>Mot de passe</b></h5></label>
            <input 
                type="password" 
                class="form-control" 
                id="upass" 
                name="upass" 
                placeholder="Entrez votre mot de passe" 
                required>
        </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">En t’inscrivant, tu confirmes que tu as au moins 18 ans.</label>
                </div>

        <div class="d-grid">
            <button type="submit" class="custom-button">S'inscrire</button>
        </div>

                <p class="text-center mt-4">
                Tu as déjà un compte ?
                <a  href="<?php echo esc_url(get_permalink(get_page_by_path('/connexion'))); ?>" class="link-opacity-75-hover">Se connecter</a>
                </p>

    </form>
    </div>
</body>

  <?php get_footer(); ?>