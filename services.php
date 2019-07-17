<style>
    .formTitle{
        text-align: center;
        padding: 70px 10px 70px 10px;
        font-size: 25px;
    }
    .serv{
        width: 1000px;
        border-spacing: 0 20px;
    }
    .addBtn{background-color: #5cd65c;}
    .cancelBtn{background-color: #ff8080;}
    .editBtn{background-color: #ffb366;}

    .addBtn, .editBtn, .cancelBtn{
        padding: 10px 30px 10px 30px;
        text-decoration:none;
        border-radius: 35px;
        font-size:18px;
        margin: 10px 30px 10px 30px;
        color: white;
        font-weight:bold;
        transition: all .2s ease-in-out; 
    }
    .addBtn:hover, .editBtn:hover, .cancelBtn:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        
    }
    .addBtn:hover{background-color:#2eb82e;}
    .editBtn:hover{background-color:#ff9933;}
    .cancelBtn:hover{background-color: #ff4d4d;}

    .popupAdd, .popupCancel{
        text-decoration:none;
        padding: 5px 20px 5px 20px;
        margin-top:0px;
        border-radius:15px;
        color:white;
        border:none;
       
    }
    .popupAdd{
        background-color: #5cd65c;
    }
    .popupCancel{
        background-color: #ff8080;
    }
    .popupAdd:hover, .popupCancel:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .popupAdd:hover{
        background-color:#2eb82e;
    }
    .popupCancel:hover{
        background-color: #ff4d4d;
    }
</style>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>

<body>

    <?php 
    session_start(); 
    include 'header.php';
    include 'adminNav.php';
    echo '<h3 class="formTitle" >All Services</h3>';
    require_once('dbcon.php');    

//DB -> DOM//
//create html table frame and header
echo 
'
<br>
<br>
<table class="serv"border="0" cellspacing="2" cellpadding="2"> 
  <tr style="text-align:center;"> 
      <td> <font face="Arial"><b>Service</b></font> </td> 
      <td> <font face="Arial"><b>Description</b></font> </td> 
      <td> <font face="Arial"><b>Details</b></font> </td> 
      <td> <font face="Arial"><b>Actions</b></font> </td>
  </tr>';

//check for positive result
if ($result = $mysqli->query("SELECT * FROM services")) 
{
    //fetch result
    while ($row = $result->fetch_assoc()) 
    {
        //get data into variables
        $id = $row['id'];
        $img = $row['image_url'];;
        $name = $row["name"];
        $description = $row["description"];
        $category = $row["category"];
        $day = $row["week_day"];
        $time = $row["time"];
        $price = $row["price"];

        //populate DOM
        echo '
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <tr style="padding: 40px 0 40px 0; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                <td style="text-align:center;padding:20px 10px 0 10px;"><b style="font-size: 20px;">'.$name.'</b><br><br><img src="'.$img.'" style="width:200px;height:200px;padding:10px 10px 10px 0;"></td> 
                <td style="text-align:justify; padding:20px 50px 20px 20px; width:350px; float:left;">'.$description.'</td> 
                <td style:"padding-left: 0px;; width: 250px;"><i>Type:</i> '.$category.'<br><i>Day:</i> '.$day.'<br><i>Time:</i> '.substr($time, 0, 5).'<br><i>Price:</i> £'.$price.'</td> 
                <td>    

                    <div id="formPopup'.$id.'" style="padding: 5px 0 5px 10px; display:none;">
                        <form style="text-align:center;"action="" class="form-container" method="POST">
                        <input id="userEmail'.$id.'" style="outline:none;margin-bottom:10px;height:30px; border-radius: 20px; padding-left:5px;"type="text" placeholder="Customer Email.." name="bookEmail" required>
                        <input style="display:none;" value="'.$id.'" name="sID">
                        <button style="display: inline; text-align:center; margin-right:10px;" class="popupAdd" id="popupAdd"  type="submit" name="completeBooking">Book</a>
                        <button style="display: inline; text-align:center;" class="popupCancel" id="popupCancel'.$id.'" type="Submit" name="cancel">Close</button>
                
                        </form> 
                    </div>
                
                    
                
                    <a style="display: block; text-align:center;" class="addBtn" id="addBtn'.$id.'" type="Submit" name="add">Book</a>
                    <a style="display: block; text-align:center;"href="updateService.php?serviceID='.$id.'" class="editBtn" type="Submit" name="edit">Update</a>
                    <a style="display: block; text-align:center;" href="deleteService.php?serviceid='.$id.'" class="cancelBtn" type="Submit" name="cancel">Delete</a>
                </td>
            </tr>
            
            

            <script>
                            $(document).ready(function(){

                                $("#addBtn'.$id.'").click(function(){
                                    $("#formPopup'.$id.'").css({"display":"block"});
                                    $("#addBtn'.$id.'").css({"display":"none"});
                                });

                                $("#popupCancel'.$id.'").click(function(){
                                    $("#formPopup'.$id.'").css({"display":"none"});
                                    $("#addBtn'.$id.'").css({"display":"block"});
                                });


         
                            });
  
            </script>
            
            
            ';   


            
    }

    //empty result
    $result->free();
} 

?>


<?php

    

    if(isset($_POST["completeBooking"]))
    {
        $serviceID = $_POST["sID"];
        $userEmail = $_POST["bookEmail"];
        
        $date=date('Y-m-d');

        if ($result = $mysqli->query("SELECT * FROM users WHERE email='$userEmail'"))
        {
         
            $row = mysqli_fetch_array($result);           
        } 

        $userID = $row["id"];

        $mysqli->query("INSERT INTO bookings (date, user_ID, service_ID) VALUES('$date','$userID','$serviceID')");
        
        echo "<script>alert('Booking successfull !');</script>";
       
    }

    
//CLOSE//
//cose db connection
$mysqli->close(); 

?>


</body>
</html>

