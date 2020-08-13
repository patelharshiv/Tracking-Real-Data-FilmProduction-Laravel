<?php 
session_start();
?>
<html>
<head>
  <title></title>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
  body{
    margin: 0;
    padding: 0;
    background: url("images/t6.jpg");
    background-repeat: no-repeat;
    background-size:  cover;
    font-family: Comic Sans MS, Comic Sans, cursive;;  
  }

  .login-box{
    width: 330px;
    height: auto;
    background: rgba(0, 0, 0, .5);
    color: #fff024;
    top: 70%;
    left: 40%;
    position: absolute;
    transform: translate(-50%,-50%);
    padding: 20px 15px;
}

li{
  display: inline;
  margin: 10px;
  padding: auto;
  float: right;
}
.btn{
  color: #00d600;
  font-size:17px;
  text-decoration: none;
  text-transform: uppercase;
  transition: 0.5s;
  letter-spacing: 1.5px;
}
.btn:hover{
  background:#00d600;
  color:;
  box-shadow: 0 0 5px #00d600;
}
.btn span{
  display: block;
  position: absolute;
}
.btn span:nth-child(1)
{
  top:0;
  left: 0;
  width:100;
  height: 2px;
  background: linear-gradient(90deg,transparent,##00d600);
  animation: animate1 2s linear infinite;

}
#rpwd{
  border-color: none;
}

#text {
  display:none;color:red
}
#successfull{
  visibility: hidden;
  display: none;
}
</style>
</head>
<body>  
<div class="container-fluid">
  <div class="container-fluid  p-3 my-3  text-dark">
    <ul>
    <li><a href="aboutusnew" class="text-danger">About Us</a></li>
    <li><a href="contactnew" class="text-danger">Contact </a></li>
    </ul>
  </div>
    <form type="post">
  <div class="login-box">
    <div class="form-group">
      <p>Already a User ???? </p>
      <a href="/" class="text-danger font-italic ">Click Here !!!!!</a></br></br>
      <label for="Name">FIRST NAME :</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" autocomplete="false">
      <div id="fnameerror"></div>
    </div>
    <div class="form-group">
      <label for="Last Name">LAST NAME :</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" autocomplete="false">
      <div id="lnameerror"></div>
    </div>
    <div class="form-group">
      <label for="Number">MOBILE NUMBER :</label>
      <input type="text" class="form-control" id="mno" placeholder="Enter Mobile Number " name="mno" autocomplete="false">
      <div id="mnoerror"></div>
    </div>
    
    <div class="form-group">
      <label for="email">EMAIL :</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" oninput="emailerror()" autocomplete="false">
      <div id="emailerror"></div>
    </div>

    <div class="form-group">
      <label for="Name">USERNAME : </label>
      <input type="Name" class="form-control" id="uname1" placeholder="Don't Username Space in between" name="uname1" oninput="unameerror()" autocomplete="false">
      <div id="unameerror"></div>
    </div>

    <div class="form-group">
      <label for="pwd">PASSWORD :</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" oninput="pwderror()" required>  
      <input type="checkbox" onclick="myFunction()"> Show password
      <div id="pwderror"></div>
     </div>

    <div class="form-group">
        <label for="pwd">RE-PASSWORD :</label>
      <input type="password" class="form-control" id="rpwd" placeholder="Enter Re-Password" name="rpwd" oninput="rpwderror()">
      <div id="pwdreerror"></div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <center></br><span>
    <button type="button" style="border:2px solid green;" class="btn " text-align="center" onclick="addrecord()">SUBMIT</button></span>
    </center>
    <div id="getdata">
    
    </div>
    <div id="successfull"><a href="/">Click here to login!!</a></div>
  </div>
  </form>
</div>


<script type="text/javascript">
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      function addrecord()
      {
                var fname = $('#fname').val();
                var lname = $('#lname').val();
                var email = $('#email').val();
                var mno = $('#mno').val();
                var uname1 = $('#uname1').val();
                var pwd = $('#pwd').val();
                var rpwd = $('#rpwd').val();
                console.log(fname);
                console.log(lname);
                console.log(email);
                console.log(mno);
                console.log(uname1);
                console.log(pwd);
                console.log(rpwd);
            $.ajax({
              url: 'backend',
              type: 'POST',
              data: {fname:fname, lname:lname, email:email, mno:mno, uname1:uname1, pwd1:pwd, rpwd:rpwd, pwd2:pwd},
              success: function(result){
                if(result == "You are Successfully Registered.."){
                  document.getElementById('successfull').style.visibility="visible";
                  document.getElementById('successfull').style.display="block";
                }
              $('#getdata').html(result);
            }
          
            });
        
      }
      function fnameerror()
      {
                var fname = $('#fname').val();
                console.log(fname);
            $.ajax({
              url: 'backend',
              type: 'POST',
              data: {fname:fname},
              success: function(result){
            
              $('#fnameerror').html(result);
            }
          
            });
        
      }
      function lnameerror()
      {
                var lname = $('#lname').val();
                console.log(lname);
            $.ajax({
              url: 'backend',
              type: 'POST',
              data: {lname:lname},
              success: function(result){
            
              $('#lnameerror').html(result);
            }
          
            });
        
      }
      function mnoerror()
      {
                var mno = $('#mno').val();
                console.log(mno);
            $.ajax({
              url: 'backend',
              type: 'POST',
              data: {mno:mno},
              success: function(result){
            
              $('#mnoerror').html(result);
            }
          
            });
        
      }
      function emailerror()
      {
                var email = $('#email').val();
                console.log(email);
            $.ajax({
              url: 'backend',
              type: 'POST',
              data: {email:email},
              success: function(result){
            
              $('#emailerror').html(result);
            }
          
            });
        
      }
      function unameerror()
      {
            var uname1 = $('#uname1').val();
            console.log(uname1);
            $.ajax({
              url: 'backend',
              type: 'POST',
              data: {uname1:uname1},
              success: function(result){
            
              $('#unameerror').html(result);
            }
          
            });
        
      }
      function pwderror()
      {
                var pwd = $('#pwd').val();
                console.log(pwd);
            $.ajax({
              url: 'backend',
              type: 'POST',
              data: {pwd1:pwd},
              success: function(result3){
            
              $('#pwderror').html(result3);
            }
          
            });
        
      }
      function rpwderror()
      {
                var pwd = $('#pwd').val();
                var rpwd = $('#rpwd').val();
                console.log(pwd);
                console.log(rpwd);
            $.ajax({
              url: 'backend',
              type: 'POST',
              data: {pwd2:pwd, rpwd:rpwd},
              success: function(result2){
            console.log(result2);
            if(result2 == "Password Mismatched"){
              document.getElementById("rpwd").style.borderColor="red";
            }
            else{
              document.getElementById("rpwd").style.borderColor="green";
            }

              $('#pwdreerror').html(result2);
            }
          
            });
        
      }





</script>
 <script>
function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<p id="text">WARNING! Caps lock is ON.</p>

<script>
var input = document.getElementById("pwd");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
</body>
</html>    