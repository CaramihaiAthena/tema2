<?php 
    require("dbCon.php");

    $email = $password = $confirmpass =  "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = removeUnnecessary($_POST["email"]);
        $password = removeUnnecessary($_POST["password"]);
        $confirmpass = removeUnnecessary($_POST["confirmpass"]);
    }

    function removeUnnecessary($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function hashedFunction() {
        $hashedpass = password_hash($password,PASSWORD_DEFAULT);
        return $hashedpass;
    }
    function verifyUnhasshing() {
        $hashed = '$2y$10$GF4Jvn//ZvfLHmSYlcRxPOWaGmXm5vvXfyg1EAWdUf8mejyZV6Op.';
        $verifypass = password_verify($password, $hashed);
        if($verifypass) {
            echo "Password was verified after unhashing";
        }
        else {
            echo "Something went wrong";
        }
    }
    
    echo "Your input: ";
    echo "<br>Username: ";
    echo $email;
    echo "<br>Password: ";
    echo $password;
    echo "<br>Confirm password: ";
    echo $confirmpass;
    echo "<br>Hashed function: ";
    echo hashedFunction();
    echo "<br>Verified unhashed function: ";
    echo verifyUnhasshing();
    try {
        $stmt = $conn->prepare("INSERT INTO Athena.user (email,password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', password_hash($password,PASSWORD_DEFAULT));
        $stmt->execute();
    } catch (\Error $e) {
        echo "<br>Error on insert: ";
        echo $e ;
    }

    
?>