<?php

require("db.php");

// Verificar si el usuario está logueado
if (!isset($_SESSION['id'])) {
    header("Location: login.php"); // Redireccionar a la página de login si el usuario no está logueado
    exit;
}

// Obtener el ID de usuario de la sesión
$user_id = $_SESSION['id'];

// Consulta SQL para obtener los datos del usuario
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$userData = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botones y Tablas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        /* Estilos básicos para la estructura */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f0f0f0;
            color: #333;
        }
        .header-center {
            display: flex;
            align-items: center;
        }
        .header-center span, .header-center select {
            margin: 0 10px;
        }
        .header-right a {
            color: #007bff;
            text-decoration: none;
        }
        .header-right a:hover {
            text-decoration: underline;
        }
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
<body>
    <div class="header">
        <div class="header-left">
            Bienvenido, usuario
        </div>
        <div class="header-center">
            <span>Temperatura: [Datos de API]</span>
            <select>
                <option value="ES">ES</option>
                <option value="EN">EN</option>
            </select>
        </div>
        <div class="header-right">
            <a href="#" class="misdatos">Mis datos</a>
        </div>
        <div class="header-right">
        
            <a href="#" class="logout">Logout</a>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center mb-4">Mis datos</h1>
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
                <label for="oldpw" class="form-label">Contraseña antigua</label>
                <input type="password" class="form-control" id="oldpw" name="oldpw">
                <div id="contrasenaAntigua" class="form-text text-danger"></div>
            </div>
            <div class="mb-3">
                <label for="newpw" class="form-label">Contraseña nueva</label>
                <input type="password" class="form-control" id="newpw" name="newpw">
                <div id="contrasenaNueva" class="form-text text-danger"></div>
            </div>
            <div class="mb-3">
                <label for="newpwrep" class="form-label">Repetir contraseña nueva</label>
                <input type="password" class="form-control" id="newpwrep" name="newpwrep">
                <div id="contrasenaRepNueva" class="form-text text-danger"></div>
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
                <button type="submit" class="btn btn-success" id="registra">Aceptar cambios</button>
                <button type="submit" class="btn btn-danger" id="registra">Anular cambios</button>
                <button type="submit" class="btn btn-primary" id="registra">Volver</button>
            </div>
        </form>
    </div>
    
<script src="/SGE/proyectoPHP/js/main.js"></script>
</body>
</html>

