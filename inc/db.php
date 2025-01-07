<?php

$host = "localhost";
$database = "blog";
$user = "root";
$password = "";

// Create a database connection
$conn = mysqli_connect($host, $user, $password, $database) or die("Database not connected");

// if($conn){
//     echo "Database connection established!";
// }