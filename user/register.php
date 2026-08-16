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

  
 
  
if($isValid){
  $hostname='localhost';
  $username= 'root';
  $password='';
  $database='project';

  $connection= mysqli_connect($hostname,$username,$password,$database);

  if($connection){

    $sql="INSERT INTO users(name,email,phoneno,password)
  values('$fullName','$email','$phone','$pwd')";

 $result= mysqli_query($connection,$sql);
 if($result){
  echo "<p style='color:green>Registration successful.</p>";
 }else{
    echo "<p style='color:red'> Registration Failed.</p>";
 }
   
   
  }else{
    echo "Database connection error".mysqli_connect_error();
    exit();
  }
   
  if($result){
    header("Location:  ");
  }else{
    echo "<p style='color:red'>Student has been not registered.</p>";
  }
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
    <input type="submit" name="createAccount" value="Create Account">
</form>
  
</body>
</html>