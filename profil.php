<?php

/* Template Name: Profil */

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
            <h1 class="display-3 display-md-1"><b>PROFIL</b></h1>
            <p class="lead lead-md">Personnalise ton espace et suis tes échanges en un clin d'œil : ton profil, ton univers de jeux !</p>
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
                <hr style="border-top: 4px solid #000; margin: 15px 0;">  
                <p><b>Bio</b> : J’ai 27 ans et je vis à Bruxelles. 
                Je suis collectionneur de jeux vidéo et consoles rétro (Playstaion, Nintendo DS, Gameboy, PSP,...). 
                Je veux pouvoir agrandir ma collection sans devoir dépenser d’énormes sommes. 
                Et, si c’est possible, faire de nouvelles rencontres et partager ma passion.
                </p>
    
            <div class="d-flex justify-content-end mt-3">
                <a href="<?php echo get_permalink(166); ?>" class="custom-button">MODIFIER LE PROFIL</a>
            </div>
        </div>
    </div>
    </div>

</body>

<?php get_footer(); ?>