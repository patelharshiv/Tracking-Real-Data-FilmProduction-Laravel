<!DOCTYPE html>
<html>
<head>
	<title><?php
    if(empty(session('fname'))){
     echo session('fname'). " ".session('lname');}
     else{
        echo session('uname');
     }
      ?></title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	
	body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);

}
 html{
    scroll-behavior: smooth;
  }
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600; 
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
   #image1{
      max-height: 60px;
      max-width: 60px;

   }
</style>

</head>
<body>
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
        <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
        <?php
      }
      ?>  </div>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>TRACKING REALDATA FOR FILM PRODUCTION</b></h1>
    <h4>Welcome to prediction of <span class="w3-tag">MOVIES</span></h4>
  </header>



	<div class="container emp-profile">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="" alt="" id="profilephoto" />
                            <div class="file btn btn-lg btn-primary">
                            <div id="photoadd">
                                Change Photo
                            </div>
                                <input type="file" name="attachment2" id="attachment2"  />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       <?php echo session('fname'). " ".session('lname'); ?>
                                    </h5>
                                    <h6>
                                        <?php echo session('work'); ?>
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
              
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo session('user_id'); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo session('fname'). " ".session('lname'); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo session('email'); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo session('mno'); ?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        profilepic();
        $(document).on('change','#attachment2',function(){

            var attachment1 = document.getElementById('attachment2').files[0];
            console.log(attachment1);
            var formdata123 = new FormData();
            formdata123.append('file',attachment1);
            var read1 = "read1";
            $.ajax({
                            url: 'imagebackend',
                            type: 'post',
                            data: formdata123,
                            contentType: false,
                            processData: false,
                            cache:false,
                            beforesend:function(){
                                  $('#photoadd').html("Loading");
                            },
                            success: function(data){
                                console.log(data);
                            var c = document.getElementById('profilephoto');
                            c.src = data;
                            $('#photoadd').html("Change Photo");
                        }
                    
                        });

        });
    });
    function profilepic(){
        var read = "read";
        $.ajax({
            url:"backend4",
            type:"post",
            data:{read:read},
            success:function(data){
                console.log(data);
                if(data == "images/pp1.png"){
                    $('#photoadd').html("Add Photo");
                    var c = document.getElementById('profilephoto');
                    c.src = data;
                }
                else{
                    $('#photoadd').html("Change Photo");
                    var c = document.getElementById('profilephoto');
                    console.log(data);
                    c.src = data;

                }

            }
        });
    }
    function myfunction(){
    


    }

</script>
</body>
</html>