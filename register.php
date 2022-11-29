<?php session_start();
include_once('dbCon.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styleregister.css">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-7 col-sm-8 col-md-8 col-lg-8 col-xl-10"></div>
            <div class="col-1 col-sm-1 col-md-2 col-lg-3 col-xl-1">
            <p class="error my-error"></p>  <!-- divul ascuns pt eroare -->
            </div>
        </div>
    </div>
    
    <div class="space"></div>

    <div class="container">
        <div class="row">
            <div class="col-2 col-sm-2 col-md-2 col-lg-4 col-xl-4"></div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 bg-dark text-white mt-5 p-1 d-flex justify-content-center">
                    <h2>Register</h2>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-4 col-xl-4"></div>
        </div>
    </div>

        <div class="container">
        <div class="row">
            <div class="col-2 col-sm-2 col-md-2 col-lg-4 col-xl-4">
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 mt-5 p-1 d-flex justify-content-center border">
            <form name="myForm" method="POST" action="register_query.php">
                <fieldset>
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
                </fieldset>
                <div class="sp"></div>
        </form>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-4 col-xl-4"></div>
        </div>
    </div>

       
        <script src="register_file.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>