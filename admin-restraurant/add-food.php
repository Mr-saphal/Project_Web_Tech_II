<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Food</title>

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
            width: 50%;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .button {
            padding: 10px 15px;
            background-color: #333;
            color: white;
            border: none;
            text-decoration: none;
            cursor: pointer;
        }

    </style>

</head>

<body>

    <div class="header">

        <h2>Add Food</h2>

    </div>


    <div class="container">

        <form method="post">

            Food Name:

            <input type="text" name="foodName" id="foodName">

            
            Category:

            <select name="category" id="category">

                <option value="">Select Category</option>

                <option value="Fast Food">Fast Food</option>

                <option value="Pizza">Pizza</option>

                <option value="Drinks">Drinks</option>

            </select>


            Price:

            <input type="number" name="price" id="price">


            Description:

            <textarea name="description" id="description"></textarea>


            <input
                type="submit"
                name="addFood"
                value="Add Food"
                class="button"
            >

            <a href="food.php" class="button">
                Back
            </a>

        </form>

    </div>

</body>

</html>