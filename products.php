<?php 
    require("dbCon.php");
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
    



?>
    <div class="container py-5" >
            <div class="row m-4" >
                <h1 class="text-center">Products</h1>
                <?php    
                    $sql = "SELECT * FROM Athena.products";
                    $result = $conn->prepare($sql);
                
                    $result->execute();
                
                    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                
                    foreach($rows as $val) {
                    ?>
                    <div class="col-xl-3 m-5 p-2" >
                        <div class="card d-flex flex-column align-items-center p-2" >
                        <img src="images/foodcat.jpeg" alt="foodcat" width="200px" height="250px">
                            <div class="card-body d-flex flex-column align-items-left p-2" >
                            
                                <h4 class="card-title"><?php echo "{$val['nume']}";?></h4>
                                <h3 class="card-title"><?php echo "{$val['pret']}"." RON";?></h3>
                                <p class="card-text"><?php echo "{$val['descriere']}";?></p>
                                <a href="purchases.php" class="btn btn-warning m-1"> Add to cart</a>
                                <a href="favorites.php"class="btn btn-danger ">Favorites</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
            </div> 
    </div>

        
        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
