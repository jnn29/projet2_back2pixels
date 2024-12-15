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
            <img src="<?php echo get_template_directory_uri(); ?>/consoles/nintendo switch.png" 
                alt="nintendoswitch" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>Nintendo Switch</b></h1>
                <p>
                    C'est la Nintendo Switch, la console hybride de Nintendo qui cartonne depuis sa sortie. 
                    Avec ses Joy-Cons détachables et son design portable, tu peux jouer tranquille en mode portable ou la brancher sur la télé pour des sessions plus chill. 
                    Ici, on voit Fortnite à l'écran, un des jeux les plus populaires. La Switch, c’est la console parfaite pour jouer partout, seul ou entre potes !
                </p>

                <ul>
                    <li>Nintendo Switch</li>
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