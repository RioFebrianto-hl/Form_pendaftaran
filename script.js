const nimInput = document.getElementById('nim');
const angkatanInput = document.getElementById('angkatan');

nimInput.addEventListener('input', function() {

    let nim = nimInput.value;

    if(nim.length >= 2) {
        angkatanInput.value = nim.substring(0, 2);
    } else {
        angkatanInput.value = '';
    }
});