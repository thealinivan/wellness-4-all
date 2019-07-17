<?php

    echo '
    <style>
    .formTl{
        text-align: center;
        padding: 10px 50px 10px 10px;
        font-size: 18px;
        border-right: 1px solid #737373;
        text-decoration:none;
        color:#737373;
        font-weight:bold;
    }

    #subNav{
        width: 900px;
        text-align:center;
        padding-bottom: 15px;
        border-radius:35px;
        margin-top:10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
    }
    .adminNav{
        padding: 15px 40px 16px 40px;
        border-radius:35px;
        color: #333333;
        text-decoration: none;
        font-size: 18px;
        
    }
    .adminNav:hover{
        color: #000000;
        background-color: #e6e6e6;
    }
</style>
    

   
    <div class=headerFieldContainer id="subNav">
        <a class="formTl" href="admin.php">Admin</a>
        <a class="adminNav" href="customers.php">View Customers</a>
        <a class="adminNav" href="services.php">View Services</a>
        <a class="adminNav" href="bookings.php">View Bookings</a>
        <a class="adminNav" href="logout.php">logout</a>
    </div>
    '

?>