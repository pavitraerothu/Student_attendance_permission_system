<?php
	session_start();
	include("connection.php");
	include("notify.php");
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Faculty Profile</title>
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
	<div class="faculty_profile_container">
		<form action="" method="POST">
			<button class="btn_default" name="faculty_edit">Edit</button>
		</form>
		<div class="faculty_wrapper">
			<?php 
				$facquery = "SELECT * from faculty where fac_mail ='$_SESSION[faculty_login_user]'";
				$q=mysqli_query($conn,$facquery);
			?>
			<h2 align="center">My Profile</h2>
			<?php 
				$row1 = mysqli_fetch_assoc($q);
			?>
			<img src="images/profile.png" height="100px" width="100px"><br>
			<h3 align="center">Welcome</h3>
			<?php
				echo "<table border=2px align=center style=font-size:18px>";
					echo "<tr>";
						echo "<td>";
							echo "<b>Faculty Name: </b>";
						echo "</td>";
						echo "<td>";
							echo $row1['fac_name'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Designation: </b>";
						echo "</td>";
						echo "<td>";
							echo $row1['designation'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>ID No: </b>";
						echo "</td>";
						echo "<td>";
							echo $row1['fac_idno'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Email Id: </b>";
						echo "</td>";
						echo "<td>";
							echo $row1['fac_mail'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Password: </b>";
						echo "</td>";
						echo "<td>";
							echo $row1['fac_pass'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b>Department: </b>";
						echo "</td>";
						echo "<td>";
							echo $row1['fac_dept'];
						echo "</td>";
					echo "</tr>";
				echo "</table>";
			?>
		</div>
	</div>
	</body>
</html>