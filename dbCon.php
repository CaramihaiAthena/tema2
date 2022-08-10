<?php

//informatii pentru conectarea la baza de date
$servername = "localhost";
$username = "root";
$pass = "";

$datasource = "mysql:host=$servername;dbName=Athena";
try {
  $conn = new PDO($datasource, $username, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("INSERT INTO Athena.user (email,password) VALUES (:email, :password)");
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', password_hash($password,PASSWORD_DEFAULT));
  $stmt->execute();
  
  echo "<br>";
  echo "Data inserted successfully";
  $conn->commit();
} catch(PDOException $e) {
  $conn->rollback();
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>