<?php 
/* Template Name: Mega Man 2 Annonce */

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
            <h1><b>Mega Man 2 (1988)</b></h1>
            <p>Mega Man 2 (1988) est un jeu d'action-plateforme où le héros robotique Mega Man affronte
                le maléfique Dr. Wily et ses 8 Robot Masters. En battant chaque boss, Mega Man acquiert
                leurs pouvoirs uniques pour progresser. Avec des niveaux variés, une difficulté bien dosée
                et une bande-son culte, le jeu est considéré comme un classique de la NES.</p>

            <ul>
                <li>NES</li>
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