<?php 
/* Template Name: Console Logged In */

get_header(); ?>  



<body>

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

                    <a href="<?php echo get_permalink(134); ?>">
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

                    <a href="<?php echo get_permalink(136); ?>">
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

                    <a href="<?php echo get_permalink(138); ?>">
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

                    <a href="<?php echo get_permalink(140); ?>">
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

                    <a href="<?php echo get_permalink(142); ?>">
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

                    <a href="<?php echo get_permalink(144); ?>">
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

                    <a href="<?php echo get_permalink(147); ?>">
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

                    <a href="<?php echo get_permalink(150); ?>">
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

