<style>
    .formTitle{
        text-align: center;
        padding: 70px 10px 70px 10px;
        font-size: 25px;
    }
    td{
        padding: 20px 15px 20px 15px;
        background-color: #fafafa;
        border: 1px solid lightgrey;
        text-align:center;
        border-radius:5px;
    }
    #delBtn{
        text-decoration:none;
        border:none;
        border-radius: 35px;
        font-size:15px;
        padding: 10px 30px 10px 30px;
        color: white;
        font-weight:bold;
        transition: all .2s ease-in-out; 
    }
    #delBtn{
        background-color: #ff4d4d;
    }
</style>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>

</body>
</html>

<?php 
    session_start(); 
    include 'header.php';
    include 'adminNav.php';
    echo '<h3 class="formTitle">All Customers</h3>'
?>

<?php
require_once('dbcon.php');    

//DB -> DOM//
//create html table frame and header
echo 
'
<br>
<br>
<table border="0" cellspacing="2" cellpadding="2"> 
  <tr> 
      <td> <font face="Arial"><b>Registration Date</b></font> </td> 
      <td> <font face="Arial"><b>Name</b></font> </td> 
      <td> <font face="Arial"><b>Phone</b></font> </td> 
      <td> <font face="Arial"><b>Address</b></font> </td>
      <td> <font face="Arial"><b>Email</b></font> </td>
      <td> <font face="Arial"><b>Password (md5 enc)</b></font> </td>
      <td> <font face="Arial"><b>Actions</b></font> </td>
  </tr>';

//check for positive result
if ($result = $mysqli->query("SELECT * FROM users")) 
{
    //fetch result
    while ($row = $result->fetch_assoc()) 
    {
        //get data into variables
        $id = $row['id'];
        $date = $row["date"];
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $phone = $row["phone"];
        $address = $row["address"];
        $email = $row["email"];
        $password = $row["password"];

        //populate DOM
        echo '<tr> 
                <td>'.$date.'</td> 
                <td>'.$first_name. ' '.$last_name.'</td> 
                <td>'.$phone.'</td> 
                <td>'.$address.'</td> 
                <td>'.$email.'</td> 
                <td>'.$password.'</td> 
                <td style="padding:0 15px 0 15px;"><a href="adminDeleteCustomer.php?userID='.$id.'" id="delBtn" Type = "Submit" name="deleteCustomer"><b>Delete</b></a></td>
                
            </tr>';
    }
    //empty result
    $result->free();
} 

//CLOSE//
//cose db connection
$mysqli->close(); 
?>





