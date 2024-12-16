document.addEventListener('DOMContentLoaded', () => {
  const messagesDiv = document.getElementById('messages');
  const messageInput = document.getElementById('messageInput');
  const sendButton = document.getElementById('sendButton');
  const profilesDiv = document.getElementById('profiles');

  if (!messagesDiv || !messageInput || !sendButton || !profilesDiv) {
    console.error("Un ou plusieurs éléments requis sont manquants dans le DOM.");
    return;
  }

  const profiles = [
    { id: 1, name: 'Alice', img: 'https://via.placeholder.com/40?text=A' },
    { id: 2, name: 'Bob', img: 'https://via.placeholder.com/40?text=B' },
    { id: 3, name: 'Charlie', img: 'https://via.placeholder.com/40?text=C' },
    { id: 4, name: 'Diana', img: 'https://via.placeholder.com/40?text=D' },
  ];

  profiles.forEach(profile => {
    const profileItem = document.createElement('div');
    profileItem.classList.add('profile-item');
    profileItem.innerHTML = `
      <img src="${profile.img}" alt="${profile.name}" class="profile-img">
      <span>${profile.name}</span>
    `;
    profilesDiv.appendChild(profileItem);

    profileItem.addEventListener('click', () => {
      addMessage(`Vous discutez maintenant avec ${profile.name}`, 'received');
    });
  });

  function addMessage(content, type = 'sent') {
    if (!content) return;

    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message', type);
    messageDiv.textContent = content;

    messagesDiv.appendChild(messageDiv);
    messagesDiv.scrollTop = messagesDiv.scrollHeight;
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
