<?php
    session_start(); 
    require_once('dbcon.php');    
    if(isset($_REQUEST["userID"])){
        $userID = $_REQUEST['userID'];
        $mysqli->query("DELETE FROM users WHERE id ='$userID'");
        echo "<script>alert('Customer was removed !');</script>";
        echo "<script>window.location.href='customers.php'</script>";
    }
   
?>