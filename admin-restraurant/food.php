<?php

session_start();

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
<html>

<head>

    <title>Manage Foods</title>

    <style>

        body{
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .container{
            width: 80%;
            margin: 30px auto;
        }

        table{
            width: 100%;
            background-color: white;
            border-collapse: collapse;
        }

        th, td{
            padding: 12px;
            border: 1px solid #ddd;
        }

        th{
            background-color: #333;
            color: white;
        }

        a{
            text-decoration: none;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>Manage Foods</h2>

    <a href="add-food.php">Add Food</a>

    <br><br>

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

                <a href="edit-food.php?id=<?php echo $id; ?>">
                    Edit
                </a>

                |

                <a href="delete-food.php?id=<?php echo $id; ?>">
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