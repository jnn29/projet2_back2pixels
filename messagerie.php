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

    <div class="container my-5 d-flex">

    <div class="flex-shrink-0" style="width: 200px;">
        <h1>PROFILS</h1>
        <ul class="list-group">
            <li class="list-group-item">naruto_lpb</li>
            <li class="list-group-item">leo29</li>
            <li class="list-group-item">cAssandra2004</li>
            <li class="list-group-item">blandine87</li>
            <li class="list-group-item">orithian</li>
            <li class="list-group-item">azdar</li>
            <li class="list-group-item">monhero00</li>
        </ul>
    </div>

    <div class="flex-grow-1 ms-4">
        <h1 class="text-right">MESSAGES</h1>
        <div id="chatBox" class="border p-3" style="height: 300px; overflow-y: auto;"></div>

        <div class="my-2">
            <label for="messageInput" class="form-label"></label>
            <div class="input-group">
                <input type="text" id="messageInput" class="form-control" placeholder="Tapez votre message...">
                <button id="sendMessage" class="custom-button">Envoyer</button>  
            </div>
        </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#sendMessage').on('click', function() {
            let message = $('#messageInput').val();
            if (message.trim() !== "") {
                $('#chatBox').append(`<p>${message}</p>`);
                $('#messageInput').val('');
                $('#chatBox').scrollTop($('#chatBox')[0].scrollHeight);
        setTimeout(function() {
            $('#chatBox').append(`<p><strong>naruto_lpb:</strong> Merci pour votre message, nous reviendrons vers vous bientôt !</p>`);
            $('#chatBox').scrollTop($('#chatBox')[0].scrollHeight);
            }, 2000);
            }
        });
    });
</script>

</body>
<?php get_footer(); ?>