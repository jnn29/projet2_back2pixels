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

<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
        <input type="submit">
</form>
</body>

<?php get_footer();?>