<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yinka Enoch Adedokun">
	<meta name="description" content="Simple Forgot Password Page Using HTML and CSS">
	<meta name="keywords" content="forgot password page, basic html and css">
	<title>Forgot Password Page - HTML + CSS</title>
	<link rel="stylesheet" type="text/css" href="assets/css/password.css">
</head>
<body>
		<div class="row">
		<h1>Forgot Password</h1>
		<h6 class="information-text">Enter your Scholar No. to reset your password.</h6>
		<div class="form-group">
			<input type="text" class="input-field" placeholder="Scholar No." name="Scholar" required>
			<button onclick="showSpinner()">Reset Password</button>
		</div>
		<div class="footer">
			<h5>New here? Register. <a href="login.php">Sign Up.</a></h5>
			<h5>Already have an account? <a href="login.php">Sign In/Log In.</a></h5>
		</div>
	</div>
</body>
</html>
