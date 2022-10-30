<?php 
    session_start();
    define('BASEPATH', true);
   require 'dbCon.php';
    

    $email = $password = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = removeUnnecessary($_POST["email"]);
        $password = removeUnnecessary($_POST["password"]);
    }
    function removeUnnecessary($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    try {
        $_SESSION['user'] = '';
        $_SESSION['id'] = 0;
    if(isset($_POST['submit'])) {
        try {
            $user_login = !empty($_POST['email']) ? ($_POST['email']) :null;  //if email is not empty, post[email], otherwise will be null
            $passwordAttempt = !empty($_POST['password'])? ($_POST['password']) :null;
            $id = 0;
            //$id = $_POST['id'];
            //Retrieve
            $sql = "SELECT * FROM Athena.user WHERE email = :email";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $user_login);
            //$stmt->bindValue(':id', $id);
            
            //Executes the query
            $stmt->execute();
            //Fetch 
            $userStmt = $stmt->fetch(PDO::FETCH_ASSOC);
            //pt a ma ajuta de id in cart handler, am nevoie de
            //id fetchuit + id cu bindValue
            //am pus - o pt cart handler
            if (is_array($userStmt))
            {
                $id = intval($userStmt['id'], 10);
            }
        
            //IF row is false
            if($userStmt == false) {
                echo '<script> alert("invalid email or password - 1") </script>';
            }else {
                //Compare passwords
                $validPassword = password_verify($passwordAttempt, $userStmt['password']);
                if($validPassword) {
                    $_SESSION['user'] = $user_login;
                    $_SESSION['id'] = $id;
                    echo '<script>window.location.replace("welcome.php")</script>';
                }
                else {
                    echo '<script> alert("invalid email or password - 2") </script>';
                }
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
    

?>

