<?php

require("db.php");

try {

  //añadimos chucherias usando de base el registro


  $stmt = $conn->prepare("INSERT INTO platos (`Nombre`, `Precio Unitario`, `Peso`, `Calorias Unidad`) VALUES (?, ?, ?, ?)");
  $nombreOK=($_POST['nombrePlato']);
    $precioUnitarioOK = $_POST['precioPlato'];
    $pesoOK =($_POST['pesoPlato']);
    $caloriasUnidadOK=($_POST['caloriasPlato']);
    $stmt->execute([$nombreOK,$precioUnitarioOK,$pesoOK,$caloriasUnidadOK]); //isset?? evitar nulls
    
    $result = $stmt->fetchAll();

    header("Location:home.php");  

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;



?>