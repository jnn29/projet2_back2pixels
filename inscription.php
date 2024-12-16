<?php
/* Template Name: Inscription */

get_header();?>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_permalink(105); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/Fichier 2 - Copie.svg" alt="Logo" width="60" height="48">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
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
                        <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(103); ?>">Qui sommes-nous</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a href="<?php echo get_permalink(110); ?>" class="custom-button">S'inscrire/se connecter</a>
                    <a href="<?php echo get_permalink(110); ?>" button class="custom-button">Créer une annonce</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-right">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><h5>NOM D'UTILISATEUR</h5></label>
                    <input type="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><h5>E-MAIL</h5></label>
                    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="MailHelp">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><h5>Password</h5></label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">En t’inscrivant, tu confirmes que tu as au moins 18 ans.</label>
                </div>

                <a href="<?php echo get_permalink(115); ?>" class="custom-button">S'INSCRIRE</a>

                <p class="text-center mt-4">
                Tu as déjà un compte ?
                <a class="link-opacity-75-hover" href="<?php echo get_permalink(112); ?>">Se connecter</a>
                </p>

            </form>
        </div>
    </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php get_footer(); ?>