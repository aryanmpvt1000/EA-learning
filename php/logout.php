<?php
// Start the session and get the data
session_start();
session_unset();
session_destroy();
header("location: /E-learning project/login.php");
echo "<br> You have been logged out";
?>
