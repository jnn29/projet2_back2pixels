<?php

/* Template Name: My Arcade Pac Man Annonce */

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
            <img src="<?php echo get_template_directory_uri(); ?>/images/My Arcade Pac Man.png" 
                alt="Zelda Breath of the Wild" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>My Arcade Pac Man</b></h1>
                <p>
                        C’est une mini console rétro super stylée, parfaite pour se replonger dans les vieux classiques comme Pac-Man. 
                        Avec son look jaune flashy, ses petits boutons et son écran intégré, elle te donne l'impression d'avoir une borne d'arcade dans la poche. 
                        Ultra pratique pour jouer partout et kiffer les vibes des années 80-90, sans prise de tête ! 🎮
                </p>

                <ul>
                    <li>ATARI</li>
                    <li>En bon état</li>
                    <li>Avec le jeu Pac Man</li>
                    <li>Fonctionne bien</li>
                </ul>

            <div class="text-end">
                <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
            </div>
        </div>
        
    </div>
    </div>

</body>

<?php get_footer(); ?>