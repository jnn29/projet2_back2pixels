<?php

get_header();
?>


<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #7058A8;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="<?php echo get_template_directory_uri(); ?>/Logo.svg" 
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

    <div style="display: flex; gap: 10px;">
   
    <div id="profiles" style="width: 200px; border: 1px solid #000; padding: 10px; margin-bottom: 10px; margin-top: 10px;;">
        <h5>PROFILS</h5>
        <ul style="list-style: none; padding: 0; margin: 0;">
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img 
                src="https://robohash.org/2a02:1808:81:2cca:a99d:c3b2:362:79b5.png" 
                alt="Avatar Profil 1" 
                style="border-radius: 50%; margin-right: 10px; width: 50px; height: 50px;"/>
                <span>Juan</span>
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="https://robohash.org/Green" 
                alt="Avatar Profil 2" 
                style="border-radius: 50%; margin-right: 10px; width: 50px; height: 50px;" />
                <span>Luis</span>
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="https://robohash.org/lala" 
                alt="Avatar Profil 3" 
                style="border-radius: 50%; margin-right: 10px; width: 50px; height: 50px" />
                <span>Pedro</span>
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="https://robohash.org/orange" 
                alt="Avatar Profil 4" 
                style="border-radius: 50%; margin-right: 10px; width: 50px; height: 50px" />
                <span>Tama</span>
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="https://robohash.org/black" 
                alt="Avatar Profil 5" 
                style="border-radius: 50%; margin-right: 10px; width: 50px; height: 50px" />
                <span>Camellia</span>
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="https://robohash.org/yellow" 
                alt="Avatar Profil 6" 
                style="border-radius: 50%; margin-right: 10px; width: 50px; height: 50px" />
                <span>Luz</span>
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="https://robohash.org/violet" 
                alt="Avatar Profil 7" 
                style="border-radius: 50%; margin-right: 10px; width: 50px; height: 50px" />
                <span>Augustine</span>
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="https://robohash.org/POPOP" 
                alt="Avatar Profil 8" 
                style="border-radius: 50%; margin-right: 10px; width: 50px; height: 50px" />
                <span>Diego</span>
            </li>
        </ul>
    </div>

    
    <div style="flex: 1; margin-top: 10px;">
        <div id="messages" style="height: 500px; overflow-y: auto; border: 1px solid #000; padding: 10px; margin-bottom: 10px;"></div>
            <div style="display: flex; gap: 3px; margin-bottom: 10px;">
                <input type="text" id="messageInput" placeholder="Écrivez un message..." style="flex: 1;" />
                <button type="submit" class="custom-button" id="sendButton">Envoyer</button>      
            </div>
        </div>
    </div>

    <script>

    document.addEventListener('DOMContentLoaded', () => {
    const messagesDiv = document.getElementById('messages');
    const messageInput = document.getElementById('messageInput');
    const sendButton = document.getElementById('sendButton');

    if (!messagesDiv || !messageInput || !sendButton) {
        console.error("Un ou plusieurs éléments requis sont manquants dans le DOM.");
        return;
    }

    function addMessage(content, type = 'sent') {
        if (!content) return;

        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message', type);
        messageDiv.style.marginBottom = "5px";
        messageDiv.style.padding = "10px";
        messageDiv.style.borderRadius = "5px";
        messageDiv.style.backgroundColor = type === 'sent' ? '#d1e7dd' : '#f8d7da';

        messageDiv.textContent = content;
        messagesDiv.appendChild(messageDiv);
        messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scrolle automatiquement en bas
    }

    function handleSendMessage() {
        const message = messageInput.value.trim();
        if (message) {
            addMessage(message, 'sent');
            messageInput.value = '';
            setTimeout(() => {
                addMessage('Réponse automatique', 'received');
            }, 1000);
        }
    }

    sendButton.addEventListener('click', handleSendMessage);
    messageInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            handleSendMessage();
        }
    });
});
</script>  
    
</body>

<?php get_footer(); ?>