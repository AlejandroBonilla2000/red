function validateLogin() {
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    if (email === '' || password === '') {
        alert('Por favor, complete todos los campos.');
        return false;
    }

    if (!validateEmail(email)) {
        alert('Por favor, ingrese un correo electrónico válido.');
        return false;
    }

    return true;
}

function validateEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email);
}

function validateForm() {
    const nombre = document.querySelector('input[name="nombre"]').value.trim();
    const edad = document.querySelector('input[name="edad"]').value.trim();
    const telefono = document.querySelector('input[name="telefono"]').value.trim();

    if (nombre === '' || edad === '' || telefono === '') {
        alert('Por favor, complete todos los campos del formulario.');
        return false;
    }

    if (isNaN(edad) || edad <= 0) {
        alert('Por favor, ingrese una edad válida.');
        return false;
    }

    return true;
}
