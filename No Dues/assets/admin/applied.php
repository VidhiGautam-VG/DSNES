<?php
include("connection.php");
include("footer.php");

session_start();
$user = $_SESSION['username'];

/*-------------   Count Applied Form ------------------*/
$check = "select count(apply_user) from users where apply_user=1 ";
$output = mysqli_query($conn,$check);
$row2 = mysqli_fetch_array($output);
$total1 = $row2[0];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-spale=1">
	<title>Applied Forms</title>
	<!---title logo--->
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="admin.css">

	<!-- =================== Javascript File ============================= -->
	<script src="search.js"></script>
	<!-- ==============End============== -->

<style type="text/css">
	.search-container {
  float: right;
}

.search-container input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  background: #3dc; /*color*/
  width: 250px;
}

.search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.search-container button:hover {
  background: #ccc;
}
</style>

</head>
<body>

			<!------------Navigation--------------->
	<input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span><img style="align-items: center;" src="N.png" width="80px" height="80px" ><br><span>No Dues</span></h2>
		</div>
			<br><br>

			<!-------Menu----------->
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="Admin.php" class="active"><span class="las la-igloo"></span>
					<span>Dashboard</span></a>
				</li>
				<li>
					<a href=""><span class="las la-clipboard-list"></span>
					<span>Applied Form</span></a>
				</li>
				<li>
					<a href=""><span class="las la-phone"></span>
					<span>Contact Form</span></a>
				</li>
				<li>
					<a href=""><span class="las la-users"></span>
					<span>Logged In Student</span></a>
				</li>
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
			<!-----------Menu & Navigation Ends-------------->

			<!------------Top Menu Starts--------------------->
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
						<h4><?php echo $user ?></h4>
					</div>
				</div>
		</header>


			<!--------------------Main Content Starts---------------------->
		<main>
			
			<!-------------------Registered Student Details------------------------>
			<div class="cards">
				<div class="card-single">
					<div>
						<h3><?php echo $total1 ?></h3>
						<span>Applied Form</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>
			</div>

			<div class="recent-grid">
				<div class="projects">
						<!-----------------Applied Forms------------------>
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<div class="card-header">
								<h2>Applied Forms</h2>
								<div class="search-container" >
   							  <input type="text" placeholder="Search..." name="" id="searched"> <!--Search by Name, Scholar, Enrollment, Course, Department -->
      						<button type="submit" name="search" onclick="search_value()" ><i class="fa fa-search" ></i></button>
								</div>
								</div>
									
									<table align="center" >
										<thead>
											<tr style="font-weight: bolder; border: 2px black;">
												<td>S.No.</td>
												<td>Name</td>
												<td>Scholar No.</td>
												<td>Enrollment</td>
												<td>Course</td>
												<td>Department</td>
												<td>E-mail</td>
												<td>Application Status</td>
											</tr>
										</thead>

										<tbody>
												<?php 
												$mydepartment=0;
												$i1=0;
														$sql2= "select * from users where apply_user = 1 order by user";
														$result4 = mysqli_query($conn,$sql2);							
														while ($rows6=mysqli_fetch_array($result4)) {
														$i1++;
												?>

													<tr>
														<td><?php echo $i1; ?></td>
														<td><?php echo $rows6['Name']; ?></td>
														<td><?php echo $rows6['scholar']; ?></td>
														<td><?php echo $rows6['enrollment']; ?></td>
														<td><?php echo $rows6['course']; ?></td>
														<td><?php echo $rows6['Department']; ?></td>
														<td><?php echo $rows6['mail']; ?></td>
														<?php
													$m_dept=$rows6['Department'];
													$aprest=	$rows6[$m_dept];
														$apsql= "select * from department where Universal = 1  ";

														$apresult = mysqli_query($conn,$apsql);
														$totalUniversal=mysqli_num_rows($apresult) + 1;							
														while ($aprow=mysqli_fetch_array($apresult)) {
															$deptname=$aprow['dept_name'];
															$scholarn = $rows6['scholar'];
															$apsql2= "select * from users where $deptname= 1 and scholar= $scholarn ";
															$apresult2 = mysqli_query($conn,$apsql2);							
															
															while ($aprow2=mysqli_fetch_array($apresult2)) {
															$mydepartment++;
															}
	 												}
	 												if($aprest==1){
	 													$mydepartment=$mydepartment+1;
	 												}
	 												?>
														<td><?php  echo $mydepartment."/". $totalUniversal; ?></td>
													</tr>
													<?php
														$mydepartment=0;
	 													}
	                   			?>			
										</tbody>
								</table>
						</div>
					</div>
				</div>
		</main>
	</div> 
</body>
</html>