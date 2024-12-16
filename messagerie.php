<?php
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
                <b><ul class="navbar-nav me-auto">
                    <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(64); ?>">Jeux vidéo</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(68); ?>">Consoles</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="<?php echo get_permalink(); ?>">Qui sommes-nous</a>
                    </li>
                </ul></b>

        <div class="ms-auto">
            <button class="custom-button">S'inscrire/se connecter</button>
            <button class="custom-button">Créer une annonce</button>
        </div>
        </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center vh-100">
    <script src="script.js"></script>

  <div id="profiles" class="profiles-container col-lg-4">
    <div class="profile">naruto_lpb</div>
    <div class="profile">leo29</div>
    <div class="profile">cAssandra2004</div>
  </div>

    <div class="col-lg-8">
        <div class="chat-container">
        <div class="messages" id="messages"></div>
        </div>
        </div>
    </div>


  <div id="profiles" class="profiles-container"></div>
  <div id="messages" class="messages-container">
  
  </div>
  <div class="input-group">
    <input type="text" id="messageInput" class="form-control" placeholder="Écrivez un message...">
    <button class="custom-button">Envoyer</button>
  </div>
  <script src="script.js"></script>

</body>

<?php get_footer(); ?>