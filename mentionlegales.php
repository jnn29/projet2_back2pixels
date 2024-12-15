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
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(64); ?>">Jeux vidéo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(68); ?>">Consoles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(); ?>">Qui sommes-nous</a>
                </li>
            </ul>

        <div class="ms-auto">
            <button class="custom-button">S'inscrire/se connecter</button>
            <button class="custom-button">Créer une annonce</button>
        </div>
        </div>
        </div>
    </nav>


    <div class="container">
        <div class= "row my-5">
            <h1>MENTIONS LÉGALES</h1></div>
         
            <p>Back2Pixels SRL</p>
            <p>Rue de la Poste 11, 1030 Schaerbeek</p>
            <p>E-mail: contact@back2pixels.com</p>
            <p>Téléphone: 0486/17.49.55</p>
    </div>

</body>

<?php get_footer();?>