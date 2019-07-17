<style>
    .formTitle{
        text-align: center;
        padding: 70px 10px 20px 10px;
        font-size: 25px;
    }
    img{
        width: 200px;
        padding-right: 25px;
    }
    .cancelBtn{
        padding: 10px 30px 10px 30px;
        text-decoration:none;
        border-radius: 35px;
        font-size:18px;
        margin-right: 20px;
        background-color: #ff8080;
        color: white;
        font-weight:bold; 
        transition: all .2s ease-in-out; 
    }
    .editBtn{
        padding: 10px 30px 10px 30px;
        text-decoration:none;
        border-radius: 35px;
        font-size:18px;
        margin-right: 20px;
        background-color: #ffb366;
        color: white;
        font-weight:bold;
        transition: all .2s ease-in-out; 
    }
    .cancelBtn:hover{
        background-color: #ff4d4d;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .editBtn:hover{ 
        background-color:#ff9933;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .addBtn{
        padding: 10px 30px 10px 30px;
        text-decoration:none;
        border-radius: 35px;
        font-size:18px;
        background-color: #70db70;
        color: white;
        font-weight:bold;
        transition: all .2s ease-in-out; 
        text-align: center;
    }
    .addBtn:hover{
        background-color: #33cc33;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .myArt{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .myArtText{
        font-size: 18px;
        padding:10px;
        margin: 20px;
    }
    .mB{
        border-spacing: 0 15px;
    }
</style>
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
        echo '<h3 class="formTitle" >My Bookings</h3>';

    
    ?>
    
    <?php
        require_once('dbcon.php');

        echo 
        '
        <br>
        <br>
        <table class="mB"border="0" cellspacing="2" cellpadding="2">';


        $userID = $_SESSION['id'];
//check for positive result

    
        if($result = $mysqli->query("SELECT service_ID, image_url, name, week_day, time, price 
                                        FROM services s, bookings b
                                        WHERE s.id = b.service_ID AND 
                                                b.user_ID = $userID ")  )
        {  
            //fetch result
            while ($row = $result->fetch_assoc()) 
            {
                //get data into variables
              
                $customerID = $userID;
                $serviceID = $row['service_ID'];
                $img = $row['image_url'];;
                $name = $row["name"];
                $day = $row["week_day"];
                $time = $row["time"];
                $price = $row["price"];

               
                //populate DOM
                echo '<tr class="myArt"> 
                        <td><img src="'.$img.'" style="width:150px;height:150px"></td> 
                        <td class="myArtText"><b>   '.$name.'  </b><br>  '.$day.' <br>  Time: '.substr($time, 0, 5).' <br>  Price: £'.$price.' </td> 
                        <td> <a href="adminEditBooking.php?serviceID='.$serviceID.'&customerID='.$customerID.'" class="editBtn" type="Submit" name="edit">Edit</a></td>
                        <td> <a href="cancelBooking.php?serviceID='.$serviceID.'" class="cancelBtn" type="Submit" name="cancel">Cancel</a></td>
                        
                    </tr>';  
                
            }
        }


//CLOSE//
//cose db connection
$mysqli->close(); 

    ?>
    
    

</body>
</html>

