<style>

.art{
    width: 800px;
    border: 1px solid #c1c1d7;
    margin-top: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    text-align: center;
    overflow: hidden;
}
.artImg{
    position: relative;
    overflow: hidden;
    height: 550px;
    width: 100%;
    border: 1px solid #c1c1d7;
    float: left;
    margin-bottom: 50px;
    z-index:-1;   
}
.container{
    
}
.artTitle{
    padding: 40px 10px 40px 10px;
    font-size: 22px;
    
}
.artDesc{
    padding: 20px 50px 50px 50px;
    font-size: 18px;
   
}
.btm{
    padding-bottom: 50px;
}
.artText{
    margin-bottom: 50px;
    float:left;
    margin-left: 50px; 
    font-size: 20px; 
}
.bookBtn{
    float:center;
    padding: 15px 40px 15px 40px;
    text-decoration:none;
    margin-top: 40px;
    margin-bottom: 40px;
        border-radius: 35px;
        font-size:18px;
      
        background-color: #333333;
        color: white;
        font-weight:bold;
        
        transition: all .2s ease-in-out; 
}
.bookBtn:hover{
    background-color: #0d0d0d;
        color: white; 
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border: 1px solid #black;
}
</style>


<html>
<head>
    <meta charset="UTF-8">
    <title>Activities</title>
</head>
<body>

</body>
</html>

    <?php session_start(); include 'header.php';?>

<?php
    
    require_once('dbcon.php');
    
    //DB -> DOM//
    //get the search word or cliked category
      $word="";
      if(isset($_REQUEST["category"])){
          $word = $_REQUEST['category'];
      }else if(isset($_REQUEST["search"])){
          $word = $_REQUEST["search"];
      }
      
      $capCat = ucfirst($word);
      
    //check for positive result in DB
    if ($result = $mysqli->query("SELECT * FROM services 
                                    WHERE category ='$word' OR 
                                            week_day='$word' OR
                                                name = '$word'")) 
    {

        //populate DOM
        echo '<h2 style="margin-bottom: 50px;margin-top: 50px;text-align:center">'.$capCat.' activities</h2>';
        //fetch result
        while ($row = $result->fetch_assoc()) 
        {
            //get data into variables
            //$img = ?;
            $id = $row['id'];
            $name = $row["name"];
            $description = $row["description"];
            $imgURL = $row['image_url'];
            $word = $row["category"];
            $day = $row["week_day"];
            $time = $row["time"];
            $price = $row["price"];

                echo '
                <article="activities" class="artContainer">
                        <article class="art">
                            <img class="artImg" src="'.$imgURL.'" onerror="IMG">
                            <div class=container>
                                <h2 class="artTitle">'.$name.'</h2>
                                <p class="artDesc" style="text-align:justify;">'.$description.'</p>
                                <div class="btm">     
                                    <p class="artText">| Days: <p class="artText" style="font-weight:bold;">'.$day.' |</p></p>
                                    <p class="artText">| Time: <p class="artText" style="font-weight:bold;">'.substr($time, 0, 5).' |</p></p>                                    
                                    <a href="book.php?service='.$id.'" class="bookBtn" type="Submit" name="book">£'.$price.'</a>
                                
                                </div>    
                            </div>    
                        </article>
                </article>
                ';
        }
        //empty result
        $result->free();
    } 
    
    //CLOSE//
    //cose db connection
    $mysqli->close(); 

?>

<?php include 'footer.php';?>