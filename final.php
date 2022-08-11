<?php

$myNumber = filter_input(INPUT_POST,'num');

$host = "localhost";
$dbname = "razandb";
$root = "root";
$password = "";


$conn = new mysqli($host,$root,$password,$dbname);
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}else{
    $sql = "INSERT INTO mytable(num) VALUES(12)";

    echo "success";
    $conn->close();
}

?>