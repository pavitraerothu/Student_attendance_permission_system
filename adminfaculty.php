<?php
	include("connection.php");
	error_reporting(0);
	$query = "select * from faculty";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);
	//echo $total;  
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Faculty Record</title>
	<link rel="stylesheet" type="text/css" href="saps.css">
	<link rel="stylesheet" type="text/css" href="saps1.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		<div class="logo">
			<img src="images/logo.png" height="82px" width="100%">
		</div>
		<div class="line1">
			|<br>
			|<br>
			|<br>
			|
		</div>
		<div class="clgname">
			<b>SVECW</b><br>
			Shri Vishnu Engineering College for Women
		</div>
		<div class="line2">
			|<br>
			|<br>
			|<br>
			|
		</div>
		<div class="projectname">
			Student Attendance Permission System
		</div>
		<div class="sapslogo">
			<img src="images/SAPSlogo.png" width="100%" height="70px">
		</div>
	</div>
	<div class="nav">
		<ul>
			<li><a href="adminpage.php"><i class="fa fa-user"></i> Profile</a></li>
			<li><a href="adminstudents.php"><i class="fa fa-users"></i>Students</a></li>
			<li><a href="adminfaculty.php"><i class="fa fa-users"></i>Faculty</a></li>
			<li><a style="color: red;" href="adminlogout.php"><i class="fa fa-sign-out"></i> Logout</a></li>	
		</ul>
	</div><br><br>
	<table align="center" border="2px" style="width: 1100px; line-height: 35px;">
		<tr>
			<th colspan="6"><h2>Faculty Record</h2></th>
		</tr>
		<t>
			<th>ID Number</th>
			<th>Name of Faculty</th>
			<th>Designation</th>
			<th>Email</th>
			<th>Branch</th>
			<th>Password</th>
		</t>	
	<?php
		while ($rows=mysqli_fetch_assoc($data))
		{
	?>
	<tr align="center">
		<td><?php echo $rows['fac_idno']; ?></td>
		<td><?php echo $rows['fac_name']; ?></td>
		<td><?php echo $rows['designation']; ?></td>
		<td><?php echo $rows['fac_mail']; ?></td>
		<td><?php echo $rows['fac_dept']; ?></td>
		<td><?php echo $rows['fac_pass']; ?></td>
	</tr>
	<?php 
		}
	?>
	</table>	
	</body>
</html>