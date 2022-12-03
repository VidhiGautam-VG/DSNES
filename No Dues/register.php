<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>

	<!---------CSS Links Only---------->
			<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	  <!----------END------->
</head>
<body>

		<div class="apply">	
					<h1>Register Yourself</h1>
						<form>
						<label>First Name: </label>
						<input type="text" name="first" id="name" placeholder="Enter Your First Name">
							<br>
						<label>Last Name: </label>
						<input type="text" name="last" id="name" placeholder="Enter Your Last Name">
							<br>
						<label>Father's Name: </label>
						<input type="text" name="father" id="name" placeholder="Enter Your Father Name">
							<br>
						<label>Password: </label>
						<input type="password" name="password" id="password" placeholder="Enter Your Password">
							<br>
						<label>Scholar No: </label>
						<input type="text" name="scholar" id="name" placeholder="Enter Your Scholar No">
							<br>
						<label>Enrollment No: </label>
						<input type="text" name="enroll" id="name" placeholder="Enter Your Enrollment No">
							<br>
						<label>Batch: </label>
						<input type="text" name="batch" id="name" placeholder="Enter Your Batch ">
							<br>
						<label>Mobile No: </label>
						<input type="text" name="phone" id="name" placeholder="Enter Your Mobile No ">
							<br>
						<label>E-mail: </label>
						<input type="email" name="mail" id="name" placeholder="Enter Your E-mail Address ">
							<br>
						<label>DOB: </label>
						<input type="text" name="dob" id="name" placeholder="Enter Your DOB ">
							<br>
						<label>Gender: </label>
						<input type="radio" name="gender" id="male">
						<span id="male"> Male</span>
						<input type="radio" name="gender" id="female">
						<span id="female"> Female</span>
							<br><br>
						
						<input type="submit" name="submit" value="Submit">
					</form>
	
</body>
</html>

<!--REGISTER-->

<?php
include "connection.php";
error_reporting(0);
if(isset($_POST["Submit"])){
$Scholar = $_POST['Scholar'];
$Name = $_POST['Name'];
$Course = $_POST['Course'];
$Batch = $_POST['Batch'];
$Mobile = $_POST['Mobile'];
$password = $_POST['password'];

   $sql = "INSERT INTO users (scholar, Name, Course, Batch, Mobile, Password) VALUES('$Scholar','$Name','$Course','$Batch','$Mobile','$password')";
		  $result = mysqli_query($conn, $sql);

        if ($result) {
	echo '<script>alert("You are Registered.")</script>';
	}
}

?>