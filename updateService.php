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
    <title>Update Activity</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <?php 
    session_start(); 
    include 'header.php';
    include 'adminNav.php';
       

   
    echo '<h3 class="formTitle" >Update Activity Info</h3>';
    ?>
    
    <?php
        require_once('dbcon.php');

        if(isset($_REQUEST["serviceID"])){
            $serviceID = $_REQUEST["serviceID"];


            //check for positive result
            if ($result = $mysqli->query("SELECT *
                                            FROM services s
                                            WHERE s.id = $serviceID;")) 
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
                    <div class="submitFrm">

                        <form class="updateForm" action="" method="POST">
                        <input class=myInfoEl  type="text" name="name" value="'.$name.'" placeholder="Title">
                        <input class=myInfoEl  type="text" name="description" value="'.$description.'" placeholder="Weekday">
                        <input class=myInfoEl  type="text" name="category" value="'.$category.'" placeholder="Weekday">
                        <input class=myInfoEl  type="text" name="day" value="'.$day.'" placeholder="Weekday">
                            <input class=myInfoEl  type="text" name="time" value="'.substr($time, 0, 5).'" placeholder="Time">
                            <input class=myInfoEl  type="text" name="price" value="'.$price.'" placeholder="Weekday">
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
        $name = $_POST["name"];
        $description = $_POST["description"];
        $category = $_POST["category"];
        $day = $_POST["day"];
        $time = $_POST["time"];
        $price = $_POST["price"];
      

        $sql = "UPDATE services 
                SET name = '$name',
                    category = '$category',
                    week_day = '$day',
                    time = '$time',    
                    price = '$price'                          
                WHERE id = '$id' ";
      
        mysqli_query($mysqli, $sql);
 
       echo "<script>alert('Activity info has been updated !');</script>";
       echo "<script>window.location.href='services.php'</script>";
      
    }


     //CLOSE//
        //cose db connection
        $mysqli->close(); 

    ?>

    <?php include 'footer.php';?>
 
 
</body>
</html>