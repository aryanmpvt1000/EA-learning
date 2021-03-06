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
    <link rel="stylesheet" href="http://localhost/E-learning%20project/css/courses.css?version7.1">
    <link rel="icon" href="favicon.ico">
    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
  </head>
  <body>
                                       <!-- header -->
  <header>
   <a href="main.php" id="main_logo"> <video autoplay>
       <source src="video/Logo-2.mp4" type="video/mp4">Browser don't support
     </video> </a>
   <div class="header">
     <nav class="element">
       <ul>
         <li><a href="main.php">Home </a></li>
         <li><a href="about_us.php">About Us</a></li>
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
      <i class="btn btn ">
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
      
      <p class="top"></p>
                                   <!-- courses content  -->
                                   
        <img src="http://localhost/E-learning%20project/images/courses.jpg" alt="" height="400px" width="100%" class="courses_img">
        <section class="text-center container" id="courses_content">
          <div >
            <div id=courses_text>
              <h1 class="fw-light">All available courses</h1>
              <p >Discover a range of free learning content designed to help grow your business or jumpstart your career. You can learn by selecting individual modules, or dive right in and take an entire course end-to-end.</p>
              <p><?php
      if ($reg_button=false){
       echo' <a href="signup.php" class="btn btn-primary my-2">Register Now</a>';
      }
      else
      echo'<a href="about_us.php" class="btn btn-primary my-2">About Us</a>'; 

      ?>
                
              </p>
            </div>
          </div>
        </section>
          <br>
          <br>
                                  <!-- courses  -->
        <main>
        <div class="album py-3 bg-light">
          <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              
              <!-- html  -->
              <div class="col">
                <div class="card shadow-sm">
                  <img src="http://localhost/E-learning%20project/images/html.png" alt="" id="html"></img>
                  <div class="card-body">
                    <h4>Introduction to web development</h4>
                    <p class="card-text"> Lean the Fundamentals of HTML,CSS,JavaScript to Create Fully Customized,
                      Responsive Web Pages.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-lr btn-outline-dark">Enroll Now</button>
                        <small class="text-muted">5hours 30mins</small>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- python  -->
                <div class="col">
                  <div class="card shadow-sm">
            <img src="http://localhost/E-learning%20project/images/python.png" alt="" id="python"></img>

            <div class="card-body">
              <h4>Programming with Python</h4>
              <p class="card-text">
                  Learn real-life Python skills by creating Python database apps,
                  Python web apps, Python scrapers, & many more.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-lr btn-outline-dark">Enroll Now</button>
                <small class="text-muted">4hours 57mins</small>
              </div>
            </div>
          </div>
        </div>
                                          <!-- java  -->
        <div class="col">
          <div class="card shadow-sm">
            <img src="http://localhost/E-learning%20project/images/java1.png" alt="" id="java"></img>

            <div class="card-body">
              <h4>Programming in Java</h4>
            <p class="card-text"> Introduction to Java Programming. Code and run your first Java program in minutes.</p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-lr btn-outline-dark">Enroll Now</button>
                <small class="text-muted">7hours 15mins</small>
              </div>
            </div>
          </div>
        </div>
                                      <!-- react  -->
        <div class="col">
          <div class="card shadow-sm">
            <img src="http://localhost/E-learning%20project/images/react.png" alt=""></img>
            <div class="card-body">
                <h4>Front-End Development in React Framework</h4>
                <p class="card-text"> React Native combines the best parts of native development with React, a best-in-class JavaScript library for building user interfaces.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-lr btn-outline-dark">Enroll Now</button>
                <small class="text-muted">4hours 10mins</small>
              </div>
            </div>
          </div>
        </div>
                                         <!-- angular -->
        <div class="col">
          <div class="card shadow-sm">
            <img src="http://localhost/E-learning%20project/images/angular.png" alt=""></img>
            <div class="card-body">
                <h4>Angular Framework</h4>
                <p class="card-text"> Angular is an application design framework and development platform for creating efficient and sophisticated single-page apps.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-lr btn-outline-dark">Enroll Now</button>
                <small class="text-muted">5hours 16mins</small>
              </div>
            </div>
          </div>
        </div>
                                              <!-- c++ -->
        <div class="col">
          <div class="card shadow-sm">
            <img src="http://localhost/E-learning%20project/images/c++.png" alt=""></img>
            <div class="card-body">
                <h4>C++ pgrograming language</h4>
                <p class="card-text"> C++ is a general-purpose programming language that was developed as an enhancement of the C language to include object-oriented paradigm. It is an imperative and a compiled language. </p>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-lr btn-outline-dark">Enroll Now</button>
                <small class="text-muted">6hours 58mins</small>
              </div>
            </div>
          </div>
        </div>
                                             <!-- swift -->
        <div class="col">
          <div class="card shadow-sm">
            <img src="http://localhost/E-learning%20project/images/swift.jpg" alt=""></img>
            <div class="card-body">
                <h4>IOS application development with Swift</h4>
                <p class="card-text"> Swift is a general-purpose, multi-paradigm, compiled programming language developed by Apple Inc. and the open-source community. </p>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-lr btn-outline-dark">Enroll Now</button>
                <small class="text-muted">10hours 5mins</small>
              </div>
            </div>
          </div>
        </div>
                                           <!-- git github -->
        <div class="col">
          <div class="card shadow-sm">
            <img src="http://localhost/E-learning%20project/images/github.jpg" alt=""></img>
            <div class="card-body">
                <h4>Introduction to Git & Github</h4>
                <p class="card-text"> GitHub, Inc. is a provider of Internet hosting for software development and version control using Git. It offers the distributed version control and source code management functionality of Git, plus its own features.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-lr btn-outline-dark">Enroll Now</button>
                <small class="text-muted">3hours 45mins</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<br>
<br>

<!-- <div class="container"> -->
    <!-- <p class="float-end mb-2" > -->
    <a href="#top" class="container">Back to top</a></p>
  <!-- </div> -->

                                          <!--footer-->
              
                                          <footer >
    <h4 id=footer_text>A community that Helps You in learn and Grow.</h4>
    <h6 align="center">Terms And conditon's are applied</h6>
    <div class="social">

      <span>Contact :</span>
      <svg width="29" height="24" class="hk">
        <path
          d="M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z">
        </path>
      </svg>
      <a href="https://www.twitter.com/">Twitter</a> |
      <svg style="background: black;
    border-radius: 21px;" width="26" height="26" viewBox="0 0 29 29" fill="none" class="hk">
        <path
          d="M5 6.36C5 5.61 5.63 5 6.4 5h16.2c.77 0 1.4.61 1.4 1.36v16.28c0 .75-.63 1.36-1.4 1.36H6.4c-.77 0-1.4-.6-1.4-1.36V6.36z">
        </path>
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M10.76 20.9v-8.57H7.89v8.58h2.87zm-1.44-9.75c1 0 1.63-.65 1.63-1.48-.02-.84-.62-1.48-1.6-1.48-.99 0-1.63.64-1.63 1.48 0 .83.62 1.48 1.59 1.48h.01zM12.35 20.9h2.87v-4.79c0-.25.02-.5.1-.7.2-.5.67-1.04 1.46-1.04 1.04 0 1.46.8 1.46 1.95v4.59h2.87v-4.92c0-2.64-1.42-3.87-3.3-3.87-1.55 0-2.23.86-2.61 1.45h.02v-1.24h-2.87c.04.8 0 8.58 0 8.58z"
          fill="#fff"></path>
      </svg>
      <a href="https://www.linkedin.com/">Linkdin</a> |
      <svg width="29" height="24" class="hk">
        <path
          d="M23.2 5H5.8a.8.8 0 0 0-.8.8V23.2c0 .44.35.8.8.8h9.3v-7.13h-2.38V13.9h2.38v-2.38c0-2.45 1.55-3.66 3.74-3.66 1.05 0 1.95.08 2.2.11v2.57h-1.5c-1.2 0-1.48.57-1.48 1.4v1.96h2.97l-.6 2.97h-2.37l.05 7.12h5.1a.8.8 0 0 0 .79-.8V5.8a.8.8 0 0 0-.8-.79">
        </path>
      </svg>
      <a href="https://www.facebook.com">Facebook</a>
    </div>
  </footer>
  <!--footer-->


  <script type="text/javascript">
                          
  document.querySelector(".profile ul li").addEventListener("click", function() {
    this.classList.toggle("active");
  });
  </script>

  </body>

</html>
