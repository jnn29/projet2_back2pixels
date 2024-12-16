<?php

/* Template Name: Play 1 Annonce */

get_header();?>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_permalink(105); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/Fichier 2 - Copie.svg" alt="Logo" width="60" height="48">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(64); ?>">Jeux vidéo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(68); ?>">Consoles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(103); ?>">Qui sommes-nous</a>
                    </li>
                </ul>
                <div class="ms-auto">
                     <i class="bi bi-person-fill"></i>
                    <button class="custom-button">Créer une annonce</button>
                </div>
            </div>
        </div>
    </nav>
  
    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Playstation 1.png" 
                alt="play1" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>Playstation 1</b></h1>
                <p>
                    La PlayStation 1, c’est la toute première console de Sony qui a débarqué dans les années 90 et changé le game ! 
                    Avec ses jeux sur CD (adieu les cartouches) et ses graphismes 3D, c’était la folie à l’époque. 
                    Des hits comme Crash Bandicoot, Final Fantasy VII, Tekken ou Tomb Raider ont marqué toute une génération. 
                    Simple, iconique et nostalgique, c’est la console qui a lancé l’ère PlayStation. 🎮🔥
                </p>

                <ul>
                    <li>Playstation 1</li>
                    <li>Parfait état</li>
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