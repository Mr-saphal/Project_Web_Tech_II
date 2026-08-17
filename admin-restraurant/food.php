<?php

session_start();


/* Create default foods if session does not exist */

if(!isset($_SESSION['foods'])){

    $_SESSION['foods'] = array(

        1 => array(
            "name" => "Momo",
            "category" => "Fast Food",
            "price" => 180
        ),

        2 => array(
            "name" => "Burger",
            "category" => "Fast Food",
            "price" => 250
        ),

        3 => array(
            "name" => "Pizza",
            "category" => "Pizza",
            "price" => 300
        )

    );

}

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

        .edit {
            color: blue;
        }

        .delete {
            color: red;
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

            <a href="add-food.php" class="button">
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


            <?php

            foreach($_SESSION['foods'] as $id => $food){

            ?>

                <tr>

                    <td>
                        <?php echo $id; ?>
                    </td>


                    <td>
                        <?php echo $food['name']; ?>
                    </td>


                    <td>
                        <?php echo $food['category']; ?>
                    </td>


                    <td>
                        Rs. <?php echo $food['price']; ?>
                    </td>


                    <td>

                        <a
                            href="edit-food.php?id=<?php echo $id; ?>"
                            class="edit"
                        >
                            Edit
                        </a>


                        |


                        <a
                            href="delete-food.php?id=<?php echo $id; ?>"
                            class="delete"
                        >
                            Delete
                        </a>

                    </td>

                </tr>

            <?php

            }

            ?>


        </table>

    </div>

</body>

</html>