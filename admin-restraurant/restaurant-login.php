<?php

if (isset($_POST['login'])) {

    $isValid = true;

    if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email']) != '') {
        $email = $_POST['email'];
    } else {
        $isValid = false;
        echo "Email is required<br>";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $isValid = false;
        echo "Password is required<br>";
    }

    if ($isValid) {
        echo "Restaurant login form is valid.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Login</title>
</head>

<body>

    <form method="post">

        <h3>Restaurant Login</h3>

        Email:
        <input type="email" name="email" id="email">

        <br><br>

        Password:
        <input type="password" name="password" id="password">

        <br><br>

        <input type="submit" name="login" value="Login">

        <br><br>

        <a href="restaurant-register.php">
            Create Restaurant Account
        </a>

    </form>

</body>

</html>