<style>
.head{
    text-align:center;
    padding:60px 0 30px 0;
    color: #333333;
}
.dashCT{
    text-align:center;
    padding:20px;
    color: #333333;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    width: 1000px;
    border-radius: 100px;
    
}
.artCt{
    display:inline-block;
    padding: 10px 90px 20px 90px;
    width: 145px;
    margin-bottom:20px;
}
.info{
    margin:30px 0 0 0;;
    padding: 20px 10px 20px 10px;
    font-size: 30px;
    font-weight:bold;
}
#todays1, #todays2{
    background-color: #5cd65c;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius:50px;
}
   #todays2{
    background-color: #ff8080;
    
   }
#thism{
    background-color:  #5cd65c;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius:50px;
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
    include 'adminNav.php'
?>

<?php
    require_once('dbcon.php');
 

    if (!isset($_SESSION['email']) OR !($_SESSION['email'] == 'admin@wellness4all.com'))
    {
        echo "<script>window.location.href='login.php'</script>";
    }
   
?>
<?php

    echo'
        <h2 class=head >Customers and Bookings</h2>
        <div class=dashCt>
            <div class=artCt>
                <h3 class=dashTitle>Total Customers</h3>
                <p class=info>213</p>
            </div>
        
            <div class=artCt>
                <h3 class=dashTitle>Total Bookings</h3>
                <p class=info>433</p>
            </div>
            
            <div class=artCT>
                <h3 class=dashTitle>Todays Bookings</h3>
                <p class=info id="todays1">23</p>
            </div>
        </div>

        <h2 class=head >Income</h2>
        <div class=dashCt>

            <div class=artCT>
                <h3 class=dashTitle>Total Income</h3>
                <p class=info>£34,543.54</p>
            </div>

            <div class=artCT>
                <h3 class=dashTitle>This month</h3>
                <p class=info id="thism">£4,054.32</p>
            </div>

            <div class=artCT>
                <h3 class=dashTitle>Today</h3>
                <p class=info id="todays2">£232.78</p>
            </div>

        </div>

        <h2 class=head >Products</h2>
        <div class=dashCt>
            <div style = "width: 200px;height: 120px;" class=artCT>
                <h3 class=dashTitle>Total Number of products</h3>
                <p style="font-size:20px;" class=info>23</p>
            </div>

            <div style = "width: 200px;height: 120px;" class=artCT>
                <h3 class=dashTitle>Best seller (BS)</h3>
                <p style="font-size:20px; font-style: italic;" class=info>Name of the best seller</p>
            </div>

            <div style = "width: 200px;height: 120px;" class=artCT>
                <h3 class=dashTitle>BS previous month</h3>
                <p  style="font-size:20px; font-style: italic;" class=info>Name of the best seller</p>
            </div>

            <div style = "width: 200px;height: 120px;" class=artCT>
                <h3 class=dashTitle>BS this month</h3>
                <p  style="font-size:20px; font-style: italic;"  class=info>Name of the best seller</p>
            </div>
        </div>
        
    ';

?>
<?php include 'footer.php';?>