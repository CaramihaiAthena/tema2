<?php

//informatii pentru conectarea la baza de date
$servername = "localhost";
$username = "root";
$pass = "";

$datasource = "mysql:host=$servername;dbName=Athena";
try {
  $conn = new PDO($datasource, $username, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  $conn->rollback();
  echo "Connection failed: " . $e->getMessage();
}


?>