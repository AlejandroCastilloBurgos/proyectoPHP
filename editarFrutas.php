<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Frutas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Editando Frutas</h2>


    <?php

    include("db.php");

    $stmt = $conn->prepare("SELECT * FROM frutas where id = ?");

    $stmt->execute([$_GET["id"]]);
    $result = $stmt->fetchAll();

    ?>
    
    <form action="updateFrutas.php" method="post" class="row g-3">
        <div class="col-12">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="Nombre" id="Nombre" value='<?php echo ($result[0]["Nombre"]); ?>'>
        </div>
        <div class="col-12">
            <label for="PrecioUnitario" class="form-label">Precio Unitario</label>
            <input type="text" class="form-control" name="PrecioUnitario" id="PrecioUnitario" value='<?php echo ($result[0]["Precio Unitario"]); ?>' >
        </div>
        <div class="col-12">
            <label for="Peso" class="form-label">Peso</label>
            <input type="text" class="form-control" name="Peso" id="Peso" value='<?php echo ($result[0]["Peso"]); ?>' >
        </div>
        <div class="col-12">
            <label for="CaloriasUnidad" class="form-label">Calorías Unidad</label>
            <input type="text" class="form-control" name="CaloriasUnidad" id="CaloriasUnidad" value='<?php echo ($result[0]["Calorias Unidad"]); ?>' >
        </div>
        <input type="hidden" name="id" value='<?php echo $result[0]["id"]; ?>'>
        <div class="col-12">
            <button type="submit" name="cambiar" class="btn btn-primary">Aceptar Cambios</button>
            <button type="submit" name="Volver" class="btn btn-secondary">Volver</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
