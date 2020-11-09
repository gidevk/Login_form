<?php
session_start();
include("db_con.php");

function password_gen($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'itlab');

function resetps($id, $mob){
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 'itlab');
  
  $q = "select *from itlabexerciseusers where USERNAME =$id AND PHONE = $mob";
  $result = mysqli_query($con,$q);
  $num = mysqli_num_rows($result);
 

  if($num == 1){
    $pass=password_gen(6);
    $up = "UPDATE itlabexerciseusers SET PASSWORD = $pass WHERE USERNAME =$id ";

    echo $pass ;
  }else {
      echo "your password is not set.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Forget Password</title>

    <style>
    .center {
                margin: auto;
                width: 60%;
                padding: 10px;
               height: 400px; 
                width: 500px; 
                }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">SCIS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="contect.php">CONTACT</a></li>
      <li><a href="about.php">ABOUT</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<form action="#" method="POST" class="center">
<div class="form-group"  >
        <label for=""> User Name </label>
        <input type="text" name='USERNAME' class ="form-control">
</div>

<div class="form-group" >
        <label for="">Moblie Number </label>
        <input type="text" name='mobile' class ="form-control">
    </div>

<button type="sbumit" class="btn btn-priary" > Singup</button>
</form>
</body>
</html>