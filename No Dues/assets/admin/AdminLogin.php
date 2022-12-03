<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
		<!---title logo--->
			<link rel="shortcut icon" type="image/png" href=".\img\DSVV.png"/>
		<!------end----->

		<!---------CSS Links Only---------->
			<link rel="stylesheet" type="text/css" href="AdminLogin.css">
			<style type="text/css">
				.closebutn {
	margin-top: 10px;
	margin-right: 30px;
	color: black;
	font-weight: bolder;
	float: right;
  font-size: 70px;
	line-height: 40px;
	cursor: pointer;
	transition: 0.3s;
	border-radius: 30%;
	background: white;
}
	
.closebutn:hover {
  color: white;
  background: black;
  line-height: 40px;
  border-radius: 30%;
}
			</style>
		<!--------END----->
</head>
<body>

	<div class="closebutn">
        <span  onclick="location.href='../../slideshow.php';">&times;</span>
  	</div>
  		
	<div class="heading">ADMIN LOGIN PAGE</div>
	
		<div class="container-center ">
			<div class="container-row">
				<div class="admin-form">
					<form action="" method="POST">
						<div class="form-group">
							<br>
							<input type="text" placeholder="Username" name="username" value="" class="form-control" autocomplete="off">
							<br><br>
							<input type="password" name="password" placeholder="Password" value="" class="form-control" autocomplete="off">
							<br><br><br><br>
						<input type="submit" name="submit" value="LOGIN" class="submit-btn" >
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>

		<!--PHP CODE START-->

<?php 
include "connection.php";
if(isset($_POST['submit'])){
error_reporting(0);
$username = $_POST['username'];
$password = $_POST['password'];

 $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		  $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
					echo '<script>alert("Welcome Back! You are Logged in.")</script>';
						session_start();
							$_SESSION['submit'] = true;
							$_SESSION['username'] = $username;

							header('location:admin.php');
	}
    else {
        echo '<script>alert("Username or Password does not match.")</script>';
    }
    
}
?>