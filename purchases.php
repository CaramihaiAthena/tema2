<?php session_start(); 
include ('dbCon.php');
require ('filehandler.php');
//var_dump($_SESSION['id']);
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
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div>
            <h1>Cart items:  <span> <?php getNumberOfCartItems(); ?> </span></h1>
        </div>
        <?php 
        if(!empty($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $key=>$value) {
        ?>
        <div class="product">
            <div class="row">
            <div class="col-md-2">
                    <!-- imaginea produsului -->
            </div>
            <div class="col-md-2">
                <h2><?php echo $value['nume'] ?></h2>
                <h5><?php echo $value['quantity']. " BUC";?></h5>
                <h5><?php echo $value['pret']." RON"; ?></h5>
            </div>
            <div class="col-md-2">
                <h3>Descriere produs: </h3>
                <h5><?php echo $value['descriere'] ?></h5>
            </div>
            <div class="col-md-2">
                <h4>Subtotal:</h4>
                <h5> <?php getSubtotal($value['id']); ?> </h5>
            </div>
            <div class="col-md-2">
                <a href="purchases.php?remove-item-id=<?php echo $value['id']?>">Remove</a>
            </div>
        </div>

        <?php   
            } 
        }?>
        <div class="col-md-2">
                <h4>Total:</h4>
                <h5> <?php getTotal(); ?> </h5>
        </div>
        <div class="col-md-2">
                <a href="purchases.php?clear-cart" class="btn btn-outline-danger">Clear cart</a>
        </div>

        <div class="col-md-2">
            <a href="checkOutPage.php" class="btn btn-outline-primary">Pay Now</a>
        </div>
            </div>

    </body>
</html>