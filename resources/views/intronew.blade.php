<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		#red{
			background-image: url(images/op4.jpeg);
			 background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: relative;
  background-size: cover;
  z-index: 2;
  position: relative;
  display: block;
  visibility: visible;
		}
.wrapper {

  display: flex;
  align-items: center;
  justify-content: center;
  
 width: 100vw;
  height: 100vh;
}
@font-face {
  font-family: neon;
  src: url(Library3am.otf);
}
.neon-wrapper {
  box-shadow:
  0 0 0.1vw  0.4vw #fff7f7,   
  0 0 0.4vw  0.6vw #e97272, 
  0 0   4vw  0.4vw #e50b0b,
  inset 0 0 1.5vw  0.4vw #e50b0b,
  inset 0 0 0.4vw  0.2vw #e97272,
  inset 0 0 0.5vw  0.2vw #fff7f7;
  border-radius: .2rem;
}
.neon-text {
  font-family:neon;
  font-size: 60px;
  color: #ffd8d8;
  padding: 0 3.5rem 0 3.5rem;
  text-shadow: 
  .1vw 0vw .25vw #ffd8d8, .2vw 0vw .25vw #ffd8d8, .4vw 0vw .25vw #ffd8d8, 
  .1vw 0vw   0vw #f25757, .2vw 0vw   0vw #f25757, .4vw 0vw   0vw #f25757,
  .1vw 0vw  .1vw #f25757, .2vw 0vw  .1vw #f25757, .4vw 0vw  .1vw #f25757,
  .1vw 0vw   2vw #f25757, .2vw 0vw   2vw #f25757, .4vw 0vw   2vw #f25757, 
  .1vw 0vw   1vw #e50b0b, .2vw 0vw   1vw #e50b0b, .4vw 0vw   5vw #e50b0b, 
  .1vw 0vw   5vw #e50b0b, .2vw 0vw  20vw #e50b0b, .4vw 0vw  10vw #e50b0b,
  .1vw 0vw  10vw #e50b0b, .2vw 0vw  30vw #e50b0b, .4vw 0vw  10vw #e50b0b;
}
 #glow {
        animation: neon1 linear infinite 2s;
        will-change: opacity;
    }

    #blink {
        animation: blink linear infinite 2s;
    }


    @keyframes neon1 {
        20% {
            opacity: 1;
        }
        80% {
            opacity: 0.6;
        }
    }


    @keyframes blink {
        70% {
            opacity: 1;
        }
        79% {
            opacity: 0;
        }
        81% {
            opacity: 1;
        }
        82% {
            opacity: 0;
        }
        83% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        92.5% {
            opacity: 1;
        }
    }

 #container {
      height: 100vh;
        background: #112 url(https://cdn.pixabay.com/photo/2017/02/12/12/42/wall-2059909_960_720.png) center no-repeat;
        background-size: cover;
         font-family: Comic Sans MS;
         margin: 0;
            padding: 0;
           z-index: 1;
    }

  #text,#shadow {
        position: absolute;
        font-size: 7em;
        letter-spacing: 20px;
        font-family: Bad Script;
        color: #fff;
    }

    #text {
        color: #333
    }

    #shadow {
        text-shadow: 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 70px #228DFF, 0 0 80px #228DFF, 0 0 100px #228DFF, 0 0 150px #228DFF;
    }

   #glow {
        animation: neon1 linear infinite 2s;
        will-change: opacity;
    }

    #blink {
        animation: blink linear infinite 2s;
    }


    @keyframes neon1 {
        20% {
            opacity: 1;
        }
        80% {
            opacity: 0.6;
        }
    }


    @keyframes blink {
        70% {
            opacity: 1;
        }
        79% {
            opacity: 0;
        }
        81% {
            opacity: 1;
        }
        82% {
            opacity: 0;
        }
        83% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        92.5% {
            opacity: 1;
        }
    }
	</style>
</head>
<body>

<div id="red">

	<div class="wrapper">
	<div class="neon-wrapper">
     <div id="glow" class="neon-text">Tracking realdata <br> <center> for <br>  <span id="blink">film Production</span></div>
</div>
</div>
</div>

  <div id="container">
  
    <!-- to increase performance, we change the opacity of shadow instead of changing the text-shadow directly -->
  
    
    <p id="text"></p>
    
    <p id="shadow">
        <span id="glow"  style=" font-family:Comic Sans MS ;margin-left: 550px; margin-bottom: 200px; letter-spacing: 1px;">LL</span>
        <span id="blink" style="margin-left: -40px;  font-family:Comic Sans MS ;">B </span> 
        <br>
        <span id="glow" style="font-size: 40px; margin-left: 500px; letter-spacing: 1px; margin-top: -100px;"> Lord'<b>S</b> of Last</span>
        <span id="blink" style="font-size: 40px; margin-left:-35px ; letter-spacing: 1px;" > Bench </span>
    </p>
  </div>
<script type="text/javascript">
  $(document).ready(function(){
    var myVar = setTimeout(slideup, 3000);
  });
 
 function slideup(){
    $("#red").slideUp(3000);
    var myVar = setTimeout(divertpage, 4000);
 }

 function divertpage(){
    var checklogin = "checklogin";
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        $.ajax({
              url: 'checkanswered',
              type: 'POST',
              data: {checkanswered:checklogin},
              success: function(data){
              console.log(data);
              if(data == "guest"){
                $(location).attr('href','personalnew');
              }
              else if(data == "productionmanager"){
                $(location).attr('href','home1');
                
              }
              else{
                   if(data == "yes"){
                      $(location).attr('href','home1');
                    }
                    else{
                      $(location).attr('href','personalnew');
                    }
              }

            }
          
        });
 }


</script>
</body>
</html>