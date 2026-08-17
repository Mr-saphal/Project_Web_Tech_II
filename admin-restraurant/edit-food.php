<?php

session_start();


if(!isset($_GET['id'])){

    echo "Food ID is missing.";
    exit();

}

$id = $_GET['id'];


if(!isset($_SESSION['foods'][$id])){

    echo "Food not found.";
    exit();

}


if(isset($_POST['updateFood'])){

    $foodName = $_POST['foodName'];
    $category = $_POST['category'];
    $price = $_POST['price'];


    if(empty($foodName)){

        echo "Food name is required.";

    }elseif(empty($category)){

        echo "Category is required.";

    }elseif(empty($price)){

        echo "Price is required.";

    }else{

        $_SESSION['foods'][$id]['name'] = $foodName;

        $_SESSION['foods'][$id]['category'] = $category;

        $_SESSION['foods'][$id]['price'] = $price;


        header("Location: food.php");
        exit();

    }

}


$foodName = $_SESSION['foods'][$id]['name'];

$category = $_SESSION['foods'][$id]['category'];

$price = $_SESSION['foods'][$id]['price'];

?>

<!DOCTYPE html>
<html>

<head>

    <title>Edit Food</title>

</head>

<body>

<h2>Edit Food</h2>

<form method="post">

    Food Name:

    <input
        type="text"
        name="foodName"
        value="<?php echo $foodName; ?>"
    >

    <br><br>


    Category:

    <select name="category">

        <option value="Fast Food"
        <?php

        if($category == "Fast Food"){
            echo "selected";
        }

        ?>>
            Fast Food
        </option>


        <option value="Pizza"
        <?php

        if($category == "Pizza"){
            echo "selected";
        }

        ?>>
            Pizza
        </option>


        <option value="Drinks"
        <?php

        if($category == "Drinks"){
            echo "selected";
        }

        ?>>
            Drinks
        </option>

    </select>

    <br><br>


    Price:

    <input
        type="number"
        name="price"
        value="<?php echo $price; ?>"
    >

    <br><br>


    <input
        type="submit"
        name="updateFood"
        value="Update Food"
    >

</form>

<br>

<a href="food.php">
    Back to Foods
</a>

</body>

</html>