<?php
    session_start(); 
    require_once('dbcon.php');    
    
    if(isset($_REQUEST["serviceid"])){
        $serviceID = $_REQUEST["serviceid"];
    
        $mysqli->query("DELETE FROM services WHERE id='$serviceID'");

        if(mysqli_affected_rows($mysqli) == 1)
        {
            echo "<script>alert('Service was removed !');</script>";
            
        }else{
            echo "<script>alert('Cannot Delete ! This Service Has Bookings !');</script>";
        }
            
    }else{
            echo "<script>alert('Service Inexistent !');</script>";
    }
    
    echo "<script>window.location.href='services.php'</script>";

?>