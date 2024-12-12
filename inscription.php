<?php
/* header */

get_header();?>

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
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(64); ?>">Jeux vidéo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(68); ?>">Consoles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(); ?>">Qui sommes-nous</a>
            </li>
        </ul>

    <div class="ms-auto">
        <button class="custom-button">S'inscrire/se connecter</button>
        <button class="custom-button">Créer une annonce</button>
    </div>
    </div>
    </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="text-right">
        <?php
        echo "<h1>Inscription</h1>";
        ?> 

        <form action="welcome.php" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="username" name="username" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="form-check mb-3">
            <input class="form-check-input" type="radio" id="confirmation" name="confirmation" value="oui" required>
        <label class="form-check-label" for="confirmation">
            En t’inscrivant, tu confirmes que tu as au moins 18 ans.
        </label>
    </div>

        <button class="custom-button">Envoyer</button>
        </form>
    </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php get_footer(); ?>