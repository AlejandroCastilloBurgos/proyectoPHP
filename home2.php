<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botones y Tablas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
    <style>
        /* Estilos básicos para la estructura */
        header {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #f0f0f0;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .boton {
            margin: 20px 0;
        }
        /* Ocultar tablas inicialmente */
        .hidden {
            display: none;
        }
    </style>
    </style>
</head>
<body>
    <div class="header">
        <div class="header-left">
            <span>Bienvenido, usuario</span>
        </div>
        <div class="header-center">
            <span>Tiempo: [Datos de API]</span>
            <select>
                <option value="ES">ES</option>
                <option value="ENG">ENG</option>
            </select>
        </div>
        <div class="header-right">
            <a href="#" class="logout">Logout</a>
        </div>
    </div>

    </div>

    <div class="container mt-4">
        <div class="d-flex flex-column align-items-start">
            <button id="btnChuches" class="btn btn-primary mb-2">Chuches</button>
            <div id="tablaChuches" class="container-tabla hidden">
                <!-- Ejemplo de tabla Chuches -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Golosinas</td>
                            <td>$1.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <button id="btnSnacks" class="btn btn-primary mb-2">Snacks</button>
            <div id="tablaSnacks" class="container-tabla hidden">
                <!-- Ejemplo de tabla Snacks -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Papas fritas</td>
                            <td>$2.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <button id="btnFrutas" class="btn btn-primary mb-2">Frutas</button>
            <div id="tablaFrutas" class="container-tabla hidden">
                <!-- Ejemplo de tabla Frutas -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Manzana</td>
                            <td>$0.50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <button id="btnPlatos" class="btn btn-primary mb-2">Platos</button>
            <div id="tablaPlatos" class="container-tabla hidden">
                <!-- Ejemplo de tabla Platos -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Plato del día</td>
                            <td>$5.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="/SGE/proyectoPHP/js/main.js"></script>
</body>
</html>
