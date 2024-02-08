<?php

var_dump($_POST);

require("db.php");
//El idioma lo tendremos en cuenta en base de datos y en la cookie
try {
    session_start();
    $stmt = $conn->prepare("SELECT id, username, pass FROM users where username = ? and pass = ?");

    $stmt->execute([$_POST['user'],hash("sha256",$_POST['pw'])]);
    $result = $stmt->fetchAll();
    $id = $result["id"];

    print_r($result);
    echo "el tamaño del array es ". count($result);

    if (count($result)>0){
        $_SESSION["name"]=$_POST['user'];
        $_SESSION["login"]=true;
        header("Location:home.php?id=$id");
        setcookie("idioma", "es", time()+3600);
        die();
    }else{
        header("Location: login.php");
          die();
    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>


