<?php
if(isset($_POST['createAccount'])){
  $isValid=true;
  if(isset($_POST['fullName']) && !empty($_POST['fullName']) && trim($_POST['fullName'])!=''){
    $fullName=$_POST['fullName'];
  }else{
  $isValid=false;
  echo "Full Name is required<br>";
  }

  if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])!=''){
    $email=$_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $isValid=false;
      echo "Email is not valid<br>";
    }

  }else{
    $isValid=false;
    echo "Email is required<br>";
  }

  if(isset($_POST['phoneNumber']) && !empty($_POST['phoneNumber']) && 10==strlen($_POST['phoneNumber'])){
    $phone=$_POST['phoneNumber'];
  }else{
    $isValid=false;
    echo "Phone Number is required and must be 10 digits<br>";
  }

  if(isset($_POST['password']) && !empty($_POST['password'])){
    $pwd=$_POST['password'];
  }else{
    $isValid=false;
    echo "Password is required<br>";
  }

   if(isset($_POST['cpassword']) && !empty($_POST['cpassword'])){
    $cpwd=$_POST['cpassword'];
  }else{
    $isValid=false;
    echo "Confirm Password is required<br>";
  }

   if(isset($pwd) && isset($cpwd) && $pwd!=$cpwd){
    $isValid=false;
    echo "Two Passwords doest not match";
  }

  if(isset($_POST['address']) && !empty($_POST['address'])){
    $address=$_POST['address'];
  }else{
    $isValid=false;
    echo "Address is required<br>";
  }

  if(isset($_FILES['document']) && !empty($_FILES['document']['name']) 
    && $_FILES['document']['error']==0){
    $document=$_FILES['document'];
  }else{
    $isValid=false;
    echo "Document is required<br>";
  }
  




}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
</head>
<body>
   <form method="post" enctype="multipart/form-data">
    <h3> Create Your Account </h3>
    Full Name: <input type="text" name="fullName" id="fullName"><br><br>
    Email Address: <input type="email" name="email" id="email"><br><br>
    Phone Number: <input type="tel" name="phoneNumber" id="phone"><br><br>
    Password: <input type="password" name="password" id="password">
    Confirm Password: <input type="password" name="cpassword" id="cpassword"><br><br>
    Delivery Address: <input type="text" name="address" id="address"><br><br>
    Add your NID: <input type="file" name="document" id="document"><br><br>
    <input type="submit" name="createAccount" value="Create Account">
</form>
  
</body>
</html>