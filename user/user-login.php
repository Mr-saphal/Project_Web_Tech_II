<?php
session_start();

if(isset($_SESSION['username'])){
  header('location : welcome.php');
  exit();
}

if(isset($_POST['login'])){
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

  if(!$connection){
            die("Database connection failed: " . mysqli_connect_error());
        }

//$pass = md5($pwd);
  $query = "SELECT * from users where Email='$email' AND Password='$pwd'";
  $result = mysqli_query($connection, $query);
  
  if(mysqli_num_rows($result)==1){
    $user = mysqli_fetch_assoc($result);
    $_SESSION['username']= $user['name'];
  
        header("Location: index.php");
      }else{
        echo "<p style='color:red'>User has not been registered.</p>";
      } 
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
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <form method="post">
    <h3>Welcome Back to Chatta-Fatta</h3>
<p class="subtitle">Login to your account</p>

     Email: <input type="text" name="email" id="email"><br><br>
    Password: <input type="password" name="password" id="password"><br><br>
 <input type="submit" name="login" value="login">

 </form>
</body>
</html>