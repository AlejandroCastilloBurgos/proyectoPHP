window.onload = iniciar;

function iniciar() {
    var log = document.getElementById('Login');
    log.addEventListener('click', botonLogear);
}

function botonLogear(event) {
    var contenedorNombre = document.getElementById("nombre");
    var contenedorContrasena = document.getElementById("contrasena");
    var user = document.getElementById('user').value;
    var pass = document.getElementById('pw').value;

    if (user == "") {
        //contenedorNombre.innerText = "Introduce un username";
        user.appendChild("asdasd");
        event.preventDefault();
    }
    if (pass == "") {
        // contenedorContrasena.innerText = "Introduce una contraseña";
        event.preventDefault();
    }
}
