<?php
$servername = "localhost";
$username = "root";
$password = "";

// Verifica si ya hay una sesión activa antes de llamar a session_start()
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}


try {
  $conn = new PDO("mysql:host=$servername;dbname=alimentos", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 
