<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Register </title>
</head>
<body>
    <a href="index.php"> Homepage </a><br>
    <h3>
        <legend> REGISTER </legend>
        <form action="" method="post">
            <label> Name </label><br>
                <input type="text" name="register_name" placeholder="Type name"><br>
            <label> Surname </label><br>
                <input type="text" name="register_surname" placeholder="Type surname"><br>
            <label> Email </label><br>
                <input type="email" name="register_email" placeholder="Type email"><br>
            <label> Password </label><br>
                <input type="password" name="register_passsword" placeholder="Type password"><br>
            <label> Confirm password </label><br>
                <input type="password" name="register_passsword_confirm" placeholder="Confirm password"><br><br>
                <button type="submit" name="register_submit" value="Register"><br>
        </form>
    </h3>
<p>
    <a href="basket.php"> Show my basket </a> &nbsp &nbsp
    <a href="customer.php"> Show my profile </a> &nbsp &nbsp
    <a href="order.php"> Show my orders </a> &nbsp &nbsp
</p>
</body>
</html>