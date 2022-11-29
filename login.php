<?php session_start();
include_once('dbCon.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="stylelogin.css">
    </head>
    <body>

    <div class="space"></div>
    <div class="login-box">
        <h2>Login</h2>
    <form method="POST" action="login_query.php">
    <fieldset>
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
            </fieldset>
                <div class="sp"></div>
        </form> 
    </div> 
        
        <script src="" async defer></script>
    </body>
</html>  