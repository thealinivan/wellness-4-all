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
    <title>My Account</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <?php 
    session_start(); 
    include 'header.php';
    include 'myAccountNav.php';
    echo '<h3 class="formTitle" >Account Information</h3>';
    ?>
    
    <?php
        require_once('dbcon.php');

        //check for positive result
        if ($result = $mysqli->query("SELECT * FROM users WHERE id=$_SESSION[id];")) 
        {
            //fetch result
            while ($row = $result->fetch_assoc()) 
            {
                //get data into variables
                $date = $row["date"];
                $first_name = $row["first_name"];
                $last_name = $row["last_name"];
                $phone = $row["phone"];
                $address = $row["address"];
                $email = $row["email"];
                $password = $row["password"];

                //populate DOM
                echo '
                <div class="submitFrm">

                    <form class="updateForm" action="" method="POST">
                        <h3 style="margin-bottom: 10px;">Personal Info<h3>
                        <input class=myInfoEl  type="text" name="fname" value="'.$first_name.'" placeholder="First Name">
                        <input class=myInfoEl  type="text" name="lname" value="'.$last_name.'"placeholder="Last Name">
                        <input class=myInfoEl  type="text" name="phone" value="'.$phone.'" placeholder="Phone">
                        <input class=myInfoEl  type="text" name="address" value="'.$address.'" placeholder="Address">
                        <input class=myInfoEl  type="text" name="email" value="'.$email.'" placeholder="Email">
                        <input  class=myInfoEl id="btn" type="submit" value="Update Info" name="update_info">
                    </form>

                    <br><br>

                    <form class="updateForm" action="" method="POST">
                         <h3 style="margin-bottom: 10px;">Security<h3>
                        <input class=myInfoEl class="formEl" id="oldp" type="password" name="old_pass" placeholder="Old Password...">
                        <br>
                        <input class=myInfoEl type="password" id="newp"name="new_pass" placeholder="New Password...">
                        <input class=myInfoEl type="password" id="confnewp" name="conf_new_pass" placeholder="Confirm New Password...">
                        <input class=myInfoEl id="btn1" type="submit" value="Update Password" name="updatepass" style="text-align:center;">
                    </form>

                </div>

                ';
            }
            //empty result
            $result->free();
        } 

       
    ?>

    <?php
    
    if(isset($_POST['update_info']))
    {
        $uID = $_SESSION['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
       
        $sql = "UPDATE users SET first_name = '$fname',
                                        last_name = '$lname',
                                        phone = '$phone',
                                        address = '$address',
                                        email = '$email'
                             WHERE id = $uID ";

        mysqli_query($mysqli, $sql);

       echo "<script>alert('You Info Was Updated !');</script>";
       echo "<script>window.location.href='myInfo.php'</script>";

    }
    
    
    if(isset($_POST['updatepass']))
    {

        $old = $_POST['old_pass'];
        $old_enc = md5($old);
        
        $new = $_POST['new_pass'];
        $new_enc = md5($new);

        $conf_new = $_POST['conf_new_pass'];


        if(passwordMatchConfirmation($old, $new) && passwordMatchDatabase($old_enc))
        {
            updatePasswordInDatabase($new_enc);
        }
        
    }


//check if new password match with the confirmation
function passwordMatchConfirmation($old, $new)
{    
    $PMCval = true;
    if($old !== $new) 
    {
     echo "<script>
     alert('New Password don't match !');
     document.getElementById('newp').setText('');
     $('#confnewp').text('');
     window.location.href='myInfo.php';
     </script>";
     $PMCval = false;
    }
     return $PMCval;
}

//check if old password exists using session id / SQL
function passwordMatchDatabase($old_enc)
{
    $PMDBval = false;
    if ($result = $mysqli->query("SELECT * FROM users WHERE password='$old_enc'"))
    {         
        $row = mysqli_fetch_array($result); 
        if($row>0)
        {
            $PMCval = true;
        }   
    } 
    return $PMDBval;
}

function updatePasswordInDatabase($new_enc)
{
    $sql = "UPDATE users 
            SET password = '$new_enc'
            WHERE id = '$uID'";

    mysqli_query($mysqli, $sql);

    echo "<script>alert('Your Password Was Updated !');</script>";
    echo "<script>window.location.href='myInfo.php'</script>";
    
}


     //CLOSE//
        //cose db connection
        $mysqli->close(); 

    ?>

    <?php include 'footer.php';?>
 
</body>
</html>

