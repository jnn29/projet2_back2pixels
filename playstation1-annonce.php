<?php

/* Template Name: Playstation 1 Annonce */

get_header();?>

<body>


  
    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Playstation 1 (2).png" 
                alt="playstation1" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>Playstation 1</b></h1>
                <p>
                    La PlayStation 1, ou PS1 pour les intimes, c’est la console qui a fait entrer le jeu vidéo dans une nouvelle ère. 
                    Sortie en 1994, elle a cartonné avec ses graphismes 3D et ses jeux sur CD, une vraie révolution à l'époque. 
                    Grâce à des classiques comme Gran Turismo, Resident Evil, Metal Gear Solid et Crash Bandicoot, elle a posé les bases du gaming moderne. 
                    Une vraie légende pour les gamers old-school !
                </p>

                <ul>
                    <li>Playstation 1</li>
                    <li>Bon état</li>
                    <li>Fonctionne super bien</li>
                </ul>

            <div class="text-end">
                <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
            </div>
        </div>
        
    </div>
    </div>

</body>

<?php get_footer(); ?>