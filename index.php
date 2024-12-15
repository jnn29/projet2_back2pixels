<?php
/* header */

get_header();?>

<body>

<nav class="navbar navbar-expand-lg" style="background-color: #7058A8;">
    <div class="container">
      
        <a class="navbar-brand" href="index.php">
        <img src="<?php echo get_template_directory_uri(); ?>/Fichier 4.svg" 
            alt="Logo" width="60" height="48">
        </a>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(); ?>">Qui sommes-nous</a>
            </li>
        </ul>

    <div class="ms-auto">
        <button class="custom-button">S'inscrire/se connecter</button>
        <button class="custom-button">Créer une annonce</button>
    </div>
    </div>
    </div>
    </nav>

     <div class="container my-4">
     <div class="row">
     <div class="col-lg-4">
      <div class="profiles-container">
          <h5 class="text-left my-3">MESSAGES</h5>
     <div id="profiles">
     </div>
     </div>
     </div>

    <!-- Chat Box -->
    <div class="col-lg-8">
      <div class="chat-container">
        <div class="messages" id="messages"></div>
        <div class="input-group">
          <input type="text" id="messageInput" class="form-control" placeholder="Écrivez un message...">
          <button class="btn btn-primary" id="sendButton">Envoyer</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat avec Faux Profils</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="profiles" class="profiles-container"></div>
  <div id="messages" class="messages-container">
    <!-- Les messages seront ajoutés ici -->
  </div>
  <div class="input-group">
    <input type="text" id="messageInput" class="form-control" placeholder="Écrivez un message...">
    <button id="sendButton" class="btn">Envoyer</button>
  </div>
  <script src="script.js"></script>
</body>
</html>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php get_footer(); ?>