<?php
/* header */

get_header();?>

<body>
<nav class="navbar navbar-expand-lg">
<nav class="navbar" style="background-color: #7058A8;">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="<?php echo get_template_directory_uri(); ?>/Fichier 4.svg" 
                alt="Logo" width="60" height="48"></a>

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
          <h1>Inscription</h1>

    <div class="container">
        <form action="welcome.php" method="post"></div>

    <div class="container">Nom d'utilisateur</div>
            <p><input type="text" name="nom d'utilisateur"></p>

    <div class="container">Email</div> 
            <p><input type="text" name="email"></p>

    <div class="container">Mot de passe</div> 
        <p><input type="text" name="mot de passe"></p>

    <div class="container"><input type="radio" name="x" 
        value="En t’inscrivant, tu comfirmes que tu as au moins au moins 18 ans.">
            En t’inscrivant, tu comfirmes que tu as au moins au moins 18 ans.</div><br>

            <button class="custom-button">Envoyer</button>
        </form>
    </div><br>
</body>

<?php get_footer();?>