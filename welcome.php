<!-- bootstrap -->
<?php session_start();
include_once('dbCon.php');
var_dump($_SESSION);
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
        <link rel="stylesheet" href="welcomepage.css">
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

                    <?php $loggedIn = isset($_SESSION['user']) ;
                    if(!$loggedIn) {?>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">My Profile</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="register.php">Register</a></li>
                        </ul>
                    </li>

              <?php } else { ?>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">My Profile</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="purchases.php">Purchases</a></li>
                            <li><a class="dropdown-item" href="#">Favorites</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php }  ?>
            </ul>
            </div>
        </div>
    </div>

    <!-- <div class="bg-image" style="background-image:url('images/dogbackground.png');height: 100vh; background-repeat: no-repeat; background-size: 600px;
    background-position-x: 840px; background-position-y: -188px;">
     -->
    <div class="container">
        <div class="row m-5">
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 ">
            <p class = "message">Get food, treats & toys for your best friend</p>
            </div>
            <!-- <div class="col-2 col-sm-3 col-md-2 col-lg-1 col-xl-1"><img class="img-responsive" id="food" width="60px" height="60px" src="images/food.png" alt="food"></div>
            <div class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1"><img class="img-responsive" id="treats" width="60px" height="60px" src="images/treats.png" alt="treats"></div>
            <div class="col-1 col-sm-1 col-md-2 col-lg-2 col-xl-1"><img class="img-responsive" id="toys" width="60px" height="60px" src="images/toys.png" alt="toys"></div>-->
        </div> 
    </div>


    <div class="container">
        <div class="row">
            <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3"></div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-5 col-xl-5 bg-dark text-white m-5 p-1 d-flex justify-content-center">
                <h1>How to take care of your pets</h1>
            </div>
            <div class="col-0 col-sm-0 col-md-0 col-lg-3 col-xl-3"></div>
                
            </div>

    <div class="row">
        <div class="col-1 col-sm-2 col-md-2 col-lg-4 col-xl-3"></div>
            <div class="col-9 col-sm-9 col-md-8 col-lg-4 col-xl-6">
                <p>Just like people, pets need food that meets their specific nutritional needs. 
                Importantly, their dietary needs are very different. Puppies require different 
                food from senior dogs. Pet's with health issues may require special diets. 
                Table scraps are typically not good for dogs and cats because many of the 
                foods we eat, such as salt, garlic, and onions are bad for your pet's health 
                 and can make them sick or even be fatal</p>
                </div>
            <div class="col-0 col-sm-0 col-md-2 col-lg-3 col-xl-3"></div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <section class="discount">
            <h1 class="disc">Free Shipping on Orders Over $100</h1>
            </section>
            </div>
        </div>


                
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 d-flex justify-content-center m-3">
            <p class="subscription">Subscribe to our newsletter</p>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-8 m-3 p-3 d-flex justify-content-end">
            <section class="subscribe">
                <form action="">
                    <div class="user-box">
                    <input type="text" id="email" name="email" placeholder="example@yahoo.com">
                    <input type="submit" value="subscribe" name="submit" id="submit">
                    </div>      
                </form>
            </section>
            </div>
  
            </div>
        </div>
    </div>
    </div>

    <?php //var_dump($_SESSION[['cart']['id']]); ?>

        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>













<!-- old style -->

<!-- <//?php session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Unleashed</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="welcomepage.css">


    </head>
        <header>
        <h1>Un<span>leashed</span>
        </h1>
        <div class="navbar">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact</a></li>

               <?//php $loggedIn = isset($_SESSION['user']) ;
               //if(!$loggedIn) {?>
                <div class="dropdown" data-dropdown>
                    <button class="link" data-dropdown-button>My Profile</button>
                        <div class="dropdown-menu">
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </div>
                </div>
              <?//php } else { ?>
                <div class="dropdown" data-dropdown>
                    <button class="link" data-dropdown-button>My Profile</button>
                        <div class="dropdown-menu">
                            <li><a href="#">Purchases</a></li>
                            <li><a href="#">Favorites</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </div>
                </div>
                <?//php }  ?>
            </ul>
        </nav>
        </div>
       
        </header>
        

        <body>
            
            <p class = "message">Get food, treats & toys for your best friend</p>
            <div>
            <img src="images/food.png" alt="food" class="food">
            <img src="images/toys.png" alt="toys" class="toy">
            <img src="images/treats.png" alt="treats" class="treats">
            </div>

            <section class = "about">
                <p class="intro"> How to take care of your pets</p>
                <p class="description">Just like people, pets need food that meets their specific nutritional needs. <br>
                Importantly, their dietary needs are very different. Puppies require different <br> 
                food from senior dogs. Pet's with health issues may require special diets. <br>
                Table scraps are typically not good for dogs and cats because many of the <br>
                foods we eat, such as salt, garlic, and onions are bad for your pet's health <br>
                 and can make them sick or even be fatal.</p>
            </section>
            <div class="headerline"> <br> </div>

            <section class="discount">
            <h1 class="disc">Free Shipping on Orders Over $100</h1>
            </section>

            <section class="subscribe">
                <p class="subscription">Subscribe to our newsletter</p>
                <form action="">
                    <div class="user-box">
                    <input type="text" id="email" name="email" placeholder="example@yahoo.com">
                    <input type="submit" value="subscribe" name="submit" id="submit">
                    </div>      
                </form>
            </section>

        </body>
       

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="welcome.js" async defer></script> 

</html> -->