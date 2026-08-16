<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Categories</title>

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

        .button {
            padding: 10px 15px;
            background-color: #333;
            color: white;
            text-decoration: none;
        }

        table {
            width: 100%;
            margin-top: 20px;
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

    </style>

</head>

<body>

    <div class="header">

        <h2>Manage Categories</h2>

    </div>


    <div class="container">

        <a href="dashboard.php" class="button">
            Dashboard
        </a>

        <a href="#" class="button">
            Add Category
        </a>


        <table>

            <tr>

                <th>ID</th>
                <th>Category Name</th>
                <th>Action</th>

            </tr>


            <tr>

                <td>1</td>

                <td>Fast Food</td>

                <td>
                    <a href="#">Edit</a>
                    |
                    <a href="#">Delete</a>
                </td>

            </tr>


            <tr>

                <td>2</td>

                <td>Pizza</td>

                <td>
                    <a href="#">Edit</a>
                    |
                    <a href="#">Delete</a>
                </td>

            </tr>


            <tr>

                <td>3</td>

                <td>Drinks</td>

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