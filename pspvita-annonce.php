<?php

/* Template Name: PSP Vita Annonce */

get_header();?>

<body>


  
    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/PSP Vita.png"
                alt="PSPVita" 
                class="img-fluid">
        </div>

        <div class="col-md-6">
                <h1><b>PSP Vita</b></h1>
                <p>La PSP Vita, c’est la console portable de Sony qui a tenté de révolutionner les jeux sur la route. 
                    Avec son écran tactile haute définition, ses super graphismes et des jeux comme Uncharted: Golden Abyss ou Persona 4 Golden, elle offrait une expérience quasi console de salon en version portable. 
                    Malheureusement, elle n’a pas eu le succès qu’elle méritait, mais elle reste une vraie perle pour les fans de jeux portables ! 🎮✨
                </p>

                <ul>
                    <li>PSP Vita</li>
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