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
        padding: 20px 110px 100px 110px;
    }
</style>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

    <?php session_start(); include 'header.php';?>
    
        <div class="submitForm">


        
        <!––submit form-->
        <!––Data Sanitizing in place converting any script into special caracters -->

        <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h3 class="formTitle">Login</h3>
            <input class="formEl"  id="email" type="text" name="email" placeholder="Email">
            <input class="formEl"  id="password" type="password" name="password" placeholder="Password">
            <input class="formBtn"  type="submit" name="login">
            <a class="bottomLink"href="register.php">Register</a>
        </form>

        </div>


</body>

</html>

<?php

    //reuired php files
    require_once('dbcon.php');           

  
//In case the user is alrady logged in -> straigth to tmy account      
if(isset($_SESSION['email']))
{
    echo "<script>window.location.href='myaccount.php'</script>";
}
else{

    //Login procedure
    if(isset($_POST['login']))
    {
        //Get data into variables
        $email=$_POST['email'];
        $password=$_POST['password'];
        $dec_password=md5($password);     
            //Verify is user exist by running a select query
            if ($result = $mysqli->query("SELECT * FROM users WHERE email='$email' and password='$dec_password'"))
            {         
                $row = mysqli_fetch_array($result);    
            } 
            if($row>0)
            {
                $_SESSION['email']=$_POST['email'];
                $_SESSION['name']=$row['first_name'];
                $_SESSION['id'] = $row['id'];
                
                //Display feedback
                if($email == 'admin@wellness4all.com')
                {
                    echo "<script>window.location.href='admin.php'</script>";
                }
                else{
                    echo "<script>window.location.href='login.php'</script>";
                }  
            }else
            {
                echo "<script>alert('Invalid username or password');</script>"; 
                exit();   
            }
          
        
    }   
}

?>
<?php include 'footer.php';?>