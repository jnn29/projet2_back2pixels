<?php 
/* Template Name: TimeSplitters Annonce */

get_header(); ?>

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
            <img src="<?php echo get_template_directory_uri(); ?>/images/Tetris (1984).png" 
                 alt="Zelda Breath of the Wild" 
                 class="img-fluid">
        </div>

        <div class="col-md-6">
            <h1><b>TimeSplitters (2000)</b></h1>
            <p>TimeSplitters (2000) est un jeu de tir à la première personne où les joueurs voyagent 
                 travers différentes époques pour récupérer des artefacts et empêcher les mystérieux
                 TimeSplitters, des créatures malveillantes, de détruire l'humanité. Avec ses niveaux
                 variés, son humour décalé et un mode multijoueur frénétique, le jeu est devenu un
                 classique du FPS sur PlayStation 2.</p>

            <ul>
                <li>PlayStation 2</li>
                <li>En bon état</li>
                <li>Encore avec la cassette</li>
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