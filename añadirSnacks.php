<?php

require("db.php");

try {

  //añadimos chucherias usando de base el registro


  $stmt = $conn->prepare("INSERT INTO snacks (`Nombre`, `Precio Unitario`, `Peso`, `Calorias Unidad`) VALUES (?, ?, ?, ?)");
  $nombreOK=($_POST['nombreSnack']);
    $precioUnitarioOK = $_POST['precioSnack'];
    $pesoOK =($_POST['pesoSnack']);
    $caloriasUnidadOK=($_POST['caloriasSnack']);
    $stmt->execute([$nombreOK,$precioUnitarioOK,$pesoOK,$caloriasUnidadOK]); //isset?? evitar nulls
    
    $result = $stmt->fetchAll();

    header("Location:home.php");  

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;



?>