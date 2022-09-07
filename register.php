<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styleregister.css">
    </head>
    <body>
    <p class="error my-error"></p>  <!-- divul ascuns pt eroare -->
    
        <div class="page">
            <h2>Register</h2>
        <form name="myForm" method="POST" action="register_query.php">
            <div class = "user-box">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="example@yahoo.com">  
            </div>
 
            <div class = "user-box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            </div>

            <div class = "user-box">
            <label for="confirmpass">Confirm</label>
            <input type="password" id="confirmpass" name="confirmpass">
            </div>

            <section>
            <input type="submit" name="submit" id="submit" value ="Register" >
            <a href="login.php" id ="login">Login</a>
            </section>


        </form>
        </div>
       
        <script src="register_file.js"></script>
    </body>
</html>