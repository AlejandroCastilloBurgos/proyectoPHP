<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Horizontal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f2f2f2;
            padding: 10px;
        }

        .container a,
        .container button {
            text-decoration: none;
            color: #333;
            padding: 10px;
        }

        .container button {
            background-color: #e53935;
            border: none;
            color: white;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #c62828;
        }

        .right-section {
            margin-left: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <span>¡Bienvenido Jorge!</span>
            <span>Madrid 15º</span>
            <select>
                <option value="es">ES</option>
                <option value="en">EN</option>
            </select>
            <a href="#">Mis datos</a>
        </div>
        <div class="right-section">
            <button>Cerrar sesión</button>
        </div>
    </div>
</body>
</html>

