<?php
/* Template Name: Log In */

get_header();?>


<?php
session_start();


define('USERNAME', 'lala'); 
define('PASSWORD', '123'); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    if ($username === USERNAME && $password === PASSWORD) {
        $_SESSION['user'] = USERNAME;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

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
                    <a href="<?php echo get_permalink(110); ?>" class="custom-button">S'inscrire/Se connecter</a>
                    <a href="<?php echo get_permalink(110); ?>" class="custom-button">Créer une annonce</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container my-5 d-flex justify-content-center align-items-center">
        <div class="text-right">
            <h1>Connecte-toi !</h1>

            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Nom d'utilisateur ou email</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <a href="<?php echo get_permalink(115); ?>" class="custom-button">SE CONNECTER</a>
            </form>
        </div>
        </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>


<?php get_footer(); ?>