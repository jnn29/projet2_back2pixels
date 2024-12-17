<?php

/* Template Name: Game Boy Annonce */

get_header();?>

<body>


    
    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Game Boy R.png" 
                alt="gameboy" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>Game Boy</b></h1>
                <p>
                    C'est la Game Boy Color, la légendaire console portable de Nintendo sortie à la fin des années 90. 
                    Avec son écran couleur (une vraie révolution à l'époque !) et son look compact, elle permettait de jouer partout à des hits comme Pokémon, Tetris ou Zelda. Solide, simple et super fun, c’était l’alliée parfaite pour des heures de jeu en déplacement. 
                    Un vrai bijou de nostalgie !
                </p>

                <ul>
                    <li>Game Boy</li>
                    <li>Excellent état</li>
                    <li>Fonctionne parfaitement</li>
                </ul>

            <div class="text-end">
                <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
            </div>
        </div>
        
    </div>
    </div>

</body>

<?php get_footer(); ?>