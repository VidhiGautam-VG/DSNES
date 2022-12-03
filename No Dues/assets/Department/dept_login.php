<!DOCTYPE html>
<html lang="en">
<head>
  <title>Department Login</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!---title logo--->
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

  <!---------CSS Links---------->
  <!-- CSS only -->
		<link rel="stylesheet" type="text/css" href="dept_login.css">
  <!----------END------->
</head>
<body>
	
	<div class="closebutn">
        			<span  onclick="location.href= '../../slideshow.php'">&times;</span>
  				</div>
  				<br><br>
	<div class="form" >
		<div class="form-box">
			<h1 style="text-align: center; padding-top: 2.5rem; color: #fff; text-decoration: underline;">LOGIN</h1>
				<form class="input-group" action="" method="post">
					<input type="text" class="input-field" placeholder="Department name" name="dept_name" required>
					<input type="Password" class="input-field" placeholder="Password" name="password" required>
					<button type="submit" class="submit-btn" name="submit">Log In</button>
				</form>
		</div>
	</div>
</body>
</html>

<!--PHP CODE START-->

<?php 
include "connection.php";

if(isset($_POST['submit'])){

$dept_name = $_POST['dept_name'];
$password = $_POST['password'];

 $sql = "SELECT * FROM department WHERE dept_name='$dept_name' AND password='$password'";
		  $result = mysqli_query($conn, $sql);

			while ($rows6=mysqli_fetch_array($result)) {
		  $num = mysqli_num_rows($result);

        if ($num == 1) {
							echo '<script>alert("Welcome!")</script>';
							session_start();
							$_SESSION['submit'] = true;
							$_SESSION['dept_name'] = $dept_name;
							$_SESSION['Universal'] = $rows6['Universal'];

							header('location: Department_main.php');
						}	
    
    		else {
        	echo '<script>alert("Username or Password does not match.")</script>';
    		}
}
}
?>