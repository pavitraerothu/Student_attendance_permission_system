<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="saps.css">
	<link rel="stylesheet" type="text/css" href="saps1.css">
	<link rel="stylesheet" type="text/css" href="registers.css">
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
	<div class="studentform">
		<form action="studentdb.php" method="POST">
			<img src="images/student.png">
			<h2>Student Registration</h2>
			<input type="text" name="student_fname" placeholder="First Name.." required=""><br>
			<input type="text" name="student_lname" placeholder="Last Name.." required=""><br>
			<input type="text" name="student_rgno" placeholder="Register No.." required=""><br>
			<input type="email" name="student_mail" placeholder="Enter Email.." required=""><br>
			<label>Department:</label>
			<select name="student_dept">
				<option value="">Select Dept....</option>
				<option value="CSE">Computer Science and Engineering</option>
				<option value="EEE">Electrical and Electronics Engineering</option>
				<option value="ECE">Electronics and Communication Engineering</option>
				<option value="IT">Information Technology</option>
				<option value="Civil">Civil Engineering</option>
				<option value="Mech">Mechanical Engineering</option>
			</select> <br>
			<input type="text" name="student_phone" placeholder="Phone Number.." required=""><br>
			<input type="password" name="student_password" placeholder="Enter your password..." required=""><br>
			<input type="submit" name="student_submit" value="Submit">
		</form>
	</div>
</body>
</html>