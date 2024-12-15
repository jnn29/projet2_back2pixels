<?php
get_header();?>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #7058A8;">
        <div class="container">
      
            <a class="navbar-brand" href="index.php">
                <img src="<?php echo get_template_directory_uri(); ?>/Fichier 4.svg" 
                    alt="Logo" width="60" height="48">
            </a>

        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="menu">
            <b><ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(64); ?>">Jeux vidéo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(68); ?>">Consoles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(); ?>">Qui sommes-nous</a>
                </li>
            </ul></b>

            <div class="ms-auto">
               <button class="custom-button">S'inscrire/se connecter</button>
               <button class="custom-button">Créer une annonce</button>
            </div>
        </div>
        </div>
    </nav>
  
    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/consoles/playstation3.png" 
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