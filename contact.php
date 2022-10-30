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
        <link rel="stylesheet" href="contact.css">
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
                            <li><a class="dropdown-item" href="#">Purchases</a></li>
                            <li><a class="dropdown-item" href="#">Favorites</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>

            </ul>
            </div>
        </div>
    </div>

        <div class="container m-5">
            <div class="row">
                <div class="col-xl-3 d-none d-sm-none d-md-none d-lg-block"><h4>Unleashed</h4> <span class="help"> help</span></div>
            </div>
        </div>

            
    <div class="space d-none d-sm-none d-md-block"></div>

        <div class="container">
            <div class="row">
                <div class="col-3 col-xl-4"></div>
                <div class="col-6 col-xl-4 bg-dark bg-gradient text-white"><h2>Get in touch</h2></div>
                <div class="col-3 col-xl-4"></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-3 col-xl-4"></div>
                <div class="col-6 col-xl-4 bg-secondary bg-gradient text-white">
                    <p>Billing, reporting, and order cancellation issues: </p>
                    <p><b>021 319 1900</b> </p>
                    <p> <b> <i>Schedule: Sunday - Saturday: 24/24</i> </b> </p>
                    <p>Need to track a shipment in real time? </p>
                    <p>Follow your parcel live here:</p>
                </div>
                <div class="col-3 col-xl-4"></div>
        </div>

        <div class="space"></div>

        <div class="container d-none d-sm-none d-md-none d-lg-none d-xl-block">
            <div class="row">
            <div class="col-xl-4 m-5"></div>
            <div class="col-xl-4 m-5"> </div>
            </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-4"></div>
                <div class="col-md-3 col-xl-4"></div>
                <div class="col-md-5 col-xl-4"><p>Address: Piața Romană no.6, Bucharest, sector 1, 010374 <br>
                     S.C. Unleashed S.R.L. <br>
        CUI: RO12381340 <br>
        Trade Register: J40/372/2002</div>
            </div>
        
        </div>

        <div class="space"></div>


        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>