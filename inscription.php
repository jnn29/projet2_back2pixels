<?php
/* Template Name: Inscription */

get_header();?>

<body>



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