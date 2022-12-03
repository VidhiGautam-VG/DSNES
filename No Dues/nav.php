 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>NavBar</title>

 	<!----------------Google Fonts---------------->
 	<link href="https://fonts.googleapis.com/css?family=Anton|Cabin|Lato|Fjalla+One|Mont-serrat|Roboto&display=swap" rel="stylesheet">


 	<!-----------------Font Awesome---------------->
 	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

 	<!----------------CSS Only--------------------->
 	<link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
 	<style type="text/css">
 	
 	</style>



 </head>

 <body>
 	<div class="dropdown">
 	<nav>
 		<!-------Navbar Logo-------->
 		<a href="#" class="logo">No-Dues</a>

 		<!--------Navbar Toggler------>
 		<input type="checkbox" id="box">
 		<label for="box">
 			<span><i class="fas fa-bars"></i></span>
 		</label>

 		<!-----Navbar Menu----->
 		<ul id="menu">
	 		<li><a href="#">Home</a></li>
	        <li><a href="apply.php">Apply</a></li>

	        <!---<li><a href="#">Application Status</a></li>--->
	        
	        <li><a href="contact.php">Contact</a></li>
	        
	        <!----<li><a href="#">Notification</a></li>---->
	        <li>
	        	<a href="#">Login &nbsp;&nbsp;<span><i class="fas fa-angle-down"></i></span></a>
	        	<ul>
	        		<li><a href="assets/admin/AdminLogin.php">ADMIN</a></li>
	        		<li><a href="#">Department</a></li>
	        		<li><a href="login.php">Student</a></li>
	        	</ul>
	        </li>
	    </ul>
             
 	</nav>
 </div>
 </body>
 </html>