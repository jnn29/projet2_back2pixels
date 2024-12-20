<?php

/* Template Name: Nintendo DS Annonce */

get_header();?>

<body>
    <nav class="navbar navbar-expand-lg position-absolute w-100" style="z-index: 10;">
        <div class="container">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/homepage'))); ?>" class="navbar-brand">
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
                <div class="ms-auto">
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
            <h1 class="display-3 display-md-1"><b>NINTENDO DS</b></h1>
            <p class="lead lead-md">allalllalalallalalalalalalal</p>
        </div>
    </div>


    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Nintendo DS.png" 
                alt="nintendods" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>Nintendo DS</b></h1>
                <p>
                    La Nintendo DS, c'est la console portable à double écran qui a marqué les années 2000 ! 
                    Avec son écran tactile (révolutionnaire à l'époque), tu pouvais jouer à des jeux ultra funs comme Mario Kart DS, Nintendogs ou Pokémon. 
                    Solide, pliable et pratique à emporter, elle t'offrait des heures de jeu partout, avec des stylets perdus dans chaque recoin de ta maison. 
                    Une vraie pépite de nostalgie !
                </p>

                <ul>
                    <li>Nintendo DS</li>
                    <li>Bon état</li>
                    <li>Fonctionne</li>
                </ul>

            <div class="text-end">
                <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
            </div>
        </div>
        
    </div>
    </div>

</body>

<?php get_footer(); ?>