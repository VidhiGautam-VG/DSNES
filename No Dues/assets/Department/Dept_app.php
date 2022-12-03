<?php 
include "menu.php";
include "connection.php";
include "footer.php";

session_start();

// if(!isset($_SESSION['submit']) || $_SESSION['submit']!=true){
// 	header("location: dept_login.php");
// 	exit;
// }
/*-------------   Count Applied Form ------------------*/
$s=$_SESSION['dept_name'];


if($_SESSION['Universal']==0){
$check = "select count(apply_user) from users where apply_user=1 and Department= '$s' ";
}else{
$check = "select count(apply_user) from users where apply_user=1";
}
$output = mysqli_query($conn,$check);
$row2 = mysqli_fetch_array($output);
$total1 = $row2[0];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $s ; ?></title>
	<meta http-equiv="refesh" content="1">
	<!---title logo--->
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

	<link rel="stylesheet" type="text/css" href="cs.css">
</head>
<body>
	<div class="greet">
		<header><strong>Greetings! Department of <?php echo $_SESSION['dept_name']; ?></strong></header>
	</div>
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
						</div>
						<hr style="color:black;width:36rem;margin-left: 7rem;"><br>
						<table style=" text-align: center" border="10" >
							<thead style="font-weight: bolder; text-align: center; ">
								<tr style="background-color: #171c24;">
									<td>S.No.</td>
									<td>Name</td>
									<td>Scholar No.</td>
									<td>Enrollment</td>
									<td>Course</td>
									<td>Department</td>
									<td>Approve</td>
								</tr>
							</thead>

							<tbody>
								<?php 
									$i1=0;
									if($_SESSION['Universal']==0){
									$sql2= "select * from users where apply_user = 1 and Department= '$s' order by user";
								}
									else
									$sql2= "select * from users where apply_user = 1  order by user";

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
									<?php $d=0; $d=$rows6[$s]; ?>
									<td><form style="text-align: center;" method="post">

										<input type="submit"  <?php if($d){?> style="visibility: hidden;" <?php } ?> name="<?php echo $rows6['scholar']; ?>" value="Approve" style="background-color: #4cbb17; border: hidden; border-radius: 5px; font-size: 1rem; margin: 3px; padding: 7px; color: white;" />

                     					<input type="submit"  <?php if($d){?> style="visibility: hidden;"<?php }?> <?php if($d){?> style="visibility: hidden;"<?php } ?> name="<?php echo $rows6['enrollment']; ?>" value="Disapprove" style="background-color:red; opacity: 90%; border: hidden; border-radius: 5px; font-size: 1rem; margin: 3px; padding: 7px; color: white ;"/>
                    								
                    					<?php
                     						if($rows6[$s]==1){
                        						$statement ="APPROVED";
                     						}
                     						if($rows6[$s]==2){
                        						$statement="DISAPPROVED";
                     						}
                   						?>
                     					<p<?php if(!$rows6[$s]==2){?> style="visibility: hidden;"<?php } ?>> <?php echo $statement ; ?></p>

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
</body>
</html>
<?php
/*==============   Approval ======================*/

// if($_SESSION['Universal']==0){
	$sql6= "select * from users where apply_user = 1 AND Department = '$s' order by user";
	$result6 = mysqli_query($conn,$sql6);
// }
// else{
// 	$sql6= "select * from users where apply_user = 1 order by user";
// 	$result6 = mysqli_query($conn,$sql6);
// }


while ($rows6=mysqli_fetch_array($result6)) {
$scholarr=$rows6["scholar"]; 
if(isset($_POST[$scholarr])){
echo $s;
$app = "update users set $s = 1 where scholar = '$scholarr'";
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
$app2 = "update users set $s = 2 where enrollment = '$enroll'" ;
$result9 =  mysqli_query($conn,$app2);

if($result9){

echo "<script> alert('DisApproved')</script>";
}else{
echo "<script> alert('Failed')</script>";
}
}
}
?>