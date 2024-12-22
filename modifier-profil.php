<?php

/* Template Name: Modifier Le Profil*/

get_header();?>

<?php
    $article_3_id = 123;
    $avatar_url = 'https://robohash.org/' . $article_3_id;
?>

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
            <h1 class="display-3 display-md-1"><b>MODIFIER LE PROFIL</b></h1>
            <p class="lead lead-md">Mets à jour tes informations et personnalise ton expérience : modifie ton profil en toute simplicité !</p>
        </div>
    </div>







    <div class="container my-5"> 
    <div class="row gy-2">
        <div class="col-md-6">
        
            <img src="https://www.w3schools.com/w3images/avatar2.png" 
                alt="Photo de profil libre de droit" 
                class="img-thumbnail" 
                style="width: 290px; height: 350px;">
        </div>

        <div class="col-md-6">   
                <h1><b>NARUTO_LPB</b></h1>   
                <hr style="border-top: 6px solid #7058A8; margin: 5px 0;">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><h5><b>MODIFIER MA BIO :</b></h5></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
            <div class="d-flex justify-content-end mt-3">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/profil'))); ?>" class="custom-button">METTRE À JOUR</a>
            </div>
        </div>
    </div>
    </div>

</body>

<?php get_footer(); ?>