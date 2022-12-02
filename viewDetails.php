<?php 
session_start();
require("dbCon.php");

if(isset($_GET['t'])) {
    $tracking_no = $_GET['t'];
    $userId = $_SESSION['id'];

    $query = $conn->prepare("SELECT * FROM Athena.orders WHERE tracking_no='$tracking_no' 
                            AND user_id='$userId'");
    $query->execute();
    
    if($query->rowCount() < 0) {
        ?>
        <h4>Something went wrong</h4>
        <?php
        die();
    }
} else {
    ?>
        <h4>Something went wrong</h4>
    <?php
    die(); 
}

$data = $query->fetch(PDO::FETCH_BOTH);
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
        <?php
    //var_dump($data);
        ?>
        <div class="col-md-6">
            <h4>Order details</h4>
            <hr>

            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>

                <tbody>
        <?php
                $order_query = $conn->prepare("SELECT o.id as oid, o.tracking_no, o.user_id, op.*, p.* 
                            FROM Athena.orders o, Athena.orderProduct op, Athena.products p
                            WHERE o.user_id = '$userId' and 
                            op.order_id= o.id and p.id = op.product_id 
                            and o.tracking_no = '$tracking_no'");
                $order_query->execute();
                $sum = [];
                if($order_query->rowCount() > 0) {
                    foreach($order_query as $item) {
                        //var_dump($item);
                        ?>
                        <tr>
                        <td class="align-middle"> <?php echo $item['nume']; ?> </td>
                        <td class="align-middle"> <?php echo ($item['pret'] *  $item['quantity'])." RON"; ?> </td>
                        </tr>
                        <?php
                        $sub_sum = $item['pret'] * $item['quantity'];
                        array_push($sum, $sub_sum);
                    }
                    $total = number_format(array_sum($sum),2);
                }
                

                ?>
                </tbody>
            </table>
                <hr>
                <h5>Total price : <span class="float-end fw-bold"><?php echo $total." RON"; ?></span></h5>
        </div>    
        <script src="" async defer></script>
    </body>
</html>