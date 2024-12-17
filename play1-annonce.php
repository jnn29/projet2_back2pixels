<?php

/* Template Name: Play 1 Annonce */

get_header();?>

<body>


  
    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Playstation 1.png" 
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