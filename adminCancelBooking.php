<?php
    session_start(); 
    require_once('dbcon.php');    
   
    if(isset($_REQUEST["serviceID"]) && isset($_REQUEST["customerID"])){
        $serviceID = $_REQUEST["serviceID"];
        $customerID = $_REQUEST['customerID'];
        $mysqli->query("DELETE FROM bookings WHERE service_ID='$serviceID' AND user_ID ='$customerID'");
        echo "<script>alert('Booking was removed !');</script>";
        echo "<script>window.location.href='bookings.php'</script>";
    }
    

?>