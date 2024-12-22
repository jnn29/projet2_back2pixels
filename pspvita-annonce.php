<?php

/* Template Name: PSP Vita Annonce */

get_header();?>

<body>
    <nav class="navbar navbar-expand-lg position-absolute w-100" style="z-index: 10;">
        <div class="container">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/dashboard'))); ?>" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/Logo.svg" alt="Logo" width="70" height="58">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/jeux-video-logged-in'))); ?>" class="nav-link active">Jeux vidéo</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/consoles-logged-in'))); ?>" class="nav-link active">Consoles</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/qui-sommes-nous-logged-in'))); ?>" class="nav-link active">Qui sommes-nous</a>
                    </li>
                </ul>
                <div class="ms-auto d-flex align-items-center">
                    <a class="text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('/profil'))); ?>" class="d-flex align-items-center me-3">
                    <i class="bi bi-person-fill me-3 footer-icon"></i></a>
                    <a class="text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('/chat-box'))); ?>" class="d-flex align-items-center me-4">
                    <i class="bi bi-chat-fill footer-icon me-3"></i></a>

                    <?php if (is_user_logged_in()):?>
                    <a href="<?php echo wp_logout_url();?>" class="custom-button">Déconnexion</a>
                    <?php endif; ?>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/creer-une-annonce'))); ?>" class="custom-button">Créer une annonce</a>
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
            <h1 class="display-3 display-md-1"><b>PSPS VITA</b></h1>
            <p class="lead lead-md">L'expérience portable ultime en haute définition.</p>
        </div>
    </div>

  
    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/PSP Vita.png"
                alt="PSPVita" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>PSP Vita</b></h1>
                <p>La PSP Vita, c’est la console portable de Sony qui a tenté de révolutionner les jeux sur la route. 
                    Avec son écran tactile haute définition, ses super graphismes et des jeux comme Uncharted: Golden Abyss ou Persona 4 Golden, elle offrait une expérience quasi console de salon en version portable. 
                    Malheureusement, elle n’a pas eu le succès qu’elle méritait, mais elle reste une vraie perle pour les fans de jeux portables !
                </p>

                <ul>
                    <li>PSP Vita</li>
                    <li>Bon état</li>
                    <li>Fonctionne</li>
                </ul>

            <div class="text-end">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/chat-box'))); ?>" class="custom-button">MESSAGE</a>
            </div>
        </div>
        
    </div>
    </div>

</body>

<?php get_footer(); ?>