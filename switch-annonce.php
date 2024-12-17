<?php

/* Template Name: Nintendo Switch Annonce */

get_header();?>

<body>

  
    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/nintendo switch.png" 
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