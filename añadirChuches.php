<?php

require("db.php");

try {

  //añadimos chucherias usando de base el registro


  $stmt = $conn->prepare("INSERT INTO chucherias (`Nombre`, `Precio Unitario`, `Peso`, `Calorias Unidad`) VALUES (?, ?, ?, ?)");
  $nombreOK=($_POST['nombreChuches']);
    $precioUnitarioOK = $_POST['precioChuches'];
    $pesoOK =($_POST['pesoChuches']);
    $caloriasUnidadOK=($_POST['caloriasChuches']);
    $stmt->execute([$nombreOK,$precioUnitarioOK,$pesoOK,$caloriasUnidadOK]); //isset?? evitar nulls
    
    $result = $stmt->fetchAll();

    header("Location:home.php");  

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;



?>