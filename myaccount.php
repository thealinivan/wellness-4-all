


<html>

<head>
    <meta charset="UTF-8">
    <title>My Account</title>
</head>

<body>

    <?php 
    session_start(); 
    include 'header.php';
    include 'myAccountNav.php';
    ?>
    
    <?php
    
    require_once('dbcon.php');

    if($_SESSION['email'] == "admin@wellness4all.com")
    {
        echo "<script>window.location.href='admin.php'</script>";
    }else{
        echo "<script>window.location.href='mybookings.php'</script>";
    }

    
      
?>

    <?php include 'footer.php';?>

</body>

</html>


