<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurant Dashboard</title>

    <style>

        body {
            font-family: Arial;
            margin: 0;
            background-color: #f2f2f2;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 30px auto;
        }

        .menu {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }

        .menu a {
            display: block;
            padding: 12px;
            margin: 10px 0;
            background-color: #eee;
            text-decoration: none;
            color: black;
        }

        .menu a:hover {
            background-color: #ddd;
        }

    </style>

</head>

<body>

    <div class="header">

        <h2>Restaurant Dashboard</h2>

        <p>Welcome to the Restaurant Management System</p>

    </div>


    <div class="container">

        <div class="menu">

            <h3>Menu</h3>

            <a href="#">
                Manage Foods
            </a>

            <a href="#">
                Manage Categories
            </a>

            <a href="#">
                Manage Orders
            </a>

            <a href="#">
                View Customers
            </a>

            <a href="#">
                Reports
            </a>

            <a href="restaurant-login.php">
                Logout
            </a>

        </div>

    </div>

</body>

</html>