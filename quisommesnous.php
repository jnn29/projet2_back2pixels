<?php
/* header */

get_header();?>

<body>
<nav class="navbar navbar-expand-lg">
<nav class="navbar" style="background-color: #7058A8;">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="<?php echo get_template_directory_uri(); ?>/Fichier 4.svg" 
                alt="Logo" width="60" height="48">
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" 
                    href="<?php echo get_permalink(64); ?>">Jeux vidéo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" 
                    href="<?php echo get_permalink(68); ?>">Consoles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" 
                    href="<?php echo get_permalink(); ?>">Qui sommes-nous</a>
            </li>
        </ul>
    <div class="ms-auto">
        <button class="custom-button">S'inscrire/se connecter</button>
        <button class="custom-button">Créer une annonce</button>
    </div>
    </div>
    </div>
</nav>
</nav>

    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-6">
        <h1>BACK2PIXELS C’EST QUOI ?</h1>
            <p>Back2pixels, la plateforme dédiée aux passionnés de jeux
                vidéo ! Nous avons créé un espace où tout le monde 
                peut facilement échanger ses jeux, consoles, et 
                accessoires, tout cela sans se ruiner. 
                Notre mission est simple : offrir aux gamers un moyen
                pratique, sûr et économique de découvrir de nouveaux
                jeux et de faire évoluer leur collection.</p>
            <p>Nous croyons au partage et à la communauté. 
                C’est pourquoi nous mettons en avant un système 
                d’échange sécurisé pour vous permettre de trouver 
                exactement ce que vous cherchez. Que vous soyez 
                amateur de rétrogaming ou adepte des dernières 
                nouveautés, notre plateforme est là pour connecter 
                les joueurs et favoriser les échanges.</p>
    </div> 
    <div class="col-md-6">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/Perso/Pers1.png'); ?>" 
            alt="Pers1" width="270" height="360" class="img-fluid">
    </div>
    </div>
    </div>

    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-6">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/Perso/Pers2.png'); ?>" 
            alt="Pers2" width="270" height="360" class="img-fluid">
    </div>
    <div class="col-md-6">
        <h1>NOTRE MISSION</h1>
            <p>Chez Back2Pixels, notre mission est de rendre le monde
                du gaming accessible à tous en créant un espace où
                les passionnés peuvent échanger facilement leurs
                jeux, consoles et accessoires. Nous voulons offrir
                une alternative simple et économique pour 
                renouveler ses jeux sans les contraintes d’achat
                et sans accumuler des objets inutilisés.</p>
            <p>Nous croyons qu’un jeu doit être partagé, qu’une 
                console doit vivre au-delà de son premier 
                propriétaire, et que chaque accessoire mérite une 
                seconde chance. Notre plateforme favorise des 
                échanges responsables et soutient une communauté où
                chaque transaction est une opportunité de faire 
                découvrir de nouveaux univers et de connecter les
                joueurs entre eux.</p>
    </div>
    </div>
    </div>

    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-6">
        <h1>NOTRE HISTOIRE</h1>
            <p>L’aventure de Back2Pixels a commencé avec une
                simple idée : permettre aux joueurs de découvrir
                de nouveaux jeux sans se ruiner et de donner une
                seconde vie aux consoles et accessoires qui 
                dorment souvent dans nos placards. En tant que
                gamers passionnés, nous avons constaté combien
                il peut être coûteux de toujours acheter les
                derniers jeux et consoles, sans parler du 
                manque d’espace pour tout conserver !</p>
            <p>Ce constat nous a inspirés à créer une plateforme
                qui facilite l’échange entre joueurs, offrant 
                une alternative simple et conviviale à l’achat
                traditionnel. Dès le départ, notre objectif a 
                été de bâtir une communauté de gamers qui 
                partagent notre passion et qui, comme nous, 
                voient dans chaque échange une opportunité 
                de découverte et de connexion.</p>
            <p>Rejoignez-nous et faites partie de cette 
                aventure : chaque échange est une nouvelle 
                histoire !</p>
    </div>
    <div class="col-md-6">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/Perso/Pers3.png'); ?>" 
            alt="Pers2" width="270" height="360" class="img-fluid">
    </div>
    </div>
    </div>

    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-6">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/Perso/Pers4.png'); ?>" 
            alt="Pers2" width="270" height="360" class="img-fluid">
    </div> 
    <div class="col-md-6">
        <h1>CONFIANCE ET SÉCURITÉ</h1>
            <p>Nous savons que la sécurité et la confiance 
                sont essentielles pour une expérience 
                d’échange réussie. C’est pourquoi nous avons 
                mis en place des mesures solides pour 
                garantir que chaque transaction sur notre 
                plateforme se déroule dans les meilleures 
                conditions possibles.</p>
            <p>En cas de problème, notre service client est
                là pour vous accompagner et répondre à 
                toutes vos questions. Nous croyons fermement    
                qu’un environnement sécurisé et de 
                confiance est la clé pour créer une 
                communauté de gamers soudée et respectueuse.</p>
            <p>Back2Pixels, vous pouvez échanger en toute
                sérénité et concentrer votre énergie sur ce
                qui compte vraiment : le plaisir de 
                découvrir de nouveaux jeux et de faire des
                rencontres dans un environnement sûr.</p>           
    </div>
    </div>
    </div>
</body>

<?php get_footer();?>