<html>
<head>
    <meta charset="UTF-8">
    <title>Book</title>
</head>
<body>
     
</body>
</html>

<?php session_start(); include 'header.php';?>

<?php

    require_once('dbcon.php');

    if(isset($_REQUEST["service"]) && isset($_SESSION["id"])){

    
        $serviceID = $_REQUEST['service'];
        $userID = $_SESSION["id"];

        $date=date('Y-m-d');
    
          //insert procedure
        $mysqli->query("INSERT INTO bookings (date, user_ID, service_ID) VALUES ('$date', '$userID', '$serviceID' )");
        
        echo "<script>alert('Booking successful !')</script>";
        echo "<script>window.location.href='mybookings.php'</script>";

    }else{
        echo "<script>alert('Login first');</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
     
?>

<?php include 'footer.php';?>