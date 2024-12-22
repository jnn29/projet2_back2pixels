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