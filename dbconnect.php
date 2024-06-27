<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "fyp";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

// echo "succesfully connect"
?>