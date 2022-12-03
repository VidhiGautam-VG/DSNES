<!--?php 
	include "navigation.php";
 ?>-->
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<!---title logo--->
	  <link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

	<!-------CSS Links----->
	<link rel="stylesheet" type="text/css" href="assets/css/contact.css">
	<style type="text/css">
		body{
	background-color: #4158D0;
	background-image: linear-gradient(238deg, #4158D0 0%, #35d7e2 22%, #FFCC70 49%, #4271f1 75%, #1412ef 100%);
	}
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
</head>
<body>
		<div class="closebutn">
        			<span  onclick="location.href='index.php';">&times;</span>
  				</div>
  				<br><br>
	<div class="head">
		<h1>Contact US!</h1>	
	</div>
		<section class="contact">
				<form action="" method="post">
					<div class="box">
					<h2>Send Message</h2>
					<br>
						<div class="inputBox">
							<input type="text" name="Scholar" placeholder="Scholar No." required="required">
						</div>
						<div class="inputBox">
							<input type="text" name="Name" placeholder="Full Name" required="required">
						</div>

						<div class="inputBox">
							<input type="tel" name="Mobile" placeholder="Mobile" pattern="[0-9]{10}" required="required">	
						</div>
						
						<div class="inputBox">
							<textarea name="Message" placeholder="Type your Message..." required="required"></textarea>
						</div>
						<br>
						<div class="inputBox">
							<input type="submit" name="submit" value="Send">
						</div>
						</div>
				</form>
				</div>
			</div>
		</section>
</body>
</html>

<?php
include "connection.php" ;
if(isset($_POST["submit"])){
$Scholar = $_POST['Scholar'];
$Name = $_POST['Name'];
$Mobile = $_POST['Mobile'];
$Message = $_POST['Message'];
header("location:slideshow.php");

   $sql = "INSERT INTO contact(scholar, Name, Mobile, Message) VALUES('$Scholar','$Name','$Mobile','$Message')";
		  $result = mysqli_query($conn, $sql);

        if ($result) {
				echo '<script>alert("Your Message is Sent. Thank You! For Contacting US.")</script>';
			}
}
?>