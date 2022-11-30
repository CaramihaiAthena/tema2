<?php session_start();
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
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
    try {
        
        $query = $conn->prepare("SELECT orders.user_id, products.nume, products.pret, orderProduct.quantity, orders.order_date, orders.order_status 
                                FROM Athena.products 
                                JOIN Athena.orderProduct ON products.id = orderProduct.product_id 
                                JOIN Athena.orders on orderProduct.order_id = orders.id ORDER BY orders.order_date");

        $query->execute();
      ?>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-borderd table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Order Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($query as $row){
                        if($row['user_id'] == $_SESSION['id']) {  
                    ?>    
                            <tr>
                                
                                <td><?php echo $row['nume']; ?></td>
                                <td><?php echo $row['pret']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['order_date']; ?></td>
                                <td><?php echo $row['order_status']; ?></td>
                            </tr>
                    <?php                   
                    }
                } 
        ?>
                    <?php
                        $userId = $_SESSION['id'];
                        $query = $conn->prepare("SELECT * from Athena.orders where user_id='$userId'");
                        $query->execute();
                        if($query->fetchColumn() == 0) {
                    ?>
                            <tr>
                                <td>No products yet</td>
                            </tr>
                    <?php
                }
                ?>
                        
                    </tbody>
                </table>
            </div>
        </div>

    <?php                        
    }catch(PDOException $e) {  
        print "Error!: " . $e->getMessage() . "<br/>";
            }


      
        
    ?>
   
        
        <script src="" async defer></script>
    </body>
</html>