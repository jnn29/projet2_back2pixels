<?php 
/* Template Name: Super Mario Land 2 Annonce */

get_header(); ?>

<body>



    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Super Mario Land 2 (1992).png" 
                 alt="Zelda Breath of the Wild" 
                 class="img-fluid">
        </div>

        <div class="col-md-6">
            <h1><b>Super Mario Land 2 (1992)</b></h1>
            <p>Dans Super Mario Land 2: 6 Golden Coins (1992), Mario découvre que Wario a pris le
                contrôle de son château et hypnotisé les habitants de Mario Land. Pour le récupérer,
                Mario doit collecter les 6 pièces d'or réparties dans des zones uniques, chacune gardée
                par un boss. Après avoir vaincu ses ennemis, Mario affronte Wario pour restaurer la paix
                dans son royaume.</p>

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