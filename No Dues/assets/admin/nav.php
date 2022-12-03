<?php 

include("connection.php");
session_start();
$user = $_SESSION['username'];

?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!---title logo--->
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<title></title>
</head>
<body>
	<!------------Navigation------------------>
	<input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span><img style="align-items: center;" src="N.png" width="80px" height="80px" ><br><span>No Dues</span></h2>
		</div>
			<br><br>

			<!----------Menu------------>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="Admin.php" class="active"><span class="las la-igloo"></span>
					<span>Dashboard</span></a>
				</li>
				<li>
					<a href="applied.php"><span class="las la-clipboard-list"></span>
					<span>Applied Form</span></a>
				</li>
				<!--li>
					<a href="cont_info.php"><span class="las la-phone"></span>
					<span>Contact Form</span></a>
				</li-->
				<li>
					<a href="regi_std.php"><span class="las la-receipt"></span>
					<span>Registered Student</span></a>
				</li>
						<div class="card-body">
					
				<li>
					<a href="logout.php"><span class="las la-user-circle"></span>
					<span>Logout</span></a>
				</li>
			</ul>
		</div>	
	</div>
			<!------------Menu & Navigation Ends--------------->

			<!--------------Top Menu Starts----------------------->
	<div class="main-content">
		<header>
			<h2>
				<label for="nav-toggle">
					<span class="las la-bars"></span>
				</label>
				Dashboard
			</h2>

				<div class="user-wrapper">
					<span class="las la-user"></span>
					<div>
						<h4><?php echo $user; ?></h4>
					</div>
				</div>
		</header>
</body>
</html>

