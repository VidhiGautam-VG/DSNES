<?php include "Footer.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title> Dashboard </title>
    <link rel = "stylesheet" href = "assets/css/slideshow.css">
    
    <style type="text/css">
      body{
        background-image : linear-gradient(rgba( 0,0,0,0.75 ) , rgba( 0,0,0,0.75 ) ) , url("bg.png") ;
        background-size : cover ;
        background-position : center ;
      }
      .navbar ul li ul {
        position: absolute;
        width: 200px;
        display: none;
      }
      .navbar ul li ul li { 
        background: #555; 
        display: block; 
      }
      .navbar ul li ul li a {
        display:block !important;
      }
    </style>

</head>
<body>
    <div class = "banner">
         <div class = "navbar">
              <img src = "N.png" class ="logo">
              <ul>
                  <li><a href="slideshow.php">Home</a></li>
                    <li>|</li>
                  <li><a href="assets/admin/AdminLogin.php">Admin</a></li>
                    <li>|</li>
                  <li><a href="assets/Department/dept_login.php">Department</a></li>
                    <!--<li><a href="#">Application Status</a></li>-->
                    <li>|</li>
                  <li><a href="login.php">Student</a></li>
                    <li>|</li>
                  <li><a href="Regi.php">Register</a></li>
                </ul>
            </div>

            <div class="content">
              <h1>APPLY</h1>
              <p>Now, it's easy to get your No-Dues Certificate in few clicks.</p>
              <a href="login.php">
              <button type="submit"><span></span>Apply Now</button>
              </a>
            </div>

      </div>
</body>
</html>
    