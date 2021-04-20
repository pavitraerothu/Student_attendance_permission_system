<?php
	session_start();
	include("connection.php");
	include("notify.php");
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Students Record</title>
	<link rel="stylesheet" type="text/css" href="saps.css">
	<link rel="stylesheet" type="text/css" href="saps1.css">
	<link rel="stylesheet" type="text/css" href="fac_module_style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.btn_default{
	float: right;
	margin-top:-1%;
	margin-right: 15%;
	width: 70px;
	height: 35px;
}
.faculty_wrapper{
	height: 400px;
	width: 450px;
	margin-top: 3%;
	margin-left: 38%;
}
.faculty_wrapper img{
	margin-left: 38.5%;
	border-radius: 100%;
}
</style>
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
	<div class="nav" style="font-size: 17.5px;">
		<ul>
			<li><a href="facultyhome.php"><i class="fa fa-user"></i> Profile</a></li>
			<li><a href="faculty_students_page.php"><i class="fa fa-users"></i>Students</a></li>
			<li><a href="fac_student_leave_requests.php">
				<i class="fa fa-bell" aria-hidden="true"></i>
				<span class="badge badge-light" id="count"> <?php echo $count ?> </span>
				</button>Requests</a></li>
			<li><a style="color: red;" href="faculty_student_logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
		</ul>
	</div>	
	<br><br>
	<table align="center" border="2px" style="width: 1300px; line-height: 35px;">
		<tr>
			<th colspan="6"><h2>Student Record (
			<?php
			error_reporting(0);
			$query = "select * from student where dept='CSE'";
			$data = mysqli_query($conn,$query);
			$total = mysqli_num_rows($data);
			echo $total;  
		?> )
			</h2></th>
		</tr>
		<t>
			<th>Regd.No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Branch</th>
			<th>Phone No</th>
		</t>	
	<?php
		while ($rows=mysqli_fetch_assoc($data))
		{
	?>
	<tr align="center">
		<td><?php echo $rows['regdno']; ?></td>
		<td><?php echo $rows['fname']; ?></td>
		<td><?php echo $rows['lname']; ?></td>
		<td><?php echo $rows['email']; ?></td>
		<td><?php echo $rows['dept']; ?></td>
		<td><?php echo $rows['phone']; ?></td>
	</tr>
	<?php 
		}
	?>
	</table>
	
	</body>
</html>