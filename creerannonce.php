<?php
/* Template Name: Créer Une Annonce */

get_header();?>


<body>

<div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh; position: relative;">
  
  <h1 class="text-left" style="position: absolute; top: 40px; left: 105px; margin: 0;">CRÉER UNE ANNONCE</h1> 

      <div class="position-relative" style="width: 80%; height: 200px; background-color: gray; display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
          <button type="button" class="custom-button" style="position: absolute; z-index: 2; background-color: white;">Ajouter des photos</button>
      </div>

      <form>
          <div class="mb-3">
              <b><label for="exampleInputTitre1" class="form-label">Titre</label></b>
              <input type="text" class="form-control" id="exampleInputTitre1" aria-describedby="titreHelp" style="width: 750px; height: 40px;">
          </div>

          <div class="mb-3">
              <b><label for="exampleFormControlTextarea1" class="form-label">Description</label></b>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

              <div class="d-flex mb-3">
                  <div class="form-check me-4">
                      <input type="checkbox" class="form-check-input" id="exampleCheckJeuxVideo">
                      <label class="form-check-label" for="exampleCheckJeuxVideo">Jeux vidéo</label>
                  </div>

                  <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheckConsoles">
                      <label class="form-check-label" for="exampleCheckConsoles">Consoles</label>
                  </div>
              </div>

          <div class="d-flex justify-content-end mt-3">
              <button type="submit" class="custom-button">Ajouter</button>
          </div>
      </form>
  </div>


</body>

<?php get_footer(); ?>