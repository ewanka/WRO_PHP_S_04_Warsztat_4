<?

require_once("../src/Customer");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Customer </title>
</head>
<body>
    <a href="index.php"> Homepage </a><br>
    <a href="basket.php"> Show my basket </a><br>
    <a href="order.php"> Show my orders </a><br>
    <div>
        <p>
            $name <br>
            $surname <br>
            $email <br>
        </p>
        <p>
        <form action="" method="post">
            <label> Name </label><br>
            <input type="text" name="name" placeholder="$name"><br>
            <label> Surname </label><br>
            <input type="text" name="surname" placeholder="$surname"><br>
            <label> email </label><br>
            <input type="email" name="email" placeholder="$email"><br>
        </form>
        </p>
        <button type="button" name="edit_data"> edit </button><br>
        <button type="submit" name="save_data"> save </button><br>
        <p>
            <form action="" method="post">
                <label> Address </label><br>
                <input type="text" name="address_1" placeholder="Your address"><br>
                <label> Address </label><br>
                <input type="text" name="address_2" placeholder="Your address"><br>
                <label> Postal code </label><br>
                <input type="text" name="postal_code" placeholder="Your postal code"><br>
                <label> City </label><br>
                <input type="text" name="city" placeholder="Your city"><br>
            </form>
        </p>
        <button type="button" name="edit_address"> edit </button><br>
        <button type="submit" name="save_address"> save </button><br>
        <p>
            Password **********<br>
        </p>
<!--        Najchętniej pop-up -->
        <button type="button" name="edit_password"> edit </button><br>
        <button type="submit" name="save_password"> save </button><br>
        <p>
            <form action="" method="post">
                <label> New password </label><br>
                <input type="password" name="new_password" placeholder="Your new password"><br>
                <label> Confirm new password </label><br>
                <input type="password" name="confirm_new_password" placeholder="Confirm your new password"><br>
            </form>
        </p>
        <button type="button" name="change_password"> edit </button><br>
        <button type="submit" name="save_address"> save </button><br>
<!--        Najchętniej pop-up -->
        <br><br><button type="button" name="delete_account"> delete account </button><br>
        <p>
            <form action="" method="post">
                <label> Password </label><br>
                <input type="password" name="password" placeholder="Your password"><br>
                <label> Confirm password </label><br>
                <input type="password" name="confirm_password" placeholder="Confirm your password"><br>
            </form>
            </p>
            <button type="button" name="change_password"> edit </button><br>
            <button type="submit" name="save_address"> save </button><br>
        </p>
    </div>
</body>
</html>