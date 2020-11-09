<?php

session_start();
include("db_con.php");

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'itlab');

$name =$_POST['USERNAME'];
$pass = $_POST['PASSWORD'];
$ph =$_POST['phone'];



$q = "select *from itlabexerciseusers where USERNAME ='$name' && PASSWORD = '$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "duplicate data";
}else {
    $qy = "insert into itlabexerciseusers (USERNAME, PASSWORD, PHONE) value('$name','$pass', '$ph')";
    mysqli_query($con,$qy);
    header('location:login.php');
}





?>