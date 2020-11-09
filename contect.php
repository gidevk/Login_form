<?php
session_start();
include("db_con.php");

if(isset($_SESSION['username'])){

  echo $_SESSION['username'];
  }else{
    header('location:login.php');
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

    <title>contect</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SCIS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="contect.php">CONTACT</a></li>
      <li><a href="about.php">ABOUT</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
  </div>
</nav>

<?php

echo "<h1> welcome to contect page </h1>";
?>

<h3>
Dean <br>
School of CIS <br>
University of Hyderabad  <br>
P.O. Central University <br>
Hyderabad - 500 046  <br>
Email:  deanscis@uohyd.ernet.in <br>
Email:  deanscis@uohyd.ac.in <br>
Phone:  91-040-23134101 <br>
Phone:  91-040-23010780 <br>
</h3>
</body>
</html>