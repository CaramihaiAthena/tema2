<?php 
function updateQuantity($quant) {
    foreach($_SESSION['cart'] as $key=>$value) {
        if($value['id'] == $_GET['id']) {
            //var_dump($quant);
            $_SESSION['cart'][$key]['quantity'] = $quant;
        }
    }
}

function removeItem() {
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $key=>$value) {
            if($value['id'] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}

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
    updateQuantity($_POST['quantity']);
}

if(isset($_GET['remove-item-id'])) {
    echo $_GET['id'] = $_GET['remove-item-id'];
    removeItem();
    header("Location: products.php");
    exit();
}
function clearCart() {
    unset($_SESSION['cart']);
}
if(isset($_GET['clear-cart'])) {
    clearCart();
    header("Location: products.php");
    exit();
}


$product_id = $_GET['id'];
function getSubtotal($product_id) {
    foreach($_SESSION['cart'] as $key=>$value) { 
        if($value['id'] == $product_id) {
            $subtotal = number_format($value['quantity'] * $value['pret'],2);
            echo $subtotal;
        }
    }
}

function getNumberOfCartItems() {
    echo count($_SESSION['cart']);
}

function getTotal() {
    $sum = [];
    foreach($_SESSION['cart'] as $value) {
        //calculates each subtotal
        $sub_sum = $value['pret'] * $value['quantity'];
        array_push($sum, $sub_sum);
    }
    echo number_format(array_sum($sum),2);
}

//var_dump($_SESSION);


?>