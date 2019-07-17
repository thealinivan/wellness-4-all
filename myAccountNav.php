<?php

    echo '
    <style>
    .formTl{
        text-align: center;
        padding: 10px 40px 10px 10px;
        font-size: 18px;
        border-right: 1px solid #737373;
        text-decoration:none;
        color:#737373;
        font-weight:bold;
    }

    #subNav{
     
        width: 800px;
        text-align:center;
        padding-bottom: 15px;
        border-radius:35px;
        margin-top:10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
    }
    .myAccNav{
        padding: 15px 40px 16px 40px;
        border-radius:35px;
        color: #404040;
        text-decoration: none;
        font-size: 18px;
        
    }
    .myAccNav:hover{
        color: #000000;
        background-color: #e6e6e6;
    }
</style>
    
    
    
    <div class=headerFieldContainer id="subNav">
        <a class="formTl" href="myaccount.php">'.$_SESSION['name'].'\'s Account</a>
        <a class="myAccNav" href="myInfo.php">Personal Info</a>
        <a class="myAccNav" href="mybookings.php">Bookings</a>
        <a class="myAccNav" href="logout.php">logout</a>
    </div>
    '

?>