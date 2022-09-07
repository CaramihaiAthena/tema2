<?php session_start();
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
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact</a></li>

               <?php $loggedIn = isset($_SESSION['user']) ;
               if(!$loggedIn) {?>
                <li><a href="register.php">Register</a><li>
                <li><a href="login.php">Login</a> <li>
              <?php } else { ?>
                <div class = "navbar">
                <div class="dropdown">
                     <a href="#" class="dropbtn">My Profile
                     <i class="fa fa-caret-down"></i>
                     </a>
                <div class="dropdowncontent">
                        <a href="#">Comenzile mele</a>
                        <a href="#">Favorite</a>
                        <a href ="logout.php">Log Out</a>
                </div> 
            </div> 
                </div>
  
                <?php }  ?>
            </ul>
        </nav>
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
       


        <script src="" async defer></script>

</html>