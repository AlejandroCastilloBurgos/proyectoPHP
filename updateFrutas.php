<?php
require("db.php");

if(isset($_POST["Volver"])){
    header("Location: home.php");
    die();
}
else
{
     
    
    $stmt = $conn->prepare("UPDATE frutas SET `Nombre` = ?, `Precio Unitario` = ?, `Peso` = ?, `Calorias Unidad` = ? WHERE id = ?");
    $stmt->execute([$_POST["Nombre"],$_POST["PrecioUnitario"],$_POST["Peso"],
                    $_POST["CaloriasUnidad"],$_POST["id"]]);
    
    $result = $stmt->fetchAll();
    header("Location: home.php");
    die();
}
?>