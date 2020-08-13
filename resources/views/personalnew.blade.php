<?php 
session_start();
if(isset($_SESSION['uname'])){
  if((time() - $_SESSION['timestamp']) > 300 ){
    header("location:logout.php");
  }
  else{
    $_SESSION['timestamp'] = time();
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<style>
  body{
    font-family:Open Sans;
    background-color: #2F4F4F;
    top: 

  }
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color:#FFF8DC;

}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;


}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color:#FFF8DC;

}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
#ka{
  color: #FF8C00;
}
#btn1{
  margin-left: -1%;
}
#btn2{
  margin-left: 50%;
}
#btn3{
  margin-left: -1%;
}
#btn4{
  margin-left:  50%;
}
#btn5{
  margin-left:-1%;
}
#btn6{
  margin-left: 50%;
}
#btn7{
  margin-left:-1%;
}
#btn8{
  margin-left: 50%;
}
#btn9{
  margin-left: -1%;
}
#btn10{
  margin-left:  50%;
}
#btn11{
  margin-left: -1%;
}
#btn12{
  margin-left: 50%;
}
#btn13{
  margin-left:-1%;
}
#btn14{
  margin-left:  50%;
}
#btn15{
  margin-left: 50%;
}
#Question1{
  visibility: visible;
  display: block;
  word-spacing: 1px;
  letter-spacing: 1px; 

  margin-left: 20%;
}
#question2{
  visibility: hidden;
  display: none; 
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
#question3{
  visibility: hidden;
  display: none;
  word-spacing: 1px;
  letter-spacing: 1px;
  margin-left: 20%; 
}
#question4{
  visibility: hidden;
  display: none;
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
#question5{
  visibility: hidden;
  display: none;
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
#question6{
  visibility: hidden;
  display: none;
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
#question7{
  visibility: hidden;
  display: none;
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
   #image1{
      max-height: 60px;
      max-width: 60px;

   }
   h2{
    color:#FFF8DC;
   }
</style>

<body>
	<header>

     <body class="w3">

</header>
</br>
</br>
 <form>
    <div id="Question1">
  <label><h2>1) Which type of movie you prefer the most ?</h2></label> 
    <label class="container">Action
      <input type="hidden" name="question1" value="question1" id="q1">
  <input type="checkbox" name="checkbox1" value="Action">
  <span class="checkmark"></span>
</label>
<label class="container">Thriller
  <input type="checkbox" name="checkbox1" value="Thriller">
  <span class="checkmark"></span>
</label>
<label class="container">Biography
  <input type="checkbox" name="checkbox1" value="Biography">
  <span class="checkmark"></span>
</label>
<label class="container">Horror
  <input type="checkbox" name="checkbox1" value="Horror">
  <span class="checkmark"></span>
</label>
<label class="container">Sci-Fi
  <input type="checkbox" name="checkbox1" value="Sci-Fi">
  <span class="checkmark"></span>
</label>
<label class="container">Romantic
  <input type="checkbox" name="checkbox1" value="Romantic">
  <span class="checkmark"></span>
</label>
<label class="container">Period time
  <input type="checkbox" name="checkbox1" value="Period time">
  <span class="checkmark"></span>
</label>
<label class="container">Drama
  <input type="checkbox" name="checkbox1" value="Drama">
  <span class="checkmark"></span>
</label>
<label class="container">Comedy
  <input type="checkbox" name="checkbox1" value="Comedy">
  <span class="checkmark"></span>
</label>
<label class="container">Mystery
  <input type="checkbox" name="checkbox1" value="Mystery">
  <span class="checkmark"></span>
</label>
<label class="container">Crime
  <input type="checkbox" name="checkbox1" value="Crime">
  <span class="checkmark"></span>
</label>
<label class="container">Real life Films
  <input type="checkbox" name="checkbox1" value="Real life Films">
  <span class="checkmark"></span>
</label>
<label class="container">Adventure
  <input type="checkbox" name="checkbox1" value="Adventure">
  <span class="checkmark"></span>
</label>
<label class="container">War films
  <input type="checkbox" name="checkbox1" value="War films">
  <span class="checkmark"></span>
</label>
<button type="button" class="btn btn-success" id="btn1" onclick="function11()">SKIP</button>
<button type="button" class="btn btn-success" id="btn2" onclick="function21()">NEXT</button>
</div>
<div id="question2">
  <label><h2>2) Which Bollywood Director you trust the most ?</h2></label>
   <input type="hidden" name="question2" value="question2" id="q2"> 
    <label class="container"> Rajkumar Hirani
  <input type="checkbox" name="checkbox2" value="Rajkumar Hirani">
  <span class="checkmark"></span>
</label>
<label class="container"> Neeraj Pandey
  <input type="checkbox" name="checkbox2" value="Neeraj Pandey">
  <span class="checkmark"></span>
</label>
<label class="container">Sanjay Leela Bhansali
  <input type="checkbox" name="checkbox2" value="Sanjay Leela Bhansali">
  <span class="checkmark"></span>
</label>
<label class="container">Yash Chopra
  <input type="checkbox" name="checkbox2" value="Yash Chopra">
  <span class="checkmark"></span>
</label>
<label class="container"> Anurag Kashyap
  <input type="checkbox" name="checkbox2" value="Anurag Kashyap">
  <span class="checkmark"></span>
</label>
<label class="container"> Vishal Bhardwaj
  <input type="checkbox" name="checkbox2" value="Vishal Bhardwaj">
  <span class="checkmark"></span>
</label>
<label class="container">Imtiaz Ali
  <input type="checkbox" name="checkbox2" value="Imtiaz Ali">
  <span class="checkmark"></span>
</label>
<label class="container"> Meghna Gulzar
  <input type="checkbox" name="checkbox2" value="Meghna Gulzar">
  <span class="checkmark"></span>
</label>
<label class="container"> Karan Johar
  <input type="checkbox" name="checkbox2" value="Karan Johar">
  <span class="checkmark"></span>
</label>
<label class="container">Anurag Basu
  <input type="checkbox" name="checkbox2" value="Anurag Basu">
  <span class="checkmark"></span>
</label>
<label class="container"> Anubhav Sinha
  <input type="checkbox" name="checkbox2" value="Anubhav Sinha">
  <span class="checkmark"></span>
</label>
<label class="container"> Kabir Khan
  <input type="checkbox" name="checkbox2" value="Kabir Khan">
  <span class="checkmark"></span>
</label>
<label class="container"> David Dhawan
  <input type="checkbox" name="checkbox2" value="David Dhawan">
  <span class="checkmark"></span>
</label>
<label class="container"> Rakesh Roshan
  <input type="checkbox" name="checkbox2" value="Rakesh Roshan">
  <span class="checkmark"></span>
</label>
<button type="button" class="btn btn-success" id="btn3" onclick="function12()">SKIP</button>
<button type="button" class="btn btn-success" id="btn4" onclick="function22()">NEXT</button>
</div>
<div id="question3">
<label><h2>3) Which Hollywood Director you trust the most ?</h2></label> 
<input type="hidden" name="question3" value="question3" id="q3">
    
<label class="container">  Steven Spielberg
  <input type="checkbox" name="checkbox3" value="Steven Spielberg">
  <span class="checkmark"></span>
</label>
<label class="container"> James Cameron
  <input type="checkbox" name="checkbox3" value="James Cameron">
  <span class="checkmark"></span>
</label>
<label class="container"> Woody Allen
  <input type="checkbox" name="checkbox3" value="Woody Allen">
  <span class="checkmark"></span>
</label>
<label class="container"> Martin Scorsese
  <input type="checkbox" name="checkbox3" value="Martin Scorsese">
  <span class="checkmark"></span>
</label>
<label class="container"> Ang Lee
  <input type="checkbox" name="checkbox3" value="Ang Lee">
  <span class="checkmark"></span>
</label>
<label class="container"> David Fincher
  <input type="checkbox" name="checkbox3" value="David Fincher">
  <span class="checkmark"></span>
</label>
<label class="container">Guy Ritchie
  <input type="checkbox" name="checkbox3" value="Guy Ritchie">
  <span class="checkmark"></span>
</label>
<label class="container">  Stanley Kubrick
  <input type="checkbox" name="checkbox3" value="Stanley Kubrick">
  <span class="checkmark"></span>
</label>
<label class="container">Danny Boyle
  <input type="checkbox" name="checkbox3" value="Danny Boyle">
  <span class="checkmark"></span>
</label>
<label class="container"> Peter Berg
  <input type="checkbox" name="checkbox3" value="Peter Berg">
  <span class="checkmark"></span>
</label>
<button type="button" class="btn btn-success" id="btn5" onclick="function13()">SKIP</button>
<button type="button" class="btn btn-success" id="btn6" onclick="function23()">NEXT</button>
</div>
<div id="question4">
<label><h2>4) Which movie you prefer first?</h2></label> 
<input type="hidden" name="question4" value="question40" id="q4.0">    
<label class="container">  Bollywood
  <input type="checkbox" name="checkbox4.0" value="Bollywood">
  <span class="checkmark"></span>
</label>
<label class="container"> Hollywood
  <input type="checkbox" name="checkbox4.0" value="Hollywood">
  <span class="checkmark"></span>
</label>
<label class="container"> Tollywood
  <input type="checkbox" name="checkbox4.0" value="Tollywood">
  <span class="checkmark"></span>
</label>
<label class="container"> Gujarati
  <input type="checkbox" name="checkbox4.0" value="Gujarati">
  <span class="checkmark"></span>
</label>
<label class="container"> Marathi
  <input type="checkbox" name="checkbox4.0" value="Marathi">
  <span class="checkmark"></span>
</label>
<label><h2>4.1) Which movie you prefer second?</h2></label> 
    <input type="hidden" name="question4" value="question41" id="q4.1">
<label class="container">  Bollywood
  <input type="checkbox" name="checkbox4.1" value="Bollywood">
  <span class="checkmark"></span>
</label>
<label class="container"> Hollywood
  <input type="checkbox" name="checkbox4.1" value="Hollywood">
  <span class="checkmark"></span>
</label>
<label class="container"> Tollywood
  <input type="checkbox" name="checkbox4.1" value="Tollywood">
  <span class="checkmark"></span>
</label>
<label class="container"> Gujarati
  <input type="checkbox" name="checkbox4.1" value="Gujarati">
  <span class="checkmark"></span>
</label>
<label class="container"> Marathi
  <input type="checkbox" name="checkbox4.1" value="Marathi">
  <span class="checkmark"></span>
</label>
<label><h2>4.2) Which movie you prefer third?</h2></label> 
    <input type="hidden" name="question4" value="question42" id="q4.2">
<label class="container">  Bollywood
  <input type="checkbox" name="checkbox4.2" value="Bollywood">
  <span class="checkmark"></span>
</label>
<label class="container"> Hollywood
  <input type="checkbox" name="checkbox4.2" value="Hollywood">
  <span class="checkmark"></span>
</label>
<label class="container"> Tollywood
  <input type="checkbox" name="checkbox4.2" value="Tollywood">
  <span class="checkmark"></span>
</label>
<label class="container"> Gujarati
  <input type="checkbox" name="checkbox4.2" value="Gujarati">
  <span class="checkmark"></span>
</label>
<label class="container"> Marathi
  <input type="checkbox" name="checkbox4.2" value="Marathi">
  <span class="checkmark"></span>
</label>
<button type="button" class="btn btn-success" id="btn7" onclick="function14()">SKIP</button>
<button type="button" class="btn btn-success" id="btn8" onclick="function24()">NEXT</button>
</div>
<div id="question5">
<label><h2>5) Which Bollywood actor you fond of ?</h2></label> 
    <input type="hidden" name="question5" value="question50" id="q5.0">
<label class="container"> Salman Khan
  <input type="checkbox" name="checkbox5.0" value="Salman Khan">
  <span class="checkmark"></span>
</label>
<label class="container"> Aamir khan
  <input type="checkbox" name="checkbox5.0" value="Aamir khan">
  <span class="checkmark"></span>
</label>
<label class="container"> Shahrukh khan
  <input type="checkbox" name="checkbox5.0" value="Shahrukh khan">
  <span class="checkmark"></span>
</label>
<label class="container"> Kartik aryan
  <input type="checkbox" name="checkbox5.0" value="Kartik aryan">
  <span class="checkmark"></span>
</label>
<label class="container"> Siddharth Kapoor
  <input type="checkbox" name="checkbox5.0" value="Siddharth Kapoor">
  <span class="checkmark"></span>
</label>
<label class="container"> Ranbir Kapoor
  <input type="checkbox" name="checkbox5.0" value="Ranbir Kapoor">
  <span class="checkmark"></span>
</label>
<label class="container"> Ranveer Kapoor
  <input type="checkbox" name="checkbox5.0" value="Ranveer Kapoor">
  <span class="checkmark"></span>
</label>
<label class="container"> Pulkit Samrat
  <input type="checkbox" name="checkbox5.0" value="Pulkit Samrat">
  <span class="checkmark"></span>
</label>
<label class="container"> Akshay Kumar
  <input type="checkbox" name="checkbox5.0" value="Akshay Kumar">
  <span class="checkmark"></span>
</label>
<label class="container"> Ajay Devgn
  <input type="checkbox" name="checkbox5.0" value="Ajay Devgn">
  <span class="checkmark"></span>
</label>
<label class="container">  Amitabh Bachchan
  <input type="checkbox" name="checkbox5.0" value="Amitabh Bachchan">
  <span class="checkmark"></span>
</label>
<label class="container">Irrfan Khan
  <input type="checkbox" name="checkbox5.0" value="Irrfan Khan">
  <span class="checkmark"></span>
</label>
<label class="container">  Manoj Bajpayee
  <input type="checkbox" name="checkbox5.0" value="Manoj Bajpayee">
  <span class="checkmark"></span>
</label>
<label class="container">  Nawazuddin Siddiqui
  <input type="checkbox" name="checkbox5.0" value="Nawazuddin Siddiqui">
  <span class="checkmark"></span>
</label><label class="container">   Vicky Kaushal
  <input type="checkbox" name="checkbox5.0" value="Vicky Kaushal">
  <span class="checkmark"></span>
</label><label class="container">  Rajkummar Rao
  <input type="checkbox" name="checkbox5.0" value="Rajkummar Rao">
  <span class="checkmark"></span>
</label><label class="container">   Ayushmann Khurrana
  <input type="checkbox" name="checkbox5.0" value="Ayushmann Khurrana">
  <span class="checkmark"></span>
</label>
</label><label class="container"> Hrithik Roshan
  <input type="checkbox" name="checkbox5.0" value="Hrithik Roshan">
  <span class="checkmark"></span>
</label>
 </label><label class="container"> Shahid Kapoor
  <input type="checkbox" name="checkbox5.0" value="Shahid Kapoor">
  <span class="checkmark"></span>
</label><label class="container">Sushant Singh Rajput
  <input type="checkbox" name="checkbox5.0" value="Sushant Singh Rajput">
  <span class="checkmark"></span>
</label><label class="container"> Boman Irani
  <input type="checkbox" name="checkbox5.0" value="Boman Irani">
  <span class="checkmark"></span>
</label><label class="container"> Pankaj Tripathi
  <input type="checkbox" name="checkbox5.0" value="Pankaj Tripathi">
  <span class="checkmark"></span>
</label><label class="container"> Arshad Warsi
  <input type="checkbox" name="checkbox5.0" value="Arshad Warsi">
  <span class="checkmark"></span>
</label>
<label class="container">   Emraan Hashmi
  <input type="checkbox" name="checkbox5.0" value="Emraan Hashmi">
  <span class="checkmark"></span>
</label>
<label class="container">   Saif Ali Khan
  <input type="checkbox" name="checkbox5.0" value="Saif Ali Khan">
  <span class="checkmark"></span>
</label>
<label class="container"> John Abraham
  <input type="checkbox" name="checkbox5.0" value="John Abraham">
  <span class="checkmark"></span>
</label>
<label class="container">Anil Kapoor
  <input type="checkbox" name="checkbox5.0" value="Anil Kapoor">
  <span class="checkmark"></span>
</label>
<label class="container">Varun dhawan
  <input type="checkbox" name="checkbox5.0" value="Varun dhawan">
  <span class="checkmark"></span>
</label><label class="container">Sanjay dutt
  <input type="checkbox" name="checkbox5.0" value="Sanjay dutt">
  <span class="checkmark"></span>
</label><label class="container"> Aparshakti Khurana
  <input type="checkbox" name="checkbox5.0" value="Aparshakti Khurana">
  <span class="checkmark"></span>
</label><label class="container">Varun Sharma
  <input type="checkbox" name="checkbox5.0" value="Varun Sharma">
  <span class="checkmark"></span>
</label><label class="container">Tiger shroff
  <input type="checkbox" name="checkbox5.0" value="Tiger shroff">
  <span class="checkmark"></span>
</label>

<label><h2>5.1) Which Hollywood actor you fond of ?</h2></label> 
    <input type="hidden" name="question5" value="question51" id="q5.1">
<label class="container">Mark Wahlberg
  <input type="checkbox" name="checkbox5.1" value="Mark Wahlberg">
  <span class="checkmark"></span>
</label>
<label class="container"> Dwayne "The Rock" Johnson
  <input type="checkbox" name="checkbox5.1" value='Dwayne "The Rock" Johnson'>
  <span class="checkmark"></span>
</label>
<label class="container"> Vin Diesel 
  <input type="checkbox" name="checkbox5.1" value="Vin Diesel ">
  <span class="checkmark"></span>
</label>
<label class="container"> Adam Sandler
  <input type="checkbox" name="checkbox5.1" value="Adam Sandler">
  <span class="checkmark"></span>
</label>
<label class="container">Jackie Chan
  <input type="checkbox" name="checkbox5.1" value="Jackie Chan">
  <span class="checkmark"></span>
</label>
<label class="container"> Robert Downey Jr.
  <input type="checkbox" name="checkbox5.1" value="Robert Downey Jr.">
  <span class="checkmark"></span>
</label>
<label class="container"> Tom Cruise
  <input type="checkbox" name="checkbox5.1" value="Tom Cruise">
  <span class="checkmark"></span>
</label>
<label class="container"> Chris Hemsworth
  <input type="checkbox" name="checkbox5.1" value="Chris Hemsworth">
  <span class="checkmark"></span>
</label>
<label class="container"> Samuel L. Jackson
  <input type="checkbox" name="checkbox5.1" value="Samuel L. Jackson">
  <span class="checkmark"></span>
</label>
<label class="container"> Tom Hanks
  <input type="checkbox" name="checkbox5.1" value="Tom Hanks">
  <span class="checkmark"></span>
</label>
<label class="container">   Ryan Gosling 
  <input type="checkbox" name="checkbox5.1" value="Ryan Gosling">
  <span class="checkmark"></span>
</label>
<label class="container">Ryan Reynolds
  <input type="checkbox" name="checkbox5.1" value="Ryan Reynolds">
  <span class="checkmark"></span>
</label>
<label class="container">   Matt Damon
  <input type="checkbox" name="checkbox5.1" value="Matt Damon">
  <span class="checkmark"></span>
</label>
<label class="container">  Jeremy Renner
  <input type="checkbox" name="checkbox5.1" value="Jeremy Renner">
  <span class="checkmark"></span>
</label><label class="container">Paul Walker
  <input type="checkbox" name="checkbox5.1" value="Paul Walker">
  <span class="checkmark"></span>
</label><label class="container">  Chris Evans
  <input type="checkbox" name="checkbox5.1" value="Chris Evans">
  <span class="checkmark"></span>
</label><label class="container">  Chris Pratt
  <input type="checkbox" name="checkbox5.1" value="Chris Pratt">
  <span class="checkmark"></span>
</label>
</label><label class="container">  Mark Ruffalo 
  <input type="checkbox" name="checkbox5.1" value="Mark Ruffalo">
  <span class="checkmark"></span>
</label>

 <label><h2>5.2) Which Tollywood actor you fond of ?</h2></label> 
     <input type="hidden" name="question5" value="question52" id="q5.2">
<label class="container">Chiranjeevi
  <input type="checkbox" name="checkbox5.2" value="Chiranjeevi">
  <span class="checkmark"></span>
</label>
<label class="container"> Mahesh Babu
  <input type="checkbox" name="checkbox5.2" value="Mahesh Babu"> 
  <span class="checkmark"></span>
</label>
<label class="container">  N.T. Rama Rao Jr.
  <input type="checkbox" name="checkbox5.2" value="N.T. Rama Rao Jr.">
  <span class="checkmark"></span>
</label>
<label class="container">  Allu Arjun
  <input type="checkbox" name="checkbox5.2" value="Allu Arjun">
  <span class="checkmark"></span>
</label>
<label class="container"> Prabhas
  <input type="checkbox" name="checkbox5.2" value="Prabhas">
  <span class="checkmark"></span>
</label>
<label class="container">Ravi Teja
  <input type="checkbox" name="checkbox5.2" value="Ravi Teja">
  <span class="checkmark"></span>
</label>
<label class="container"> Venkatesh Daggubati
  <input type="checkbox" name="checkbox5.2" value="Venkatesh Daggubati">
  <span class="checkmark"></span>
</label>
<label class="container">  Rana Daggubati
  <input type="checkbox" name="checkbox5.2" value="Rana Daggubati">
  <span class="checkmark"></span>
</label>
<label class="container">  Naga Chaitanya Akkineni
  <input type="checkbox" name="checkbox5.2" value="Naga Chaitanya Akkineni">
  <span class="checkmark"></span>
</label>
<label class="container">  Tottempudi Gopichand
  <input type="checkbox" name="checkbox5.2" value="Tottempudi Gopichand">
  <span class="checkmark"></span>
</label>
<label class="container">   Ram Charan
  <input type="checkbox" name="checkbox5.2" value="Ram Charan">
  <span class="checkmark"></span>
</label>
<label class="container">Nani
  <input type="checkbox" name="checkbox5.2" value="Nani">
  <span class="checkmark"></span>
</label>
<label class="container">   Vijay Deverakonda
  <input type="checkbox" name="checkbox5.2" value="Vijay Deverakonda">
  <span class="checkmark"></span>
</label>
<label class="container">  Rajni kant
  <input type="checkbox" name="checkbox5.2" value="Rajni kant">
  <span class="checkmark"></span>
</label><label class="container">Prabhu Deva
  <input type="checkbox" name="checkbox5.2" value="Prabhu Deva">
  <span class="checkmark"></span></label>



  <label><h2>5.3) Which Gujarati actor you fond of ?</h2></label> 
    <input type="hidden" name="question5" value="question53" id="q5.3">
<label class="container">Prateek Gandhi
  <input type="checkbox" name="checkbox5.3" value="Prateek Gandhi">
  <span class="checkmark"></span>
</label>
<label class="container"> Malhar Thakkar
  <input type="checkbox" name="checkbox5.3" value="Malhar Thakkar">
  <span class="checkmark"></span>
</label>
<label class="container">  Divyang Thakkar
  <input type="checkbox" name="checkbox5.3" value="Divyang Thakkar">
  <span class="checkmark"></span>
</label>
<label class="container">  Mitra Gadhvi
  <input type="checkbox" name="checkbox5.3" value="Mitra Gadhvi">
  <span class="checkmark"></span>
</label>
<label class="container"> Mayur chauhan
  <input type="checkbox" name="checkbox5.3" value="Mayur chauhan">
  <span class="checkmark"></span>
</label>
<label class="container">Naresh Kanodia
  <input type="checkbox" name="checkbox5.3" value="Naresh Kanodia">
  <span class="checkmark"></span>
</label>
<button type="button" class="btn btn-success" id="btn9" onclick="function15()">SKIP</button>
<button type="button" class="btn btn-success" id="btn10" onclick="function25()">NEXT</button>
</div>
<div id="question6">

<label><h2>6) Which Bollywood actress you fond of ?</h2></label> 
    <input type="hidden" name="question6" value="question60" id="q6.0">
<label class="container"> Deepika Padukon
  <input type="checkbox" name="checkbox6.0" value="Deepika Padukon">
  <span class="checkmark"></span>
</label>
<label class="container"> Katrina Kaif
  <input type="checkbox" name="checkbox6.0" value="Katrina Kaif">
  <span class="checkmark"></span>
</label>
<label class="container"> Shraddha Kapoor
  <input type="checkbox" name="checkbox6.0" value="Shraddha Kapoor">
  <span class="checkmark"></span>
</label>
<label class="container"> Disha Patani
  <input type="checkbox" name="checkbox6.0" value="Disha Patani">
  <span class="checkmark"></span>
</label>
<label class="container"> Sonam Kapoor
  <input type="checkbox" name="checkbox6.0" value="Sonam Kapoor">
  <span class="checkmark"></span>
</label>
<label class="container"> Sara Ali Khan
  <input type="checkbox" name="checkbox6.0" value="Sara Ali Khan">
  <span class="checkmark"></span>
</label>
<label class="container"> Kriti Sanon
  <input type="checkbox" name="checkbox6.0" value="Kriti Sanon">
  <span class="checkmark"></span>
</label>
<label class="container">  Priyanka Chopra
  <input type="checkbox" name="checkbox6.0" value="Priyanka Chopra">
  <span class="checkmark"></span>
</label>
<label class="container">  Kangana Ranaut
  <input type="checkbox" name="checkbox6.0" value="Kangana Ranaut">
  <span class="checkmark"></span>
</label>
<label class="container">  Jacqueline Fernandez
  <input type="checkbox" name="checkbox6.0" value="Jacqueline Fernandez">
  <span class="checkmark"></span>
</label>
<label class="container">   Alia Bhatt
  <input type="checkbox" name="checkbox6.0" value="Alia Bhatt">
  <span class="checkmark"></span>
</label>
<label class="container"> Kareena Kapoor
  <input type="checkbox" name="checkbox6.0" value="Kareena Kapoor">
  <span class="checkmark"></span>
</label>
<label class="container">   Anushka Sharma
  <input type="checkbox" name="checkbox6.0" value="Anushka Sharma">
  <span class="checkmark"></span>
</label>
<label class="container">   Sonakshi Sinha
  <input type="checkbox" name="checkbox6.0" value="Sonakshi Sinha">
  <span class="checkmark"></span>
</label><label class="container">   Nargis Fakhri
  <input type="checkbox" name="checkbox6.0" value="Nargis Fakhri">
  <span class="checkmark"></span>
</label><label class="container">   Parineeti Chopra
  <input type="checkbox" name="checkbox6.0" value="Parineeti Chopra">
  <span class="checkmark"></span>
</label><label class="container">    Huma Qureshi
  <input type="checkbox" name="checkbox6.0" value="Huma Qureshi">
  <span class="checkmark"></span>
</label>
</label><label class="container"> Ileana D'Cruz
  <input type="checkbox" name="checkbox6.0" value="Ileana D'Cruz">
  <span class="checkmark"></span>
</label>
 </label><label class="container"> Ananya Panday
  <input type="checkbox" name="checkbox6.0" value="Ananya Panday">
  <span class="checkmark"></span>
</label><label class="container"> Vaani Kapoor
  <input type="checkbox" name="checkbox6.0" value="Vaani Kapoor">
  <span class="checkmark"></span>
</label><label class="container">  Radhika Apte
  <input type="checkbox" name="checkbox6.0" value="Radhika Apte">
  <span class="checkmark"></span>
</label><label class="container"> Kalki Koechlin
  <input type="checkbox" name="checkbox6.0" value="Kalki Koechlin">
  <span class="checkmark"></span>
</label><label class="container"> Sunny Leone
  <input type="checkbox" name="checkbox6.0" value="Sunny Leone">
  <span class="checkmark"></span>
</label>
<label class="container">  Urvashi Rautela
  <input type="checkbox" name="checkbox6.0" value="Urvashi Rautela">
  <span class="checkmark"></span>
</label>
<label class="container">    Fatima Sana Shaikh
  <input type="checkbox" name="checkbox6.0" value="Fatima Sana Shaikh">
  <span class="checkmark"></span>
</label>
<label class="container"> Bhumi Pednekar
  <input type="checkbox" name="checkbox6.0" value="Bhumi Pednekar">
  <span class="checkmark"></span>
</label>
<label class="container"> Kiara Advani
  <input type="checkbox" name="checkbox6.0" value="Kiara Advani">
  <span class="checkmark"></span>
</label>
<label class="container">Janhvi Kapoor
  <input type="checkbox" name="checkbox6.0" value="Janhvi Kapoor">
  <span class="checkmark"></span>
</label>
<label><h2>6.1) Which Tollywood actress you fond of ?</h2></label> 
    <input type="hidden" name="question6" value="question61" id="q6.1">
<label class="container">Kajal Agarwal
  <input type="checkbox" name="checkbox6.1" value="Kajal Agarwal">
  <span class="checkmark"></span>
</label>
<label class="container">  Samantha Ruth Prabhu
  <input type="checkbox"  name="checkbox6.1" value="Samantha Ruth Prabhu">
  <span class="checkmark"></span>
</label>
<label class="container">  Shruti Hassan
  <input type="checkbox" name="checkbox6.1" value="Shruti Hassan">
  <span class="checkmark"></span>
</label>
<label class="container">   Shriya Saran
  <input type="checkbox" name="checkbox6.1" value="Shriya Saran">
  <span class="checkmark"></span>
</label>
<label class="container">  Anjali
  <input type="checkbox" name="checkbox6.1" value="Anjali">
  <span class="checkmark"></span>
</label>
<label class="container"> Anushka Shetty
  <input type="checkbox" name="checkbox6.1" value="Anushka Shetty">
  <span class="checkmark"></span>
</label>
<label class="container">Tamannah
  <input type="checkbox" name="checkbox6.1" value="Tamannah">
  <span class="checkmark"></span>
</label>
<label class="container">  Nithya Menon
  <input type="checkbox" name="checkbox6.1" value="Nithya Menon">
  <span class="checkmark"></span>
</label>
<label class="container">  Eesha
  <input type="checkbox" name="checkbox6.1" value="Eesha">
  <span class="checkmark"></span>
</label>
<label class="container">  Swathi Reddy
  <input type="checkbox" name="checkbox6.1" value="Swathi Reddy">
  <span class="checkmark"></span>
</label>
<label class="container">   Ram Charan
  <input type="checkbox" name="checkbox6.1" value="Ram Charan">
  <span class="checkmark"></span>
</label>
<label class="container">Nani
  <input type="checkbox" name="checkbox6.1" value="Nani">
  <span class="checkmark"></span>
</label>
<label class="container">   Pranitha Subhash
  <input type="checkbox" name="checkbox6.1" value="Pranitha Subhash">
  <span class="checkmark"></span>
</label>
<label class="container">  Regina Cassandra
  <input type="checkbox" name="checkbox6.1" value="Regina Cassandra">
  <span class="checkmark"></span>
</label><label class="container">Hansika Motwani
  <input type="checkbox" name="checkbox6.1" value="Hansika Motwani">
  <span class="checkmark"></span></label>
  <label class="container"> Raashi Khanna
  <input type="checkbox" name="checkbox6.1" value="Raashi Khanna">
  <span class="checkmark"></span>
</label><label class="container">Rashmika Mandanna
  <input type="checkbox" name="checkbox6.1" value="Rashmika Mandanna">
  <span class="checkmark"></span>
</label>


<label><h2>6.2) Which Gujarai actress you fond of ?</h2></label> 
    <input type="hidden" name="question6" value="question62" id="q6.2">
<label class="container">Aarohi Patel
  <input type="checkbox" name="checkbox6.2" value="Aarohi Patel">
  <span class="checkmark"></span>
</label>
<label class="container">  Prachi Desai
  <input type="checkbox" name="checkbox6.2" value="Prachi Desai">
  <span class="checkmark"></span>
</label>
<label class="container">  Janki Bodiwala
  <input type="checkbox" name="checkbox6.2" value="Janki Bodiwala">
  <span class="checkmark"></span>
</label>
<label class="container">  Deeksha Joshi
  <input type="checkbox" name="checkbox6.2" value="Deeksha Joshi">
  <span class="checkmark"></span>
</label>
<label class="container">  Monal Gajja
  <input type="checkbox" name="checkbox6.2" value="Monal Gajja">
  <span class="checkmark"></span>
</label>
<label class="container"> Kinjal Rajpriya
  <input type="checkbox" name="checkbox6.2" value="Kinjal Rajpriya">
  <span class="checkmark"></span>
</label>
<button type="button" class="btn btn-success" id="btn11" onclick="function16()">SKIP</button>
<button type="button" class="btn btn-success" id="btn12" onclick="function26()">NEXT</button>
</div>
<div id="question7"> 
 <label><h2>7) Whose Production you like the most ?</h2></label> 
    <input type="hidden" name="question7" value="question7" id="q7">
<label class="container">Warner Bros.
  <input type="checkbox" name="checkbox7" value="Warner Bros">
  <span class="checkmark"></span>
</label>
<label class="container"> Sony Pictures Motion Picture Group.
  <input type="checkbox" name="checkbox7" value="Sony Pictures Motion Picture Group">
  <span class="checkmark"></span>
</label>
<label class="container">  Walt Disney Studios.
  <input type="checkbox" name="checkbox7" value="Walt Disney Studios">
  <span class="checkmark"></span>
</label>
<label class="container">  Universal Pictures
  <input type="checkbox" name="checkbox7" value="Universal Pictures">
  <span class="checkmark"></span>
</label>
<label class="container"> 20th Century Fox.
  <input type="checkbox" name="checkbox7" value="20th Century Fox">
  <span class="checkmark"></span>
</label>
<label class="container">Paramount Pictures
  <input type="checkbox" name="checkbox7" value="Paramount Pictures">
  <span class="checkmark"></span>
</label>
<label class="container">Lionsgate Films.
  <input type="checkbox" name="checkbox7" value="Lionsgate Films">
  <span class="checkmark"></span>
</label>
<label class="container">The Weinstein Company.
  <input type="checkbox" name="checkbox7" value="The Weinstein Company">
  <span class="checkmark"></span>
</label>
<label class="container">Metro-Goldwyn-Mayer Studios.
  <input type="checkbox" name="checkbox7" value="Metro-Goldwyn-Mayer Studios">
  <span class="checkmark"></span>
</label>
<label class="container">DreamWorks Pictures.
  <input type="checkbox" name="checkbox7" value="DreamWorks Pictures">
  <span class="checkmark"></span>
</label>
<label class="container">DC.
  <input type="checkbox" name="checkbox7" value="DC">
  <span class="checkmark"></span>
</label>
<label class="container">Marvel.
  <input type="checkbox" name="checkbox7" value="Marvel">
  <span class="checkmark"></span>
</label>
<label class="container"> Balaji Telefilms Ltd
  <input type="checkbox" name="checkbox7" value="Balaji Telefilms Ltd">
  <span class="checkmark"></span>
</label>
<label class="container">Dharma Productions Pvt Ltd.
  <input type="checkbox" name="checkbox7" value="Dharma Productions Pvt Ltd">
  <span class="checkmark"></span>
</label>
<label class="container">Eros International Media Ltd..
  <input type="checkbox" name="checkbox7" value="Eros International Media Ltd">
  <span class="checkmark"></span>
</label>
<label class="container">Fox Star Studio India Pvt Ltd.
  <input type="checkbox" name="checkbox7" value="Fox Star Studio India Pvt Ltd">
  <span class="checkmark"></span>
</label>
<label class="container">Ramoji Film City (ETV Network)
  <input type="checkbox" name="checkbox7" value="Ramoji Film City (ETV Network)">
  <span class="checkmark"></span>
</label>
<label class="container">Reliance Big Entertainment Pvt Ltd.
  <input type="checkbox" name="checkbox7" value="Reliance Big Entertainment Pvt Ltd">
  <span class="checkmark"></span>
</label>
<label class="container">Viacom18 Media Pvt Ltd.
  <input type="checkbox" name="checkbox7" value="Viacom18 Media Pvt Ltd">
  <span class="checkmark"></span>
</label>
<label class="container">Yash Raj Films Pvt Ltd.
  <input type="checkbox" name="checkbox7" value="Yash Raj Films Pvt Ltd">
  <span class="checkmark"></span>
</label>
<button type="button" class="btn btn-success" onclick="function27()" id="btn15">Finish</button>
</div>
</form>
<script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        $(document).ready(function(){
          functionset();
        });
        function functionset(){



        }
        function function11(){
        if(document.getElementById("Question1").style.visibility = "visible")
        {
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "visible";
        document.getElementById("question2").style.display = "block"; 
        }
    }
        function function21(){
        if(document.getElementById("Question1").style.visibility = "visible"){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "visible";
        document.getElementById("question2").style.display = "block"; 
        }
      var a = document.getElementById('q1').value;
      console.log(a);
      var readRecord = [];
      $.each($("input[name='checkbox1']:checked"), function(){
                readRecord.push($(this).val());
      });
      var readRecord = readRecord.join();
      if(readRecord.length>0){
      console.log(readRecord);
            $.ajax({
              url: 'question1',
              type: 'POST',
              data: {readRecord:readRecord, a:a},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
            }
          
    });
      }



    }
        function function12(){
        if(document.getElementById("question2").style.visibility = "visible"){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "hidden";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.visibility = "visible";
        document.getElementById("question3").style.display = "block";
    }
  }
        function function22(){
        if(document.getElementById("question2").style.visibility = "visible"){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "hidden";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.visibility = "visible";
        document.getElementById("question3").style.display = "block"; 
    }
      var b = document.getElementById('q2').value;
      console.log(b);  
      var readRecord1 = [];
      $.each($("input[name='checkbox2']:checked"), function(){
                readRecord1.push($(this).val());
      });
      var readRecord1 = readRecord1.join();
      if(readRecord1.length>0){
      console.log(readRecord1);
                  $.ajax({
              url: 'question2',
              type: 'POST',
              data: {readRecord1:readRecord1, b:b},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
            }
          
    });
      }
  }
        function function13(){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "hidden";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.visibility = "hidden";
        document.getElementById("question3").style.display = "none";
        document.getElementById("question4").style.visibility = "visible";
        document.getElementById("question4").style.display = "block";



    }
        function function23(){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "hidden";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.visibility = "hidden";
        document.getElementById("question3").style.display = "none";
        document.getElementById("question4").style.visibility = "visible";
        document.getElementById("question4").style.display = "block";
        var c = document.getElementById('q3').value;
        console.log(c);  
        var readRecord2 = [];
        $.each($("input[name='checkbox3']:checked"), function(){
                readRecord2.push($(this).val());
        });
        var readRecord2 = readRecord2.join();
        if(readRecord2.length>0){
          console.log(readRecord2);
                      $.ajax({
              url: 'question3',
              type: 'POST',
              data: {readRecord2:readRecord2, c:c},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
            }
          
    });
        }
      
    }
        function function14(){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "hidden";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.visibility = "hidden";
        document.getElementById("question3").style.display = "none";
        document.getElementById("question4").style.visibility = "hidden";
        document.getElementById("question4").style.display = "none";
        document.getElementById("question5").style.visibility = "visible";
        document.getElementById("question5").style.display = "block";

    }
        function function24(){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "hidden";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.visibility = "hidden";
        document.getElementById("question3").style.display = "none";
        document.getElementById("question4").style.visibility = "hidden";
        document.getElementById("question4").style.display = "none";
        document.getElementById("question5").style.visibility = "visible";
        document.getElementById("question5").style.display = "block";
        var d = document.getElementById('q4.0').value;
        console.log(d);
        var e = document.getElementById('q4.1').value;
        console.log(e);  
        var f = document.getElementById('q4.2').value;
        console.log(f);    
        var readRecord3 = [];
          $.each($("input[name='checkbox4.0']:checked"), function(){
                readRecord3.push($(this).val());
        });
        var readRecord3 = readRecord3.join();
        if(readRecord3.length>0){
          console.log(readRecord3);
        }
       var readRecord4 = [];
        $.each($("input[name='checkbox4.1']:checked"), function(){
                readRecord4.push($(this).val());
        });
        var readRecord4 = readRecord4.join();
        if (readRecord4.length>0) {
        console.log(readRecord4);
        }
       var readRecord5 = [];
        $.each($("input[name='checkbox4.2']:checked"), function(){
                readRecord5.push($(this).val());
        });
        var readRecord5 = readRecord5.join();
        if (readRecord5.length>0) {
        console.log(readRecord5);
        }
        if(readRecord3.length>0 && readRecord4.length>0 && readRecord5.length>0){
              $.ajax({
              url: 'question4',
              type: 'POST',
              data: {readRecord3:readRecord3, readRecord4:readRecord4, readRecord5:readRecord5 , d:d, e:e, f:f},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
            }
          
    });
        }
      
    }
        function function15(){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "hidden";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.visibility = "hidden";
        document.getElementById("question3").style.display = "none";
        document.getElementById("question4").style.visibility = "hidden";
        document.getElementById("question4").style.display = "none";
        document.getElementById("question5").style.visibility = "hidden";
        document.getElementById("question5").style.display = "none";
        document.getElementById("question6").style.visibility = "visible";
        document.getElementById("question6").style.display = "block";

    }
        function function25(){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "hidden";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.visibility = "hidden";
        document.getElementById("question3").style.display = "none";
        document.getElementById("question4").style.visibility = "hidden";
        document.getElementById("question4").style.display = "none";
        document.getElementById("question5").style.visibility = "hidden";
        document.getElementById("question5").style.display = "none";
        document.getElementById("question6").style.visibility = "visible";
        document.getElementById("question6").style.display = "block";
        if(document.getElementById("question5").style.visibility = "visible"){
          var g = document.getElementById('q5.0').value;
          console.log(g);  
          var h = document.getElementById('q5.1').value;
          console.log(h);  
          var i = document.getElementById('q5.2').value;
          console.log(i);  
          var j = document.getElementById('q5.3').value;
          console.log(j);  
          var readRecord6 = [];
            $.each($("input[name='checkbox5.0']:checked"), function(){
                readRecord6.push($(this).val());
          });
          var readRecord6 = readRecord6.join();
          if (readRecord6.length>0) {
          console.log(readRecord6);
          }

          var readRecord7 = [];
          $.each($("input[name='checkbox5.1']:checked"), function(){
          readRecord7.push($(this).val());
          });
          var readRecord7 = readRecord7.join();
          if (readRecord7.length>0) {
          console.log(readRecord7);
          }

          var readRecord8 = [];
          $.each($("input[name='checkbox5.2']:checked"), function(){
                readRecord8.push($(this).val());
          });
          var readRecord8 = readRecord8.join();
          if (readRecord8.length>0) {
          console.log(readRecord8);
          }
          var readRecord9 = [];
          $.each($("input[name='checkbox5.3']:checked"), function(){
                readRecord9.push($(this).val());
          });
          var readRecord9 = readRecord9.join();
          if (readRecord9.length>0) {
          console.log(readRecord9);
          }


    if(readRecord6.length>0 && readRecord7.length>0 && readRecord8.length>0 && readRecord9.length>0){
              $.ajax({
              url: 'question5',
              type: 'POST',
              data: {readRecord6:readRecord6,readRecord7:readRecord7,readRecord8:readRecord8,readRecord9:readRecord9,g:g,h:h,i:i,j:j},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
            }
          
    });

    }      
    }
  }
        function function16(){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "hidden";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.visibility = "hidden";
        document.getElementById("question3").style.display = "none";
        document.getElementById("question4").style.visibility = "hidden";
        document.getElementById("question4").style.display = "none"; 
        document.getElementById("question5").style.visibility = "hidden";
        document.getElementById("question5").style.display = "none";
        document.getElementById("question6").style.visibility = "hidden";
        document.getElementById("question6").style.display = "none";
        document.getElementById("question7").style.visibility = "visible";
        document.getElementById("question7").style.display = "block";

    }
        function function26(){
        document.getElementById("Question1").style.visibility = "hidden";
        document.getElementById("Question1").style.display = "none";
        document.getElementById("question2").style.visibility = "hidden";
        document.getElementById("question2").style.display = "none";
        document.getElementById("question3").style.visibility = "hidden";
        document.getElementById("question3").style.display = "none";
        document.getElementById("question4").style.visibility = "hidden";
        document.getElementById("question4").style.display = "none"; 
        document.getElementById("question5").style.visibility = "hidden";
        document.getElementById("question5").style.display = "none";
        document.getElementById("question6").style.visibility = "hidden";
        document.getElementById("question6").style.display = "none";
        document.getElementById("question7").style.visibility = "visible";
        document.getElementById("question7").style.display = "block";
        var k = document.getElementById('q6.0').value;
        console.log(k);  
        var l = document.getElementById('q6.1').value;
        console.log(l);  
        var m = document.getElementById('q6.2').value;
        console.log(m);  
        var readRecord10 = [];
      $.each($("input[name='checkbox6.0']:checked"), function(){
                readRecord10.push($(this).val());
      });
      var readRecord10 = readRecord10.join();
      if (readRecord10.length>0) {
      console.log(readRecord10);
    }


      var readRecord11 = [];
      $.each($("input[name='checkbox6.1']:checked"), function(){
                readRecord11.push($(this).val());
      });
      var readRecord11 = readRecord11.join();
      if (readRecord11.length>0) {
      console.log(readRecord11);
    }


      var readRecord12 = [];
      $.each($("input[name='checkbox6.2']:checked"), function(){
                readRecord12.push($(this).val());
      });
      var readRecord12 = readRecord12.join();
      if (readRecord12.length>0) {
      console.log(readRecord12);
    }
    if (readRecord10.length>0 && readRecord11.length>0 && readRecord12.length>0) {
              $.ajax({
              url: 'question6',
              type: 'POST',
              data: {readRecord10:readRecord10,readRecord11:readRecord11,readRecord12:readRecord12,k:k,l:l,m:m},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);;
            }
          
    });
    }
}

    function function27(){
      var n = document.getElementById('q7').value;
      console.log(n); 
    if(document.getElementById("question7").style.visibility = "visible"){
      var readRecord13 = [];
      $.each($("input[name='checkbox7']:checked"), function(){
                readRecord13.push($(this).val());
      });
      var readRecord13 = readRecord13.join();
      if (readRecord13.length>0) {
      console.log(readRecord13);
              $.ajax({
              url: 'question7',
              type: 'POST',
              data: {readRecord13:readRecord13,n:n},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
            }
          
    });
    }     
          $(location).attr('href','home1');
}
}

</script>
</body>
</html>