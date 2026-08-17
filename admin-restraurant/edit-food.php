<?php

session_start();


/* Default Food Data */

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


/* Check ID */

if(isset($_GET['id'])){

    $id = $_GET['id'];

}else{

    echo "Food ID is missing.";
    exit();

}


/* Check Food */

if(!isset($_SESSION['foods'][$id])){

    echo "Food not found.";
    exit();

}


/* Get Food */

$foodName = $_SESSION['foods'][$id]['name'];

$category = $_SESSION['foods'][$id]['category'];

$price = $_SESSION['foods'][$id]['price'];


/* Update Food */

if(isset($_POST['updateFood'])){


    if(isset($_POST['foodName']) && !empty($_POST['foodName'])){

        $foodName = $_POST['foodName'];

    }else{

        echo "Food Name is required<br>";

    }


    if(isset($_POST['category']) && !empty($_POST['category'])){

        $category = $_POST['category'];

    }else{

        echo "Category is required<br>";

    }


    if(isset($_POST['price']) && !empty($_POST['price'])){

        $price = $_POST['price'];

    }else{

        echo "Price is required<br>";

    }


    if(!empty($foodName) && !empty($category) && !empty($price)){


        /* Save Updated Food */

        $_SESSION['foods'][$id]['name'] = $foodName;

        $_SESSION['foods'][$id]['category'] = $category;

        $_SESSION['foods'][$id]['price'] = $price;


        echo "<p style='color:green'>Food updated successfully.</p>";

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Food</title>

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


        input, select {

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

        <h2>Edit Food</h2>

    </div>


    <div class="container">


        <form method="post">


            <input
                type="hidden"
                name="id"
                value="<?php echo $id; ?>"
            >


            Food Name:

            <input
                type="text"
                name="foodName"
                id="foodName"
                value="<?php echo $foodName; ?>"
            >


            Category:

            <select
                name="category"
                id="category"
            >

                <option value="">
                    Select Category
                </option>


                <option
                    value="Fast Food"
                    <?php

                    if($category == "Fast Food"){

                        echo "selected";

                    }

                    ?>
                >

                    Fast Food

                </option>


                <option
                    value="Pizza"
                    <?php

                    if($category == "Pizza"){

                        echo "selected";

                    }

                    ?>
                >

                    Pizza

                </option>


                <option
                    value="Drinks"
                    <?php

                    if($category == "Drinks"){

                        echo "selected";

                    }

                    ?>
                >

                    Drinks

                </option>

            </select>


            Price:

            <input
                type="number"
                name="price"
                id="price"
                value="<?php echo $price; ?>"
            >


            <input
                type="submit"
                name="updateFood"
                value="Update Food"
                class="button"
            >


            <a
                href="food.php"
                class="button"
            >

                Back

            </a>


        </form>


    </div>


</body>

</html>