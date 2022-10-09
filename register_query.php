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
    
    try {
        $_SESSION['user'] = '';
    if(isset($_POST['submit'])) {
        try {
            $user_login = !empty($_POST['email']) ? ($_POST['email']) :null;  //if email is not empty, post[email], otherwise will be null
            $passwordAttempt = !empty($_POST['password'])? ($_POST['password']) :null;

            $stmt = $conn->prepare("INSERT INTO Athena.user (email,password) VALUES (:email, :password)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', password_hash($password,PASSWORD_DEFAULT));
            $stmt->execute();

            //Fetch 
            $userStmt = $stmt->fetch(PDO::FETCH_ASSOC);

            //IF row is false
            if($userStmt != false) {
                 $_SESSION['user'] = $user_login;
                 echo '<script>window.location.replace("welcome.php")</script>';                            
            }else {
                echo '<script>window.location.replace("welcome.php")</script>';    

            }
            
        }catch(PDOException $e) {
            $error = "Error: ".$e->getMessage();
            echo '<script> alert("'.$error.'"); </script>';

        }
    }

    } catch (\Error $e) {
        echo "<br>Error on select: ";
        echo $e ;
    }
    
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