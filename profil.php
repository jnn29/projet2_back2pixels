<?php
get_header();?>

<?php
    $article_3_id = 123;
    $avatar_url = 'https://robohash.org/' . $article_3_id;
?>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #7058A8;">
        <div class="container">
      
            <a class="navbar-brand" href="index.php">
                <img src="<?php echo get_template_directory_uri(); ?>/Fichier 4.svg" 
                    alt="Logo" width="60" height="48">
            </a>

        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="menu">
                <b><ul class="navbar-nav me-auto">
                    <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(64); ?>">Jeux vidéo</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(68); ?>">Consoles</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(); ?>">Qui sommes-nous</a>
                    </li>
                </ul></b>

        <div class="ms-auto">
            <button class="custom-button">S'inscrire/se connecter</button>
            <button class="custom-button">Créer une annonce</button>
        </div>
        </div>
        </div>
    </nav>

    <div class="container my-5"> 
    <div class="row gy-2">
        <div class="col-md-6">
        
            <img src="https://www.w3schools.com/w3images/avatar2.png" 
                alt="Photo de profil libre de droit" 
                class="img-thumbnail" 
                style="width: 290px; height: 350px;">
        </div>

        <div class="col-md-6">   
                <h1>NARUTO_LPB</h1>   
                <hr style="border-top: 4px solid #000; margin: 15px 0;">  
                <p><b>Bio</b> : J’ai 27 ans et je vis à Bruxelles. 
                Je suis collectionneur de jeux vidéo et consoles rétro (Playstaion, Nintendo DS, Gameboy, PSP,...). 
                Je veux pouvoir agrandir ma collection sans devoir dépenser d’énormes sommes. 
                Et, si c’est possible, faire de nouvelles rencontres et partager ma passion.
                </p>
    
            <div class="d-flex justify-content-end mt-3">
                <button class="custom-button">Modifier le profil</button>
            </div>
        </div>
    </div>
    </div>

</body>

<?php get_footer(); ?>