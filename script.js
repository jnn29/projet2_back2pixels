// Attendre que le DOM soit prêt
document.addEventListener('DOMContentLoaded', () => {
    const messagesDiv = document.getElementById('messages');
    const messageInput = document.getElementById('messageInput');
    const sendButton = document.getElementById('sendButton');
    const profilesDiv = document.getElementById('profiles');
  
    // Vérification des éléments HTML
    if (!messagesDiv || !messageInput || !sendButton || !profilesDiv) {
      console.error("Un ou plusieurs éléments requis sont manquants dans le DOM.");
      return;
    }
  
    // Liste des faux profils
    const profiles = [
      { id: 1, name: 'Alice', img: 'https://via.placeholder.com/40?text=A' },
      { id: 2, name: 'Bob', img: 'https://via.placeholder.com/40?text=B' },
      { id: 3, name: 'Charlie', img: 'https://via.placeholder.com/40?text=C' },
      { id: 4, name: 'Diana', img: 'https://via.placeholder.com/40?text=D' },
    ];
  
    // Afficher les profils dynamiquement
    profiles.forEach(profile => {
      const profileItem = document.createElement('div');
      profileItem.classList.add('profile-item'); // Classe pour styling
      profileItem.innerHTML = `
        <img src="${profile.img}" alt="${profile.name}" class="profile-img">
        <span>${profile.name}</span>
      `;
      profilesDiv.appendChild(profileItem);
  
      // Ajouter un événement de clic sur chaque profil
      profileItem.addEventListener('click', () => {
        addMessage(`Vous discutez maintenant avec ${profile.name}`, 'received');
      });
    });
  
    // Fonction pour ajouter un message
    function addMessage(content, type = 'sent') {
      if (!content) return; // Évite les messages vides
  
      const messageDiv = document.createElement('div');
      messageDiv.classList.add('message', type);
      messageDiv.textContent = content;
  
      messagesDiv.appendChild(messageDiv);
      messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroller vers le bas automatiquement
    }
  
    // Fonction pour gérer l'envoi de message
    function handleSendMessage() {
      const message = messageInput.value.trim();
      if (message) {
        addMessage(message, 'sent'); // Ajouter le message de l'utilisateur
        messageInput.value = ''; // Réinitialiser le champ de saisie
  
        // Simuler une réponse automatique
        setTimeout(() => {
          addMessage('Réponse automatique', 'received');
        }, 1000);
      }
    }
  
    // Ajouter un événement au bouton d'envoi
    sendButton.addEventListener('click', handleSendMessage);
  
    // Ajouter un événement pour la touche "Enter"
    messageInput.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') {
        handleSendMessage();
      }
    });
  });
  