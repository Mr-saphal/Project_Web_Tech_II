<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Foods</title>

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

        table {
            width: 100%;
            background-color: white;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        .button {
            padding: 8px 12px;
            text-decoration: none;
            background-color: #333;
            color: white;
        }

        .add {
            margin-bottom: 20px;
        }

    </style>

</head>

<body>

    <div class="header">

        <h2>Manage Foods</h2>

    </div>


    <div class="container">

        <div class="add">

            <a href="#" class="button">
                Add Food
            </a>

            <a href="dashboard.php" class="button">
                Dashboard
            </a>

        </div>


        <table>

            <tr>

                <th>ID</th>
                <th>Food Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Action</th>

            </tr>


            <tr>

                <td>1</td>
                <td>Momo</td>
                <td>Fast Food</td>
                <td>Rs. 180</td>

                <td>
                    <a href="#">Edit</a>
                    |
                    <a href="#">Delete</a>
                </td>

            </tr>


            <tr>

                <td>2</td>
                <td>Burger</td>
                <td>Fast Food</td>
                <td>Rs. 250</td>

                <td>
                    <a href="#">Edit</a>
                    |
                    <a href="#">Delete</a>
                </td>

            </tr>


            <tr>

                <td>3</td>
                <td>Pizza</td>
                <td>Pizza</td>
                <td>Rs. 300</td>

                <td>
                    <a href="#">Edit</a>
                    |
                    <a href="#">Delete</a>
                </td>

            </tr>

        </table>

    </div>

</body>

</html>