<?php
session_start();
require 'dbCon.php';
    // if(isset($_POST['scope'])) {
    //     $scope = $_POST['scope'];
    //     switch($scope) {
    //         case "add" :
    //             $prod_id = $_POST['prod_id'];
    //             $prod_qty = $_POST['prod_qty'];
                
    //             $user_id = $_SESSION['user']['user_id'];
    //             break;
    //         default: 
    //             echo 500;
                
    //     }
    // }

if(isset($_POST['add'])) {
     if(isset($_SESSION["shopping_cart"])) {
            $item_array_id = array_column($_SESSION['shopping_cart'], 'id');
            if(in_array($_POST['hidden_id'], $item_array_id)) {
                echo "<script>alert('Product is already added in the cart')</script>"; 
                echo '<script>window.location.replace("purchases.php")</script>';     
            } else {
                $count = count($_SESSION['shopping_cart']);
                $item_array = array (
                    'id' => $_POST['hidden_id'],
                    'nume' => $_POST['hidden_name'],
                    'pret' => $_POST['hidden_price'],
                    'descriere' => $_POST['hidden_desc'],
                    'cantitate' => $_POST['hidden_quantity']
                );
                $_SESSION['shopping_cart'][$count] = $item_array;
                echo '<script>window.location.replace("purchases.php")</script>';   
            }
        } else {
            $item_array = array (
                'id' => $_POST['hidden_id'],
                'nume' => $_POST['hidden_name'],
                'pret' => $_POST['hidden_price'],
                'descriere' => $_POST['hidden_desc'],
                'cantitate' => $_POST['hidden_quantity']
            );
            $_SESSION['shopping_cart'][0] = $item_array;
             echo '<script>window.location.replace("purchases.php")</script>';   
        }
 }

 ?>