<?php

/* Template Name: Playstation 1 Annonce */

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
            <img src="<?php echo get_template_directory_uri(); ?>/images/Playstation 1 (2).png" 
                alt="playstation1" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>Playstation 1</b></h1>
                <p>
                    La PlayStation 1, ou PS1 pour les intimes, c’est la console qui a fait entrer le jeu vidéo dans une nouvelle ère. 
                    Sortie en 1994, elle a cartonné avec ses graphismes 3D et ses jeux sur CD, une vraie révolution à l'époque. 
                    Grâce à des classiques comme Gran Turismo, Resident Evil, Metal Gear Solid et Crash Bandicoot, elle a posé les bases du gaming moderne. 
                    Une vraie légende pour les gamers old-school !
                </p>

                <ul>
                    <li>Playstation 1</li>
                    <li>Bon état</li>
                    <li>Fonctionne super bien</li>
                </ul>

            <div class="text-end">
                <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
            </div>
        </div>
        
    </div>
    </div>

</body>

<?php get_footer(); ?>