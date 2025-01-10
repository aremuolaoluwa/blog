<?php

require "db.php";

if(isset($_POST["register"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);
    
    // Check if user already exists
    $sql_check = "SELECT * FROM users WHERE email = '$email'";
    $query_check = mysqli_query($conn, $sql_check);
    if(mysqli_fetch_assoc($query_check)){
        //if user exists
        $error = "User already exist!";
    }else {
        //if user does not exist
        $sql = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$encrypt_password')";
        $query = mysqli_query($conn, $sql) or die ("User not registered");
        // if registration successful
       $success = "User registration successful!";
    }
}

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);
    // Check if user already exists
    $sql_check2 = "SELECT * FROM users WHERE email = '$email'";
    $query_check2 = mysqli_query($conn, $sql_check2);
    if(mysqli_fetch_assoc($query_check2)){
        // Check if user email and password exist
        $sql_check = "SELECT * FROM users WHERE email = '$email' AND password = '$encrypt_password'";
        $query_check = mysqli_query($conn, $sql_check);
    if(mysqli_fetch_assoc($query_check)){
        //Login to dashboard
        $success = "Login successful!";
    }else {
        //User not found
        $error = "User password incorrect";
    }
    }else {
        //User not found
        $error = "User email not found";
    }
}