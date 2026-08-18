<?php

if (isset($_POST['createAccount'])) {

    $isValid = true;

    // Full Name
    if (isset($_POST['fullName']) && !empty($_POST['fullName']) && trim($_POST['fullName']) != '') {

        $fullName = $_POST['fullName'];

    } else {

        $isValid = false;
        echo "Full Name is required<br>";

    }


    // Email
    if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email']) != '') {

        $email = $_POST['email'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $isValid = false;
            echo "Email is not valid<br>";

        }

    } else {

        $isValid = false;
        echo "Email is required<br>";

    }


    // Phone Number
    if (
        isset($_POST['phoneNumber']) &&
        !empty($_POST['phoneNumber']) &&
        strlen($_POST['phoneNumber']) == 10
    ) {

        $phone = $_POST['phoneNumber'];

    } else {

        $isValid = false;
        echo "Phone Number is required and must be 10 digits<br>";

    }


    // Password
    if (isset($_POST['password']) && !empty($_POST['password'])) {

        $pwd = $_POST['password'];

    } else {

        $isValid = false;
        echo "Password is required<br>";

    }


    // Confirm Password
    if (isset($_POST['cpassword']) && !empty($_POST['cpassword'])) {

        $cpwd = $_POST['cpassword'];

    } else {

        $isValid = false;
        echo "Confirm Password is required<br>";

    }


    // Check Password
    if (isset($pwd) && isset($cpwd) && $pwd != $cpwd) {

        $isValid = false;
        echo "Two passwords do not match<br>";

    }


    // Insert into Database
    if ($isValid) {

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "project";

        $connection = mysqli_connect(
            $hostname,
            $username,
            $password,
            $database
        );


        if ($connection) {

            $sql = "INSERT INTO users(name, email, phoneno, password)
                    VALUES('$fullName', '$email', '$phone', '$pwd')";

            $result = mysqli_query($connection, $sql);

            
            if($result){
        header("Location: index2.php");
      }else{
        echo "<p style='color:red'>User has not been registered.</p>";
      } 


      

        }
        

            echo "Database connection error: "
                 . mysqli_connect_error();

        }

    }



?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <form method="post">

    <h3>Welcome to Chatta-Fatta</h3>

    <p class="subtitle">Create your account</p>


    <div class="form-grid">

        <div class="form-group">
            <label for="fullName">Full Name</label>

            <input
                type="text"
                name="fullName"
                id="fullName"
                placeholder="Enter your full name"
            >
        </div>


        <div class="form-group">
            <label for="email">Email Address</label>

            <input
                type="email"
                name="email"
                id="email"
                placeholder="Enter your email"
            >
        </div>


        <div class="form-group">
            <label for="phone">Phone Number</label>

            <input
                type="tel"
                name="phoneNumber"
                id="phone"
                placeholder="Enter 10 digit phone number"
            >
        </div>


        <div class="form-group">
            <label for="password">Password</label>

            <input
                type="password"
                name="password"
                id="password"
                placeholder="Enter your password"
            >
        </div>


        <div class="form-group">
            <label for="cpassword">Confirm Password</label>

            <input
                type="password"
                name="cpassword"
                id="cpassword"
                placeholder="Confirm your password"
            >
        </div>

    </div>


    <input
        type="submit"
        name="createAccount"
        value="Create Account"
    >

</form>
    
</body>

</html>