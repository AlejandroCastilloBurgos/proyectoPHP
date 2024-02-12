<?php

require("db.php");

try {

  //falta cookies de idioma pero ???


    $stmt = $conn->prepare("INSERT into users (username, email, pass, provincia, localidad, idioma) VALUES (? , ? , ? , ? , ?, ?)");
    $userOK=($_POST['user']);
    $pwOK = hash("sha256",$_POST['pw']);
    $emailOK =($_POST['email']);
    $provinciaOK=($_POST['provincia']);
    $localidadOK=($_POST['localidad']);
    $idiomaOK=($_POST['idioma']);
    $stmt->execute([$userOK,$pwOK,$emailOK,$provinciaOK,$localidadOK,$idiomaO]); //isset?? evitar nulls
    
    $result = $stmt->fetchAll();

    header("Location:login.php");  

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;



?>