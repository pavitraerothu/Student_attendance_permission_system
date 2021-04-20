<?php 
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Faculty and Student Login</title>
	<link rel="stylesheet" type="text/css" href="saps.css">
	<link rel="stylesheet" type="text/css" href="saps1.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.facultylogin input[type="email"]{
	border-radius: 15px;
	font-size: 15px;
	padding-left: 10px;
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
	<div class="nav">
		<ul>
			<li><a href="index.html"><i class="fa fa-home"></i>HOME</a></li>
			<li><a href="#"><i class="fa fa-user-plus"></i>REGISTER<i class="fa fa-angle-right"></i></a>
				<div class="sub-nav1">
					<ul>
						<li><a href="studentregister.php">STUDENT</a></li>
						<li><a href="facultyregister.php">FACULTY</a></li>
					</ul>
				</div>
			</li>
			<li><a href="#"><i class="fa fa-users"></i>LOGIN<i class="fa fa-angle-right"></i></a>
				<div class="sub-nav1">
					<ul>
						<li><a href="adminlogin.php">ADMIN</a></li>
						<li><a href="login.php">STUDENT & FACULTY</a></li>
					</ul>
				</div>
			</li>
			<li><a href="contact.html"><i class="fa fa-phone"></i>CONTACT</a></li>
			<li><a href="aboutus.html"><i class="fa fa-user"></i>ABOUT US</a></li>
		</ul>
	</div>
	<div class="facultylogin">
		<form action="" method="POST">
			<img src="images/faculty.png">
			<h2>Faculty Login</h2>			
			<input type="email" name="facultyuser_name" placeholder="Email.."><br>
			<input type="password" name="faculty_pass" placeholder="Password.."><br>
			<input type="submit" value="Login" name="faculty_submit">
		</form>
	</div>
	<div class="studentlogin">
		<form action="" method="POST">
			<img src="images/student.png">
			<h2>Student Login</h2>			
			<input type="text" name="studentuser_name" placeholder="Register number.."><br>
			<input type="password" name="student_pass" placeholder="Password.."><br>
			<input type="submit" value="Login" name="student_submit">
		</form>
	</div>
</body>
</html>


<?php

	if (isset($_POST['student_submit'])) {
		$std_user = $_POST['studentuser_name'];
		$std_psw = $_POST['student_pass'];
		$query = "SELECT * FROM student WHERE regdno = '$std_user' && password = '$std_psw'";
		$data = mysqli_query($conn,$query);
		$total = mysqli_num_rows($data);
		if($total == 1){
			$_SESSION['login_user'] = $std_user;
			header('location:studenthome.php');
		}
		else{
			echo "<script>alert('login failed!password or user name is wrong!');window.location='login.php'</script>";
		}
	}
?>

<?php
	if(isset($_POST['faculty_submit'])){
		$fac_user = $_POST['facultyuser_name'];
		$fac_psw = $_POST['faculty_pass'];
		$query1 = "SELECT * FROM faculty WHERE fac_mail = '$fac_user' && fac_pass = '$fac_psw'";
		$data1 = mysqli_query($conn,$query1);
		$total1 = mysqli_num_rows($data1);
		if($total1 == 1)
		{
			$_SESSION['faculty_login_user'] = $fac_user;
			header('location:facultyhome.php');
		}
		else {
			# code...
			echo "<script>alert('Login failed! password or user name is wrong!'); window.location='login.php'</script>";
		}
	}
?>