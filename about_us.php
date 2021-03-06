<?php
session_start();
$reg_button = true;

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  $reg_button=false; 
  header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>About Us</title>
    <link rel="stylesheet" href="http://localhost/E-learning%20project/css/about_us.css?version7.1">
    <link rel="icon" href="favicon.ico" type="image/ico">
    
</head>
<body>

                                                <!-- navigation bar -->


   <header>
    <a href="main.php" id="main_logo"> <video autoplay><source src="video/Logo-2.mp4" type="video/mp4" >Browser don't support</video> </a>
    <div class="header">
      <nav class="element">
        <ul>
          <li><a href="main.php">Home <selected></a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="courses.php">Courses</a></li>
          <!-- <li><a href="/blog/">Blog</a></li> -->
          <li><a href="main.php#contact">Contact</a></li>
        </ul>
      </nav>
      
      <?php
      if ($reg_button=false)
      echo'
      <a href="signup.php"> <button id="register">Register now</button></a>';
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
      <i class="btn btn-dark ">
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
<li><a href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>               Profile</a></li>
     
    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
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



                                                <!-- heading -->
  <div id="heading"><hr id="line">
      About us<br>
      <div id="diamond_logo">
      <img src="http://localhost/E-learning%20project/images/yellow-diamond-shape.svg" alt=""width="24" height="24">
    </div>
    </div>
<!-- <br> -->
<div id="our_vision"> 
  <img src="https://hivelife.com/wp-content/uploads/2021/04/Untitled-design-69.jpg" alt="" width="100%" height="300px">
<h5 >Our vision</h5>
<p id="vision_para">We envision a world where anyone, anywhere has the power to transform their life through learning.</p>
</div>
                                                   <!-- about -->
<div id="about">
<p id="about_description"> EA learning partners with more than 200 leading universities companies to bring flexible, affordable, job-relevant online learning to individuals and organizations worldwide. We offer a range of learning opportunities???from hands-on projects and courses to job-ready certificates and degree programs.</p>
<img src="//images.ctfassets.net/00atxywtfxvd/4vOWgNjy4KExR8msqHnJEP/bb1557d60e8a29f6a5f09148f700bff5/partner-logos.png" id="about_img" alt="" style="max-width: 100%;">
</div>

                                            <!-- we believe  -->

  <div id="we_believe">
    <div id="we_believe_content"><br>
      <h3>We believe</h3><br>
      <p>Learning is the source of human progress.</p>
  <br>
  <p> It has the power to transform our world
  from illness to health,
  from poverty to prosperity,
  from conflict to peace.</p>
  <br>
  <p>It has the power to transform our lives
  for ourselves,
  for our families,
  for our communities.</p>
  <br>
  <p>No matter who we are or where we are,
  learning empowers us to change and grow
  and redefine what???s possible.
  That???s why access to the best learning is a right, not a privilege.</p>
  <br>
  <p>And that???s why EA learning is here.
  We partner with the best institutions
  to bring the best learning
  to every corner of the world.</p>
  <br>
  <p>So that anyone, anywhere has the power to
  transform their life through learning.</p>

    </div>

  </div>
<br>

                                      <!-- our team  -->

  <div id="team">
    <h1 align="center">Our Team</h1><br>
<div id="team_members">
  <div id="aryan">
    <img class="profile_pic" src="http://localhost/E-learning%20project/images/aryan.jpg" alt="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">
    <br>
    <strong>Aryan Mittal</strong><br>
    <span>Ceo, web developer</span><br>
    <p >Aryan mittal student of IINTM of batch BCA 2019-22. <br>Roll no 02324402019 Batch BCA E1.</p>
  </div>
  <br>
  <div id="ekansh">
    <img class="profile_pic" src="http://localhost/E-learning%20project/images/ekansh.jpg" alt="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">
    <br>
    <strong>Ekansh Bhatia</strong><br>
    <span>Founder, chairman, web developer</span>
    <p >Ekansh Bhatia student of IINTM of batch BCA 2019-22.<br> Roll no 03224402019 Batch BCA E1.</p>
  </div>

</div>

  </div>
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


  
  <script>
      function myFunction() {
        (document.getElementById('dropdown').classList.toggle('show'));
      }


      document.querySelector(".profile ul li").addEventListener("click", function() {
  this.classList.toggle("active");
});

     </script>
</body>
</html>
