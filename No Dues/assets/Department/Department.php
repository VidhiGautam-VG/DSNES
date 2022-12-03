<?php
include("connection.php");
include("footer.php");

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
	<title>Department</title>
	<!---title logo--->
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="dept.css">
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
					<a href="" class="active"><span class="las la-igloo"></span>
					<span>Dashboard</span></a>
				</li>
				<li>
					<a href=""><span class="las la-clipboard-list"></span>
					<span>Applied Form</span></a>
				</li>
				<li>
					<a href=""><span class="las la-phone"></span>
					<span>Contact Admin</span></a>
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

				<div class="search-wrapper" action="" method="GET">
					<input type="search" placeholder="Search here" name="search" />
					<button type="submit"><span type = "submit" class="las la-search"></span></button>
				</div>

				<div class="user-wrapper">
					<img src="bg.png" width="40px" height="40px" alt="">				
					<div>
						<h4>Vidhi Gautam</h4>
						<small>Super Admin</small>
					</div>
				</div>
		</header>

			<!--------------------Main Content Starts---------------------->
		<main>
			
			<!-------------------Applied Student Details------------------------>
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
						<!-----------------Applied Forms------------------>
					<div class="application">
						<div class="card-body">
							<div class="table-responsive">
								<div class="card-header">
									<h2>Applied Forms</h2>
									<button>See all the applied forms<span class="las la-arrow-right"></span></button>
								</div>
									
									<table style=" text-align: center" >
										<thead style="font-weight: bolder; background-color: #000000; color: #fff;">
											<tr style="color: #fff;">
												<td>S.No.</td>
												<td>Name</td>
												<td>Scholar No.</td>
												<td>Enrollment</td>
												<td>Course</td>
												<td>Department</td>
												<td>E-mail</td>
												<td>Approve</td>
											</tr>
										</thead>

										<tbody>
												<?php 
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
														<?php $d=0; $d=$rows6['Approve']; ?>
														<td><form style="text-align: center;" method="post">

														<input type="submit"  <?php if($d){?> style="visibility: hidden;" <?php } ?> name="<?php echo $rows6['scholar']; ?>" value="Approve" style="background-color: #4cbb17; border: hidden; border-radius: 5px; font-size: 1rem; margin: 3px; padding: 7px; color: white;" />
                     
                     									<input type="submit"  <?php if($rows6['Approve']){?> style="visibility: hidden;"<?php }?> <?php if($d){?> style="visibility: hidden;"<?php } ?> name="<?php echo $rows6['enrollment']; ?>" value="Disapprove" style="background-color:red; opacity: 90%; border: hidden; border-radius: 5px; font-size: 1rem; margin: 3px; padding: 7px; color: white ;"/>
                    								
                    								 <?php
                     									if($rows6['Approve']==1){
                        									$statement ="APPROVED";
                     									}
                     									if($rows6['Approve']==2){
                        									$statement="DISAPPROVED";
                     									}

                     									?>

                     									<p <?php if(!$rows6['Approve']==1){?> style="visibility: hidden;"<?php } ?>> <?php echo $statement ; ?></p>

														</form></td>
													</tr>
													<?php
														}
													?>
										</tbody>
								</table>						
						</div>
					</div>
				</div>
            </div>		
		</main>
	</div>
</body>
</html>
<?php
/*==============   Approval ======================*/
$sql6= "select * from users where apply_user = 1 order by user";
$result6 = mysqli_query($conn,$sql6);

while ($rows6=mysqli_fetch_array($result6)) {
$scholarr=$rows6["scholar"]; 
if(isset($_POST[$scholarr])){
$app = "update users set Approve = 1 where scholar = '$scholarr'" ;
$result7 =  mysqli_query($conn,$app);

if($result7){
echo "<script> alert('Approved')</script>";
}else{
echo "<script> alert('Failed')</script>";
}
}
}

/* ================  Disapproval ===================*/
$sql7= "select * from users where apply_user = 1 order by user";
$result8 = mysqli_query($conn,$sql7);

while ($rows6=mysqli_fetch_array($result8)) {
$enroll=$rows6["enrollment"];
if(isset($_POST[$enroll])){
$app2 = "update users set Approve = 2 where enrollment = '$enroll'" ;
$result9 =  mysqli_query($conn,$app2);

if($result9){

echo "<script> alert('DisApproved')</script>";
}else{
echo "<script> alert('Failed')</script>";
}
}
}
?>