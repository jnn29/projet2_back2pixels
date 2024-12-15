<?php
/* Template Name: Consoles */

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
                    <a href="<?php echo get_permalink(110); ?>" class="custom-button">S'inscrire/Se connecter</a>
                    <a href="<?php echo get_permalink(110); ?>" class="custom-button">Créer une annonce</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row gy-5 mb-5">
            <div class="col-6 col-md-3">
                <h1><br><b>CONSOLES</b></br></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gy-5 mb-5">
            <div class="col-6 col-md-3">
                <?php 
                $article_1 = get_post(26);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_1->ID; ?>" 
                         alt="Avatar personnalisé" 
                         class="img-thumbnail" 
                         style="width: 40px; height: 40px;" />
                        <span class="ms-2">orithian</span>
                    </div>

                    <a href="<?php echo get_permalink(110); ?>">
                        <?php echo get_the_post_thumbnail($article_1->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_1); ?></h5>
                        <p><?php echo wp_trim_words($article_1->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_2 = get_post(28);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_2->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">azdar</span>
                    </div>

                    <a href="<?php echo get_permalink(110); ?>">
                        <?php echo get_the_post_thumbnail($article_2->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_2); ?></h5>
                        <p><?php echo wp_trim_words($article_2->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_3 = get_post(30);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_3->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">monhero00</span>
                    </div>

                    <a href="<?php echo get_permalink(110); ?>">
                        <?php echo get_the_post_thumbnail($article_3->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_3); ?></h5>
                        <p><?php echo wp_trim_words($article_3->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_4 = get_post(32);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_4->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">zarahzu</span>
                    </div>

                    <a href="<?php echo get_permalink(110); ?>">
                        <?php echo get_the_post_thumbnail($article_4->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_4); ?></h5>
                        <p><?php echo wp_trim_words($article_4->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gy-5 mb-5">
            <div class="col-6 col-md-3">
                <?php 
                $article_1 = get_post(51);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_1->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">frambleman</span>
                    </div>

                    <a href="<?php echo get_permalink(110); ?>">
                        <?php echo get_the_post_thumbnail($article_1->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_1); ?></h5>
                        <p><?php echo wp_trim_words($article_1->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_2 = get_post(53);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_2->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">biffowolf</span>
                    </div>

                    <a href="<?php echo get_permalink(110); ?>">
                        <?php echo get_the_post_thumbnail($article_2->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_2); ?></h5>
                        <p><?php echo wp_trim_words($article_2->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_3 = get_post(55);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_3->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">qksilver253</span>
                    </div>

                    <a href="<?php echo get_permalink(110); ?>">
                        <?php echo get_the_post_thumbnail($article_3->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_3); ?></h5>
                        <p><?php echo wp_trim_words($article_3->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_4 = get_post(59);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_4->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">amby2024</span>
                    </div>

                    <a href="<?php echo get_permalink(110); ?>">
                        <?php echo get_the_post_thumbnail($article_4->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_4); ?></h5>
                        <p><?php echo wp_trim_words($article_4->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(110); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php get_footer(); ?>