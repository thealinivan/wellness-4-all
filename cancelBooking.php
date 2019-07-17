<?php
    session_start(); 
    require_once('dbcon.php');    
   
    if(isset($_REQUEST["serviceID"])){
        $serviceID = $_REQUEST["serviceID"];
        $customerID = $_SESSION['id'];
        $mysqli->query("DELETE FROM bookings WHERE service_ID='$serviceID' AND user_ID ='$customerID'");
        echo "<script>alert('Booking was removed !');</script>";
        echo "<script>window.location.href='mybookings.php'</script>";
    }
    

?>