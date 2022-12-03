<?php 

include("connection.php");
include("footer.php");
include("nav.php")

?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registered Student</title>
	<!---title logo--->
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div class="card-body">
		<div style="margin-top: 30px;" class="table-responsive">
			<table align="center" >
				<thead>
					<tr style="font-weight: bolder; border: 2px black; font-size: 3rem;">
						<td>S.No.</td>
						<td>Name</td>
						<td>Father's Name</td>
						<td>Date of Birth</td>
						<td>Scholar No.</td>
						<td>Enrollment</td>
						<td>Course</td>
						<td>Department</td>
						<td>Mobile No.</td>
						<td>E-mail</td>
					</tr>
				</thead>

				<tbody>
					
					<?php 
						$i=0;
						$sql= "select * from users order by user";
						$result1 = mysqli_query($conn,$sql);							
							while ($rows=mysqli_fetch_array($result1)) {
								$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $rows['Name']; ?></td>
						<td><?php echo $rows['Father']; ?></td>
						<td><?php echo $rows['DOB']; ?></td>
						<td><?php echo $rows['scholar']; ?></td>
						<td><?php echo $rows['enrollment']; ?></td>
						<td><?php echo $rows['course']; ?></td>
						<td><?php echo $rows['Department']; ?></td>
						<td><?php echo $rows['mobile']; ?></td>
						<td><?php echo $rows['mail']; ?></td>
					</tr>
					
					<?php
						}
					?>

				</tbody>
			</table>
		</div>
	</div>
</body>
</html>

