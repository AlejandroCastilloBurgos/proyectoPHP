function iniciar() {
    var log = document.getElementById('Login');
    var registra = document.getElementById('registra');
    var btnChuches = document.getElementById('btnChuches');
    var btnPlatos = document.getElementById('btnPlatos');
    var btnFrutas = document.getElementById('btnFrutas');
    var btnSnacks = document.getElementById('btnSnacks');
    if (log) {
        log.addEventListener('click', botonLogear);
    }
    if (registra) {
        cargar_provincias();
        cargar_poblaciones();
        registra.addEventListener('click', comprobarEmail);
        registra.addEventListener('click', campoIncompleto);
        registra.addEventListener('click', comprobarContrasenas);
    }
    if (btnChuches) {
        btnChuches.addEventListener('click', muestraChuches);
    }
    if (btnFrutas) {
        btnFrutas.addEventListener('click', muestraFrutas);
    }
    if (btnPlatos) {
        btnPlatos.addEventListener('click', muestraPlatos);
    }
    if (btnSnacks) {
        btnSnacks.addEventListener('click', muestraSnacks);
    }
}

window.onload = iniciar;

function botonLogear(event) {
    var contenedorNombre = document.getElementById("nombre");
    var contenedorContrasena = document.getElementById("contrasena");
    var user = document.getElementById('user').value;
    var pass = document.getElementById('pw').value;


    if (user == "") {
        contenedorNombre.innerText = "Introduce un username";
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

function cargar_provincias(event) {
    fetch('/SGE/proyectoPHP/json/provincias.json')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            var selectProvincias = document.getElementById('provincia');

            // Iterar sobre cada provincia en el array y añadirlo como opción
            data.forEach(provincia => {
                var opcion = document.createElement('option');
                opcion.textContent = provincia.label; // El nombre de la provincia como texto
                selectProvincias.appendChild(opcion);
            });
        })
        .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
        });
}

function cargar_poblaciones(event) {
    fetch('/SGE/proyectoPHP/json/poblaciones.json')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            var selectProvincias = document.getElementById('localidad');

            // Iterar sobre cada provincia en el array y añadirlo como opción
            data.forEach(provincia => {
                var opcion = document.createElement('option');
                opcion.textContent = provincia.label; // El nombre de la provincia como texto
                selectProvincias.appendChild(opcion);
            });
        })
        .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
        });
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
        contenedorNombre.innerText = "Introduce un username";
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
        contenedorContrasena.innerText = "Introduce una contrasena";
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
    if (localidad == "Seleccione una Localidad...") {
        contenedorLocalidad.innerText = "Selecciona una localidad";
        event.preventDefault();
    }
    else {
        contenedorLocalidad.innerText = "";

    }
    if (provincia == "Seleccione una Provincia...") {
        contenedorProvincia.innerText = "Selecciona una provincia";
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
        console.log("perfe");
    } else {
        contenedorRepcontrasena.innerText = "Las contraseñas no coinciden"
        contenedorContrasena.innerText = "Las contraseñas no coinciden";
        event.preventDefault();

    }
}

function muestraChuches() {
    document.getElementById('tablaChuches').classList.toggle('hidden');
    console.log("joder");
}
function muestraSnacks() {
    document.getElementById('tablaSnacks').classList.toggle('hidden');
}
function muestraFrutas() {
    document.getElementById('tablaFrutas').classList.toggle('hidden');
}
function muestraPlatos() {
    document.getElementById('tablaPlatos').classList.toggle('hidden');
}

function cargarDatosUsuario() {
     // Aquí puedes hacer una solicitud AJAX para obtener los datos del usuario desde tu backend
    // Supongamos que los datos se reciben en un objeto llamado "datosUsuario"
    
    // Luego, puedes llenar los campos del formulario con esos datos
    document.getElementById("user").value = datosUsuario.nombre;
    document.getElementById("email").value = datosUsuario.email;
    document.getElementById("provincia").value = datosUsuario.provincia;
    document.getElementById("localidad").value = datosUsuario.localidad;
    // Etcétera, llenar los demás campos del formulario con los datos del usuario
}







