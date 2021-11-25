<?php
session_start();
$reg_button = true;

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  $reg_button=false; 
  header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="icon" href="/favicon.ico">
    
    
    <title>Profile</title>
  </head>
  <body>


               <!-- START NAVIGATION-->


  <header>
    <a href="main.php" id="main_logo"> <video autoplay>
        <source src="video/Logo-2.mp4" type="video/mp4">Browser don't support
      </video> </a>
    <div class="header">
      <nav class="element">
        <ul>
          <li><a href="main.php">Home <selected></a></li>
          <li><a href="about_us.php">About Us</a></li>
          <li><a href="courses.php">Courses</a></li>
          <!-- <li><a href="/blog/">Blog</a></li> -->
          <li><a href="main.php#contact">Contact</a></li>
        </ul>
      </nav>
      <?php
      if ($reg_button=false)
      echo'
      <a href="signup.php"> <button id="register">Register now</button></a>
      <a href="login.php"> <button id="login">login</button> </a>';
      else{
        echo'
        <input type="text" id="search" name="search" placeholder="What do you want to learn?"> 
         ';

      }
      ?>
      </div>
    </header>                   
                                              <!-- dropdown  -->
      <div class="profile" >
        <ul type="none">
          <li>
      <i >
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class=" bi bi-person" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" bi bi-chevron-down" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
    </svg>
  </i>
  <p id="profile_name"> <?php echo $_SESSION['email'] ?>
    </p>
 

<div id="dropdown">
    <ul type="none" >
<li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>               Profile</a></li>
     
    <li><a href="#reset_password"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
</svg>                     Settings</a></li>
      
      <li><a href="php/logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></i>                  Signout</a></li>
  </ul>
    </li>
    </ul>
</div>
</div>
  
               <!-- END NAVIGATION-->

                                    <!-- profile photo -->
    <img src="images/profile_bg.png" id="bg_img" height="500vh" width="100%">
    <svg id="profile_circle"xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#42afd8" class="bi bi-circle-fill" viewBox="0 0 16 16">
  <circle cx="8" cy="8" r="8"/>
</svg>
    <svg id="profile_man"xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="white" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
<p id="profile_name1"> <?php 

$servername = "localhost";
$username = "root";
$pass = "";
$database ="ea learning";

// Create connection
$conn = mysqli_connect($servername, $username, $pass, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "";

$email=$_SESSION['email'];
$sql_name= "SELECT `name` FROM `signup` WHERE `email`='$email'";
$result_name= mysqli_query($conn,$sql_name);

$num_name = mysqli_num_rows($result_name);

if($num_name==1){
  $name = mysqli_fetch_assoc($result_name);
  echo "Hello ". $name['name'];
}
?>
</p>


                             <!-- profile info  -->


<h2 id="profile_heading">Profile</h2>
<div class="proflie_info">

 <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#reset_password">Reset password</a></li>
              </ul>


 <div class="tab-content">
            <div class="tab-pane active" id="home">
                   <br>

                  <form class="form" action="updatepass.php" name="myForm" method="post" id="registrationForm" onsubmit="return(checkPasswordMatch())">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" value="<?php
                              $sql_name= "SELECT `name` FROM `signup` WHERE `email`='$email'";
                              $result_name= mysqli_query($conn,$sql_name);
                              $num_name = mysqli_num_rows($result_name);
                              if($num_name==1){
                                $name = mysqli_fetch_assoc($result_name);
                                echo  $name['name'];
                              }
                              ?>">
                          </div>
                      </div>
                      
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Contact</h4></label>
                              <input type="text" class="form-control" name="Contact" id="Contact" placeholder="enter phone no" value="<?php
                                $sql_contact= "SELECT `contact` FROM `signup` WHERE `email`='$email'";
                                $result_contact= mysqli_query($conn,$sql_contact);
                                $num_contact = mysqli_num_rows($result_contact);
                                if($num_contact==1){
                                  $name = mysqli_fetch_assoc($result_contact);
                                  echo $name['contact'];
                                }
                                ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="
                              <?php echo $_SESSION['email'] ?>">
                          </div>
                      </div>
                      <div class="form-group" id="reset_password">
   
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify password</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                         <div id="divCheckPasswordMatch"></div>
                        
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" ><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
               	</form>
                  </div>
                            


</div>


<script type="text/javascript">
                          
      document.querySelector(".profile ul li").addEventListener("click", function() {
        this.classList.toggle("active");
      });
                          
      function checkPasswordMatch() {
        
  var password = $("#password").val();
        var confirmPassword = $("#password2").val();

        if (password != confirmPassword)
            $("#divCheckPasswordMatch").html("Passwords do not match!").addClass('text-danger').removeClass('text-success');

        else
            $("#divCheckPasswordMatch").html("Passwords match.").addClass('text-success').removeClass('text-danger');    
        }            
                          
        </script>
  </body>
</html>
