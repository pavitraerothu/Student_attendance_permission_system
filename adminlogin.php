<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
	<div class="adminlogin">
		<form action="" method="POST">
			<img src="images/admin.png">
			<h2>Admin Login</h2>			
			<input type="text" name="uname" placeholder="Username.." required=""><br>
			<input type="password" name="psw" placeholder="Password.." required=""><br>
			<input type="submit" value="Login" name="login">
		</form>
	</div>
</body>
</html>

<?php

	if (isset($_POST['login'])) {
		$user = $_POST['uname'];
		$pass = $_POST['psw'];
		$query = "SELECT * FROM admintable WHERE uname = '$user' && psw = '$pass'";
		$data = mysqli_query($conn,$query);
		$total = mysqli_num_rows($data);
		if($total == 1){   
			$_SESSION['User_name'] = $user;
			header('location:adminpage.php');
		}
		else{
			echo "<script>alert('login failed!');window.location='adminlogin.php'</script>";
		}
	}
?>