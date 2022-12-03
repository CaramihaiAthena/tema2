<?php
session_start();
require("dbCon.php");

$userId = $_SESSION['id'];

$queryOrderProd = $conn->prepare("SELECT * FROM Athena.orderProduct oP 
                                JOIN Athena.orders o ON op.order_id = o.id ");
$queryOrderProd->execute();

    try {
        if(isset($_GET['remove-item'])) { 
            foreach($queryOrderProd as $item) {
                if($item['order_status'] == 'deliverd') {
                    $order_id = $item['id'];
                    //var_dump($order_id);
                    $query =" DELETE FROM Athena.orderProduct WHERE order_id='$order_id' ";
                    $conn->exec($query);
                }
            }
        }
    }catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }


$queryOrders = $conn->prepare("SELECT * FROM Athena.orders where user_id='$userId'");
$queryOrders->execute();
    try {
        if(isset($_GET['remove-item'])) { 
            foreach($queryOrders as $item) {
                if($item['order_status'] == 'deliverd') {
                    $query =" DELETE FROM Athena.orders WHERE order_status='deliverd' ";
                    $conn->exec($query);
                }
            }
        }
    }catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

?>