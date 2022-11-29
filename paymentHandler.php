<?php 
session_start();
require("dbCon.php");
if(isset($_POST['pay'])) {
    try {
        $user_id = $_SESSION['id'];
        var_dump($user_id);
        $order_date = date('Y-m-d H:i:s');

        $stmt = $conn->prepare("INSERT INTO Athena.orders (user_id,order_date) VALUES (:user_id, :order_date)");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':order_date', $order_date);
        $stmt->execute();
        
        $userStmt = $stmt->fetch(PDO::FETCH_ASSOC);

        $order_id = $conn->lastInsertId(); 
        var_dump($order_id);
        foreach($_SESSION['cart'] as $key=>$value) {
            $product_id = $value['id'];
            $quantity = $_SESSION['cart'][$key]['quantity'];


            $stmt2 = $conn->prepare("INSERT INTO Athena.orderProduct (order_id, product_id, quantity) VALUES (:order_id, :product_id, :quantity)");
            $stmt2->bindParam(':order_id', $order_id);
            $stmt2->bindParam(':product_id', $product_id);
            $stmt2->bindParam(':quantity', $quantity);
            $stmt2->execute();
            $userStmt = $stmt2->fetch(PDO::FETCH_ASSOC);
    }
    
    }catch(PDOException $e) {
        $error = "Error: ".$e->getMessage();
        echo '<script> alert("'.$error.'"); </script>';

    }
    //var_dump($user_id);
    //var_dump($order_date);
    //echo date("Y,m,d / G:i:s");
}

?>