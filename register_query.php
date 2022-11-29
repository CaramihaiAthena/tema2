<?php 
session_start();
include_once('dbCon.php');

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    
    $query = $conn->prepare("SELECT * FROM Athena.user WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
    if ($query->rowCount() == 0) {
        if(insertDetails($conn, $email, $password_hash)) {
            $_SESSION['user'] = $email;            
            header("Location: login.php");
        }
    }
    
}

function insertDetails($conn, $email, $password_hash) {
    $query = $conn->prepare("INSERT INTO Athena.user (email, password) VALUES (:email, :password_hash)");
    $query->bindParam(":email", $email);
    $query->bindParam(":password_hash", $password_hash);
    return $query->execute();
}




    
?>