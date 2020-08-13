<!DOCTYPE html>
<html lang="en">
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<!-- jQuery library -->
 

<!-- Latest compiled JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 <style>
 html{
    scroll-behavior: smooth;
  }
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

  }
body {font-family: "Open Sans";
}
h1,h2,h3,h4,h5 {
  font-family: "Oswald";
}
    .container{
      display-width:-90%;
      display-height: -90%;
      margin-top: 2%;
      
    }
    #mySidebar{
      display: none;
    }
    #myOverlay{
      display: none;
    }
     #kartikaryan{
      visibility: hidden;
      display: none;
    }
    #ayushmannkhurrana{
      visibility: hidden;
      display: none;
    }
    #malharthakar{
      visibility: hidden;
      display: none;
    }
    #salmankhan{
      visibility: hidden;
      display: none;
    }
    #vindiesel{
      visibility: hidden;
      display: none;
    }
    #aliabhatt{
      visibility: hidden;
      display: none;
    }
    #scarlettjohansson{
      visibility: hidden;
      display: none;
    }
    #anushkashetty{
      visibility: hidden;
      display: none;
    }
    #deepikapadukone{
      visibility: hidden;
      display: none;
    }
    #shraddhakapoor{
      visibility: hidden;
      display: none;
    }
    #justinlin{
      visibility: hidden;
      display: none;
    }
    #karanjohar{
      visibility: hidden;
      display: none;
    }
    #rajkumarhirani{
      visibility: hidden;
      display: none;
    }
    #rohitshetty{
      visibility: hidden;
      display: none;
    }
    #sanjayleelabhansaali{
      visibility: hidden;
      display: none;
    }
   div.ridge {
    border-style: ridge;
  }
     #image1{
      max-height: 60px;
      max-width: 60px;

   }
</style>
<body class="w3-light-BLA">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">
  <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32">CLOSE</a>

   <div class="w3-dropdown-hover">
    <button  class="w3-bar-item w3-button w3-center w3-padding-16">ACTOR</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <li class="w3-bar-item w3-button" onclick="ayushmannkhurrana()"> Ayushmann Khurrana</li>
      <li class="w3-bar-item w3-button" onclick="kartikaryan()">Kartik Aryan </li>
      <li class="w3-bar-item w3-button" onclick="malharthakar()">Malhar Thakar </li>
      <li class="w3-bar-item w3-button" onclick="salmankhan()">Salman khan  </li>
      <li class="w3-bar-item w3-button" onclick="vindiesel()">Vin Diesel </li>
    </div>
  </div> 

<div class="w3-dropdown-hover">
    <button  class="w3-bar-item w3-button w3-center w3-padding-16">ACTRESS</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <li class="w3-bar-item w3-button" onclick="aliabhatt()">Alia Bhatt </li>
      <li class="w3-bar-item w3-button" onclick="anushkashetty()">Anushka Shetty </li>
      <li class="w3-bar-item w3-button" onclick="deepikapadukone()">Deepika Padukone</li>
      <li class="w3-bar-item w3-button" onclick="scarlettjohansson()">Scarlett Johansson </li>
      <li class="w3-bar-item w3-button" onclick="shraddhakapoor()">Shraddha Kapoor </li>
    </div>
  </div> 

<div class="w3-dropdown-hover">
    <button  class="w3-bar-item w3-button w3-center w3-padding-16">DIRECTOR</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <li class="w3-bar-item w3-button" onclick="justinlin()">Justin Lin </li>
      <li class="w3-bar-item w3-button" onclick="karanjohar()">Karan Johar</li>
      <li class="w3-bar-item w3-button" onclick="rajkumarhirani()">Rajkumar Hirani</li>
      <li class="w3-bar-item w3-button" onclick="rohitshetty()">Rohit Shetty </li>
      <li class="w3-bar-item w3-button" onclick="sanjayleelabhansaali()">Sanjay Leela Bhansaali </li>
    </div>
  </div> 

  
 
</nav>

<!-- Top menu on small screens -->
<header class="w3-container-fluid w3-top w3-white w3- w3-padding-15">
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
        <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
        <?php
      }
      ?>


  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()" style="margin-right: -0.2%;">☰</a>
</div>
</div>

</header>

<!-- Overlay effect when opening sidebar on small screens -->

  <!-- Modal for full size images on click-->
 
 <header class="w3-container w3-center w3-padding-48 w3-white" >
    <h1 class="w3-xxxlarge" style="font-family:oswald;"><b>TRACKING REALDATA FOR FILM PRODUCTION</b></h1>
    <h4>Welcome to prediction of <span class="w3-tag">MOVIES</span></h4>
</header>




     <div class="container">


  <div id="kartikaryan"  style="width:1000px; height:500px; margin-left: 7%; ">

  <canvas id="myChart">
  
  </canvas>
</br>
      <div class="ridge">
        
        <img src="images/kr1.jpg" style="width:225px; height: 266px; margin-top: 0%;">
        <div style="margin-left: 23%; margin-top: -26.9%;">
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Kartik Aryan</a></b></br> <small style="font-size: 19px;"> Actor</small> </h5> 
          <hr>
          <p  style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Aaryan went on to play the romantic interest of the lead female characters in Akaash Vani (2013) and Kaanchi: The Unbreakable (2014), but these films failed to propel his career forward. He subsequently collaborated with Ranjan and Bharucha in two more buddy films, Pyaar Ka Punchnama 2 (2015) and Sonu Ke Titu Ki Sweety (2018), both of which were commercially successful but received criticism for their misogynistic themes. The latter proved to be a breakthrough for Aaryan, and he followed it by starring in the 2019 romantic comedies Luka Chuppi and Pati Patni Aur Woh.
          </p> 
          
        </div>
      
      </div>
    
    </div>


  <div id="ayushmannkhurrana"  style="width:1000px; height:500px; margin-left: 6%; ">
  <canvas id="myChart1"></canvas>
  
    </br>
      <div class="ridge">
        
        <img src="images/ay.jpg" style="width:225px; height: 266px; margin-top: 0%;">
        <div style="margin-left: 23%; margin-top: -26.9%;">
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Ayushmann Khurrana</a></b></br> <small style="font-size: 19px;">Actor</small> </h5> 
          <hr>
          <p  style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Khurrana won the second season of reality television show MTV Roadies in 2004 and ventured into an anchoring career. He made his film debut in 2012 with the romantic comedy Vicky Donor in which his performance as a sperm donor earned him the Filmfare Award for Best Male Debut. Khurrana went on to establish himself with the comedies Bareilly Ki Barfi, Shubh Mangal Saavdhan,Badhaai Ho, Dream Girl, and Bala;the thriller Andhadhun.Khurrana's performances as a blind pianist in Andhadhun and an honest cop he also won the National Film Award for Best Actor for the former.
          </p> 
          
        </div>
      
      </div>
    
    </div>


  <div id="malharthakar" style="width:1000px; height:500px; margin-left: 6%; ">
      <canvas id="myChart2"></canvas>
      
   </br>
      <div class="ridge">
        
        <img src="images/mt.jpg" style="width:225px; height: 266px; margin-top: 0%;">
        <div style="margin-left: 23%; margin-top: -26.9%;">
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Malhar Thakar</a></b></br> <small style="font-size: 19px;">Actor</small> </h5> 
          <hr>
          <p  style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Malhar Thakar is an Indian actor who primarily works in the Gujarati film industry and theatre. After nine years in theatre, he eventually broke into film roles.His debut film as the lead role was Chhello Divas (2015) which was commercially successful. His Love Ni Bhavai (2017) achieved critical and commercial success and ran for more than 100 days in theatres. he eventually broke into film roles.His debut film as the lead role was Chhello Divas (2015) which was commercially successful. His Love Ni Bhavai (2017) achieved critical and commercial success and ran for more than 100 days in theatres.
          </p> 
          
        </div>
      
      </div>
    
    </div>


  <div id="salmankhan" style="width:1000px; height:500px; margin-left: 6%; ">
  <canvas id="myChart3"></canvas>
   </br>
      <div class="ridge">
        
        <img src="images/sl.jpg" style="width:225px; height: 266px; margin-top: 0%;">
        <div style="margin-left: 23%; margin-top: -26.9%;">
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Salman Khan</a></b></br> <small style="font-size: 19px;">Actor</small> </h5> 
          <hr>
          <p  style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">The eldest son of screenwriter Salim Khan, followed by a leading role in Maine Pyar Kiya. Khan continued in Bollywood in the 1990s with roles in several productions, including the romantic drama Hum Aapke Hain Koun..!, the action thriller Karan Arjun, and the family drama Hum Saath-Saath Hain. After a brief period of decline in the 2000s, Khan achieved greater stardom in the 2010s by playing the lead role in successful action films like Dabangg, Ready,Ek Tha Tiger ,Kick Sultan and Tiger Zinda Hai.Forbes included him in their 2015 list of Top-Paid 100 Celebrity Entertainers in world;</p> 
          
        </div>
      
      </div>
    
    </div>


  <div id="vindiesel" style="width:1000px; height:500px; margin-left: 6%;">
  <canvas id="myChart4"></canvas>
</br>
   <div class="ridge">
        
        <img src="images/vd.jpg" style="width:225px; height: 266px; margin-top: 0%;">
        <div style="margin-left: 23%; margin-top: -26.9%;">
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Vin Diesel</a></b></br> <small style="font-size: 19px;">Actor</small> </h5> 
          <hr>
          <p  style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Diesel reprised his role as Dominic Toretto in installments five through eight of The Fast and the Furious franchise, Fast Five (2011), Fast & Furious 6 (2013), Furious 7 (2015), and The Fate of the Furious (2017).He reprised his role as Riddick in the third film of The Chronicles of Riddick series, simply titled Riddick (2013). In August 2013, Diesel received a star on the Hollywood Walk of Fame.[citation needed] He voiced Groot in the 2014 Marvel Cinematic Universe film Guardians of the Galaxy.In 2016, Diesel appeared as a supporting character in Ang Lee's war drama Billy Lynn's Long Halftime Walk.</p> 
          
        </div>
      
      </div>
    
    </div>


<div id="aliabhatt" style="width:1000px; height:500px; margin-left: 6%;">
  <canvas id="myChart5"></canvas>
  </br>
   <div class="ridge">
        
        <img src="images/alia1.jpg" style="width:227px; height: 266px; margin-top: 0%;">
        <div style="margin-left: 23%; margin-top: -26.9%;">
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Alia Bhatt</a></b></br> <small style="font-size: 19px;">Actress</small> </h5> 
          <hr>
          <p  style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Bhatt played her first leading role in Karan Johar's teen drama Student of the Year.after including the next movie and added drama , romances 2 States, Humpty Sharma Ki Dulhania, and Badrinath Ki Dulhania and the coming-of-age drama Dear Zindagi. Bhatt won the Filmfare Critics Award for Best Actress for playing a kidnapping victim in the road drama Highway, and three Best Actress awards at the ceremony for playing a Bihari migrant in the crime drama Udta Punjab,a spy in the thriller Raazi and the volatile girlfriend of an aspiring rapper in the musical drama Gully Boy.</p> 
          
        </div>
      
      </div>
    
    </div>


  <div id="scarlettjohansson" style="width:1000px; height:500px; margin-left: 6%;">
  <canvas id="myChart6"></canvas>
  </br>
   <div class="ridge">
        
        <img src="images/sj.jpg" style="width:227px; height: 250px; margin-top: 0%;">
        <div style="margin-left: 23%; margin-top: -26.9%;"></br>
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Scarlett Johansson</a></b></br> <small style="font-size: 19px;">Actress</small> </h5> 
          <hr>
          <p  style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Johansson debuted on Broadway in a revival of A View from the Bridge, which won her a Tony Award for Best Featured Actress, and began playing the role of Black Widow in the Marvel Cinematic Universe with Iron Man 2. She reprised the role in the superhero film Captain America: The Winter Soldier, its sequel Captain America: Civil War, and in Avengers: Endgame, the lattermost became the highest grossing film of all time. Johansson has also appeared in films Lucy (2014), Ghost in the Shell, and Rough Night.</p> 
          
        </div>
      
      </div>
    
    </div>


  <div id="anushkashetty" style="width:1000px; height:500px; margin-left: 6%;">
  <canvas id="myChart7"></canvas>
   </br>
   <div class="ridge">
        
        <img src="images/as.jpg" style="width:227px; height: 250px; margin-top: 0%;">
        <div style="margin-left: 23%; margin-top: -26.9%;"></br>
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Anushka Shetty</a></b></br> <small style="font-size: 19px;">Actress</small> </h5> 
          <hr>
          <p style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Shetty also achieved success in Tamil cinema with starring roles in the action films such as Vettaikaran (2009), Singam II (2013), Yennai Arindhaal, all of which were major commercial successes. She continued to draw praise from critics with her leading performances in the dramas Vaanam.She portrayed the titular Queen in the 2015 epic historical fiction Rudramadevi,Shetty's portrayal of Princess Devasena in the Baahubali series received widespread acclaim. While The Beginning is the fourth highest-grossing Indian film.</p> 
          
        </div>
      
      </div>
    
    </div>


  <div id="deepikapadukone" style="width:1000px; height:500px; margin-left: 6%">
  <canvas id="myChart8" style=" margin-bottom: 16%;"></canvas>
   
        <div style="margin-top: -10%;">
          <div class="ridge" >
        <img src="images/dp.jpg" style="width:227px; height: 259px; margin-top: 0%;">

        <div style="margin-left: 23%; margin-top: -29%; "></br>
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Deepika Padukone</a></b></br> <small style="font-size: 19px;">Actress</small> </h5> 
          <hr>
          <p style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">The romantic comedy Cocktail marked a turning point in her career,she gained further success with starring roles in the romantic comedies YehJawaani HaiDeewani, Chennai Express,comedy Happy New Year,Sanjay Leela Bhansali's period dramas Bajirao Mastani, Padmaavat the Hollywood action film XXX: Return of Xander Cage.She also received critical  playing a character based on Juliet in Bhansali's tragic romance Goliyon Ki Raasleela Ram-Leela and a headstrong architect in the comedy-drama Piku. She formed her own company Ka Productions in under which she produced Chhapaak in which as an acid attack survivor.</p> 
          </div>
        </div>
      
      </div>
    
    </div>

  <div id="shraddhakapoor" style="width:1000px; height:500px; margin-left: 6%;">
  <canvas id="myChart9" style=" margin-bottom: 16%;"></canvas>
   <div style="margin-top: -10%;">
          <div class="ridge" >
        <img src="images/sk1.jpg" style="width:227px; height: 259px; margin-top: 0%;">

        <div style="margin-left: 23%; margin-top: -29%; "></br>
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Shraddha Kapoor</a></b></br> <small style="font-size: 19px;">Actress</small> </h5> 
          <hr>
          <p style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Kapoor gained wide recognition for playing a singer in the commercially successful romantic drama Aashiqui 2, she portrayed a character based on Ophelia in Vishal Bhardwaj's critically acclaimed drama Haider, an adaptation of William Shakespeare's tragedy Hamlet. Kapoor established herself with starring roles in the romantic thriller Ek Villain,the dance drama ABCD 2 ,the action drama Baaghi.Following a series of poorly received films, her highest-grossing releases came with the comedy horror Stree , the action thriller Saaho,the comedy-drama Chhichhore.</p> 
          </div>
        </div>
      
      </div>
    
    </div>

  <div id="justinlin" style="width:1000px; height:500px; margin-left: 6%;">
  <canvas id="myChart10" style="margin-bottom: 16%;"></canvas>
   <div style="margin-top: -10%;">
          <div class="ridge" >
        <img src="images/jl.jpg" style="width:227px; height: 259px; margin-top: 0%;">

        <div style="margin-left: 23%; margin-top: -29%; "></br>
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Justin Lin</a></b></br> <small style="font-size: 19px;">Director</small> </h5> 
          <hr>
          <p style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;"> born October 11, 1971 is an American film director whose films have grossed US$2.3 billion worldwide as of March 2017.He is best known for his directorial work on Better Luck Tomorrow (2002), the Fast & Furious franchise from The Fast and the Furious: Tokyo Drift (2006) to Fast & Furious 6 (2013) and F9 (2021), and Star Trek Beyond (2016). He is also known for his work on television programs like Community, and the second season of True Detective. The Fast and the Furious 3-6 and Star Trek Beyond. He is also known for his work on television shows like Community and the second season of True Detective.</p> 
          </div>
        </div>
      
      </div>
    
    </div>


  <div id="karanjohar" style="width:1000px; height:500px; margin-left: 6%;">
  <canvas id="myChart11"></canvas></br></br></br></br></br>
  <div style="margin-top: -10%;">
          <div class="ridge" >
        <img src="images/kj.jpg" style="width:227px; height: 259px; margin-top: 0%;">

        <div style="margin-left: 23%; margin-top: -29%; "></br>
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Karan Johar</a></b></br> <small style="font-size: 19px;">Director</small> </h5> 
          <hr>
          <p style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Johar made his directorial debut with the widely seen romance Kuch Kuch Hota Hai, which earned him the Filmfare Awards for Best Director and Best Screenplay. His next two films were the ensemble dramas Kabhi Khushi Kabhie Gham and Kabhi Alvida Naa Kehna, which were both very successful in the overseas market. His social drama My Name Is Khan earned him his second Filmfare Award for Best Director. The 2018 spy thriller Raazi won him Filmfare Award for Best Film. These, along with the several successful films he has produced under the Dharma Productions banner.</p> 
          </div>
        </div>
      
      </div>
    
    </div>

  <div id="rajkumarhirani" style="width:1000px; height:500px; margin-left: 6%;">
  <canvas id="myChart12"></canvas></br></br></br></br></br>
  <div style="margin-top: -10%;">
          <div class="ridge" >
        <img src="images/rh.jpg" style="width:227px; height: 259px; margin-top: 0%;">

        <div style="margin-left: 23%; margin-top: -29%; "></br>
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Rajkumar Hirani</a></b></br> <small style="font-size: 19px;">Director</small> </h5> 
          <hr>
          <p style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Rajkumar Hirani is an Indian film director and editor. Hirani is known for directing the Hindi films Munna Bhai M.B.B.S, Lage Raho Munnabhai (2006), 3 Idiots (2009), PK (2014) and Sanju (2018). All of his films have been commercial and critical successes.Most have won several awards, including the national awards, and have often been regarded by the media and audiences as some of the most path-breaking films in the history of Hindi cinema.He has won 11 Filmfare Awards. He is the founder of production house Rajkumar Hirani Films and suraj production house.</p> 
          </div>
        </div>
      
      </div>
    
    </div>


  <div id="rohitshetty" style="width:1000px; height:500px; margin-left: 6%;">
  <canvas id="myChart13"></canvas>
  </br></br></br></br></br>
  <div style="margin-top: -10%;">
          <div class="ridge" >
        <img src="images/rs.jpg" style="width:227px; height: 259px; margin-top: 0%;">

        <div style="margin-left: 23%; margin-top: -29%; "></br>
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Rohit Shetty</a></b></br> <small style="font-size: 19px;">Director</small> </h5> 
          <hr>
          <p style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">Shetty's second 2008 project, was the sequel to Golmaal, titled Golmaal Returns. The sequel featured most of the original cast, except Sharman Joshi, who was replaced by Shreyas Talpade, and starred Kareena Kapoor. Golmaal Returns. In 2009, he released All the Best: Fun Begins. In 2010, Shetty directed Golmaal 3. Shetty's 2011 Singham also featured Devgn in the title role, as a Police Inspector fighting against corruption. Singham was praised for the action.Shetty's Chennai Express,  highest opening week and the fastest film to reach ₹100 crore and ₹2 billion in the domestic market.</p> 
          </div>
        </div>
      
      </div>
    
    </div>

  <div id="sanjayleelabhansaali" style="width:1000px; height:500px; margin-left: 6%;">
  <canvas id="myChart14"></canvas>
 </br></br></br></br></br>
  <div style="margin-top: -10%;">
          <div class="ridge" >
        <img src="images/sb.jpg" style="width:227px; height: 259px; margin-top: 0%;">

        <div style="margin-left: 23%; margin-top: -29%; "></br>
          <h5 style="margin: 9px;"><b><a href="#" style="font-size: 20px;">Sanjay Leela Bhansaali</a></b></br> <small style="font-size: 19px;">Director</small> </h5> 
          <hr>
          <p style="margin: 10px; font-size: 17px; word-spacing: 1px; align-content: justify;">This changed with his adaptation of Shakespeare's Romeo and Juliet — the tragic romance Goliyon Ki Raasleela Ram-Leela opened to positive reviews and strong box office collections, for which he received several awards and nominations. His home production biographical sports film Mary Kom (2014), had him receive his third National Film Award. His period dramas Bajirao Mastani and Padmaavat both rank among the highest-grossing Indian films of all time. For the former, he won the National Film Award for Best Direction, as well as Filmfare awards for Best Director and Best Film; </p> 
          </div>
        </div>
      
      </div>
    
  </div>
</div>

  

</br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<div id="footer">
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom" style="font-size:20px;"><i class="fa fa-arrow-up w3-margin-"></i>To the top &#8657;</a>
<center> <h1 id="tara1" class="text-center">-: Presented By :-</h1>
      <h4 id="aa1" class="text-center">LLB</h4></center>
      <center><h3 id="aa2">"Lord's Of Last Bench"</h3></center>
</footer>
</div>




</body>


  <script type="text/javascript">

  var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response;  ?>],
        datasets: [{
            label: 'kartikaryan',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response1;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});

  var ctx1 = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx1, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response2;  ?>],
        datasets: [{
            label: 'ayushmannkhurrana',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response3;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx2 = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx2, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response4;  ?>],
        datasets: [{
            label: 'malharthakar',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response5;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx3 = document.getElementById('myChart3').getContext('2d');
var chart = new Chart(ctx3, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response6;  ?>],
        datasets: [{
            label: 'salmankhan',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response7;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx4 = document.getElementById('myChart4').getContext('2d');
var chart = new Chart(ctx4, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response8;  ?>],
        datasets: [{
            label: 'vindiesel',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response9;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx5 = document.getElementById('myChart5').getContext('2d');
var chart = new Chart(ctx5, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response10;  ?>],
        datasets: [{
            label: 'aliabhatt',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response11;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx6 = document.getElementById('myChart6').getContext('2d');
var chart = new Chart(ctx6, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response12;  ?>],
        datasets: [{
            label: 'scarlettjohansson',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response13;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx7 = document.getElementById('myChart7').getContext('2d');
var chart = new Chart(ctx7, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response14;  ?>],
        datasets: [{
            label: 'anushkashetty',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response15;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx8 = document.getElementById('myChart8').getContext('2d');
var chart = new Chart(ctx8, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response16;  ?>],
        datasets: [{
            label: 'deepikapadukone',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response17;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx9 = document.getElementById('myChart9').getContext('2d');
var chart = new Chart(ctx9, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response18;  ?>],
        datasets: [{
            label: 'shraddhakapoor',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response19;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx10 = document.getElementById('myChart10').getContext('2d');
var chart = new Chart(ctx10, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response20;  ?>],
        datasets: [{
            label: 'justinlin',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response21;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx11 = document.getElementById('myChart11').getContext('2d');
var chart = new Chart(ctx11, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response22;  ?>],
        datasets: [{
            label: 'karanjohar',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response23;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx12 = document.getElementById('myChart12').getContext('2d');
var chart = new Chart(ctx12, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response24;  ?>],
        datasets: [{
            label: 'rajkumarhirani',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response25;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx13 = document.getElementById('myChart13').getContext('2d');
var chart = new Chart(ctx13, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response26;  ?>],
        datasets: [{
            label: 'rohitshetty',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response27;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});


var ctx14 = document.getElementById('myChart14').getContext('2d');
var chart = new Chart(ctx14, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [<?php echo $response28;  ?>],
        datasets: [{
            label: 'sanjayleelabhansaali',
            backgroundColor: 'transparent',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $response29;  ?>]
        }]
    },

    // Configuration options go here
    options: {}
});



/*function function123(){
    var readrecord = 'readrecord21';
    var datavalue = [];
    var datavalue1 = [];
      $.ajax({
        url:'backend3.php',
        type:'post',
        data:{readrecord21:readrecord},
        success:function(data){
      
          console.log(data);
          function12345(data);
        }

      }); 
}*/
   </script>
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
function ayushmannkhurrana() {
  document.getElementById("ayushmannkhurrana").style.visibility = "visible";
  document.getElementById("ayushmannkhurrana").style.display = "block";
  document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
   document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
 

}
function kartikaryan() {
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
   document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
   document.getElementById("kartikaryan").style.visibility = "visible";
  document.getElementById("kartikaryan").style.display = "block";
}
function malharthakar() {
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
    document.getElementById("malharthakar").style.visibility = "visible";
  document.getElementById("malharthakar").style.display = "block";
}
function salmankhan() {
   document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
     document.getElementById("salmankhan").style.visibility = "visible";
  document.getElementById("salmankhan").style.display = "block";
}

function vindiesel() {
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
     document.getElementById("vindiesel").style.visibility = "visible";
  document.getElementById("vindiesel").style.display = "block";
}
function aliabhatt() {
 
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
    document.getElementById("aliabhatt").style.visibility = "visible";
  document.getElementById("aliabhatt").style.display = "block";
}
function anushkashetty() {
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
     document.getElementById("anushkashetty").style.visibility = "visible";
  document.getElementById("anushkashetty").style.display = "block";
}
function deepikapadukone() {
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
  
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
     document.getElementById("deepikapadukone").style.visibility = "visible";
  document.getElementById("deepikapadukone").style.display = "block";
}
function scarlettjohansson() {
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
     document.getElementById("scarlettjohansson").style.visibility = "visible";
  document.getElementById("scarlettjohansson").style.display = "block";
}
function shraddhakapoor() {
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
     document.getElementById("shraddhakapoor").style.visibility = "visible";
  document.getElementById("shraddhakapoor").style.display = "block";
}
function justinlin() {
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
  
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
     document.getElementById("justinlin").style.visibility = "visible";
  document.getElementById("justinlin").style.display = "block";
}
function karanjohar() {
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
     document.getElementById("karanjohar").style.visibility = "visible";
  document.getElementById("karanjohar").style.display = "block";
}
function rohitshetty() {
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
     document.getElementById("rohitshetty").style.visibility = "visible";
  document.getElementById("rohitshetty").style.display = "block";
}
function rajkumarhirani() {
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
  
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";
  document.getElementById("sanjayleelabhansaali").style.visibility = "hidden";
  document.getElementById("sanjayleelabhansaali").style.display = "none";
 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
    document.getElementById("rajkumarhirani").style.visibility = "visible";
  document.getElementById("rajkumarhirani").style.display = "block";
}
function sanjayleelabhansaali() {
  document.getElementById("malharthakar").style.visibility = "hidden";
  document.getElementById("malharthakar").style.display = "none";
    document.getElementById("kartikaryan").style.visibility = "hidden";
  document.getElementById("kartikaryan").style.display = "none";
   document.getElementById("ayushmannkhurrana").style.visibility = "hidden";
  document.getElementById("ayushmannkhurrana").style.display = "none";
  
document.getElementById("salmankhan").style.visibility = "hidden";
  document.getElementById("salmankhan").style.display = "none";
   document.getElementById("vindiesel").style.visibility = "hidden";
  document.getElementById("vindiesel").style.display = "none";
   document.getElementById("aliabhatt").style.visibility = "hidden";
  document.getElementById("aliabhatt").style.display = "none";
   document.getElementById("anushkashetty").style.visibility = "hidden";
  document.getElementById("anushkashetty").style.display = "none";
   document.getElementById("deepikapadukone").style.visibility = "hidden";
  document.getElementById("deepikapadukone").style.display = "none";
   document.getElementById("scarlettjohansson").style.visibility = "hidden";
  document.getElementById("scarlettjohansson").style.display = "none";
   document.getElementById("shraddhakapoor").style.visibility = "hidden";
  document.getElementById("shraddhakapoor").style.display = "none";
   document.getElementById("justinlin").style.visibility = "hidden";
  document.getElementById("justinlin").style.display = "none";
   document.getElementById("rajkumarhirani").style.visibility = "hidden";
  document.getElementById("rajkumarhirani").style.display = "none";
  document.getElementById("rohitshetty").style.visibility = "hidden";
  document.getElementById("rohitshetty").style.display = "none";

 document.getElementById("karanjohar").style.visibility = "hidden";
  document.getElementById("karanjohar").style.display = "none";
     document.getElementById("sanjayleelabhansaali").style.visibility = "visible";
  document.getElementById("sanjayleelabhansaali").style.display = "block";
}
</script>


</body>
</html>
