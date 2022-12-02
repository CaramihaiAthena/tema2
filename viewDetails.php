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
        <link rel="stylesheet" href="viewDetails.css">
    </head>
    <body>

    <div class="py-3">
        <div class="container">
            <h6>
                <a href="welcome.php">Home /</a>
                <a href="orders.php">My Orders</a>
            </h6>
        </div>
    </div>

    <div class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">View order</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Delivery details</h4> <hr>
                                    <div class="row mb-3">
                                        <div class="col-md-12 mb-2">
                                        <label class="fw-bold">Tracking number: </label>
                                        <div class="border p-1" ><?php echo $data['tracking_no']; ?> </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                        <label class="fw-bold">Order date: </label>
                                        <div class="border p-1" ><?php echo $data['order_date']; ?> </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                        <label class="fw-bold">Status: </label>
                                        <div class="border p-1" ><?php echo $data['order_status']; ?> </div>
                                        </div>
                                    </div>
                                </div>
                                   
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
                                              FROM Athena.orders o JOIN Athena.orderProduct op 
                                              ON o.id=op.order_id 
                                              JOIN Athena.products p ON op.product_id = p.id 
                                              AND tracking_no='$tracking_no';");
                $order_query->execute();
                $sum = [];
                if($order_query->rowCount() > 0) {
                    foreach($order_query as $item) {
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