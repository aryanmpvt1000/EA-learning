<?php
        if ($_SERVER['REQUEST_METHOD']=='POST'){
         
//connect database 

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
        }
?>