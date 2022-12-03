<?php 
  include"Footer.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA_Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" type="text/css" href="navigation.CSS">
</head>
<body>
    <h1>No-Dues</h1>
      <nav>  
        <div class="container">
          <div class="menu">
            <a href="index.php" class="is-active">Home</a>
            <a href="apply.php">Apply Now</a>
            <a href="contact.php">Contact</a>
            <a href="#">Application Status</a>
            <a href="login.php">Login</a>
            <a href="logout.php">Logout</a>
          </div>

          <button class="hamburger is-active">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
    </nav>

    <script type="text/javascript" src="navigation.js"></script>
</body>
</html>