<?php 
/* Template Name: Zelda Annonce */

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
                    <a href="<?php echo get_permalink(110); ?>" class="custom-button">S'inscrire/Se connecter</a>
                    <a href="<?php echo get_permalink(110); ?>" class="custom-button">Créer une annonce</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Zelda breath of the wild.png" 
                 alt="Zelda Breath of the Wild" 
                 class="img-fluid">
        </div>

        <div class="col-md-6">
            <h1><b>Zelda Breath of the Wild</b></h1>
            <p>
                Dans The Legend of Zelda: Breath of the Wild, Link se réveille après 100 ans de 
                sommeil dans un Hyrule ravagé par le fléau Ganon. Amnésique, il découvre que la
                princesse Zelda lutte pour contenir Ganon au Château d’Hyrule. Pour sauver le royaume,
                Link doit explorer un vaste monde ouvert, retrouver ses souvenirs, maîtriser d’anciennes
                Créatures Divines, et affronter Ganon pour restaurer la paix.
            </p>
            <ul>
                <li>Jeux Game Boy</li>
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