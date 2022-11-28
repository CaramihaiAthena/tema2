<?php session_start(); 
include ('dbCon.php');
require ('paymentHandler.php');
// var_dump($conn);
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

        <style>
            .row {
                margin-top:150px;
            }
            img {
                max-width:150px;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h1>Payment Successfully</h1>
            </div>
            <div class="col-4">
                <img src="images/verified-symbol-icon.png" alt="verfied">
            </div>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>