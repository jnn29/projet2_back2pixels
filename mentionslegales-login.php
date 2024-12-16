<?php
/* Template Name: Mentions Légales Logged In */

get_header();?>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_permalink(115); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/Fichier 2 - Copie.svg" alt="Logo" width="60" height="48">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(156); ?>">Jeux vidéo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(158); ?>">Consoles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(103); ?>">Qui sommes-nous</a>
                    </li>
                </ul>
                <div class="ms-auto gx-3">
                    <a href="" class="text-white me-3"><i class="bi bi-person-fill footer-icon"></i></a>
                    <button class="custom-button">Créer une annonce</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1><b>MENTIONS LÉGALES</b></h1></div>
        
    <div class="container">Back2Pixels SRL</div>

    <div class="container">Rue de la Poste 11, 1030 Schaerbeek</div>

    <div class="container">E-mail: contact@back2pixels.com</div>

    <div class="container">Téléphone: 0486/17.49.55</div><br>

</body>

<?php get_footer(); ?>