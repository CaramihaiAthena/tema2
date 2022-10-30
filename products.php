<?php
session_start();
include ('dbCon.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="products.css">
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


        <?php 
        try {
        ?>
            <div class="container py-5" >
                <div class="row m-4" >
        <?php
            $query = $conn->prepare("SELECT * FROM Athena.products");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $v) {
        ?>
        <!-- ar fi trebuit sa fie 4 coloane, doar ca am adaugat margin si padding -->
                    <div class="col-xl-3 m-5 p-2" >
                    <form method="POST" action="purchases.php?action=add&id=<?php echo $v["id"];?>">
                        <div class="card">
                            <img src="images/foodcat.jpeg" class="card-img-top" alt="">
                            <div class="card-body" style="width: 18rem;">
                            <h5 class="card-title" name="nume" ><?php echo $v['nume']; ?></h5>
                            <p class="card-text"><?php echo $v['descriere']; ?></p>
                            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                            <p class="card-text"><?php echo $v['pret']." RON"; ?></p>
                            <input type="submit" name="add" value="Add to Cart" class="btnAddAction" />
                            <input type="hidden" name="hidden_name" value="<?php echo $v['nume']; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $v['pret']; ?>">
                            <input type="hidden" name="hidden_desc" value="<?php echo $v['descriere']; ?>">
                            </div>
                        </div>       
                    </form>
                    </div>
        <?php
       
            }
        ?> 
                </div>
            </div>
        <?php
        }catch(PDOException $e) {
            echo "Error ".$e->getMessage();
        }
        ?>
        <script src="" async defer></script>
    </body>
</html>