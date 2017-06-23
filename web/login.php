<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Login </title>
</head>
<body>
    <a href="index.php"> Homepage </a><br>
    <h3>
        <legend> LOGIN </legend>
    </h3>
            <label> Login as administrator </label>
                <input type="radio" name="login_admin"><br>
            <label> Login as customer </label>
                <input type="radio" name="login_customer">
    <h3>
        <form action="admin.php" method="post" id="admin_login_form">
            <label> Email </label><br>
                <input type="email" name="login_email" class="admin" placeholder="Type email"><br>
            <label> Password </label><br>
                <input type="password" name="login_passsword" class="admin" placeholder="Type password"><br><br>
                <input type="submit" name="login_submit" class="admin" value="Login"><br>
        </form><br>
        <form action="" method="post" id="customer_login_form">
            <label> Email </label><br>
            <input type="email" name="login_email" class="customer" placeholder="Type email"><br>
            <label> Password </label><br>
            <input type="password" name="login_passsword" class="customer" placeholder="Type password"><br><br>
            <button type="submit" name="login_submit" class="customer" value="Login"><br>
        </form>
        <p>
            <a href="basket.php"> Show my basket </a> &nbsp &nbsp
            <a href="customer.php"> Show my profile </a> &nbsp &nbsp
            <a href="order.php"> Show my orders </a> &nbsp &nbsp
        </p>
    </h3>
</body>
</html>





