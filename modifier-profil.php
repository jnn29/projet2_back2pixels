<?php

/* Template Name: Modifier Le Profil*/

get_header();?>

<?php
    $article_3_id = 123;
    $avatar_url = 'https://robohash.org/' . $article_3_id;
?>

<body>

    <div class="container my-5"> 
    <div class="row gy-2">
        <div class="col-md-6">
        
            <img src="https://www.w3schools.com/w3images/avatar2.png" 
                alt="Photo de profil libre de droit" 
                class="img-thumbnail" 
                style="width: 290px; height: 350px;">
        </div>

        <div class="col-md-6">   
                <h1><b>NARUTO_LPB</b></h1>   
                <hr style="border-top: 4px solid #000; margin: 15px 0;">  
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><h5><b>MODIFIER MA BIO :</b></h5></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
            <div class="d-flex justify-content-end mt-3">
                <button class="custom-button">Modifier le profil</button>
            </div>
        </div>
    </div>
    </div>

</body>

<?php get_footer(); ?>