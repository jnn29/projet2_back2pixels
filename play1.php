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
            <img src="<?php echo get_template_directory_uri(); ?>/consoles/play1.png" 
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