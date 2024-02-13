<?php

require("db.php");

try {

  //añadimos chucherias usando de base el registro


  $stmt = $conn->prepare("INSERT INTO frutas (`Nombre`, `Precio Unitario`, `Peso`, `Calorias Unidad`) VALUES (?, ?, ?, ?)");
  $nombreOK=($_POST['nombreFruta']);
    $precioUnitarioOK = $_POST['precioFruta'];
    $pesoOK =($_POST['pesoFruta']);
    $caloriasUnidadOK=($_POST['caloriasFruta']);
    $stmt->execute([$nombreOK,$precioUnitarioOK,$pesoOK,$caloriasUnidadOK]); //isset?? evitar nulls
    
    $result = $stmt->fetchAll();

    header("Location:home.php");  

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;



?>