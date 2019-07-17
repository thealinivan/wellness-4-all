<style>
    *{
        margin:0 auto;
    }
    .headerContainer{
        width: 100%;
        height: 100px;
        background-color: #0d0d0d;
    }
    .headerFieldContainer{
        padding:15px;
    }
    
    #myAccount{
        padding: 5px 12px 5px 12px;
        float:right;
        margin-right:50px;;
        margin-top: 18px;
        color: #c1c1d7;
        text-decoration:none;
        border-radius:35px;
        border-top:none;
        transition: all .3s ease-in-out;
    }

    #myAccount:hover{
        box-shadow:0px 0px 10px 16px #333333 inset;
  
    }

    #title{
        padding: 15px 20px 15px 20px;
        margin-left: 5%;
        text-decoration: none;
        font-size: 20px;
        color:#c1c1d7;
        background-color: #1a1a1a;
        transition: all .3s ease-in-out;
     
    }
    #title:hover{
        color: white;
        transition: all .3s ease-in-out;
    }
    .searchForm{
        display:inline;
        margin-left:20%;
        width: 50%;   
        position:fixed; 
        opacity: 0.95;
           
    }
    #inputText{
        border-radius: 30px;
        font-size: 15px;
        color: #737373;
        padding: 5px 100px 5px 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
    }
    
    #searchButton{
        padding: 7px 15px 7px 15px;
        background-color:#0d0d0d;
        color: #c1c1d7;
        text-decoration:none;
        border:none;
        border-top: 1px solid #c1c1d7;
        border-bottom: 1px solid #c1c1d7;
        border-radius: 35px;
        transition: all .3s ease-in-out;
    }
    #searchButton:hover{
        box-shadow:0px 0px 10px 16px inset #333333;

        
    }
    #headerNav{
        margin-top: -5px;
        width: 100%;
        text-align:center;
    }
    .navBtn{
        padding: 5px 40px 10px 40px;
        color: #c1c1d7;
        text-decoration: none;
        font-size: 18px;
        
        
    }
    .navBtn:hover{
        color: white;
        border-bottom: 2px solid white;
        
    }
</style>

<html>
    <div class="headerContainer" id="headerSearch">
        
        <div class=headerFieldContainer>
            <a href="index.php" id="title">Wellness-4-All</a>

            <form class="searchForm" action="activities.php" method="post">
                <input id="inputText" type="text" name="search" placeholder="Search weekday or activity..">
                <input id="searchButton" type="submit" value="Search">
            </form>

           
       
                <a id="myAccount" href="login.php"> 
                     <?php
                    if(isset($_SESSION['name'])){
                 
                        echo $_SESSION['name'];
                        echo '\'s Account';
                        
                    } else{
                        echo 'My Account';
                    }

                    ?>
                </a>
        
        </div>
       
        <div class=headerFieldContainer id="headerNav">
            <a class="navBtn" id="swimming" href="activities.php?category=swimming">Swimming</a>
            <a class="navBtn" id="running" href="activities.php?category=running">Running</a>
            <a class="navBtn" id="tennis" href="activities.php?category=tennis">Tennis</a>
            <a class="navBtn" id="football" href="activities.php?category=football">Football</a>
            <a class="navBtn" id="boxing" href="activities.php?category=boxing">Boxing</a>

        </div>
    </div>
</html>

<script>
// Get the input field
var input = document.getElementById("inputText");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("searchButton").click();
  }
});

</script>

<?php
    
?>
