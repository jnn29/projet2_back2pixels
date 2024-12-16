<?php

/* Template Name: Playstation 3 Annonce */

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
            <img src="<?php echo get_template_directory_uri(); ?>images/Playstation 3.png" 
                alt="Playstation3" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>Playstation 3</b></h1>
                <p>La PlayStation 3, ou PS3, c’est la console qui a fait passer le jeu vidéo à un autre niveau avec ses graphismes HD et son lecteur Blu-ray intégré. 
                    Sortie en 2006, elle a marqué l’époque avec des hits comme GTA V, The Last of Us, Uncharted et Call of Duty. 
                    En plus, elle offrait le jeu en ligne gratuit avec le PSN. 
                    Une vraie bête pour les gamers qui voulaient du lourd à la maison !
                </p>

                <ul>
                    <li>Playstation 3</li>
                    <li>Excellent état</li>
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