<?php
/* Template Name: Connexion */

get_header();?>

<body>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-right">
            <?php
            echo "<h1>Connecte-toi !</h1>";
            ?>
            
            <form action="welcome.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Nom d'utilisateur ou email</label>
                <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
        </div>
            <button class="custom-button">Se connecter</button>
            </form>
        </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

<?php get_footer(); ?>