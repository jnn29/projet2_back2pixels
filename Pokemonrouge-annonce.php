<?php 
/* Template Name: Pokemon Rouge Annonce */

get_header(); ?>

<body>



    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Tetris (1984).png" 
                 alt="Zelda Breath of the Wild" 
                 class="img-fluid">
        </div>

        <div class="col-md-6">
            <h1><b>Pokemon Rouge (1996)</b></h1>
            <p>
            Pokémon Rouge (1996) est un RPG où le joueur incarne un jeune dresseur parcourant la
            région de Kanto pour capturer et entraîner des Pokémon. L'objectif est de compléter le
            Pokédex, vaincre les 8 Champions d'Arène, battre la mystérieuse Team Rocket et devenir
            Maître de la Ligue Pokémon. Avec ses 151 créatures originales, le jeu a marqué le début
            d’un phénomène mondial. </p>

            <ul>
                <li>GAME BOY</li>
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