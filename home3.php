<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="tu_estilo.css"> <!-- Asegúrate de tener tu archivo CSS para estilos -->
    <script src="/sge/js/main.js" defer></script> <!-- Tu script JS -->
</head>
<body>
<style>
       

    </style>
<div class="header">
    <div class="header-left">
        Bienvenido, usuario
    </div>
    <div class="header-center temperature-selector">
        <span>Temperatura: 25°C</span>
        <select>
            <option value="ES">ES</option>
            <option value="EN">EN</option>
        </select>
    </div>
    <div class="header-right">
        <a href="/logout">Logout</a>
    </div>
</div>

    <div id="cuerpo" style="text-align: center; margin-top: 20px;">
        <button id="btnChuches">Chuches</button>
        <!-- Tabla de chuches, inicialmente oculta -->
        <table id="tablaChuches" class="hidden" style="margin-top: 20px; width: 100%;">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ejemplo de contenido, deberías llenar esto con datos reales posiblemente desde tu JS o backend -->
                <tr>
                    <td>Gominolas</td>
                    <td>Gominolas de sabores frutales</td>
                    <td>1.50€</td>
                </tr>
                <tr>
                    <td>Chocolate</td>
                    <td>Barra de chocolate con almendras</td>
                    <td>2.00€</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>
    </div>

    <!-- Aquí puedes insertar el script para la API del tiempo si es necesario -->
</body>
</html>
