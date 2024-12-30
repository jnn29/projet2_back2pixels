<?php
/* Template Name: Chat Box */

get_header();?>


<body>

    <nav class="navbar navbar-expand-lg position-absolute w-100" style="z-index: 10;">
        <div class="container">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('/dashboard'))); ?>" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/Logo.svg" alt="Logo" width="70" height="58">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/jeux-video-logged-in'))); ?>" class="nav-link active">Jeux vidéo</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/consoles-logged-in'))); ?>" class="nav-link active">Consoles</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/qui-sommes-nous-logged-in'))); ?>" class="nav-link active">Qui sommes-nous</a>
                    </li>
                </ul>
                <div class="ms-auto d-flex align-items-center">
                    <a class="text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('/profil'))); ?>" class="d-flex align-items-center me-3">
                    <i class="bi bi-person-fill me-3 footer-icon"></i></a>
                    <a class="text-white" href="<?php echo esc_url(get_permalink(get_page_by_path('/chat-box'))); ?>" class="d-flex align-items-center me-4">
                    <i class="bi bi-chat-fill footer-icon me-3"></i></a>

                    <?php if (is_user_logged_in()):?>
                    <a href="<?php echo wp_logout_url();?>" class="custom-button">Déconnexion</a>
                    <?php endif; ?>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/creer-une-annonce'))); ?>" class="custom-button">Créer une annonce</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="position-relative">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero.png" 
            alt="gensquijouent" 
            class="img-fluid w-100" 
            style="border-radius: 0;">

        <div class="position-absolute top-50 start-50 translate-middle text-center text-white  p-md-4">
            <h1 class="display-3 display-md-1"><b>MESSAGES</b></h1>
            <p class="lead lead-md">Reste connecté et échange facilement avec la communauté : ta messagerie t’attend pour des discussions rapides et sécurisées !</p>
        </div>
    </div>


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