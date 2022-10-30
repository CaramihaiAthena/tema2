<?php session_start(); 
include ('dbCon.php');

if(isset($_POST['add'])){
    if(isset($_SESSION['cart'])) {
        $session_array_id = array_column($_SESSION['cart'],'id');
        if(!in_array($_GET['id'], $session_array_id)) {
            $session_array = array(
                'id' => $_GET['id'],
                'nume' => $_POST['hidden_name'],
                'pret' => $_POST['hidden_price'],
                'quantity' =>$_POST['quantity'],
                'descriere' => $_POST['hidden_desc']
            );
            $_SESSION['cart'][] = $session_array;
        }
    } else {
        $session_array = array(
            'id' => $_GET['id'],
            'nume' => $_POST['hidden_name'],
            'pret' => $_POST['hidden_price'],
            'quantity' =>$_POST['quantity'],
            'descriere' => $_POST['hidden_desc']
        );
        $_SESSION['cart'][] = $session_array;
    }
}

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

        <?php 
        if(!empty($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $key=>$value) {
        ?>
                <div class="col-md-2">
                <!-- imaginea produsului -->
                 </div>
                <div class="col-md-2">
                    <h2><?php echo $value['nume'] ?></h2>
                    <h5><?php echo $value['pret']." RON"; ?></h5>
                    <h3>Cantitate:</h3>
                    <h5><?php echo $value['quantity'];?></h5>
                </div>
                <div class="col-md-2">
                    <h3>Descriere produs: </h3>
                    <h5><?php echo $value['descriere'] ?></h5>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger btn-sm">Remove</button>
                </div>
            </div>
            </div>

        <?php } 
        }?>
        <script src="" async defer></script>
    </body>
</html>