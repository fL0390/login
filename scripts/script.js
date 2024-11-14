const label = document.querySelector('.label');
//Modifica el 'label' quan aquest esta seleccionat.
inputField.addEventListener('focus', function () {
    label.style.fontSize = '12px';
    label.style.color = '#007bff';
    label.style.backgroundColor = '#fff';
    label.style.opacity = '1';
});