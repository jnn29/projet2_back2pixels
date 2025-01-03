<?php 
/* Template Name: Homepage */

get_header();
include_once  'includes/randomName.php';
?>


<body>
    <nav class="navbar navbar-expand-lg position-absolute w-100" style="z-index: 10;">
        <div class="container">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/homepage'))); ?>" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/Logo.svg" alt="Logo" width="70" height="50">
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
            <h1 class="display-3 display-md-1"><b>BACK2PIXELS</b></h1>
            <p class="lead lead-md">Échange facilement et connecte-toi avec des passionnés comme toi ! T’es prêt ? À toi de jouer !</p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/inscription'))); ?>" class="custom-button">CRÉER UNE ANNONCE</a>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row gy-3">
            <div class="col-md-6">
                <div class="card" style="max-width: 400px; margin: 0 auto;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/JEUX.png" class="card-img-top" alt="explorerjeux">
                    <div class="card-body">
                        <h5 class="card-title">DÉCOUVRE LES JEUX VIDÉO</h5>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/jeux-video'))); ?>" class="custom-button">EXPLORER</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="max-width: 400px; margin: 0 auto;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/CONSOLES.png" class="card-img-top" alt="explorerconsoles">
                    <div class="card-body">
                        <h5 class="card-title">DÉCOUVRE LES CONSOLES</h5>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/consoles'))); ?>" class="custom-button">EXPLORER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row gy-5 mb-5">
            <div class="col-6 col-md-3">
                <h1><br><b>FIL D'ACTUALITÉ</b></br></h1>
                <hr style="border-top: 6px solid #7058A8; margin: 5px 0;">
            </div>
        </div>
    </div>
</body>



    <?php
        $games = new WP_Query([
        'post_type' => 'games',
        'post_status' => 'publish'
        ]);

        if ($games->have_posts()) :
        $i = 1;
    ?>

    <div class="container my-5">
        <div class="row gy-5 mb-5">
        <?php while ($games->have_posts()) : $games->the_post(); ?>
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

                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p><?php the_content(); ?></p>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/inscription'))); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>
        <?php $i++; endwhile; ?>
        </div>
    </div>
</div>

</div>
<?php endif; ?>




    <?php
        $stations = new WP_Query([
        'post_type' => 'stations',
        'post_status' => 'publish'
        ]);

        if ($stations->have_posts()) :
        $i = 1;
    ?>

    <div class="container">
        <div class="row gy-5 mb-5">
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

                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p><?php the_content(); ?></p>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/inscription'))); ?>" class="custom-button">MESSAGE</a>
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