<?php

session_start();
if(!isset($_SESSION['submit']) || $_SESSION['submit']!=true){
 	header("location: login.php");
  exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <!---title logo--->
  <link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	 <style type="text/css">
      body{
        background-image : linear-gradient(rgba( 0,0,0,0.75 ) , rgba( 0,0,0,0.75 ) ) , url("b.jpg") ;
        background-size : cover ;
        background-position : center ;
      }
      
    </style>
</head>
<body>
	<div class = "banner">
         <div class = "navbar">
              <img src = "N.png" class ="logo">
              <ul>
                   <li><a href="index.php">Home</a></li>
                   <li><a href="apply.php">Apply Now</a></li>
                   <!--<li><a href="#">Notification</a></li>-->
                   <li><a href="contact.php">Contact</a></li>
                   <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>

            <div class="content">
              <a href="apply.php">
              <button type="submit"><span></span><h1>Get Started</h1></button>
              </a>
            </div>
    </div>
</body>
</html>