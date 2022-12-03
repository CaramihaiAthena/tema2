<?php 
session_start();
include_once('dbCon.php');

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
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
        if(insertDetails($conn, $fname, $lname, $email, $username, $password_hash)) {
            $_SESSION['user'] = $email;            
            header("Location: login.php");
        }
    }
}
  
function  insertDetails($conn, $fname, $lname, $email, $username, $password_hash) {
    $query = $conn->prepare("INSERT INTO Athena.user (first_name, last_name, email, username, password) 
                            VALUES (:first_name, :last_name, :email,  :username, :password) ");

    $query->bindParam(":first_name", $fname);
    $query->bindParam(":last_name", $lname);
    $query->bindParam(":email", $email);
    $query->bindParam(":username", $username);
    $query->bindParam(":password", $password_hash);

    return $query->execute();
}
?>