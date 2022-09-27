<?php session_start();?>
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

    <div class="container">
        <div class="row">
            <div class="col-2 col-sm-2 col-md-2 col-lg-4 col-xl-4"></div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 bg-dark text-white mt-5 p-1 d-flex justify-content-center">
                    <h2>Login</h2>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-4 col-xl-4"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-2 col-sm-2 col-md-2 col-lg-4 col-xl-4">
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 mt-5 p-1 d-flex justify-content-center border">
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
            <div class="col-2 col-sm-2 col-md-2 col-lg-4 col-xl-4"></div>
        </div>
    </div>

    <!-- <div class="login-box">
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
    </div>  -->
        
        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>  