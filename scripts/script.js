const label = document.querySelector('.label');
// Modifies the 'label' when the input field is focused
inputField.addEventListener('focus', function () {
    label.style.fontSize = '12px';
    label.style.color = '#007bff';
    label.style.backgroundColor = '#fff';
    label.style.opacity = '1';
});

document.querySelector('form').addEventListener('submit', async function (event) {
    event.preventDefault(); // Prevent form submission

    const username = document.querySelector('#username').value.trim();
    const password = document.querySelector('#password').value.trim();
    const language = document.querySelector('#language-select').value;

    const formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);
    formData.append('language', language);

    try {
        const response = await fetch('validate.php', {
            method: 'POST',
            body: formData
        });
        const result = await response.json();

        // Find the password field's parent container
        const passwordContainer = document.querySelector('#password').parentElement;

        // Find or create the error message container
        let errorMessage = document.querySelector('#message');
        if (!errorMessage) {
            errorMessage = document.createElement('div');
            errorMessage.id = 'message';
            errorMessage.style.marginTop = '10px';
            errorMessage.style.fontWeight = 'bold';
            passwordContainer.appendChild(errorMessage);
        }

        // Update the error message content and style
        if (result.status === 'error') {
            errorMessage.textContent = result.message;
            errorMessage.style.color = 'red';
            errorMessage.style.animation = 'flash 1s infinite';
        } else if (result.status === 'success') {
            errorMessage.textContent = 'Registration successful!';
            errorMessage.style.color = 'green';
            errorMessage.style.animation = 'none'; // Stop the flashing
        }
    } catch (error) {
        console.error('Error:', error);
    }
});
