<?php 
/* Template Name: Mega Man 2 Annonce */

get_header(); ?>

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
            <h1 class="display-3 display-md-1"><b>MEGAMAN 2</b></h1>
            <p class="lead lead-md">Chaque combat est un test de précision et de courage.</p>
        </div>
    </div>


    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Mega-Man-2-1988.png" 
                 alt="Zelda Breath of the Wild" 
                 class="img-fluid">
        </div>

        <div class="col-md-6">
            <h1><b>Mega Man 2 (1988)</b></h1>
            <hr style="border-top: 6px solid #7058A8; margin: 5px 0;">
            <p>Mega Man 2 (1988) est un jeu d'action-plateforme où le héros robotique Mega Man affronte
                le maléfique Dr. Wily et ses 8 Robot Masters. En battant chaque boss, Mega Man acquiert
                leurs pouvoirs uniques pour progresser. Avec des niveaux variés, une difficulté bien dosée
                et une bande-son culte, le jeu est considéré comme un classique de la NES.</p>

            <ul>
                <li>NES</li>
                <li>En bon état</li>
                <li>Encore avec la cassette</li>
                <li>Fonctionne bien</li>
            </ul>

            <div class="text-end">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/chat-box'))); ?>" class="custom-button">MESSAGE</a>
            </div>
        </div>
    </div>
</div>


</body>

<?php get_footer(); ?>