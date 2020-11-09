<?php
session_start();
include("db_con.php");

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection sussessfull";

}else {
    echo "no connecgtion";
}

mysqli_select_db($con, 'itlab');



$pass = $_POST['password'];
$id =$_POST['user_id'];



$q = "select *from itlabexerciseusers where USERNAME ='$id' && PASSWORD = '$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

// $name =

if($num == 1){
    // echo "duplicate data";
    // $_SESSION['username'] = //$_POST['USERNAME'];//$name;
    
     $_SESSION['username']=$id;
    $_SESSION['login']=$id;
    header('location:home.php');
}else {
    
    echo "user id/password is not valid";
    header('location:login.php');
}





?>