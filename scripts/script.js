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
        label.style.backgroundColor = '#fff';  // Ensure the background stays white
        label.style.opacity = '1'; // Keep opacity at 1
    }
});