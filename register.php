<style>
    .submitForm{
        width: 270px;
    }
    .formTitle{
        text-align: center;
        padding: 70px 10px 70px 10px;
        font-size: 30px;
    }
    input:focus,
    select:focus,
    textarea:focus,
    button:focus {
        outline: none;
    }
    .formEl{
        display:block;
        margin-bottom: 10px;
        padding: 12px 70px 12px 15px;
        border-radius: 35px;
        font-size: 15px;
        color: #737373;
    }
    .formEl:focus{
        border-color: #737373;
    }
    .formBtn{
        display:block;
        margin-bottom: 10px;
        margin-top: 60px;
        padding: 12px 40px 12px 40px;
        border-radius: 35px;
        font-size: 15px;
        background-color: white;
        color: #1a1a1a; 
        font-weight:bold;
        transition: all .2s ease-in-out; 
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .formBtn:hover{
        background-color: #0d0d0d;
        color: white;
        border-color: #737373;
        
        
    }
    .bottomLink{
        display:block;
        padding: 20px 115px 100px 115px;
    }
    </style>
<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body>

    <?php session_start(); include 'header.php';?>



    <div class="submitForm">
        <!––submit form-->
        <!––Registration Form ->

        <!––The action enchances protection against SQL injection by converting special characters into HTML ->
        <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h3 class="formTitle">Sign Up</h3>
            <h4 style="margin-bottom:20px;">Personal Information</h4>
           <input class="formEl" type="text" name="first_name" placeholder="First Name">
           <input class="formEl" type="text" name="last_name" placeholder="Last Name">
           <input class="formEl" type="text" name="phone" placeholder="Phone">
           <input class="formEl" type="text" name="address" placeholder="Address">
           <h4 style="margin-bottom:20px; margin-top:40px;">Login Details</h4>
           <input class="formEl" type="text" name="email" placeholder="Email">
           <input class="formEl" type="password" name="password" placeholder="Password">
           <input class="formBtn" type="submit" name="register">
           <a class="bottomLink"href="login.php">Login</a>
        </form>
        </div>

    
</body>

</html>

<?php

    // include database connection
    include('dbcon.php');

    if(isset($_POST['register']))
    {
        //DOM -> DB//
        //input values into variables
        $date=date('Y-m-d');
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $enc_password = md5($password);
       

        
    

        //check if this email is already assinged to an account
        if(emailExists($email, $mysqli)){
            //feedback
            echo "<script>alert('Email address already associated with an account! Please insert a different email !');</script>";
        } else {
                //insert procedure
            $mysqli->query("INSERT INTO users (date, first_name, last_name, phone, address, email, password)
             VALUES ('$date', '$first_name', '$last_name', '$phone', '$address', '$email', '$enc_password')");
            //feedback
            echo "<script>alert('Registration successful !');</script>"; 
            //echo "<script>window.location.href='login.php'</script>";
        }

    }

    function emailExists($_uEmail, $_mysqli)
    {
        //$sq = mysqli_connect("localhost", "root", "", "wellness4all");
        $bolEmailExists = false;
        if ($result = $_mysqli->query("SELECT * FROM users WHERE email='$_uEmail'"))
        {         
            
            $row = mysqli_fetch_array($result); 
            if($row>0)
            {
                $bolEmailExists = true;
            }   
        } else{

        }
        return $bolEmailExists;
    }


            //CLOSE//
            //cose db connection
            $mysqli->close();
?>
<?php include 'footer.php';?>
 
    


 
    