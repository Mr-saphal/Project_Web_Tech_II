<?php

// PHP code will go here later

?>

<!DOCTYPE html>
<html>
<head>

    <title>Food Ordering</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">

    <!-- Bootstrap CSS 
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    > -->

</head>

<body>

<nav class="navbar navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="index.php">
            Chatta-Fatta
        </a>

        <a class="btn btn-primary" href="user-login.php">
            Login
        </a>

        <a class="btn btn-primary" href="register.php">
            Sign Up
        </a>


    </div>

</nav>


<div class="container text-center mt-5">

    <h1>Welcome to Chatta-Fatta</h1>

    <p>Order your favorite food easily.</p>

    <a href="#" class="btn btn-primary">
        Explore Food
    </a>

</div>


<div class="container mt-5">

    <h2 class="text-center">
        Popular Food
    </h2>

    <div class="row mt-4">

        <div class="col-md-4">

            <div class="card">

                <div class="card-body">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfHg-_F_5aTYBckQHO_rDuTG2CRYkE8a-5y3qqtFiF9za6JmoD4TInG3o&s=10"
     alt="Momo" class="card-img-top">
                    <h3>Momo</h3>

                    <p>Chicken Momo</p>

                    <p>Rs. 180</p>

                    <a href="#" class="btn btn-primary">
                        Order
                    </a>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card">

                <div class="card-body">
                    <img src="https://pub-aaa82e9851064d22b954c3ebbafc9ae6.r2.dev/legacy/thumbnails/burger-with-melted-cheese-m-Y1i3jpYYJZYfOEfX5dX.webp"
                     alt="Burger" class="card-img-top">

                    <h3>Burger</h3>

                    <p>Chicken Burger</p>

                    <p>Rs. 250</p>

                    <a href="#" class="btn btn-primary">
                        Order
                    </a>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card">

                <div class="card-body">
                    <img src="https://png.pngtree.com/png-vector/20241211/ourmid/pngtree-authentic-italian-pizza-with-cheese-and-fresh-vegetable-toppings-png-image_14714611.png"
                        alt="Pizza" class="card-img-top">

                    <h3>Pizza</h3>

                    <p>Chicken Pizza</p>

                    <p>Rs. 300</p>

                    <a href="#" class="btn btn-primary">
                        Order
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


<footer class="bg-dark text-white text-center mt-5 p-3">

    <p>Food Ordering Website</p>

</footer>

</body>
</html>