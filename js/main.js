function iniciar() {
    var log = document.getElementById('Login');
    var registra = document.getElementById('registra');
    if (log) {
        log.addEventListener('click', botonLogear);
    }
    if (registra) {
        registra.addEventListener('click', comprobarEmail);
        registra.addEventListener('click', campoIncompleto);
        registra.addEventListener('click', comprobarContrasenas);
    }
}

window.onload = iniciar;

function botonLogear(event) {
    var contenedorNombre = document.getElementById("nombre");
    var contenedorContrasena = document.getElementById("contrasena");
    var user = document.getElementById('user').value;
    var pass = document.getElementById('pw').value;


    if (user == "") {
        contenedorNombre.innerText = "Introduce un usuario";
        event.preventDefault();
    }
    else {
        contenedorNombre.innerText = "";

    }
    if (pass == "") {
        contenedorContrasena.innerText = "Introduce una contraseña";
        event.preventDefault();
    }
    else {
        contenedorContrasena.innerText = "";

    }
}

function comprobarEmail(event) {
    let regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var email = document.getElementById('email').value;

    if (regexEmail.test(email)) {
        console.log("Email válido");
    } else {
        console.log("Email no válido");
        event.preventDefault();

    }
}

function cargar() {
    cargar_provincias()
}

function cargar_provincias() {
    var json = { "Cantabria": "", "Asturias": "", "Galicia": "", "Andalucia": "", "Extremadura": "" };

    addOptions("provincia", json);
}

// Rutina para agregar opciones a un <select>
function addOptions(domElement, json) {
    var select = document.getElementsByName(domElement)[0];

    Object.keys(json).forEach(function (elm) {
        var option = document.createElement("option");
        option.text = elm;
        select.add(option);
    })
}


function campoIncompleto(event) {
    var contenedorNombre = document.getElementById("nombre");
    var contenedorEmail = document.getElementById("correo");
    var contenedorContrasena = document.getElementById("contrasena");
    var contenedorRepcontrasena = document.getElementById("contrasenaRep");
    var contenedorProvincia = document.getElementById("prov");
    var contenedorLocalidad = document.getElementById("loc");
    var user = document.getElementById('user').value;
    var pass = document.getElementById('pw').value;
    var passrep = document.getElementById('pwrep').value;
    var email = document.getElementById('email').value;
    var localidad = document.getElementById('localidad').value;
    var provincia = document.getElementById('provincia').value;

    if (user == "") {
        contenedorNombre.innerText = "Introduce un usuario";
        event.preventDefault();
    }
    else {
        contenedorNombre.innerText = "";

    }
    if (email == "") {
        contenedorEmail.innerText = "Introduce un email";
        event.preventDefault();
    }
    else {
        contenedorEmail.innerText = "";

    }
    if (pass == "") {
        contenedorContrasena.innerText = "Introduce una contraseña";
        event.preventDefault();
    }
    else {
        contenedorContrasena.innerText = "";

    }
    if (passrep == "") {
        contenedorRepcontrasena.innerText = "Introduce una contraseña";
        event.preventDefault();
    }
    else {
        contenedorRepcontrasena.innerText = "";

    }
    if (localidad == "") {
        contenedorLocalidad.innerText = "Introduce una localidad";
        event.preventDefault();
    }
    else {
        contenedorLocalidad.innerText = "";

    }
    if (provincia == "") {
        contenedorProvincia.innerText = "Introduce una provincia";
        event.preventDefault();
    }
    else {
        contenedorProvincia.innerText = "";

    }
}
function comprobarContrasenas(event) {
    var contenedorContrasena = document.getElementById("contrasena");
    var contenedorRepcontrasena = document.getElementById("contrasenaRep");
    var pass = document.getElementById('pw').value;
    var passrep = document.getElementById('pwrep').value;

    if (pass == passrep) {
        console.log("las contraseñas coinciden")
    } else {
        contenedorRepcontrasena.innerText = "Las contraseñas no coinciden"
        contenedorContrasena.innerText = "Las contraseñas no coinciden";
        event.preventDefault();

    }


}


