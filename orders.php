<?php session_start();
require("dbCon.php");

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
        <link rel="stylesheet" href="orders.css">
    </head>
    <body>
    <?php
            $userId = $_SESSION['id'];
            $query = $conn->prepare("SELECT * FROM Athena.orders where user_id='$userId'");
            $query->execute();
    ?>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-borderd table-striped center" style="width:50%">
                <thead>
                    <th>ID</th>
                    <th>Tracking number</th>
                    <th>Order date</th>
                    <th>Status</th>
                    <th>View details</th>
                </thead>

                <tbody>
                <?php
                    if($query->rowCount() > 0) {
                        foreach($query as $item) {
                            ?>
                            <tr>
                                <td> <?php echo $item['id']; ?> </td>
                                <td> <?php echo $item['tracking_no']; ?> </td>
                                <td> <?php echo $item['order_date']; ?> </td>
                                <td> <?php echo $item['order_status']; ?> </td>
                                <td>
                                    <a href="viewDetails.php?t=<?= $item['tracking_no']; ?>" class="btn btn-primary">View details</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }else {
                        ?>
                        <tr>
                                <td colspan="5">No orders yet</td>
                            </tr>
                        <?php

                    }
    ?>
                </tbody>
            </div>
        </div>
    </div>

        <script src="" async defer></script>
    </body>
</html>