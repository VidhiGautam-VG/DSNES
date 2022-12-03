<?php
include("connection.php");
include("menu.php");
include("footer.php");

session_start();
$s = $_SESSION['dept_name'];
// if(!isset($_SESSION['submit']) || $_SESSION['submit']!=true){
// 	header("location: dept_login.php");
// 	exit;
// }

/*-------------   Count Applied Form ------------------*/
$check = "select count(apply_user) from users where apply_user=1 ";
$output = mysqli_query($conn,$check);
$row2 = mysqli_fetch_array($output);
$total1 = $row2[0];

/*-------------   Count Approved Form ---------------*/
$check2 = "select count($s) from users where $s=1";
$output2 = mysqli_query($conn,$check2);
$row3 = mysqli_fetch_array($output2);
$total2 = $row3[0];

/*------------   Count Disapproved Form ----------------*/
$check4 = "select count($s) from users where $s=2";
$output4 = mysqli_query($conn,$check4);
$row5 = mysqli_fetch_array($output4);
$total4 = $row5[0];

/*------------   Count Pending Form ----------------*/
$check3 = "select count(*) from users where apply_user=1 AND Department = '$s' AND  $s=0 ";

$output3 = mysqli_query($conn,$check3);
$row4 = mysqli_fetch_array($output3);
 $rowcount = mysqli_num_rows( $output3 );
$total3 = $row4[0];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-spale=1">
	<title><?php echo $_SESSION['dept_name']; ?></title>
	<!---title logo--->
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->


	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Department_main.css">
</head>
<body>

			<!--------------------Main Content Starts---------------------->
		<main>
			<h1 style="background-color: white; text-align: center;">Welcome! Department of <?php echo $_SESSION['dept_name'] ?></h1>
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
				<div class="card-single">
					<div>
						<h3><?php echo $total2 ?></h3>
						<span>Approved Form</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h3><?php echo $total4 ?></h3>
						<span>Disapproved Form</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>
				<!--div class="card-single">
					<div>
						<h3><!?php echo $total3 ?></h3>
						<span>Pending Form</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div-->
			</div>

			<div class="recent-grid">
						<!-----------------Applied Forms------------------>
					<div class="application">
						<div class="card-body">
							<div class="table-responsive">
								<div class="card-header">
									<h2>Applied Forms</h2>
								</div>
									<br><br>
									<table style=" text-align: center" >
										<thead style="font-weight: bolder; background-color: #000000; color: #fff;">
											<tr style="color: #fff; background-color: black;">
												<td>S.No.</td>
												<td>Scholar No.</td>
												<td>Name</td>
												<td>Enrollment</td>
												<td>Course</td>
												<td>Department</td>
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
														<td><?php echo $rows6['scholar']; ?></td>
														<td><?php echo $rows6['Name']; ?></td>
														<td><?php echo $rows6['enrollment']; ?></td>
														<td><?php echo $rows6['course']; ?></td>
														<td><?php echo $rows6['Department']; ?></td>
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
