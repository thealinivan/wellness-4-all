<style>
.head{
    text-align:center;
    padding:60px 0 30px 0;
    color: #333333;
}

/*MAIN SECTION/

/*Main section-pictures styling*/

.pic {
    position: relative;
    max-width: 100%;
    min-height: 700px;
    max-height: 400px;
    overflow: hidden;
    
}


div > .pct {
    display: inline-block;
    position: absolute;
    min-height: 100%;
    min-width: 100%;
    opacity: 1;
    z-index:-1;
}

/*Main section-on hover styling*/

.pct:hover {
    opacity: 1;
    transition: opacity 0.6s ease;
}

.pc:hover .pct {
    opacity: 0.8;
}

.pc:hover .pg {
    opacity: 1;
    width: 100%;
}

.pc1:hover .pct {
    opacity: 0.8;
}

.pc1:hover .pg {
    opacity: 1;
}


.pc2:hover .pct {
    opacity: 1;
}

.pc2:hover .pg {
    opacity: 1;
}


#pcleft:hover {
    width: 36.66%;
}

#pcleft:hover + #pcmiddle {
    width: 30.00%;
}

#pcmiddle:hover {
    width: 36.66%;
}

#pcmiddle:hover + #pcright {
    width: 30.00%;
}

.pcf {
    width: 10%;
    height: 850px;
    position: relative;
    float: left;
    overflow: hidden;
    margin-left: 0px;
    margin-bottom: 0px;
    opacity: 0.8;

}

.pcf:hover {
    opacity: 1;
    transition: opacity 0.4s ease;
}


.pc {
    width: 33.33%;
    height: 850px;
    max-height: 700px;
    position: relative;
    float: left;
    overflow: hidden;
    margin-left: 0px;
    margin-bottom: 0px;
    transition: .3s ease;
}


.pc1 {
    width: 70%;
    height: 850px;
    max-height: 700px;
    position: relative;
    float: left;
    overflow: hidden;
    margin-left: 0px;
    margin-bottom: 0px;
    transition: .5s ease;
}


.pc2 {
    width: 30%;
    height: 850px;
    max-height: 700px;
    position: relative;
    float: left;
    overflow: hidden;
    margin-left: 0px;
    margin-bottom: 0px;
    transition: .5s ease;
}

.pc:active .pg {


    position: absolute;
    top: 40%;
    left: 50%;
    min-height: 250px;
    transition: height 0.5s ease;

}

.pc:active .pgrDetails {
    display: block;
}

.pc1:active .pg {


    position: absolute;
    top: 40%;
    left: 50%;
    min-height: 300px;
    transition: height 0.5s ease;

}

.pc1:active .pgrDetails {
    display: block;
}


/*Main section-paragraphs styling*/

.pgr {
    color: #d0d0d0;
    padding-top: 10px;
}

#pgrTitle {
    font-size: 120px;
    font-weight: bold;
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: color 0.5s ease;
}

#pgrSubTitle {
    font-size: 40px;
    position: absolute;
    top: 42%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#pgrTitle:hover {

    color: rgba(0, 0, 0, 0.5);
    transition: color 0.5s ease;
}





.pg {

    opacity: 0;
    padding: 5px 20px 5px 20px;
    min-width: 100%;
    min-height: 50px;


    background-color: rgba(0, 0, 0, 0.76);
    font-size: 25px;
    font-weight: bold;

    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    transition: .5s ease;
   

}

#pg1 {
    position: absolute;
    min-width: 100%;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

#pg2 {
    position: absolute;
    min-width: 100%;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.pgrDetails {

    color: #d0d0d0;
    font-weight: 100;
    font-size: 20px;
    margin: 30px;
    display: none;
    transition: .8s ease;
}


/*Main section-buttons styling*/

.btn {
    text-decoration: none;
    color: #d0d0d0;
    font-size: 25px;
    padding: 20px 50px 20px 50px;
    border: solid 2px #d0d0d0;
    border-radius: 4px;
    position: absolute;
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: linear-gradient(rgba(0, 128, 0, 0.1), rgba(56, 26, 5, 0.2));
}

#btnBook {
    position: absolute;
    top: 420%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#btnSupport {
    position: absolute;
    top: 420%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#btnContact {
    position: absolute;
    top: 430px;
    margin-top: 25%;
    margin-left: 0%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0);
}

.head{
    text-align:center;
    padding:100px 0 30px 0;
    color: #333333;
    
}
.dashCT{
    text-align:center;
    padding:20px;
    margin-top: 50px;
    color: #333333;
    width: 100%;
  
}
.artCt{
    display:inline-block;
    padding: 40px 60px 0px 60px;
    width:200px;
    margin-bottom:20px;
}
.info{
    margin:30px 0 0 0;;
    padding: 20px 10px 20px 10px;
    font-size: 18px;
    font-weight:bold;
    font-style:italic;
    text-align:justify;
}
.dashTitle{
    padding-top: 10px;
    padding-bottom:20px;
}
iframe {
    border: none;
    width: 100%;
    height: 700px;
}
.video{
    margin:0;
    width:100%;
}


.submitForm{
      width: 500px;
      text-align:center;
  }
    .formTitle{
        margin-top:50px;
        text-align: center;
        padding: 0px 10px 70px 10px;
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

.map{
    text-align:center;
    padding:50px;
}

</style>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>

<body>

</body>

</html>

<?php
    
    include 'header.php';
    require_once('dbcon.php');
?>

<?php

echo'

<section>
    <div class="pc" id="pcleft">
        <img class="pct" src="http://localhost/seminar/img/equipment.jpg" alt="picture">
        <div class="pg">
            <p class="pgr">High-End Equipment</p>
            <p class="pgrDetails">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi delectus adipisci incidunt accusamus? Sit, facilis, animi! Ratione harum reiciendis, cupiditate cum at commodi dicta sequi, vero nulla quidem consequuntur a!</p>
        </div>

    </div>

    <div class="pc" id="pcmiddle">
        <img class="pct" src="http://localhost/seminar/img/programmes.jpg" alt="picture">
        <div class="pg">
            <p class="pgr">Programmes diversity</p>
            <p class="pgrDetails">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi delectus adipisci incidunt accusamus? Sit, facilis, animi! Ratione harum reiciendis, cupiditate cum at commodi dicta sequi, vero nulla quidem consequuntur a!</p>
        </div>

    </div>

    <div class="pc" id="pcright">
        <img class="pct" src="http://localhost/seminar/img/coach.jpg" alt="picture">
        <div class="pg">
            <p class="pgr">Professional Personnel</p>
            <p class="pgrDetails">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi delectus adipisci incidunt accusamus? Sit, facilis, animi! Ratione harum reiciendis, cupiditate cum at commodi dicta sequi, vero nulla quidem consequuntur a!</p>
        </div>
    </div>
</section>



<div class=dashCt>
    <div class=artCt>
        <h3 class=dashTitle>George M.</h3>
        <img style="border-radius:50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" src="http://localhost/seminar/img/people1.jpg">
        <p class=info>"At commodi delectus adipisci incidunt accusamus? Sit, facilis, animi! Ratione harum reiciendis, cupiditate cum at commodi dicta sequi, vero nulla quidem consequuntur a!"</p>
    </div>

    <div class=artCt>
        <h3 class=dashTitle>Ralph D.</h3>
        <img style="border-radius:50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" src="http://localhost/seminar/img/people2.jpg">
        <p class=info>"At commodi delectus adipisci incidunt accusamus? Sit, facilis, animi! Ratione harum reiciendis, cupiditate cum at commodi dicta sequi, vero nulla quidem consequuntur a!"</p>
    </div>
    
    <div class=artCT>
        <h3 class=dashTitle>Kelly M.</h3>
        <img style="border-radius:50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" src="http://localhost/seminar/img/people3.jpg">
        <p class=info >"At commodi delectus adipisci incidunt accusamus? Sit, facilis, animi! Ratione harum reiciendis, cupiditate cum at commodi dicta sequi, vero nulla quidem consequuntur a!"</p>
    </div>
</div>

<div class="video">
    <iframe id="ytplayer" src="https://www.youtube.com/embed/r6A_27h-pFA"></iframe>
</div>

 
        <form action="" method="post" style="margin-top:50px 0 50px 0; padding: 50px;">
            <h3 class="formTitle" style="width: 200px;">Get in touch</h3>
            <input class="formEl"  type="text" name="name" placeholder="Your Name">
            <input class="formEl"  type="text" name="subject" placeholder="Subject">
            <textarea  class="formEl"  style="margin-top: 50px; height:100px;text-align:top;" type="textarea" name="text" placeholder="Text here.." name="message" rows="10" cols="30" ></textarea>
            <input class="formBtn"  type="submit" value"Send" name="send">
      
        </form>



    <img style="width:100%; max-height:300px;" src="http://localhost/seminar/img/middle.jpg" alt="picture >


    <div class="map">
            <h4 style="width:100%;text-align:center;padding:40px 0px 40px 0px;font-size: 30px;  ">10 Rosebery Ave, London EC1R 5HP, UK</h4>
            <h5 style="width:100%;text-align:center; padding-bottom: 50px;font-size:18px;">Latitude: 51.522772 | Longitude: -0.111647</h5>
            <div id="map" style="width:100%;text-align:center; height:500px; background-color: #fafafa"></div>
        </div>

        <script>
            function initMap() {
                var uluru = {
                    lat: 51.522889,
                    lng: -0.111581
                };
                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 17,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }

        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzq8PqyDXp5hWd8dDsKh9Hw4oiNKKFJXM&callback=initMap">
        </script>

';

?>

<?php

    require_once('dbcon.php');              

    if(isset($_POST['send']))
    {
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $text=$_POST['text'];

        
       $mysqli->query("INSERT INTO contact (feed_name, feed_subject, feed_text) VALUES('$name', '$subject', '$text')");
      
       echo "<script>alert('Message Sent !');</script>";         
    }

?>

<?php include 'footer.php';?>