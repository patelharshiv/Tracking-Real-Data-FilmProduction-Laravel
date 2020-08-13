<?php
session_start();
if(isset($_SESSION['uname'])){
  if((time() - $_SESSION['timestamp']) > 900 ){
    header("location:logout.php");
  }
  else{
    $_SESSION['timestamp'] = time();
  }
}
?>
<!DOCTYPE html>
<html><head>
<title>TRACKING REAL DATA FOR FILM PRODUCTION</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
  html{
    scroll-behavior: smooth;
  }
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<style>
   #image{
  pointer-events: auto;
  max-height: 30px;
  max-width: 30px;
}
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

  }
  section{
    position: relative;
    width: 100%;
    height: 100vh;

  }
  section video{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;

  }
  section .navigation{
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translate(-50%);
    z-index: 100;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  section .navigation li{
    list-style: none;
    cursor: pointer;
    margin: 0 10px;
    border-radius: 4px;
    background:#fff;
    padding: 3px 3px 0;
    opacity: 0.7;
    transition: 0.5s;
  }
  section .navigation li img:hover{
     opacity: 1;
  }
  section .navigation li img{
    width:120px;
    transition: 0.5s;

  }
   section .navigation li img:hover{
    width: 200px;

   }
   #image1{
      max-height: 60px;
      max-width: 60px;

   }

</style>


</head>



 <body class="w3-light-grey">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home1" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="analysisnew" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Some Of Our Work</a>
    <a href="aboutusnew" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
    <a href="contactnew" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <?php
    if (!empty(session('work'))) {
       if(session('work') == "productionmanager"){?>
    <a href="releasetrailer" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Release Trailer</a>
    <a href="releaseposter" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Release Poster</a>
     <?php }
    }
    ?>
    <?php
            if(!empty(session('uname'))){?>
            <div class="w3-dropdown-hover">
            <li><img id="image1" src="images/avatar1.png" alt="avatar" class="w3-bar-item  w3-center"></li>
            <div class="w3-dropdown-content w3-bar-block">
                <a  href="profile" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><?php echo session('uname'); ?></a>
                <a href="logout" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
            </div>
        </div> 
         <?php 
      }
      else{
        ?>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
        <?php
      }
      ?> </div>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
  </br>
    <h1 class="w3-xxxlarge"><b>TRACKING REALDATA FOR FILM PRODUCTION</b></h1>
    <h4>Welcome to prediction of <span class="w3-tag">MOVIES</span></h4>
  </header>


<section>
  <!-- Image header -->
  <div class="container">
    <video id="slider" autoplay muted controls>
 
    </video>
    <ul class="navigation">

    </ul>
    
  
</div>
</section>
<script type="text/javascript">
  function videoUrl(hmmmmmm){
    document.getElementById("slider").src = hmmmmmm;
  }
</script>



  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12" id="content">
    
      <!-- Blog entry -->

      
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        
        <div class="w3-container w3-black">

          <h4>ADMIN</h4>
          <p><li>We have introduced our website,"Tracking Real Data for Film Production" is based on live data. Data used here are either taken directly from google or else it has been collected from our own website.</li>
            <li>If you are a production manager and want to take help of our analysis expert, Sign up as the Production Manager and make the payment and we will provide you with our best "Analyst Expert".<a href="Contact/contactnew.php">Contact Us</a>To let us help you...</li></p>
        </div>
      </div>
      <hr>

      <div class="w3-white w3-margin">
        
        <div class="w3-container w3-black">

          <h4>Want some quick look on how well your movie may go???</h4>
          <p><li>We help you to figure out how much you should invest as well as we give you wise advise based on the history data..</li>
            <li>Answer some simple question and take back result and plan with you.</li><li><a href="Feedback/feedbacknew.php">Click Here</a> for a betterment.</li></p>
        </div>
      </div>
      <hr>

      <div class="w3-white w3-margin">
        
        <div class="w3-container w3-black">

          <h4>Advertising With Us</h4>
          <p><li>We may want you to know we are the attraction to different professions of people as well as center of attraction for Common People. We have lot of visitors every day.</li>
            <li>Advertising with us is simple and budget best.</li><li><a href="adv.php">Click Here</a> For Quickly and easily advertising with us.</li></p>
        </div>
      </div>
      <hr>


    <div class="w3-white w3-margin">
        
        <div class="w3-container w3-black">

          <h4>Have a good sense Of Analysis???</h4>
          <p><li>If you are having a good sense of analysis then you can get a chance to become our Analyst Expert</li>
            <li>Simply Submit details asked in the below details.</li><li><a href="AnalystExpert/analystexpertnew.php">Click Here</a> For Quickly and easily advertising with us.</li></p>
        </div>
      </div>
      <hr>

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Popular Posts</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">
            <img src="images/rr2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:60px; margin-right:50%; margin-top:-2%; ">
            <span class="w3-large">Ranveer Singh</span>
            <br>
            <span>Actor</span>
          </li>
          <li class="w3-padding-16">
            <img src="images/ro1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:60px; margin-right:50%; margin-top:-2%; ">
            <span class="w3-large">Rohit Shetty</span>
            <br>
            <span>Director</span>
          </li>
          <li class="w3-padding-16">
            <img src="images/sh1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:60px; margin-right:50%; margin-top:-2%;">
            <span class="w3-large">Shraddha Kapoor</span>
            <br>
            <span>Actress</span>
          </li>
          <li class="w3-padding-16">
            <img src="images/ma1.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:60px; margin-right:50%; margin-top:-2%;">
            <span class="w3-large">Marvel Studios</span>
            <br>
            <span>Production Company</span>
          </li>
        </ul>
      </div>
      <hr>

      <!-- Advertising -->
      <div id="advertise" class="w3-container">

      </div>
      <hr>
      <!-- Tags -->
    </br>
      <div class="w3-white w3-margin" >
        <div class="w3-container w3-padding w3-black">
          <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
          <p>
            <span class="w3-tag w3-black w3-margin-bottom">thriller</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">prediction</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">analysis</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">mystery</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">horror</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">action</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">crime</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Accessories</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">documentry</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">biography</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">animated</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sci-fi</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">adventure</span>
          </p>
        </div>
      </div>
      <hr>


      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Me</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <a href="https://www.facebook.com/search/top?q=harshiv.patel.125/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
           <a href="https://www.instagram.com/patel.harshiv/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
          <i class="fa fa-snapchat w3-hover-opacity" onclick="functionsnap()"></i>
          <a href="https://www.twitter.com/HarshivPatel575"></a><i class="fa fa-twitter w3-hover-opacity"></i>
          <a href="https://www.linkedin.com/in/harshiv-patel-3367071a7/"></a><i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </div>
      <hr>
      
      <!-- Subscribe -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
         <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" id="email123"></p>
      <p><button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" id="subscribe12" onclick="subscribe()">Subscribe</button></p>
        </div>
      </div>

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
 <h1 id="tara1" class="text-center"> Presented By :</h1>
      <h4 id="aa1" class="text-center">LLB</h4>
</footer>

<script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $(document).ready(function(){
    autochecksubscribe();
    checkvideo();
    checkslider();
    checkmovie();
    checkadvertise();
  });
// Toggle between hiding and showing blog replies/comments
//document.getElementById("myBtn").click();
function myFunction(id) {
  console.log(id);
  if (id.className.indexOf("w3-show") == -1) {
    id.className += " w3-show";
  } else { 
    id.className = id.className.replace(" w3-show", "");;
  }
}


function functionsnap(){
   $(location).attr('href','snapcode.php');

}
function autochecksubscribe(){
  var check = "check";
 $.ajax({
    url: "backend4",
    type:"post",
    data:{check:check},
    success:function(data){
      console.log(data);
      if(data == "yes"){
        $('#subscribe12').html("Subscribed");
         var get = document.getElementById('subscribe12');
        get.disabled = "disabled";
      }
    }
  });
}

function subscribe(){
  var email123 = $('#email123').val();

  $.ajax({
    url: "backend4",
    type:"post",
    data:{email123:email123},
    success:function(data){
      console.log(data);
      if(data == "success"){
        $('subscribe12').html("Subscribed");
        var get = document.getElementById('subscribe12');
        get.disabled = "disabled";

      }
    }


  });
}


function checkvideo(){
  var checkvideo = "checkvideo";
  $.ajax({
    url:"backend4",
    type:"post",
    data:{checkvideo:checkvideo},
    success:function(data){
      console.log(data);
      $('.navigation').html(data);
    }

  });

}


function checkslider(){
  var checkslider = "checkslider";
  $.ajax({
    url:"backend4",
    type:"post",
    data:{checkslider:checkslider},
    success:function(data){
      console.log(data);
      $('#slider').html(data);
    }

  });
}

function checkmovie(){
  var checkmovie = "checkmovie";
  $.ajax({
    url:"backend4",
    type:"post",
    data:{checkmovie:checkmovie},
    success:function(data){
      console.log(data);
      $('#content').html(data);
    }

  });
}

function checkadvertise(){
  var checkadvertise = "checkadvertise";
  $.ajax({
    url:"backend4",
    type:"post",
    data:{checkadvertise:checkadvertise},
    success:function(data){
      console.log(data);
      $('#advertise').html(data); 
    }
  });
}


function likeFunction(x,data) {
  var y = data;
  var z = "movie"+data;
  console.log(z);
  $.ajax({
      url: "backend4",
      type:"post",
      data:{movieidx:y},
      success:function(result){
      console.log(result);
      if(result == "success"){
          x.style.fontWeight = "bold";
          x.className = "w3-button w3-red w3-border";
          x.innerHTML = "✓ Liked";
          var countlikes = y;
          $.ajax({
              url:"backend4.php",
              type:"post",
              data:{countlikes:countlikes},
              success:function(result1){
              console.log(result1);
               if(result1 >= 2){
                  var result2 = result1 - 1;  
                  x.style.fontWeight = "bold";
                  x.className = "w3-button w3-red w3-border";
                  x.innerHTML = "✓ Liked <span class='w3-tag w3-white'></span>";
                  $('#movie'+y).html("You and "+ result2 +" other liked this");
                }else if(result1 = 1){
                  x.style.fontWeight = "bold";
                  x.className = "w3-button w3-red w3-border";
                  x.innerHTML = "✓ Liked <span class='w3-tag w3-white'></span>";
                  $('#movie'+y).html("You liked this");
              }
              else{
                  x.style.fontWeight = "bold";
                  x.className = "w3-button w3-red w3-border";
                  x.innerHTML = "✓ Liked <span class='w3-tag w3-white'></span>";
                  $('#movie'+y).html("");
              }
        } 
      });

      }
      else if(result == "yes"){
          x.style.fontWeight = "bold";
          x.innerHTML = "✓ Liked";
          x.className = "w3-button w3-red w3-border";
          var countlikes = y;
          $.ajax({
              url:"backend4",
              type:"post",
              data:{countlikes:countlikes},
              success:function(result1){
              console.log(result1);
              if(result1 >= 2){
                  var result2 = result1 - 1;  
                  x.style.fontWeight = "bold";
                  x.className = "w3-button w3-red w3-border";
                  x.innerHTML = "✓ Liked <span class='w3-tag w3-white'></span>";
                  $('#movie'+y).html("You and "+ result2 +" other liked this");
                  }else if(result1 = 1){
                    x.style.fontWeight = "bold";
                    x.className = "w3-button w3-red w3-border";
                    x.innerHTML = "✓ Liked <span class='w3-tag w3-white'></span>";
                    $('#movie'+y).html("You liked this");
                  }
                  else{
                    x.style.fontWeight = "bold";
                    x.className = "w3-button w3-red w3-border";
                    x.innerHTML = "✓ Liked <span class='w3-tag w3-white'></span>";
                    $('#movie'+y).html("");
                }
        }
      });
      }
      else{
          x.innerHTML='<b><i class="fa fa-thumbs-up"></i> Like</b>';
          x.className = "w3-button w3-white w3-border";
          var countlikes = y;
          $.ajax({
              url:"backend4",
              type:"post",
              data:{countlikes:countlikes},
              success:function(result1){
              console.log(result1);
              if(result1 >= 1){  
                  x.style.fontWeight = "bold";
                  x.className = "w3-button w3-white w3-border";
                  x.innerHTML = "<b><i class='fa fa-thumbs-up'></i> Like</b> <span class='w3-tag w3-white'>"+result1+" people liked this</span>";
                  $('#movie'+y).html(result1+ " people liked this");
              }else{
                  x.style.fontWeight = "bold";
                  x.className = "w3-button w3-white w3-border";
                  x.innerHTML = "<b><i class='fa fa-thumbs-up'></i> Like</b> <span class='w3-tag w3-white'></span>";
                  $('#movie'+y).html("");
              }
          }
      });
      }
    }

  });
}


function usercomment(data){
  var y = data;
  var comment = $('#movies'+y).val();
  console.log(comment);
  console.log(y);
  $.ajax({
              url:"backend4",
              type:"post",
              data:{comment:comment, y:y},
              success:function(result1){
              $('#movie575'+y).html(result1);
              if(result1 == "No review"){


              }
              else{
                countreview(y);
              }
              }
      });

}

function countreview(y){
  console.log(y);
  var abc = y;
  console.log(abc);
  $.ajax({
              url:"backend4 ",
              type:"post",
              data:{abc:abc},
              success:function(result1){
              $('#movie1234'+y).html(result1);
              }
        });

}
</script>

</body>
</html>
