<?php
session_start();
include("db_con.php");

if(!isset($_SESSION['login'])){
  
  echo "hello !isset(session 'login')";
  header('loation:login.php');
}
// $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>home</title>
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
      <!-- <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log_out</a></li>
    </ul>
  </div>
</nav>


<h2> Welcome
  <?php 
if(isset($_SESSION['username'])){

  echo $_SESSION['username'];
  }else{
    header('location:login.php');
  }?></h2>

</body>
</html>