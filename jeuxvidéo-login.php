<?php 
/* Template Name: Jeux Vidéo Logged In */

get_header(); ?>   
    
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
                     <i class="bi bi-person-fill"></i>
                    <button class="custom-button">Créer une annonce</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row gy-5 mb-5">
            <div class="col-6 col-md-3">
                <h1><br><b>JEUX VIDÉO</b></br></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gy-5 mb-5">
            <div class="col-6 col-md-3">
                <?php 
                $article_1 = get_post(7);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_1->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">naruto_lpb</span>
                    </div>

                    <a href="<?php echo get_permalink(117); ?>">
                        <?php echo get_the_post_thumbnail($article_1->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_1); ?></h5>
                        <p><?php echo wp_trim_words($article_1->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(154); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_2 = get_post(20);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_2->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">leo29</span>
                    </div>

                    <a href="<?php echo get_permalink(119); ?>">
                        <?php echo get_the_post_thumbnail($article_2->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_2); ?></h5>
                        <p><?php echo wp_trim_words($article_2->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(154); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_3 = get_post(22);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_3->ID; ?>" 
                         alt="Avatar personnalisé" 
                         class="img-thumbnail" 
                         style="width: 40px; height: 40px;" />
                        <span class="ms-2">cAssandra2004</span>
                    </div>

                    <a href="<?php echo get_permalink(122); ?>">
                        <?php echo get_the_post_thumbnail($article_3->ID, 'medium', [
                            'class' => 'card-img-top'
                     ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_3); ?></h5>
                        <p><?php echo wp_trim_words($article_3->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(154); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_4 = get_post(24);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_4->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">blandine87</span>
                    </div>

                    <a href="<?php echo get_permalink(124); ?>">
                        <?php echo get_the_post_thumbnail($article_4->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_4); ?></h5>
                        <p><?php echo wp_trim_words($article_4->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(154); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gy-5 mb-5">
            <div class="col-6 col-md-3">
                <?php 
                $article_1 = get_post(38);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_1->ID; ?>" 
                         alt="Avatar personnalisé" 
                         class="img-thumbnail" 
                         style="width: 40px; height: 40px;" />
                        <span class="ms-2">meme-lala</span>
                    </div>

                    <a href="<?php echo get_permalink(126); ?>">
                        <?php echo get_the_post_thumbnail($article_1->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_1); ?></h5>
                        <p><?php echo wp_trim_words($article_1->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(154); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_2 = get_post(40);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_2->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">boob07</span>
                    </div>

                    <a href="<?php echo get_permalink(128); ?>">
                        <?php echo get_the_post_thumbnail($article_2->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_2); ?></h5>
                        <p><?php echo wp_trim_words($article_2->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(154); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_3 = get_post(42);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_3->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">filouliloula</span>
                    </div>

                    <a href="<?php echo get_permalink(130); ?>">
                        <?php echo get_the_post_thumbnail($article_3->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_3); ?></h5>
                        <p><?php echo wp_trim_words($article_3->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(154); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <?php 
                $article_4 = get_post(44);
                ?>
                <div class="card" style="max-width: 250px; margin: 0 auto;">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo 'https://robohash.org/' . $article_4->ID; ?>" 
                            alt="Avatar personnalisé" 
                            class="img-thumbnail" 
                            style="width: 40px; height: 40px;" />
                        <span class="ms-2">bob29</span>
                    </div>

                    <a href="<?php echo get_permalink(132); ?>">
                        <?php echo get_the_post_thumbnail($article_4->ID, 'medium', [
                            'class' => 'card-img-top'
                        ]); ?>
                    </a>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo get_the_title($article_4); ?></h5>
                        <p><?php echo wp_trim_words($article_4->post_content, 20); ?></p>
                        <a href="<?php echo get_permalink(154); ?>" class="custom-button">MESSAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php get_footer(); ?>
