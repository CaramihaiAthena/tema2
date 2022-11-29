<?php 
session_start();
unset($_SESSION['user']);
unset($_SESSION['id']);
unset($_SESSION['cart']);
session_destroy();
header("location:welcome.php");

?>