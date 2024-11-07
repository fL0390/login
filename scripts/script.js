const inputField = document.getElementById('input-field');
const label = document.querySelector('.label');

inputField.addEventListener('focus', function () {
    label.style.top = '0.1px';
    label.style.fontSize = '12px';
    label.style.color = '#007bff';
    label.style.backgroundColor = '#fff';
    label.style.opacity = '1';
});

inputField.addEventListener('blur', function () {
    if (inputField.value.trim() === '') {
        label.style.top = '50%';
        label.style.fontSize = '16px';
        label.style.color = '#888';
        label.style.backgroundColor = '#fff'; 
        label.style.opacity = '1';
    }
});

// Typing effect for the "Please log in" text
const typingText = document.querySelector('.typing-text');
const text = "Please log in";
let index = 0;

function typeText() {
    if (index < text.length) {
        typingText.textContent += text.charAt(index);
        index++;
        setTimeout(typeText, 100); // Adjust typing speed by changing the delay (in milliseconds)
    }
}

// Start the typing effect when the page loads
document.addEventListener("DOMContentLoaded", typeText);
