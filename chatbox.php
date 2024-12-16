<?php
/* Template Name: Chat Box */

get_header();?>


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


    <div class="container my-5 d-flex">

    <div class="flex-shrink-0" style="width: 200px;">
        <h1><b>PROFILS</b></h1>
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
        <h1 class="text-right"><b>MESSAGES</b></h1>
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