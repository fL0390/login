const label = document.querySelector('.label');
// Modifies the 'label' when the input field is focused
inputField.addEventListener('focus', function () {
    label.style.fontSize = '12px';
    label.style.color = '#007bff';
    label.style.backgroundColor = '#fff';
    label.style.opacity = '1';
});
