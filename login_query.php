<?php 
session_start();
include_once('dbCon.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM Athena.user WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['id'] = $result['id'];
            header("Location: welcome.php");
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}

?>
