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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apply Now</title>
	<!---------CSS Links Only---------->
			<link rel="stylesheet" type="text/css" href="assets/css/capp.css">
	  <!----------END------->

	  <!-------------Javascript Link---------------->
	  	<script type="text/javascript"></script>
	  	
</head>
<body>
		<div class="log">
            <div class="alert">
        		<span class="closebtn" onclick="location.href='index.php';">&times;</span>
  			</div>
                <form name="applyform" class="form" action="" onsubmit= "return validateform()" method="post" required>
                    <div class="box">
                    	<h1>Apply for No-Dues.</h1><br>
		          		<h3>Go Easy!</h3>
                        
                        <div class="inputBox">
                            <input type="text" name="scholar" placeholder="Enter Scholar No." required>
                        </div>
                       
                        <div class="inputBox">
                            <input type="submit" name="submit" value="Apply">
                        </div>
                        <br>
                    </div>
                </form>
            </div>
</body>
</html>
<?php 
include ('connection.php');
if(isset($_POST["submit"])){
$scholar=	$_POST["scholar"];
$sql = "update users set apply_user = 1 where scholar ='$scholar' " ;
$result =  (mysqli_query($conn,$sql));
if($result){
	echo '<script>alert("Successfully! Applied")</script>';
}
}
?>