<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylelogin.css">
    </head>
    <body>

    <div class="login-box">
        <h2>Login</h2>
    <form method="POST" action="login_query.php">
            <div class="user-box">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="example@yahoo.com">
            </div>

            <div class="user-box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            </div>

            <section>
            <input type="submit" id="submit" name="submit" value="Login">
            <a href="register.php" id ="register">Register here</a>
            </section>
    
        </form> 
    </div> 
        
        <script src="" async defer></script>
    </body>
</html>  