const label = document.querySelector('.label');

inputField.addEventListener('focus', function () {
    label.style.fontSize = '12px';
    label.style.color = '#007bff';
    label.style.backgroundColor = '#fff';
    label.style.opacity = '1';
});