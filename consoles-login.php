<?php 
/* Template Name: Console Logged In */

get_header(); 
include_once  'includes/randomName.php';
 ?>  



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
            <h1 class="display-3 display-md-1"><b>LES CONSOLES</b></h1>
            <p class="lead lead-md">Donne une nouvelle vie à tes consoles : échange-les facilement et explore de nouvelles expériences de jeu !</p>
        </div>
    </div>




    <?php
        $stations = new WP_Query([
        'post_type' => 'stations',
        'post_status' => 'publish'
        ]);

        if ($stations->have_posts()) :
        $i = 1;
    ?>

    <div class="container my-5">
            <div class="row gy-5 mb-5">
        <div class="container my-5">
            <div class="row gy-5">
            <?php while ($stations->have_posts()) : $stations->the_post(); ?>
                <div class="col-6 col-md-3">
                    <div class="card" style="max-width: 250px; margin: 0 auto;">
                        <div class="d-flex align-items-center p-2">
                            <?php $name = randomName(); ?>
                            <img src="<?php echo 'https://robohash.org/' . $name; ?>" 
                                alt="Avatar personnalisé" 
                                class="img-thumbnail" 
                                style="width: 40px; height: 40px;" />
                            <span class="ms-2"><?php echo $name; ?></span>
                        </div>

                            <?php
                            $custom_link = get_field('custom_link');
                            if ($custom_link) {
                                if (strpos($custom_link, 'http') !== 0) {
                                    $custom_link = home_url($custom_link);
                                }
                            } else {
                                $custom_link = get_permalink();
                            }
                            ?>

                            <a href="<?php echo esc_url($custom_link); ?>">
                                <?php the_post_thumbnail('medium', [
                                    'class' => 'card-img-top'
                                ]); ?>
                            </a>

                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p><?php the_content(); ?></p>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/chat-box'))); ?>" class="custom-button">MESSAGE</a>
                        </div>
                    </div>
                </div>
            <?php $i++; endwhile; ?>
            </div>
        </div>
    </div>

    </div>
<?php endif; ?>


<?php get_footer(); ?>