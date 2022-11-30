<?php
session_start();
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
        <link rel="stylesheet" href="aboutus.css">
    </head>
    <body>

 <!-- clasa navbar, care se extinde pentru large devices, cu textul dark si cu background light grey -->
 <div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-brand">Un<span>leashed</span></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="collapseNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">My Profile</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="purchases.php">Purchases</a></li>
                            <li><a class="dropdown-item" href="#">Favorites</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>

            </ul>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row mt-5">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-3"><h2>About us</h2></div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
        </div>
    </div>

    <div class="space"></div>
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-8 col-md-4 col-lg-4 col-xl-4 bg-dark text-white d-flex justify-content-center m-5 p-5">
                <p><b>Unleashed</b> was established in 2022 with the straightforward goal of giving our pets the best possible living. In our store, you can find anything a pet wishes, from snacks to toys.</p>
            </div>
            <div class="col-0 col-sm-0 col-md-4 col-lg-4 col-xl-3 bg-secondary text-white d-flex justify-content-center m-5 p-5 d-none d-sm-none d-md-block">
            <p>Our business has put a lot of effort into offering the highest possible quality of the items at affordable pricing.</p>
            </div>
            <div class="col-0 col-sm-0 col-md-0 col-lg-0 col-xl-1 d-none d-sm-none d-md-none d-lg-none d-xl-block">   
                <img src="images/pets.png" class="float-right" alt="pets" width="290px" height="320px" />
            </div>
        </div>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-0 col-sm-0 col-md-1 col-lg-3 col-xl-3">
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4 bg-secondary text-white d-flex justify-content-center m-5 p-3">
            <p>Our first objective when we started the business was to provide a wide variety of products so that both owners and pets would be completely satisfied.
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-3 col-xl-3">   
            </div>
        </div>

        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>