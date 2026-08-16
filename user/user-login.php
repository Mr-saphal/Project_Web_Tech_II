<?php

$isValid = true;

if (isset($_POST['login'])) {

    if (isset($_POST['email']) && trim($_POST['email']) != '') {
        $email = $_POST['email'];
    } else {
        $isValid = false;
        echo "Email is required<br>";
    }

    if (isset($_POST['password']) && trim($_POST['password']) != '') {
        $pwd = $_POST['password'];
    } else {
        $isValid = false;
        echo "Password is required<br>";
    }

    if ($isValid) {
        echo "Login successful";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

<form method="post">

    <h3>Login in to Chatta Fatta</h3>
    Email Address:<br><br>
    <input type="text" name="email" id="email">
    <br><br>
    Password:<br><br>
    <input type="password" name="password" id="password">
    <br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>