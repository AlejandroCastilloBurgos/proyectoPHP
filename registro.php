<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            border-radius: 10px; /* Rounded corners */
            padding: 20px;
            margin-top: 50px;
        }
        .form-label {
            color: #f8f9fa!important; /* Ensuring labels are also white */
        }
    </style>
</head>
<body onLoad="cargar()">
    <div class="container">
        <h1 class="text-center mb-4">Registro</h1>
        <form action="crearRegistro.php" method="post">
            <div class="mb-3">
                <label for="user" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="user" name="user">
                <div id="nombre" class="form-text text-danger"></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <div id="correo" class="form-text text-danger"></div>
            </div>
            <div class="mb-3">
                <label for="pw" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="pw" name="pw">
                <div id="contrasena" class="form-text text-danger"></div>
            </div>
            <div class="mb-3">
                <label for="pwrep" class="form-label">Repetir contraseña</label>
                <input type="password" class="form-control" id="pwrep" name="pwrep">
                <div id="contrasenaRep" class="form-text text-danger"></div>
            </div>
            <div class="mb-3">
                <label for="provincia" class="form-label">Provincia</label>
                <select class="form-select" id="provincia" name="provincia">
                    <option>Seleccione una Provincia...</option>
                </select>
                <div id="prov" class="form-text text-danger"></div>
            </div>
            <div class="mb-3">
                <label for="localidad" class="form-label">Localidad</label>
                <select class="form-select" id="localidad" name="localidad">
                    <option>Seleccione una Localidad...</option>
                </select>
                <div id="loc" class="form-text text-danger"></div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success" id="registra">Crear Usuario</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/sge/js/main.js" defer></script>
</body>
</html>
