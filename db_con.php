<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS itlab";

if ($conn->query($sql) === FALSE) {
  echo "Error creating database: " . $conn->error;
}


$conn -> select_db("itlab");


$sql = "CREATE TABLE IF NOT EXISTS itlabexerciseusers (
username VARCHAR(100) NOT NULL UNIQUE PRIMARY KEY,
password VARCHAR(40) NOT NULL,
phone VARCHAR(10) NOT NULL,
UNIQUE KEY unique_username (username)
)";

if ($conn->query($sql) === FALSE) {
  echo "Error creating table: " . $conn->error;
}




?>