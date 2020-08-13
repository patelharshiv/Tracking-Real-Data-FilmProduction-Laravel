<?php
session_start();

if(!empty(session('uname'))){
  header('Location: home1');
exit;
 }
?>
<html>
<head>
  <title>Login Page</title>
  
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
    background: url("images/ii.jpeg");
    background-size:  cover;
    background-position: center;
    position: relative;
    font-family:cursive;
    background:absolute;

  }

  .login-box{
    width: 320px;
    height: 530px;
    background: rgba(0, 0, 5, 0.5);

    color: #fff;
    top: 62%;
    left: 58%;

    position: absolute;
    transform: translate(-45%,-50%);
    box-sizing: border-box;
    padding: 50px 39px;
    margin:auto;
    border-radius: 20px;
}
.btn:hover,
.btn:focus
{
  background:#ff5722;
  transition: 0.2s;

}

.right-box{
  width: 320px;
    height: 530px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 62%;
    left: 36.5%;
    position: absolute;
    transform: translate(-45%,-50%);
    box-sizing: border-box;
    padding: 55px 35px;
    margin:auto;
    border-radius: 20px;
}
.right-title{
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #fff;
  text-align: center;
  text-shadow: 0 2px 4px rgba(0,0,0,0.6);

}
.social{
  
  margin-bottom: 20px;
  
  width: 220px;
  height: 36px;
  border-radius: : 2px; 
  border: none;
  font-size: 15px;
  transition: 0.2s;
  color: #fff;
  
}
.facebook{
  background: #32508e;
}
.facebook:hover{
  background: #32508e;
  border-radius: 5px;
  border-color: white;
  border-width:10px;
  width: 240px;
  height: 40px;
}
 .Twitter{
  background:#55acee;
 }
 .Twitter:hover{
  background: #55acee;
  border-radius: 5px;
  border-color: white;
  border-width:10px;
  width: 240px;
  height: 40px;
}
.Google{
  background:#dd4b39;

}
.Google:hover{
  background: #dd4b39;
  border-radius: 5px;
  border-color: white;
  border-width:10px;
  width: 240px;
  height: 40px;
}
.or{
  position: absolute;
  top:49%;
  margin-right: 79px;
  right:44.3%;
  width: 42px;
  height: 45px;
  background: #efefef;
  border-radius: 50%;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.6);
}
.btn{
  color: #1bc300;
  font-size:17px;
  text-decoration: none;
  text-transform: uppercase;
  transition: 0.5s;
  letter-spacing: 1.5px;
}
.btn:hover{
  background:#ff0000;
  color:#050801;
  box-shadow: 0 0 5px #ff0000;
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
  background: linear-gradient(90deg,transparent,#81ff00);
  animation: animate1 1s linear infinite;

}
#getdata{
  border-radius: 20px;
}
#newuser{
  margin-top: 2%;
}
#loaddata{
  color: green;
}
#unameerror{
  color:red;
}
#text{
  display: none;
  visibility: hidden;
}


  </style>



</head>
<body>
  <div id="container">
  <div class="login-box">
    <center><img src="images/pp1.png" alt="ll1" style="max-width: 60px; max-height: 60px; padding: auto; margin:auto;" align="center"></center>
    

<form type="post">
<label>Login As :</label>
<select required="required" autofocus="autofocus" id="loginas" name="loginas" onchange="myFunction12()">
  <option><div id="getdata">!----Select From Below----!</div></option>
  <option value="Reviewer">Reviewer</option>
  <option value="guest">Guest</option>
  <option value="AnalystExpert">AnalystExpert</option>
  <option value="Admin">Admin</option>
   <option value="productionmanager">Production Manager</option>
</select>
    <div class="form-group">
      <label for="username">Username :</label>
      <input type="Username" class="form-control" id="uname" placeholder="Enter Username" name="uname" oninput="unameerror()">
    </div>
    <div id="unameerror"></div>
    <div class="form-group">
      <label for="pwd">Password :</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>  
      <input type="checkbox" onclick="myFunction()"> Show password
      <p id="text">WARNING! Caps lock is ON.</p>

    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <center><button type="button" class="btn btn-primary " onclick="checkRecord()">Submit</button></center>
    <div id="loaddata"></div>
    <div id="newuser"> New User??? <a href="signin.php">Click Here!!!</a> TO Get Yourself Registered </div>

</form>
</div>

</div>
    <div class="right-box">

<span class="right-title"> Sign up with <br> Social Network</span>

<button class="social facebook" href="https://www.facebook.com/">Log in with facebook</button>
<button class="social Twitter">Log in with Twitter</button>
<button class="social google">Log in with Google+</button>



</div>
<div class="or">

  OR

</div>

<script type="text/javascript">
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  function directingfun(data){
    var check= "You made it right Sir!!!!!";
    console.log(data);
    if(data == check){
      document.getElementById('loaddata').style.color="green";
      $('#loaddata').html(data);
      $(location).attr('href','intronew');
    }else{
      document.getElementById('loaddata').style.color="red";
      var string = data;
      $('#loaddata').html(data);

    }
  }
  
   function unameerror()
      {
              var uname = $('#uname').val();
              var x = document.getElementById("loginas").selectedIndex;
              var y=document.getElementsByTagName("option")[x].value;
              console.log(y);
              console.log(uname);
              $.ajax({
              url: 'uname',
              type: 'POST',
              data: {uname:uname, z:y,"_token": "{{ csrf_token() }}"},
              success: function(result){
              $('#unameerror').html(result);
            }
          
        });
        
    }
   function checkRecord(){
      var username = $('#uname').val();
      var password = $('#pwd').val();
      var x = document.getElementById("loginas").selectedIndex;
      var y=document.getElementsByTagName("option")[x].value;
      console.log(y);
      $.ajax({
          url:"checkrecord",
          type:'post',
          data: {uname:username,
            pwd:password, z:y},
          success: function(data){
         
              var string = data;
              directingfun(string);
          }
      });
    }
    function directingfun12(data){
      var first= "guest";
      var second= "Reviewer";
      var third= "AnalystExpert";
      var fourth= "Admin";
      var fifth= "productionmanager";
      if(data == first)
      {
          $.ajax({
          url:"backend",
          type:'post',
          data: {first:first},
          success: function(data){
            <?php
            $info = session()->get('first');
            if($info){
              session()->flush();
            }
            ?>
            console.log(data);
         }
          });
          $(location).attr('href','intronew');
      }

      else{
         $('#getdata').html(data);
           <?php if(!empty($_SESSION['first'])){unset($_SESSION['first']); }  ?>
      }
    
    }
    function myFunction12() {
      var x = document.getElementById("loginas").selectedIndex;
      var y=document.getElementsByTagName("option")[x].value;
      console.log(y);
      $.ajax({
              url: 'backend',
              type: 'POST',
              data: {y:y},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
              var string = result;
              directingfun12(string);
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



<script>
var input = document.getElementById("pwd");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
    text.style.visibility = "visible";
  } else {
    text.style.display = "none"
    text.style.visibility = "hidden";
  }
});
</script>
</body>
</html>   
