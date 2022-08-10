
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <p class="error my-error"></p>  <!-- divul ascuns pt eroare -->
        <h1>WELCOME</h1>
        <hr><br>

        <div class="page">
        <form name="myForm" method="POST" action="form.php">
            <fieldset>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="example@yahoo.com">   
            <br><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <br><br>
            <label for="confirmpass">Confirm</label>
            <input type="password" id="confirmpass" name="confirmpass">
            <br><br> 
            <input type="submit" name="submit" id="submit" >
            </fieldset>
        </form>
        </div>
       
        <script src="file.js"></script>
    </body>
</html>