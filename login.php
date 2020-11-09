
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Login Page</title>

    <style>
         body{
             background-image: url("scis.jpg");
         } 

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
      <a class="navbar-brand" href="#">SCIS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="contect.php">CONTACT</a></li>
      <li><a href="about.php">ABOUT</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <!-- <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
    </ul>
  </div>
</nav>


<div class="center" method="POST" action="#" >
      
    <p class="login-card-description">Sign into your account</p>
    <form action="valid.php" method="POST">
        <div class="form-group">
          <label for="user_id" class="sr-only">User_id</label>
          <input type="text" name="user_id" id="user_id" class="form-control" placeholder="user_id">
        </div>
        <div class="form-group mb-4">
          <label for="password" class="sr-only">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="***********">
        </div>
    
        <button type="sbumit" class="btn btn-priary" >Login</button>
   </form>
      <a href="forget.php" class="forgot-password-link">Forgot password?</a>
      <p class="login-card-footer-text">Don't have an account? <a href="signup.php" class="text-reset">Register here</a></p>
      <nav class="login-card-footer-nav">
        <a href="#!">Terms of use.</a>
        <a href="#!">Privacy policy</a>
      </nav>
 </div>


</body>
</html>