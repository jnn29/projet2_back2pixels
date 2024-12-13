<?php
/* Template Name: Log In */

get_header();?>


<?php
session_start();

// Identifiants fixes
define('USERNAME', 'jinanecharline'); // Nom d'utilisateur prédéfini
define('PASSWORD', 'onesttropcool'); // Mot de passe prédéfini

// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Vérification des identifiants
    if ($username === USERNAME && $password === PASSWORD) {
        $_SESSION['user'] = USERNAME; // Enregistre l'utilisateur dans la session
        header("Location: dashboard.php"); // Redirige vers le tableau de bord après connexion
        exit();
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<body>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-right">
            <h1>Connecte-toi !</h1>

            <?php if (isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            <?php endif; ?>

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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>


<?php get_footer(); ?>