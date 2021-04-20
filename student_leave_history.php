<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Leaves History</title>
		<link rel="stylesheet" type="text/css" href="saps.css">
	<link rel="stylesheet" type="text/css" href="saps1.css">
	<link rel="stylesheet" type="text/css" href="student_style.css">
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
	<div class="nav" style="font-size: 17.5px;">
		<ul>
			<li><a href="studenthome.php"><i class="fa fa-user"></i>Profile</a></li>
			<li><a href="student_leave.php"><i class="fa fa-pencil-square-o"></i>Apply Leave</a></li>
			<li><a href="student_leave_history.php"><i class="fa fa-check-circle-o"></i>Approvals</a></li>
			<li><a style="color: red;" href="faculty_student_logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
		</ul>
	</div>	
	</body>
</html>