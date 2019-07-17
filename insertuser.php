<?php

    session_start();
    require_once('dbcon.php');

    //DOM -> DB//
    //input values
    $date=date('Y-m-d');
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $enc_password = md5($password);
    
    //insert procedure
    $mysqli->query("INSERT INTO users (date, first_name, last_name, phone, address, email, password) VALUES ('$date', '$first_name', '$last_name', '$phone', '$address', '$email', '$enc_password')");

    //feedback
    echo "It's all set < $first_name > ! ";
       
    //CLOSE//
    //cose db connection
    $mysqli->close(); 

    header("refresh:1 url=login.php");

?>

 
    