<?php
/* Template Name: Créer Une Annonce */

get_header();?>


<body>
    <nav class="navbar navbar-expand-lg position-absolute w-100" style="z-index: 10;">
        <div class="container">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/dashboard'))); ?>" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/Logo.svg" alt="Logo" width="70" height="58">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/jeux-video-logged-in'))); ?>" class="nav-link active">Jeux vidéo</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/consoles-logged-in'))); ?>" class="nav-link active">Consoles</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/qui-sommes-nous-logged-in'))); ?>" class="nav-link active">Qui sommes-nous</a>
                    </li>
                </ul>
                <div class="ms-auto d-flex align-items-center">
                    <a class="text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('/profil'))); ?>" class="d-flex align-items-center me-3">
                    <i class="bi bi-person-fill me-3 footer-icon"></i></a>
                    <a class="text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('/chat-box'))); ?>" class="d-flex align-items-center me-4">
                    <i class="bi bi-chat-fill footer-icon me-3"></i></a>

                    <?php if (is_user_logged_in()):?>
                    <a href="<?php echo wp_logout_url();?>" class="custom-button">Déconnexion</a>
                    <?php endif; ?>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/creer-une-annonce'))); ?>" class="custom-button">Créer une annonce</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="position-relative">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero.png" 
            alt="gensquijouent" 
            class="img-fluid w-100" 
            style="border-radius: 0;">

        <div class="position-absolute top-50 start-50 translate-middle text-center text-white  p-md-4">
            <h1 class="display-3 display-md-1"><b>CRÉER UNE ANNONCE</b></h1>
            <p class="lead lead-md">Publie tes annonces et trouve rapidement l’échange idéal pour tes jeux et consoles !</p>
        </div>
    </div>







    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh; position: relative;">

        <div class="position-relative" style="width: 80%; height: 200px; background-color: gray; display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
            <button type="button" class="custom-button" style="background-color: white;">Ajouter des photos</button>
        </div>

        <form method="POST" action="votre_action.php" class="w-100">
                <div class="mb-3">
                    <label for="exampleInputTitre1" class="form-label"><b>Titre</b></label>
                    <input type="text" class="form-control" id="exampleInputTitre1" aria-describedby="titreHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><b>Description</b></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="d-flex mb-3">
                    <div class="form-check me-4">
                        <input type="checkbox" class="form-check-input" id="exampleCheckJeuxVideo">
                        <label class="form-check-label" for="exampleCheckJeuxVideo">Jeux vidéo</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheckConsoles">
                        <label class="form-check-label" for="exampleCheckConsoles">Consoles</label>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="custom-button">Ajouter</button>
                </div>
        </form>

    </div>





</body>

<?php get_footer(); ?>