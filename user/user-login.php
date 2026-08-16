<?php
session_start();

if(isset($_SESSION['username'])){
  header('location : welcome.php');
}
$isValid = TRUE;
if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])!=''){
    $email=$_POST['email'];
  }else{
    $isValid=false;
    echo "Email is required<br>";
  }

  if(isset($_POST['password']) && !empty($_POST['password'])){
    $pwd=$_POST['password'];
  }else{
    $isValid=false;
    echo "Password is required<br>";
        
  }

  if($isValid){
    $hostname='localhost';
  $username= 'root';
  $password='';
  $database='project';

  $connection= mysqli_connect($hostname,$username,$password,$database);
$pass = md5($pwd);
  $query = "SELECT * from users where email='$email' AND password='$pass'";
  $result = mysqli_query($connection, $query);
  $user = mysqli_fetch_assoc($result);
  
  if(mysqli_num_rows($result)==1){
    $_SESSION['username']= $user['Name'];
    header('location: welcome.php');
  }
  else{
    echo "Invalid credentials";
  }
  mysqli_close($connection);
  }
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <h3> Login Form</h3>
     Email: <input type="text" name="email" id="email"><br><br>
    Password: <input type="password" name="password" id="password"><br><br>
 <input type="submit" name="login" value="login">

</body>
</html>