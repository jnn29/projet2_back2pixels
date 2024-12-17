<?php
/* Template Name: Consoles */

get_header();
include_once  'includes/randomName.php';
?>

<div class="container">
        <div class="row gy-5 mb-5">
            <div class="col-6 col-md-3">
                <h1><br><b><?php the_title(); ?></b></br></h1>
            </div>
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
                        <a href="<?php the_permalink(); ?>" class="custom-button">MESSAGE</a>
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