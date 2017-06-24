<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Register </title>

        <link href="../bootstrap/css/bootstrap.flatly.css" rel="stylesheet">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>

        <?php
        include_once("header.php");
        include '../src/Customer.php';
        include '../MySQLConnection.php';
        ?>

      r  <div class="container">
            <div class="col-sm-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="control-label" for="inputDefault"> Name </label>
                        <input type="text" class="form-control" id="inputDefault" name="register_name" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputDefault"> Surname </label>
                        <input type="text" class="form-control" id="inputDefault" name="register_surname" placeholder="Your surname">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputDefault"> Email </label>
                        <input type="email" class="form-control" id="inputDefault" name="register_email" placeholder="Your email">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputDefault"> Password </label>
                        <input type="password" class="form-control" id="inputDefault" name="register_passsword" placeholder="Your password"><br>
                        <input type="password" class="form-control" id="inputDefault" name="register_passsword_confirm" placeholder="Confirm your password">
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="terms_and_conditions">
                            I accept terms & conditions of this shop.
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="float: right" name="register_submit"> Register </button>
                    </div>
                    
                    <?php
                            Customer::saveToDb($conn);
                    ?>
                </form>
                </body>
                </html>