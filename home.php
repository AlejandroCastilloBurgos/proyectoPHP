<?php require "require_login.php";  ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botones y Tablas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f0f0f0;
            color: #333;
        }
        .header-left {
            flex-grow: 1;
        }
        .header-center {
            flex-grow: 1;
            text-align: center;
        }
        .header-right {
            flex-grow: 1;
            text-align: right;
        }
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color:white;         
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-left">
            <?php
            if(isset($_SESSION["name"])){
                $nombreUsuario = $_SESSION["name"];
                echo "<p>Buenos días, " . htmlspecialchars($nombreUsuario) . " </p>";
            }
            ?>
        </div>
        <div class="header-center">
            <span  id="temperaturaInfo">Cargando temperatura</span>
            <select name="languages" id="languages">
                <option value="es">ES</option>
                <option value="en">ENG</option>
            </select>
        </div>
        <div class="header-right">
            <a href="#" class="logout" id="logout">Logout</a>
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
                            <th>Peso</th>
                            <th>Calorias Unidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require("db.php");
                            $query = "SELECT * FROM chucherias";
                            $stmt = $conn->prepare($query);
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                            echo '';
                            foreach ($result as $row => $chucherias) {
                                echo "<tr>";
                                echo   '<td>' .htmlspecialchars($chucherias["Nombre"]) . '</td> <td> '. $chucherias["Precio Unitario"] . 
                                '</td> <td>' . $chucherias["Peso"] . '</td> <td> ' . $chucherias["Calorias Unidad"] . '</td>' ;
                                echo "<td> <a href='editarChuches.php?id=". $chucherias["id"] ."'>Editar</a> </td>";
                                echo "<td> <a class='btnBorrar' href='borrarChuches.php?id=" . $chucherias["id"] . "' onclick='event.preventDefault(); confirmarBorrar(this);'>Borrar</a> </td>";
                                echo "</tr>";
                                }
                        ?>
                        <!-- Fila para añadir nuevos registros -->
                        <tr>
                            <form action="añadirChuches.php" method="POST">
                                <td><input type="text" name="nombreChuches" required></td>
                                <td><input type="text" name="precioChuches" required></td>
                                <td><input type="text" name="pesoChuches" required></td>
                                <td><input type="text" name="caloriasChuches" required></td>
                                <td colspan="2"><button type="submitChuches" class="btn btn-success">Añadir</button></td>
                            </form>
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
                            <th>Peso</th>
                            <th>Calorias Unidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require("db.php");
                            $querySnacks = "SELECT * FROM snacks";
                            $stmt = $conn->prepare($querySnacks);
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                            echo '';
                            foreach ($result as $row => $snacks) {
                                echo "<tr>";
                                echo   '<td>' .htmlspecialchars($snacks["Nombre"]) . '</td> <td> '. $snacks["Precio Unitario"] . 
                                '</td> <td>' . $snacks["Peso"] . '</td> <td> ' . $snacks["Calorias Unidad"] . '</td>' ;
                                echo "<td> <a href='editarSnacks.php?id=". $snacks["id"] ."'>Editar</a> </td>";
                                echo "<td> <a href='borrarSnacks.php?id=" . $snacks["id"] . "' onclick='return confirm(\"¿Estás seguro de que deseas borrar este registro?\");'>Borrar</a> </td>";

                                echo "</tr>";
                                }
                                ?>
                                <!-- Fila para añadir nuevos registros -->
                        <tr>
                            <form action="añadirSnacks.php" method="POST">
                                <td><input type="text" name="nombreSnack" required></td>
                                <td><input type="text" name="precioSnack" required></td>
                                <td><input type="text" name="pesoSnack" required></td>
                                <td><input type="text" name="caloriasSnack" required></td>
                                <td colspan="2"><button type="submit" class="btn btn-success">Añadir</button></td>
                            </form>
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
                            <th>Peso</th>
                            <th>Calorias Unidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require("db.php");
                            $query = "SELECT * FROM frutas";
                            $stmt = $conn->prepare($query);
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                            echo '';
                            foreach ($result as $row => $frutas) {
                                echo "<tr>";
                                echo   '<td>' .htmlspecialchars($frutas["Nombre"]) . '</td> <td> '. $frutas["Precio Unitario"] . 
                                '</td> <td>' . $frutas["Peso"] . '</td> <td> ' . $frutas["Calorias Unidad"] . '</td>' ;
                                echo "<td> <a href='editarFrutas.php?id=". $frutas["id"] ."'>Editar</a> </td>";
                                echo "<td> <a href='borrarFrutas.php?id=" . $frutas["id"] . "' onclick='return confirm(\"¿Estás seguro de que deseas borrar este registro?\");'>Borrar</a> </td>";

                                echo "</tr>";
                                }

                        ?>
                        <!-- Fila para añadir nuevos registros -->
                        <tr>
                            <form action="añadirFrutas.php" method="POST">
                                <td><input type="text" name="nombreFruta" required></td>
                                <td><input type="text" name="precioFruta" required></td>
                                <td><input type="text" name="pesoFruta" required></td>
                                <td><input type="text" name="caloriasFruta" required></td>
                                <td colspan="2"><button type="submit" class="btn btn-success">Añadir</button></td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <button id="btnPlatos" class="btn btn-primary mb-2">Platos</button>
            <div id="tablaPlatos" class="container-tabla hidden">
                <!-- Ejemplo de tabla Platos -->
                <table class="table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Peso</th>
                            <th>Calorias Unidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require("db.php");
                            $query = "SELECT * FROM platos";
                            $stmt = $conn->prepare($query);
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                            echo '';
                            foreach ($result as $row => $platos) {
                                echo "<tr>";
                                echo   '<td>' .htmlspecialchars($platos["Nombre"]) . '</td> <td> '. $platos["Precio Unitario"] . 
                                '</td> <td>' . $platos["Peso"] . '</td> <td> ' . $platos["Calorias Unidad"] . '</td>' ;
                                echo "<td> <a href='editarPlatos.php?id=". $platos["id"] ."'>Editar</a> </td>";
                                echo "<td> <a href='borrarPlatos.php?id=" . $platos["id"] . "' onclick='return confirm(\"¿Estás seguro de que deseas borrar este registro?\");'>Borrar</a> </td>";
                                echo "</tr>";
                                }
                        ?>
                        <!-- Fila para añadir nuevos registros -->
                        <tr>
                            <form action="añadirPlatos.php" method="POST">
                                <td><input type="text" name="nombrePlato" required></td>
                                <td><input type="text" name="precioPlato" required></td>
                                <td><input type="text" name="pesoPlato" required></td>
                                <td><input type="text" name="caloriasPlato" required></td>
                                <td colspan="2"><button type="submit" class="btn btn-success">Añadir</button></td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="/sge/js/main.js"></script>
</body>
</html>

