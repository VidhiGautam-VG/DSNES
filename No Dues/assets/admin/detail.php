<?php
include("connection.php");
$sql= "select * from users";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fetch Data</title>
	<!---title logo--->
	<link rel="shortcut icon" type="image/png" href="N.png" style="border-radius: 50%;" />
	  <!------end----->

</head>
<body>
	<h2>Registered Students Details</h2>
	<table align="right" border="1px" style="width:75%; line-height: 30px;">
		<t>
			<th>User Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Father's Name</th>
			<th>Date of Birth</th>
			<th>Scholar No.</th>
			<th>Course</th>
			<th>Department</th>
			<th>Batch</th>
			<th>Mobile No.</th>
		</t>

		<?php 
			while ($rows=mysqli_fetch_array($result)) {
		?>
			<tr>
				<td><?php echo $rows['user_id']; ?></td>
				<td><?php echo $rows['Fname']; ?></td>
				<td><?php echo $rows['Lname']; ?></td>
				<td><?php echo $rows['Father']; ?></td>
				<td><?php echo $rows['DOB']; ?></td>
				<td><?php echo $rows['scholar']; ?></td>
				<td><?php echo $rows['course']; ?></td>
				<td><?php echo $rows['Department']; ?></td>
				<td><?php echo $rows['batch']; ?></td>
				<td><?php echo $rows['mobile']; ?></td>
			</tr>
			<?php
			}
		?>
	</table>

</body>
</html>