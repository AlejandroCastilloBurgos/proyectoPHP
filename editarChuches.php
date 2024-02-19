<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Chucherias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<?php

include("db.php");

$stmt = $conn->prepare("SELECT * FROM chucherias where id = ?");

$stmt->execute([$_GET["id"]]);
$result = $stmt->fetchAll();

?>
    
<form action="updateChuches.php" method="post">

Nombre  <input type="text" name="Nombre" id="" value='<?php echo $result[0]["Nombre"]?>' ><br>
Precio Unitario<input type="text" name="PrecioUnitario" id="" value='<?php echo $result[0]["Precio Unitario"]?>'><br>
Peso<input type="text" name="Peso" id="" value='<?php echo $result[0]["Peso"]?>'><br>
Calorias Unidad<input type="text" name="CaloriasUnidad" id="" value='<?php echo $result[0]["Calorias Unidad"]?>'><br>
    <input type="hidden" name="id" value='<?php echo $result[0]["id"]?>'>
<input type="submit" value="Aceptar Cambios" name="cambiar">
<input type="submit" value="Volver" name="Volver">
</form>


</body>
</html>