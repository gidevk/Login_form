<?php
session_start();

if(isset($_SESSION["login"]))
{
    session_unset();

    echo "<script> locatoin.href='login.php'</script>";
    session_destroy();
    header ('location:login.php');
}
else{
    header("Location:login.php");
}

?>