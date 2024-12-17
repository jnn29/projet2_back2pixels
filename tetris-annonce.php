<?php 
/* Template Name: Tetris Annonce */

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
            <h1><b>Tetris (1984)</b></h1>
            <p>Tetris (1984) est un jeu de puzzle iconique où les joueurs doivent empiler des blocs
                géométriques appelés tetriminos, qui tombent dans une grille. Le but est de former des
                lignes complètes pour les faire disparaître et éviter que la pile n'atteigne le haut de
                l'écran. Avec sa simplicité addictive et sa montée progressive en difficulté, Tetris,
                conçu par Alexey Pajitnov en URSS, est devenu un classique intemporel du jeu vidéo.</p>

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