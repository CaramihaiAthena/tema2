<?php
   session_start();
   require 'dbCon.php';
//    if(isset($_POST['add'])) {
//      if(isset($_SESSION["shopping_cart"])) {
//             $item_array_id = array_column($_SESSION['shopping_cart'], 'id');
//             if(in_array($_POST['hidden_id'], $item_array_id)) {
//                 echo "<script>alert('Product is already added in the cart')</script>"; 
//             } else {
//                 $count = count($_SESSION['shopping_cart']);
//                 $item_array = array (
//                     'id' => $_POST['hidden_id'],
//                     'nume' => $_POST['hidden_name'],
//                     'pret' => $_POST['hidden_price'],
//                     'descriere' => $_POST['hidden_desc'],
//                     'cantitate' => $_POST['hidden_quantity']
//                 );
//                 $_SESSION['shopping_cart'][$count] = $item_array;
//             }
//         } else {
//             $item_array = array (
//                 'id' => $_POST['hidden_id'],
//                 'nume' => $_POST['hidden_name'],
//                 'pret' => $_POST['hidden_price'],
//                 'descriere' => $_POST['hidden_desc'],
//                 'cantitate' => $_POST['hidden_quantity']
//             );
//             $_SESSION['shopping_cart'][0] = $item_array;
//         }
//  }
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="card product_data shadow-sm mb-3">
            <div class="row align-items-center">         
            <?php 
                if(!empty($_SESSION['shopping_cart'])) {
                foreach($_SESSION['shopping_cart'] as $keys=>$values) {       
           ?>
            <div>  
                 <div class="col-md-2">
                     <!-- imaginea produsului -->
                 </div>
                <div class="col-md-2">
                    <h2><?php echo $values['nume']; ?> </h2>
                    <h5><?php echo $values['pret']." RON"; ?></h5>
                </div>
                <div class="col-md-2">
                    <!-- <input type="number" name="quantity" value="1" class="form-control"> -->
                    <input type="hidden" class="prodId" value="<?php echo $values['id']; ?> ">
                    <div class="input-group mb-3">
                        <button class="input-group-text decrement-btn ">-</button>
                        <input type="text" class="form-control text-center input-qty bg-white" value="1" disabled>
                        <button class="input-group-text increment-btn updateQty" >+</button>

                    </div>
                </div>
                <div class="col-md-2">
                    <h3>Descriere produs: </h3>
                    <h5><?php echo $values['descriere']; ?></h5>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger btn-sm">Remove</button>
                </div>
            </div>
        </div>
        <?php
           }
        }
        ?>   
        </div> 
            <div class="cart-total">
            <strong class="cart-total-title">TOTAL</strong>
            <span class="cart-total-price"></span>
        </div>
        
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
        <script src="purchases.js" async defer></script>
    </body>
</html>

<!-- FRONTend cart 
php clear session
place order -> o sa bag in baza de date 
cantitatea de facut-->

<!--Buton remove sa stearga produsul si dupa refresh
Totalul cartului = pret*cantitate
Cantatitatea  

switch scope
add : avem nevoie de o tabela care sa bage produsele in baza de date
update: avem nevoie de o tabela care sa updateze produsele in baza de date
facem asta folosind session si folosind ajax 
-->