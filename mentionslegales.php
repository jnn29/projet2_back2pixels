<?php
/* Template Name: Mentions Légales */

get_header();?>

<body>
    <nav class="navbar navbar-expand-lg position-absolute w-100" style="z-index: 10;">
        <div class="container">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/homepage'))); ?>" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/!!" alt="Logo" width="70" height="58">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/jeux-video'))); ?>" class="nav-link active">JEUX VIDÉO</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/consoles'))); ?>" class="nav-link active">CONSOLES</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/qui-sommes-nous'))); ?>" class="nav-link active">QUI SOMMES-NOUS</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/inscription'))); ?>" class="custom-button">S'INSCRIRE/SE CONNECTER</a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/inscription'))); ?>" class="custom-button">CRÉER UNE ANNONCE</a>
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
            <h1 class="display-3 display-md-1"><b>MENTIONS LÉGALES</b></h1>
            <p class="lead lead-md">Transparence et confiance avant tout : consultez nos mentions légales pour en savoir plus sur notre engagement et nos pratiques.</p>
        </div>
    </div>

    <div class="container my-5">
        <h1><b>MENTIONS LÉGALES</b></h1>
        
        <p>Back2Pixels SRL</p>
        <p>Rue de la Poste 11, 1030 Schaerbeek</p>
        <p>E-mail: contact@back2pixels.com</p>
        <p>Téléphone: 0486/17.49.55</p>
    </div>
</body>

<?php get_footer(); ?>