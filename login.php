<?php
          $login = false;
          $showError= false;
          //connect database 
        if ($_SERVER['REQUEST_METHOD']=='POST'){
          include 'php/db_connect.php';
         $email=$_POST['Email'];
         $password=$_POST['Password'];
         


  //  insert data in table
 

  $sql="SELECT email , password FROM signup WHERE email='$email' AND password='$password'";
  
  $result =mysqli_query ($conn , $sql);
  $num= mysqli_num_rows ($result);

  if ($num==1) {
    $login=true;
    //session start
    session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("location: main.php");
            } 
            else{
                $showError = "Invalid Credentials";
            }
        }
else{
    echo '';
   }
        
   ?>



<!DOCTYPE html>
<html lang="en">
<head>

  <title>Login in</title>
  <link rel="stylesheet" href="css/login.css" type="text/css">
  <link rel="icon" href="favicon.ico" type="image/ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script type = "text/javascript">
function validate() {

  if( document.myForm.Email.value == "") {
     alert( "Please provide your Email!" );
     document.myForm.Email.focus() ;
     return false;
    }           
    if( document.myForm.Password.value == "" ) {
        alert( "Please enter the Password!" );
        document.myForm.Password.focus() ;
     return false;
  }
  if( document.myForm.Email.value != "" )
  {
  var emailID = document.myForm.Email.value;
  atpos = emailID.indexOf("@");
  dotpos = emailID.lastIndexOf(".");
           if (atpos < 1 || ( dotpos - atpos < 2 )) {
     alert("Please enter correct email ID");
     document.myForm.Email.focus() ;
     return false;
  }
  }
  
  return true;
 }

</script> 

</head>
<body>

          <!-- navigation bar -->



   <header>
    <a href="main.php" id="main_logo"> <video autoplay><source src="video/Logo-2.mp4" type="video/mp4" >Browser don't support</video> </a>
    <div class="header" style="width=100%;">
      <nav class="element">
        <ul>
          <li><a href="main.php">Home <selected></a></li>
          <li><a href="about_us.php">About Us</a></li>
          <li><a href="courses.php">Courses</a></li>
          <!-- <li><a href="/blog/">Blog</a></li> -->
          <li><a href="main.php#contact">Contact</a></li>
        </ul>
        
      </nav>
      
        <a href="signup.php"> <button class="register">Register now</button></a>
        
    </div>
  </header>

                                 <!-- login -->

  <img src="http://localhost/E-learning%20project/images/login.webp" width="100%" height="500px" id="photo"><br><br>


  <h1>Login with your EAlearning Account</h1><br><hr id="hr1"><br>
  <div class="login_form">
    <div id="diamond_logo">
      <img src="http://localhost/E-learning%20project/images/yellow-diamond-shape.svg" alt=""width="24" height="24">
    </div>
                                                 <!-- php  -->

<?php
  if($login)
  {
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Success!</strong> You are successfuly logged in.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br>' ;
}
if($showError)
   {
     echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>ERROR!</strong> '.$showError.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
}
?>
    


    <form action = "login.php" method="post" id="form" name = "myForm" onsubmit = "return(validate())" >
        <label >Email</label><br>
        <input type="email" name="Email" autocomplete="off"><br><br>
        <label>Password</label><br>
        <input type="password"name="Password"><br><br>
        <input type="submit" class="Submit" name="submit" value="Login"><br>
    </form><br>
<p>Don't have an account?
<a href="signup.php">Sign Up</a></p>
</div>
<br>
<br>
<br>
<br>

 <!--footer-->
 <footer>
  <h4 align="center">A community that Helps You in learn and Grow.</h4>
  <h6 align="center">Terms And conditon's are applied</h6>

  <div class="social">
      
    <span>Contact :</span>
    <svg width="29" height="24" class="hk"><path d="M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z"></path></svg>
  <a href="www.facebook.com/">Twitter</a> |
  <svg style="background: black;
  border-radius: 21px;" width="26" height="26" viewBox="0 0 29 29" fill="none" class="hk"><path d="M5 6.36C5 5.61 5.63 5 6.4 5h16.2c.77 0 1.4.61 1.4 1.36v16.28c0 .75-.63 1.36-1.4 1.36H6.4c-.77 0-1.4-.6-1.4-1.36V6.36z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.76 20.9v-8.57H7.89v8.58h2.87zm-1.44-9.75c1 0 1.63-.65 1.63-1.48-.02-.84-.62-1.48-1.6-1.48-.99 0-1.63.64-1.63 1.48 0 .83.62 1.48 1.59 1.48h.01zM12.35 20.9h2.87v-4.79c0-.25.02-.5.1-.7.2-.5.67-1.04 1.46-1.04 1.04 0 1.46.8 1.46 1.95v4.59h2.87v-4.92c0-2.64-1.42-3.87-3.3-3.87-1.55 0-2.23.86-2.61 1.45h.02v-1.24h-2.87c.04.8 0 8.58 0 8.58z" fill="#fff"></path></svg>
  <a href="www.instagram.com/">Linkdin</a> |
  <svg width="29" height="24" class="hk"><path d="M23.2 5H5.8a.8.8 0 0 0-.8.8V23.2c0 .44.35.8.8.8h9.3v-7.13h-2.38V13.9h2.38v-2.38c0-2.45 1.55-3.66 3.74-3.66 1.05 0 1.95.08 2.2.11v2.57h-1.5c-1.2 0-1.48.57-1.48 1.4v1.96h2.97l-.6 2.97h-2.37l.05 7.12h5.1a.8.8 0 0 0 .79-.8V5.8a.8.8 0 0 0-.8-.79"></path></svg>
  <a href="www.gmail.com/">Facebook</a>
</div>
</footer>
<!--footer-->

</body>
</html>
