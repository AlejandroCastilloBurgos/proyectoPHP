<?php
require("db.php"); // Asegúrate de que la conexión a la base de datos esté incluida

// Verifica si el ID está presente
if (isset($_GET['id'])) {
    $id = $_GET['id']; // O usa filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT) para una limpieza básica

    // Prepara la consulta SQL para evitar inyecciones SQL
    $stmt = $conn->prepare("DELETE FROM chucherias WHERE id = ?");
    $stmt->execute([$id]);

    // Redirige de vuelta a la página anterior o a donde consideres necesario después del borrado
    header("Location: home.php");
    exit();
} else {
    // Si no hay ID, maneja el error o redirige
    echo "ID no proporcionado";
}
?>
