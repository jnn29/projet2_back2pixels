<?php

/* Template Name: Profil */

get_header();?>


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
                <p><b>Bio</b> : J’ai 27 ans et je vis à Bruxelles. 
                Je suis collectionneur de jeux vidéo et consoles rétro (Playstaion, Nintendo DS, Gameboy, PSP,...). 
                Je veux pouvoir agrandir ma collection sans devoir dépenser d’énormes sommes. 
                Et, si c’est possible, faire de nouvelles rencontres et partager ma passion.
                </p>
    
            <div class="d-flex justify-content-end mt-3">
                <a href="<?php echo get_permalink(166); ?>" class="custom-button">MODIFIER LE PROFIL</a>
            </div>
        </div>
    </div>
    </div>

</body>

<?php get_footer(); ?>