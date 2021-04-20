<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Student Profile</title>
		<link rel="stylesheet" type="text/css" href="saps.css">
	<link rel="stylesheet" type="text/css" href="saps1.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.btn_default{
	float: right;
	margin-top:-1%;
	margin-right: 15%;
	width: 70px;
	height: 35px;
}
.student_wrapper{
	height: 400px;
	width: 450px;
	margin-top: 3%;
	margin-left: 38%;
}
.student_wrapper img{
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
			<li><a href="studenthome.php"><i class="fa fa-user"></i>Profile</a></li>
			<li><a href="student_leave.php"><i class="fa fa-pencil-square-o"></i>Apply Leave</a></li>
			<li><a href="student_leave_history.php"><i class="fa fa-check-circle-o"></i>Approvals</a></li>
			<li><a style="color: red;" href="faculty_student_logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
		</ul>
	</div>	
	<div class="student_profile_container">
		<form action="" method="POST">
			<button class="btn_default" name="student_edit">Edit</button>
		</form>
		<div class="student_wrapper">
			<?php 
				$stdquery = "SELECT * from student where regdno ='$_SESSION[login_user]'";
				$q=mysqli_query($conn,$stdquery);
			?>
			<h2 align="center">My Profile</h2>
			<?php 
				$row = mysqli_fetch_assoc($q);
			?>
			<img src="images/profile.png" height="100px" width="100px"><br>
			<h3 align="center">Welcome</h3>
			<h4 align="center"><?php echo "".$_SESSION['login_user']; ?></h4>
			<?php
				echo "<table border=2px align=center style=font-size:18px>";
					echo "<tr>";
						echo "<td>";
							echo "<b>First Name: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['fname'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Last Name: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['lname'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Register No: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['regdno'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Email Id: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['email'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Password: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['password'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Department: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['dept'];
						echo "</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>";
							echo "<b>Phone No: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['phone'];
						echo "</td>";
					echo "</tr>";
				echo "</table>";
			?>
		</div>
	</div>
	</body>
</html>