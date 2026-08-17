<?php

session_start();


/* Check Food ID */

if(isset($_GET['id'])){

    $id = $_GET['id'];

}else{

    echo "Food ID is missing.";
    exit();

}


/* Check whether food exists */

if(isset($_SESSION['foods'][$id])){

    $foodName = $_SESSION['foods'][$id]['name'];

}else{

    echo "Food not found.";
    exit();

}


/* Delete Food */

if(isset($_POST['deleteFood'])){

    unset($_SESSION['foods'][$id]);

    header("Location: food.php");

    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Delete Food</title>

    <style>

        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            background-color: white;
            padding: 30px;
            text-align: center;
        }

        .delete {
            background-color: red;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        .back {
            background-color: #333;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
        }

    </style>

</head>

<body>


    <div class="container">

        <h2>Delete Food</h2>


        <p>

            Are you sure you want to delete

            <strong>
                <?php echo $foodName; ?>
            </strong>

            ?

        </p>


        <form method="post">

            <input
                type="submit"
                name="deleteFood"
                value="Yes, Delete"
                class="delete"
            >


            <a
                href="foods.php"
                class="back"
            >
                Cancel
            </a>

        </form>


    </div>


</body>

</html>