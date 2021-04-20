<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Leave Application</title>
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
	<div class="applyleaves">
		<h2 align="center">Leave Application</h2>
		<form action="" method="POST">
			<label>Regd.No:</label><br>
			<input type="text" name="regdno" required=""><br>
			<label>From Date:</label><br>
			<input type="date" name="fromdate" required=""><br>
			<label>To Date:</label><br>
			<input type="date" name="todate" required=""><br>
			<label>Type of Leave:</label><br><br>
			<select name="std_leavetype">
				<option value="Medical Leave">Medical Leave</option>
				<option value="Casual Leave">Casual Leave</option>
				<option value="Workshop or Internship">Workshop or Internship</option>
				<option value="Other">Other</option>
			</select> <br>
			<label>Purpose:</label><br>
			<textarea name="message" required=""></textarea><br>
			<label style="margin-bottom: 2%;">To which HOD:</label>
			<select name="std_dept">
				<option value="">Select Dept....</option>
				<option value="CSE">Computer Science and Engineering</option>
				<option value="EEE">Electrical and Electronics Engineering</option>
				<option value="ECE">Electronics and Communication Engineering</option>
				<option value="IT">Information Technology</option>
				<option value="Civil">Civil Engineering</option>
				<option value="Mech">Mechanical Engineering</option>
			</select><br>
			<button name="send">Apply</button>
		</form>
	</div>
	</body>
</html>
<?php
	include 'connection.php';
	if(isset($_POST['send']))
	{
		$regdno = $_POST['regdno'];
		$date = date('y-m-d h:i:s');
		$fromdate = $_POST['fromdate'];
		$todate = $_POST['todate'];
		$leavetype =  $_POST['std_leavetype'];
		$msg =  $_POST['message'];
		$dept = $_POST['std_dept'];

		$insert = mysqli_query($conn, "INSERT INTO leave_requests(regdno, applied_date, from_date, to_date, leave_type, message, department) VALUES ('$regdno','$date','$fromdate','$todate','$leavetype','$msg','$dept')");
	
	if($insert)
	{
		echo "<script>alert('Applied Successfully!');window.location='student_leave.php'</script>";
	}
	else{
		echo mysqli_error($conn);
		exit;	
	}
}

?>