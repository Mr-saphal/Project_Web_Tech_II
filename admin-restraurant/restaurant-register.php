<?php

if(isset($_POST['createAccount'])){

    $isValid = true;


    // Full Name
    if(isset($_POST['fullName']) && !empty($_POST['fullName']) && trim($_POST['fullName'])!=''){

        $fullName = $_POST['fullName'];

    }else{

        $isValid = false;
        echo "Full Name is required<br>";

    }


    // Email
    if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])!=''){

        $email = $_POST['email'];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

            $isValid = false;
            echo "Email is not valid<br>";

        }

    }else{

        $isValid = false;
        echo "Email is required<br>";

    }


    // Phone Number
    if(isset($_POST['phoneNumber']) && !empty($_POST['phoneNumber']) && strlen($_POST['phoneNumber']) == 10){

        $phone = $_POST['phoneNumber'];

    }else{

        $isValid = false;
        echo "Phone Number is required and must be 10 digits<br>";

    }


    // Password
    if(isset($_POST['password']) && !empty($_POST['password'])){

        $pwd = $_POST['password'];

    }else{

        $isValid = false;
        echo "Password is required<br>";

    }


    // Confirm Password
    if(isset($_POST['cpassword']) && !empty($_POST['cpassword'])){

        $cpwd = $_POST['cpassword'];

    }else{

        $isValid = false;
        echo "Confirm Password is required<br>";

    }


    // Password Match
    if(isset($pwd) && isset($cpwd) && $pwd != $cpwd){

        $isValid = false;
        echo "Two Passwords do not match<br>";

    }


    // Address
    if(isset($_POST['address']) && !empty($_POST['address'])){

        $address = $_POST['address'];

    }else{

        $isValid = false;
        echo "Address is required<br>";

    }


    // NID Document
    if(isset($_FILES['document']) && !empty($_FILES['document']['name']) 
        && $_FILES['document']['error'] == 0){

        $document = $_FILES['document'];

        $documentName = $document['name'];

        $documentTmp = $document['tmp_name'];

        $documentType = $document['type'];


        // Allowed file types
        $allowedTypes = array(
            'image/jpeg',
            'image/png',
            'image/jpg'
        );


        if(!in_array($documentType, $allowedTypes)){

            $isValid = false;
            echo "Only JPG and PNG files are allowed<br>";

        }

    }else{

        $isValid = false;
        echo "NID Document is required<br>";

    }


    // Insert Data
    if($isValid){

        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'project';


        $connection = mysqli_connect(
            $hostname,
            $username,
            $password,
            $database
        );


        if($connection){

            // Upload document
            $documentPath = "documents/" . $documentName;

            move_uploaded_file($documentTmp, $documentPath);


            $sql = "INSERT INTO users
                    (name, email, phoneno, password, address, document)
                    VALUES
                    ('$fullName', '$email', '$phone', '$pwd', '$address', '$documentName')";


            $result = mysqli_query($connection, $sql);


            if($result){

                echo "<p style='color:green'>Registration successful.</p>";

            }else{

                echo "<p style='color:red'>Registration Failed.</p>";

            }


        }else{

            echo "Database connection error: " . mysqli_connect_error();

        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurant Registration</title>

</head>

<body>

    <form method="post" enctype="multipart/form-data">

        <h3>Create Restaurant Account</h3>


        Full Name:
        <input type="text" name="fullName" id="fullName">

        <br><br>


        Email Address:
        <input type="email" name="email" id="email">

        <br><br>


        Phone Number:
        <input type="tel" name="phoneNumber" id="phone">

        <br><br>


        Password:
        <input type="password" name="password" id="password">

        <br><br>


        Confirm Password:
        <input type="password" name="cpassword" id="cpassword">

        <br><br>


        Address:
        <input type="text" name="address" id="address">

        <br><br>


        Add your NID:
        <input type="file" name="document" id="document">

        <br><br>


        <input type="submit" name="createAccount" value="Create Account">

    </form>

</body>

</html>