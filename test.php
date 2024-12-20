<?php


    session_start();

        if (!isset($_SESSION['messages'])) {
            $_SESSION['messages'] = [
                ["type" => "received", "content" => "Bonjour, comment ça va ?"],
                ["type" => "received", "content" => "Tu aimes les jeux vidéo ?"],
            ];
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
            $userMessage = htmlspecialchars($_POST['message']); 
            $_SESSION['messages'][] = ["type" => "sent", "content" => $userMessage];

            $autoResponse = "Merci pour votre message : \"" . $userMessage . "\". Nous vous répondrons bientôt !";
            $_SESSION['messages'][] = ["type" => "received", "content" => $autoResponse];
        }

        $messagesToDisplay = $_SESSION['messages'];

        unset($_SESSION['messages']);


        get_header();
        ?>

    
        <style>
            .row {
                display: flex;
                align-items: stretch;
            }

            .sidebar {
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: #f4f4f4;
                padding: 10px;
                border-right: 1px solid #ddd;
            }

            .profile {
                width: 100%;
                text-align: center;
                padding: 10px;
                border: 1px solid #ddd;
                margin-bottom: 5px;
                background-color: #f9f9f9;
                border-radius: 4px;
            }

            .card {
                display: flex;
                flex-direction: column;
            }

            .card-body {
                flex: 1;
                overflow-y: auto;
                background-color: #f9f9f9;
            }

            .custom-button {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 8px 12px;
                border-radius: 4px;
                cursor: pointer;
            }

            .custom-button:hover {
                background-color: #0056b3;
            }

            .text-right {
                text-align: right;
                color: blue;
            }

            .text-left {
                text-align: left;
                color: green;
            }
    </style>

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
                      <h5><a class="nav-link active" aria-current="page" href="<?php echo get_permalink(64); ?>">Jeux vidéo</a></h5>
                    </li>
                    <li class="nav-item">
                        <h5><a class="nav-link active" aria-current="page" href="<?php echo get_permalink(68); ?>">Consoles</a></h5>
                    </li>
                    <li class="nav-item">
                        <h5><a class="nav-link active" aria-current="page" href="<?php echo get_permalink(); ?>">Qui sommes-nous</a></h5>
                    </li>
                </ul></b>

                <div class="ms-auto">
                   <button class="custom-button">S'inscrire/se connecter</button>
                   <button class="custom-button">Créer une annonce</button>
                </div>
            </div>
        </div>
    </nav>

    

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 sidebar">
                <h5 class="text-center">PROFILS</h5>
                <?php
                $profils = ["Juan", "Luis", "Pedro", "Raleigh", "Nancie", "Tama", "Camellia", "Augustine", "Christeen", "Luz", "Diego"];
                foreach ($profils as $index => $profil) {
                    echo "<div class='profile' id='profile" . ($index + 1) . "'>$profil</div>";
                }
                ?>
            </div>

            <div class="col-md-9">
                <div class="card" style="height: 700px; display: flex; flex-direction: column;">
                    <h5>
                        <div class="card-header" id="chatHeader">Messages</div>
                    </h5>
                    
                    <div class="messages-container" style="flex-grow: 1; overflow-y: auto; padding: 10px;">
                        <?php
                            foreach ($messagesToDisplay as $message) {
                                $class = $message['type'] === "sent" ? "text-right" : "text-left";
                                echo '<p class="' . $class . '">' . htmlspecialchars($message['content']) . '</p>';
                            }
                        ?>
                    </div>

                   

                    <div class="card-footer">
                        <form method="post" action="">
                            <div class="input-group">
                                <input 
                                    type="text" 
                                    id="messageInput" 
                                    name="message" 
                                    class="form-control" 
                                    placeholder="Écrivez un message..." 
                                    required 
                                    style="height: 50px;">
                                <button type="submit" class="custom-button">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php get_footer(); ?>
