<style>
    .formTitle{
        text-align: center;
        padding: 70px 10px 70px 10px;
        font-size: 25px;
    }
  
    .submitFrm{
        text-align:center;
        
    }
    .updateForm{
        margin-bottom: 30px;
    }
    input:focus,
    select:focus,
    textarea:focus,
    button:focus {
    outline: none;
    }
    .myInfoEl{
        width: 400px;
        display:block;
        margin-bottom: 10px;
        padding: 12px 30px 12px 30px;
        border-radius: 35px;
        font-size: 15px;
        color: #737373;
        
    }
    .myInfoEl:focus{
        border-color: #737373;
    }

    #btn, #btn1{
        color:white;
        background-color:#ffb366;
        border:none;
        transition: all .2s ease-in-out; 
    }
    #btn:hover, #btn1:hover{
        background-color:#ff9933;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
   
</style>

<html>
<head>
    <meta charset="UTF-8">
    <title>Update Booking</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <?php 
    session_start(); 
    include 'header.php';

    if($_SESSION["email"] == "admin@wellness4all.com"){
            include 'adminNav.php';
        }else{
            include 'myAccountNav.php';
        }

   
    echo '<h3 class="formTitle" >Edit booking</h3>';
    ?>
    
    <?php
        require_once('dbcon.php');

        if(isset($_REQUEST["serviceID"]) && isset($_REQUEST["customerID"])){
            $serviceID = $_REQUEST["serviceID"];
            $customerID = $_REQUEST['customerID'];


            //check for positive result
            if ($result = $mysqli->query("SELECT first_name, last_name, name, week_day, time
                                            FROM users u, services s, bookings b
                                            WHERE b.user_ID = $customerID AND
                                                    b.service_ID = $serviceID AND
                                                    u.id = $customerID AND
                                                    s.id = $serviceID;")) 
            {
                //fetch result
                while ($row = $result->fetch_assoc()) 
                {
                    //get data into variables
                    $fName = $row["first_name"];
                    $lName = $row["last_name"];
                    $service = $row["name"];
                    $day = $row["week_day"];
                    $time = $row["time"];

                    //populate DOM
                    echo '
                    <div class="submitFrm">

                        <form class="updateForm" action="" method="POST">
                            <h3 style="margin-bottom: 40px;">Booking info<h3>
                            <h2 class=myInfoEl style="font-size:25px;" type="text" name="user" value="" placeholder="Customer">'.$fName.' '.$lName.'</h2>
                            <h2 class=myInfoEl style="font-size:25px;" class=myInfoEl  type="text" name="service" value=""placeholder="Activity">'.$service.'</h2>
                            <input class=myInfoEl  type="text" name="day" value="'.$day.'" placeholder="Weekday">
                            <input class=myInfoEl  type="text" name="time" value="'.substr($time, 0, 5).'" placeholder="Time">
                            <input  class=myInfoEl id="btn" type="submit" value="Update Booking" name="update_info">
                        </form>

                    </div>

                    ';
                }
                //empty result
                $result->free();
            } 

        }
    ?>

    <?php
    
    if(isset($_POST['update_info']))
    {
        //$serviceID
        $day = $_POST['day'];
        $time = $_POST['time'];
       
        $sql = "UPDATE services 
                SET week_day = '$day',
                    time = '$time'                              
                WHERE id = '$serviceID' ";

       
        mysqli_query($mysqli, $sql);

       echo "<script>alert('Booking has been updated !');</script>";
       if($_SESSION["email"] == "admin@wellness4all.com"){
       echo "<script>window.location.href='bookings.php'</script>";
       }else{
        echo "<script>window.location.href='mybookings.php'</script>";
       }
    }


     //CLOSE//
        //cose db connection
        $mysqli->close(); 

    ?>

    <?php include 'footer.php';?>
 
 
</body>
</html>