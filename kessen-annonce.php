<?php 
/* Template Name: Kessen Annonce */

get_header(); ?>

<body>


    <div class="container">
    <div class="row my-5">

        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Kessen.png" 
                 alt="Zelda Breath of the Wild" 
                 class="img-fluid">
        </div>

        <div class="col-md-6">
            <h1><b>Kessen (2000)</b></h1>
            <p>Kessen (2000) est un jeu de stratégie en temps réel se déroulant durant la période
                des Trois Royaumes en Chine, basé sur des événements historiques. Le joueur prend le
                rôle de l'un des grands chefs militaires, comme Liu Bei, Cao Cao ou Sun Quan, et dirige
                des armées dans des batailles épiques pour unifier le pays. Le jeu combine des éléments
                de stratégie tactique et de combats de grande échelle, avec des cinématiques immersives
                et un gameplay dynamique.</p>

            <ul>
                <li>PlayStaTion 2</li>
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