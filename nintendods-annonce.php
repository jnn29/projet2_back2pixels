<?php

/* Template Name: Nintendo DS Annonce */

get_header();?>

<body>


  
    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Nintendo DS.png" 
                alt="nintendods" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>Nintendo DS</b></h1>
                <p>
                    La Nintendo DS, c'est la console portable à double écran qui a marqué les années 2000 ! 
                    Avec son écran tactile (révolutionnaire à l'époque), tu pouvais jouer à des jeux ultra funs comme Mario Kart DS, Nintendogs ou Pokémon. 
                    Solide, pliable et pratique à emporter, elle t'offrait des heures de jeu partout, avec des stylets perdus dans chaque recoin de ta maison. 
                    Une vraie pépite de nostalgie !
                </p>

                <ul>
                    <li>Nintendo DS</li>
                    <li>Bon état</li>
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