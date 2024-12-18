<?php
/* Template Name: Inscription */

if (!is_user_logged_in()) {
    wp_redirect( home_url('/dashboard') );
      exit;
  }
  
  get_header();
  // attention c'est important de faire les redirection avant le header sinon la redirection ne marche pas
  ?>
  
    <div class="container my-5">
    <form method="post" name="myForm" class="mx-auto" style="max-width: 400px;">

        <div class="mb-3">
            <label for="uname" class="form-label"><h5><b>Nom d'utilisateur</b></h5></label>
            <input 
                type="text" 
                class="form-control" 
                id="uname" 
                name="uname" 
                placeholder="Entrez votre nom d'utilisateur" 
                required>
        </div>


        <div class="mb-3">
            <label for="email" class="form-label"><h5><b>Adresse e-mail</b></h5></label>
            <input 
                type="email" 
                class="form-control" 
                id="email" 
                name="uemail" 
                placeholder="Entrez votre adresse e-mail" 
                required>
        </div>

        <div class="mb-3">
            <label for="upass" class="form-label"><h5><b>Mot de passe</b></h5></label>
            <input 
                type="password" 
                class="form-control" 
                id="upass" 
                name="upass" 
                placeholder="Entrez votre mot de passe" 
                required>
        </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">En t’inscrivant, tu confirmes que tu as au moins 18 ans.</label>
                </div>

        <div class="d-grid">
            <button type="submit" class="custom-button">S'inscrire</button>
        </div>
    </form>
    </div>

  <?php get_footer(); ?>