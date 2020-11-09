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

    <title>about</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">SCIS</a>
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

echo "<h1> welcome to about page </h1>";
?>
<h3>
The School of Computer and Information Sciences (SCIS) , created in 2013 after being a department in the School of Maths & Computer/Information Sciences for 20 years, is the largest unitary school in the university. AI and SCIS: ... Tech (AI) program in India?
</h3>
</body>
</html>