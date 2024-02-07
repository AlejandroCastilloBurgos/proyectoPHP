<?php

require("db.php");

try {

  //falta cookies de idioma pero ???


    $stmt = $conn->prepare("INSERT into users (username, email, pass, provincia, localidad) VALUES (? , ? , ? , ? , ?)");
    $userOK=($_POST['user']);
    $pwOK = hash("sha256",$_POST['pw']);
    $emailOK =($_POST['email']);
    $provinciaOK=($_POST['provincia']);
    $localidadOK=($_POST['localidad']);
    $stmt->execute([$userOK,$emailOK,$pwOK,$provinciaOK,$localidadOK]); //isset?? evitar nulls
    
    $result = $stmt->fetchAll();

    header("Location:login.php");  

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;



?>