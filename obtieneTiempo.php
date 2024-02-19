<?php

require("db.php");

$usuario_id = $_SESSION["name"] ?? null; // Usa el nombre del usuario actual almacenado en sesión.

$query = "SELECT localidad FROM users WHERE username = :usuario_id"; // Usar parámetro nombrado

// Preparar consulta PDO
$stmt = $conn->prepare($query);

// Vincular parámetro utilizando el nombre del parámetro nombrado
$stmt->bindParam(':usuario_id', $usuario_id); // Corrección aquí

// Ejecutar consulta
$stmt->execute();

// Obtener resultado
if ($fila = $stmt->fetch()) {
    $localidad = $fila['localidad'];
    // Devolver la ciudad al frontend como JSON
    echo json_encode(['localidad' => $localidad]);
} else {
    // En caso de que no se encuentre la ciudad, puedes devolver un mensaje o un código de error
    echo json_encode(['error' => 'Ciudad no encontrada']);
}

?>
